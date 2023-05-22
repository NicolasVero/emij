const fixed_elements_background = document.getElementsByClassName("header-fixed-elements-background")[0];
console.log(fixed_elements_background)

window.addEventListener('scroll', () => {
    if(window.pageYOffset > 300) {
        fixed_elements_background.classList.add('active');
    } else {
        fixed_elements_background.classList.remove('active');
    }
});