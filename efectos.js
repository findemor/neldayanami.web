//FUNCION PARA QUE SE MUEVAN DESPACIO LOS ENLACES
$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});



//FONDO FORMULARIO

function cambiarFondo(){
	document.getElementById("_nombre").style.backgroundColor="rgba(249,69,90,0.4)"
}

function volverFondo(){
	document.getElementById("_nombre").style.backgroundColor="white"
}

function cambiarFondo2(){
	document.getElementById("formimail").style.backgroundColor="rgba(249,69,90,0.4)"
}

function volverFondo2(){
	document.getElementById("formimail").style.backgroundColor="white"
}

function cambiarFondo3(){
	document.getElementById("_asunto").style.backgroundColor="rgba(249,69,90,0.4)"
}

function volverFondo3(){
	document.getElementById("_asunto").style.backgroundColor="white"
}

function cambiarFondo4(){
	document.getElementById("_direccion").style.backgroundColor="rgba(249,69,90,0.4)"
}

function volverFondo4(){
	document.getElementById("_direccion").style.backgroundColor="white"
}


function desplegar(){
	if(document.getElementById("menuDesplegado").style.visibility=="hidden"){
		document.getElementById("menuDesplegado").style.visibility="visible"
	}

	else{ document.getElementById("menuDesplegado").style.visibility="hidden"
	}
}



