aqui creas las Categorias

@extends('layouts.app')
@section('content')
<div class=" pt-12 pb-10">

<form action="{{ url('/categoria') }}" method="post" enctype="multipart/form-data">
@csrf
@include('categoria.form', ['modo'=>'Crear'] );


</form>
</div>
@endsection