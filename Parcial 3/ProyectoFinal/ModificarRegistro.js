
document.getElementById('btnActualizar').addEventListener('click',async()=>{
    const form= new FormData(document.getElementById('formulario'))
     const res = await fetch('./ModificarRegistro.php',{
        method:'POST',
        body:form
    })

})