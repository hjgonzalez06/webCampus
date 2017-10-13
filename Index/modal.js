/*
	JavaScript Document
	CÓDIGO FUENTE DESARROLLADO POR FRANKLIN MORENO E HIRAM GONZÁLEZ
    CONTACTO: hiramjgonzalez98@gmail.com
    TODOS LOS DERECHOS RESERVADOS
*/

function abrirVentana(){
	var ventana = document.getElementById('ventanaModal');
	ventana.style.display = 'flex';
}

window.onload=abrirVentana();

function cerrarVentana(){
	var ventana = document.getElementById('ventanaModal');
	ventana.style.display = 'none';
}

contenido.onclick=cerrarVentana();