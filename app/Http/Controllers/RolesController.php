<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

class RolesController extends Controller
{
public function index(){
	return view('roles.index');
}
public function create()
{
	return view('roles.create');
}
public function edit($id)
{
	return view('roles.edit');
}

public function store(Request $request)
{
 	$role = new Role;
	$role->title = $request->title;
	$role->description = $request->description;
	$role->save();

}

}