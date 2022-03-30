<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bill;


class BillsController extends Controller
{
    public function index(){
        return view('bills.index');
    }

    public function create (){

        return view('bills.create');
    }

    public function store(Request $request){

        $request->validate([
           'title' => 'required',
           'todayDate' => 'required',
           'dueDate' => 'required',
            'description' => 'required',
        ]);

    }

}
