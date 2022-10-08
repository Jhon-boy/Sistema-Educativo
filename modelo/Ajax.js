function miFuncion(){
    $(document).ready(function(){
        $('#btningresar').click(function(){
            var datos = $('#frmajax').serialize();
            alert(datos);
            $.ajax({
                type: "POST",
                url: "http://localhost/Oficial/modelo/logueo.php",
                data:datos,
                success: function(r){
                    if(r!=1)
                    alert('Ingreso de datos exitoso');
                    else
                    alert("Fallo la conexion");
                }
            });
            return false
        });
    });
}
