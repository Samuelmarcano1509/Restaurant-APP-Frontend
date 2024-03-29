function personsNormal(){
if(localStorage.getItem('token')){
    getPerson();
}else{
    Swal.fire({
        title: 'No autorizado',
        type: 'warning',
        confirmbuttontext: 'Aceptar'
    }).then(()=>{
        window.location.href = "../../views/Auth/login.php"
    })
}

}
const getPerson = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/profile/data', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            console.log(datas)
            document.getElementById('nombre').value=datas.data.first_name
            document.getElementById('apellido').value=datas.data.last_name
            document.getElementById('cedula').value=datas.data.identification_value
            document.getElementById('user').value=datas.data.username
            document.getElementById('telefono').value=datas.data.phone
            document.getElementById('address').value=datas.data.address
            document.getElementById('municipio').value=datas.data.municipality
            document.getElementById('referencia').value=datas.data.reference_point
            document.getElementById('fecha').value=datas.data.birth_date
            document.getElementById('dropdownMenuButton2').value=datas.data.membership
            document.getElementById('email').value=datas.data.email
            document.getElementById('send').name =  datas.data.id
            document.getElementById('dropdownMenuButton').value = datas.data.gender
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

function sendPersonEdit(){
    personEdit()
}
const personEdit = async()=> {
    try{
      const inf ={
         first_name:            document.getElementById('nombre').value,
         last_name:             document.getElementById('apellido').value,
         identification_value:  document.getElementById('cedula').value,
         username:              document.getElementById('user').value,
         phone_number:          document.getElementById('telefono').value,
         address:               document.getElementById('address').value,
         birth_date:            document.getElementById('fecha').value,
         pass:                  document.getElementById('pass1').value,
         email:                 document.getElementById('email').value,
         municipality:          document.getElementById('municipio').value,
         reference_point:       document.getElementById('referencia').value,
         gender:                document.getElementById('dropdownMenuButton').value
        }
        console.log(inf)
        const response = await fetch('http://127.0.0.1:8000/api/person/edit/'+document.getElementById('send').name, {
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token'),
            },
            body: JSON.stringify(inf),
        })
        if (response.ok) {
            Swal.fire({
                title: '¡Registros Actualizados!',
                text: 'Los Registros Han Sido Actualizados Exitosamente',
                type: 'success',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });
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

function detectarCambio(){
    document.getElementById('send').disabled=false
}

document.getElementById('nombre').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()

})
document.getElementById('apellido').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('cedula').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('fecha').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('dropdownMenuButton').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('email').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('telefono').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('user').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('pass1').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('pass2').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('address').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('municipio').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})
document.getElementById('referencia').addEventListener('change', function(e){
    detectarCambio();
    checkPasswords()
})


function checkPasswords() {
    const pass1 = document.getElementById('pass1');
    const pass2 = document.getElementById('pass2');
    

    if (pass1.value === pass2.value) {
      pass1.classList.remove('pass-incorrecta');
      pass2.classList.remove('pass-incorrecta');
      pass1.classList.add('pass');
      pass2.classList.add('pass');
      document.getElementById('send').disabled = false;
    } else {
      pass1.classList.remove('pass');
      pass2.classList.remove('pass');
      pass1.classList.add('pass-incorrecta');
      pass2.classList.add('pass-incorrecta');
      document.getElementById('send').disabled = true; 
    }
  }