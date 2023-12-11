@extends('layouts.posts.llistat')
@section('titol', "Llistat posts")
@include('partials.nav')
@section('contigut')
<h1>Llistat de posts</h1>
<h1>{{ fechaActual() }}</h1>



@forelse($posts as $post)
    <p>{{ $post->titol }}</p>
@empty
 <p>La lista esta vacia</p>
@endforelse
{{   $posts->links() }}


@endsection
@section('peu')
<footer>
<h2>Copyright Hector</h2>
</footer>
@endsection