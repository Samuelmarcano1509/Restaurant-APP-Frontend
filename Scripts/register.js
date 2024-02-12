const data=
    {
      username:'SamuelMarcano0',
      email:'smarcano.87640@unimar.edu.ve',
      password:'12345678',
      phone_number:'041418414840',
      identification_value:'307287640',
      first_name:'Samuel Eduardo',
      last_name:'Marcano Salazar',
      birth_date:'2004-09-15'
    };
promesa = fetch('http://127.0.0.1:8000/api/register',{
    method:'POST',
    headers:{
        'Content-Type':'application/json',
    },
    body:JSON.stringify(data)
});
promesa.then(response => {
    if (response.ok) {
        response.json().then(data => {
            localStorage.setItem('token', data.token);
            console.log('token:', data.token);
            console.log('mensage:', data.message);
            console.log('token_type:', data.token_type);
        });
    } else {
        console.error('Error:', response.statusText);
    }
})
    .catch(error => { 
        console.error('Error:', error);
    });
