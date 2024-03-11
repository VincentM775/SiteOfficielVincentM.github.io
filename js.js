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
