<script>
var fpage=1;    
var lpage=9;
var start_price;
var end_price;
var brands
$(document).ready(function(){
    
    var  urltrigger = '{{isset($_GET["q"])}}';
    if(urltrigger != ''){
        console.log(urltrigger)
        $('.chs-option').removeClass('active').css('color','black');
        $('#'+urltrigger).addClass('active');
    }
    start_price = 'default';
   
    var data={
        "i_diff":"2",
        _token:"{{csrf_token()}}"
    }
    dr_filter();
    getcartdata(data);
    
});

$('.chs-option').click(function(){
     $('.chs-option').removeClass('active').css('color','black');
    $(this).addClass('active');
    dr_filter();
});

$("#headerSearch").keypress(function(){
    // alert(search)
    dr_filter();

})
$('.chs-brands').click(function(){
    $('.chs-brands').removeClass('active').css('color','black');
    $(this).addClass('active');
    dr_filter();
});

$(".chs-color").click(function(){
    $('.chs-color').removeClass('active').css('color','black');
    $(this).addClass('active'); 
    dr_filter();

});
$(".list li").click(function(){
        setTimeout(function(){
            dr_filter();
        }, 100);
    
    });

   function  checkpagi(data){
    
     fpage= $(data).attr('data-page');
     dr_filter();
    

   }


