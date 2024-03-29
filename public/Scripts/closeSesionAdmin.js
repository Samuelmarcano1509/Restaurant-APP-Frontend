function closeSesion(){
    authClose();
   }

document.getElementById('casocerrado').addEventListener("click", function(e){
e.preventDefault()
authClose();
});
const authClose = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/logout', {
            method: 'POST',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
            })
            if (response.ok) {
                localStorage.removeItem('token');
                location.href = "/NeoRestaurante/";
            }
    } catch (error){ 
        Swal.fire({
            title: 'Error!',
            type: 'error',
            text: error,
            confirmButtonText: 'Aceptar'
        })
}
}