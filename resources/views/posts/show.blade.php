@extends('layouts.posts.fitxa')
@section('titol', "Fitxa post")
@include('partials.nav')
@section('contigut')

<h1>Fitxa del post {{$post->titol}}</h1>
@endsection
@section('peu')
<footer>
<h2>Copyright Hector</h2>
</footer>
@endsection