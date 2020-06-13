$('.addPanier').click(function()
{
    $('addPanier').click(function (event) {
        event.preventDefault();  
$.get($(this).attr('href'),{},function(data) {
 if(data.error){
  alert(data.message);
 }else{
    if(confirm(data.message + ' . Voulez vous consulter votre panier ?')){
        location.hreft ='panier.php';

    }else{
        
    }

 }
},'json');
return false;
});
})(jQuerry);