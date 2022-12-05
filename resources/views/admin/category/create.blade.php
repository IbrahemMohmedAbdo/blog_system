@extends('layouts.master')
@section('title', 'Category')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4"> Add Category</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> Add category</li>
    </ol>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{url('admin/add-category')}}" method="POST" enctype="multipart/form-data">


    @csrf
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" id="exampleInput" >

        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">slug</label>
            <input type="text" class="form-control" name="slug" id="exampleInput" >

          </div>
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">description</label>
            <textarea name="description" rows="5" class="form-control"></textarea>

          </div>
          <div class="mb-3">
            <label for="exampleInputName" class="form-label">Image</label>
            <input type="file" class="form-control"  name="image" id="exampleInput" >

          </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>






@endsection
