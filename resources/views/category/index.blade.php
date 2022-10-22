@extends('layout')
@section('category')

    @section('content')
        <div>

            <div class="row">
                <div class="col-sm-12">
                    @if( $mensaje = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{$mensaje}}
                        </div>
                    @endif
                </div>

            </div>
            <h2 class="text-3xl  "><b> lista de categorías</b></h2>
            <p>
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                   type="button" href="{{Route("category.create")}}">
                    agregar nueva categoría</a>


            </p>
            <div class=" text-center text-xl ">
                <table class="w-1/2 border-collapse block md:table ">

                    <thead class="block md:table-header-group">
                    <tr class=" w-2/5 p-3 border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell text -center">
                            id
                        </th>
                        <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell text -center">
                            Name
                        </th>
                        <th class="bg-gray-600 p-2 text-white text-xl font-bold md:border md:border-grey-500 text-center block md:table-cell w-1/4 ">
                            actions
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)

                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <a href="{{Route('category.edit',$item->id)}}"
                                   class="bg-yellow-500 hover:bg-pink-500 p-3 text-white hover:shadow-lg text-sm font-thin py-1 px1 rounded mr-4  ">Edit</a>

                                <a href="{{Route('category.show',$item->id)}}"
                                   class="bg-red-500 hover:bg-orange-700 p-3 text-white hover:shadow-lg text-sm font-thin  py-1 px-1 rounded ">Remove</a>

                            </td>

                        </tr>
                    @endforeach
                    </tbody>


                </table>


            </div>

        </div>
    @endsection
