var myIndex = 0;
var myIndex2 =0;
carousel();
carousel2();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    x[myIndex-1].style.border = "1 px solid";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}

function carousel2() {
    var i;
    var x = document.getElementsByClassName("mySlides2");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex2++;
    if (myIndex2 > x.length) {myIndex2 = 1}
    x[myIndex2-1].style.display = "block";
    setTimeout(carousel2, 2000); // Change image every 2 seconds
}

	$(function() {
		$('.menu-item-3').click(function(){
			$('.menu-categorias').toggle();
		});
		
		$('.menu-item-3').hover(function(){	       
            $('.menu-categorias').appendTo(this);
			$('.menu-categorias').toggle();
		}, function(){
			$('.menu-categorias').hide();
		});
	});

