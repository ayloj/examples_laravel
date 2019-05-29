@extends('layouts.main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Formulario de prepago LaraTest
                    </div>
                    <div class="card-body">
                        <form action="http://transaccional.tech/Avis/Avisform" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" name="id" value="pay">
                                <input type="hidden" name="s_transm" value="avis10001">
                                <input type="hidden" name="c_referencia" value="0001">
                                <input type="hidden" name="t_servicio" value="301">
                                <label for="">Nombre Cliente</label>
                                <input type="text" class="form-control" name="val_2">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="val_5">
                            </div>
                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control" name="val_6">
                            </div>
                            <div class="form-group">
                                <label for="">Monto</label>
                                <input type="number" class="form-control" name="t_importe">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" name="3ds" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Transacción 3DS</label>
                            </div>
                            <!--reCaptcha V3-->
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <button type="submit" class="btn btn-primary">Procesar</button>
                            <!--<a href="" class="btn btn-danger">Cancelar</a>-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src="https://www.google.com/recaptcha/api.js?render="></script>
<script>
    grecaptcha.ready(function() {
        // do request for recaptcha token
        // response is promise with passed token
        grecaptcha.execute('', {action:'form_avis'})
            .then(function(token) {
                // add token value to form
                document.getElementById('g-recaptcha-response').value = token;
            });
    });
</script>