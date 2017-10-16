function mesActual(){
    var obj = document.getElementById('calendario');
    var FActual = new Date();
    var MActual = parseInt(FActual.getMonth()) + 1;
    switch (MActual){
        case 1:
            obj.src = 'Meses/enero.html';
            break;
        case 2:
            obj.src = 'Meses/febrero.html';
            break;
        case 3:
            obj.src = 'Meses/marzo.html';
            break;
        case 4:
            obj.src = 'Meses/abril.html';
            break;
        case 5:
            obj.src = 'Meses/mayo.html';
            break;
        case 6:
            obj.src = 'Meses/junio.html';
            break;
        case 7:
            obj.src = 'Meses/julio.html';
            break;
        case 8:
            obj.src = 'Meses/agosto.html';
            break;
        case 9:
            obj.src = 'Meses/septiembre.html';
            break;
        case 10:
            obj.src = 'Meses/octubre.html';
            break;
        case 11:
            obj.src = 'Meses/noviembre.html';
            break;
        case 12:
            obj.src = 'Meses/diciembre.html';
            break;
    }
}

calendario.onload = mesActual();