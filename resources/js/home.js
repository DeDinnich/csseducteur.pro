document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll('.home_img img');
    const home = document.querySelector('.home');
    const homeText = document.querySelector('.home_text');
    const homeButton = document.querySelector('.home_button');
    const header = document.querySelector('header');

    // Récupérer les dimensions et positions des zones critiques
    const homeRect = home.getBoundingClientRect();
    const headerRect = header.getBoundingClientRect();
    const textRect = homeText.getBoundingClientRect();
    const buttonRect = homeButton.getBoundingClientRect();

    // Ajouter une marge de 30px autour du header, du texte, et du bouton
    const adjustedHeaderRect = {
        top: headerRect.top - 30,
        bottom: headerRect.bottom + 30,
        left: headerRect.left,
        right: headerRect.right,
    };

    const adjustedTextRect = {
        top: textRect.top - 30,
        bottom: textRect.bottom + 30,
        left: textRect.left - 30,
        right: textRect.right + 30,
    };

    const adjustedButtonRect = {
        top: buttonRect.top - 30,
        bottom: buttonRect.bottom + 30,
        left: buttonRect.left - 30,
        right: buttonRect.right + 30,
    };

    // Définir les zones gauche et droite
    const leftZone = {
        x: 0,
        y: adjustedHeaderRect.bottom, // Commence sous le header ajusté
        width: homeRect.width / 2, // Moitié gauche
        height: homeRect.height - (adjustedHeaderRect.bottom - homeRect.top), // Hauteur réduite
    };

    const rightZone = {
        x: homeRect.width / 2, // Moitié droite
        y: adjustedHeaderRect.bottom, // Commence sous le header ajusté
        width: homeRect.width / 2,
        height: homeRect.height - (adjustedHeaderRect.bottom - homeRect.top), // Hauteur réduite
    };

    // Calculer une position aléatoire dans une zone donnée
    const getRandomPosition = (zone) => ({
        x: Math.random() * (zone.width - 100) + zone.x, // Largeur de l'image = 100px
        y: Math.random() * (zone.height - 100) + zone.y,
    });

    // Vérifier si une position chevauche une zone critique
    const isOverlapping = (x, y, rect) => {
        return (
            x + 100 > rect.left &&
            x < rect.right &&
            y + 100 > rect.top &&
            y < rect.bottom
        );
    };

    // Vérifier si une position est trop proche d'autres images
    const isTooClose = (x, y, positions, minDistance) => {
        return positions.some(pos => {
            const dx = x - pos.x;
            const dy = y - pos.y;
            return Math.sqrt(dx * dx + dy * dy) < minDistance;
        });
    };

    // Placer les images
    const placeImages = (imagesSet, zone) => {
        const positions = [];
        imagesSet.forEach(image => {
            let position, overlap;

            do {
                position = getRandomPosition(zone);

                // Vérifie si la position chevauche le texte, le bouton, ou le header ajustés
                overlap =
                    isOverlapping(position.x, position.y, adjustedHeaderRect) ||
                    isOverlapping(position.x, position.y, adjustedTextRect) ||
                    isOverlapping(position.x, position.y, adjustedButtonRect) ||
                    isTooClose(position.x, position.y, positions, 120); // Distance minimale entre images

            } while (overlap);

            image.style.left = `${position.x}px`;
            image.style.top = `${position.y}px`;
            positions.push(position); // Enregistre la position pour éviter les collisions
        });
    };

    // Diviser les images en groupes (3 à gauche, 2 à droite)
    const leftImages = Array.from(images).slice(0, 3);
    const rightImages = Array.from(images).slice(3, 5);

    placeImages(leftImages, leftZone);
    placeImages(rightImages, rightZone);
});
