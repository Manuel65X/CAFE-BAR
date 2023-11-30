
<h1> {{ $modo }} categoria </h1>


@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>

        @foreach( $errors->all as $error)
        <li> {{ $error }} </li>
    @endforeach
        </ul>

    </div>

    
@endif

<div class="form-group">
<label for="Personal"> Personal </label>
<input type="text" class="form-control" name="Personal" 
value="{{ isset($categoria->Personal)?$categoria->Personal:old('Personal') }}" id="Personal">
</div>

<div class="form-group">
<label for="Picar"> Picar </label>
<input type="text" class="form-control" name="Picar"value="{{ isset($categoria->Picar)?$categoria->Picar:"old('Picar')" }}" id="Picar">
</div>

<div class="form-group">
<label for="Postres"> Postres </label>
<input type="text" class="form-control" name="Postres" value="{{ isset($categoria->Postres)?$categoria->Postres:"old('Postres')"}}" id="Postres">
</div>

<div class="form-group">
<label for="Calientes"> Calientes </label>
<input type="text" class="form-control" class="form-control" name="Calientes" value="{{ isset($categoria->Calientes)?$categoria->Calientes:"old('Calientes')"}}" id="Calientes">
</div>

<div class="form-group">
<label for="Frias"> Frias </label>
<input type="text" name="Frias" value="{{ isset($categoria->Frias)?$categoria->Frias:"old('Frias')"}}" id="Frias">
</div>

<div class="form-group">
<label for="Cervezas"> Cervezas </label>
<input type="text"class="form-control" name="Cervezas" value="{{ isset($categoria->Cervezas)?$categoria->Cervezas:"old('Cervezas')"}}" id="Cervezas">
</div>

<div class="form-group">
<label for="Cocteles"> Cocteles </label>
<input type="text" class="form-control" name="Cocteles" value="{{ isset($categoria->Cocteles)?$categoria->Cocteles:"old('Cocteles')"}}" id="Cocteles">
</div>
    
<div class="form-group">
<label for="Licores"> Licores </label>
<input type="text" class="form-control" name="Licores" value="{{ isset($categoria->Licores)?$categoria->Licores:"old('Licores')"}}" id="Licores">
</div>

<div class="form-group">
<label for="Vinos"> Vinos </label>
<input type="text" class="form-control" name="Vinos" value="{{ isset($categoria->Vinos)?$categoria->Vinos:"old('Vinos')"}}" id="Vinos">
</div>

<div class="form-group">
<label for="Tragos"> Tragos </label>
<input type="text" class="form-control" name="Tragos" value="{{ isset($categoria->Tragos)?$categoria->Tragos:"old('Tragos')"}}" id="Tragos">
</div>

<div class="form-group">

<label for="Nombre">   </label>
@if(insset($categoria->Foto))
<img class="img-thumbnail img-fluid" src="{{ asst('storage').'/'.$categoria->Foto }}" width="100" alt="">
@endif

<input type="file" class="form-control" name="Foto" value="{{ $categoria->Frias}}" id="Foto">


</div>


<input class="btn btn-succes" type="sumbit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('categoria/create') }}"> Regresar </a>

<br>

