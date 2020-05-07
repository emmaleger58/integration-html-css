<?php
include 'header.php';
?>

<main>
  <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Atom, qu'est ce que c'est ?
          </button>
        </h2>
      </div>
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          Atom est un éditeur de texte développé par GitHub pour les développeurs. Il a été développé par Electron, qui est un framework de développement d'applications multiplateformes utilisant la technologie Web, y compris un triptyque primé: HTML, CSS et JavaScript. Electron fournit un support natif de NodeJS. Atom est très proche de SublimeText : vous trouverez plusieurs choses en commun (panneau de commande, choix multiples, plugins...). Si vous utilisez SublimeText en mode démo, vous n'avez pas à payer de frais de licence, et le système vous invitera à vous inscrire pour une licence tous les 10 fichiers. Avec Atom, vous ne rencontrerez pas ce problème car il est open source! Par conséquent, vous respecterez la loi (cela ne nuira pas à certaines entreprises).
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Rapport à GitHub
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          Atom offre la possibilité de publier son code directement sur son GitHub. A l'inverse, vous pouvez récupérez vos repositories sur votre outil de travail via Atom.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Où télécharger Atom ?
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          Voici le site officiel où vous pouvez <a target="_blank" href="https://atom.io/">download</a> Atom.
        </div>
      </div>
    </div>
  </div>
</main>

<?php
include 'footer.php';
