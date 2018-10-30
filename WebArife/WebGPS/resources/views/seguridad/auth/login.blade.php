@extends ('layouts.app')
@section ('content')
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <br>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title">Acceso a la Plataforma</h1>
          </div>
          <div class="panel-body">
            <form>
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" value="" placeholder="Ingresa tu email">
              </div>
              <div class="form-group">
                <label for=pass>Contraseña</label>
                <input class="form-control" type="password" name="pass" value="" placeholder="******************">
              </div>
              <button class="btn btn-primary btn-block" type="button" name="button">Acceder</button>
            </form>
          </div>
        </div>
    </div>
  </div>
@endsection
