@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Banco de questões</div>
                    {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                    {{--<div class="alert alert-success">--}}
                    {{--{{ session('status') }}--}}
                    {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in!--}}
                    {{--</div>--}}

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table table-hover">
                                <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Questão
                                    </th>
                                    <th>
                                        Tipo
                                    </th>
                                    <th>
                                        Usuário
                                    </th>
                                    <th>
                                        Gerenciar
                                    </th>
                                </tr>
                                </thead>

                                <tbody>

                                @forelse($question as $questions)

                                <tr>
                                    <td>
                                        {{$questions->id}}
                                    </td>
                                    <td>
                                        {{$questions->question}}
                                    </td>
                                    <td>
                                        {{$questions->type=="A"?\App\Questions::ABERTA:\App\Questions::MULTIPLA}}
                                    </td>
                                    <td>
                                        {{$questions->users_id}}

                                    </td>
                                    <td>
                                        <a href="{{route('question.edit',$questions->id)}}" class="btn btn-success"><i class="material-icons">edit</i></a>
                                    </td>
                                </tr>

                                @empty
                                    <tr>
                                        <td colspan="11">Nenhuma pedido encontrado</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <div class="row">
                <div class="col-md-12 ">
                {{ $question->appends(request()->query())->render() }}
            </div>
        </div>
    </div>
@endsection
