//Alerta de Guardado correctamente del REGISTRO DE EMPRESAS (register_empresa_gerente.php)

$(document).ready(function() {

  $(".formulario-empresa").bind("submit", function(){

    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success:function(){
        Swal.fire({
              type:'success',
              title:'Guardado Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  //window.location.href = "vistas/pag_inicio.php";
                  window.location.href = "empresas_gerente.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al registrar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});



//Alerta de Guardado correctamente del REGISTRO DE USUARIOS (register_usuario_gerente.php)

$(document).ready(function(e) {

  $("#uploadImageForm").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'insertar_bd2.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Guardado Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "usuarios_gerente.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al registrar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});



//Alerta de MODIFICACIÓN CORRECTAMENTE de EDITAR EMPRESAS (modif_empresa.php)

$(document).ready(function() {

  $(".formulario-editar-empresas").bind("submit", function(){

    $.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success:function(){
        Swal.fire({
              type:'success',
              title:'Modificación realizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "empresas_gerente.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al realizar la Modificación!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});





//Alerta de MODIFICACIÓN CORRECTAMENTE de EDITAR USUARIOS (modif_usr.php)

$(document).ready(function(e) {

  $(".formulario-editar-usuarios").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'update_usr.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Modificación realizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "usuarios_gerente.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al realizar la Modificación!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});





//Estilos Input OJO de contraseña en (register_usuario_gerente) (modif_usr)

$(document).ready(function() {
  $('#showw').mousedown(function(){
    $('#passs').removeAttr('type');
  });

    $('#showw').mouseup(function(){
    $('#passs').attr('type','password');
  });

});