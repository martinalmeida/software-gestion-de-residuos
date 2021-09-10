
//---------------------------------------------------------------------
//    Script de nombre de usuario corto para todas las bases de datos
//---------------------------------------------------------------------

function ellipsis_box(elemento, max_chars){
          limite_text = $(elemento).text();
          if (limite_text.length > max_chars)
          {
          limite = limite_text.substr(0, max_chars)+"";
          $(elemento).text(limite);
          }
          }
          $(function()
          {
          ellipsis_box(".limitado", 14);
          });

//---------------------------------------------------------------------
// Fin Script de nombre de usuario corto para todas las bases de datos
//---------------------------------------------------------------------



//---------------------------------------------------------------------
// Inicio Script de ( Hora ) para los index.php de todas las bases de datos
//---------------------------------------------------------------------
    
    $(function(){
  var actualizarHora = function(){
    var fecha = new Date(),
        hora = fecha.getHours(),
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds(),
        diaSemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        anio = fecha.getFullYear(),
        ampm;
    
    var $pHoras = $("#horas"),
        $pSegundos = $("#segundos"),
        $pMinutos = $("#minutos"),
        $pAMPM = $("#ampm"),
        $pDiaSemana = $("#diaSemana"),
        $pDia = $("#dia"),
        $pMes = $("#mes"),
        $pAnio = $("#anio");
    var semana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
    var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    
    $pDiaSemana.text(semana[diaSemana]);
    $pDia.text(dia);
    $pMes.text(meses[mes]);
    $pAnio.text(anio);
    if(hora>=12){
      hora = hora - 12;
      ampm = "PM";
    }else{
      ampm = "AM";
    }
    if(hora == 0){
      hora = 12;
    }
    if(hora<10){$pHoras.text("0"+hora)}else{$pHoras.text(hora)};
    if(minutos<10){$pMinutos.text("0"+minutos)}else{$pMinutos.text(minutos)};
    if(segundos<10){$pSegundos.text("0"+segundos)}else{$pSegundos.text(segundos)};
    $pAMPM.text(ampm);
    
  };
  
  
  actualizarHora();
  var intervalo = setInterval(actualizarHora,1000);
});


//---------------------------------------------------------------------
// Fin Script de ( Hora ) para los index.php de todas las bases de datos
//---------------------------------------------------------------------



//---------------------------------------------------------------------
//                Inicio Scripts login (Iniciar sesión)
//---------------------------------------------------------------------

//------------------Inicio de sesión (GERENTE)--------------------------

$('#form').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var contrasena =$.trim($("#contrasena").val());    
    
   if(usuario.length == "" || contrasena == ""){
      Swal.fire({
          type:'warning',
          title:'Ingrese su Usuario y Contraseña',
          confirmButtonColor:'#96c311'
      });
      return false; 
    }else{
        $.ajax({
           url:"php/validacion_login.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, contrasena:contrasena}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario o Contraseña incorrecta',
                       confirmButtonColor:'#96c311'
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Bienvenido Gerente!',
                       confirmButtonColor:'#96c311',
                       confirmButtonText:'Ingresar',
                       allowOutsideClick: false
                   }).then((result) => {
                       if(result.value){
                           //window.location.href = "vistas/pag_inicio.php";
                           window.location.href = "gerente/home_gerente.php";
                       }
                   })
                   
               }
           }    
        });
    }     
});

//---------------Fin Inicio de sesión (GERENTE)-----------------------------



//------------------Inicio de sesión (ADMINISTRADOR)------------------------


