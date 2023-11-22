@extends('layouts.app')

@section('content')


<!DOCTYPE html>
<html>
<head>
    <title>Adicionar Template</title>
</head>
<body>

<div>
    <h2>Adicionar Template</h2>

    @if ($message = Session::get('success'))
        <div>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <form action="{{ route('Template.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <strong>Nome do Template:</strong>
            <input type="text" name="nm_template" class="form-control" placeholder="Nome do Template">
        </div>

        <div>
            <strong>Imagem do Template:</strong>
            <input type="file" name="template_image" class="form-control">
        </div>

        <div>
            <button type="submit">Adicionar Template</button>
        </div>
    </form>
</div>

</body>
</html>
@endsection