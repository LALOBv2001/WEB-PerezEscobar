document.getElementById('btnConsultar').addEventListener('click',async(e)=>{//BOTON
    e.preventDefault()
    const form = new FormData(document.getElementById('formulario'))//FORMULARIO
    const results = await fetch('./Consulta.php',{
        method:'POST',
        body: form
    })
    // results.status==200?
    // swal('Viaje encontrado!','','success')
    // :
    // swal('No se encontró el viaje','','error')
    let data= await results.json()
    
        $("#NombrePiloto").val(data.NombrePiloto)
        $('#NombreCopiloto').val(data.NombreCopiloto)
        $('#CapacidadPasajeros').val(data.CapacidadPasajeros)
        $('#CapacidadGalonesCombustible').val(data.CapacidadGalonesCombustible)
        $('#PaisDespegue').val(data.PaisDespegue)
        $('#PaisAterrizaje').val(data.PaisAterrizaje)
        $('#CostoBoleto').val(data.CostoBoleto)
        $('#CapacidadEquipajePasajero').val(data.CapacidadEquipajePasajero)
        $('#DuracionVueloHoras').val(data.DuracionVueloHoras)
        
        $('#exampleModal').modal('hide')

})