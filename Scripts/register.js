
//guarda si faltaba ese punto y coma? si, no le estas pasando nada porque estás llamando al archivo sin nada, y no con el submit
//te diste cuenta? pero como meto la llamada al archivo en el subm

document.querySelector('pepe').addEventListener('submit', e=>{
    e.preventDefault()
    const data = Object.fromEntries(
        new FormData(e.target)
        )
        alert(JSON.stringify(data))
})
//mete todo en las llaves, todo el arreglo o todo lo que esta en el archivo? todo
