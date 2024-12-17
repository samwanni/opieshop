<!DOCTYPE html>
    <html>
        <head>
            @include('home.css')
        </head>

        <body>
            <div class="hero_area">
                @include('home.header')
            </div>

            <section class="shop_section layout_padding">
                <div class="container">
                    <div class="heading_container heading_center">
                        <h3>ОПИСАНИЕ</h3>
                    </div>
                    
                    <div class="row">

                        <div class="col-md-12">
                            <div class="box">
                                <div class="div_center_details">
                                    <img width="600px" src="/products/{{$data->image}}">
                                </div>
                                
                                <div class="detail-box_details">
                                    <h3>{{$data->title}}</h3>
                                    <h6><span>{{$data->price}} byn</span></h6>
                                </div>

                                <div class="detail-box_details">
                                    <h6>Категория: {{$data->category}}</h6>
                                    <h6>Вес: <span>{{$data->quantity}} гр</span></h6>
                                </div>
                    
                                <div class="detail-box_details">
                                    <p>{{$data->description}}</p>
                                </div>
                
                                <div>
                                    <a class="btn btn-success" href="{{url('add_cart',$data->id)}}">В корзину</a>
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </section>

                @include('home.footer')
    
        </body>
    </html>