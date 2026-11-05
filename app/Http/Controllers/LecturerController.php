<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Lecturer;
use App\Models\Student;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('lecturer.index', [
            'title' => 'lecturer',
            'lecturers' => Lecturer::Latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('lecturer.create', [
            'title' => 'Create lecturer',
            'departments' => Department::Latest()->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required',
        'department_id' => 'required',
    ],
    [
        'name.required' => 'Nama wajib di input',
        'department_id.required' => 'Program Studi wajib di pilih',
    ]
    
    );

    Lecturer::create($validated);
    return to_route('lecturer.index')->withSuccess('Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lecturer $lecturer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lecturer $lecturer)
    {
        return view ('lecturer.edit', [
            'title' => 'Edit lecturer',
            'departments' => Department::Latest()->get(),
            'lecturer' => $lecturer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lecturer $lecturer)
    {
            $validated = $request->validate([
        'name' => 'required',
        'department_id' => 'required',
    ],
    [
        'name.required' => 'Nama wajib di input',
        'department_id.required' => 'Program Studi wajib di ubah',
    ]
    
    );

    $lecturer->update($validated);
    return to_route('lecturer.index')->withSuccess('Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
