var temp = 0;
function procurrentimg( leftvalue ){   //leftvalue is the current position of image
  temp+=leftvalue;
var j= 0;
var imageposition = document.getElementsByClassName("pro-duct-img"); //changing postion of image
  if( temp < -75){      //when image is at 75% of width
    temp = 0;
    for(j=0; j < imageposition.length; j++){
      imageposition[j].style.left = temp + "%";
    }
  }
  else if( temp > 0){
    temp = -75;
    for(j=0; j < imageposition.length; j++){
      imageposition[j].style.left = temp + "%";
    }
  }
  else{
    for(j=0; j < imageposition.length; j++){
      imageposition[j].style.left = temp + "%";
    }
  }
}

//additional detail maintainer

$(".shw-ad-det").hide();
$("#show-add-head").click(function(){
  $(".shw-ad-det").toggle(400);
});
