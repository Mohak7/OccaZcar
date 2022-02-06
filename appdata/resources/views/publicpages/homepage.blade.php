@extends('template\layoutpublic')

@section('title', 'Home')

@section('content')


<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">


            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">





                    <!-- product -->
                    {{--<div class="product col-md-3">--}}
                        {{--<div class="product-img">--}}
                            {{--<img src="{{asset('assets/img/images (12).jpeg')}}" alt="">--}}
                            {{--<div class="product-label">--}}
                                {{--<span class="sale">-30%</span>--}}
                                {{--<span class="new">NEW</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="product-body">--}}
                            {{--<p class="product-category">Category</p>--}}
                            {{--<h3 class="product-name"><a href="#">product name goes here</a></h3>--}}
                            {{--<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>--}}
                            {{--<div class="product-rating">--}}
                                {{--<i class="fa fa-star"></i>--}}
                                {{--<i class="fa fa-star"></i>--}}
                                {{--<i class="fa fa-star"></i>--}}
                                {{--<i class="fa fa-star"></i>--}}
                                {{--<i class="fa fa-star"></i>--}}
                            {{--</div>--}}
                            {{--<div class="product-btns">--}}
                                {{--<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>--}}
                                {{--<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>--}}
                                {{--<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="add-to-cart">--}}
                            {{--<button class="add-to-cart-btn">Details</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <!-- /product -->


                    @forelse ($list as $prod)
                        <!-- product -->
                            <div class="product col-md-3">
                                <div class="product-img">
                                    @forelse (photovoiturehelp($prod->produits_id,1) as $img)
                                        <img src="{{asset('assets/images/'.$img->photoname)}}" width="100%">
                                    @empty
                                        <img src="{{asset('assets/img/images (12).jpeg')}}" width="100%">
                                    @endforelse
                                </div>
                                <div class="product-body">
                                    <p class="product-category">
                                        {{$prod->prodview->Categorieviews->namecate}} {{--Maintenant on peut afficher le nom de la categorie--}}
                                    </p>
                                    <h3 class="product-name"><a href="#">{{$prod->prodview->marque}} | {{$prod->prodview->modele}} | {{$prod->prodview->couleurvoiture->nameprodcolor}}</a></h3>
                                    <h4 class="product-price">${{$prod->amount}}</h4>
                                </div>
                                <div class="add-to-cart">
                                    <a href="{{route('cardetailpage',$prod->id)}}" class="add-to-cart-btn">Details</a>
                                </div>
                            </div>
                            <!-- /product -->
                    @empty
                        <p>No Produits Price</p>
                    @endforelse

                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


@include('template\newletter')




@endsection
