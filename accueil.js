

$(document).ready(function() {
  $('#example tfoot th').each(function() {
    let title = $('#example thead th').eq( $(this).index()).text();
    modif = title.indexOf("Modifier");
    supp = title.indexOf("Supprimer");
    if(modif == -1 && supp == -1){
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
            return '<a href="#img'+ inputid +'" data-toggle="modal" style="display: flex;justify-content: space-around;"><button type="button" class="btn btn-success btn-sm">Image</button></a>'
          },
          "targets" : 4
        },
        {
          "render" : function(data,type,row){
            var inputid = row[0];
            return '<a href="#update'+ inputid +'" data-toggle="modal" style="display: flex;justify-content: space-around;"><button type="button" class="btn btn-success btn-sm"><i class="far fa-edit"></i></button></a>'
          },
          "targets" : 5
        },
        {
          "render" : function(data,type,row){
            var inputid = row[0];
            return '<a href="#delete'+ inputid  +'" data-toggle="modal" style="display: flex;justify-content: space-around;"><button type="button" class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i>  </button></a>'
          },
          "targets" : 6
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
