function reservationData(){
    const fechaActual = new Date();
    const fechaFormateada = new Date(fechaActual).toISOString().split('T')[0];
    updateTable(fechaFormateada);
}



const updateTable=async(date)=>{
    const inf={
        date: date
    }
    console.log(inf)
    const response2 = await fetch('http://127.0.0.1:8000/api/table/list', {
        method: 'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(inf)
    })
    if (response2.ok)
    {
        const data =  await response2.json();
        console.log(data)
        let options = ''
        for (let i=0; i< Object.keys(data.data).length;i++){
            if (data.data[i]) {
                options += `<option value="${data.data[i].id}">${data.data[i].table+' '+data.data[i].capacity}</option>`
            }
        }
        document.getElementById('dropdownMenuButton7').innerHTML=options
        document.getElementById('fecha20').value = data.date
    
    }
}

document.getElementById('fecha20').addEventListener('change',function (e) {
    document.getElementById('dropdownMenuButton7').innerHTML=''
    const date = document.getElementById('fecha20').value
    updateTable(date)
})


function createReservation()
{
    if(localStorage.getItem('token')){
        sendReservation();
    }
    else{
        Swal.fire({
            title: 'Informacion',
            type: 'info',
            text: 'Para realizar una reservacion, debes iniciar sesión',
            confirmButtonText: 'Aceptar'
        })
    }
}
const sendReservation = async()=> {
    try{
        const inf ={
            hour: document.getElementById('hora').value,
            date:  document.getElementById('fecha20').value,
            table:document.getElementById('dropdownMenuButton7').value,
        }
        const response = await fetch('http://127.0.0.1:8000/api/profile/reservation/create', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token')
            },
            body: JSON.stringify(inf),
        })
        const datas = await response.json();
        if (response.status===400){
            Swal.fire({
                title: '¡Error!',
                text: datas.title,
                type: 'warning',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });
        }
        if (response.status===201) {
            Swal.fire({
                title: '¡Reservación Realizada!',
                text: datas.title,
                type: 'success',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });

        }
    } catch (error){
        Swal.fire({
            title: '¡Ha Ocurrido un Error!',
            text: error,
            type: 'error',
            confirmButtonText: 'Entendido'
        }).then(() => {
            location.reload();
        });
    }
}