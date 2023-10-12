<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoListController extends Controller
{
    //
    public function saveItem(Request $request){
        // var_dump($request);
        echo json_encode($request->all());
        return view('welcome');
    }
}
