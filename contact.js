let nameRegex = /^[A-Z][a-z]{3,8}$/;
let emailRegex = /[a-zA-Z.-_]+@+[a-z]+\.+[a-z]{2,3}$/;

function validateForm(){
    let nameInput = document.getElementById('name');
    let nameError = document.getElementById('nameError');
    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');

    nameError.innerText = '';
    emailError.innerText = '';

    if(!nameRegex.test(nameInput.value)){
        nameError.innerText = 'invalid name';
        return;
    }
    if(!emailRegex.test(emailInput.value)){
        emailError.innerText = 'invalid email';
        return;
    }

    alert('form submitted succesfully!');
}