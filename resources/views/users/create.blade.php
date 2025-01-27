@extends("layout")

@section("content")

<form  action="/users/register" method="post" class="flex flex-col gap-2 bg-white  p-4 border border-1 border-[#eee]">
    @csrf
    <div class="mx-auto font-600 text-xl">
        Register
    </div>
<x-input-card>

    <label for="name" class="">name</label>
    <input value="{{old('name')}}" class="p-2 rounded-md border border-1   border-[#eee]"  placeholder="Software Eng" name="name"/>

</x-input-card>
@error("name")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="email">email</label>
    <input value="{{old('email')}}" class="p-2 rounded-md border border-1mt-1 " placeholder="Ktm" name="email"/>
</x-input-card>
@error("email")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<x-input-card>
    <label for="password">password</label>
    <input value="{{old('password ')}}" class="p-2 rounded-md border border-1mt-1 "  placeholder="Leapfrog" name="password"/>
</x-input-card>
@error("password")
<p class="text-red-500 mt-1 text-xs">{{$message}}</p> 
@enderror
<input type="submit" class="p-2 rounded-md border border-1 mt-1 bg-blue-500 hover:bg-blue-600 text-white"  name="Create"/>
<div>
</div>
</form>

@endsection