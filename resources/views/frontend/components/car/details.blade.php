
  <!-- Blog Details Section Begin -->
  <section class="blog-details spad">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="blog__details__content">
                    <div class="blog__details__title">
                        <ul>
                            <li>{{ $details->created_at->format('D-M-Y') }}</li>

                        </ul>
                        <h2>{{ $details->car_name }}</h2>
                        <img src="{{ url('/uploads/',$details->image) }}" alt="">
                        <p>Car: {!! $details->car_name !!}</p>

                        <strong>BDT {!! $details->fee !!}/day</strong>
                    </div>




                    </div>
                    <div class="blog__item__quote">
                        <h2>Details</h2><br>
                        <p>Car: {!! $details->car_name !!}</p>

                        <strong>BDT {!! $details->fee !!}/day</strong>
                        <p>{!! $details->description !!}</p>

                        <p>Sit: {!! $details->sit !!}</p>
                    <div class="blog__details__text">

                    </div>



                </div>
                <div class="text-center">
                    <a href="{{ route('booking.form',$details->id) }}" class="btn btn-danger">Rent Now</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
