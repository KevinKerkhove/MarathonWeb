
$('#header').css('background-color', 'inherit');  // d'abord, on masque le deuxième menu de navigation, qui porte la classe "navigation2"
var hauteur = 1; // XXX, c'est le nombre de pixels à partir duquel on déclenche le tout
$(function(){
    $(window).scroll(function () {//Au scroll dans la fenetre on déclenche la fonction
        if ($(this).scrollTop() > hauteur) { //si on a défile de plus de XXX (variable "hauteur) pixels du haut vers le bas
            $('#header').css('background-color', '#0D0E1F'); // On masque le 1
        } else {
            $('#header').css('background-color', 'inherit'); // "et vice et versa" (© Les inconnus, 1990 ^^)
        }
    });
});

