<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TaskModel;

class taskController extends Controller
{

    public function index(){
        $tasks = TaskModel::all();
        return view('welcome',['tasks'=>$tasks]);
    }

    public function create(){
        return view('addTask');
    }

    public function store(Request $request){
        $request->validate([
            'name' =>'required|max:255',
            'description' => 'required',
            'developer' => 'required',
        ]);
        TaskModel::create($request->all());
        session()->flash('msg',"Task Created successfully");
        return redirect('/');
    }

    public function delete($id){
        $task=TaskModel::find($id);
        $task->delete();
        session()->flash('msg',"Task Deleted successfully");
        return redirect('/');
    }

    public function edit($id){
        $task=TaskModel::find($id);
        return view('edit',['task'=>$task]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'name' =>'required|max:255',
            'description' => 'required',
            'developer' => 'required',
        ]);
        $task=TaskModel::find($id);
        // error_log($request->all());
        $task->update($request->all());
        session()->flash('msg',"Task updated successfully");
        return redirect('/');
    }

    public function view($id){
        $task=TaskModel::find($id);
        return view('show',['task'=>$task]);
    }

    public function complete($id){
        $task=TaskModel::find($id);
        $task->completed=!$task->completed;
        $task->save();
        session()->flash('msg',"Task Completed successfully");
        return redirect('/');
    }

    public function search(){
        $search_task=$_GET['search'];
        error_log($search_task);
        $tasks=TaskModel::where('name','LIKE','%'.$search_task.'%')->get();
        return view('welcome',['tasks'=>$tasks]);
    }

}
