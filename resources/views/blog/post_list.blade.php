@extends('layouts/basic')

@section('title', 'List of posts')

@section('content')

<h1>List of blog posts</h1>

<ul>
    @foreach($posts as $post_id => $post_name)
        <li>
            <a href="{{ route('post_detail', ['id' => $post_id]) }}">
                {{ $post_name }}
            </a>
        </li>
    @endforeach
</ul>

@endsection