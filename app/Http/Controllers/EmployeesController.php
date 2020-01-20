<?php
namespace App\Http\Controllers;

use App\Http\Requests\EmployeesRequest;

class EmployeesController extends Controller
{
	public function index()
	{
		//dd('hella');
		return view('employees.index');

	}

	public function create()
	{
		return view('employees.create');

	}

	public function edit()
	{
		return view('employees.create');

	}

	public function store(EmployeesRequest $request)
	{
		
	}


}