<?php

//requires files
require 'functions.php';
require 'config.php';


//Retreive parameters
$query = clean($_GET['query']);
$filter = clean($_GET['filter']);
$template = clean($_GET['template']);


?>
<html>
<head>
	<style>
		body { font-family: arial;}
		.hide { display: none;}
		p { font-weight: bold;}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			//When radio box gets checked or changed
			$('#form1 input').on('change', function() {
			   var filter = $('input[name=filters]:checked', '#form1').val(); 
			   $("#form2").load("showValues.php?filter="+ filter, function(response, status, xhr) {
			   })
			});

			//When radio box gets checked or changed
                        $('#form2').on('change','input', function() {
			   updateSlider();
			   document.getElementById('div_templates').style.display = 'block';
                        });
			$('#templates').on('change','input', function() {
			   updateSlider();	
			});

                        $(window). keydown(function (e) {
                                if (e. keyCode == 13) {
                                        e. preventDefault();
                                return false;
                                }
                        });

			


		});
			function show1(){
			  document.getElementById('div1').style.display ='none';
			}
			function show2(){
			  document.getElementById('div1').style.display = 'block';
			}
			function updateSlider(){
				var filter = $('input[name=filters]:checked', '#form1').val();
                                if(filter == "title"||filter == "author"){
                                   var query = $('input[name=values]', '#form2').val();
                                }else{
                                   var query = $('input[name=values]:checked', '#form2').val();
                                }

                              var template = $('input[name=templates]:checked', '#templates').val();
                              if(template){
					var url = "display.php?filter="+ filter +"&query="+ query +"&template=" + template ;
			     		var url_complete = "<?php echo $urlBase ?>" + url;
					var url_embed = "<p><iframe frameborder=\"0\" scrolling=\"no\" src=\"" + url_complete + "\" width=\"100%\"></iframe></p>";

					$('#iframe').attr('src', url);
					$('#urlInput').attr('value', url_embed);
					document.getElementById('final').style.display = 'block';
				}
			}
			function copyButton(){
			
  				/* Get the text field */
  				var copyText = document.getElementById("urlInput");

  				/* Select the text field */
  				copyText.select();

  				/* Copy the text inside the text field */
  				document.execCommand("copy");

  				/* Alert the copied text */
  				alert("Copied the text: " + copyText.value);
			}
	</script>
</head>
<body>
	<p>Which filter would you like to apply?</p>
	<form id="form1">
<?php
//Look in the array and indentify columns
//First removes filters that does not make since - see config.php
foreach(array_diff(array_keys($mergedArray[1]), $noFilters) as $column) {
	echo "<input type=\"radio\" name=\"filters\" value=\"" . $column . "\" onclick=\"show2();\" />";
	echo $column;
	echo "&nbsp;&nbsp;";
}

?>
</form>
<div id="div1" class="hide">
<hr><p>Choose a value for your filter...</p>
</div>
<form id="form2">


</form>
<div id="div_templates" class="hide">
<hr><p>Choose a template...</p>


<form id="templates">
	<?php
	$dir = "templates/";

	// Sort in ascending order - this is default
	$temp_options = scandir($dir);
	//remove directory options
	$temp_options = array_diff($temp_options,array('.', '..'));
	foreach($temp_options as $option) {
        	echo "<input type=\"radio\" name=\"templates\" value=\"" . str_replace('.php', '', $option) . "\" onclick=\"\" />";
        	echo str_replace('.php', '', $option);
		echo "&nbsp;&nbsp;";
	}

	?>

</form>
</div>

<div id="final" class="hide">

<hr><p>Embed Code</p>

<!-- The url  text field -->
<input type="text" value="" id="urlInput" style="width:450px">

<!-- The button used to copy the text -->
<button onclick="copyButton()">Copy text</button>

<hr />
<iframe id="iframe" name="myIframe" frameborder="5" width="100%" height="100%"></iframe>
</div>
</html>
