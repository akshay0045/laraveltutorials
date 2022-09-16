@extends('layouts.posts')
@section('title', 'Show Single Post')
@section('content')
<ul>
        <li>
            {{$data['title']}}<br/>
            {{$data['comments']}}<br/>
        </li>
</ul>
@endsection
