function heroInit(){
    let heroArrow= document.querySelector('.home-hero__bottom-arrow');
    if(heroArrow){
        heroArrow.addEventListener('click', (event) => {
            console.log('test');
            let underSection = heroArrow.parentElement.nextElementSibling;
            window.scrollTo({
                top: underSection.offsetTop,
                behavior: 'smooth'
            });
        });
    }
}

export default {heroInit};