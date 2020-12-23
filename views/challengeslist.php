  <section class="text-gray-500 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Nos challenges</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Gilbert aurait besoin de trouver un moyen de modifier ses notes pour sauver son année.<br>Résolvez les challenges de cybersécurité et tente d'accéder aux comptes internes de l'ESTIAM !</p>
      </div>
      <div class="flex flex-wrap -m-2">
        <?php
        foreach($epreuves as $epreuve):
        ?>      
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <a href="/challenge/<?=$epreuve->ID_epreuves?>">     
          <div class="h-full flex items-center border-gray-800 border p-4 rounded-lg">
            <img alt="challenge" class="w-16 h-16 bg-gray-900 object-contain object-center flex-shrink-0 rounded-full mr-4" src="<?=REP_IMAGES?>/icon.png">
            <div class="flex-grow">
              <h2 class="text-white title-font font-medium"><?=$epreuve->Titre?></h2>
              <p class="text-gray-500"><?=$epreuve->Difficulté?></p>
              <p class="text-gray-600"><?=$epreuve->Points?> Pts</p>
            </div>
          </div>
          </a>
        </div>
        <?php
        endforeach;
        ?>
      </div>
    </div>
  </section>