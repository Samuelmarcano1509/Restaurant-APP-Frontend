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
 

