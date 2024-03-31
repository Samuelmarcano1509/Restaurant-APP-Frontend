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
                                window.location.href = '/NeoRestaurante/';
                            })
                            localStorage.setItem('token', datas.token);
                            const statusCode = response.status;
                        }
                } catch (error){
                    document.getElementById('response').textContent='Ha ocurrido un error inesperado'
                    // document.getElementById('spinner').style.display='none'
                    Swal.fire({
                        title: 'Error!',
                        type: 'error',
                        text: error,
                        confirmButtonText: 'Aceptar'
                    })
    
                
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
                                window.location.href = '/NeoRestaurante/';
                            })
                            localStorage.setItem('token', datas.token);
                            const statusCode = response.status;
                        }
                } catch (error){ 
                    document.getElementById('response').textContent='Ha ocurrido un error'
                    Swal.fire({
                        title: 'Error!',
                        type: 'error',
                        text: error,
                        confirmButtonText: 'Aceptar'
                    })
                   
        }
}
  
   
  

function userData(){
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
            document.getElementById('titleusers').removeAttribute('href');
            const datas = await response.json();
            console.log(datas)
            let trukito=''
           if(datas.data.rol ===1){
            trukito = `<div class="dropdown" id="dropdown">
            <span class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                ${datas.data.username}
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="/NeoRestaurante/views/statistics.php">Panel</a></li>
              <li><a class="dropdown-item" onclick="closeSesion()">Cerrar sesión</a></li>
            </ul>
          </div>`
           }  else{
            trukito = `<div class="dropdown" id="dropdown">
            <span class=" dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                ${datas.data.username}
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="/NeoRestaurante/views/user-view.php">Perfil</a></li>
              <li><a class="dropdown-item" onclick="closeSesion()">Cerrar sesión</a></li>
            </ul>
          </div>`
           }
           const styles = "margin-top: 9px;"
           document.getElementById('item-user').innerHTML = trukito;
           document.getElementById('dropdown').setAttribute("style", styles );
           
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

function closeSesion(){
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