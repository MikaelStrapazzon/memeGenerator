
@extends('layouts.app')

@section('content')

<form action="{{ route('templates.update', $template->id_template) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="nm_template">Nome do Template:</label>
    <input type="text" name="nm_template" value="{{ $template->nm_template }}" required>

    <label for="template_image">Imagem do Template:</label>
    <input type="file" name="template_image">

    <button type="submit">Atualizar Template</button>
</form>

@endsection