$('#form2').submit(function(e){
   e.preventDefault();
   var usuario2 = $.trim($("#usuario2").val());    
   var contrasena2 =$.trim($("#contrasena2").val());    
    
   if(usuario2.length == "" || contrasena2 == ""){
      Swal.fire({
          type:'warning',
          title:'Ingrese su Usuario y Contraseña',
          confirmButtonColor:'#96c311'
      });
      return false; 
    }else{
        $.ajax({
           url:"php/login_validar.php",
           type:"POST",
           datatype: "json",
           data: {usuario2:usuario2, contrasena2:contrasena2}, 
           success:function(data){             
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario o Contraseña incorrecta',
                       confirmButtonColor:'#96c311'
                   });
               }else{
                let mostrar = JSON.parse(data)
                for(let item of mostrar){
                  if(item.rol==2){ //admin
                    Swal.fire({
                       type:'success',
                       title:'Bienvenid@ '+ item.nombre,
                       confirmButtonColor:'#96c311',
                       confirmButtonText:'Ingresar',
                       allowOutsideClick: false
                   }).then((result) => {
                    if (result.value) {
                      window.location.href = "admin/index.php";
                    }
                   })
                  }else if(item.rol==3){ //cliente
                  Swal.fire({
                       type:'success',
                       title:'Bienvenid@ '+ item.nombre,
                       confirmButtonColor:'#96c311',
                       confirmButtonText:'Ingresar',
                       allowOutsideClick: false
                   }).then((result) => {
                    if (result.value) {
                      window.location.href = "cliente/index.php";
                    }
                   })
                  }else{
                      window.location.href = "index.php";
                  }
                }    
               }
           }    
        });
    }     
});

//---------------Fin Inicio de sesión (ADMINISTRADOR)------------------------



//---------Cambiar Inicio de sesión  de (ADMINISTRADOR) a (Gerente)----------

$(function() {
    $(".btn").click(function() {
      $(".form-signin").toggleClass("form-signin-left");
      $(".form-signup").toggleClass("form-signup-left");
      $(".frame").toggleClass("frame-long");
      $(".signup-inactive").toggleClass("signup-active");
      $(".signin-active").toggleClass("signin-inactive");
      $(".forgot").toggleClass("forgot-left");   
      $(this).removeClass("idle").addClass("active");
    });
  });

//-------Fin Cambiar Inicio de sesión  de (ADMINISTRADOR) a (GERENTE)---------



//-------Inicio Cambio de contraseña encriptada a texto (Ver contraseña) de (ADMINISTRADOR) y (GERENTE)---------

//-------Ver contraseña  de (ADMINISTRADOR) ---------

function myFunction() {
var x = document.getElementById("contrasena2");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
}

//-------Ver contraseña  de (GERENTE) ---------

function myFunction2() {
var x = document.getElementById("contrasena");
if (x.type === "password") {
  x.type = "text";
} else {
  x.type = "password";
}
}

//-------Fin Cambio de contraseña encriptada a texto (Ver contraseña) de (ADMINISTRADOR) y (GERENTE)----------



//------------------------------------------------------------------------
//                    Fin Scripts login (Iniciar sesión)
//------------------------------------------------------------------------





//------------------------------------------------------------------------
//                  INICIO Scripts MODULO ADMINISTRADOR
//------------------------------------------------------------------------


//----------------- Alertas de Actualizaciones (Sweetalert2)--------------------


//Alerta de Guardado correctamente del Actualizar perfil (actualizar_perfil.php)

