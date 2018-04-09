@extends('layouts.app', ['title' => 'Alterar questões', 'back' => route('question.index')])



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Alterar questão</div>
                    <form method="post" action="{{route('question.store')}}">
                        {{ csrf_field() }}
                        @include('question.form')
                        <button  type="submit" class="btn btn-primary btn-lg col-12  ">Salvar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>



    <script type="text/javascript">

        $(document).ready(function(){
            $("#gAberta").show();
            $("#gFechada").show('slow');


        });

    </script>

@endsection