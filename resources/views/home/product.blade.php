<section id="product" class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">

            <div>
                <h2 class="productshop-head">Свежая выпечка</h2>
            </div>
            <div>
                <form class="productshop-search" action="{{url('productshop_search')}}" method="get">
                    @csrf
                    <input class="search-product" type="search" name="search">
                    <input type="submit" class="btn btn-secondary" value="Поиск">
                </form>
            </div>

        </div>

        <div class="row">
            @foreach($product as $products)

            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="box">
                    <div class="img-box">
                        <img  src="products/{{$products->image}}">
                    </div>
                        
                    <div class="detail-box">
                        <h6>{{$products->title}}</h6>
                        <h6><span>{{$products->price}} byn</span></h6>
                    </div>
                        
                    <div class="product_buttons">
                        <div><a class="btn btn-secondary" href="{{url('product_details',$products->id)}}"><span class="btn-product">Описание</span></a></div>
                        <div><a class="btn btn-success" href="{{url('add_cart',$products->id)}}"><span class="btn-product">В корзину</span></a></div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>