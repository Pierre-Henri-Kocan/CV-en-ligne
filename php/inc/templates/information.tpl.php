<?php include 'inc/data.php'; ?>

<div class="container-fluid mb-5">
  <div class="box">
    <div class="inner">
      <span>Soft skills</span>
    </div>
    <div class="inner">
      <span>Soft skills</span>
    </div>
  </div>

  <div class="row">
    <?php foreach ($informationList1 as $value) :?>
      <div class="col-md-4">
        <div class="box">
          <div class="our-services <?= $value['class'] ?>">
            <div class="icon"> <img src="<?= $value['picture'] ?>"> </div>
            <h4><?= $value['title'] ?></h4>
            <p><?= $value['detail'] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="row">
    <?php foreach ($informationList2 as $value) :?>
      <div class="col-md-4">
        <div class="box">
          <div class="our-services <?= $value['class'] ?>">
            <div class="icon"> <img src="<?= $value['picture'] ?>"> </div>
            <h4><?= $value['title'] ?></h4>
            <p><?= $value['detail'] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="competence-language">
  <div class="competence">
  <div class="box">
    <div class="inner">
      <span>Compétences clés</span>
    </div>
    <div class="inner">
      <span>Compétences clés</span>
    </div>
  </div>
    <div class="competence-detail">  
      <p>Polyvalence</p>
      <p>Organisation</p>
      <p>Autonomie</p>
    </div>
  </div>

  <div class="language">
  <div class="box">
    <div class="inner">
      <span>Langues</span>
    </div>
    <div class="inner">
      <span>Langues</span>
    </div>
  </div>
    <div class="language-detail">  
      <p>Français – Maternelle</p>
      <p>Anglais - Intermédiaire</p>
    </div>
  </div>
</div>
</div>








