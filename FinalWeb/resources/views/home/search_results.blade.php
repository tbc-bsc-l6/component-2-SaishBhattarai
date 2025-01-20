@extends('layouts.app')

@section('content')
    <x-app-layout>
        <div class="container">
            <h1>Search Results for "{{ $query }}"</h1>
            @if($results->isEmpty())
                <p>No results found.</p>
            @else
                <ul class="list-group">
                    @foreach($results as $product)
                        <li class="list-group-item">
                            <h5><a href="{{ url('products/' . $product->id) }}">{{ $product->title }}</a></h5>
                            <p>{{ $product->description }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </x-app-layout>
@endsection
