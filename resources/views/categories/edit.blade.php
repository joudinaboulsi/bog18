@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Category
                   <hr>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create category</a>
                </div>

                <div class="card-body">
                    
                    @include('partials.alerts')

                    <form action="{{ route('categories.update', ['category'=>$category->id] ) }}" method="post">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PUT">
                        <div class="form-group">
                            <label for="name">Category Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Parent Category:</label>
                              <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}">
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