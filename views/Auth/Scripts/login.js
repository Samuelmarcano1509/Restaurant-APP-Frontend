var formulario = document.getElementById('formulario')
formulario.addEventListener('submit', e=>{
var data = new FormData(formulario);
const inf ={
    username: data.get('usuario'),
    password: data.get('contraseña'),
};
promesa = fetch('http://127.0.0.1:8000/api/register',{
    method:'POST',
    headers:{
        'Content-Type':'application/json',
    },
    body:JSON.stringify(inf)
});
promesa.then(response => {
    if (response.ok) {
        response.json().then(data => {
            localStorage.setItem('token', data.token);
        });
    } else {
        console.error('Error:', response.statusText);
    }
})
    .catch(error => { 
        console.error('Error:', error);
    });
})