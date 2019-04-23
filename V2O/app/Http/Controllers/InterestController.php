<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Interest;
//use App\Model\VOInterest;
use App\User;
use App\Http\Requests\InterestCreateRequest;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $interests = Interest::all();

        return view('interest.indextest', compact('interests'));

        // echo "<p>index</p>";
        //
        // $interests = User::find(1)->vointerests->name;
        // //var_dump($interests);
        //
        // foreach ($interests as $interest)
        // {
        //     echo "His interest is: " . $interest->name;
        // }
        //
        //$interests = Interest::all();
        //return view('interest/index')->with('interests', $interests); //passes along with the view the list of interests
    }

    //show all the user records
    public function showAll()
    {
      $interests = Interest::all();

        return view('interest.viewall', compact('interests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('interest/createvol');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InterestCreateRequest $request)
    {
        // associative array
        Interest::create(['lastName' => $request->lastName,
                          'firstName' => $request->firstName,
                          'email' => $request->email,
                          'interest' => $request->interest
                         ]);

        return redirect('interest')->with('success', 'Volunteer successfully created');

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
        $interest = Interest::findOrFail($id);
		    return view('interest/show')->with('interest', $interest);
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
        $interest = Interest::find($id);

        return view('interest.edit', compact('interest'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InterestCreateRequest $request, $id)
    {
        //
        $interest = Interest::findOrFail($id);
		    $interest->firstName = $request->firstName;
    		$interest->lastName = $request->lastName;
    		$interest->email = $request->email;
        $interest->interest = $request->interest;
    		$interest->save();

        return redirect('/interest')->with('success', 'Record updated');

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
        $interest = Interest::findOrFail($id);
		    $interest->delete();
        return redirect('/interest')->with('success', 'Volunteer successfully removed');

    }
}
