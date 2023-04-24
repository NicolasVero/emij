const bouton = document.getElementsByClassName('open-navigation')[0];
console.log(bouton);
const navigation = document.getElementById('navigation-container');
console.log(navigation);

bouton.addEventListener('click', () => {
    console.log("coucou")
})


// bouton.addEventListener('click', function() {
//     console.log('clic');
//     navigation.classList.toggle('active');
//   });