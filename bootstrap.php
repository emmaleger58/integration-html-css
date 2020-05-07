<?php
include 'header.php';
?>

<main>

<button type="button" id= global class="btn btn-primary d-flex justify-content-around" data-toggle="modal" data-target="#staticBackdrop">
  Clique sur moi !
</button>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Bravo !</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Yeaaah ! Bootstrap est bien le meilleur outil pour créer ta page web alors à toi de jouer ;)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cool !</button>
        <button type="button" class="btn btn-primary">N'appuie pas ici</button>
      </div>
    </div>
  </div>
</div>
<p class="text-justify mx-3 mt-2">
  <a target="_blank" href="https://getbootstrap.com/">Bootstrap</a> est un framework CSS qui est l'un des outils pouvant accélérer considérablement les projets Web. En ajoutant de nombreuses fonctions et composants, il élargit les possibilités du langage CSS. Ce que je veux dire, c'est que l'utilisation de Bootstrap peut obtenir le même résultat que CSS. Même s'il s'agit d'un framework CSS, il ajoute un avantage au HTML et au Javascript. Bootstrap a été créé par Twitter vers 2011, initialement comme solution à certains problèmes entre les membres de l'équipe de développement. Pendant le développement de Twitter, il n'y avait pas d'accord sur la façon d'écrire du code. Chacun a fait un peu de travail à sa manière, ce qui a causé des problèmes. L'idée d'un ingénieur a été de créer ce framework pour que chacun puisse programmer de la même manière. Le framework est tellement efficace qu'il augmente considérablement la productivité des développeurs! Peu de temps après, le framework était open source sur Github, et des milliers de personnes ont contribué au projet, ce qui en fait l'un des projets les plus actifs et les plus populaires de l'histoire !
</p>
</main>

<?php
include 'footer.php';
