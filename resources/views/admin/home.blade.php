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
            <div class="stadistics">
                <div class="stadistic-card">                   
                    <ul class="stadistics-content">
                        <li>
                            <h3>Prestamos</h3>
                        </li>
                        <li>
                            <p>copias prestadas: <span>120</span></p>                
                        </li>
                        <li>
                            <p>prestamos con retraso: <span>7</span></p>
                        </li>     
                        <li>
                            <p>prestamos con retraso: <span>7</span></p>
                        </li>             
                    </ul>
                </div>
                <div class="stadistic-card">                        
                    <ul class="stadistics-content">
                        <li>
                            <h3>Devoluciones</h3>
                        </li>
                        <li>
                            <p>copias prestadas: <span>120</span></p>                
                        </li>
                        <li>
                            <p>prestamos con retraso: <span>7</span></p>
                        </li>     
                        <li>
                            <p>prestamos con retraso: <span>7</span></p>
                        </li>             
                    </ul>
                </div> 
            </div>            
        </main>
    </div>
@endsection