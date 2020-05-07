<?php
include 'header.php';
?>

  <main class="container">
    <section class="jumbotron">
      <h1 class="display-4">Bienvenue !</h1>
      <p class="lead">Sur ce site, vous retrouverez toutes les informations utiles pour coder une page web.</p>
      <hr class="my-4">
      <p>Je vous invite à cliquer ci-dessous pour en savoir plus sur moi.</p>
      <a class="btn btn-primary d-flex justify-content-around btn-lg" href="eleger.php" role="button">I need to know !</a>
    </section>

    <section class="row">
      <article class="col-sm mb-5 d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/html logo.png" class="card-img-top card-img-height" alt="logo HTML5">
          <div class="card-body">
            <h5 class="card-title">HTML</h5>
            <p class="card-text text-justify">Ce langage est utilisé pour créer des pages web. L'acronyme signifie HyperText Markup Language, ce qui signifie en français "langage de balisage d'hypertexte".</p>
            <a href="html.php" class="btn btn-primary d-flex justify-content-around d-flex justify-content-around">En savoir plus</a>
          </div>
        </div>
      </article>
      <div class="col-sm mb-5 d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/web-css_logo.jpg" class="card-img-top card-img-height" alt="logo CSS">
          <div class="card-body">
            <h5 class="card-title">CSS</h5>
            <p class="card-text text-justify">Le terme CSS est l'acronyme anglais de Cascading Style Sheets qui peut se traduire par "feuilles de style en cascade". Le CSS est un langage informatique utilisé pour mettre en forme les fichiers HTML ou XML. Ainsi, les feuilles de style comprennent du code qui permet de gérer le design d'une page en HTML.</p>
            <a href="css.php" class="btn btn-primary d-flex justify-content-around">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm mb-5 d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/terminal.jpg" class="card-img-top card-img-height" alt="image terminal">
          <div class="card-body">
            <h5 class="card-title">Command Line</h5>
            <p class="card-text text-justify">Une interface en ligne de commande (en anglais command line) est une interface homme-machine dans laquelle la communication entre l'utilisateur et l'ordinateur s'effectue en mode texte. L'utilisateur tape une ligne de commande et l'ordinateur affiche du texte correspondant au résultat de l'exécution.</p>
            <a href="console.php" class="btn btn-primary d-flex justify-content-around">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm mb-5 d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/Git2.PNG" class="card-img-top card-img-height" alt="logo Git et GitHub">
          <div class="card-body">
            <h5 class="card-title">Git & GitHub</h5>
            <p class="card-text text-justify">Git est un logiciel de gestion de versions qui suit l’évolution des fichiers sources et garde les anciennes versions. Cela permet de retrouver les différentes versions d'un fichier. <br> GitHub est une plateforme de "codes" open-source. Pour faire court, c'est une sorte de réseaux social de développeurs.</p>
            <a href="git.php" class="btn btn-primary d-flex justify-content-around">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm mb-5 d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/atom.png" class="card-img-top card-img-height" alt="logo Atom">
          <div class="card-body">
            <h5 class="card-title">Atom</h5>
            <p class="card-text text-justify">Atom est un éditeur de texte libre développé par GitHub. Il supporte des plug-ins écrits en Node.js et implémente Git Control. Atom est basé sur Chromium et Electron et est écrit en CoffeeScript10. Il est également utilisé en tant qu’environnement de développement.</p>
            <a href="atom.php" class="btn btn-primary d-flex justify-content-around">En savoir plus</a>
          </div>
        </div>
      </div>
      <div class="col-sm mb-5 d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
          <img src="img/bootstrap.png" class="card-img-top card-img-height" alt="logo Bootstrap">
          <div class="card-body">
            <h5 class="card-title">Bootstrap</h5>
            <p class="card-text text-justify">Créé par Twitter, Bootstrap est un framework open source de développement web orienté interface graphique. Il utilise les langages HTML, CSS et JavaScript pour fournir aux développeurs des outils pour créer un site facilement.</p>
            <a href="bootstrap.php" class="btn btn-primary d-flex justify-content-around">En savoir plus</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php
include 'footer.php';
