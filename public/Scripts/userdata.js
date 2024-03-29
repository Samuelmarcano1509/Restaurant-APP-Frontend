function userdata (){
    if(localStorage.getItem('token')){
        getUserdata();
    }
}
const getUserdata = async()=> {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/user/data', {
            method: 'GET',
            headers: {
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            const titleUser =document.getElementById('titleusers');
            titleUser.textContent= datas.data.username
            titleUser.href='';
        }
    } catch (error) {
        Swal.fire({
            title: 'Error!',
            type: 'error',
            text: error,
            confirmButtonText: 'Aceptar'
        })
    }
}