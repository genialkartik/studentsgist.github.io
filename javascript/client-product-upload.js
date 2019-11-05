
$(document).ready(function(){

    $(".select-city").hide();
    $("#sel-city").hide();
    $("#select-state").on('change',function(){
      var temp1 = $(this).val();
      $("#sel-city").show();
      $(".select-city").hide();
      $("#smlc"+temp1).show();
    });
  });

  $(document).ready(function(){

      $(".por-sub-cat").hide();
      $("#ad-sub-catagory").hide();
      $("#product-catagory").on('change',function(){
        var temp = $(this).val();
        $("#ad-sub-catagory").show();
        $(".por-sub-cat").hide();
        $("#type-"+temp).show();
      });
    });
