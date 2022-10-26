@extends('layout')
@section('content')
    <div class="py-4 px-8 h-96 mt-20 bg-theme-blue rounded shadow-xl w-1/3 border border-black">
        <form action="{{Route('book.store')}}" method="post">
            @csrf
            <h2 class=" text-center text-xl"><b>Register book</b></h2>
            <div class="flex flex-col">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
                <label for="nro-pages">Nro-pages:</label>
                <input type="text" name="nro_pages" id="nro_pages">
                <label for="description">Description:</label>
                <textarea type="text" name="description" id="description"></textarea>
                <label for="Url-image">URL image:</label>
                <input type="text" name="url_image" id="URL-image">
                <div>

                    @foreach($category as $item)
                        <div class="flex flex-col">
                            <tr>
                                <td>
                                    <div>
                                        <input type="checkbox" name="{{"categories[]"}}" id="{{$item->name}}" value="{{$item->id}}">
                                        <label for="{{$item->name}}">{{$item->name}}</label>
                                    </div>
                                </td>
                            </tr>
                        </div>
                    @endforeach

                </div>


                <a href="{{Route('book.index')}}">
                    <button type="button" class="bg-gray-500 rounded mt-2 p-2">Back</button>
                </a>
                <button class="bg-red-500 rounded">Register</button>

            </div>

        </form>

    </div>
@endsection
