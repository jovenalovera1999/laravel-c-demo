<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    /*
    Name of functions
    index
    show
    create
    store
    edit
    update
    delete
    destroy
    */

    public function index() {
        $genders = Gender::all(); // SELECT * FROM genders;
        return view('gender.index', compact('genders'));
    }

    public function show($id) {
        $gender = Gender::find($id); // SELECT * FROM genders WHERE gender_id = $id;
        return view('gender.show', compact('gender'));
    }

    public function create() {
        return view('gender.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'gender' => ['required']
        ]);

        Gender::create($validated);

        return redirect('/genders')->with('message_success', 'Gender successfully saved.');
    }

    public function edit($id) {
        return view('gender.edit');
    }

    public function update() {

    }

    public function delete() {
        return view('gender.delete');
    }

    public function destroy() {

    }
}
