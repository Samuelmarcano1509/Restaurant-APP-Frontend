const seccion = document.getElementById('contraseñas');
const inputs = document.querySelectorAll('#contraseñas input');



const validacion = (e) =>{
    pass1.addEventListener('input', () => {
        checkPasswords();
      });
      
      pass2.addEventListener('input', () => {
        checkPasswords();
      });
      password1.addEventListener('input', () => {
        checkPasswords2();
      });
      
      password2.addEventListener('input', () => {
        checkPasswords2();
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
      document.getElementById('errorM').style.display="none"
      document.getElementById('send').disabled = false;
    } else {
      pass1.classList.remove('pass');
      pass2.classList.remove('pass');
      pass1.classList.add('pass-incorrecta');
      pass2.classList.add('pass-incorrecta');
      document.getElementById('errorM').style.display="block"
      document.getElementById('send').disabled = true; 
    }
  }

  function checkPasswords2() {
    const pass3 = document.getElementById('password1');
    const pass4 = document.getElementById('password2');

    if (pass3.value === pass4.value) {
      pass3.classList.remove('pass-incorrecta');
      pass4.classList.remove('pass-incorrecta');
      pass3.classList.add('pass');
      pass4.classList.add('pass');
      document.getElementById('errorM2').style.display="none"
      document.getElementById('btn-1').disabled = false;
    } else {
      pass3.classList.remove('pass');
      pass4.classList.remove('pass');
      pass3.classList.add('pass-incorrecta');
      pass4.classList.add('pass-incorrecta');
      document.getElementById('errorM2').style.display="block"
      document.getElementById('btn-1').disabled = true;
    }
  }




  