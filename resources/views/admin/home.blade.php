@extends('layouts.adminLayout.layout')

@section('title', 'Inicio')

@section('content')

    @include('layouts.adminLayout.header')
    <div class="content">
        @include('layouts.adminLayout.sidebar')        

        <main class="home-content">
            <div class="buttons-container">
                
                <button class="home-button">             
                    <i class="fas fa-book size-icon"></i>
                    <h4>Libros</h4>                                    
                </button>             
            
                <button class="home-button">  
                    
                    <i class="fas fa-book size-icon"></i>
                    <h4>Prestamos</h4>                   
                    
                </button>                
                
                <button class="home-button">                   
                    <i class="fas fa-book size-icon"></i>
                    <h4>Devoluciones</h4>
                </button> 
                
            </div>
            
        </main>
    </div>

    
@endsection