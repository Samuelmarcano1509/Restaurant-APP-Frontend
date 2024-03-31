window.addEventListener('load', async function(){
    if (localStorage.getItem('token')) {
        dataValidation()
    }
})
 const payMembership = async()=> {
     try {
         const response = await fetch('http://127.0.0.1:8000/api/profile/membership/pay', {
             method: 'POST',
             headers: {
                 'Content-Type': 'application/json',
                 "Authorization": "Bearer " + localStorage.getItem('token')
             }
         })
         if (response.ok) {
             const datas = await response.json();
             Swal.fire({
                 title: 'Membresía Obtenida',
                 text:  '!Muchas Gracias Por tu Compra!',
                 type:  'success',
                 confirmButtonText: 'Entendido'
             }).then(()=>{
                 invoiceMembership(datas.data,datas.person);
             });
         }else if (response.status === 500) {
             localStorage.removeItem('token');
             Swal.fire({
                 title: 'Ha expirado la sesión',
                 type: 'error',
                 confirmButtonText: 'Ir a Login'
             }).then(() => {
                 window.location.href = '/NeoRestaurante/views/Auth/login.php';
             });
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
 const invoiceMembership = async(invoice,person)=> {
     try {
         const response = await fetch('http://127.0.0.1:8000/api/invoices/membership/pdf/'+invoice, {
             method: 'GET',
             headers: {
                 'Content-Type': 'application/json',
                 "Authorization": "Bearer " + localStorage.getItem('token')
             }
         })
         if (response.ok) {
             const datas = await response.blob();
             console.log(response)
             const objectURL = window.URL.createObjectURL(datas);
             const anchor = document.createElement('a');
             anchor.href = objectURL;
             anchor.download = person;
             anchor.click();
             location.reload()
         }else if (response.status === 500) {
             localStorage.removeItem('token');
             Swal.fire({
                 title: 'Ha expirado la sesión',
                 type: 'error',
                 confirmButtonText: 'Ir a Login'
             }).then(() => {
                 window.location.href = '/NeoRestaurante/views/Auth/login.php';
             });
         }
     } catch (error) {
         console.log(error)
     }
 }
 const dataValidation = async()=> {
     try {
         const response = await fetch('http://127.0.0.1:8000/api/user/data', {
             method: 'GET',
             headers: {
                 'Content-Type': 'application/json',
                 "Authorization": "Bearer " + localStorage.getItem('token')
             }
         })
         if (response.ok) {
             const datas = await response.json();
             if (datas.data.person_type_id===2){
                 document.getElementById('button').remove()
                 document.getElementById('info').textContent="Membresía Obtenida"
             }else{
                 document.getElementById('prueba').setAttribute('id','paypal-button-container')
                 document.getElementById('button').remove()
                 document.getElementById('info').remove()
                 const boton = document.getElementById('paypal-button-container');

                 paypal.Buttons({
                     style:{
                         shape: 'rect',
                         label: 'pay',
                         color: 'white',
                         labelColor: '#FFFFFF',
                     },
                     createOrder: function(data, actions){
                         return actions.order.create({
                             purchase_units: [{
                                 amount: {
                                     value: 49.99
                                 }
                             }]
                         });
                     },
                     onApprove: function(data, actions){
                         actions.order.capture().then(function (detalles){
                             payMembership();
                         });
                     },

                     onCancel: function(data){
                         console.log(data)
                         Swal.fire({
                             title:'Información',
                             type: 'info',
                             text: 'Pago cancelado',
                             confirmButtonText: 'Aceptar'
                         });
                     }
                 }).render(boton);
             }
         }else if (response.status === 500) {
             localStorage.removeItem('token');
             Swal.fire({
                 title: 'Ha expirado la sesión',
                 type: 'error',
                 confirmButtonText: 'Ir a Login'
             }).then(() => {
                 window.location.href = '/NeoRestaurante/views/Auth/login.php';
             });
         }
     } catch (error) {
         console.log(error)
     }
 }


