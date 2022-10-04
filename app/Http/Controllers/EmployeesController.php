<?php

namespace App\Http\Controllers;

use App\employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new employees;
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->phone=$request->input('phone');
        $res->save();
        $request->session()->flash('msg', 'Data Successfully Submitted!');
        return redirect("show");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, employees $employees)
    {
        // dd($);
        $data = [];
        $data['employeeArr'] = employees::all();
        if($request->search){
            $data['employeeArr'] = employees::where('name', 'LIKE', '%' . $request->search . '%')->get();
        }
        return view('welcome', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(employees $employees, $id)
    {
        return view('edit')->with('employeeArr',employees::find($id));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employees $employees, $id)
    {
        $res =employees::find($request->id);
        $res->name=$request->input('name');
        $res->email=$request->input('email');
        $res->phone=$request->input('phone');
        $res->save();
        $request->session()->flash('msg', 'Data Successfully updated!');
        return redirect("show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(employees $employees, $id)
    {
        employees::destroy(array('id',$id ));
        return redirect("show");
    }
}
