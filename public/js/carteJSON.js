// Définition du centre de la carte et du zoom

const map = L.map('map').setView([50.8466, 4.3528], 16);

//Ajout du fond de carte
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

// Récupération des données 
fetch("apicarte.php")
    .then(function (response) {
        response.json().then(function (data) {
            console.log(data);
            afficheMarqueurs(data);
            afficheListe(data);
        });
    })
    .catch(function (error) {
        console.log(error.message);
    });
