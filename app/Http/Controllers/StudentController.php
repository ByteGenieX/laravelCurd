<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->name);
        $data = $request->validate([
            'name'=>'required',
            'class'=>'required',
            'age'=>'required',
        ]);

        $result = Student::create($data);

        if ($result) {
            return redirect("/show")->with('success','data created');
        } else {
            return back()->withInput()->withErrors('Error');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $students=Student::all();
        return view('show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student,$id)
    {
        $decrypted = Crypt::decrypt($id);
        // dd($decrypted);
        $student = Student::find($decrypted);
        return view('edit',['detals'=>$student]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student,$id)
    {
        //
        $data = $request->validate([
            'name'=>'required',
            'class'=>'required',
            'age'=>'required',

        ]);
        $dataSave = Student::findOrFail($id);
        $dataSave->update($data);
        return redirect('/show')->with('success','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student,$id)
    {
        //
    //   Student::deleted($id);
      Student::destroy($id);
       return back()->with('delete','Delete Successfully');

    }
}
