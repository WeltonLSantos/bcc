@extends('templates.template')

@section('content')
    <!-- conteudo aqui-->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{ route('sistema.gerente') }}" class="btn btn-block btn-danger btn-lg btn-sq">
                        <i class="fa fa-users fa-5x"></i><br>
                        gerente <br>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#" class="btn btn-block btn-danger btn-lg btn-sq">
                        <i class="fa fa-trash-o fa-5x"></i><br>
                        Remover usuário <br>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="btn btn-block btn-danger btn-lg btn-sq">
                        <i class="fa fa-trash-o fa-5x"></i><br>
                        Remover usuário <br>
                    </a>
                </div>
                <div class="col-md-6"><a href="#" class="btn btn-block btn-danger btn-lg btn-sq">
                        <i class="fa fa-trash-o fa-5x"></i><br>
                        Remover usuário <br>
                    </a></div>
            </div>
        </div>
    </div>
@stop