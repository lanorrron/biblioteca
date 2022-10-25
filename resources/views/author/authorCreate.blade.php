@extends('layout')

@section('content')
    <div class="py-4 px-8 h-96 mt-20 bg-theme-blue rounded shadow-xl w-1/3 border border-black">
        <form action="{{Route('author.store')}}" method="post">
            @csrf
            <h2 class="text-black text-2xl text-center"><b>register author</b></h2>
            <div class="flex flex-col rounded">
                <label for="name"><b>name:</b></label>
                <input type="text" name="name"id="name" class="rounded pl-2">
                <label for="last name"><b>last name:</b></label>
                <input type="text" name="last-name" id="last-name"  class="rounded">
                <label for="date of birth"><b>date of birth:</b></label>
                <input type="text" name="date-of-birth" id="date-of-birth"  class="rounded">
                <label for="nationality"><b>nationality:</b></label>
                <input type="text" name="nationality" id="nationality"  class="rounded">
                <label for="death"><b>death:</b></label>
                <input type="text" name="death" id="death"  class="rounded">
            </div>
            <div>
                <a href="{{route('author.index')}}">
                    <button type="button" class="bg-gray-400 rounded my-2 px-2 p-2 mr-5"><b>back</b></button>
                </a>
                <button class="bg-green-400 my-2 p-2 rounded"><b>register</b></button>

            </div>


        </form>

    </div>

@endsection
