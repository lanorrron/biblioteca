@extends('layout')
@section('upadate')
    @section('content')

        <div>


            <header>

                <div class="">

                    <div class="py-4 px-8 h-80 mt-20 bg-white rounded shadow-xl w-1/3 border border-black">
                        <form action="{{Route("category.update",$category->id)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <h2 class="  bg-red-500 w-full text-2xl rounded  mb-2 p-2 text-center "><b>update</b></h2>
                            <div class="mb-6">
                                <label for="name" class="block text-gray-800 font-bold">Name:</label>
                                <input type="text" name="name"  placeholder="nameCategory"
                                       class="w-2/3 border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600"
                                required value="{{$category->name}}">
                            </div>
                            <div class="flex gap-5">
                                <a href="{{Route("category.index")}}" class="w-1/3">
                                    <button type="button"
                                            class="cursor-pointer py-2 px-4 block mt-6 bg-pink-500 text-white font-bold text-center rounded mr-4 w-full">
                                        cancel
                                    </button>
                                </a>
                                <button
                                    class="cursor-pointer py-2 px-4 block mt-6 bg-indigo-500 text-white font-bold w-1/3 text-center rounded">
                                    update
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </header>


        </div>


@endsection
