<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Vo;
use App\Http\Requests\VoCreateRequest;
use App\Http\Requests\VoEditRequest;

class VoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$vos = Vo::all();
		return view('vo/index')->with('vos', $vos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('vo/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VoCreateRequest $request)
    {
        //
		Vo::create([
				'name' => $request->name,
				'email' => $request->email,
				'password' => $request->password,
				'confirm_password' => $request->confirm_password,
				'phone_number' => $request->phone_number,
				'vo_description' => $request->vo_description,
				'required_skills' => $request->required_skills,
				'work_location' => $request->work_location,
				'work_hours' => $request->work_hours,
				'time_period' => $request->time_period,
				'stipend' => $request->stipend
			]
			
		);
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
		$vo = Vo::findOrFail($id);
		return view('vo/show')->with('vo', $vo);
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
		$vo = Vo::findOrFail($id);
		return view('vo/edit')->with('vo', $vo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VoCreateRequest $request, $id)
    {
        //
		//$vos = Input::all();
		$vo = Vo::find($id);
		
		//var_dump($interest);
		$vo->name = $request->name;
		$vo->email = $request->email;
		$vo->password = $request->password;
		$vo->confirm_password = $request->confirm_password;
		$vo->phone_number = $request->phone_number;
	    $vo->vo_description = $request->vo_description;
		$vo->required_skills = $request->required_skills;
		$vo->work_location = $request->work_location;
		$vo->work_hours = $request->work_hours;
		$vo->time_period = $request->time_period;
		$vo->stipend = $request->stipend;
		$vo->save();
		
		//var_dump($interest);
		return redirect ('/vo/'.$id);
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
		$vo = Vo::findOrFail($id);
		$vo->delete();
		return redirect()->back();
    }
}
