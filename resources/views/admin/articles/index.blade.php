@extends('layouts.master')


@section('content')
    <h2>All Articles</h2>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->titel }}</td>
                    <td>
                        <form action="/admin/articles/{{$article->id}}/delet" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">delete</button>
                        </form>
                        <br>
                        <form action="/admin/articles/{{$article->id}}/edit" method="post">
                            @csrf
                            @method('get')
                            <button class="btn btn-info">edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
