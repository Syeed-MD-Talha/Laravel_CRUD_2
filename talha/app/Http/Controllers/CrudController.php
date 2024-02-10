<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CRUD;

class CrudController extends Controller
{
    public function index()
    {
        return view("index", ["crud" => CRUD::all()]);
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'qualifications' => 'required'
        ]);

        CRUD::create($request->all());

        return redirect(route("first_page"))->with('success', 'Product Updated Successfully');
    }

    public function show($id)
    {

    }
    public function edit($id)
    {

        return view('edit', ['crud' => CRUD::find($id)]);

    }

    public function update(Request $request, $id)
    {
        $crud = CRUD::find($id);
        $crud->update($request->all());
        return redirect(route('view_page'));
    }
    public function destroy($id)
    {
        // $crud = CRUD::find($id);
        // $crud->delete();

        CRUD::destroy($id);

        return redirect(route("view_page"))->with('success', 'Product Updated Successfully');
    }

}
