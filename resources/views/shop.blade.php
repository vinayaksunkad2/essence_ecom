@extends('essense.layoutnew')

@section('contents')

    

    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>dresses</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Catagories</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <li  data-target="#clothing">
                                        <a href="#">clothing</a>
                                        <ul class="sub-menu collapse show cls_flt" id="clothing">
                                            <li ><a   href="#"  id="all" class="chs-option all active" >All</a></li>
                                            @foreach ($products as $product)
                                            <li><a  href="#" id="{{$product['id']}}" class="chs-option" >{{$product['items']}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>  
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filter by</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Price</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="0" data-max="10000" data-unit="rs" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="0" data-value-max="10000" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Range: rs0.00 - rs10000.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex chs-colors">
                                    {{-- @foreach ($items as $item)
                                            <li><a href="#" id="{{$item['color']}}" class="color1 chs-color"></a></li>
                                    @endforeach --}}
                                    <li><a href="#" id="all" class="color11 chs-color active">none</a></li>
                                    <li><a href="#" id="white" class="color1 chs-color"></a></li>
                                    <li><a href="#" id="grey" class="color2 chs-color"></a></li>
                                    <li><a href="#" id="black" class="color3 chs-color"></a></li>
                                    <li><a href="#" id="blue" class="color4 chs-color"></a></li>
                                    <li><a href="#" id="red" class="color5 chs-color"></a></li>
                                    <li><a href="#" id="yellow" class="color6 chs-color"></a></li>
                                    <li><a href="#" id="orange" class="color7 chs-color"></a></li>
                                    <li><a href="#" id="brown" class="color8 chs-color"></a></li>
                                    <li><a href="#" id="green" class="color9 chs-color"></a></li>
                                    <li><a href="#" id="violet" class="color10 chs-color"></a></li>

                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Top Brands</p>
                            <div class="widget-desc">
                                <ul>
                                    <li><a href="#" id="All"class="chs-brands active">All</a></li>
                                    @foreach($brands as $brand)
                                      <li><a  href="#" class="chs-brands" >{{$brand['brand']}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span></span> products found</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex sort-op">
                                        <p>Sort by:</p>
                                            <select name="select" id="sortByselect" class="sort">
                                                <option class="sort" value="Highest Rated">Highest Rated</option>
                                                <option class="sort" value="Newest">Newest</option>
                                                <option class="sort"value="price:-low-high">price:-low-high</option>
                                                <option class="sort"value="price:-high-low">price:-high-low</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row cls_pr_items" >
                
                                {{-- display image --}}
                           
                          
                        </div>
                    </div>
                    <div>
                       

                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link "><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" >1</a></li>
                            <li class="page-item"><a class="page-link" >2</a></li>
                            <li class="page-item"><a class="page-link" >3</a></li>
                      
                            <li class="page-item"><a class="page-link" ><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    @include('essense.scripts.shop')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/classy-nav.min.js"></script>
    <script src="js/active.js"></script>
   <script>
    
 $(".list li").click(function(){
        setTimeout(function(){
            dr_filter();
        }, 100);
    
    });

   function  checkpagi(data){
    
     fpage= $(data).attr('data-page');
    
     dr_filter();
    

   }
</script>
 
@endsection

