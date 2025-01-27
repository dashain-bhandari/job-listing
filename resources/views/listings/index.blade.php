@extends("layout")

@section("content")
{{-- container --}}
@include('partials._search')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
@unless(count($listings)==0)
@foreach ($listings as $listing )
{{-- each list item --}}
<x-listing-card :listing="$listing"></x-listing-card>
@endforeach
@else
<div>No items</div>
@endunless
</div>

<div class="mt-6 p-4">
    {{$listings->links()}}
</div>

@endsection