$(function(){
    $('.agregarAlumno').click(function(){
        var alumno=$(this).closest('tr').find('.nombre').html(),
            dni=$(this).closest('tr').find('.dni').html(),
            mensaje="<p>Ud. Esta a punto de agregar a "+alumno+" en esta comision.</p><p>Esta Seguro?</p>";
            console.log(alumno+'-'+mensaje);
        $('#modalAgregarAlumno .mensaje').html(mensaje);
        $('#modalAgregarAlumno form .addAlumno').val(dni);
    });
    
    $('.quitarAlumno').click(function(){
        var alumno=$(this).closest('tr').find('.nombre').html(),
            dni=$(this).closest('tr').find('.dni').html(),
            mensaje="<p>Ud. Esta a punto de quitar a "+alumno+" de esta comision.</p><p>Esta Seguro?</p>";
            console.log(alumno+'-'+mensaje);
        $('#modalQuitarAlumno .mensaje').html(mensaje);
        $('#modalQuitarAlumno form .rmAlumno').val(dni);
    });
    
    $('#siEliminar , #siAgregar').click(function(){
        $(this).closest('.modal').find('form').submit();
    });
});