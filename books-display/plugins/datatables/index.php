<html>
<head>
   <!--<link rel="stylesheet" type="text/css" href="../datatables.css">-->
       <link rel="stylesheet" type="text/css" href="medical.css">
<!--<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css" </script>
<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.css" </script>-->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <!--<script src="js/dataTables.bootstrap4.min.js" </script>
<script src="js/dataTables.bootstrap4.js" </script>-->


<script src="datatables.js"></script>
    <script src="medical.js"></script>   
 	<script src='../pdfmake/pdfmake.min.js'></script>
 	<script src='../pdfmake/vfs_fonts.js'></script>
        <script src='../jszip/jszip.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js'></script>
</head>
<body><!--
<script>

var table = $('#example').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
$('#myInputTextField').on('keyup', function () {
    table.search(this.value).draw();
});
</script>-->



    
<!--<input type="text" id="myInputTextField">-->

	<table id="example" class="display compact order-column">

        <thead>
            <tr>
                <th>Cover</th>
                <th>Title</th>
                <th>Author</th>
             <th>Publication Date</th>
                <th>Collection</th>
                <th>Upload Date</th>
                <th>Subjects</th>
                <th>Type</th>
		<th>Title</th>
		<th>URL</th>
            </tr>
        </thead>
    </table> 



</body>
</html>
