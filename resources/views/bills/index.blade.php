@extends('layouts.app')

@section('content')
        <div class="w-4/5 m-auto text-center">
            <div class="py-15 mb-10 border-b border-gray-700">
                <h1 class="text-6xl">
                    All bills
                </h1>
            </div>
        </div>

        @if(session()->has('message'))
            <div class="w-4/5 m-auto mt-10">
                <p class="w-2/6 mb-4 text-gray-500 bg-green-500 rounded-2xl py-4">
                    {{ session()->get('message') }}
                </p>
            </div>
        @endif

        @if(Auth::check())
        <div>
            <a href="/bills/create"
               class="py-3 px-5 bg-blue-500 rounded-3xl text-2xl text-white">Add New Bill +
            </a>
        </div>
        @endif

    @foreach($bills as $bill)
        <div class="bg-gray-300 w-1/6 text-center m-auto mb-10 rounded-3xl">
            <h1 class="font-extrabold text-3xl text-teal-600 pb-4">{{$bill->title}}</h1>

            <h5 class="font-extrabold text-blue-700 text-xl">The bill is paid:</h5><br>
                <p class="font-extrabold text-xl">{{$bill->paid}}
                </p>

            <div class="pb-10">
                <h3 class="font-bold text-3xl text-gray-800 pb-2 pt-6  uppercase">Posted on:</h3>
                <p class="bg-gray-400 font-bold underline text-xl ">{{$bill->todayDate}}
                </p>
            </div>

            <div class="pb-10">
                <h3 class="font-bold text-3xl text-gray-800 pb-2 pt-6 uppercase ">Payment due:</h3>
                <p class="bg-gray-400 font-bold text-red-500 underline text-xl">{{$bill->dueDate}}
                </p>
            </div>

            <div class="pb-10">
                <h3 class="font-bold text-3xl text-gray-800 pb-2 pt-6 uppercase ">Description:</h3>
                <p class="bg-gray-400 font-bold text-xl text-gray-600 ">{{$bill->description}}</p>
            </div>
            <div>
            @if(isset(Auth::user()->id) && Auth::user()->id == $bill->user_id)
                <span>
                    <a href="/bills/{{$bill->id}}/edit"
                    class="text-blue-800 text-2xl">Edit</a>
                </span>
                <span>
                    <form action="/bills/{{$bill->id}}" method="POST">

                        @csrf
                        @method('DELETE')
                    <button type="submit" class="text-red-500 text-2xl">Delete</button>
                        </form>
                </span>
            @endif
            </div>
        </div>
    @endforeach

@endsection
