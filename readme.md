

#Solution choisie pour réaliser ce test
### Création des scripts de migration des horaires et des restaurant

J'ai d'abord commencé par créer le script de migration des horaires, permettant de les stocker en base de données
, puis le script de migration des restaurants.
Pour lier les horaires au restaurant, j'ai utiliser une clé étrangère sur la table horaires ('restaurant_id') qui sera lié à la
clé primaire de la table restaurant.

### Création des seeders pour ces tables
Pour pouvoir disposer de données valides rapidement, j'ai créer des seeders pour les noms des restaurants ainsi que les horaires
du premier restaurant, en m'inspirant des données de l'exemple.

J'ai ensuite créé le modèle "Horaires" et modifier le modèle "Restaurant" pour le lier aux tables de la bdd.

### Création du Controller Restaurant
Pour gérer l'accès aux données des restaurants (noms et horaires), j'ai créé le controller RestaurantController qui permet de
lister les restaurants et d'obtenir les horaires du restaurant grâce à leur id.

### Affichage des données des restaurants
J'ai fini par créer les vues qui afficheront les données des restaurants, en parcourant les horaires des restaurants envoyés depuis
le controller (via une reliation ManyToOne entre le modèles horaires et restaurant).