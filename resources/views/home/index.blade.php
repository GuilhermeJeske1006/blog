@extends('componentes.corpo')
@section('conteudo')

@component('home.conteudo', ['blog' => $blog])@endcomponent

@component('componentes.paginacao')@endcomponent
@endsection
