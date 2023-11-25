
@extends('backend\layout\app')
@section('content')


<style>
    .container {
        max-width: 1000px; /* Adjust the width as desired */
        margin-left: auto;
        margin-right: auto;
    }
</style>
<br><br>
<div class="container">
    <div class="container">
    <h3>Add Package</h3>
    <form action="{{ route('brand.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputName">Package Name*</label>
            <input type="text" class="form-control" name="brand_name" id="exampleInputName" placeholder="Gold">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Package Type</label>
            <input type="text" class="form-control" name="brand_type" id="exampleInputPassword1" placeholder="Gold">
        </div><br>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
</div>
@endsection

