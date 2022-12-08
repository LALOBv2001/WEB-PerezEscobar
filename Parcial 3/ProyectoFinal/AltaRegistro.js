document.getElementById('btnGetReg').addEventListener('click',async ()=>{
    const form= new FormData(document.getElementById('Formulario'))
    //console.log(form.get('Nombre-Emp'))
     const res=await fetch('./AltaRegistro.php',{
        method:'POST',
        body:form,
        
    })

})