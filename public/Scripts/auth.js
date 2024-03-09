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
                        gender:data.get('genero'),
                    }
                    document.getElementById('spinner-hide').style.display='flex'
                    const response = await fetch('http://127.0.0.1:8000/api/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(inf),
                        })
                    const datas = await response.json();
                    if (response.status===400){
                        document.getElementById('spinner-hide').style.display='none'
                        document.getElementById('response').textContent=datas.title
                    }
                        if (response.status===201) {
                            document.getElementById('response').textContent=datas.title
                            document.getElementById('button-close').style.display='none'
                            document.getElementById('spinner-hide').style.display='none'
                            document.getElementById('redirect').textContent='continuar'
                            document.getElementById('redirect').addEventListener('click',() => {
                                window.location.href = '/NeoRestaurante/views/statistics.php';
                            })
                            localStorage.setItem('token', datas.token);
                            const statusCode = response.status;
                        }
                } catch (error){
                    document.getElementById('response').textContent='Ha ocurrido un error inesperado'
                    // document.getElementById('spinner').style.display='none'
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
                        const datas = await response.json();
                        if (response.status===404){
                        document.getElementById('spinner-hide').style.display='none'
                        document.getElementById('response').textContent=datas.title
                        }
                        if (response.status===200) {
                            document.getElementById('response').textContent=datas.title
                            document.getElementById('button-close').style.display='none'
                            document.getElementById('spinner-hide').style.display='none'
                            document.getElementById('redirect').textContent='continuar'
                            document.getElementById('redirect').addEventListener('click',() => {
                                window.location.href = '/NeoRestaurante/views/statistics.php';
                            })
                            localStorage.setItem('token', datas.token);
                            const statusCode = response.status;
                        }
                } catch (error){ 
                    document.getElementById('response').textContent='Ha ocurrido un error'
                    console.log(error)
                   
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
   document.getElementById('casocerrado').addEventListener("click", function(e){
    e.preventDefault()
    console.log('aqui')
   })
   
   
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
                    console.log(error)
        }
}






