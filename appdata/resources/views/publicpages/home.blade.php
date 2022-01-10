@extends('template\publictemplate')

@section('title', 'Home')

@section('content')





      <div class="fashion_section">

                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">




                          <div class="col-lg-4 col-md-6 col-ms-1">
                                <div class="impl_fea_car_box">
                                    <div class="impl_fea_car_img">
                                        <img src="{{asset('assets/images/images (14).jpeg')}}" alt="" class="Responsive image" />
                                    </div>
                                    <div class="impl_fea_car_data">
                                        <h2><a href="purchase_new.html">Aurora</a></h2>
                                        <ul>
                                            <li><span class="impl_fea_title">model</span>
                                                <span class="impl_fea_name">Aurora 811</span></li>
                                            <li><span class="impl_fea_title">Vehicle Status</span>
                                                <span class="impl_fea_name">new</span></li>
                                            <li><span class="impl_fea_title">Color</span>
                                                <span class="impl_fea_name">white</span></li>
                                        </ul>
                                        <div class="impl_fea_btn">
                                            <button class="impl_btn" onclick="document.location.href='detailproduct.html';">
                                              <span class="btn_price btn-2_price btn-sep_price">
                                                <i class="price_new">$ 72000</i>
                                                <i class="price_old" >$ 72000</i>
                                              </span>

                                              <span class="impl_bnw button-49" role="button">buy now</span>

                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>










                        </div>
                     </div>
                  </div>


         </div>






@endsection
