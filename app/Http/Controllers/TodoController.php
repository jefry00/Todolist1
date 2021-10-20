<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use\app\models\todo;

class TodoController extends Controller
{
    public function tampilTodo(){
        //query builder
        $todolist = \DB::table("tbltodo")->get();
        //Eloquent
        //$todolist = todo::all();

        return view("todo")
                ->with("todoList",$todolist);
    }
}
