@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Minhas questões</div>

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
                                    <th width="200px">
                                        Administrar
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
                                            {{$questions->type}}
                                        </td>

                                        <td>
                                            <button class="btn btn-success"><i class="material-icons">edit</i></button>
                                            <a  class="btn btn-danger" href="{{route('question.destroy',$questions->id)}}"><i class="material-icons">delete</i></a>

                                        </td>
                                    </tr>

                                @empty
                                    <tr>
                                        <td colspan="11">Nenhuma questão cadastrada</td>
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
            <div style="padding-top: 10px;" class="col-md-12 ">
                {{ $question->appends(request()->query())->render() }}
            </div>
        </div>
    </div>
    <div style="position: fixed;left: 0; bottom: 0;width: 100%;text-align: right;padding-right: 100px;padding-bottom: 30px;">
        <a  href="{{route('question.create')}}"> <i class="material-icons"><h1 style="font-size:60px">add</h1></i>
    </div>
@endsection



