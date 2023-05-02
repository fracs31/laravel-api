{{-- Layout --}}
@extends("layouts.app")
{{-- Content --}}
@section('content')
    {{-- Container --}}
    <div class="container">
        {{-- Carta --}}
        <div class="card mt-5">
            {{-- Testa della carta --}}
            <div class="card-header">
                Progetto
            </div>
            {{-- Corpo della carta --}}
            <div class="card-body">
                {{-- Titolo --}}
                <h5 class="card-title">{{ $project->title }}</h5>
                {{-- Cliente --}}
                <p class="card-text">Cliente: {{ $project->client }}</p>
                {{-- Tipo --}}
                <p class="card-text">Tipo: {{ $project->type->name }}</p>
                {{-- Tecnologie --}}
                <p class="card-text">
                    Tecnologie:
                    {{-- Ciclo --}}
                    @foreach ($project->technologies()->orderBy("name", "asc")->get() as $technology)
                    {{-- Nome della tecnologia --}}
                        <span class="badge rounded-pill text-bg-primary">{{ $technology->name }}</span>
                    @endforeach
                </p>
                {{-- Descrizione --}}
                <p class="card-text">Descrizione: {{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection