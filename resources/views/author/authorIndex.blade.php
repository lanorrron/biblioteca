@extends('layout')


@section('content')
    <div>
        <a href="{{route('author.create')}}">
            <h2 class="w-1/4 bg-green-300 text-center text-xl my-4 hover:bg-red-400 rounded"><b>new author</b></h2>
        </a>
        <div class="py-4 px-8 h-80 mt-5 bg-blue-100 rounded shadow-xl w-full border border-black  flex flex-col">

            <table class="w-full border border-black block md:table  ">
                <thead class="block md:table-header-group bg-gray-600 text-white rounded">
                <tr class="">
                    <h2 class="w-1/3 bg-red-500 text-center text-xl rounded"><b>authors list</b></h2>
                    <th>id</th>
                    <th>name</th>
                    <th>last Name</th>
                    <th>date of birth</th>
                    <th>nationality</th>
                    <th>death</th>
                    <th>actions</th>
                </tr>

                </thead>
                <tbody>
                @foreach($items as $item)

                    <tr>
                        <td class="text-center">{{$item->id}}</td>
                        <td class="text-center">{{$item->name}}</td>
                        <td class="text-center">{{$item->last_name}}</td>
                        <td class="text-center">{{$item->date_of_birth}}</td>
                        <td class="text-center">{{$item->nationality}}</td>
                        <td class="text-center">{{$item->death}}</td>
                        <td class="text-center">
                            <a href="{{Route('author.edit',$item->id)}}"
                               class="bg-yellow-500 hover:bg-pink-500 p-3 text-white hover:shadow-lg text-sm font-thin py-0.5 px1 rounded mr-4  ">Edit</a>

                            <a href="{{Route('author.show',$item->id)}}"
                               class="bg-red-500 hover:bg-orange-700 p-3 text-white hover:shadow-lg text-sm font-thin  py-0.5 px-1 rounded ">Remove</a>

                        </td>


                    </tr>
                @endforeach
                </tbody>


            </table>
        </div>
    </div>
@endsection

