@extends('layouts.posts')
@section('title','Posts')
@section('content')
@component('components.message',['title' => '<span>Component Message</span>', 'name' => 'Akshay Shah'])
This is Component
@endcomponent
@section('nevigation')
<ul>
    <li>Home</li>
    <li>About</li>
    <li>Contact</li>
    <li>Gallery</li>
</ul>
@endsection
    <ul>
        @foreach($data as $row)
            <li>
                <?= $row['title']; ?><br/>
                <?= $row['comments']; ?><br/>
            </li>
            <br/>
        @endforeach
    </ul>
@endsection
