<html>
<head>
        <!--Bootstrap Cover CSS-->
        <link href="plugins/slick/cover.css" rel="stylesheet"/>
        <link rel="stylesheet" type="text/css" href="plugins/slick/slick.css"/>

        <link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css"/>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
img{float:left;height:490px;width:360px;margin-top:55px}
div.media-body{margin-top:110px;margin-left:400px;margin-right:0px}
.cover-heading a:hover {text-decoration:none;}
.container {min-width:720px !important;}
</style>


</head>
<body class="">

  <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="container">

          <div class="masthead clearfix">
            <div class="container inner" style="text-align:center;">
              <h3 class="deepshadow">New eBooks at Collins</h3>

            </div>
          </div>

          <div class="inner cover">

                <section class="autoplay slider">

<?php
//Build Div
$i=0;

while ($i<=20){

$random = rand(1, count($results_array)-1);

                       // if ($results_array[$random]['type'] == 'print'){
                                echo "<div class=\"media\">";
                                echo "<div class=\"media-left media-middle\">";
                                echo "<a href=\"". $results_array[$random]['catalog_url'] . "\" target=\"_blank\">";
                                //echo "<a href=\"https://alliance-primo.hosted.exlibrisgroup.com/primo-explore/search?query=title,contains,". $results_array[$random]['title'] . ",AND&pfilter=pfilter,exact,books,AND&tab=default_tab&search_scope=upugs_alma&vid=UPUGS&mode=advanced&offset=0\" target=\"_blank\" style=\"color:white !important;\">";
                                echo "<img class=\"media-object\" src=\"";
                                $cover = str_replace("sc.gif","lc.gif",$results_array[$random]['cover_url']);
                                $cover = str_replace("MC.JPG","LC.JPG",$results_array[$random]['cover_url']);
                                echo $cover;
                                echo "\"></a></div>";
                                echo "<div class=\"media-body\">";
                                echo "<p style=\"font-size:1.5rem;\" class=\"cover-heading\">";
                                echo "<a href=\"". $results_array[$random]['catalog_url'] . "\" target=\"_blank\" style=\"color:white !important;\">";
                                //echo "<a href=\"https://alliance-primo.hosted.exlibrisgroup.com/primo-explore/search?query=title,contains,". $results_array[$random]['title'] . ",AND&pfilter=pfilter,exact,books,AND&tab=default_tab&search_scope=upugs_alma&vid=UPUGS&mode=advanced&offset=0\" target=\"_blank\" style=\"color:white !important;\">";
                                echo trimTitle($results_array[$random]['title'], '150');
                                echo "</a></p><br /><p style=\"font-size:1.5rem;\" class=\"lead\">";
                                echo $results_array[$random]['author'];
                                echo "</p>";
                                //echo $results_array[$random]['location'];
                                echo "</div>";
                                echo "</div>";

                                $i++;
                       // }

                        if($i == 20){
                                break;
                        }
                }
?> 
</section>

                <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
                <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
                <script type="text/javascript" src="plugins/slick/slick.min.js"></script>

                <script type="text/javascript">
                        $(document).on('ready', function() {
                        $('.autoplay').slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                autoplay: true,
                                autoplaySpeed: 7000,
                                arrows: true,
                        });
                        });
                </script>


</div>

        </div>

      </div>

    </div>

</body>
</html>

