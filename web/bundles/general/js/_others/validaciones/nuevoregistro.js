/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * Apply to UsuarioBundle/userregister.html.twig
 */


$(document).ready(function() {
    $('#div_principal .regist').click(function() {
        
               
        var nombre = $('#form-field-name').val();
        var apellidos = $('#form-field-lastname').val();
        var email = $('#form-field-email').val();
      
        var newpassword= $('#form-field-passw').val();
        var repeatpassword  = $('#form-field-passwre').val();
        var pregseguridad = $('#form-field-pseg').val();
        var respseguridad = $('#form-field-pseg-resp').val();
  

        if (nombre == '') {
            alert('Debe llenar el nombre');
            return false;
        }
        if (apellidos == '') {
            alert('Debe llenar los apellidos');
            return false;
        }

        if (email == '') {
            alert('Debe llenar su direccion email');
            return false;
        }
        
         if (newpassword == '' && repeatpassword != '') {
            alert('Debe llenar el campo de nueva contraseña');
            return false;
        }
        if (newpassword != '' && repeatpassword == '') {
            alert('Debe llenar el campo de repetir nueva contraseña');
            return false;
        }
        
        if (newpassword != '' && repeatpassword != '') {
            if (newpassword != repeatpassword)
            {
                alert('Las nuevas contraseñas no coinciden');
                return false;
            }
            
        }
        if (pregseguridad != '' && respseguridad  == '') {
           
                alert('Debe llenar el campo respuesta a pregunta de seguridad');
                return false;
   
        }
        if (pregseguridad == '' && respseguridad  != '') {
           
                alert('Debe llenar el campo pregunta de seguridad');
                return false;
   
        }
        function test(){
        alert('El usuario ha sido registrado satisfactoriamente, ahora debe autenticarse');
        }


    });
    });