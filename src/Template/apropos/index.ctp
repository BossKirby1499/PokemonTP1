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
            <h4>Autocomplete et liste liées </h4>
            <p>Aller dans nouveau pokemon dans les sections Name et Region/Subregion. La section doit moontrer le nom de diférents pokemons existants.</br>
            Pour les régions et sous-régions, chaque région doit changer la liste de sous-région. De base, la sous-région est inconnue</p>
            <h4>Interface REST </h4>
            <p>Cliquer sur le bouton "Liste Items" en haut à droite pour accéder à la page. La page REST doit etre monopage et l'on</br>
                peut ajouter un item en cliquant sur le bouton Add item. On peut aussi supprimer des items</p>
            <h4>Interface Admin avec Bootstrap </h4>
            <p>Cliquer sur le bouton "Section Admin en PHP" en haut à droite pour accéder à la page. La page doit changer de format et de style</br>
            et la barre de recherche doit afficher  leNomDuProjet/admin/attacks pour signifier le passage en mode admin</p>
            <h4> Sqlite  </h4>
            <p>Dans le dossier Sqlite sous config se trouve le fichier Sqlite contenant la BD.</p>
            <h4> <a href="http://slides.com/cosileone/pokemon-database/fullscreen#/">Cliquez ici pour acccédez au site de la base de donnée originale.</a></h4>

        </div>





    </div>


    <div id="footer">
        <p>Toute utilisation commerciale ou dans un site personnel, est strictement interdite sans l’accord préalable de l’auteur <br/>©Tous droits réservés Tp2 David Lavigueur </br> Contact :
            <a href="mailto:davidlavigueur@live.ca">davidlavigueur@live.ca</a></p>
    </div>
</body>
