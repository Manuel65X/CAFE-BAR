aqui editas las Categorias
@extends('layouts.app')
@section('content')
<div class=" pt-12 pb-10">

<form action="{{url ('/categoria/'.$categoria->$id )}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_filed('PATCH') }}


@include('categoria.form',['modo'=>'Editar'] );

</form>
</div>
@endsection