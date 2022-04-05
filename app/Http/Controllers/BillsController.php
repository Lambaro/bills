<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Bill;


class BillsController extends Controller
{
    public function index()
    {
        $bills = Bill::all();
        return view('bills.index')->with('bills', Bill::orderBy('updated_at', 'DESC')->get());

    }

    public function create()
    {
        return view('bills.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'title'       => 'required',
            'paid'        => 'required',
            'description' => 'required',
        ]);
        $bill = Bill::create([
            'description' => $request->input('description'),
            'title'       => $request->input('title'),
            'todayDate'   => $request->input('todayDate'),
            'dueDate'     => $request->input('dueDate'),
            'paid'        => $request->input('paid'),
            'user_id'     => auth()->user()->id,
        ]);
        return redirect('/bills')->with('message', 'Your bill has been added');

    }

    /*public function show ($id){

        $bill = Bill::find($id);
        return view('bills.show')->with('bill', $bill);

    }*/

    public function edit($id)
    {

        $bill = Bill::find($id);
        return view('bills.edit')->with('bill', $bill);

    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title'       => 'required',
            'paid'        => 'required',
            'description' => 'required',
        ]);
        $bill = Bill::where('id', $id)->update([
            'description' => $request->input('description'),
            'title'       => $request->input('title'),
            'todayDate'   => $request->input('todayDate'),
            'dueDate'     => $request->input('dueDate'),
            'paid'        => $request->input('paid'),
            'user_id'     => auth()->user()->id,
        ]);
        return redirect('/bills');
    }

    public function destroy(Bill $bill, Request $request){

        $bill->delete();
        return redirect('/bills');

    }
}
