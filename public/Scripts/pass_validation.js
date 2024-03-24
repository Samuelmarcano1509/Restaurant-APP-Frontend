const seccion = document.getElementById('contraseñas');
const inputs = document.querySelectorAll('#contraseñas input');



const validacion = (e) =>{
    pass1.addEventListener('input', () => {
        checkPasswords();
      });
      
      pass2.addEventListener('input', () => {
        checkPasswords();
      });
}

inputs.forEach((input) => {
    input.addEventListener('keyup',validacion);
    input.addEventListener('blur',validacion);
});



  
   function checkPasswords() {
    const pass1 = document.getElementById('pass1');
    const pass2 = document.getElementById('pass2');

    if (pass1.value === pass2.value) {
      pass1.classList.remove('pass-incorrecta');
      pass2.classList.remove('pass-incorrecta');
      pass1.classList.add('pass');
      pass2.classList.add('pass');
    } else {
      pass1.classList.remove('pass');
      pass2.classList.remove('pass');
      pass1.classList.add('pass-incorrecta');
      pass2.classList.add('pass-incorrecta');
    }
  }