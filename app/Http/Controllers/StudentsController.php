<?php

namespace App\Http\Controllers;

class StudentsController extends Controller
{
    public function index()
    {

    	return view('students.index');

    }

    public function create()
    {

    	return view('students.create');

    }
}