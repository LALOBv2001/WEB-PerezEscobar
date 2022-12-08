document.getElementById('btnGetReg').addEventListener('click',async ()=>{
    const form= new FormData(document.getElementById('formulario'))
    //console.log(form.get('Nombre-Emp'))
     const res=await fetch('./AltaRegistro.php',{
        method:'POST',
        body:form,
        
    })
    // res.status==200?
    // swal('Empleado añadido con éxito!','','success')
    // :
    // swal('No se pudo añadir el empleado','','error')
    // document.getElementById('formulario').reset()
})