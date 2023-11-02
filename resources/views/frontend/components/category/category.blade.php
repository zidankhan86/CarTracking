

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-option spad set-bg" data-setbg="frontend/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Category</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ route('home') }}">Home</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Services Section Begin -->
<section class="services services-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Our Product</span>
                    <h2>Categores</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($categories as $item)


            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="services__item">
                   <a href="{{ route('category.wise.device',$item->id) }}"> <img height="150px" width="150px" src="{{ url('/uploads/', $item->image) }}" alt="" style="border-radius: 50%;"></a>

                    <h4>{{ $item->type_name }}</h4>

                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- Services Section End -->
