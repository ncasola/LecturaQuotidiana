//----!! Libreria de funciones app java-jquery para la pagina "http://lectura.quotidiana.net" ||
//----!! Para dudas o contactar twitter @ncasolajimenez :D ||

//Google Analitics
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25928574-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
//Loading para la llamada ajax
 jQuery('#show').ready(function(){
 
                jQuery('#loading').ajaxStart(function() {
                    jQuery(this).show();
                });
 
                jQuery('#loading').ajaxError(function(e, xhr, opts, error) {
                    alert('La petición a la página ' + opts.url + ' ha devuelto el siguiente error: ' + xhr.status + ' - ' + error);
                });
 
                jQuery('#loading').ajaxStop(function() {
                    jQuery(this).hide();
                });
            });