var input = []
window.addEventListener("keyup",(event) => {
    input.push(event.key.toLowerCase());
    if(input.join('').includes('alo')){
        document.querySelectorAll("p, a, h2, h1").forEach((element) =>{
            element.innerHTML = "lucas";

        })
    
    }
})

// Code pour le défilement fluide
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));

        window.scrollTo({
            top: target.offsetTop,
            behavior: 'smooth'
        });
    });
});

//Code pour le formulaire :

document.querySelector('#all_input').querySelectorAll('.input').forEach((input) => {

    input.addEventListener('input', function() {

        let value = input.value;

        if (value !== '' && value !== null && value !== undefined){
            input.classList.remove('is-danger');
            input.classList.add('is-success');
        } else {
            input.classList.remove('is-success');
            input.classList.add('is-danger');
        }

        let parentElement = input.closest('.field');
        let helpElement = parentElement.querySelector('.help');
        
        let trucRight = parentElement.querySelector('.is-right');
        let icon = trucRight.querySelector('.fas');

        if (input.classList.contains('is-danger')) {
            helpElement.textContent = 'Ce champ est obligatoire';
            helpElement.classList.remove('is-success');
            helpElement.classList.add('is-danger');
            
            icon.classList.remove('fa-check');
            icon.classList.add('fa-exclamation-triangle');
        } else {
            helpElement.textContent = '';
            helpElement.classList.remove('is-danger');
            helpElement.classList.add('is-success'); 

            icon.classList.remove('fa-exclamation-triangle');
            icon.classList.add('fa-check');
        }
    })
})