function productList(){
        getProductList();
}
const getProductList = async()=> {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/product/list', {
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
                              <button class="dropdown-item btn btn-outline-secondary"  id="pruebamodal" data-bs-toggle="modal" data-bs-target="#staticBackdrop" href="javascript:void(0);" >
                                <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/trash.svg" style="width: 15px; heigth: 15px;" alt="" > Eliminar producto</button>
                            </div>
                          </div>
                        </td>
                    </tr>`;
            }
            document.getElementById('inf-body').innerHTML=body
        }
    } catch (error) {
        console.log(error)
    }
}
const tableBody = document.getElementById("inf-body");
tableBody.addEventListener("click", (event) => {
    const target = event.target;
    const row = target.closest("tr");
    const elementId = row.getAttribute("id");
    if (target.getAttribute('id')==='edit'){
        getProduct(elementId)
    }


});
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
            document.getElementById('modalCenterTitle').textContent="prueba"
            document.getElementById('nameWithTitle').value="hola"
            console.log(datas)
        }
    } catch (error){
        console.log(error)
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