<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fees;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fees');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $fees= new \App\Fees;
        $fees->name=$request->get('name');
        $fees->admission=$request->get('admission');
        $fees->feespaid=$request->get('feespaid');
        $date=date_create($request->get('date'));
        $format = date_format($date,"Y-m-d");
        $fees->date = strtotime($format);
        $fees->save();
        
        return redirect('fees')->with('success', 'Information has been added');
    } 

    public function searchOne(Request $request){
    
        $search_one = $request->admission;
        $user = Fees::where('admission','LIKE','%'.$search_one.'%')->get();
        if(count($user) > 0)
        return view('Kimani Tabitha.oneresult')->withDetails($user)->withQuery ( $search_one );
        else return view ('home')->withMessage('No Details found. Try to search again !');
    }

    public function searchAll(){
        $all = Fees::get();
        $all = json_decode(json_encode($all));

        return view('Kimani Tabitha.allstudents')->with(compact('all'));
    }
}
