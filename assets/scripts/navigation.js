const bouton_open  = document.getElementsByClassName('open-navigation')[0];
const bouton_close = document.getElementsByClassName('close-navigation')[0];
console.log(bouton_open);
console.log(bouton_close);
const navigation = document.getElementById('navigation-container');
console.log(navigation);

// bouton.addEventListener('click', () => {
//     console.log("coucou")
// })


bouton_open.addEventListener('click', function() {
    console.log('clic');
    navigation.classList.add('active');
});

bouton_close.addEventListener('click', function() {
    console.log('clic');
    navigation.classList.remove('active');
  });