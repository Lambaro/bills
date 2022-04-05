@extends('layouts.app')

@section('content')

    <div class="w-4/5 m-auto text-center">
        <div class="py-15">
            <h1 class="text-6xl">
                Update Your Bill
            </h1>
        </div>
    </div>
    @if($errors->any())
        <div class="w-4/5 m-auto text-center">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="w-1/5 mb-4 text-gray-50 bg-red-500 rounded-2xl py-4">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div  class="bg-gray-300 w-1/6 text-center m-auto mb-10 rounded-3xl">
        <form action="/bills/{{ $bill->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="m-5">
                <label for="title" class="uppercase font-extrabold text-gray-800 mb-10">Name of your bill:</label><br>
                <input type="text" name="title" id="title" value="{{$bill->title}}" placeholder="{{$bill->title}}" class="mb-10">
            </div>

            <div class="m-5">
                <label for="paid" class="uppercase font-extrabold text-gray-800"> 1. Is your bill paid ?</label><br>
                <input name="paid" type="text" id="paid" class="mb-10">
            </div>

            <div class="m-5">
                <label for="todayDate" class="uppercase font-extrabold text-gray-800"> 2. What is today`s
                    date?</label><br>
                <input name="todayDate" type="date" id="todayDate" class="mb-10">
            </div>

            <div class="m-5">
                <label for="dueDate" class="uppercase font-extrabold text-gray-800"> 3. Until when you have to pay a
                    bill?</label><br>
                <input name="dueDate" type="date" id="dueDate" class="mb-10">
            </div>

            <div>
                <label for="description" class="uppercase font-extrabold text-gray-800">4. Add a
                    description:</label><br>
                <textarea name="description" id="description" class=" w-2/6 bg-yellow-200"></textarea>
            </div>

            <button type="submit"
                    class="uppercase mt-10 mb-10 bg-teal-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl mt-10">
                Submit
            </button>


        </form>
    </div>





@endsection
