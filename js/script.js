const email = document.querySelector('#email')

//add event listener
email.addEventListener('input', function(event) {
    if(email.validity.typeMismatch) {
        email.setCustomValidity('Email Address expected')
    } else {
        email.setCustomValidity('')
    }

})