const accordionHeader = document.querySelectorAll('.accordion-header')

accordionHeader.forEach(accordionHeader => {
    accordionHeader.addEventListener("click", event => {
        
        accordionHeader.classList.toggle("active-accordion")
        const accordionBody = accordionHeader.nextElementSibling
        if(accordionHeader.classList.contains("active-accordion")){
            accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
        }else{
            accordionBody.style.maxHeight = 0
        }
    })
});