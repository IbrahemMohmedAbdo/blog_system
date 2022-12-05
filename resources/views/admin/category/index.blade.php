@extends('layouts.master')
@section('title', 'Category')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Category</h1>

    @if (session('mess'))
    <div class="alert alert-success" role="alert">
        {{ session('mess') }}
    </div>
    @endif
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active"> all category</li>
    </ol>
    <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end">Add Category</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">slug</th>
            <th scope="col">description</th>
            <th scope="col">image</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($data as $item )


            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->slug}}</td>
            <td>{{$item->description}}</td>
            <td>
            <img src="{{asset($item->image)}}" width=50px height="50px" alt="">

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>










</div>

@endsection
