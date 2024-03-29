

if(localStorage.getItem('token')){
    const boton = document.getElementById('paypal-button-container');

    paypal.Buttons({
        style:{
            shape: 'rect',
            label: 'pay',
            color: 'silver',
            labelColor: '#FFFFFF',
        },
        createOrder: function(data, actions){
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: document.getElementById('cerrar').name
                    }
                }]
            });
        },
        onApprove: function(data, actions){
            actions.order.capture().then(function (detalles){
                console.log(detalles)
                Swal.fire({
                    title:'Información',
                    type: 'success',
                    text: 'Pago realizado',
                    confirmButtonText: 'Aceptar' 
                });
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
 

