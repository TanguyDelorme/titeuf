

$(document).ready(function() {
  $('#example tfoot th').each(function() {
    let title = $('#example thead th').eq( $(this).index()).text();
    modif = title.indexOf("Modifier");
    if(modif == -1){
      $(this).html('<input style="width:100%" type="text" placeholder="Search '+title+'" />');
    }
    else{
      $(this).html('<div>  </div>');
    }
  });


  var table = $('#example').DataTable( {
      "colReorder": true,
      "order": [[0, 'asc']],
      "processing": true,
      "serverSide": true,
      "pageLength": 7,
      "ajax": "accueilData.php",
      "select": {style:'single'},
      "dom": 'lBfrtip',
      "columnDefs": [
        {
          "render" : function(data,type,row){
            var inputid = row[0];
            return '<a href="#add'+ inputid +'" data-toggle="modal"><button type="button" class="btn btn-success btn-sm">Modifier</span></button></a>'
          },
          "targets" : 4
        }
      ],
        //hide search sign
      language: { search: "" }
  });
  // Apply the searchBox filter
  $("#example tfoot input").on('keyup change', function() {
    table
      .column( $(this).parent().index()+':visible' )
      .search( this.value )
      .draw();
  });
  $('#example tfoot tr').appendTo('#example thead');
  //make search placeholder
  $('.dataTables_filter input').attr("placeholder", "SEARCH");

});
