
function orderUser(){
    if(localStorage.getItem('token')){
        orderList();
    }else {
        Swal.fire({
            title: 'Por favor inicie sesion',
            icon: 'warning',
            confirmButtonText: 'Entendido',
        }).then(() => {
            window.location.href = '/NeoRestaurante/views/Auth/login.php';
        });
    }
    
}

const orderList = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/profile/order', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            console.log(datas)
            let body=''
            let orderId=0
            let invoiceId=0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    orderId=datas.data[i].id
                    invoiceId=datas.data[i].invoice
                    body += `<tr id="${orderId}" name="${invoiceId}">
                        <td><strong>${orderId}</strong></td>
                        <td>
                        <span class="badge bg-label-primary me-1">
                            ${datas.data[i].status}
                        </span>
                        </td>
                        <td>${datas.data[i].date}</td>
                        <td>${datas.data[i].amount}</td>
                        <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/ellipsis-vertical.svg" alt="" style="width: 20px; height:20px;">
                            </button>
                            <div class="dropdown-menu">
                            <button class="dropdown-item btn btn-outline-secondary" id="print" href="javascript:void(0);" data-bs-toggle="modal">
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/file-pen.svg" style="width: 15px; heigth: 15px;" alt=""> Imprimir Factura</button>
                              <button class="dropdown-item btn btn-outline-secondary"  id="see details" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0);" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/circle-info.svg" style="width: 15px; heigth: 15px;" alt="" > Ver detalles  </button>
                            </div>
                          </div>
                        </td>
                    </tr>`;
                }
            }
            document.getElementById('inf-body').innerHTML=body
            $('#table_orders').DataTable();
        }else if (response.status === 401) {
            Swal.fire({
                title: 'No autorizado',
                type: 'warning',
                confirmButtonText: 'Entendido'
            }).then(() => {
                window.location.href = '/NeoRestaurante/';
            });
        } else if (response.status === 500) {
            
            Swal.fire({
                title: 'Ha expirado la sesión',
                type: 'error',
                confirmButtonText: 'Ir a Login'
            }).then(() => {
                window.location.href = '/NeoRestaurante/views/Auth/login.php';
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
const tableBody = document.getElementById("inf-body");
tableBody.addEventListener("click", (event) => {
    const target = event.target;
    const row = target.closest("tr");
    const elementId = row.getAttribute("id");
    const invoiceId = row.getAttribute("name")
    if(target.getAttribute('id')==='see details'){
        orderDetails(elementId)
    }else if (target.getAttribute('id')==='print'){
        invoiceOrder(invoiceId,'Orden: '+elementId)
    }
});
const orderDetails = async(elementId)=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/order/details/'+elementId, {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            console.log(datas)
            let body=''
            let orderDetailId=0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    orderDetailId=datas.data[i].id
                    var amount =datas.data[i].amount
                    body += `<tr id="${orderDetailId}">
                        <td><strong>${datas.data[i].product}</strong></td>
                        <td>
                        <span >
                            ${datas.data[i].quantity}
                        </span>
                        </td>
                        <td>${amount.toFixed(2)}</td>
                    </tr>`;
                }
            }
            document.getElementById('inf-body2').innerHTML=body
            $('#table_products').DataTable();
            document.getElementById('totalProductos').textContent='Total Productos '+datas.totalProducts
            document.getElementById('totalPagar').textContent='Total a Pagar '  +datas.total
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
    } catch (error){
        Swal.fire({
            title: 'Ha ocurrido un error',
            text: error,
            type: 'warning',
            confirmButtonText: 'Entendido',
        }).then(() => {
            window.location.href = '/NeoRestaurante/views/Auth/login.php';
        });
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