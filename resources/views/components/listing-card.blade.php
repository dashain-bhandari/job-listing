@props(['listing'])
<div class="bg-white border border-1 border-[#eee] p-4 rounded-md flex flex-row">

    <div class="flex-1">
<img src="{{$listing->logo?asset("storage/".$listing->logo):asset("/images/no-image.png")}}">
    </div>
<div class="flex-1">
  {{-- title --}}
  <div class="font-bold text-xl ">
    <a href="/listings/{{$listing["id"]}}">{{$listing["title"]}}</a>
</div>
<div class="font-500 text-lg mb-3">{{$listing["company"]}}</div>
{{-- tags --}}
<x-tag :tagcsv="$listing['tags']"/>
{{-- location --}}
<h6 class="mb-2">{{$listing["location"]}}</h6>
</div>

    
</div>