

 <!-- Project Page Section Begin -->
 <section class="project-page spad">
    <div class="container">
        <div class="row">


            @foreach ($devices as $item)


            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="project__item">
                    <a href="{{ route('details',$item->id) }}"><img src="{{ url('/uploads/'.$item->image) }}" alt=""></a>
                    <h4><a href="{{ route('details',$item->id) }}">{{ $item->title }}</a></h4>

                    <br><div>
                        <strong style="color: red">Device Price BDT {{ $item->price }}</strong>

                    </div><br>

                    <div>

                        <strong>Monthly charge BDT {{ $item->monthly_charge }}</strong>
                    </div><br>

                    <div>
                        <a href="{{ route('add.to.cart',$item->id) }}" class="btn btn-dark">Add to cart</a>
                        <a href="{{ route('details',$item->id) }}" class="btn btn-info">Details</a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>
<!-- Project Page Section End -->
