@props(['tagcsv'])

@php

$tags = explode(",", $tagcsv);
@endphp

<ul class="flex flex-row gap-2 mb-2">
    @unless(count($tags) == 0)
        @foreach ($tags as $tag)
            
                <li class="bg-blue-500 px-2 rounded-md text-white">
                    {{ $tag }}
                </li>
          
        @endforeach
    @else
        <div>No items</div>
    @endunless
   
</ul>
