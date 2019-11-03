
  $(document).ready(function(){
    $("#ad-sub-catagory").hide();
    $(".por-sub-cat").hide();
    $("#product-catagory").on('change',function(){
      var temp = $(this).val();
      $("#ad-sub-catagory").show();
      $(".por-sub-cat").hide();
      $("#type-"+temp).show();
    });

  });
