// Función para validar el formulario
function validateForm() {
    // Obtener los valores de los campos del formulario
    const nombre = document.querySelector('input[name="nombre"]').value.trim();
    const apellido = document.querySelector('input[name="apellido"]').value.trim();
    const fecha = document.querySelector('input[name="fecha"]').value.trim();
    const cedula = document.querySelector('input[name="cedula"]').value.trim();
    const telefono = document.querySelector('input[name="telefono"]').value.trim();
    const correo = document.querySelector('input[name="correo"]').value.trim();
    const usuario = document.querySelector('input[name="usuario"]').value.trim();
    const contraseña = document.querySelector('input[name="contraseña"]').value.trim();

    // Validar los campos
    let isValid = true;

    // Función para mostrar el mensaje de error
    function showErrorMessage(field, message) {
        const errorElement = field.parentElement.querySelector('.error-message');
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }
    }

    // Función para ocultar el mensaje de error
    function hideErrorMessage(field) {
        const errorElement = field.parentElement.querySelector('.error-message');
        if (errorElement) {
            errorElement.textContent = '';
            errorElement.style.display = 'none';
        }
    }

    // Validar nombre (no vacío)
    if (nombre === '') {
        showErrorMessage(document.querySelector('input[name="nombre"]'), 'Debe ingresar su nombre');
        isValid = false;
    } else {
        hideErrorMessage(document.querySelector('input[name="nombre"]'));
    }

    // Validar apellido (no vacío)
    if (apellido === '') {
        showErrorMessage(document.querySelector('input[name="apellido"]'), 'Debe ingresar su apellido');
        isValid = false;
    } else {
        hideErrorMessage(document.querySelector('input[name="apellido"]'));
    }

    // Validar fecha de nacimiento (no vacía)
    if (fecha === '') {
        showErrorMessage(document.querySelector('input[name="fecha"]'), 'Debe seleccionar su fecha de nacimiento');
        isValid = false;
    } else {
        hideErrorMessage(document.querySelector('input[name="fecha"]'));
    }

    // Validar cédula (no vacía y solo números)
    if (cedula === '' || !(/^\d+$/.test(cedula))) {
        showErrorMessage(document.querySelector('input[name="cedula"]'), 'La cédula debe contener solo números');
        isValid = false;
    } else {
        hideErrorMessage(document.querySelector('input[name="cedula"]'));
    }

    // Validar teléfono (no vacío y solo números)
    if (telefono === '' || !(/^\d+$/.test(telefono))) {
        showErrorMessage(document.querySelector('input[name="telefono"]'), 'El teléfono debe contener solo números');
        isValid = false;
    } else {
        hideErrorMessage(document.querySelector('input[name="telefono"]'));
    }

    // Validar correo electrónico (no vacío y formato válido)
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (correo === '' || !correo.match(emailPattern)) {
        showErrorMessage(document.querySelector('input[name="correo"]'), 'El correo electrónico debe tener un formato válido');
        isValid = false;
    } else {
        hideErrorMessage(document.querySelector('input[name="correo"]'));
    }

    // Validar nombre de usuario (no vacío)
    if (usuario === '') {
        showErrorMessage(document.querySelector('input[name="usuario"]'), 'Debe ingresar un nombre de usuario');
        isValid = false;
    } else {
        hideErrorMessage(document.querySelector('input[name="usuario"]'));
    }

    // Validar contraseña (mínimo 5 caracteres)
    if (contraseña === '' || contraseña.length < 5) {
        showErrorMessage(document.querySelector('input[name="contraseña"]'), 'La contraseña debe tener al menos 5 caracteres');
        isValid = false;
    } else {
        hideErrorMessage(document.querySelector('input[name="contraseña"]'));
    }

    return isValid;
}

// Función para deshabilitar el botón de registro si hay errores
function disableRegisterButton() {
    const registerButton = document.querySelector('button[data-bs-target="#modal_msg"]');
    registerButton.disabled = !validateForm();
}

// Agregar listeners para validar el formulario y deshabilitar el botón de registro
document.addEventListener('DOMContentLoaded', () => {
    const formInputs = document.querySelectorAll('#formulario input, #formulario select');
    formInputs.forEach(input => {
        input.addEventListener('input', disableRegisterButton);
    });
});
