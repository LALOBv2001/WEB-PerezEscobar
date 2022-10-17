window.onload=function(){
const cont=document.querySelector(".contenedor");

cont.addEventListener("click",(e)=> {
    e.target.classList.toggle("cajaAmarilla")
} )
}

/*Cuando mi cdocumento este listo ejecuta esta funcion*/
$(document).ready(function(){
     /*Para oir el click en ese objeto contenedor*/
    $("#content").click(function(){console.log("Ha sido presionado el contenedor")})
})

 
