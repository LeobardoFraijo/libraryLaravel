@extends('layouts.adminLayout.layout')

@section('title', 'Editar Libro')

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
            <div class="edit-content">
                <div class="edit-card">                
                    <img src="/img/books/clean-code.png" alt="clean-code">
                    
                    <form action="" method="post">
                        <div class="edit-info">
                            <div class="edit-info-key">                            
                                <label for="nombre">Nombre</label>
                                <label for="autor">Autor</label>
                                <label for="edicion">Edición</label>
                                <label for="añoEdicion">Año de edición</label>
                                <label for="editorial">Editorial</label>
                                <label for="idioma">Idioma</label>
                                <label for="paginas">Páginas</label>
                            </div>
                            
                        
                            <div class="edit-info-value">
                                <input type="text" name="nombre" id="nombre">
                                <input type="text" name="autor" id="autor">
                                <input type="text" name="edicion" id="edicion">
                                <input type="text" name="añoEdicion" id="añoEdicion">
                                <input type="text" name="editorial" id="editorial">
                                <input type="text" name="idioma" id="idioma">
                                <input type="text" name="paginas" id="paginas">
                            </div>
                            
                        </div>
                        <br>
                        <input type="submit" value="guardar" class="edit-button">
                    </form>
                </div>
            </div> 
        </main>
    </div>
@endsection