@extends('layouts.main')

@section('title', 'IFSP')

@section('content')

    <h1>Tela de produtos </h1>
    @if($busca != '')
    <p>O Usuario esta buscando por: {{ $busca }} </p>
    @endif
    @endsection
