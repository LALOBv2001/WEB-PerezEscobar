document.getElementById('btnConsultar').addEventListener('click',async(e)=>{
    e.preventDefault()
    const form = new FormData(document.getElementById('formulario'))
    const res = await fetch('./Consulta.php',{
        method:'POST',
        body: form
    })
    let data= await res.json()
    
    document.getElementById('NombrePiloto').value = data.NombrePiloto
    document.getElementById('NombreCopiloto').value = data.NombreCopiloto
    document.getElementById('CapacidadPasajeros').value = data.CapacidadPasajeros
    document.getElementById('CapacidadGalonesCombustible').value = data.CapacidadGalonesCombustible
    document.getElementById('PaisDespegue').value = data.PaisDespegue
    document.getElementById('PaisAterrizaje').value = data.PaisAterrizaje
    document.getElementById('CostoBoleto').value = data.CostoBoleto
    document.getElementById('CapacidadEquipajePasajero').value = data.CapacidadEquipajePasajero
    document.getElementById('DuracionVueloHoras').value = data.DuracionVueloHoras
        
})