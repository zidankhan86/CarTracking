
    <!-- Latest Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Choose your best deal</span>
                        <h2>Book your package</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="latest__btn">
                        <a href="#" class="primary-btn normal-btn">View All</a>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($cars as $car)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <h4>{{$car->brands->brand_type}}</h4>

                        <div class="latest__item__pic">
                            <img src={{ url('/uploads/', $car->image) }} alt="">
                        </div>
                        <div class="latest__item__text">
                            {{-- <span>Brand: {{ $car->car->brand_name }}</span> --}}
                            <h4>BDT {{$car->brand_id}}/day</h4>
                            <h6>Oil: {{$car->fuel_type}}</h6>
                            <h6>Sit: {{$car->sit}}</h6>
                            <h6>Availeable: {{$car->stock}} Cars</h6><br>
                            <a href="{{ route('car.details',$car->id) }}">Details</a>
                        </div>
                    </div>
                </div>

                @endforeach




            </div>
        </div>
    </section>
    <!-- Latest Section End -->
