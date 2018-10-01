{!! Form::open(array('url'=>'datos/mecanico','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
  <div class="input-group">
    <input type="text" name="searchText" value="{{$searchText}}" class="form-control" placeholder="Buscar...">
    <span class="input-group-btn">
      <button type="submit" class="btn btn-primary" name="button">Buscar</button>
    </span>
  </div>
</div>
{{Form::close()}}
