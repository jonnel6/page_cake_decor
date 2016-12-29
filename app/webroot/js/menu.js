$(document).ready(main);
var contador = 1;
function main() {
    $(".menu_bar").click(function(){
        //$('nav').toggle();
        
        if(contador == 1){
            $('nav #main-nav').animate({
                left: '0'
            });
            contador = 0;
        } else {
            $('nav #main-nav').animate({
                left: '-100%'
            });
            contador=1;
        }
    });
                        
}

