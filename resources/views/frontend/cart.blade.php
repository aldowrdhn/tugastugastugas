@extends('layouts.front.master')
@push('js')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    // let data = [];
    $('.qty').each(function() {
        $(this).change(function() {
            const qty = $(this).val()
            const product = $(this).data('product')
            axios.patch(`/cart/${product}`, {
                satuan: qty
            }).then(res => {
                window.location.href = '/cart'
            }).catch(err => {
                console.log(err)
            })
        })
    })
    // $('.item').each(function() {
    //     data.push($(this).data('item'))
    // })
    // $('.item-products').attr('name', `products[${data}]`)
</script>
@endpush
@section('content')
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Wrapkit</p>
        </div>
    </div>
    <div class="container-fluid">
        <div class="banner-innerpage" style="background-image:url(../assets/images/innerpage/banner-bg4.jpg)">
            <div class="container">
                <!-- Row  -->
                <div class="row justify-content-center ">
                    <!-- Column -->
                    <div class="col-md-6 align-self-center text-center" data-aos="fade-down" data-aos-duration="1200">
                        <h1 class="title">Shopping Cart</h1>
                        <h6 class="subtitle op-8">We are Small Team of Creative People working together</h6> </div>
                    <!-- Column -->
                </div>
            </div>
        </div>
        @php
            $total = 0;
        @endphp
        <div class="spacer">
            <div class="container">
                <div class="row m-t-30">
                    <!-- column  -->
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <table class="table shop-table">
                            <tr>
                                <th class="b-0">Product</th>
                                <th class="b-0">Decription</th>
                                <th class="b-0">Quantity</th>
                                <th class="b-0 text-right">Price</th>
                            </tr>
                            @forelse ($carts as $cart)
                            <tr class="item" data-item="{{ $cart->product->id }}">
                                <td><img src="{{ Storage::url($cart->product->img_product) }}" width="200" alt="wrapkit" /></td>
                                <td>
                                    <h6>{{ $cart->product->nama_product }}</h6>
                                    <h6 class="subtitle">{{ $cart->product->code_product }}</h6>
                                    <h6 class="subtitle">Brand : {{ $cart->product->category->name_category }}</h6></td>
                                <td>
                                    <select class="custom-select qty" data-product="{{ $cart->id }}">
                                        <option value="1" {{ $cart->qty === 1 ? 'selected' : ''}}>1</option>
                                        <option value="2" {{ $cart->qty === 2 ? 'selected' : ''}}>2</option>
                                        <option value="3" {{ $cart->qty === 3 ? 'selected' : ''}}>3</option>
                                        <option value="4" {{ $cart->qty === 4 ? 'selected' : ''}}>4</option>
                                    </select>
                                </td>
                                <td class="text-right">
                                    <h5 class="font-medium m-b-30">Rp. {{ number_format($cart->product->price * $cart->qty, 2, ',', '.') }}</h5>
                                </td>
                            </tr>
                            @php
                                $total += ($cart->product->price * $cart->qty);
                            @endphp
                            @empty
                            <tr>
                                <td colspan="4">
                                    <h3 class="text-center">Ops.. keranjang kamu kosong</h3>
                                </td>
                            </tr>
                            @endforelse
                            <tr>
                                <td colspan="4"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="offset-1 col-xl-3 col-lg-3 col-md-12 col-sm-12">
                        <form action="{{ url('/checkout') }}" method="post">
                            @csrf
                            <div class="form-group mb-4">
                                <label for="address">Alamat</label>
                                <textarea name="address" id="address" placeholder="Complete Address.." cols="30" rows="3" class="form-control"></textarea>
                                {{-- <input type="hidden" name="products[]" class="item-products"> --}}
                            </div>
                            <div class="d-flex">
                                <span class="font-weight-bold">Total</span>
                                <h5 class="font-medium m-b-20 ml-auto">Rp. {{ number_format($total, 2, ',', '.') }}</h5>
                            </div>
                            <button type="submit" class="btn btn-block btn-info pull-right">Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection