@extends('layouts.master')

@section('content')
                <ul>
                @foreach ($recipes as $recipe)
                        <li><a href="/recipes/{{$recipe->id}}">{{$recipe->headline}}</a></li>
                    @endforeach
                </ul>
                <p><a href="/recipes/create">Create New</a> </p>
@endsection