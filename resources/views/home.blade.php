@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a href="{{route('add.word')}}"><h1>add word to blacklist</h1></a><br><br><br>
        <a href="{{route('create.page')}}"><h1>create post</h1></a><br><br><br>
        @foreach($posts as $post)
            <h3>{{$post['content']. ' ' . \Carbon\Carbon::parse($post->created_at)->diffForHumans() }} </h3><br>
        @endforeach
    </div>
</div>
@endsection
