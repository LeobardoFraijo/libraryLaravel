@extends('layouts.adminLayout.layout')

@section('title', 'Mostrar Libro')

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
            <div class="show-card">
                <img src="/img/books/clean-code.png" class="book-show-img" alt="clean-code">
                <div class="show-info">
                    <div class="show-basic-info">
                        <div class="show-key">
                            <ul>
                                <li>Nombre:</li>
                                <li>Autor:</li>
                                <li>Edición:</li>
                                <li>Año de edición:</li>
                                <li>Editorial:</li>
                                <li>Idioma:</li>
                                <li>Páginas:</li>
                            </ul>
                        </div>
                        <div class="show-value">
                            <ul>
                                <li>Clean Code</li>
                                <li>Roberto Martin</li>
                                <li>1er edición</li>
                                <li>2008</li>
                                <li>Pearson</li>
                                <li>Ingles</li>
                                <li>431</li>
                            </ul>
                        </div>  
                    </div>
                    <div class="show-library-info">
                        <div class="show-key">
                            <ul>
                                <li>Biblioteca:</li>
                                <li>Código de estante:</li>
                                <li>Área:</li>
                                <li>Número de copias:</li>
                                <li>Copias disponibles:</li>
                                <li>Categoria:</li>
                                
                            </ul>
                        </div>
                        <div class="show-value">
                            <ul>
                                <li>Central</li>
                                <li>CM3</li>
                                <li>Ingeniería</li>
                                <li>6</li>
                                <li>2</li>
                                <li>Sistemas computacionales</li>
                                
                            </ul>
                        </div>
                    </div>
                    <button class="edit-button show-book-button">Editar</button>                  
                </div>
            </div>                        
        </main>
    </div>
@endsection