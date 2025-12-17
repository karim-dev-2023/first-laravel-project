@extends('layouts.app')
@section('title', 'Article - ' . $article->titre)
@section('content')

    <h2> <x-article :titre="$article->titre" :description="$article->description" > </x-article> </h2>
@endsection
