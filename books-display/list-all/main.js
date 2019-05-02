$(document).ready(function()
{
    $('#example').DataTable(
    {
        "processing": true,
        "ajax": "../data/combined.php",
	"deferRender": true,
        "columns":
        [
            {
                "data": "cover_url",
                "render": function(data, type, row)
                {
                    return '<img style=\"height:70px;\" src="' + data + '" />';
                }
            },

 	    { "data": {title : "title", url : "catalog_url", author : "author"},
                "render": function(data, type, row, meta){
                data_output = data.title;
		if(type === 'display'){
                        data_output = '<div id="title"><a href="' + data.catalog_url + '" style=\"color:#002146;\" target=\"_blank\">' + data.title + '</a></div>';
			if(data.author){
				data_output += '<div id="author"><strong>Author:</strong> ' + data.author + '</div>';
                	}
		}
                return data_output;
                }
            },
	    { "data": "author" },
            { "data": "pub_date" },
            { "data": "location" },
	    { "data": "upload_date" },
            { "data": "subjects[, ]" },
	    { "data": "type" },
            { "data": "title" },
	    { "data": "catalog_url" }

        ],

        "order": [[ 8, "asc" ]],
        "columnDefs":
        [
            {
                "targets": 0,
                "orderable": false
            },
            {
                "targets": 6,
                "orderable": false,
                "visible": false
            },
            {
                "targets": 2,
                "orderable": false,
                "visible": false
            },
            {
                "targets": 5,
                "orderable": false,
                "visible": false
            },

	    {
                "targets": 7,
                "orderable": false,
                "visible": false
            },
	    {
                "targets": 8,
                "orderable": false,
                "visible": false
            },
	    {
                "targets": 9,
		"type" : "html",
                "orderable": false,
                "visible": false
            }


	],
dom: 'Bfrtip',
buttons: [
	    {
		extend: 'excelHtml5',
		text: 'Export Titles to Excel',
                messageTop: 'Selected Books',
		exportOptions: {
                    columns: [ 8, 2, 3, 9 ]
                }
	    }
    ],

        initComplete: function()
        {
            var column = this.api().column(6);
            var select = $('<br /><br />Subject: <select style="width:176px;" ><option value=""></option></select>')
            .appendTo($("#example_filter"))
            .on('change', function()
            {
                var val = $.fn.dataTable.util.escapeRegex
                (
                    $(this).val()
                );

                column.search(val ? '^' + val + '$' : '', true, false).draw();
            });

            column.data().unique().sort().each(function(d, j)
            {
                var value = d;
                var name = d;
                if (name.includes(","))
                {

                    return;

                }
                select.append('<option value="' + value + '">' + name + '</option>')
            });

        }
    });
});

var table = $('#example').DataTable();
$('#myInputTextField').on('keyup', function () {
    table.search(this.value).draw();
});
