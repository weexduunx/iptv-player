# IPTV Player par Idrissa NDIOUCK

## Description

Ce projet est une application de lecteur IPTV basée sur Laravel et Livewire. Elle utilise HLS.js pour la gestion des flux HLS, Video.js pour la lecture vidéo, et SweetAlert pour les alertes interactives. Les chaînes IPTV sont fournies par la collection de chaînes publiques disponibles sur [iptv-org.github.io](https://iptv-org.github.io/iptv/index.country.m3u).

## Technologies Utilisées

-   **Laravel** : Framework PHP pour le développement de l'application web.
-   **Livewire** : Bibliothèque pour la gestion des composants dynamiques dans Laravel, facilitant la création d'interfaces réactives sans avoir besoin de JavaScript complexe.
-   **HLS.js** : Bibliothèque JavaScript pour lire les flux vidéo en HLS (HTTP Live Streaming) dans les navigateurs.
-   **Video.js** : Framework JavaScript pour les lecteurs vidéo, utilisé pour intégrer et personnaliser la lecture vidéo.
-   **SweetAlert** : Bibliothèque JavaScript pour des alertes et messages interactifs.
-   **iptv-org** : Collection de chaînes IPTV disponibles publiquement à travers le monde, accessible via [iptv-org.github.io](https://iptv-org.github.io/iptv/index.country.m3u).

## Fonctionnalités

-   **Affichage des chaînes IPTV** : Les chaînes sont regroupées par pays, avec des informations sur chaque chaîne.
-   **Lecteur vidéo** : Utilise Video.js pour lire les flux IPTV en direct.
-   **Gestion des flux HLS** : HLS.js est utilisé pour le traitement des flux HLS.
-   **Alertes interactives** : SweetAlert est utilisé pour afficher les erreurs et messages à l'utilisateur.
-   **Sélection des chaînes** : Les utilisateurs peuvent sélectionner une chaîne à partir d'une liste déroulante, qui reste ouverte jusqu'à ce que l'utilisateur la ferme.

## Installation

### Prérequis

-   PHP 8.0 ou supérieur
-   Composer
-   Node.js et npm

### Étapes

1. **Clonez le dépôt :**

    ```bash
    git clone https://github.com/weexduunx/iptv-player.git
    cd iptv-player
    composer install
    npm install
    cp .env.example .env
    php artisan key:generate
    php artisan migrate
    php artisan serve
    ```

#### Utilisation

1. **Accédez à l'application via http://localhost:8000.**
2. **Sélectionnez un pays dans le menu déroulant pour afficher les chaînes IPTV disponibles.**
3. **Cliquez sur une chaîne pour commencer la lecture dans le lecteur vidéo intégré.**

##### Contribution

Les contributions sont les bienvenues ! Veuillez soumettre une demande de tirage (pull request) avec des modifications ou des améliorations.

###### License

Ce projet est sous la licence MIT. Voir le fichier LICENSE pour plus de détails.

###### Auteurs

Idrissa Ndiouck - Software Engineer
