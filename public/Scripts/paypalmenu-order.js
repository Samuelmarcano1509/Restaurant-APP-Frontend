

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
                payShoppingCart()
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
const payShoppingCart = async()=> {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/profile/user/pay/shopping/cart', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            Swal.fire({
                title: 'Pedido Realizado',
                type: 'success',
                confirmButtonText: 'Entendido'
            }).then(()=>{
                invoiceOrder(datas.data,datas.person);
            });
        } else if (response.status === 500) {
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
const invoiceOrder = async(invoice,person)=> {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/invoices/pdf/'+invoice, {
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

 

