<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade ;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade:: all()-> toArray();
        return view ('grade.index', compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, ['subject' => 'required', 'grade' => 'required', 'credit' => 'required']);
        $grade = new Grade(['subject' => $request->get('subject'), 'grade' => $request->get('grade'), 'credit' => $request->get('credit')]);
        $grade->save();
        return redirect()->route('grade.index')->with('success', 'Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grades = user:: find($id)->grade-> all()-> toArray();
        return view ('grade.index', compact('grades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grade = Grade::find($id);
        return view('grade.edit', compact('grade', 'id'));
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
        $this -> validate($request, ['subject' => 'required', 'grade' => 'required', 'credit' => 'required']);
        $grade = Grade::find($id);
        $grade-> subject = $request->get('subject');
        $grade-> grade = $request->get('grade');
        $grade-> credit = $request->get('credit');
        $grade->save();
        return redirect()->route('grade.index')->with('success', 'Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grades = Grade::find($id);
        $grades->delete();
        return redirect()->route('grade.index')->with('sucess','Delete Complete');
    }
}
