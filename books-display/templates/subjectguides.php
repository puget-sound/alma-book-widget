<html>
  <head>
  <title>Subject Slider - Books</title>
  <link rel="stylesheet" type="text/css" href="//libs.etsu.edu/books-display/brightsign/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//libs.etsu.edu/books-display/brightsign/slick/slick-theme.css"/>
  </head>
  <body>
<div class="content">
  <div class="subject-slider" style="height:130px">
<?php
    $i=0; 
    foreach ($results_array as $value) {
	//check for valid cover image, skip if no cover
	//if(curl_get_image_size($value['cover_url'])!= '86'){

		echo "<div><a href=\"". $value['catalog_url'] . "\" target=\"_blank\"><img src=\"" . $value['cover_url'] . "\" title=\"" . $value['title'] . "\"></a></div>";
		$i++;
	
	if($i==100){break;}
    }	
?>
  </div>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//libs.etsu.edu/books-display/brightsign/slick/slick.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script type="text/javascript">
    $(document).ready(function(){
	$('.subject-slider').slick({
  infinite: false,
  autoplay:true,
  speed: 300,
  slidesToShow: 8,
  slidesToScroll: 2,
  arrows:true,
  prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
  nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 2,
        infinite: true,
        arrows:true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    } 
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


	});

  </script>

<p>See a complete list of books here</p>

</div> <!--END CONTENT DIV -->
<!-- Issue discovered with iPhones - added CSS below  (https://github.com/kenwheeler/slick/issues/2834) -->
<style>
div.slick-slider { width: 1px; min-width: 100%; *width: 100%; }
.content {
    margin: auto;
    padding: 10px;
    width: 90%;
}
.slick-slide img{
	height:125px;
}
.slick-prev:before,
.slick-next:before {
color:black;
}
</style>
<!--
<br />
<p>See a complete list of books here</p>
  </body>
</html>-->
