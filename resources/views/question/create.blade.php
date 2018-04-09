@extends('layouts.app', ['title' => 'Cadastro de questões', 'back' => route('question.index')])

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cadastro de questões</div>
            <form method="post" action="{{route('question.store')}}">
                {{ csrf_field() }}
                    @include('question.form')
                    <button  type="submit" class="btn btn-primary btn-lg col-12  ">Salvar</button>
            </form>
                </div>
            </div>
        </div>
    </div>
@endsection

