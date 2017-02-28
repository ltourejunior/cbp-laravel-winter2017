@extends('layouts/basic')

@section('title', 'Contact form')

@section('content')
Contact form in a HTML wrapper

<form action="" method="post">
    <input type="text" name="who" value="{{ $who }}" />

    <input type="submit" value="Send message" />
</form>

<ul>
    @foreach($recipients as $recipient)
        <li><a href="{{ route('contact someone', ['who' => $recipient]) }}">{{ $recipient }}</a></li>
    @endforeach
</ul>    
@endsection