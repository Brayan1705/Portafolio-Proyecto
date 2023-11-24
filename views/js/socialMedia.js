var usu_id = $('#usu_idx').val();

function init(){
    $("#socialMedia_form").on("submit",function(e){
        guardaryeditar(e);
    })

}

function guardaryeditar(e){
    e.preventDefault();
    var formData = new formData($("socialMedia_form")[0]);
    $.ajax({
        url: "proyecto/controller/social_media.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(data){
            console.log(data);
            $('#socialMedia_data').DataTable().ajax.reload();
            $('#modalcrearRedes').modal('hide');

            Swal.fire({
                title:'Correcto!',
                text:'Se registro Correctamente',
                icon:'succes',
                confirmButtonText:'Aceptar'
            })
        }
    })

}

$(document).ready(function(){

    $('socialMedia_data').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
        ],
        "ajax":{
            url:"/Proyecto/controller/social_media.php?op=listar",
            type:"post"
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 15,
        "order": [[ 0, "desc" ]],
        "language":{
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar MENU registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del START al END de un total de TOTAL registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de MAX registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de masnera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
    
        }    
    })
})