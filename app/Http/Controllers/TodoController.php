<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller


{
    /***
     * index file fucntion
     */
    public function index()
    {
        $todos = Todo::all();

        return  view('index')->with('todos', $todos);
    }

    /**create */

    public function create()
    {
        return view('create');
    }

    /**edit */

    public function edit($id)
    {
        $todos = Todo::find($id);

        return view('edit')->with('todo', $todos);
    }
    /**update */

    public function update(Request $request, Todo $todo)
    {

        $todo->update($request->all());
        return redirect('/');
    }
    /**delete */
    public function delete($id)
    {
        $todos = Todo::where('id', $id)->delete();

        return redirect('/');
    }
    /***store */
    public function store(Request $request, Todo $todo)
    {
        $todo->create($request->all());

        return redirect('/');
    }
}
