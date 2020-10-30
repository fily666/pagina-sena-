@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tipo:</strong>
            {{ $product->tipo }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Logo:</strong>
            {{ $product->logo }}
            <img src="{{ $product->logo }}" width="20%">

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>La historia brevemente:</strong>
            {{ $product->historia }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>características:</strong>
            {{ $product->caracteristicas }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Aplicabilidad:</strong>
            {{ $product->aplicabilidad }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>herramientas:</strong>
            {{ $product->herramientas }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>ejemplos:</strong>
            {{ $product->ejemplos }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Requisitos mínimos de hardware y software para su instalaciónRequisitos mínimos de hardware y software para su instalación:</strong>
            {{ $product->requerimientos }}
        </div>

    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Costos:</strong>
            {{ $product->costos }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Buscar graficas estadísticas del porcentaje de su utilización a nivel mundial:</strong>
            {{ $product->grafica }}
            <img src="{{ $product->grafica }}" width="20%">

        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>video:</strong>
            {{ $product->video }}
        </div>
    </div>
</div>
@endsection