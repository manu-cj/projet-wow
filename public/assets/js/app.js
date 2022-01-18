
const formRegister = document.querySelector('#form-register');

if (formRegister) {

    const password = document.querySelector('#id-password');
    const passwordRepeat = document.querySelector('#id-password-repeat');

    function checkpassword() {
        if (password.value !== passwordRepeat.value) {
            passwordRepeat.setCustomValidity("Les mots de passe ne correspendent pas");
        }
        else {
            passwordRepeat.setCustomValidity("");
        }
    }

    password.addEventListener('change', checkpassword);
    passwordRepeat.addEventListener('keyup', checkpassword);
    console.log(passwordRepeat.value)

}

