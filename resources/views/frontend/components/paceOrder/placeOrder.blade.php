@extends('frontend\layout\app')

@section('content')

@include('frontend\components\device\deviceBanner')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Booking Form</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <!-- Left Column - Booking Form -->
            <div class="col-md-12">
                <!-- Booking Form -->
                <form action="{{ route('pay.now',$devices->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <section class="order-form m-4">
                        <div class="container pt-4">
                            <div class="row">
                                <div class="col-12 px-4 text-center">
                                    <h1>Buy filling up this form</h1>
                                    <span>with some explanation below</span>
                                    <hr class="mt-1" style="width: 50%;">
                                </div>

                                <div class="col-12">
                                    <div class="row mx-4">
                                        <div class="col-md-6">
                                            <label class="order-form-label">Full Name</label>
                                            <div class="form-outline">
                                                <input type="text" name="title" id="form1" class="form-control order-form-input" />
                                            </div>
                                            @error('title')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="order-form-label">Phone Number</label>
                                            <div class="form-outline">
                                                <input type="tel" name="phone" id="form3" class="form-control order-form-input" />
                                            </div>
                                            @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3 mx-4">
                                        <div class="col-md-6">
                                            <label class="order-form-label">Email Address</label>
                                            <div class="form-outline">
                                                <input type="email" name="email" id="form4" class="form-control order-form-input" />
                                            </div>
                                            @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label class="order-form-label">Address</label>
                                            <div class="form-outline">
                                                <input type="text" name="address" id="form5" class="form-control order-form-input" />
                                            </div>
                                            @error('address')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <input type="hidden" name="price" value="{{ $devices->price }}">
                                    </div>
                                    <div>
                                        <input type="hidden" name="currency" value="{{ $devices->currency }}">
                                    </div>
                                    <div>
                                        <input type="hidden" name="device_id" value="{{ $devices->id }}">
                                    </div>
                                    <div>
                                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    </div>

                                    <div class="row mt-3 mx-4">
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                                <label class="form-check-label" for="flexCheckDefault">I know what I need to know</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12">
                                            <button style="color: black" type="submit" id="" class="btn btn-primary d-block mx-auto ">Continue</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>


        </div>
    </div>
</body>
</html>

@endsection
