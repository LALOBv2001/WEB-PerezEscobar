window.onload = function(){
document.getElementById("btnAjax").addEventListener("click",pedirHeader);
document.getElementById("btnReset").addEventListener("click",iniciarHeader);

function pedirHeader()
{
    var solicitud=new XMLHttpRequest();

    solicitud.onreadystatechange=function(){
        if (solicitud.readyState==4 && solicitud.status==200)
        {document.getElementById("MyDiv").innerHTML=solicitud.responseText;
    }};
    
    solicitud.open("GET","Prueba.txt",true);
    solicitud.send();
}
function iniciarHeader(){
    document.getElementById("MyDiv").innerHTML="<h2>Este es un header nivel 2</h2>";
}

}