@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de template</h1>

        <div class="row">
            @foreach($templates as $template)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ asset($template->path_template) }}" class="card-img-top" alt="{{ $template->nm_template }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $template->nm_template }}</h5>
                            <a href="{{ route('templates.edit', $template) }}" class="btn btn-primary">Editar</a>
        
                            <form action="{{ route('templates.destroy', $template) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection