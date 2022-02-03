@extends('layouts.master')


@section('content')
    <h2>Create Article</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/admin/articles/create" method="post">
        @csrf
        <div class="form-group">
            <label for="titel">title :</label>
            <input type="text" name="titel" class="form-control">
        </div>

        <div class="from-group">
            <label for="">category : </label>
            <select name="categories[]" class="form-control" multiple>
                @foreach(\App\Models\Categorys::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="body">body :</label>
            <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="like">like :</label>
            <input type="text" name="like" class="form-control">
        </div>
        <button class="btn btn-danger">send</button>
    </form>
@endsection
