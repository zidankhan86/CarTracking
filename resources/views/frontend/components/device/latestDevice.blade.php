
    <!-- Latest Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Keep Update</span>
                        <h2>Latest Device</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="latest__btn">
                        <a href="#" class="primary-btn normal-btn">View All</a>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($devices as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="latest__item">
                        <div class="latest__item__pic">
                            <img src={{ url('/uploads/', $item->image) }} alt="">
                        </div>
                        <div class="latest__item__text">
                            <span>{{ $item->category->type_name }}</span>
                            <h4>{!! $item->title !!}</h4>
                            <a href="{{ route('details',$item->id) }}">Read more</a>
                        </div>
                    </div>
                </div>

                @endforeach




            </div>
        </div>
    </section>
    <!-- Latest Section End -->
