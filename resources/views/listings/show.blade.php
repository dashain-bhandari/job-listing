@extends("layout")

@section("content")

@include("partials._search")
<x-card>

       {{-- title --}}
       <div class="font-bold text-xl">
        {{$listing["title"]}}
     </div>
     <div class="">
        <img width="100" height="100" src="{{$listing->logo?asset("storage/".$listing->logo):asset("/images/no-image.png")}}">
            </div>
     <div class="font-500 text-lg mb-3">{{$listing["company"]}}</div>
     {{-- tags --}}
 <x-tag :tagcsv="$listing->tags"/>
     {{-- location --}}
     <h6 class="mb-2">{{$listing["location"]}}</h6>
     <p>{{$listing["description"]}}</p>

 <div class="flex flex-row gap-4 mt-4">
    <a href="/listings/{{$listing->id}}/edit" class="p-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600 text-white ">Edit</a>
    <form method="post" action="/listings/{{$listing->id}}" class="p-4 py-2  rounded-md bg-red-500 hover:bg-red-600 text-white">
        @csrf()
        @method("DELETE")
    <input  type="submit" name="delete">    
    </form>
 </div>
</x-card>
@endsection