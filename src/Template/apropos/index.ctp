<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylePropos.css" />

</head>

<body>
<div id="page">
    <div id="header">
        <h1> David Lavigueur <br/>Application internet.</h1>
        <div class="description"> Automne 2019, Collège Montmorency</div>
    </div>
    <div id="menulinks">
        <?= $this->Html->link(__('Index'), ['controller' => 'Pokemon', 'action' => 'index']) ?>
        <div class= "menuline"> </div>
    </div>
    <div id="mainarea">
        <div id="contentarea">
            <h4>Nom d'utilisateur et mot de passe Admin </h4>
            <p>Admin Nom d'utilisateur : admin@hotmail.com </p>
            <p>Admin mot de passe : admin </p>
            <h4>Nom d'utilisateur et mot de passe de Super Utilisateur </h4>
            <p>Super utilisateur Nom d'utilisateur : joel@live.ca </p>
            <p>Super utilisateur mot de passe : joel </p>
            <h4>Nom d'utilisateur et mot de passe de Utilisateur </h4>
            <p> utilisateur Nom d'utilisateur : 1737805@cmontmorency.qc.ca </p>
            <p> utilisateur mot de passe : 99c86A5 </p>

            <h2>Base de donnée de Pokemon </h2>
            <img src="webroot/img/base_de_donnees.png"width="650" heigth="400"  title="photo base de données" alt="photo base de données">

            <h2>Base de donnée originale</h2>
            <img src="webroot/img/PokemonDatabase.png" width="650" heigth="400"  title="photo base de données originale" alt="photo base de données originale">
            <h2>Pour corriger le site web</h2>
            <h4>Utilisation du Framework AngularJS pour les listes liées</h4>
            <p>Aller dans nouveau pokemon dans les sections Name et Region/Subregion.</br>
            Pour les régions et sous-régions, chaque région doit changer la liste de sous-région. De base, la sous-région est inconnue</p>
            <h4>Utilisation du Framework AngularJS pour la gestion d'un modèle (items) </h4>
            <p>Cliquer sur le bouton "Liste Items" en haut à droite pour accéder à la page. La page du Framework Angular doit etre monopage et l'on</br>
                peut ajouter un item en cliquant sur le bouton "Add item". On peut aussi supprimer des items. Le bouton "Get all items" permet  </br>
            d'aller chercher tout les items et le bouton "Get item" permet d'aller chercher un item selon son id. Finalement, Update item permet de </br>
            mettre à jour un item</p>
            <h4>Fonction cliquer-glisser</h4>
            <p>Aller dans la section "Liste des fichiers" pour accéder à la page. </br>
           On doit pouvoir glisser une image n'importe où dans la page et celle-ci doit se téléchager.</p>

            <h4>Sqlite</h4>
            <p>Dans le dossier Sqlite sous config se trouve le fichier Sqlite contenant la BD.</p>
            <h4>intérêt de votre prototype</h4>
            <p>L'industrie du jeu vidéo est l'une des plus grande industrie du divertissement au monde et il n'est plus rare que les</br>
            éditeurs de jeux souhaitent avoir un site web afin de permettre de répondre à leurs fans sur des soluces du jeu ou encore sur</br>
            le lore de celui-ci. Ainsi, en prenant un jeu très connu (Pokémon) ce prototype sert à montrer à quoi pourrait avoir l'air</br>
            un site web parlant de leur jeu.</p>
            <h4> <a href="http://slides.com/cosileone/pokemon-database/fullscreen#/">Cliquez ici pour acccédez au site de la base de donnée originale.</a></h4>
            <h4> <a href="https://github.com/BossKirby1499/PokemonTP1.git">Cliquez ici pour acccédez au lien GitHub du projet.</a></h4>

        </div>





    </div>


    <div id="footer">
        <p>Toute utilisation commerciale ou dans un site personnel, est strictement interdite sans l’accord préalable de l’auteur <br/>©Tous droits réservés Tp3 David Lavigueur </br> Contact :
            <a href="mailto:davidlavigueur@live.ca">davidlavigueur@live.ca</a></p>
    </div>
</body>
