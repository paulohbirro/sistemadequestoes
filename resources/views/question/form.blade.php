<div style="padding-left: 20px; padding-top: 10px;" class="row">
    <div class="col-md-8">
        <label for="exampleInputEmail1">
            Pergunta:
        </label>
            <div class="form-group">
                <textarea name="question" class="col-12" rows="4" cols="50">{{old('question',isset($question->question) ? $question->question : '')}}</textarea>
            </div>

        <label for="exampleInputEmail1">
            Resposta:
        </label>
            <div class="form-group">

                <input  {{( (isset($question) and $question->type=='A') or (old('type') == "A"))? 'checked' : '' }} checked name="type" id="aberta" value="A" type="radio" > Aberta:
                <input  {{( (isset($question) and $question->type=='F') or (old('type') == "F"))? 'checked' : '' }} name="type" id="fechada" value="F" type="radio" > Fechada:

            </div>

        <div id="gAberta" style="display: none">
            <label for="exampleInputEmail1">
                Gabarito:
            </label>
            <div class="form-group">
                <textarea name="open_answer"  class="col-12"  rows="4" cols="50">{{old('question',isset($question->open_answer) ? $question->open_answer : '')}}</textarea>
            </div>
        </div>

        <div id="gFechada" style="display: none">

        <div class="form-group">

            <label>
                A:
            </label>
            <input name="A" value="{{old('A',isset($response->A) ? $response->A : '')}}" class="form-control" type="text" />
        </div>

        <div class="form-group">

            <label>
                B:
            </label>
            <input name="B" value="{{old('B',isset($response->B) ? $response->B : '')}}" class="form-control" type="text" />
        </div>

        <div class="form-group">

            <label >
                C:
            </label>
            <input name="C" value="{{old('C',isset($response->C) ? $response->C : '')}}" class="form-control"  type="text" />
        </div>

        <div class="form-group">

            <label >
                D:
            </label>
            <input name="D" value="{{old('D',isset($response->D) ? $response->D : '')}}"  class="form-control" type="text" />
        </div>

        <label >
            Gabarito:
        </label>
        <div class="form-group">
            <input name="feedback" {{( (isset($question) and $question->feedback=='A') or (old('feedback') == "A"))? 'checked' : '' }} value="A" type="radio" > A
            <input name="feedback" {{( (isset($question) and $question->feedback=='B') or (old('feedback') == "B"))? 'checked' : '' }} value="B" type="radio" > B
            <input name="feedback" {{( (isset($question) and $question->feedback=='C') or (old('feedback') == "C"))? 'checked' : '' }} value="C" type="radio" > C
            <input name="feedback" {{( (isset($question) and $question->feedback=='D') or (old('feedback') == "D"))? 'checked' : '' }} value="D" type="radio" > D
        </div>

    </div>

    </div>

</div>

<script type="text/javascript">

    $(document).ready(function(){
        $("#gAberta").show();
        $("#aberta").click(function () {
            $("#gAberta").show('slow');
            $("#gFechada").hide();
        });

        $("#fechada").click(function () {
            $("#gFechada").show('slow');
            $("#gAberta").hide();
        });

    });

</script>