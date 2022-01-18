const password = document.getElementById('id-password');
const passwordRepeat = document.getElementById('id-password-repeat');
console.log(passwordRepeat);

if (document.querySelector('#form-register')) {


    function checkpasswordRepeat() {
        if (passwordRepeat.length !== password.length) {
            passwordRepeat.setCustomValidity("Les mots de passe ne comporte pas le même nombre de caractères");
            passwordRepeat.style.borderColor = 'red';
        }
        if (passwordRepeat.length === password.length) {
            if (password.value !== passwordRepeat.value) {
                passwordRepeat.setCustomValidity("Les mots de passe ne correspendent pas");
                passwordRepeat.style.borderColor = 'green';
            } else {
                passwordRepeat.setCustomValidity("");
            }
        }
    }


    password.addEventListener('change', checkpasswordRepeat,);
    passwordRepeat.addEventListener('change', checkpasswordRepeat);
}
