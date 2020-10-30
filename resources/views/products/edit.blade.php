@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>



<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="focusedInput">Tipo</label>
                <select class="form-control" id="focusedInput" value="{{ $product->tipo }}" name="tipo" required>
                    <option value="">--- Seleccione ---</option>
                    <option value="1">IDE de desarrollo</option>
                    <option value="2">Editor de texto</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Logo:</strong>
                <input type="file" name="logo" accept="image/*" class="form-control" value="{{ $product->logo }}" placeholder="logo" required>
                <img src="{{ $product->logo }}" width="20%">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>La historia brevemente:</strong>
                <textarea class="form-control" style="height:150px" name="historia" placeholder="Historia" required>{{ $product->historia }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>características:</strong>
                <textarea class="form-control" style="height:150px" name="caracteristicas" placeholder="Caracteristicas" required>{{ $product->caracteristicas }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aplicabilidad:</strong>
                <textarea class="form-control" style="height:150px" name="aplicabilidad" placeholder="Aplicabilidad" required>{{ $product->aplicabilidad }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>herramientas:</strong>
                <textarea class="form-control" style="height:150px" name="herramientas" placeholder="Herramientas" required>{{ $product->herramientas }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ejemplos:</strong>
                <textarea class="form-control" style="height:150px" name="ejemplos" placeholder="Ejemplos" required>{{ $product->ejemplos }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Requisitos mínimos de hardware y software para su instalación.:</strong>
                <textarea class="form-control" style="height:150px" name="requerimientos" placeholder="Requerimientos" required>{{ $product->requerimientos }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Costos:</strong>
                <textarea class="form-control" style="height:150px" name="costos" placeholder="Costos" required>{{ $product->costos }}</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Costos imagen:</strong>
                <input type="file" name="costosimg"  accept="image/*"value="{{ $product->grafica }}"  class="form-control" placeholder="costosimg" required>
                <img src="{{ $product->costosimg }}" width="20%">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Buscar graficas estadísticas del porcentaje de su utilización a nivel mundial:</strong>
                <input type="file" name="grafica" accept="image/*" value="{{ $product->grafica }}" class="form-control" placeholder="Grafica" required>
                <img src="{{ $product->grafica }}" width="20%">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>video:</strong>
                <input type="text" name="video" value="{{ $product->video }}" class="form-control" placeholder="video" required>
            </div>
        </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection