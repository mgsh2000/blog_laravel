@extends('layouts.master')


@section('content')
    <h2>edit Article</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/articles/{{ $article->id }}/edit" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="titel">title :</label>
            <input type="text" name="titel" class="form-control" value="{{ $article->titel }}">
        </div>

        <div class="from-group">
            <label for="">category : </label>
            <select name="categories[]" class="form-control" multiple>
                @foreach(\App\Models\Categorys::all() as $category)
                    <option value="{{ $category->id }}" {{ in_array($category->id , $article->categories()->pluck('id')->toArray()) ? 'selected' : '' }} >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="body">body :</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{ $article->body }}</textarea>
        </div>
        <button class="btn btn-info">update</button>
    </form>
@endsection
