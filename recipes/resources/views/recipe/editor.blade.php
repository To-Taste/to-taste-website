@extends('layouts.master')

@section('content')
    <form method="POST" action="/recipes">
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$recipe->id}}">
        <div class="form-group">
            <label for="headline">Headline</label>
            <input type="text" name="headline" placeholder="Headline Copy" style="width: 400px;" required value="{{$recipe->headline}}">
        </div>

        <div class="form-group">
            <label for="recipeIntro">Recipe Introduction</label>
            <textarea class="form-control" name="recipeIntro" placeholder="Recipe Introduction" required>{{$recipe->recipeIntro}}</textarea>
        </div>
        <div class="form-group">
            <label for="recipeIngredients">Recipe Instructions</label>
            <textarea class="form-control" id="editor1" name="recipeIngredients" placeholder="Ingredients - each on a new line" required>{{$recipe->recipeIngredients}}</textarea>
        </div>
        <div class="form-group">
            <label for="recipeSteps">Recipe Steps</label>
            <textarea class="form-control" id="editor2" name="recipeSteps" placeholder="Steps -- each on a new line" required>{{$recipe->recipeSteps}}</textarea>
        </div>
        <div class="form-group">
            <label for="recipeClosing">Recipe Closing Copy</label>
            <textarea class="form-control" name="recipeClosing" placeholder="closing remarks" >{{$recipe->recipeClosing}}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @if(count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </form>



@endsection