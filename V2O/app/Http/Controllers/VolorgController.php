<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Volorg;

class VolorgController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:volorg');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('volorg');
    }
    
    public function showMatched()
    {
        $matched_volunteers = DB::table('volunteers')
        ->join('volorgs', function ($join) {
        $join->on('volorgs.required_skills', '=', 'volunteers.interest1')
            ->orOn('volorgs.required_skills', '=', 'volunteers.interest2')
            ->orOn ('volorgs.required_skills', '=', 'volunteers.interest3')
            ->orOn('volorgs.required_skills', '=', 'volunteers.interest4')
            ->orOn('volorgs.required_skills', '=', 'volunteers.interest5');
        })
            ->orderBy('volunteers.lastName')
            ->get();
        
        $unique = $matched_volunteers->unique('emailAddress');
        $unique->values()->all();

        return view('matchedvolunteers')->with('matched_volunteers', $unique); 
    }
    
    
}
