<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylePropos.css" />

</head>

<body>
<div id="page">
    <div id="header">
        <h1> David Lavigueur <br/>420-4A4 MO Web et Bases de données.</h1>
        <div class="description"> Hiver 2019, Collège Montmorency</div>
    </div>
    <div id="menulinks">
        <?= $this->Html->link(__('Index'), ['controller' => 'Pokemon', 'action' => 'index']) ?>
        <div class= "menuline"> </div>
    </div>
    <div id="mainarea">
        <div id="contentarea">
            <h2>Base de donnée de Pokemon </h2>
            <img src="webroot/img/base_de_donnees.png"width="650" heigth="400"  title="photo base de données" alt="photo base de données">

            <h2>Base de donnée originale</h2>
            <img src="webroot/img/PokemonDatabase.png" width="650" heigth="400"  title="photo base de données originale" alt="photo base de données originale">
            <h4> <a href="http://slides.com/cosileone/pokemon-database/fullscreen#/">Cliquez ici pour acccédez au site de la base de donnée originale.</a></h4>

        </div>





    </div>


    <div id="footer">
        <p>Toute utilisation commerciale ou dans un site personnel, est strictement interdite sans l’accord préalable de l’auteur <br/>©Tous droits réservés Tp1 David Lavigueur </br> Contact :
            <a href="mailto:davidlavigueur@live.ca">davidlavigueur@live.ca</a></p>
    </div>
</body>
