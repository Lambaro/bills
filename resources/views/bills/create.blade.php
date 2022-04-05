@extends('layouts.app')

@section('content')


    <div class="bg-gray-300 w-3/6 text-center m-auto rounded-3xl h-full">
        <h1 class="uppercase font-extrabold text-gray-800 text-3xl mb-20">
            Add you data here :
        </h1>

        <form action="/bills" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="m-5">
                <label for="title" class="uppercase font-extrabold text-gray-800 mb-10">Name of your bill:</label><br>
                <input type="text" name="title" id="title" placeholder="Name..." class="mb-10">
            </div>

            <div class="m-5">
                <label for="paid" class="uppercase font-extrabold text-gray-800"> 1. Is your bill paid ?</label><br>
                <input name="paid" type="text" id="paid" class="mb-10">
            </div>

            <div class="m-5">
                <label for="todayDate" class="uppercase font-extrabold text-gray-800"> 2. What is today`s date?</label><br>
                <input name="todayDate" type="date" id="todayDate"  class="mb-10">
            </div>

            <div class="m-5">
                <label  for="dueDate" class="uppercase font-extrabold text-gray-800"> 3. Until when you have to pay a bill?</label><br>
                <input name="dueDate" type="date" id="dueDate" class="mb-10">
            </div>

            <div>
                <label for="description"  class="uppercase font-extrabold text-gray-800">4. Add a description:</label><br>
                <textarea name="description" id="description" class=" w-2/6 bg-yellow-200"></textarea>
            </div>

            <button type="submit" class="uppercase mt-10 mb-10 bg-teal-600 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl mt-10">Submit</button>


        </form>
    </div>


@endsection
