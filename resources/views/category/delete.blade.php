@extends('layout')
@section('delete')
    @section('content')
        <h2 class="w-1/3 text text-center rounded text-2xl text-red-500 "><b> delete category</b></h2>
        <div class="bg-orange-400 my-4 w-1/3 text-center text-xl rounded" role="alert">
            <b> estas eguro de eliminar?</b>
        </div>

        <div class="py-4 px-8 h-40 bg-red-100 rounded shadow-xl w-1/3 border border-black ">

            <div class="mb-6 flex flex-col">

                <label for="Name " ,class="block text-gray-800 font-bold "><b>Name</b>:</label>

                <input type="text" Name="name"
                       class="w-1/2 border border-gray-300 py-2 pl-3 rounded mt-2 outline-none focus:ring-indigo-600 :ring-indigo-600"
                       required value="{{$category->name}}">

                <form action="{{route('category.destroy',$category->id)}}" method="post">
                    @method('delete')
                    @csrf
                    <a href="{{Route('category.index')}}">
                    <button type="button"
                        class="bg-pink-500 hover:bg-yellow-300 rounded my-3 p-1 mr-3" >cancel</button>
                    </a>

                    <button type="button" class="bg-red-500 hover:bg-orange-500 rounded my-3 p-1 ">delete</button>

                </form>




            </div>

        </div>

    @endsection