function dr_filter(){
   
    var ids=$(".cls_flt").find(".active").attr('id');
    var color=$(".chs-colors").find(".active").attr("id");
    var brand=$(".chs-brands.active").html();
    var sort=$(".current").html();
    var search=$("#headerSearch").val()
    console.log(sort)
    var w_cls;
    var html = '';
    var rows;
    var d_cls;
    var wishlist_status;
    var w_x = [];
       $.ajax({
           url:'{{route("getprddetails")}}',
           type:'POST',
           data:{
            ids:ids,
            page:fpage,
            color:color,
            sort:sort,
            search:search,
            start_price:start_price,
            end_price:end_price,
            brand:brand,
            _token:"{{csrf_token()}}"
           },
           success:function(response){
            rows=response.data.data;
            lpage=response.data.last_page;
            checkpagination();
            wishlist_status=response.wishlist_status
            $(wishlist_status).each(function(i,e){
                w_x.push(e.item_id);
            });
           
       
            if(response.count==0){
                $(".pagination").hide()
                $('.cls_pr_items').text("NOT FOUND")
            }else{
              $(rows).each(function(i,e){
                
                d_cls = '';
                w_cls = '';

                if(w_x.includes(e.id)){
                    w_cls = 'added';
                }
                 if(e.discount == 0){
                    d_cls = "d_cls";
                 }
                 html +='<div class="col-12 col-sm-6 col-lg-4">'+
                                '<div class="single-product-wrapper">'+
                                    '<div class="product-img">'+
                                        '<img src='+e.image+' alt="">'+
                                        '<div class="product-badge offer-badge ' +d_cls+'">'+
                                            '<span>'+e.discount+'%off</span>'+
                                        '</div>'+
                                        '<div class="product-favourite favme">'+
                                            '<a  id="'+e.id+'" class="fa-light fa fa-heart '+w_cls+'" ></a>'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="product-description">'+
                                        '<span>'+e.product_desc+'</span>'+
                                            '<h6>'+e.product_name+'</h6>'+
                                        '<p class="product-price">Price:Rs'+e.price+'</p>'+
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
            $('.total-products span').html(response.count);
            $('.favourite-area span').html(response.wishlist_cnt);
        }

       });
        
}

  $(".slider-range-price").mouseout(function(){
  
          dr_filter();
 })

function checkpagination(){
  var html="";
   fpage=parseInt(fpage);
   lpage=parseInt(lpage);

  if(fpage==1){
  html=`<li class="page-item "><a class="page-link"><i class="fa fa-angle-left"></i></a></li>`;
  }else{
    html=`<li class="page-item "><a class="page-link" onClick="checkpagi(this)" data-page="${fpage-1}"><i class="fa fa-angle-left"></i></a></li>`;
  }
  for(i=1;i<=lpage;i++){
   html+='<li class="page-item"><a class="page-link" onClick="checkpagi(this)" data-page="'+i+'" >'+i+'</a></li>';
  }
if(lpage==fpage){   
    html+=`<li class="page-item"><a class="page-link" ><i class="fa fa-angle-right"></i></a></li>`;

}else{
    html+=`<li class="page-item"><a class="page-link"  onClick="checkpagi(this)" data-page="${fpage+1}"><i class="fa fa-angle-right" ></i></a></li>`;

}

    $('.pagination').html(html);
}

$("body").on('click','.favme',function(){
var val;
var ids=$(this).find('a').attr("id");
if($(this).find('a').hasClass('added')){
    $(this).find('a').removeClass('added');
    val = 0;

}else{  
    $(this).find('a').addClass('added');
    val = 1;
}

var html = '';
    var rows;
       $.ajax({
           url:'/wishlist',
           type:'POST',
           data:{
            ids:ids,
            value:val,
            _token:"{{csrf_token()}}"
           },
           success:function(response){
           $('.favourite-area span').html(response.wishlist_cnt);
          }
        })
});

$("body").on('click','.essence-btn',function(){
var quantity = prompt("Enter Quantity");
var size = prompt("What's Your Size");
var ids=$(this).attr("id");
var data={
        "ids":ids,
        "i_diff":"1",
        "quantity":quantity,
        "size":size,
        _token:"{{csrf_token()}}"
    }
    if(quantity=="0"){
        alert("please enter crt quantity")
        return false
    }
    if(quantity==""&& size==""){
    return false;
    }else{
        getcartdata(data);
    }
});



function getcartdata(data){

var html = '';
var total_discount=0;
var dis;
    var rows;
       $.ajax({
           url:'/cart',
           type:'POST',
           data:data,
           success:function(response){
                    rows= response.cart;
                    rows1 = response.t_sum;
                    rows2 = response.discount;
                   $(rows).each(function(i,e){
                                html+= '<div class="single-cart-item">'+
                                            '<a  class="product-image">'+
                                                '<img src='+e.image+' class="cart-thumb" alt="">'+
                                                '<div class="cart-item-desc">'+
                                                '<spandata-id id="'+e.id+'" class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>'+
                                                    '<span class="badge">'+e.product_name+'</span>'+
                                                    '<h6>'+e.product_desc+'</h6>'+
                                                    '<p class="size">Size:'+e.size+'</p>'+
                                                    '<p class="color">Color:'+e.color+'</p>'+
                                                    '<p class="price cls_p">'+e.price+'</p>'+
                                                '</div>'+
                                            '</a>'+
                                        '</div>';
                    });
                    
                    $('.cart-list').html(html);
                    if(response.count == 0){
                            $('.sb_total_amt , .total_amt').html(0);
                        }else{
                            $(rows1).each(function(i,e){
                               $('.sb_total_amt').html(e.A);
                              
                            });
                        }
                        if(response.discount == 0){
                            $('.discount').html(0);
                        }else{
                            $(rows2).each(function(i,e){
                                dis=e.discount;
                              total_discount = parseInt(total_discount) + parseInt(dis);
                             var subtotal = $(".sb_total_amt").text()
                             var afterdiscount=(parseFloat(subtotal)* parseFloat(total_discount)/100)
                            var  total_amount=(parseFloat(subtotal)- parseFloat(afterdiscount))
                             $('.total_amt').html(total_amount);
                           
                            });
                            $('.discount').html(total_discount+"%")

                        }
                    $("#essenceCartBtn span").html(response.count);                       
            
            }
                    
        })
}



$("body").on('click','.product-remove',function(){
var cartid=$(this).attr("id");
var total_discount=0;
var dis;
$.ajax({
           url:'/cartremove',
           type:'POST',
           data:{
            "cartid":cartid,
            _token:"{{csrf_token()}}"
            },
            success:function(response){
                rows2 = response.discount;

                    if(response.status == 200){
                        $('#'+cartid).parents('.single-cart-item').remove();
                        $('#essenceCartBtn span').html(response.count);
                        if(response.count == 0){
                            $('.sb_total_amt , .total_amt').html(0);
                        }else{
                             $(response.t_sum).each(function(i,e){
                                $('.sb_total_amt').html(e.A);
                             });
                        }
                        if(response.discount == 0){
                            $('.discount').html(0);
                        }else{
                            $(rows2).each(function(i,e){
                                dis=e.discount
                              total_discount=parseInt(total_discount) + parseInt(dis);
                             var subtotal = $(".sb_total_amt").text()
                             var afterdiscount=(parseFloat(subtotal)* parseFloat(total_discount)/100)
                            var  total_amount=(parseFloat(subtotal)- parseFloat(afterdiscount))
                             $('.total_amt').html(total_amount);
                           
                            });
                            $('.discount').html(total_discount+"%")

                        }
                    }
            }
});
})
// cart total amount
// function carttotal(){
//    var tot_amt = 0;
//    var amt;
//     $('.cls_p').each(function(i,e){
//         amt = $(this).html();
//         tot_amt = parseInt(tot_amt) + parseInt(amt);
//     });
//     $('.sb_total_amt').html(tot_amt)
// }




$("body").on('click','.essence-checkout-btn',function(){
var subtotal=$(".sb_total_amt").text()
var totalamount=$('.total_amt').text();
$.ajax({
    url:'/orderdetails',
    type:'post',
    data:{
        'subtotal':subtotal,
        'totalamount':totalamount,
        _token:"{{csrf_token()}}"

    },
    success:function(response){

    }
})

});
</script>