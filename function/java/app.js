//----!! Libreria de funciones app java-jquery para la pagina "http://lectura.quotidiana.net" ||
//----!! Para dudas o contactar twitter @ncasolajimenez :D ||

//StyleSwitcher
   $(document).ready(function() { 
      $("#contenido a").click(function() { 
         $("link").attr("href",$(this).attr('rel'));
         return false;
      });
   });
//Funcion Draggable
//$(function() {
//		$( "#contenido" ).draggable();
//	});
//Fin
