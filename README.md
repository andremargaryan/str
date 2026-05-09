# LevelUp
# 0 Swipe pour trouver ton job, stage ou alternance — entre Tinder et LinkedIn.

LevelUp est une application web développée avec Symfony permettant aux utilisateurs de swiper des offres d'emploi, de stage et d'alternance. Elle intègre un générateur de CV et un mini-jeu pour démarquer les candidats.


# 1 Membres du groupe
BLANCHARD,  Laura, blanchardlaura5@gmail.com
MENTONNEX,  Misha,  
MARGARYAN,  André,  
YEE KON PINE,  Steve,  ysteve322@gmail.com


# 2 Installation et lancement avec Docker
# Prérequis :

- Docker (https://www.docker.com/) et Docker Compose installés
- Git installé

# Étapes :

```bash
# 1. Cloner le projet
git clone https://github.com/andremargaryan/str.git
cd str

# 2. Lancer les conteneurs Docker
docker compose up -d

# 3. Installer les dépendances PHP
docker exec -it str_php composer install

# 4. Créer la base de données
docker exec -it str_php php bin/console doctrine:database:create

# 5. Lancer les migrations
docker exec -it str_php php bin/console doctrine:migrations:migrate --no-interaction

# 6. Charger les fixtures (données de test)
docker exec -it str_php php bin/console doctrine:fixtures:load --no-interaction
```

L'application est accessible à l'adresse : str.local/home/page

# Outils disponibles :
- Adminer (gestion BDD) : http://localhost:8081
- Mailhog (emails de test) : http://localhost:8090


# 3 Données de test
Les données de test sont fournies via les Fixtures Doctrine.  
Elles sont chargées avec la commande suivante (déjà incluse dans les étapes d'installation) :

```bash
docker exec -it str_php php bin/console doctrine:fixtures:load --no-interaction
```


# 4 Technologies utilisées
- Framework : Symfony 7
- Langage : PHP 8.2+
- Base de données : MySQL 8.0
- ORM : Doctrine
- Moteur de templates : Twig
- Frontend : HTML, CSS, JavaScript, Bootstrap
- Icônes : Font Awesome
- Génération de PDF : DomPDF
- Conteneurisation : Docker / Docker Compose (Nginx, PHP, MySQL, Adminer, Mailhog)
- Gestionnaire de dépendances : Composer


# 5 Fonctionnalités principales
- Swipe d'offres d'emploi, de stage et d'alternance
- Création et personnalisation de CV
- Mini-jeu intégré pour se démarquer
- Authentification utilisateur
- Espace Client (modification du profil)
- Espace Employeur (ajout, modification, suppression d'une offre)
- Interface responsive
