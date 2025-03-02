let form = document.querySelector('.formforLogin');
let naming = document.querySelector('#naming');
let email = document.querySelector('#email');
form.onsubmit = function (e) {
    if (naming.value.length === 0) {
        e.preventDefault();

    }

}