<section class="h-100 h-custom" style="background-color: #eee;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5 class="mb-3"><a href="#!" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <p class="mb-1">Shopping cart</p>
                                        <p class="mb-0">You have <span>{{ session()->has('cart') ? count(session()->get('cart')) : 0 }}</span> items in your cart</p>
                                    </div>
                                </div>
                                <!-- Shopping Cart Details -->
                                @if(session()->has('cart') && count(session()->get('cart')) > 0)
                                <div class="shoping__cart__table">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="shoping__product">Products</th>
                                                <th>Price</th>

                                                <th>Total</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $subtotal = 0;
                                            @endphp
                                            @foreach(session()->get('cart') as $key => $data)
                                            @php
                                            $subtotal += $data['subtotal'];
                                            @endphp
                                            <tr>
                                                <td class="shoping__cart__item">
                                                    <div class="card">
                                                        <img src="img/cart/cart-1.jpg" alt="">
                                                        <div class="card-body">
                                                            <h5>{{ $data['title'] }}</h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="shoping__cart__price">
                                                    BDT {{ $data['price'] }}
                                                </td>
                                                
                                                <td class="shoping__cart__total">
                                                    BDT {{ $data['subtotal'] }}
                                                </td>
                                                <td class="shoping__cart__item__close">
                                                    <a class="btn btn-danger" href="{{ route('cart.item.delete', $key) }}"> <i class="icon_close" style="color: black"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif
                            </div>
                            <div class="col-lg-5">
                                @if(session()->has('cart') && count(session()->get('cart')) > 0)
                                <div class="card bg-primary text-white rounded-3">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="mb-0">Card details</h5>
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                                        </div>
                                        <div class="mb-4">
                                            <h5>{{ $data['title'] }}</h5>
                                            <p class="mb-0">Price: BDT {{ $data['price'] }}</p>
                                        </div>
                                        <hr class="my-4">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-2">Subtotal</p>
                                            <p class="mb-2" id="subtotal">BDT {{ number_format($subtotal, 2) }}</p>
                                        </div>
                                        <button type="button" class="btn btn-info btn-block btn-lg">
                                            <div class="d-flex justify-content-between">
                                                <span id="total">BDT {{ number_format($subtotal, 2) }}</span>
                                                <a href="{{ route('order', $key) }}">Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></a>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }
</style>
