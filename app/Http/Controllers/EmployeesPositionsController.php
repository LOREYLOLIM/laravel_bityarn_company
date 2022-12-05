<?php

namespace App\Http\Controllers;

use App\Models\EmployeesPositions;
use Illuminate\Http\Request;

class EmployeesPositionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeposition = EmployeesPositions::all();
        return view('employeepositionview')->with(compact('employeeposition'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeespositions');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employeeposition = new EmployeesPositions();

        $employeeposition->employeeid = $request->input('employeeid');
        $employeeposition->positionid = $request->input('positionid');
        $employeeposition->assigmentid = $request->input('assigmentid');
        $employeeposition->period = $request->input('period');

        $employeeposition->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeesPositions  $employeesPositions
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeesPositions $employeesPositions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeesPositions  $employeesPositions
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeesPositions $employeesPositions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeesPositions  $employeesPositions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeesPositions $employeesPositions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeesPositions  $employeesPositions
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeesPositions $employeesPositions)
    {
        //
    }
}
