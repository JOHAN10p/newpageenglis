/*No es recomendable declarar variables de forma lineal, hazlo por separado */

var btn = document.getElementById('ingresar');
var clave = document.getElementById('clave');
var usuario = document.getElementById('usuario');

/*en tu login te falto agregarle un id a tu botón y pasarle tu funcion validar2(), 
yo lo hago con listeners para no poner funciones js en el HTML, buenas prácticas, 
valido que no vengan vacios los campos y agrego la funcion de evt.preventDefault() 
como su nombre lo indica previene o cancela el evento si es que fuera cancelable en este caso 
el submit lo es y retorno un false para que no siga ejecutando la estructura del if*/

btn.addEventListener('click', function(evt){

      if(clave.value === ''){
        
          alert('el campo contraseña es obligatorio')
          evt.preventDefault();
          return false;
      
      }else if(usuario.value === ''){
      
      alert('el campo de usuario es obligatorio')
          evt.preventDefault();
          return false;
      
      }else if(usuario.value.length > 30){
      
        alert('El nombre del usuario es demasiado largo')
          evt.preventDefault();
          return false;
      
      }
    
  


});