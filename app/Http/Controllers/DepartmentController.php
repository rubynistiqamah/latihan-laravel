<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('department.index', [
            'title' => 'department',
            'departments' => Department::Latest()->get(),
        ]);
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Departmen $departmen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departmen $departmen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departmen $departmen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departmen $departmen)
    {
        //
    }
}
