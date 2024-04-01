function getUsers(){
    if(localStorage.getItem('token')){
        userList()
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
function getReservations()
{
reservationsList()
}
const reservationsList = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/reservation/list', {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            let body=''
            let reservationId=0
            let classSpan
            console.log(datas.data)
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]) {
                    if (datas.data[i].status === 'Activa'){
                        classSpan='class="badge bg-label-success me-1"'
                    }else{
                        classSpan='class="badge bg-label-warning me-1"'
                    }
                    reservationId=datas.data[i].id
                    body += `<tr id="${reservationId}">
                        <td>
                            ${datas.data[i].names}
                        </td>
                        <td>
                            ${datas.data[i].table}
                        </td>
                        <td>
                        <span ${classSpan}>
                            ${datas.data[i].status}
                        </span>
                            
                        </td>
                        <td>
                            ${datas.data[i].date}
                        </td>
                        <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/ellipsis-vertical.svg" alt="" style="width: 20px; height:20px;">
                            </button>
                            <div class="dropdown-menu">
                            <button class="dropdown-item btn btn-outline-secondary" id="edit" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modalCenter" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/file-pen.svg" style="width: 15px; heigth: 15px;" alt="" > Editar</button>
                              <button class="dropdown-item btn btn-outline-secondary"  id="delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0);" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/trash.svg" style="width: 15px; heigth: 15px;" alt=""> Eliminar reservación</button>
                            </div>
                          </div>
                        </td>
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
            $('#table_reservation').DataTable({
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
const userList = async()=> {
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
            if (response2.ok)
            {
                const data = await response2.json();
                let options = ''
                for (let i=0; i< Object.keys(data.data).length;i++){
                    if (data.data[i]) {
                        options += `<option value="${data.data[i].id}">${data.data[i].table+' '+data.data[i].capacity}</option>`
                    }
                }
                document.getElementById('dropdownMenuButton4').innerHTML=options
            }
            document.getElementById('dropdownMenuButton3').innerHTML=option

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
function reservationTable()
{
    sendReservation();
}
const sendReservation = async()=> {
    try{
        const inf ={
            hour: document.getElementById('hora2').value,
            date:  document.getElementById('fecha3').value,
            table:document.getElementById('dropdownMenuButton4').value,
            user: document.getElementById('dropdownMenuButton3').value
        }
        const response = await fetch('http://127.0.0.1:8000/api/reservation/create', {
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
                title: '¡Reservación Realizada!',
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
document.getElementById('fecha3').addEventListener('change',function (e) {
    document.getElementById('dropdownMenuButton4').innerHTML=''
    const date = document.getElementById('fecha3').value
    updateTable(date,4)
})
document.getElementById('fecha4').addEventListener('change',function (e) {
    document.getElementById('dropdownMenuButton7').innerHTML=''
    const date = document.getElementById('fecha4').value
    updateTable(date,7)
})
const updateTable=async(date,option)=>{
    const inf={
        date: date
    }
    console.log(inf)
    const response2 = await fetch('http://127.0.0.1:8000/api/table/list', {
        method: 'POST',
        headers:{
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(inf)
    })
    if (response2.ok)
    {
        const data =  await response2.json();
        let options = ''
        for (let i=0; i< Object.keys(data.data).length;i++){
            if (data.data[i]) {
                options += `<option value="${data.data[i].id}">${data.data[i].table+' '+data.data[i].capacity}</option>`
            }
        }
        document.getElementById('dropdownMenuButton'+option).innerHTML=options
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
    }else if(target.getAttribute('id')==='delete'){
        document.getElementById('borrar').name=elementId
    }
});
function deleteReservation(){
    sendReservationDelete()
}
const sendReservationDelete = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/delete/reservation/'+document.getElementById('borrar').name, {
            method: 'POST',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const data =  await response.json();
            Swal.fire({
                title: '¡Reservación Eliminada!',
                text: data.title,
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
            type: 'warning',
            confirmButtonText: 'Entendido'
        }).then(() => {
            location.reload();
        });
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
            if (response2.ok)
            {
                const data = await response2.json();
                let options = ''
                for (let i=0; i< Object.keys(data.data).length;i++){
                    if (data.data[i]) {
                        options += `<option value="${data.data[i].id}">${data.data[i].table+' '+data.data[i].capacity}</option>`
                    }
                }
                document.getElementById('dropdownMenuButton7').innerHTML=options
            }
            document.getElementById('dropdownMenuButton6').innerHTML=option
            const response3 = await fetch('http://127.0.0.1:8000/api/reservation/'+elementId, {
                method: 'GET',
                headers:{
                    "Authorization": "Bearer " + localStorage.getItem('token')
                }
            })
            if (response3.ok){
                const data3 = await response3.json();
                console.log(data3.data)
                document.getElementById('dropdownMenuButton6').value=data3.data.person
                document.getElementById('dropdownMenuButton7').value=data3.data.table
                document.getElementById('fecha4').value=data3.data.date
                document.getElementById('hora4').value=data3.data.hour
                console.log(data3.data.hour)
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
function editReservation(){
    sendEditReservation()
}
const sendEditReservation = async()=> {
    try{
        const inf ={
            person:            document.getElementById('dropdownMenuButton6').value,
            table:             document.getElementById('dropdownMenuButton7').value,
            date:  document.getElementById('fecha4').value,
            hour:              document.getElementById('hora4').value,
            status:          document.getElementById('dropdownMenuButton9').value,
        }
        console.log(inf)
        const response = await fetch('http://127.0.0.1:8000/api/edit/reservation/'+document.getElementById('send').name, {
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
                    title: '¡Reservación Actualizada!',
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
