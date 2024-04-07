function getOrders(){
    if(localStorage.getItem('token')){
        orderList()
    }else {
        Swal.fire({
            title: 'Ha expirado la sesión',
            type: 'warning',
            confirmButtonText: 'Entendido',
        }).then(() => {
            window.location.href = '/NeoRestaurante/views/Auth/login.php';
        });
    }
}
const orderList = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/order/list', {
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
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    orderId=datas.data[i].id
                    body += `<tr id="${orderId}">
                        <td><strong>${datas.data[i].names}</strong></td>
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
                            <button class="dropdown-item btn btn-outline-secondary" id="edit" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalCenter">
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/file-pen.svg" style="width: 15px; heigth: 15px;" alt=""> Editar</button>
                              <button class="dropdown-item btn btn-outline-secondary"  id="see details" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0);" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/circle-info.svg" style="width: 15px; heigth: 15px;" alt="" > Ver detalles  </button>
                            </div>
                          </div>
                        </td>
                    </tr>`;
                }
            }
            document.getElementById('inf-body').innerHTML=body
            var idioma={
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad",
                    "collection": "Colección",
                    "colvisRestore": "Restaurar visibilidad",
                    "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                    "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles",
                        "_": "Copiadas %ds fila al portapapeles"
                    },
                    "copyTitle": "Copiar al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "_": "Mostrar %d filas"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir",
                    "renameState": "Cambiar nombre",
                    "updateState": "Actualizar",
                    "createState": "Crear Estado",
                    "removeAllStates": "Remover Estados",
                    "removeState": "Remover",
                    "savedStates": "Estados Guardados",
                    "stateRestore": "Estado %d"
                },
                "autoFill": {
                    "cancel": "Cancelar",
                    "fill": "Rellene todas las celdas con <i>%d<\/i>",
                    "fillHorizontal": "Rellenar celdas horizontalmente",
                    "fillVertical": "Rellenar celdas verticalmente"
                },
                "decimal": ",",
                "searchBuilder": {
                    "add": "Añadir condición",
                    "button": {
                        "0": "Constructor de búsqueda",
                        "_": "Constructor de búsqueda (%d)"
                    },
                    "clearAll": "Borrar todo",
                    "condition": "Condición",
                    "conditions": {
                        "date": {
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vacío",
                            "equals": "Igual a",
                            "notBetween": "No entre",
                            "not": "Diferente de",
                            "after": "Después",
                            "notEmpty": "No Vacío"
                        },
                        "number": {
                            "between": "Entre",
                            "equals": "Igual a",
                            "gt": "Mayor a",
                            "gte": "Mayor o igual a",
                            "lt": "Menor que",
                            "lte": "Menor o igual que",
                            "notBetween": "No entre",
                            "notEmpty": "No vacío",
                            "not": "Diferente de",
                            "empty": "Vacío"
                        },
                        "string": {
                            "contains": "Contiene",
                            "empty": "Vacío",
                            "endsWith": "Termina en",
                            "equals": "Igual a",
                            "startsWith": "Empieza con",
                            "not": "Diferente de",
                            "notContains": "No Contiene",
                            "notStartsWith": "No empieza con",
                            "notEndsWith": "No termina con",
                            "notEmpty": "No Vacío"
                        },
                        "array": {
                            "not": "Diferente de",
                            "equals": "Igual",
                            "empty": "Vacío",
                            "contains": "Contiene",
                            "notEmpty": "No Vacío",
                            "without": "Sin"
                        }
                    },
                    "data": "Data",
                    "deleteTitle": "Eliminar regla de filtrado",
                    "leftTitle": "Criterios anulados",
                    "logicAnd": "Y",
                    "logicOr": "O",
                    "rightTitle": "Criterios de sangría",
                    "title": {
                        "0": "Constructor de búsqueda",
                        "_": "Constructor de búsqueda (%d)"
                    },
                    "value": "Valor"
                },
                "searchPanes": {
                    "clearMessage": "Borrar todo",
                    "collapse": {
                        "0": "Paneles de búsqueda",
                        "_": "Paneles de búsqueda (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Sin paneles de búsqueda",
                    "loadMessage": "Cargando paneles de búsqueda",
                    "title": "Filtros Activos - %d",
                    "showMessage": "Mostrar Todo",
                    "collapseMessage": "Colapsar Todo"
                },
                "select": {
                    "cells": {
                        "1": "1 celda seleccionada",
                        "_": "%d celdas seleccionadas"
                    },
                    "columns": {
                        "1": "1 columna seleccionada",
                        "_": "%d columnas seleccionadas"
                    },
                    "rows": {
                        "1": "1 fila seleccionada",
                        "_": "%d filas seleccionadas"
                    }
                },
                "thousands": ".",
                "datetime": {
                    "previous": "Anterior",
                    "hours": "Horas",
                    "minutes": "Minutos",
                    "seconds": "Segundos",
                    "unknown": "-",
                    "amPm": [
                        "AM",
                        "PM"
                    ],
                    "months": {
                        "0": "Enero",
                        "1": "Febrero",
                        "10": "Noviembre",
                        "11": "Diciembre",
                        "2": "Marzo",
                        "3": "Abril",
                        "4": "Mayo",
                        "5": "Junio",
                        "6": "Julio",
                        "7": "Agosto",
                        "8": "Septiembre",
                        "9": "Octubre"
                    },
                    "weekdays": {
                        "0": "Dom",
                        "1": "Lun",
                        "2": "Mar",
                        "4": "Jue",
                        "5": "Vie",
                        "3": "Mié",
                        "6": "Sáb"
                    },
                    "next": "Próximo"
                },
                "editor": {
                    "close": "Cerrar",
                    "create": {
                        "button": "Nuevo",
                        "title": "Crear Nuevo Registro",
                        "submit": "Crear"
                    },
                    "edit": {
                        "button": "Editar",
                        "title": "Editar Registro",
                        "submit": "Actualizar"
                    },
                    "remove": {
                        "button": "Eliminar",
                        "title": "Eliminar Registro",
                        "submit": "Eliminar",
                        "confirm": {
                            "_": "¿Está seguro de que desea eliminar %d filas?",
                            "1": "¿Está seguro de que desea eliminar 1 fila?"
                        }
                    },
                    "error": {
                        "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                    },
                    "multi": {
                        "title": "Múltiples Valores",
                        "restore": "Deshacer Cambios",
                        "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo.",
                        "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, haga clic o pulse aquí, de lo contrario conservarán sus valores individuales."
                    }
                },
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "stateRestore": {
                    "creationModal": {
                        "button": "Crear",
                        "name": "Nombre:",
                        "order": "Clasificación",
                        "paging": "Paginación",
                        "select": "Seleccionar",
                        "columns": {
                            "search": "Búsqueda de Columna",
                            "visible": "Visibilidad de Columna"
                        },
                        "title": "Crear Nuevo Estado",
                        "toggleLabel": "Incluir:",
                        "scroller": "Posición de desplazamiento",
                        "search": "Búsqueda",
                        "searchBuilder": "Búsqueda avanzada"
                    },
                    "removeJoiner": "y",
                    "removeSubmit": "Eliminar",
                    "renameButton": "Cambiar Nombre",
                    "duplicateError": "Ya existe un Estado con este nombre.",
                    "emptyStates": "No hay Estados guardados",
                    "removeTitle": "Remover Estado",
                    "renameTitle": "Cambiar Nombre Estado",
                    "emptyError": "El nombre no puede estar vacío.",
                    "removeConfirm": "¿Seguro que quiere eliminar %s?",
                    "removeError": "Error al eliminar el Estado",
                    "renameLabel": "Nuevo nombre para %s:"
                },
                "infoThousands": "."
            }
            $('#table_orders').DataTable({
                language:idioma
            });
        }else if (response.status === 401) {
            Swal.fire({
                title: 'No autorizado',
                type: 'warning',
                confirmButtonText: 'Entendido'
            }).then(() => {
                window.location.href = '/NeoRestaurante/';
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
    } catch (error){
        Swal.fire({
            title: 'Error!',
            type: 'error',
            text: error,
            confirmButtonText: 'Aceptar'
        })
    }
}
function userList()
{
    getUserList()
}
const getUserList = async(elementId)=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/person/list', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            let option = ''
            let index =0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    index++
                    option += `<option value="${datas.data[i].id}">${index +'-'+ datas.data[i].names+' '+datas.data[i].identification_value}</option>`
                }
            }
            const response2 = await fetch('http://127.0.0.1:8000/api/table/list', {
                method: 'POST'
            })
            document.getElementById('dropdownMenuButtonUsers').innerHTML=option
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
function ordersUser()
{
    sendOrderUser();
}
const sendOrderUser = async()=> {
    try{
        const inf ={
            hour: document.getElementById('hora5').value,
            date:  document.getElementById('fecha12').value,
            person: document.getElementById('dropdownMenuButtonUsers').value
        }
        const response = await fetch('http://127.0.0.1:8000/api/order/create', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token')
            },
            body: JSON.stringify(inf),
        })
        const datas = await response.json();
        if (response.status===400){
            Swal.fire({
                title: '¡Error!',
                text: datas.title,
                type: 'warning',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });
        }
        if (response.status===201) {
            Swal.fire({
                title: '¡Registro Realizado!',
                text: datas.title,
                type: 'success',
                confirmButtonText: 'Entendido'
            }).then(() => {
                location.reload();
            });

        }
    } catch (error){
        Swal.fire({
            title: '¡Ha Ocurrido un Error!',
            text: error,
            type: 'error',
            confirmButtonText: 'Entendido'
        }).then(() => {
            location.reload();
        });
    }
}
const tableBody = document.getElementById("inf-body");
tableBody.addEventListener("click", (event) => {
    const target = event.target;
    const row = target.closest("tr");
    const elementId = row.getAttribute("id");
    console.log(elementId)
    if (target.getAttribute('id')==='edit'){
        userList2(elementId)
    }else if(target.getAttribute('id')==='see details'){
        orderDetails(elementId)
    }
});
const tableBodys = document.getElementById("inf-body2");
tableBodys.addEventListener("click", (event) => {
    const target = event.target;
    const row = target.closest("tr");
    const elementId = row.getAttribute("id");
    console.log(elementId)
    if (target.getAttribute('id')==='delete'){
        document.getElementById('borrar').name=elementId
    }
});
function sendProductOrderDelete(){
    productOrderDelete()
}
const productOrderDelete = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/order/product/delete/'+document.getElementById('borrar').name, {
            method: 'POST',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            Swal.fire({
                title: '¡Producto Eliminado!',
                text: 'El producto ha sido eliminado satisfactoriamente.',
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
const userList2 = async(elementId)=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/person/list', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            let option = ''
            let index =0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    index++
                    option += `<option value="${datas.data[i].id}">${index +'-'+ datas.data[i].names+' '+datas.data[i].identification_value}</option>`
                }
            }
            const response2 = await fetch('http://127.0.0.1:8000/api/table/list', {
                method: 'POST'
            })
            document.getElementById('dropdownMenuButtonUsers2').innerHTML=option
            const response3 = await fetch('http://127.0.0.1:8000/api/order/'+elementId, {
                method: 'GET',
                headers:{
                    "Authorization": "Bearer " + localStorage.getItem('token')
                }
            })
            if (response3.ok){
                const data3 = await response3.json();
                console.log(data3.data)
                document.getElementById('dropdownMenuButtonUsers2').value=data3.data.person
                document.getElementById('dropdownMenuButtonStatus').value=data3.data.status
                document.getElementById('fecha').value=data3.data.date
                document.getElementById('hora').value=data3.data.hour
                document.getElementById('send').name=elementId
            }
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
function editOrder(){
    sendEditOrder()
}
const sendEditOrder = async()=> {
    try{
        const inf ={
            person:            document.getElementById('dropdownMenuButtonUsers2').value,
            date:              document.getElementById('fecha').value,
            hour:              document.getElementById('hora').value,
            status:            document.getElementById('dropdownMenuButtonStatus').value,
        }
        console.log(inf)
        const response = await fetch('http://127.0.0.1:8000/api/edit/order/'+document.getElementById('send').name, {
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token'),
            },
            body: JSON.stringify(inf),
        })
        if (response.ok) {
            const data = await response.json();
            if (response.status===400){
                Swal.fire({
                    title: '¡Ha Ocurrido un Error!',
                    text: data.title,
                    type: 'warning',
                    confirmButtonText: 'Entendido'
                }).then(() => {
                    location.reload();
                });
            }else if (response.status===200){
                Swal.fire({
                    title: '¡Orden Actualizada!',
                    text: data.title,
                    type: 'success',
                    confirmButtonText: 'Entendido'
                }).then(() => {
                    location.reload();
                });
            }
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
                        <span class="badge bg-label-primary me-1">
                            ${datas.data[i].quantity}
                        </span>
                        </td>
                        <td>${amount.toFixed(2)}</td>
                        <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/ellipsis-vertical.svg" alt="" style="width: 20px; height:20px;">
                            </button>
                            <div class="dropdown-menu">
                            <button class="dropdown-item btn btn-outline-secondary"  id="delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" href="javascript:void(0);" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/trash.svg" style="width: 15px; heigth: 15px;" alt="" > Eliminar </button>
                            </div>
                          </div>
                        </td>
                    </tr>`;
                }
            }
            document.getElementById('inf-body2').innerHTML=body
            var idioma={
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                },
                "buttons": {
                    "copy": "Copiar",
                    "colvis": "Visibilidad",
                    "collection": "Colección",
                    "colvisRestore": "Restaurar visibilidad",
                    "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                    "copySuccess": {
                        "1": "Copiada 1 fila al portapapeles",
                        "_": "Copiadas %ds fila al portapapeles"
                    },
                    "copyTitle": "Copiar al portapapeles",
                    "csv": "CSV",
                    "excel": "Excel",
                    "pageLength": {
                        "-1": "Mostrar todas las filas",
                        "_": "Mostrar %d filas"
                    },
                    "pdf": "PDF",
                    "print": "Imprimir",
                    "renameState": "Cambiar nombre",
                    "updateState": "Actualizar",
                    "createState": "Crear Estado",
                    "removeAllStates": "Remover Estados",
                    "removeState": "Remover",
                    "savedStates": "Estados Guardados",
                    "stateRestore": "Estado %d"
                },
                "autoFill": {
                    "cancel": "Cancelar",
                    "fill": "Rellene todas las celdas con <i>%d<\/i>",
                    "fillHorizontal": "Rellenar celdas horizontalmente",
                    "fillVertical": "Rellenar celdas verticalmente"
                },
                "decimal": ",",
                "searchBuilder": {
                    "add": "Añadir condición",
                    "button": {
                        "0": "Constructor de búsqueda",
                        "_": "Constructor de búsqueda (%d)"
                    },
                    "clearAll": "Borrar todo",
                    "condition": "Condición",
                    "conditions": {
                        "date": {
                            "before": "Antes",
                            "between": "Entre",
                            "empty": "Vacío",
                            "equals": "Igual a",
                            "notBetween": "No entre",
                            "not": "Diferente de",
                            "after": "Después",
                            "notEmpty": "No Vacío"
                        },
                        "number": {
                            "between": "Entre",
                            "equals": "Igual a",
                            "gt": "Mayor a",
                            "gte": "Mayor o igual a",
                            "lt": "Menor que",
                            "lte": "Menor o igual que",
                            "notBetween": "No entre",
                            "notEmpty": "No vacío",
                            "not": "Diferente de",
                            "empty": "Vacío"
                        },
                        "string": {
                            "contains": "Contiene",
                            "empty": "Vacío",
                            "endsWith": "Termina en",
                            "equals": "Igual a",
                            "startsWith": "Empieza con",
                            "not": "Diferente de",
                            "notContains": "No Contiene",
                            "notStartsWith": "No empieza con",
                            "notEndsWith": "No termina con",
                            "notEmpty": "No Vacío"
                        },
                        "array": {
                            "not": "Diferente de",
                            "equals": "Igual",
                            "empty": "Vacío",
                            "contains": "Contiene",
                            "notEmpty": "No Vacío",
                            "without": "Sin"
                        }
                    },
                    "data": "Data",
                    "deleteTitle": "Eliminar regla de filtrado",
                    "leftTitle": "Criterios anulados",
                    "logicAnd": "Y",
                    "logicOr": "O",
                    "rightTitle": "Criterios de sangría",
                    "title": {
                        "0": "Constructor de búsqueda",
                        "_": "Constructor de búsqueda (%d)"
                    },
                    "value": "Valor"
                },
                "searchPanes": {
                    "clearMessage": "Borrar todo",
                    "collapse": {
                        "0": "Paneles de búsqueda",
                        "_": "Paneles de búsqueda (%d)"
                    },
                    "count": "{total}",
                    "countFiltered": "{shown} ({total})",
                    "emptyPanes": "Sin paneles de búsqueda",
                    "loadMessage": "Cargando paneles de búsqueda",
                    "title": "Filtros Activos - %d",
                    "showMessage": "Mostrar Todo",
                    "collapseMessage": "Colapsar Todo"
                },
                "select": {
                    "cells": {
                        "1": "1 celda seleccionada",
                        "_": "%d celdas seleccionadas"
                    },
                    "columns": {
                        "1": "1 columna seleccionada",
                        "_": "%d columnas seleccionadas"
                    },
                    "rows": {
                        "1": "1 fila seleccionada",
                        "_": "%d filas seleccionadas"
                    }
                },
                "thousands": ".",
                "datetime": {
                    "previous": "Anterior",
                    "hours": "Horas",
                    "minutes": "Minutos",
                    "seconds": "Segundos",
                    "unknown": "-",
                    "amPm": [
                        "AM",
                        "PM"
                    ],
                    "months": {
                        "0": "Enero",
                        "1": "Febrero",
                        "10": "Noviembre",
                        "11": "Diciembre",
                        "2": "Marzo",
                        "3": "Abril",
                        "4": "Mayo",
                        "5": "Junio",
                        "6": "Julio",
                        "7": "Agosto",
                        "8": "Septiembre",
                        "9": "Octubre"
                    },
                    "weekdays": {
                        "0": "Dom",
                        "1": "Lun",
                        "2": "Mar",
                        "4": "Jue",
                        "5": "Vie",
                        "3": "Mié",
                        "6": "Sáb"
                    },
                    "next": "Próximo"
                },
                "editor": {
                    "close": "Cerrar",
                    "create": {
                        "button": "Nuevo",
                        "title": "Crear Nuevo Registro",
                        "submit": "Crear"
                    },
                    "edit": {
                        "button": "Editar",
                        "title": "Editar Registro",
                        "submit": "Actualizar"
                    },
                    "remove": {
                        "button": "Eliminar",
                        "title": "Eliminar Registro",
                        "submit": "Eliminar",
                        "confirm": {
                            "_": "¿Está seguro de que desea eliminar %d filas?",
                            "1": "¿Está seguro de que desea eliminar 1 fila?"
                        }
                    },
                    "error": {
                        "system": "Ha ocurrido un error en el sistema (<a target=\"\\\" rel=\"\\ nofollow\" href=\"\\\">Más información&lt;\\\/a&gt;).<\/a>"
                    },
                    "multi": {
                        "title": "Múltiples Valores",
                        "restore": "Deshacer Cambios",
                        "noMulti": "Este registro puede ser editado individualmente, pero no como parte de un grupo.",
                        "info": "Los elementos seleccionados contienen diferentes valores para este registro. Para editar y establecer todos los elementos de este registro con el mismo valor, haga clic o pulse aquí, de lo contrario conservarán sus valores individuales."
                    }
                },
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "stateRestore": {
                    "creationModal": {
                        "button": "Crear",
                        "name": "Nombre:",
                        "order": "Clasificación",
                        "paging": "Paginación",
                        "select": "Seleccionar",
                        "columns": {
                            "search": "Búsqueda de Columna",
                            "visible": "Visibilidad de Columna"
                        },
                        "title": "Crear Nuevo Estado",
                        "toggleLabel": "Incluir:",
                        "scroller": "Posición de desplazamiento",
                        "search": "Búsqueda",
                        "searchBuilder": "Búsqueda avanzada"
                    },
                    "removeJoiner": "y",
                    "removeSubmit": "Eliminar",
                    "renameButton": "Cambiar Nombre",
                    "duplicateError": "Ya existe un Estado con este nombre.",
                    "emptyStates": "No hay Estados guardados",
                    "removeTitle": "Remover Estado",
                    "renameTitle": "Cambiar Nombre Estado",
                    "emptyError": "El nombre no puede estar vacío.",
                    "removeConfirm": "¿Seguro que quiere eliminar %s?",
                    "removeError": "Error al eliminar el Estado",
                    "renameLabel": "Nuevo nombre para %s:"
                },
                "infoThousands": "."
            }
            $('#table_products').DataTable({
                language: idioma
            });
            document.getElementById('sendProduct').name=datas.order
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
function getProductList()
{
    productListOrder()
}
const productListOrder = async()=> {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/products/list', {
            method: 'GET',
            headers: {
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            console.log(datas)
            let option=''
            let index=0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]){
                    if (datas.data[i].status === 'Disponible'){
                        index++
                        option += `<option value="${datas.data[i].id}">${index +'-'+ datas.data[i].name+' '+datas.data[i].amount}</option>`
                    }
                }
            }
            document.getElementById('dropdownMenuButtonProducts').innerHTML=option
        }else if (response.status === 401) {
            Swal.fire({
                title: 'No autorizado',
                type: 'warning',
                confirmButtonText: 'Entendido'
            }).then(() => {
                window.location.href = '/NeoRestaurante/';
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
function sendProductOrder(){
    productOrder()
}
const productOrder = async()=> {
    try{
        const inf ={
            product:    document.getElementById('dropdownMenuButtonProducts').value,
            quantity:   document.getElementById('quantity').value,
        }
        const response = await fetch('http://127.0.0.1:8000/api/order/product/'+document.getElementById('sendProduct').name, {
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token'),
            },
            body: JSON.stringify(inf),
        })
        if (response.ok) {
            const data = await response.json();
            if (response.status===400){
                Swal.fire({
                    title: '¡Ha Ocurrido un Error!',
                    text: data.title,
                    type: 'warning',
                    confirmButtonText: 'Entendido'
                }).then(() => {
                    location.reload();
                });
            }else if (response.status===201){
                Swal.fire({
                    title: '¡Producto Añadido!',
                    text: data.title,
                    type: 'success',
                    confirmButtonText: 'Entendido'
                }).then(() => {
                    location.reload();
                });
            }
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