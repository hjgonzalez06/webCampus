$(function(){

	/* Ocultar Opciones al hacer Scroll-down */

	var header = document.getElementById('Header');
	var headroom = new Headroom(header);
	headroom.init();

	/* Menú Responsive */

	//Cálculos Ancho de Página
	var ancho = $(window).width(),
		enlaces = $('#Enlaces'),
		btnMenu = $('#btn-Menu'),
		icono = $('#btn-Menu .icono');

	if (ancho < 900) {
		icono.addClass('fa-bars');
		enlaces.hide();
	}

	btnMenu.on('click', function(e){
		icono.toggleClass('fa-bars');
		enlaces.slideToggle();
		icono.toggleClass('fa-times');
	});

	$(window).on('resize', function(e){
		if($(this).width() > 900){
			enlaces.show();
			icono.addClass('fa-times');
			icono.removeClass('fa-bars')
		} else {
			enlaces.hide();
			icono.addClass('fa-bars');
			icono.removeClass('fa-times')
		}
	})

});