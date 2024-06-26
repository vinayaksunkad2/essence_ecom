@extends('essense.layout')

@section('contents')
<div class="wrapper">
    <!-- SECTION 1 -->
    <h2></h2>
    <section>
        <div class="inner">
            <div class="image-holder" style="height: 390px">
                <img src="img/form-wizard-1.jpg" alt="">
            </div>
           
            <div class="form-content" >
                <div class="form-header">
                    <h3>PRODUCTS</h3>
                </div>
                <div >
                    <div class="form-holder" style="padding-bottom: 30px;padding-top: 30px;">
                        <input type="text" placeholder="Add Products" name="products" id="products" class="form-control">
                    </div>
                   
                
                <div style="padding-top: 50px;" >
                    <input id="submit" type="submit"style="background:#cbebad;position:absolute;left:55%;border-radius: 15px;padding: 10px;cursor: pointer;width:100px;">
                </div>
            </div>
        </div>
    </section>
            </div>
        </div>
    </section>
    <script>
        $('#submit').click(function(){
            var products=$('#products').val();            
            // alert(products)
        if(products==""){
            alert("please filled the data");
            return false
        }
        
            $.ajax({
                type: "post",
                url: "/addproducts",
                data:{
                    'products':products,
                    _token:"{{csrf_token()}}"
                },
                    success: function(data) {
            //             if(data.status == 200){
            //             // window.location.href = "home";
            //             alert("added");
            // }else{
            //     alert("error");
            }
        
                });
            
             
    });

    </script>
@endsection