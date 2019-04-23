<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Model\Volunteer; //Use the Volunteer Model
use App\Http\Requests\VolunteerCreateRequest; //Use the Volunteer Create Request Create

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$volunteer = Volunteer::all();
		return view ('volunteer/welcome')->with('volunteers', $volunteer);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$volunteer = Volunteer::all();
		return view ('volunteer/create')->with('volunteers', $volunteer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolunteerCreateRequest $request)
    {
        //
		Volunteer::create(['firstName' => $request->firstName,
						'lastName' => $request->lastName,
						'homeAddress' => $request->homeAddress,
						'cellNumber' => $request->cellNumber,
						'homeNumber' => $request->homeNumber,
						'idNumber' => $request->idNumber,
						'examNumber' => $request->examNumber,
						'emailAddress' => $request->emailAddress,
						'password' => $request->password,
						'interest1' => $request->interest1,
						'interest2' => $request->interest2,
						'interest3' => $request->interest3,
						'interest4' => $request->interest4,
						'interest5' => $request->interest5]);

		return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

		$ifIdFound = Volunteer::findOrFail($id); //If ID is not found, display error
		$rowMatch = DB::table('volunteers')->where('id',$id)->get();
		return view ('volunteer/show')->with('rowMatch', $rowMatch);
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
}
