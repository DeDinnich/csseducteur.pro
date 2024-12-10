document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll('.home_img img');
    const homeImgContainer = document.querySelector('.home_img');
    const homeRect = homeImgContainer.getBoundingClientRect();

    const minSpacing = 20; // Espacement minimal entre les images
    const imageSize = 100; // Taille de l'image (par exemple 100px x 100px)

    // Fonction pour générer une position aléatoire dans le conteneur sans chevauchement
    const getRandomPosition = () => ({
        x: Math.random() * (homeRect.width - imageSize),
        y: Math.random() * (homeRect.height - imageSize),
    });

    // Fonction pour vérifier si une position chevauche une autre image
    const isOverlapping = (x, y, positions) => {
        return positions.some(pos => {
            const dx = x - pos.x;
            const dy = y - pos.y;
            return Math.sqrt(dx * dx + dy * dy) < imageSize + minSpacing; // Vérifier la distance
        });
    };

    const placeImages = () => {
        const positions = []; // Tableau pour stocker les positions des images

        images.forEach(image => {
            let position;

            // Trouver une position valide sans chevauchement
            do {
                position = getRandomPosition();
            } while (isOverlapping(position.x, position.y, positions));

            // Appliquer la position à l'image
            image.style.position = 'absolute'; // Nécessaire pour positionner les images
            image.style.left = `${position.x}px`;
            image.style.top = `${position.y}px`;

            // Enregistrer la position pour éviter les chevauchements futurs
            positions.push(position);
        });
    };

    // Placer les images après que le DOM soit entièrement chargé
    placeImages();
});
