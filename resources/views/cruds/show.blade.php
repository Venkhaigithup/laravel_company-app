@extends('cruds.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Show crud</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('cruds.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Position:</strong> <br/>
                {{ $crud->Position }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Salary:</strong> <br/>
                {{ $crud->Salary }}
            </div>
        </div>
    </div>

  </div>
</div>
@endsection
