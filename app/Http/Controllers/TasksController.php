<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public  function index()
    {
        $task = DB::table('_tasks')->get();
      return view('task' , compact('task'));

    }

    public  function  store(Request $request)
    {
       DB::table('_tasks')->insert([
           'name' =>$request->name ,
           'created_at' => now(),
           'updated_at' => now(),
       ]);

       return redirect()->back();
    }
}
