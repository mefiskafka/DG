@if  (!  $errors->isEmpty())
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger">
                <p><strong>Debes completar o corregir lo siguientes campos para que se agregue el registro:</strong> </p><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error  }}</li>
                    @endforeach
                    <br>
                </ul>
            </div>
        </div>
    </div>
@endif