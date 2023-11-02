@extends('frontend\layout\app')

@section('content')
 <!-- Breadcrumb Section Begin -->
 <div class="breadcrumb-option spad set-bg" data-setbg="{{asset ('frontend/img/breadcrumb-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2> {{ auth()->user()->name }}'s Profile</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->
<div class="container">
    <div class="container mt-5 d-flex justify-content-center">

        <div class="card p-3">

            <div class="d-flex align-items-center">

                <div class="image">
            <img src="{{url ('/uploads/',auth()->user()->image) }}" class="rounded" width="155" >
            </div>

            <div class="ml-3 w-1000">

               <h4 class="mb-0 mt-0"> {{ auth()->user()->name }}</h4>


               <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">

                <div class="d-flex flex-column">

                    <span class="articles">Email</span>
                    <span class="number1"> {{ auth()->user()->email }}</span>

                </div>

                <div class="d-flex flex-column">


                </div>




               </div>


               <div class="button mt-2 d-flex flex-row align-items-center">

                <span >Phone :</span>
                <span class="number2">  {{ auth()->user()->phone }}</span>




               </div>


            </div>


            </div>

        </div>

     </div>
@endsection



<style>
    body{

    background-color:#B3E5FC;
    border-radius: 10px;

}


.card{
  width: 400px;
  border: none;
  border-radius: 10px;

  background-color: #fff;
}



.stats{

      background: #f2f5f8 !important;

    color: #000 !important;
}
.articles{
  font-size:10px;
  color: #a1aab9;
}
.number1{
  font-weight:500;
}
.followers{
    font-size:10px;
  color: #a1aab9;

}
.number2{
  font-weight:500;
}
.rating{
    font-size:10px;
  color: #a1aab9;
}
.number3{
  font-weight:500;
}
</style>
