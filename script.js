const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})

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
    let i = 0;
            var imgArray=['aboutus/1.png', 'aboutus/2.png', 'aboutus/3.png','aboutus/4.png',]
    
            function nderroFoton(){
                document.getElementById('slideshow').src = imgArray[i];
                if(i<imgArray.length-1){
                    i++;
                }else{
                    i=0;
                }
            }