function getUser (){
    if(localStorage.getItem('token')){
        userData()
    }
}
const userData = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/user/data', {
            method: 'POST',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
            })
            if (response.ok) {
                const datas = await response.json();
                document.getElementById('titleusers').textContent=datas.username
                localStorage.removeItem('token');
                location.href = "/NeoRestaurante/";
            }
    } catch (error){ 
        console.log(error)
}
}