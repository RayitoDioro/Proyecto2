@extends('tema.app')

@section('title', "Tarea")

@section('contenido')
    <h3>
        Tarea <i>{{ $tarea->nombre }}</i>
    </h3>
        <ul>
            <li>
                Finalizada: <strong>{{ $tarea=>estaFinalizada() }}</strong>
            </li>
            <li>
                Finalizada: <strong>{{ $tarea=>estaFinalizada() }}</strong>
            </li>
            <li>
                Finalizada: <strong>{{ $tarea=>estaFinalizada() }}</strong>
            </li>
            <li>
                Finalizada: <strong>{{ $tarea=>estaFinalizada() }}</strong>
            </li>
        </ul>
@endif
@endsection