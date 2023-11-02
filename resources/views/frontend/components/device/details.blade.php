
  <!-- Blog Details Section Begin -->
  <section class="blog-details spad">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="blog__details__content">
                    <div class="blog__details__title">
                        <ul>
                            <li>{{ $devices->created_at->format('D-M-Y') }}</li>

                        </ul>
                        <h2>{{ $devices->title }}</h2>
                        <img src="{{ url('/uploads/',$devices->image) }}" alt="">
                        <p>{!! $devices->description !!}</p>
                    </div>




                    </div>
                    <div class="blog__item__quote">
                        <h2>FEATURES</h2><br>
                    <div class="blog__details__text">
                        @if($devices->features)
                            @foreach(json_decode($devices->features) as $feature)
                                <p><i class="fas fa-check"></i> {{ $feature }}</p>
                            @endforeach
                        @endif
                    </div>



                </div>
                <div class="text-center">
                    <a href="{{ route('order',$devices->id) }}" class="btn btn-danger">BUY</a>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->
