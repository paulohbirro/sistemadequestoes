<div style="padding-left: 20px; padding-top: 10px;" class="row">
    <div class="col-md-8">
        <label for="exampleInputEmail1">
            Pergunta:
        </label>
            <div class="form-group">
                <textarea rows="4" cols="50"></textarea>
            </div>

            <div class="form-group">


                <input checked name="tipo" id="tipo" value="A" type="radio" > Aberta:
                <input name="tipo" id="tipo" value="F" type="radio" > Fechada:

            </div>

        <div id="gAberta" style="display: none">
            <label for="exampleInputEmail1">
                Gabarito:
            </label>
            <div class="form-group">
                <textarea rows="4" cols="50"></textarea>
            </div>
        </div>

        <div id="gFechada" style="display: none">

        <div class="form-group">

            <label for="exampleInputEmail1">
                A:
            </label>
            <input class="form-control" id="exampleInputEmail1" type="email" />
        </div>

        <div class="form-group">

            <label for="exampleInputEmail1">
                B:
            </label>
            <input class="form-control" id="exampleInputEmail1" type="email" />
        </div>

        <div class="form-group">

            <label for="exampleInputEmail1">
                C:
            </label>
            <input class="form-control" id="exampleInputEmail1" type="email" />
        </div>

        <div class="form-group">

            <label for="exampleInputEmail1">
                D:
            </label>
            <input class="form-control" id="exampleInputEmail1" type="email" />
        </div>

        <label for="exampleInputEmail1">
            Gabarito:
        </label>
        <div class="form-group">
            <input type="radio" >  A
            <input type="radio" >   B
            <input type="radio" > C
            <input type="radio" > D
        </div>

    </div>

    </div>

</div>

<script type="text/javascript">

    $(document).ready(function(){
        $("#tipo").click(function() {
            alert($('#tipo').val());
        });
    });

</script>