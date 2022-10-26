@extends('layout')

@section('content')
    <div>
        <a href="{{route('book.create')}}">
            <h2 class="w-1/4 bg-green-300 text-center text-xl my-4 hover:bg-red-400 rounded"><b>new book</b></h2>
        </a>
        <div>
            <table class="w-full border border-black block md:table  text-left px-1">

                <thead class="block md:table-header-group bg-gray-600 text-white rounded ">
                <tr>
                    <h2 class="bg-red-500 w-1/4 text-xl text-center text-white"><b>List book</b></h2>
                    <th class="px-1">Id</th>
                    <th>Name</th>
                    <th>Nro-pages</th>
                    <th>Description</th>
                    <th>URL image</th>
                    <th class="w-32">Actions</th>


                </tr>


                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->nro_pages}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <img class="h-16" src="{{$item->URL_image}}" alt="">
                        </td>
                        <td>


                            <a href="{{Route('book.edit',$item->id)}}"
                               class="bg-yellow-500 hover:bg-pink-500 p-3 text-white hover:shadow-lg text-sm font-thin py-0.5 px1 rounded mr-4  ">Edit</a>

                            <a href="{{Route('book.show',$item->id)}}"
                               class="bg-red-500 hover:bg-orange-700 p-3 text-white hover:shadow-lg text-sm font-thin  py-0.5 px-1 rounded ">Remove</a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>


    </div>
@endsection

