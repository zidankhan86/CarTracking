@extends('backend\layout\app')
@section('content')


<style>
    .container {
        max-width: 1000px; /* Adjust the width as desired */
        margin-left: auto;
        margin-right: auto;
    }
    .custom-textarea {
        height: 100px;
    }
</style>


<div class="container">
    <h3>Add Car Form</h3>
    <form action="{{ route('car.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Car Name</label>
            <input type="text" class="form-control" name="car_name" id="exampleInputEmail1" placeholder="Enter Brand Name">
            <div>@error('car_name')
                <p class="text-danger">{{ $message }}</p>
            @enderror</div>
        </div>

        <div class="form-group">
            <label>Brand Type</label>
            <select name="brand_id" id="" class="form-control">
                @foreach ($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->brand_type}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Fuel Type</label>
            <input type="text" class="form-control" name="fuel_type" id="exampleInputPassword1" placeholder="Brand Type Name">
            <div>@error('fuel_type')
                <p class="text-danger">{{ $message }}</p>
            @enderror</div>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Car Image</label>
            <input type="file" class="form-control" name="image" id="exampleInputPassword1" placeholder="Brand Type Name">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Rent Fee</label>
            <input type="number" class="form-control" name="fee" id="exampleInputPassword1" placeholder="Brand Type Name">
            <div>@error('fee')
                <p class="text-danger">{{ $message }}</p>
            @enderror</div>
        </div>

        <div class="form-group">
            <label for="">Sit</label>
            <input type="number" class="form-control" name="sit" id="" placeholder="Sit">
            <div>@error('sit')
                <p class="text-danger">{{ $message }}</p>
            @enderror</div>
        </div>

        <div class="form-group">
            <label for="">Available Cars</label>
            <input type="number" class="form-control" name="stock" id="" placeholder="Sit">
            <div>@error('stock')
                <p class="text-danger">{{ $message }}</p>
            @enderror</div>
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control custom-textarea" name="description" id="" placeholder="Description"></textarea>
            <div>@error('description')
                <p class="text-danger">{{ $message }}</p>
            @enderror</div>
        </div><br>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
