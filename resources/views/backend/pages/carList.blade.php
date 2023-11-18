@extends('backend\layout\app')
@section('content')



<div class="container">
    <div class="container">
        <div class="container">
            <div class="container">


<br><br><div>
    <p>Car List</p><br>
    <div style="text-align: right">
        <a href="{{ route('car.form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Car</a>
    </div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Car Image</th>
        <th scope="col">Car Name</th>
        <th scope="col">Rent Fee</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

@foreach ($cars as $item)


      <tr>
        <th scope="row">{{$item->id}}</th>
        <td><img height="100px" width="100px" src="{{ url('/uploads/'.$item->image) }}" alt=""></td>
        <td>{{$item->car_name}}</td>
        <td>{{$item->fee}}</td>
        <td>{{$item->description}}</td>

        <td>

            <a href="{{ route('car.edit',$item->id) }}" class="btn btn-success">Edit</a>
            <a href="{{ route('car.delete',$item->id) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
@endsection
