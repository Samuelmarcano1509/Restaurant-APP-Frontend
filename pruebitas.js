const data=
    {
      user:'Juan Pérez',
      email:'juan.perez@unimar.edu.ve',
      mensage:'xd',
    };
promesa = fetch('http://127.0.0.1:8000/api/hola/test',{
    method:'POST',
    headers:{
        'Content-Type':'application/json',
    },
});
promesa.then(response => {
    if (response.ok) {
        response.json().then(data => {
            console.log('Nombre:', data.xd);
        });
    } else {
        console.error('Error:', response.statusText);
    }
})
    .catch(error => { 
        console.error('Error:', error);
    });
