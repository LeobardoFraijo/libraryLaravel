@extends('layouts.adminLayout.layout')

@section('title', 'Crear Libro')

@section('content')

    @include('layouts.adminLayout.header')
    <div class="content">
        @include('layouts.adminLayout.sidebar')        

        <main class="home-content">
            <div class="navbar">
                <div class="search-container">
                    <input type="text" class="input-nav" placeholder="ingresa el nombre o autor"><a class="search-button" href="#"><i class="fas fa-search search-icon"></i></a>
                </div>
                <div class="nav-links">
                    <a href="#"><i class="fas fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="create-card">                
                <div class="create-form-content">
                    <img src="/img/books/clean-code.png" alt="Imagen de libro" class="create-image">
                    <form action="">
                        <label for="">Nombre</label>
                        <input type="text" placeholder="Ingrese nombre de libro" class="create-input">
                        <label for="">Autor</label>
                        <input type="text" placeholder="Ingrese nombre de autor">
                        <label for="">Edición</label>
                        <input type="text" placeholder="Ingrese la edición">
                        <label for="">Año de edición</label>
                        <input type="text" placeholder="Año de publicación de la edición">
                        <label for="">Editorial</label>
                        <input type="text" placeholder="Ingrese nombre de la editorial">
                        <label for="">Idioma</label>
                        <input type="text" placeholder="Idioma del libro">
                        <label for="">Páginas</label>
                        <input type="text" placeholder="Número de páginas del libro">
                        <label for="">Biblioteca</label>
                        <input type="text" placeholder="Nombre de biblioteca">
                        <label for="">Estante</label>
                        <input type="text" placeholder="Ingrese el código del estante">
                        <label for="">Área</label>
                        <input type="text" placeholder="Ingrese el área donde se ubicará el libro">
                        <label for="">cantidad de copias</label>
                        <input type="text" placeholder="Ingrese el número de copias del libro">
                        <label for="">Categoria</label>
                        <input type="text" placeholder="Categoría del libro">
                        <input type="submit" class="edit-button">
                    </form>
                </div>
            </div>            
        </main>
    </div>
@endsection