<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Students::all();
        return view(view: 'student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Students::findOrFail(id:($id));
        return view (view: 'students.show', data: compact(var_name: 'student')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Students::findOrFail(id: $id);
        return view ('student.edit', compact('student'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $validate = $request->validating(rules: [
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:students' . $id,
            'age' => 'required|integer|min:1',
            'address' => 'required|string| max:255',
         ]);
         
         $student = Students::findOrFail(id: $id);
         $student->update(attributes: $validate);
         return redirect()->route(route:'students.index')->with(key: 'success', value: 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Students::findOrFail(id: $id);
        $student->delete();
        return redirect()->route(route:'students.index')->with(key: 'success', value: 'Student deleted successfully');
    }
}
