<html>
  <head>
  <title>Subject Slider - Books</title>
  <link rel="stylesheet" type="text/css" href="//libs.etsu.edu/books-display/brightsign/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="//libs.etsu.edu/books-display/brightsign/slick/slick-theme.css"/>
  <style>
  	body {
  		padding-top:45px;
  		}
  		.spin-container {
  			text-align:center;}
  		.circle-spinner {
  			height:280px;
  			overflow:hidden;}
      .circle-container {
    	position: relative;
    	width: 24em;
    	height: 24em;
    	padding: 2.8em;
        /*2.8em = 2em*1.4 (2em = half the width of a link with img, 1.4 = sqrt(2))*/
    	border: dashed 1px;
    	border-radius: 50%;
    	margin: 1.75em auto 0;
    	background-image:url("https://images.unsplash.com/photo-1546962339-5ff89552b8ed?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1949&q=80");
    	background-size:cover;
    }
    .circle-container a {
    	display: block;
    	position: absolute;
    	top: 50%; left: 50%;
    	width: 5em;
    	margin: -2em;
    }
    .circle-container img { display: block; width: 100%; z-index:1; }
    
    .circle-container img:hover {
    	z-index:6;
    	width:6em;
    	transition:0.5s all;
    }
    
    .deg15 { transform: rotate(15deg) translate(10em) rotate(-270deg); }
    .deg30 { transform: rotate(30deg) translate(10em) rotate(-270deg); }
    .deg45 { transform: rotate(45deg) translate(10em) rotate(-270deg); }
    .deg60 { transform: rotate(60deg) translate(10em) rotate(-270deg); }
    .deg75 { transform: rotate(75deg) translate(10em) rotate(-270deg); }
    .deg90 { transform: rotate(90deg) translate(10em) rotate(-270deg); }
    .deg105 { transform: rotate(105deg) translate(11em) rotate(-270deg); }
    .deg120 { transform: rotate(120deg) translate(11em) rotate(-270deg); }
    .deg135 { transform: rotate(135deg) translate(11em) rotate(-270deg); }
    .deg150 { transform: rotate(150deg) translate(11em) rotate(-270deg); }
	.deg165 { transform: rotate(165deg) translate(11em) rotate(-270deg); }
    .deg195 { transform: rotate(195deg) translate(12em) rotate(-270deg); }
    .deg210 { transform: rotate(210deg) translate(12em) rotate(-270deg); }
    .deg225 { transform: rotate(225deg) translate(12em) rotate(-270deg); }
    .deg240 { transform: rotate(240deg) translate(12em) rotate(-270deg); }
    .deg255 { transform: rotate(255deg) translate(12em) rotate(-270deg); }
    .deg270 { transform: rotate(270deg) translate(12em) rotate(-270deg); }
    .deg285 { transform: rotate(285deg) translate(12em) rotate(-270deg); }
    .deg300 { transform: rotate(300deg) translate(12em) rotate(-270deg); }
    .deg315 { transform: rotate(315deg) translate(12em) rotate(-270deg); }
    .deg330 { transform: rotate(330deg) translate(12em) rotate(-270deg); }
    .deg345 { transform: rotate(345deg) translate(12em) rotate(-270deg); }
  </style>
  </head>
  <body>
<div class="content">
<div class="spin-container">
<button id="spin-it-left">&#8592;</button><button id="spin-it-right">&#8594;</button>
</div>
<div class="circle-spinner">
  <div class="circle-container">
<?php
    $i=0; 
    $deg = 195;
    foreach ($results_array as $value) {
	//check for valid cover image, skip if no cover
	//if(curl_get_image_size($value['cover_url'])!= '86'){

		echo "<a href=\"". $value['catalog_url'] . "\" target=\"_blank\"><img class='deg" . $deg . "' src=\"" . $value['cover_url'] . "\" title=\"" . $value['title'] . "\"></a>";
		$i++;
		$deg = $deg + 15;
		if($deg === 180) { $deg = 195;}
	
	if($deg === 360){$deg = 15;}
	if($deg === 195){break;}
    }	
?>
  </div>
  </div>
  </div>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//libs.etsu.edu/books-display/brightsign/slick/slick.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script type="text/javascript">
    $(document).ready(function(){
    	var tableRotation = 0;
		$(".content").on("click", "#spin-it-left", function(){
			tableRotation = tableRotation - 15;
			//$(".circle-container").css({'transform' : 'rotate(' + tableRotation + 'deg)'});
			$('.circle-container').animate(
    			{ deg: tableRotation },{
      				duration: 600,
      				step: function(now) {
        				$(this).css({ transform: 'rotate(' + now + 'deg)' });
      				}
    			}
  			);
		});

		$(".content").on("click", "#spin-it-right", function(){
			tableRotation = tableRotation + 15;
			//$(".circle-container").css({'transform' : 'rotate(' + tableRotation + 'deg)'});
			$('.circle-container').animate(
    			{ deg: tableRotation },{
      				duration: 600,
      				step: function(now) {
        				$(this).css({ transform: 'rotate(' + now + 'deg)' });
      				}
    			}
  			);
		});
	});

  </script>

<!--<p><a href="http://lxphpdev01.pugetsound.edu/alma-book-widget/books-display/list-all/" target="_blank">See a complete list of books here</a></p>-->

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
