$(document).ready(function(){
    $(".w3-card-4").hover(function(){        
        var getid = $(this).attr('id');      
        $('#hb'+getid).css("display","block");
      
        $('.botoncompra').css("position","absolute");
        $('.botoncompra').css("opacity","0.9");
        
    });

    $(".w3-card-4").mouseleave(function(){
        var getid = $(this).attr('id');       
        $('#hb'+getid).css("display","none");
    });

   $("#precioproducto").click(function(){
    var idprod = $(this).val();
    console.log(idprod);
    $.ajax({
        dataType: "html",
        type:'POST',
        evalScripts:true,
        url: '../productos/extraerprecio/'+idprod,                
        success: function (data){
            $("#poner_precio").val(data);
        }
    });
   });  

   $(".botoncompra").click(function(){
    var getidprod = $(this).attr('id');
    console.log(getidprod);
    $.ajax({
        dataType:'html',
        type:'POST',
        evalScripts:true,
        url: '../../productos/agregar_carrito/'+getidprod,
        success: function(data){
            window.alert(data);
        }
    });
   });

  
  var suma=0; 
  $('.precio').each(function(){
      var num = parseInt($(this).val());
    if (!isNaN(num)) {
        suma += num;
    }
  });
    console.log();
   
   $("#monto_total_pedido").val(suma);


 

});