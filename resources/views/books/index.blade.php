@extends('layouts.app')

@section('title', 'マイページ')

@section('content')
@include('layouts.nav')
<p>マイページの予定です！</p>

@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

@if($is_icon)
<figure>
    <a href="{{ route('books.profile') }}">
        <img src="/storage/icons/{{ $user->icon }}.jpg" width="200px" heigh="200px" alt="プロフィール画像">        
    </a>
</figure>
@endif
@endsection