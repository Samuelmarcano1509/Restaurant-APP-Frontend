function dataAdmin(){
    if(localStorage.getItem('token'))
    {
        userSesion();
    }
    
}



const userSesion = async() => {
    try{
        const response= await fetch('http://127.0.0.1:8000/api/user/data', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok){
            const datas = await response.json();
            console.log(datas)
           const styles = "margin-top: 9px;"
           document.getElementById('user').innerHTML =`<b>${datas.data.username}</b>`
           
        }
    }catch (error){
        localStorage.removeItem('token')
        Swal.fire({
            title: 'Error!',
            type: 'error',
            text: error,
            confirmButtonText: 'Aceptar'
        })
    }
}