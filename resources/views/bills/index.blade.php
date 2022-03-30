@extends('layouts.app')

@section('content')
        <div class="w-4/5 m-auto text-center">
            <div class="py-15 mb-10 border-b border-gray-700">
                <h1 class="text-6xl">
                    All bills
                </h1>
            </div>
        </div>
        <div>

            <a href="/bills/create"
               class="py-3 px-6 bg-blue-500 rounded-3xl text-3xl text-white">Add New Bill +</a>
        </div>

        <div class="bg-gray-300 w-1/6 text-center m-auto rounded-3xl">
            <h1 class="font-extrabold text-3xl text-teal-600 pb-4">Electrical bill</h1>

            <h5 class="font-extrabold text-green-700 text-xl">Already Paid </h5>

            <div class="pb-10">
                <h3 class="font-bold text-3xl text-gray-800 pb-2 pt-6  uppercase">Posted on:</h3>
                <p class="bg-gray-400 font-bold underline text-xl ">
                    12.2.2022
                </p>

            </div>
            <div class="pb-10">
                <h3 class="font-bold text-3xl text-gray-800 pb-2 pt-6 uppercase ">Payment due:</h3>
                <p class="bg-gray-400 font-bold  underline text-xl">
                    12.3.2022
                </p>
            </div>
            <div class="pb-10">
                <h3 class="font-bold text-3xl text-gray-800 pb-2 pt-6 uppercase ">Description:</h3>
                <p class="bg-gray-400 font-bold text-xl text-gray-600 ">
                    This bill has to be paid as soon as possible
                </p>
            </div>
        </div>
@endsection
