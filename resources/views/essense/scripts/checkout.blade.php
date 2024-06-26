

<script>
    $(".popup").hide();
    $("body").on('click','.essence-placeorder-btn',function(){
    var firstname=$("#first_name").val()
    var lastname=$("#last_name").val()
    var country=$("#country").val()
    var address=$("#street_address").val()
    var postcode=$("#postcode").val()
    var city=$("#city").val()
    var phoneno=$("#phone_number").val()
    var email=$("#email").val()
    if(lastname==""&&country=="Select"&&postcode==""&&city==""){
        alert("fill all")
        return false;
    }else{
        $.ajax({
               url:'/placeorder',
               type:'POST',
               data:{
                "firstname":firstname,
                "lastname":lastname,
                "country":country,
                "address":address,
                "postcode":postcode,
                "city":city,
                "phoneno":phoneno,
                "email":email,
                _token:"{{csrf_token()}}"
               },
               success:function(response){
                $(".popup").show();
                $(".form-control").val("")
                $("#country").val("Select")
                $(".checkout_details_area").hide()
                $(".order-details-confirmation").hide()
                //    alert(response.data)
               }
               
    });
    }
    });

$(document).ready(function(){
  
    var html = '';
    var total_discount=0;
     var dis;
    var rows;
       $.ajax({
           url:'/cart',
           type:'POST',
           data:{
            _token:'{{csrf_token()}}'
           },
           success:function(response){
                    rows1=response.t_sum;
                    rows= response.cart;
                    rows2 = response.discount;
                    $(rows).each(function(i,e){
                        // $(".product").html(e.product_desc)
                        // $(".price").html(e.price)
                        html+=  '<li><span class="product">'+e.product_desc+'</span> <span class="price">'+e.price+'</span></li>';

                    });       
                    $(".order-details-form").append(html);
                    if(response.count == 0){
                            $('.subtotal , .total').html(0);
                        }else{
                            $(rows1).each(function(i,e){
                               $('.subtotal').html(e.A);
                              
                            });
                            if(response.discount == 0){
                        
                            $('.discount').html(0);
                           }else{
                            $(rows2).each(function(i,e){
                               var dis=e.discount
                                 total_discount=parseInt(total_discount) + parseInt(dis);
                               var subtotal = $(".subtotal").text()
                             var afterdiscount=(parseFloat(subtotal)* parseFloat(total_discount)/100)
                            var  total_amount=(parseFloat(subtotal)- parseFloat(afterdiscount))
                             $('.total').html(total_amount);
                            });

                            $('.discount').html(total_discount+"%")

                        }
                        }
             
            }
                    
        })
})
</script>