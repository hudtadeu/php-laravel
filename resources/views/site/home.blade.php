@extends('site.layout')
@section('title', 'Essa é a página Home')
@section('conteudo')

@include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

@component('components.sidebar')
    @slot('paragrafo')
        Texto qualuqer vindo do slot
    @endslot
@endcomponent

@endsection
