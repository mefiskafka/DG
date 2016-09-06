<div class="row">
    <div class="col-lg-8">
            <form class=".col-xs-6 .col-sm-4 .col-lg-8 form-group" method="post">
        {{csrf_field()}}
        <br/>
        <br/>
        <br/>

        <fieldset>

            <!-- Form Name -->
            {{--<div class="lead">Formulario de Libreta de Direcciones</div>--}}
            <legend>Formulario de Libreta de Direcciones</legend>
            <!-- <p class="bg-info">"Formulario de Equipos de Compresión"</p> -->
            <!-- Select Basic -->
            <!-- Text input-->

            <div class="controls">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="Ficha">Ficha:</label>
                            <input id="Ficha" name="Ficha" value="{{$Ficha}}" type="text" placeholder="Escribe la Ficha" class="form-control input-md" required="required">
                            <span class="help-block">Ej. 325487</span>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="cumpleaños">Cumpleaños:</label>
                            {{--id="datepicker"--}}
                            <div  class="input-append date input-group .col-md-4">
                                <input id="cumpleaños" name="date" value="{{$cumpleaños}}" type="text" placeholder="Escribe Fecha Cumpleaños" class="form-control" readonly>
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="Nombre">Nombre:</label>
                                <input id="nombre" name="nombre" value="{{$nombre}}" type="text" placeholder="Escribe Nombre" class="form-control">

                                <span class="help-block">Ej. Hector</span>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="Apellido Paterno">Apellido Paterno:</label>
                                <input id="apeidoPaterno" name="apeidoPaterno" value="{{$apeidoPaterno}}" type="text" placeholder="Escribe Apellido Paterno" class="form-control">
                                <span class="help-block">Ej. Hernández</span>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="apeidoMaterno">Apellido Materno:</label>
                                <input id="apeidoMaterno" name="apeidoMaterno" value="{{$apeidoMaterno}}" type="text" placeholder="Escribe Apellido Materno" class="form-control">
                                <span class="help-block">Ej. Escobar</span>
                            </div>
                        </div>
                </div>
                <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                            <label for="email">e-mail Trabajo:</label>
                            <div class=".col-xs-6 .col-md-4">
                                <input id="emailTrabajo" name="emailTrabajo" value="{{$emailTrabajo}}" type="text" placeholder="Escribe e-mail Trabajo" class="form-control input-md">
                                <span class="help-block">Ej. hector.hernandeze@pemex.com</span>
                            </div>
                        </div>
                            </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="emailPersonal">e-mail Personal:</label>
                                <div class=".col-xs-6 .col-md-4">
                                    <input id="emailPersonal" name="emailPersonal" value="{{$emailPersonal}}" type="text" placeholder="Escribe e-mail Personal" class="form-control input-md">
                                    <span class="help-block">Ej. hector@gmail.com</span>
                                </div>
                             </div>
                        </div>




                </div>




            <!-- =================Aceptar cancelar-->
            <div class="form-group">
                <label class=".col-xs-6 .col-md-4 control-label" for="btt-aceptar"></label>
                <div class=".col-xs-6 .col-md-8">
                    <button id="btt-aceptar" name="btt-aceptar" class="btn btn-success">Aceptar</button>
                    <button id="btt-cancelar" name="btt-cancelar" class="btn btn-danger">cancelar</button>
                </div>
            </div>
            </div>
        </fieldset>
    </form>
    </div>
</div>


<script>

//    $('.input-append').datepicker();

    $('.input-append.date.input-group').datepicker({
            startView: 2,
            maxViewMode: 2,
            format: "dd/mm/yyyy",
            language: "es",
            orientation: "bottom auto",
            keyboardNavigation: false,
            forceParse: false,
            daysOfWeekHighlighted: "2,4,6",
            calendarWeeks: true,
            todayHighlight: true,
            defaultViewDate: { day: 10, month: 07, year: 2016 }
//            datesDisabled: ['07/06/2016', '07/21/2016']
    });
</script>