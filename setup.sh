#!/bin/bash

# Arrêter l'exécution en cas d'erreur
set -e

echo "=== Lancement de l'installation de l'application CSSeducteur ==="

# Étape 1 : Installation des dépendances PHP avec Composer
echo "1. Installation des dépendances PHP avec Composer..."
composer install --no-dev --optimize-autoloader
echo "Dépendances PHP installées avec succès."

# Étape 2 : Installation des dépendances Node.js avec npm
echo "2. Installation des dépendances front-end avec npm..."
npm install
echo "Dépendances front-end installées avec succès."

# Étape 3 : Construction et lancement des conteneurs Docker
echo "3. Construction et lancement des conteneurs Docker..."
cd server/
docker compose -p csseducteur up --build -d
echo "Conteneurs Docker lancés avec succès."

echo "=== Installation terminée. L'application CSSeducteur est prête ! ==="