@extends('layouts.app')
@section('title', 'Article - ' . $article->title)
@section('content')

    <h2> <x-article :titre="$article->title" :description="$article->description" /> </h2>
@endsection
