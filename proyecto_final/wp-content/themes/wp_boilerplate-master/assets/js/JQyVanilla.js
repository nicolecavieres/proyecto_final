$(document).ready(function(){	
/*MENÚ*/
	var medioxl = window.matchMedia("(min-width: 1200px)");
	var menuUl = document.getElementsByTagName('ul')[0];
	if(medioxl.matches){

		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
		    document.getElementById("cajamenu").classList.add('cajamenu2');
		    menuUl.classList.add('sinborde');
		  } 
		  else{
		  	document.getElementById("cajamenu").classList.remove('cajamenu2');
		  	menuUl.classList.remove('sinborde');
		  }
		}
	}
		
	/*---Submenus ocultos en dispositivos menores a 1200--*/

		var mediosmall = window.matchMedia("(max-width: 1199px)");
		if (mediosmall.matches) {
		 	$('.cajamenu > div > ul > li > ul').hide();
		}

	/*---Icono (flechita para abajo) para los itemes que tengan submenus--*/

		$('li:has(li) > a').append('<span class="fa fa-angle-down abajo" aria-hidden="true"></span>');

	/*---Menus administrables máximo 8--*/

		function abajoMenu(x){
			$('.abajo').eq(x).on('click' , function(event){
				$('.sub-menu').eq(x).slideToggle(); /* Motrar y ocultar submenus*/
				$('.abajo').eq(x).toggleClass("fa-angle-down fa-angle-up"); /* Cambiar icono(flechita para arriba)*/
			})	
		}

		for(i = 0; i < 9; i++){
			abajoMenu(i);
		}

	/*Movimiento del menú, se esconde hacia la izquierda al dar click al botón o afuera*/

		var contador = 1;

		$('#menu1').on('click' , function(){
				if(contador == 1){
					$('.cajamenu').animate({
						left:'0'
					});
					contador = 0;
				}
				else{
					contador = 1;
					$('.cajamenu').animate({
						left:'-100%'		
					});
				}
			if(contador == 0){

				$("html").click(function() {
				    contador = 1;
						$('.cajamenu').animate({
							left:'-100%' 
						});
				});
				$('.cajamenu').click(function (e) {
				    e.stopPropagation();
				});
				$('.menu-responsivo').click(function (e) {
				    e.stopPropagation();
				});
			}
		})


/*HORARIO DE ATENCION*/
	var ahora = document.getElementById("ahora");
	var d = new Date();
	var horas = d.getHours();
	var minutos = d.getMinutes();
	var dia= d.getDay();

	if(horas < 8 || horas > 19){
		ahora.innerHTML="Cerrado";
	}
	else if(horas == 19 && minutos > 0){
		ahora.innerHTML="Cerrado";
	}
	else if(dia == 0 || dia == 6){
		ahora.innerHTML="Cerrado";
	}
	else{
		ahora.innerHTML="Abierto";
	}
})

/*API DE GOOGLE*/
var map;
function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: -33.4351553, lng: -70.6192451},
		zoom: 17
	});  
	var marker = new google.maps.Marker({
		position: {lat: -33.4351553, lng: -70.6192451},
		map: map,
		title: 'Aquí nos ubicamos'
		
	});
}


/*API FERIADOS CHILE*/
$(document).ready(function(){
	$.ajax({
		url: 'https://www.feriadosapp.com/api/holidays.json',
		method: 'GET'
	}).then(function(data){
		for(i=0; i<data.data.length; i++){
			$('#tabla').append('<tr> <td>' + data.data[i].date + '</td><td>' + data.data[i].title + '</td><td>' + data.data[i].extra + '</td></tr>' );
		}
	});
})


/*1- PLUGIN TOP*/
$(document).ready(function(){
	scroller.init();
})


/*2-PLUGIN TEXTO*/
$(document).ready(function(){

	$("#js-rotating").Morphext({
	    // The [in] animation type. Refer to Animate.css for a list of available animations.
	    animation: "flipInY",
	    // An array of phrases to rotate are created based on this separator. Change it if you wish to separate the phrases differently (e.g. So Simple | Very Doge | Much Wow | Such Cool).
	    separator: ",",
	    // The delay between the changing of each phrase in milliseconds.
	    speed: 2000,
	    complete: function () {
	        // Called after the entrance animation is executed.
	    }
	});
})


/*3-PLUGIN BACKGROUNDS*/
$(document).ready(function(){
	$(".parallax").simpleParallax();
})


/*4- PLUGIN GALERIA NIVO*/
$(document).ready(function(){
	$('.nivo-slider').nivoSlider({
				effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
				slices: 15,                     // For slice animations
				boxCols: 8,                     // For box animations
				boxRows: 4,                     // For box animations
				animSpeed: 500,                 // Slide transition speed
				pauseTime: 4000,                // How long each slide will show
				startSlide: 0,                  // Set starting Slide (0 index)
				directionNav: true,             // Next & Prev navigation
				controlNav: false,               // 1,2,3... navigation
				controlNavThumbs: false,        // Use thumbnails for Control Nav
				pauseOnHover: true,             // Stop animation while hovering
				manualAdvance: false,           // Force manual transitions
				prevText: 'Prev',               // Prev directionNav text
				nextText: 'Next',               // Next directionNav text
				randomStart: false,             // Start on a random slide
				beforeChange: function(){},     // Triggers before a slide transition
				afterChange: function(){},      // Triggers after a slide transition
				slideshowEnd: function(){},     // Triggers after all slides have been shown
				lastSlide: function(){},        // Triggers when last slide is shown
				afterLoad: function(){}         // Triggers when slider has loaded
			});				
});		

$(document).ready(function(){
	
})
