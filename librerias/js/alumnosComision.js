$(function(){
    $('.agregarAlumno').click(function(){
        var alumno=$(this).closest('tr').find('.nombre').html(),
            mensaje="<p>Ud. Estad a punto de agregar a "+alumno+" en esta comision.</p><p>Esta Seguro?</p>";
            console.log(alumno+'-'+mensaje);
        $('#modalAgregarAlumno .mensaje').html(mensaje);
    });
});