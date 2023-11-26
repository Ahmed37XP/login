

window.addEventListener("scroll", () => {
    let page = window.scrollY
    let temp = document.querySelector(".menu");


    if (page >= 200.53334045410156) {
        temp.style.position = "sticky";
    }
    

    
})