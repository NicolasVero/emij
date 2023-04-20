// console.log("bien chargé")

function fetch_svg() {
    console.log("salem")
    const svgContainer = document.querySelector('svg'); // sélectionne l'élément <svg>
    const url = '../svg/elbeuf.svg'; // remplacez par l'URL de votre fichier SVG
    console.log(url)
    fetch(url) // chargement du fichier SVG avec fetch()
    .then(response => response.text())
    .then(data => {
        console.log(data)  
        svgContainer.innerHTML = data; // remplace le contenu de l'élément <svg> avec le contenu du fichier SVG
    });
}



// const url = 
// fetch('../logo.svg')
//   .then(response => response.text())
//   .then(svgText => {
//     const parser = new DOMParser();
//     const svgDoc = parser.parseFromString(svgText, 'image/svg+xml');
//     const textNode = svgDoc.querySelector('text'); // remplacez "text" par le sélecteur pour le noeud qui contient le texte que vous voulez extraire
//     const textContent = textNode.textContent;
//     console.log(textContent); // affiche le contenu texte
//   })
//   .catch(error => console.error(error));