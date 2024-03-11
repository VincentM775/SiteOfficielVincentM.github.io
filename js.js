var input = []
window.addEventListener("keyup",(event) => {
    input.push(event.key.toLowerCase());
    if(input.join('').includes('alo')){
        document.querySelectorAll("p, a, h2, h1").forEach((element) =>{
            element.innerHTML = "lucas";

        })
    
    }
})