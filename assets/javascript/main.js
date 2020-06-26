
    $(document).ready(function(){
        var id = "";
        var category = "Electronics";
        var category_id = 1;
        var search = "";
    
        $("#Electronics").click(function(){
            $(".text_category").removeClass("active");
            $("#Electronics").addClass("active");
            category = "Electronics";
            category_id = 1;
            var search = $("#search").val(); 
            if(search){
                load_data(search, category_id);
            }else{
                category_click(search,category_id);
            }
        });
        $("#Hand_bag").click(function(){
            $(".text_category").removeClass("active");
            $("#Hand_bag").addClass("active");
            category = "Hand_bag";
            category_id = 2;
            var search = $("#search").val(); 
            if(search){
                load_data(search, category_id);
            }else{
                category_click(search,category_id);
            }
        });
        $("#Wallet").click(function(){
            $(".text_category").removeClass("active");
            $("#Wallet").addClass("active");
            category = "Wallet";
            category_id = 3;
            var search = $("#search").val(); 
            if(search){
                load_data(search, category_id);
            }else{
                category_click(search,category_id);
            }
        });
        $("#Clothes").click(function(){
            $(".text_category").removeClass("active");
            $("#Clothes").addClass("active");
            category = "Clothes";
            category_id = 4;
            var search = $("#search").val(); 
            if(search){
                load_data(search, category_id);
            }else{
                category_click(search,category_id);
            }
        });
    
       
        function category_click(search, category_id){
            $.ajax({
                url: "product.php",
                method: "POST",
                data: {
                    category_id: category_id,
                    keyword:search
                },
                success: function (data) {
                    $("#item").empty();
                    $("#item").append(data);
                }
            })
        }
    
      
        function load_data(search, category_id){
            $.ajax({
                url:"product.php",
                method:"POST",
                data:{
                    keyword:search,
                    category_id:category_id,
                    
                },
                success:function(data)
                {
                 $('#item').html(data);
                },
                error: function(data){
                    console.log("error:" + data);
                }
            });
        }
        $('#search').keyup(function(){
            var search = $(this).val();        
            if(search != '')
            {
                load_data(search, category_id);
            }
            else
            {
                load_data(search, category_id);
            }
        });

        $(function () {
            $(".item_product").slice(0, 6).show();
            $("#loads").on('click', function (e) {
                e.preventDefault();
                $(".item_product:hidden").slice(0, 6).slideDown();
                if ($(".item_product:hidden").length == 0) {
                    $("#loads").fadeOut('slow');
                    
                }
        
            });
    
        });
        $(function () {
            $(".item_product").slice(0, 6).show();
            $("#load").on('click', function (e) {
                e.preventDefault();
                $(".item_product:hidden").slice(0, 6).slideDown();
                if ($(".item_product:hidden").length == 0) {
                    $("#load").fadeOut('slow');
                    
                }
                if($(".item_product:hidden").length == 0){
                    $("#load").hide();
                }
        
            });
    
        });
    });
