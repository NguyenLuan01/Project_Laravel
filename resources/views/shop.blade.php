 @extends('layout.main');

@section('body')
    <main>

        @if(session()->has('success'))
            <script>
                alert('{{ session()->get('success')}}')
            </script>
        @endif
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="colored">
                            <h1 class="page-title">Shop</h1>
                            <div class="breadcum-items">
                                <span class="item"><a href="/home">Home /</a></span>
                                <span class="item colored">Shop</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--site-banner-->

        <section class="padding-large">
            <div class="container">
                <div class="row">

                    <div class="products-grid grid">
                        @if($product)
                            @foreach($product as $item)
                                    <figure class="product-style">
                                        <img src="storage/images/{{$item->img}}" alt="Books" class="product-item">
                                        <button  type="button" class="add-to-cart" data-product-tile="add-to-cart"><a href="cart-detail/id={{$item->id}}">Add to Cart</a></button>
                                        <figcaption>
                                            <h3>{{$item->name}}</h3>
                                            <p>{{$item->author}}</p>
                                            <div class="item-price">$ {{$item->price}}.00</div>
                                        </figcaption>
                                    </figure>

                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </section>

    </main>
@endsection
