<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
<h2>Bienvenue sur le site de {{$name}}</h2>
@foreach ($articles as $article)
<x-article :titre="$article['titre']" :description="$article['description']" />
@endforeach

@endsection