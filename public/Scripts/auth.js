function register(){
    authRegister();
}    
function login(){
    authLogin();
}

const authRegister = async()=> {
        var formulario = document.getElementById('formulario')
                try{
                    var data = new FormData(formulario);
                    const inf ={
                        first_name: data.get('nombre'),
                        last_name:  data.get('apellido'),
                        identification_value: data.get('cedula'),
                        birth_date: data.get('fecha'),
                        email: data.get('correo'),
                        phone_number: data.get('telefono'),
                        username: data.get('usuario'),
                        password: data.get('contraseña'),
                    }
                    const response = await fetch('http://127.0.0.1:8000/api/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(inf),
                        })
                        console.log(response)
                        if (response.ok) {
                            const data = await response.json();
                            localStorage.setItem('token', data.token);
                            console.log(data)
                            const statusCode = response.status;
                            console.log(statusCode);
                        }
                } catch (error){ 
                    console.log(error)
                
        }
   }

const authLogin = async()=> {
    var formulario = document.getElementById('formulario')
                try{
                    var data = new FormData(formulario);
                    const inf ={
                        username: data.get('usuario'),
                        password: data.get('contraseña'),
                    }
                    const response = await fetch('http://127.0.0.1:8000/api/login', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(inf),
                        })
                        if (response.ok) {
                            const data = await response.json();
                            localStorage.setItem('token', data.token);
                            console.log(data)
                            const statusCode = response.status;
                            console.log(statusCode);
                            location.href = "/NeoRestaurante/views/profile";
                        }
                } catch (error){ 
                    console.log(error)
                    console.log('error')
        }
}

function authValidation (){
    if(localStorage.getItem('token')){
       
    }else{
        location.href = "/NeoRestaurante/views/Auth/login";
    }
}

   function closeSesion (){
    authClose();
   }
   
   
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
                            location.href = "/NeoRestaurante/index";
                        }
                } catch (error){ 
                    console.log(error)
        }
}