$(document).ready(function(e) {

  $("#actualizarnegocio").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'actualizar_perfil.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "perfil.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});



//Alerta de Guardado correctamente del Actualizar usuarios (update_usuarios.php)

$(document).ready(function(e) {

  $("#actualizar-user").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'update_usuarios.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "usuarios.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});



//Alerta de Guardado correctamente del Actualizar Unidades de negocios (update_unidad_nego.php)

$(document).ready(function(e) {

  $("#update_nego").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_unidad_nego.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "unidades_negocio.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});




//Alerta de Guardado correctamente del Actualizar Lineas de servicio (update_lineas_servicio.php)

$(document).ready(function(e) {

  $("#update_servicio").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_lineas_servicio.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "lineas_servicio.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar Especificaciones adicionales (update_esp_adicionales.php)

$(document).ready(function(e) {

  $("#update_esp_adicionales").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_esp_adicionales.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "esp_adicionales.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar Chequeos (update_chequeos.php)

$(document).ready(function(e) {

  $("#update_chequeos").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_chequeos.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "chequeos.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});

//Alerta de Guardado correctamente del Actualizar Estados del recorrido (update_estados_recorrido.php)

$(document).ready(function(e) {

  $("#update_recorrido").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_estados_recorrido.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "estados_recorrido.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar Metricas (update_metricas.php)

$(document).ready(function(e) {

  $("#update_metricas").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_metricas.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "metricas.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});



//Alerta de Guardado correctamente del Actualizar Riesgos (update_riesgos.php)

$(document).ready(function(e) {

  $("#update_riesgos").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_riesgos.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "riesgos.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar Disposicion / Manejo (update_disposicion.php)

$(document).ready(function(e) {

  $("#update_disposicion_manejo").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_disposicion.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "disposicion.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});



//Alerta de Guardado correctamente del Actualizar RESIDUOS GENERALES (update_residuos_generales.php)

$(document).ready(function(e) {

  $("#update_residuos").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_residuos_generales.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "residuos_generales.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar ZONAS (update_zonas.php)

$(document).ready(function(e) {

  $("#update_zonas").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_zonas.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "zonas.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar Sucursales (update_sucursal.php)

$(document).ready(function(e) {

  $("#update_sucursal").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_sucursal.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "sucursales.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar Vehículos (update_vehiculo.php)

$(document).ready(function(e) {

  $("#update_vehiculo").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_vehiculo.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "vehiculos.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar Proveedores (update_prove.php)

$(document).ready(function(e) {

  $("#update_proveedores").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_prove.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "proveedores.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Guardado correctamente del Actualizar Clientes (update_cliente.php)

$(document).ready(function(e) {

  $("#update_cliente").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/update_cliente.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Actualizada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "clientes.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});




//----------------- Generación de Actas (archivo: actas.php) Evento ONCLICK de cada uno de los checkbox de
//                                        (Residuos Recepcionados)
//------------------------------------------ -------------------------------------------------------------

function mat_abs() {
        element = document.getElementById("material_absorvente");
        check = document.getElementById("material");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function plasticos() {
        element = document.getElementById("plastico_contaminante");
        check = document.getElementById("plastico");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function lodos() {
        element = document.getElementById("lodos_aceitosos");
        check = document.getElementById("lodo");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }


function carton_c() {
        element = document.getElementById("carton_contaminado");
        check = document.getElementById("carton");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }


function vidrio_con() {
        element = document.getElementById("vidrio_contaminado");
        check = document.getElementById("vidrio");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }


function metales() {
        element = document.getElementById("metales_chatarra");
        check = document.getElementById("metal");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function filtros() {
        element = document.getElementById("filtross");
        check = document.getElementById("filtro");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function aceites() {
        element = document.getElementById("aceites_industriales");
        check = document.getElementById("aceite");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }


function solventes() {
        element = document.getElementById("solventess");
        check = document.getElementById("solvente");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function residuos_quimicos() {
        element = document.getElementById("residuos");
        check = document.getElementById("residuo_q");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function fluorecente() {
        element = document.getElementById("fluorecentes");
        check = document.getElementById("fluo");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function baterias() {
        element = document.getElementById("bateriass");
        check = document.getElementById("bateria");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function pilas() {
        element = document.getElementById("pilass");
        check = document.getElementById("pila");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function residuos_organicos() {
        element = document.getElementById("residuo_org");
        check = document.getElementById("resi");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }


function residuos_ordinarios() {
        element = document.getElementById("residuos_ordinario");
        check = document.getElementById("resio");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function residuos_reciclables() {
        element = document.getElementById("residuo_reciclable");
        check = document.getElementById("resicl");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function residuos_cortopunzantes() {
        element = document.getElementById("residuo_cortopunzante");
        check = document.getElementById("resipun");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function epps() {
        element = document.getElementById("eppss");
        check = document.getElementById("epp");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function otros() {
        element = document.getElementById("otro");
        check = document.getElementById("otr");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }

function otros2() {
        element = document.getElementById("otro2");
        check = document.getElementById("otr2");
        if (check.checked) {
            element.style.display='';
        }
        else {
            element.style.display='none';
        }
    }




//----------------- Estilos Generación de Actas ( selección de la firma ) ---------------------------
//------------------------------------------ -------------------------------------------------------------

$(document).ready(function() {

          $("#firma_acta").on('change', function() {
              var fileName = $(this).val().split("\\").pop();
              $(this).siblings(".firmatxt_acta").addClass("selected").html(fileName);        
          })

          });


function firma_actas(file) {
            var fileName = file.files[0].name;
            var FileSize = file.files[0].size / 1024 / 1024; // in MB
            if (FileSize > 3) {
              input=document.getElementById("firma_acta");
              input.value = '' 
                Swal.fire({
                  type:'error',
                  title:'Excede los 3MB permitidos',
                  confirmButtonColor:'#76a03f',
                  confirmButtonText:'Ok'
              }).then((result) => {
                  if(result.value){
                  }
              })
            } else {
                var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
                if (!allowedExtensions.exec(fileName)) {
                  input=document.getElementById("firma_acta");
                  input.value = ''
                  Swal.fire({
                  type:'error',
                  title:'Solo se permite el logo en (jpg, jpeg, png)',
                  confirmButtonColor:'#76a03f',
                  confirmButtonText:'Ok'
              }).then((result) => {
                  if(result.value){
                  }
              })

                }
            }
          }





//Alerta de Registrado correctamente de usuarios (insertar_usuarios.php)

$(document).ready(function(e) {

  $("#register-usuarios").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'insertar_usuarios.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Guardada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "usuarios.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});






//Alerta de Guardado correctamente del REGISTRO DE UNIDAD DE NEGOCIO (insertar_unidad_nego.php)

$(document).ready(function() {

  $("#unidad_nego").bind("submit", function(){

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
                  window.location.href = "unidades_negocio.php";
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



//Alerta de Guardado correctamente del REGISTRO DE LINEAS DE SERVICIO (insertar_lineas_servicio.php)

$(document).ready(function() {

  $("#lineas_servicio").bind("submit", function(){

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
                  window.location.href = "lineas_servicio.php";
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



//Alerta de Guardado correctamente del REGISTRO DE ESPECIFICACIONES ADICIONALES (insertar_esp_adicionales.php)

$(document).ready(function() {

  $("#register_esp_adicionales").bind("submit", function(){

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
                  window.location.href = "esp_adicionales.php";
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


//Alerta de Guardado correctamente del REGISTRO DE CHEQUEOS (insertar_chequeos.php)

$(document).ready(function() {

  $("#insertar_chequeos").bind("submit", function(){

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
                  window.location.href = "chequeos.php";
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


//Alerta de Guardado correctamente del ESTADOS DEL RECORRIDO (insertar_estados_recorrido.php)

$(document).ready(function() {

  $("#insertar_estados_recorrido").bind("submit", function(){

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
                  window.location.href = "estados_recorrido.php";
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


//Alerta de Guardado correctamente de METRICAS (insertar_metricas.php)

$(document).ready(function() {

  $("#insertar_metricas").bind("submit", function(){

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
                  window.location.href = "metricas.php";
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


//Alerta de Guardado correctamente de RIESGOS (insertar_riesgos.php)

$(document).ready(function() {

  $("#insertar_riesgos").bind("submit", function(){

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
                  window.location.href = "riesgos.php";
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


//Alerta de Guardado correctamente de DISPOSICION / MANEJO (insertar_disposicion.php)

$(document).ready(function() {

  $("#insertar_disposicion_manejo").bind("submit", function(){

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
                  window.location.href = "disposicion.php";
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


//Alerta de Guardado correctamente de RESIDUOS GENERALES (insertar_residuos_generales.php)

$(document).ready(function() {

  $("#insertar_residuos").bind("submit", function(){

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
                  window.location.href = "residuos_generales.php";
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


//Alerta de Registrado correctamente de Registro Proveedor (register_proveedor.php)

$(document).ready(function(e) {

  $("#register_proveedor").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/insertar_prove.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Guardada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "proveedores.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});


//Alerta de Registrado correctamente de Registro Sucursales (register_sucursal.php)

$(document).ready(function(e) {

  $("#registro_sucursal").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/insertar_sucursales.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Guardada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "sucursales.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});

//Alerta de Registrado correctamente de Registro Zonas (register_zonas.php)

$(document).ready(function(e) {

  $("#register_zonas").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/insertar_zonas.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Guardada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "zonas.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});

//Alerta de Registrado correctamente de REGISTRO VEHICULOS (register_vehiculos.php)

$(document).ready(function(e) {

  $("#register_vehiculos").bind("submit", function(e){
    e.preventDefault();

    $.ajax({
      type: 'POST',
      url: 'php/insertar_vehiculos.php',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData:false,
      success:function(){
        Swal.fire({
              type:'success',
              title:'Información Guardada Correctamente',
              confirmButtonColor:'#76a03f',
              confirmButtonText:'Ok',
              allowOutsideClick: false
          }).then((result) => {
              if(result.value){
                  window.location.href = "vehiculos.php";
              }
          })
      },
      error:function(){
        Swal.fire({
          type:'error',
          title:'¡Error al actualizar!',
          confirmButtonColor:'#76a03f'
          });
      }

    });

    return false;
  });
});




//------------------------------------------------------------------------
//                  Fin Scripts MODULO ADMINISTRADOR
//------------------------------------------------------------------------




//Estilos firma ( Despachado por: ) en mis manifiestos


         (function() { // Comenzamos una funcion auto-ejecutable

  // Obtenenemos un intervalo regular(Tiempo) en la pamtalla
  window.requestAnimFrame = (function (callback) {
    return window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimaitonFrame ||
          function (callback) {
            window.setTimeout(callback, 1000/60);
            // Retrasa la ejecucion de la funcion para mejorar la experiencia
          };
  })();

  // Traemos el canvas mediante el id del elemento html
  var canvas = document.getElementById("draw-canvas");
  var ctx = canvas.getContext("2d");


  // Mandamos llamar a los Elemetos interactivos de la Interfaz HTML
  var drawText = document.getElementById("draw-dataUrl");
  var drawImage = document.getElementById("draw-image");
  var clearBtn = document.getElementById("draw-clearBtn");
  var submitBtn = document.getElementById("draw-submitBtn");
  clearBtn.addEventListener("click", function (e) {
    // Definimos que pasa cuando el boton draw-clearBtn es pulsado
    clearCanvas();
    drawImage.setAttribute("src", "");
  }, false);
    // Definimos que pasa cuando el boton draw-submitBtn es pulsado
  submitBtn.addEventListener("click", function (e) {
  var dataUrl = canvas.toDataURL();
  drawText.innerHTML = dataUrl;
  drawImage.setAttribute("src", dataUrl);
   }, false);

  // Activamos MouseEvent para nuestra pagina
  var drawing = false;
  var mousePos = { x:0, y:0 };
  var lastPos = mousePos;
  canvas.addEventListener("mousedown", function (e)
  {
    /*
      Mas alla de solo llamar a una funcion, usamos function (e){...}
      para mas versatilidad cuando ocurre un evento
    */
    var tint = document.getElementById("color");
    var punta = document.getElementById("puntero");
    console.log(e);
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);
  canvas.addEventListener("mouseup", function (e)
  {
    drawing = false;
  }, false);
  canvas.addEventListener("mousemove", function (e)
  {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Activamos touchEvent para nuestra pagina
  canvas.addEventListener("touchstart", function (e) {
    mousePos = getTouchPos(canvas, e);
    console.log(mousePos);
    e.preventDefault(); // Prevent scrolling when touching the canvas
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(mouseEvent);
  }, false);
  canvas.addEventListener("touchend", function (e) {
    e.preventDefault(); // Prevent scrolling when touching the canvas
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(mouseEvent);
  }, false);
  canvas.addEventListener("touchleave", function (e) {
    // Realiza el mismo proceso que touchend en caso de que el dedo se deslice fuera del canvas
    e.preventDefault(); // Prevent scrolling when touching the canvas
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(mouseEvent);
  }, false);
  canvas.addEventListener("touchmove", function (e) {
    e.preventDefault(); // Prevent scrolling when touching the canvas
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(mouseEvent);
  }, false);

  // Get the position of the mouse relative to the canvas
  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    /*
      Devuelve el tamaño de un elemento y su posición relativa respecto
      a la ventana de visualización (viewport).
    */
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    };
  }

  // Get the position of a touch relative to the canvas
  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    console.log(touchEvent);
    /*
      Devuelve el tamaño de un elemento y su posición relativa respecto
      a la ventana de visualización (viewport).
    */
    return {
      x: touchEvent.touches[0].clientX - rect.left, // Popiedad de todo evento Touch
      y: touchEvent.touches[0].clientY - rect.top
    };
  }

  // Draw to the canvas
  function renderCanvas() {
    if (drawing) {
      var tint = document.getElementById("color");
      var punta = document.getElementById("puntero");
      ctx.strokeStyle = tint.value;
      ctx.beginPath();
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      console.log(punta.value);
      ctx.lineWidth = punta.value;
      ctx.stroke();
      ctx.closePath();
      lastPos = mousePos;
    }
  }

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Allow for animation
  (function drawLoop () {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

})();








//Estilos firma ( Recibido por: ) en mis manifiestos


         (function() { // Comenzamos una funcion auto-ejecutable

  // Obtenenemos un intervalo regular(Tiempo) en la pamtalla
  window.requestAnimFrame = (function (callback) {
    return window.requestAnimationFrame ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame ||
          window.oRequestAnimationFrame ||
          window.msRequestAnimaitonFrame ||
          function (callback) {
            window.setTimeout(callback, 1000/60);
            // Retrasa la ejecucion de la funcion para mejorar la experiencia
          };
  })();

  // Traemos el canvas mediante el id del elemento html
  var canvas = document.getElementById("draw2-canvas");
  var ctx = canvas.getContext("2d");


  // Mandamos llamar a los Elemetos interactivos de la Interfaz HTML
  var drawText = document.getElementById("draw2-dataUrl");
  var drawImage = document.getElementById("draw2-image");
  var clearBtn = document.getElementById("draw2-clearBtn");
  var submitBtn = document.getElementById("draw2-submitBtn");
  clearBtn.addEventListener("click", function (e) {
    // Definimos que pasa cuando el boton draw-clearBtn es pulsado
    clearCanvas();
    drawImage.setAttribute("src", "");
  }, false);
    // Definimos que pasa cuando el boton draw-submitBtn es pulsado
  submitBtn.addEventListener("click", function (e) {
  var dataUrl = canvas.toDataURL();
  drawText.innerHTML = dataUrl;
  drawImage.setAttribute("src", dataUrl);
   }, false);

  // Activamos MouseEvent para nuestra pagina
  var drawing = false;
  var mousePos = { x:0, y:0 };
  var lastPos = mousePos;
  canvas.addEventListener("mousedown", function (e)
  {
    /*
      Mas alla de solo llamar a una funcion, usamos function (e){...}
      para mas versatilidad cuando ocurre un evento
    */
    var tint = document.getElementById("color");
    var punta = document.getElementById("puntero");
    console.log(e);
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);
  canvas.addEventListener("mouseup", function (e)
  {
    drawing = false;
  }, false);
  canvas.addEventListener("mousemove", function (e)
  {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Activamos touchEvent para nuestra pagina
  canvas.addEventListener("touchstart", function (e) {
    mousePos = getTouchPos(canvas, e);
    console.log(mousePos);
    e.preventDefault(); // Prevent scrolling when touching the canvas
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(mouseEvent);
  }, false);
  canvas.addEventListener("touchend", function (e) {
    e.preventDefault(); // Prevent scrolling when touching the canvas
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(mouseEvent);
  }, false);
  canvas.addEventListener("touchleave", function (e) {
    // Realiza el mismo proceso que touchend en caso de que el dedo se deslice fuera del canvas
    e.preventDefault(); // Prevent scrolling when touching the canvas
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(mouseEvent);
  }, false);
  canvas.addEventListener("touchmove", function (e) {
    e.preventDefault(); // Prevent scrolling when touching the canvas
    var touch = e.touches[0];
    var mouseEvent = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(mouseEvent);
  }, false);

  // Get the position of the mouse relative to the canvas
  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    /*
      Devuelve el tamaño de un elemento y su posición relativa respecto
      a la ventana de visualización (viewport).
    */
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    };
  }

  // Get the position of a touch relative to the canvas
  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    console.log(touchEvent);
    /*
      Devuelve el tamaño de un elemento y su posición relativa respecto
      a la ventana de visualización (viewport).
    */
    return {
      x: touchEvent.touches[0].clientX - rect.left, // Popiedad de todo evento Touch
      y: touchEvent.touches[0].clientY - rect.top
    };
  }

  // Draw to the canvas
  function renderCanvas() {
    if (drawing) {
      var tint = document.getElementById("color");
      var punta = document.getElementById("puntero");
      ctx.strokeStyle = tint.value;
      ctx.beginPath();
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      console.log(punta.value);
      ctx.lineWidth = punta.value;
      ctx.stroke();
      ctx.closePath();
      lastPos = mousePos;
    }
  }

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Allow for animation
  (function drawLoop () {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

})();





