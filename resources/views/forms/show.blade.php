<!-- resources/views/forms/show.blade.php -->
@extends('layouts.app')

@section('title', $form->title)

@section('content')
    <h2>{{ $form->title }}</h2>
    <iframe src="{{ $form->embed_url }}" width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0">読み込み中...</iframe>
@endsection
