@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Create Category

                </div>

                <div class="card-body">

                    @include('partials.alerts')

                    <form action="{{ route('categories.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Category Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="parent_category">Parent Category:</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter description" name="description">
                            <span class="text-danger">{{ $errors->first('parent_category') }}</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
