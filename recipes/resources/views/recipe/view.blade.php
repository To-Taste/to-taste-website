@extends('layouts.master')

@section('content')
                <h1>{!!$recipe->headline!!}</h1>
                <p>{!!$recipe->recipeIntro!!}</p>
                <h2>Ingredients</h2>
                {!!$recipe->recipeIngredients!!}
                <h2>Steps</h2>
                {!!$recipe->recipeSteps!!}
                <p>{!!$recipe->recipeClosing!!}</p>
                <p><a href="/recipes/{{$recipe->id}}/edit">EDIT</a></p>

                <form class="delete" action="/recipes/delete/{{$recipe->id }}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <input type="submit" value="Delete">
                </form>
                <script>
                    $(".delete").on("submit", function(){
                        return confirm("Do you want to delete this recipe?");
                    });
                </script>
    @endsection