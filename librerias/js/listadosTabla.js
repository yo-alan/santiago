$(function(){
    $(".tablaData").dataTable({
        "sDom" : "<<f>><t><i><p >",
        "oLanguage": {
            "sProcessing" : "Procesando...",
            "sLengthMenu" : "<h6>Mostrar _MENU_ registros</h6>",
            "sZeroRecords" : "No se encontraron resultados",
            "sInfo": "Mostrando desde _START_ hasta _END_ de _TOTAL_ Registros",
            "sInfoEmpty": "Showing 0 to 0 of 0 records",
            "sInfoFiltered": "(filtered from _MAX_ total records)",
            "sSearch" : "Buscar",
            "oPaginate" : {
                "sFirst" : "Primero",
                "sPrevious" : "Anterior",
                "sNext" : "Siguiente",
                "sLast" : "Ultimo"
            }
        }
    });
    
    $(".tablaData-simple").dataTable({
        "sDom" : "<f><t><p>",
        "oLanguage": {
            "sProcessing" : "Procesando...",
            "sZeroRecords" : "No se encontraron resultados",
            "sInfo": "Mostrando desde _START_ hasta _END_ de _TOTAL_ Registros",
            "sInfoFiltered": "(filtered from _MAX_ total records)",
            "sSearch" : "Buscar",
            "oPaginate" : {
                "sFirst" : "Primero",
                "sPrevious" : "Anterior",
                "sNext" : "Siguiente",
                "sLast" : "Ultimo"
            }
        }
    });
});