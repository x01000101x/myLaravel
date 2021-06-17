<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //cara 1

        // $student = new Student;
        // $student->name = $request->name;
        // $student->nis = $request->nis;
        // $student->email = $request->email;
        // $student->major = $request->major;

        // $student->save();

        //cara 2. Harus tambah fillable atau guarded di model
        // Student::create([
        //     'name' => $request->name,
        //     'nis' => $request->nis,
        //     'email' => $request->email,
        //     'major' => $request->major
        // ]);

        //cara 3. harus tambah fillable atau guarded di model
        $request->validate([
            'name' => 'required',
            'nis' => 'required|size:8',
            'email' => 'required|email|unique:students',
            'major' => 'required'
        ]);

        Student::create($request->all());

        return redirect('/students')->with('status', 'Input success!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'nis' => 'required|size:8',
            'email' => 'required|email',
            'major' => 'required'
        ]);

        Student::where('id', $student->id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'email' => $request->email,
            'major' => $request->major
        ]);

        return redirect('/students')->with('status', 'Update success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Deleted succesfully!');
    }
}
