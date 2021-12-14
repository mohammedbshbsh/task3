<?php

namespace App\Http\Controllers;// باي كلاس يتم استداعاه يجب علينا ان نستدعي الخاص به

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\task;

class TasksController extends Controller
{
   
  public function __construct()
    {
        $this->middleware('auth');
    }
    // action index
    public  function index()
    {
        $task = task::all();
        //$task = DB::table('_tasks')->get();
      return view('task' , compact('task'));

    }
     // action store
    public  function  store(Request $request)
    {
       /*DB::table('_tasks')->insert([
           'name' =>$request->name ,
           'created_at' => now(),
           'updated_at' => now(),
       ]);*/

        $task ->name = $request->name;
        $task ->save();

       return redirect()->back();
    }

    //action edit
    public function edit($id)
    {

      $task = Task::find($id);

        /*$task = DB::table('_tasks')
            ->where('id' ,'=', $id)
            ->first();*/

        return view('edit', compact('task'));

    }


      // action Update
    public function update(Request $request)
    {
        $id = $request->id;

        $task = new  task;
        $task ->name = $request->name;
        $task ->save();

        /*DB::table('_tasks')
            ->where('id' , $id)
            ->update(['name' =>$request->name,]);
              return  redirect()->route('index');*/

    }

     // action delete
    public function destroy($id)
    {

        task::destroy($id);
        return redirect()->route('index');

      /*  DB::table('_tasks')
             ->delete($id);;
               return redirect()->route('index');*/
    }
}
