<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fees;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=\App\Student::all();
        return view('index',compact('student')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student= new \App\Student;
        $student->name=$request->get('name');
        $student->admission=$request->get('admission');
        $student->faculty=$request->get('faculty');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $student->date = strtotime($format);
        $student->gender=$request->get('gender');
        $student->save();
        
        return redirect('student')->with('success', 'Information has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function search_student(Request $request){
        //check if student exists in the database

        //1. Get the ID from the texfield
        $student_id = request('admission');

        //2. search for a student record in the db
          /*
            An alternative to get the input
            $student_exist = student::where('id','=',Input::get('student_number'))->count();
          */  
        $student_exist = student::where('admission','=',$student_id)->count();

          if($student_exist > 0){
            /*
              student record exists 
              call the function show_student_info
            */

           // return $this->show_student_info(Input::get('student_number'));
              return $this->show_student_info($student_id);

          }else{
            /*
              student record does not exist
              return to homepage
              show error message
            */

            return redirect('/')->with('error_message','The record does not exist');
          }

    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function showall(){
        $student = student::all();

        foreach($student as $s){
            $total_fees = $this->total_fees($s->id);
            $s['total'] = $total_fees;
        }
        $sum_all_fees = fees::all()->sum('amount');
        return view('Kimani Tabitha/allstudents',['students'=>$students, 'all_fees'=>$sum_all_fees]);
    }
    public function total_fees($student_number){
        $student_total_fees = student::find($student_id)->full_name;
        return view('Kimani Tabitha/allstudents',['']);
    }
  
}
