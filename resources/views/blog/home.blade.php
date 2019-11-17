@extends('layouts.master')

@section('title', 'Blog Home')

@section('style')
  <style>
    #blog{
      background: darkred;
      color: white;
    }

    h3{
      text-decoration: underline;
    }
  </style>
@endsection

@section('content')
  <h1>Selamat datang di blog kami</h1>

  <h3>Daftar Blog :</h3>
  <ul>
    @foreach($blogs as $blog)
      <li><a href="/blog/{{ $blog->id }}">{{ $blog->title }}</a></li>
    @endforeach
  </ul>
@endsection