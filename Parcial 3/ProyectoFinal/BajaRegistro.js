
document.getElementById('btnEliminar').addEventListener('click',async ()=>{
    const form = new FormData(document.getElementById('formulario'))
    const res= await fetch('./BajaRegistro.php',{
        method:'POST',
        body: form
    })
   console.log('operacion realizada')
})