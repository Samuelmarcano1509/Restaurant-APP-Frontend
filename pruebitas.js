 promesa = fetch('http://127.0.0.1:8000/api/hola/test/hola');

 promesa.then(response => {
    if (response.ok) {
      response.json().then(data => {
        console.log('Nombre:', data.xd);
      });
    } else {
      console.error('Error:', response.statusText);
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });

 
