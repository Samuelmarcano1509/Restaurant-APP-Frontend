 if(localStorage.getItem('token')){
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

 

