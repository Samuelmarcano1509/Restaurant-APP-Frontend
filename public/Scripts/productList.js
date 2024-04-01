
function productList(){
    if (localStorage.getItem('token')){
        getProductList();
    }else { 
        Swal.fire({
          title: 'Ha expirado la sesión',
          type: 'error',
          confirmButtonText: 'Entendido',
        }).then(() => {
          window.location.href = '/NeoRestaurante/views/Auth/login.php';
        });
      }
}
const getProductList = async()=> {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/products/list', {
            method: 'GET',
            headers: {
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            let body=''
            let classSpan=''
            let idProduct=0
            for (let i=0; i< Object.keys(datas.data).length;i++){
                if (datas.data[i]){
                if (datas.data[i].status === 'Disponible'){
                    classSpan='class="badge bg-label-success me-1"'
                }else{
                    classSpan='class="badge bg-label-warning me-1"'
                }
                idProduct=datas.data[i].id
                body+=`<tr id="${idProduct}">
                        <td>
                            ${datas.data[i].name}
                        </td>
                        <td style="white-space: pre-wrap">
                            ${datas.data[i].description}
                        </td>
                        <td>
                            ${datas.data[i].amount}
                        </td>
                        <td>
                            ${datas.data[i].category}
                        </td>
                        <td> 
                        <span ${classSpan}>
                            ${datas.data[i].status}
                        </span>
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
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/trash.svg" style="width: 15px; heigth: 15px;" alt="" > Eliminar producto</button>
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
            $('#table_products').DataTable({
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
    } catch (error) {
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
    if (target.getAttribute('id')==='edit'){
        getProduct(elementId)
    }else if(target.getAttribute('id')==='delete'){
        document.getElementById('borrar').name=elementId
    }
});
function sendProductDelete(){
    productDelete()
}
const productDelete = async()=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/delete/product/'+document.getElementById('borrar').name, {
            method: 'POST',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            Swal.fire({
              title: '¡Producto eliminado!',
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
const getProduct = async(id)=> {
    try{
        const response = await fetch('http://127.0.0.1:8000/api/product/'+id, {
            method: 'GET',
            headers:{
                "Authorization": "Bearer " + localStorage.getItem('token')
            }
        })
        if (response.ok) {
            const datas = await response.json();
            document.getElementById('nombre').value=datas.data.name
            document.getElementById('descripcion').value=datas.data.description
            document.getElementById('precio').value=datas.data.amount
            document.getElementById('categoria').value=datas.data.category
            document.getElementById('dropdownMenuButton').value = datas.data.status
            document.getElementById('send').name =  datas.data.id
            document.getElementById('uploadedAvatar').src = '../../../restaurantApp/public/archivos/'+datas.data.image_name
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
function editProduct(){
    sendEditProduct()
}
const sendEditProduct = async()=> {
    try{
        var formulario = document.getElementById('formulario')
        var data = new FormData(formulario);
        let status =0;
        if (data.get('estado')==='Disponible'){
            status=1
        }else {
            status=2
        }
        const inf ={
            name: data.get('nombre'),
            description: data.get('descripcion'),
            amount:      data.get('precio'),
            status_id:   status,
            category:    data.get('categoria'),
        }
        const response = await fetch('http://127.0.0.1:8000/api/edit/product/'+document.getElementById('send').name, {
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token'),
            },
            body: JSON.stringify(inf)
        })
        if (response.ok) {
            const foto = document.getElementById('upload').files[0]
            if (!foto)
            {
                const datas1 = await response.json();
                Swal.fire({
                    title: 'Producto editado exitosamente',
                    text: datas1.title,
                    type:'success',
                    confirmButtonText:'Aceptar'
                })
            }else {
                const formdata= new FormData()
                formdata.append('image',foto,foto.name)
                const file = URL.createObjectURL(foto)
                document.getElementById('uploadedAvatar').setAttribute('src',file)
                const upfile = await fetch('http://127.0.0.1:8000/api/image/product/'+document.getElementById('send').name, {
                    method: 'POST',
                    headers:{
                        "Authorization": "Bearer " + localStorage.getItem('token'),
                    },
                    body: formdata
                })
                if (upfile.ok) {
                    const datas2 = await upfile.json();
                    Swal.fire({
                        title: 'Archivo Cargado',
                        text: datas2.title,
                        type: 'success',
                        confirmButtonText: 'Entendido'
                    }).then(() => {
                        location.reload();
                    });
                } else if (upfile.status === 413) {
                    Swal.fire({
                        title: 'Error',
                        text: 'El archivo es muy pesado',
                        type: 'error',
                        confirmButtonText: 'Cerrar'
                    });
                } else {
                    const datas2 = await upfile.text();
                    Swal.fire({
                        title: 'Error',
                        text: datas2,
                        type: 'error',
                        confirmButtonText: 'Cerrar'
                    });
                }
            }

        }else {
            Swal.fire({
                title: 'Error',
                text: 'Ha ocurrido un error inesperado, verifique los campos',
                type:'warning',
                confirmButtonText:'Aceptar'
            })
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
function createProduct(){
    sendCreateProduct()
}
const sendCreateProduct = async()=> {
    try{
        var formulario = document.getElementById('formulario2')
        var data = new FormData(formulario);
        let status =0;
        if (data.get('estado')==='Disponible'){
            status=1
        }else {
            status=2
        }
        const inf ={
            name: data.get('nombre'),
            description: data.get('descripcion'),
            amount:      data.get('precio'),
            status_id:    status,
            category:     data.get('categoria'),
        }
        const response = await fetch('http://127.0.0.1:8000/api/create/product/', {
            method: 'POST',
            headers:{
                'Content-Type': 'application/json',
                "Authorization": "Bearer " + localStorage.getItem('token'),
            },
            body: JSON.stringify(inf),
        })
        if (response.ok) {
            Swal.fire({
                title:'Aviso',
                text:'EL producto ha sido creado satisfactoriamente',
                type: 'success',
                confirmButtonText: 'aceptar'
            }).then(() => {
                location.reload();
              });
        }
        else if (response.status===400){
            Swal.fire({
                title:'Aviso',
                text:'Por favor llene todos los campos',
                type: 'warning',
                confirmButtonText: 'aceptar'
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
function subirArchivo(){
    console.log('click')
        const formData = new FormData();
        formData.append('archivo', document.getElementById('subir').files[0]);
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../vendor/php/upload.php');
        xhr.setRequestHeader('enctype', 'multipart/form-data');
        xhr.send(formData);
}