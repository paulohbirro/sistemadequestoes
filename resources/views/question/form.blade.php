<div style="padding-left: 20px; padding-top: 10px;" class="row">
    <div class="col-md-8">
        <label for="exampleInputEmail1">
            Pergunta:
        </label>
            <div class="form-group">
                <textarea name="question" class="col-12" rows="4" cols="50"></textarea>
            </div>

        <label for="exampleInputEmail1">
            Resposta:
        </label>
            <div class="form-group">

                <input checked name="type" id="aberta" value="A" type="radio" > Aberta:
                <input name="type" id="fechada" value="F" type="radio" > Fechada:

            </div>

        <div id="gAberta" style="display: none">
            <label for="exampleInputEmail1">
                Gabarito:
            </label>
            <div class="form-group">
                <textarea name="open_answer"  class="col-12"  rows="4" cols="50"></textarea>
            </div>
        </div>

        <div id="gFechada" style="display: none">

        <div class="form-group">

            <label>
                A:
            </label>
            <input name="A" class="form-control" type="text" />
        </div>

        <div class="form-group">

            <label>
                B:
            </label>
            <input name="B" class="form-control" type="text" />
        </div>

        <div class="form-group">

            <label >
                C:
            </label>
            <input name="C" class="form-control"  type="text" />
        </div>

        <div class="form-group">

            <label >
                D:
            </label>
            <input name="D" class="form-control" type="text" />
        </div>

        <label >
            Gabarito:
        </label>
        <div class="form-group">
            <input name="feedback" value="A" type="radio" > A
            <input name="feedback" value="B" type="radio" > B
            <input name="feedback" value="C" type="radio" > C
            <input name="feedback" value="D" type="radio" > D
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