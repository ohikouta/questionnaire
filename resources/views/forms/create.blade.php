<!-- resources/views/forms/create.blade.php -->
@extends('layouts.app')

@section('title', 'Googleフォームの追加')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('form.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">フォームのタイトル</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="embed_url">Googleフォームの埋め込みURL</label>
            <input type="url" name="embed_url" id="embed_url" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">保存</button>
    </form>
@endsection
