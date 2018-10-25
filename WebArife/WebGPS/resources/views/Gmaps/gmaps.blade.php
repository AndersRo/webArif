@extends ('layouts.admin')
@section ('contenido')
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
        {!!$map['html']!!}
    </div>
  </div>
</div>
@endsection
