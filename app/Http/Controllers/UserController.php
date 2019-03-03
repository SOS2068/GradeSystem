<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User:: all()-> toArray();
        return view ('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, ['Fname' => 'required', 'Lname' => 'required', 'GPA' => 'required']);
        $user = new User(['Fname' => $request->get('Fname'), 'Lname' => $request->get('Lname'), 'GPA' => $request->get('GPA')]);
        $user->save();
        return redirect()->route('user.index')->with('success', 'Saved!');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', compact('user', 'id'));
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
        $this -> validate($request, ['Fname' => 'required', 'Lname' => 'required', 'GPA' => 'required']);
        $user = User::find($id);
        $user-> Fname = $request->get('Fname');
        $user-> Lname = $request->get('Lname');
        $user-> GPA = $request->get('GPA');
        $user->save();
        return redirect()->route('user.index')->with('success', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('user.index')->with('sucess','Delete Complete');
    }
}
