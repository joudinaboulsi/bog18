@extends('layouts.master')

@section('content')

    <div class="row justify-content-center">

      <div class="col-12">
            <div class="card">
                <div class="card-header">
                    Categories
<hr>

                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create category</a>
                </div>

                <div class="card-body">

                    @include('partials.alerts')

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Description Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name}}</td>
                                <td>
                                  {{ $category->description}}

                                </td>
                                <td>
                                    <a href="{{ route('categories.edit', ['category'=> $category->id]) }}" class="btn btn-xs btn-info">Edit</a>
                                    <form action="{{ route('categories.destroy', ['category'=> $category->id]) }}" method="POST" style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-xs btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

</div>
@endsection
