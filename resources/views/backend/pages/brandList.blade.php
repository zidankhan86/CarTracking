@extends('backend\layout\app')
@section('content')

<div class="container">
    <div class="container">
        <div class="container">


<br><br><h4>Brand Table</h4>
<div style="text-align: right">
    <a href="{{ route('brand.form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Brand</a>
</div><br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Brand Name</th>
        <th scope="col">Brand List</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        @foreach ($brands as $item)


        <th scope="row">{{ $item->id}}</th>
        <td>{{ $item->brand_name}}</td>
        <td>{{ $item->brand_type}}</td>
        <td>
            <a href="{{ route('brand.edit',$item->id) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('brand.delete',$item->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>

      @endforeach

    </tbody>
  </table>
</div>
</div>
</div>


@endsection
