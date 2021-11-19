@extends('layouts.adminLayout.layout')

@section('title', 'Libros')

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
            <div class="books-content"> 
                <div class="books-table">                
                    <table>
                        <thead>                            
                            <tr>
                                <th id="name">Nombre</th>
                                <th>Autor</th>
                                <th>Fecha de Publicación</th>                                
                                
                                <th>Editorial</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            @foreach ($bookList as $book)
                                <tr>
                                    <td>{{$book->name}}</td>
                                    <td>@foreach ($book->authors as $author)
                                        {{$author->name}}
                                    @endforeach</td>
                                    <td>{{$book->publication_date}}</td>
                                    
                                    <td>{{$book->publisher}}</td>
                                    
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>                
                </div> 
                <div class="book-card">
                    <img src="/img/books/clean-code.png" alt="clean-code">
                    <div class="book-info">
                        <div class="info-key">
                            <ul>
                                <li>Nombre</li>
                                <li>Autor</li>
                                <li>Edición</li>
                                <li>Año de edición</li>
                                <li>Editorial</li>
                                <li>Idioma</li>
                                <li>Páginas</li>
                            </ul>
                        </div>
                        <div class="info-value">
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
                </div> 
            </div>
        </main>
    </div>
@endsection