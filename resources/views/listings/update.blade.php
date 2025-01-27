@extends("layout")

@section("content")

<form method="post"  action="/listings/{{$listing->id}}"  class="flex flex-col gap-2 bg-white  p-4 border border-1 border-[#eee]">
    @csrf
    @method("PUT")
    <div class="mx-auto font-600 text-xl">
        Update a listing
    </div>
<x-input-card>

    <label for="title" class="">Title</label>
    <input value="{{$listing->title}}" class="p-2 rounded-md border border-1   border-[#eee]"  placeholder="Software Eng" name="title"/>

</x-input-card>
@error("title")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="location">Location</label>
    <input value="{{$listing->location}}" class="p-2 rounded-md border border-1mt-1 " placeholder="Ktm" name="location"/>
</x-input-card>
@error("location")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="company">Company</label>
    <input value="{{$listing->company}}" class="p-2 rounded-md border border-1mt-1 "  placeholder="Leapfrog" name="company"/>
</x-input-card>
@error("company")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="email">Email</label>
    <input value="{{ $listing->email}}" class="p-2 rounded-md border border-1mt-1 "  placeholder="Leap@gmail.com" name="email"/>
</x-input-card>
@error("email")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="tags">Tags</label>
    <input value="{{$listing->tags}}" class="p-2 rounded-md border border-1mt-1 "  placeholder="Leapfrog,Laravel" name="tags"/>
</x-input-card>
@error("tags")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="website">Website</label>
    <input value="{{$listing->website}}" class="p-2 rounded-md border border-1mt-1 "  placeholder="www.leapfrog.com" name="website"/>
</x-input-card>
@error("website")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="description">Description</label>
    <textarea value="{{$listing->description}}" class="p-2 rounded-md border border-1 mt-1"  placeholder="description" name="description"></textarea>
</x-input-card>
@error("description")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="logo">Logo</label>
   <input type="file"/>
</x-input-card>
<input type="submit" class="p-2 rounded-md border border-1 mt-1 bg-blue-500 hover:bg-blue-600 text-white"  name="Create"/>
<div>
</div>
</form>

@endsection