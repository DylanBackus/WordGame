@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mijn Vrienden</h1>
    <ul>
        @foreach($friends as $friend)
            <li>{{ $friend->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
