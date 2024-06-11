@extends('backoffice.layout.app')

@section('title', 'Crear Película')

@section('content')
    <form action="/backoffice/movies" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input id="title" name="title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea id="description" name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="released_date">Fecha de estreno</label>
            <input id="released_date" name="released_date" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="genre_id">Género</label>
            <select name="genre_id" id="genre_id">
                <option value="1">Acción</option>
                <option value="2">Ciencia Ficción</option>
                <option value="3">Drama</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Imagen</label>
            <input id="image" name="image" type="file" class="form-control">
        </div>
    </form>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
