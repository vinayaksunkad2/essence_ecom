@extends('essense.layout')

@section('contents')

<div class="wrapper" style="margin-top:60px;">
    <!-- SECTION 1 -->
    <h2></h2>
    <section >
        <div class="inner">
            <div class="image-holder" style="height: 175%">
                <img style="height: 900px" src="img/additempic.webp" alt="">
            </div>
            <div class="cls_pr_items"></div>
            <div class="form-content" style="padding-bottom: 70px">
                <div class="form-header">
                    <h3>ITEMS</h3>
                </div>
                <div >
                    <form  id="form-data" enctype="multipart/form-data">  
                    @csrf
                    <div class="form-holder " style="padding-bottom: 30px;padding-top: 30px;">
                        <label for="text">PRODUCTS</label>
                        <select  style="padding: 5px;width:150px;"name="products"  class="options form-control"id="products">
                            <option >select</option>
                            @foreach ($products as $product)
                                <option value="{{$product['id']}}">{{$product['items']}}</option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="form-holder" style="padding-bottom: 20px;padding-top: 30px;">
                        <input type="text" placeholder="Enter Product Name" name="product_name" id="product_name" class="form-control product-data">
                    </div>
                    <div class="form-holder" style="padding-bottom: 20px;padding-top: 20px;">
                        <input type="text" placeholder="Enter Product Description" name="product_desc" id="product_desc" class="form-control product-data">
                    </div>
                    <div class="form-holder" style="padding-bottom: 20px;padding-top: 20px;">
                        <input type="text" placeholder="Price" name="price" id="price" class="form-control product-data">
                    </div>
                    <div class="form-holder" style="padding-bottom: 20px;padding-top: 20px;">
                        <input type="text" placeholder="Color" name="color" id="color" class="form-control product-data">
                    </div>
                    <div class="form-holder" style="padding-bottom: 20px;padding-top: 20px;">
                        <input type="text" placeholder="Enter Discount" name="discount" id="discount" class="form-control product-data">
                    </div>
                    <div class="form-holder" style="padding-bottom: 20px;padding-top: 20px;">
                        <input type="text" placeholder="Enter Brand" name="brand" id="brand" class="form-control product-data">
                    </div>
                    <div class="form-holder" style="padding-bottom: 20px;padding-top: 20px;border-bottom:0px;">
                        <input type="file" placeholder="choose image" name="image" id="image" class="form-control product-data" style="border-bottom: 0px;">
                    </div>
                <div style="padding-top: 50px;" >
                    <button type="submit" id="update_data" style="background:#cbebad;position:absolute;left:55%;border-radius: 15px;padding: 10px;cursor: pointer;width:100px;">submit</button>
                </div>
            </form>
            </div>
      
        </div>
    </section>
            </div>
        </div>
    </section>
    <script>
        $('.products').click(function(){
            var products=$('.products').val();    
                    // alert()
        if(products==""){
            // alert("please filled the data");
            return false
        }
        
            $.ajax({
                type: "post",
                url: "/additems",
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
    
        // $('#submit').click(function(){
        //     var products=$('#products').val(); 
        //     var price=$('#price').val();            
        //     var color=$('#color').val();            
        //     var image=$('#image').val();   
          
        // if(products==""||price==""|color==""|image==""){
        //     alert("please filled the data");
        //     return false
        // }
        
        //     $.ajax({
        //         type: "post",
        //         url: "/additems",
        //         data:{
        //             'products':products,
        //             'price':price,
        //             'color':color,
        //             'image':image,
        //             _token:"{{csrf_token()}}"
        //         },
        //             success: function(data) {
            //             if(data.status == 200){
            //             // window.location.href = "home";
            //             alert("added");
            // }else{
            //     alert("error");
            // }
        
            //     });
            
             
    // });

    // $('#submit').click(function(){
    //     if(image==""){
    //         alert("please fill the data");
    //         return false
    //     }
        
    //         $.ajax({
    //             type: "post",
    //             url: "/addimg",
    //             data:{
    //                 'image':image,
    //                 _token:"{{csrf_token()}}"
    //             },
    //                 success: function(data) {
    //         //             if(data.status == 200){
    //         //             // window.location.href = "home";
    //         //             alert("added");
    //         // }else{
    //         //     alert("error");
    //         }
        
    //             });
            
             
    // });

     $('#form-data').submit(function(e){
        e.preventDefault();
        let formdata =new FormData(this);
        console.log(formdata)
        $.ajax({
       type:'POST',
       url: `/additems`,
        data: formdata,
        contentType: false,
        processData: false,
        success:function(data){
            $('.product-data').val(""); 
            $(".options").val("select")

    }
    });
     })

    


    </script>


@endsection