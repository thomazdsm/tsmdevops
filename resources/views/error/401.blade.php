@extends('layout.main')
@section('content')
    <div class="erropage text-center">
        <div class="errobox">
            <h2>Error 401</h2>
            <hr style="color: #0b2e13; ">
            <h4>Usuário não Autorizado</h4>
            <a href="/">Voltar</a>
        </div>
    </div>
@stop

@section('style')
    <style>
        .erropage {
            background-color: #0c84ff;
            background: linear-gradient(80deg, #0c84ff 0%, #2e93ff 50%,#1cc6e1 100%);
            height: 100vh;
            width: 100vw;
            position: relative;
        }
        .errobox {
            margin: 0;
            background: white;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 50px 0px rgba(0,0,0,0.66);
        }
        h2{
            color: darkred;
            font-weight: bolder;
        }
        hr{
            border: 0;
            height: 1px;
            background: #333;
        }
    </style>
@stop
