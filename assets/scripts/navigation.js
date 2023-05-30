const bouton_open  = document.getElementsByClassName('open-navigation')[0];
const bouton_close = document.getElementsByClassName('close-navigation')[0];
const navigation   = document.getElementById('navigation-container');

bouton_open.addEventListener('click', function() {
    navigation.classList.add('open');
});

bouton_close.addEventListener('click', function() {
    navigation.classList.remove('open');
});