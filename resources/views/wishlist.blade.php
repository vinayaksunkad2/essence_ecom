<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/stylenew.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    
    <style>
        .active , .added{
            color:red !important;
        }
        html {
  scroll-behavior: smooth;
}
      
    </style>

</head>
<style>
   
</style>
<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area" id="top">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="home"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="shop">Shop</a>
                            </li>
                            <li><a href="#">Pages</a>
                          
                            </li>
                            <li><a href="blog">Blog</a></li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="wishlist"><img src="img/core-img/heart.svg" alt=""> <span></span></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="logout"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span></span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span></span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                {{-- <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div> --}}

                <!-- Single Cart Item -->
                {{-- <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div> --}}

                <!-- Single Cart Item -->
                {{-- <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div> --}}
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
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
                                    
                                </div>
                            </div>
                        </div>

                        <div class="row cls_pr_items" >
                
                                {{-- display image --}}
                           
                          
                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop">Shop</a></li>
                                <li><a href="blog">Blog</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        {{-- <div class="scrol_top" style="width:60px;height:50px;border-radius:20px;background-color:red;position:absolute;right:10px">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </div> --}}
    </footer>
    
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    var start_price;
    var end_price;
    $(document).ready(function(){
        start_price = 'default';
        dr_filter();
        
    });

    $('.chs-option').click(function(){
        $('.chs-option').removeClass('active').css('color','black');
        $(this).addClass('active');
        dr_filter();
    });
    
    $(".chs-color").click(function(){
        $('.chs-color').removeClass('active');
        $(this).addClass('active'); 
        dr_filter();

    });
    $(".list li").click(function(){
        setTimeout(function(){
            dr_filter();
        }, 100);

    });
    
    function dr_filter(){
        
        var ids=$(".cls_flt").find(".active").attr('id');
        var color=$(".chs-colors").find(".active").attr("id");
        var sort=$(".current").html();
        var w_cls;
        // alert(sort)
        var html = '';
        var rows;
           $.ajax({
               url:'/wishlistpage',
               type:'POST',
               data:{
                ids:ids,
                color:color,
                sort:sort,
                start_price:start_price,
                end_price:end_price,
            
                _token:"{{csrf_token()}}"
               },
               success:function(response){
                rows=response.wishlist;
                if(response.count==0){
                    $(".pagination").hide()
                    $('.cls_pr_items').text("NOT FOUND")
                }else{
                  $(rows).each(function(i,e){
                    w_cls = '';
                    if(e.wishlist_status == 1){
                        w_cls = "added";
                     }
                        html +='<div class="col-12 col-sm-6 col-lg-4">'+
                                    '<div class="single-product-wrapper">'+
                                        '<div class="product-img">'+
                                            '<img src='+e.image+' alt="">'+
                                            '<div class="product-badge offer-badge">'+
                                                '<span>-30%</span>'+
                                            '</div>'+
                                            '<div class="product-favourite favme">'+
                                                '<a  id="'+e.id+'" class="fa-light fa fa-heart '+w_cls+'" ></a>'+
                                            '</div>'+
                                        '</div>'+
                                        '<div class="product-description">'+
                                            '<span>'+e.product_desc+'</span>'+
                                            '<a href="single-product-details">'+
                                                '<h6>'+e.product_name+'</h6>'+
                                            '</a>'+
                                            '<p class="product-price">'+e.price+'</p>'+
                                            '<div class="hover-content">'+
                                                '<div class="add-to-cart-btn">'+
                                                    '<a id="'+e.id+'" class="btn essence-btn">Add to Cart</a>'+
                                                '</div>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>';
                });
                  
                         
                
                    $(".pagination").show()
                    $('.cls_pr_items').html(html);

                }
                $('.total-products span').html(response.wishlist_count);
            }

           });
            
    }

      $(".slider-range-price").mouseout(function(){
      
              dr_filter();
     })

// $(".favme").click(function(){
//     $(".favme").removeClass(".fa-light")
// $(".favme").addClass(".fa-solid")

// })

// $(".add-to-cart-btn").click(function(){
//     dr_filter();
//     $(rows).each(function(i,e){
//     html+=         '<div class="single-cart-item">'+
//                     '<a href="#" class="product-image">'+
//                         '<img src='+e.image+' class="cart-thumb" alt="">'+
//                         '<div class="cart-item-desc">'+
//                           '<span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>'+
//                             '<span class="badge">Mango</span>'+
//                             '<h6>Button Through Strap Mini Dress</h6>'+
//                             '<p class="size">Size: S</p>'+
//                             '<p class="color">Color: Red</p>'+
//                             '<p class="price">$45.00</p>'+
//                         '</div>'+
//                     '</a>'+
//                 '</div>';
//                         })
//                 $('.cart-list').html(html);

                        


// })


// $("body").on('click','.favme',function(){
//     var val;
//     var ids=$(this).find('a').attr("id");
//     if($(this).find('a').hasClass('added')){
//         $(this).find('a').removeClass('added');
//         val = 0;

//     }else{
//         $(this).find('a').addClass('added');
//         val = 1;
//     }

//     var html = '';
//         var rows;
//            $.ajax({
//                url:'/wishlist',
//                type:'POST',
//                data:{
//                 ids:ids,
//                 value:val,
//                 _token:"{{csrf_token()}}"
//                },
//                success:function(response){
//                 // if(val == 1){
//                 //     alert("Successfully added to wishlist");
//                 // }else{
//                 //     alert("Successfully removed from wishlist");
//                 // }
//                 $('.favourite-area span').html(response.wishlist_cnt);
//               }
//             })
// });

// $("body").on('click','.essence-btn',function(){
//     var quantity = prompt("Enter Quantity");
//     var size = prompt("What's Your Size");
//     var ids=$(this).attr("id");
//     // alert(ids)
//     var html = '';
//         var rows;
//            $.ajax({
//                url:'/cart',
//                type:'POST',
//                data:{
//                 "ids":ids,
//                 "quantity":quantity,
//                 "size":size,
//                 "i_diff":"1",
//                 _token:"{{csrf_token()}}"
//                },
//                success:function(response){
//                     alert("Succesffuly added");
//                     getcartdata()
                    
//                 }
                        
//             })
// });



// function getcartdata(){
//     var html = '';
//         var rows;
//            $.ajax({
//                url:'/cart',
//                type:'POST',
//                data:{
//                 "i_diff":"2",
//                 _token:"{{csrf_token()}}"
//                },
//                success:function(response){
//                         rows= response.cart;
//                                     $(rows).each(function(i,e){
//                                     html+= '<div class="single-cart-item">'+
//                                                 '<a href="#" class="product-image">'+
//                                                     '<img src='+e.image+' class="cart-thumb" alt="">'+
//                                                     '<div class="cart-item-desc">'+
//                                                     '<span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>'+
//                                                         '<span class="badge">Mango</span>'+
//                                                         '<h6>Button Through Strap Mini Dress</h6>'+
//                                                         '<p class="size">Size:'+e.size+'</p>'+
//                                                         '<p class="color">Color:'+e.color+'</p>'+
//                                                         '<p class="price">'+e.price+'</p>'+
//                                                     '</div>'+
//                                                 '</a>'+
//                                             '</div>';
//                         });
//                             $('.cart-list').html(html);
//                             $("#essenceCartBtn span").html(response.count);
//                }

//             });
// }





// //  $(".scrol_top").on("click", function() {
// //         $("html").scrollTop(0);
// //     });
$("#scrollUp").on("click",function(){
    $("html").scrollTop(0);

})

</script>

</body>

</html>