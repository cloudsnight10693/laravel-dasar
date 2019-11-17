@extends('layouts.master')

@section('title', 'Create Page')

@section('style')
  <style>
    #create{
      background: darkred;
      color: white;
    }
  </style>
@endsection

@section('content')
  <h1>Buat Blog Baru disini</h1>
  <form action="/blog" method="post">
    <input type="text" name="title" value=""><br>
    <textarea name="description"cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Create">
    @csrf
  </form>
@endsection