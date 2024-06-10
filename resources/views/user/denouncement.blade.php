@extends('components.layout')

@section('title', 'Detalle de la Denuncia')

@section('content')
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <h1>Detalle de la Denuncia</h1>

    <div>
        <p><strong>ID:</strong> {{ $denouncement->id }}</p>
        <p><strong>Descripción:</strong> {{ $denouncement->description }}</p>
        <p><strong>Tipo de Denuncia:</strong> {{ $denouncement->id_type_denouncement }}</p>
        @if(!empty($imagePaths))
        @foreach($imagePaths as $image)
        <img src="{{ $image }}" alt="Evidencia Inicial" style="max-width: 100%; height: auto;">
        @endforeach
            @else
                <p>No hay evidencia inicial.</p>
            @endif

    </div>
@endsection
