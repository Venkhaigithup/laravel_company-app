@extends('cruds.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Edit crud</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('cruds.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('cruds.update',$crud->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="inputPosition" class="form-label"><strong>Position:</strong></label>
            <input
                type="text"
                name="Position"
                value="{{ $crud->Position }}"
                class="form-control @error('Position') is-invalid @enderror"
                id="inputPosition"
                placeholder="Position">
            @error('Position')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputSalary" class="form-label"><strong>Salary:</strong></label>
            <textarea
                class="form-control @error('Salary') is-invalid @enderror"
                style="height:150px"
                name="Salary"
                id="inputSalary"
                placeholder="Salary">{{ $crud->Salary }}</textarea>
            @error('Salary')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
    </form>

  </div>
</div>
@endsection
