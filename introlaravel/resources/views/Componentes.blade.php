@extends('layouts.plantilla')

@section('titulo','Componentes Blade')

@section('contenido')

<x-card encabezado="Componente" titulo="Dinámico" textoBoton="Guardar"> </x-card>

<x-card encabezado="Componente 2" titulo="Dinámico 2" textoBoton="Guardar 2"></x-card>

<x-alert tipo="danger">Rojo</x-alert>
<x-alert tipo="warning">Amarillo</x-alert>


@endsection