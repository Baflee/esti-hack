<section class="text-gray-500 ml-20 bg-gray-900 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-12">
        <div class="p-12 md:w-1/2 flex flex-col items-start">
          <div class="flex items-center flex-wrap pb-4 mt-auto w-full">
          <span class="inline-block py-1 px-3 rounded bg-gray-800 text-gray-500 text-sm font-medium tracking-widest"><?= $epreuve->Difficulté ?></span>
          <span class="inline-block py-1 px-3 ml-5 rounded bg-gray-800 text-gray-500 text-sm font-medium tracking-widest"><?= $epreuve->Points ?> POINTS</span>
          </div>
          
          <h2 class="sm:text-3xl text-2xl title-font font-medium text-white mt-4 mb-4"><?= $epreuve->Titre ?></h2>
          <p class="leading-relaxed mb-8"><?= $epreuve->Description ?></p>
          <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-800 mt-auto w-full">
          <?php
          if ($epreuve->ID_epreuves == $validation->Code_epreuves)
          {
          ?>
          <span class="inline-block py-1 px-3 rounded bg-gray-800 text-gray-500 text-sm font-medium tracking-widest">Validé</span>  
          <?php
          }
          ?>
       <div class="flex w-full md:justify-start justify-center items-end mb-10">
        <div class="relative mr-4 md:w-full lg:w-full w-2/4" data-children-count="1">
          <?php
          if ($_SESSION['groupe'] != "1" && isset($_SESSION['groupe']))
          {
          ?>
          <form action="" method="post">
          <?php
          if ($epreuve->ID_epreuves != $validation->Code_epreuves)
          {
          ?>
          <label for="hero-field" class="leading-7 text-sm text-gray-400">Rentrez ici le flag trouvé pour valider votre épreuve.</label>
          <input type="text" id="hero-field" name="flag" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
          <button class="inline-flex mt-5 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Valider</button>
          <?php
          }
          ?>          
        </form>
        <?php
        }
        elseif (!isset($_SESSION['groupe']) || $_SESSION['groupe'] == "1")
        {
        ?>
        <label for="hero-field" class="leading-7 text-sm text-gray-400">Rejoignez/Créer un groupe pour participer.</label>
        <?php
        }        
        ?>
      </div>        
      </div>
          <span class="text-gray-600 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800">
            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
              <path d="M22 4L12 14.01l-3-3"></path>
            </svg>Validé 120 fois
          </span>
            <span class="text-gray-600 inline-flex items-center leading-none text-sm">
              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>6 avis
            </span>
          </div>
          <a class="inline-flex items-center">
            <img alt="blog" src="https://dummyimage.com/104x104" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
            <span class="flex-grow flex flex-col pl-4">
              <span class="title-font font-medium text-white"><?= $groupe->Nom ?></span>
              <span class="text-gray-600 text-sm">Vous réalisez cette épreuve au nom de ce groupe.</span>
            </span>
          </a>
        </div>
        <div class="p-12 md:w-1/2 flex flex-col items-start">
          <span class="inline-block py-1 px-3 rounded bg-gray-800 text-gray-500 text-sm font-medium tracking-widest mb-8">RESSOURCES</span>
  
        <div class="lg:w-1/ w-full">
          <h2 class="font-medium title-font tracking-widest text-gray-400 mb-4 text-sm text-center sm:text-left">Fichiers inclus dans ce challenge</h2>
          <nav class="flex flex-col sm:items-start sm:text-left text-center items-center -mb-1">
            
            <?php
            if($epreuve->Fichier1 != "")
            {
            ?>  
            <a href="<?=REP_DOCUMENTS?>/<?= $epreuve->Fichier1 ?>" class="mb-2">
              <span class="bg-gray-800 text-indigo-400 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Premier Document
            </a>
            <?php
            }
            if($epreuve->Fichier2 != "")
            {
            ?>            
            <a href="<?=REP_DOCUMENTS?>/<?= $epreuve->Fichier2 ?>" class="mb-2">
              <span class="bg-gray-800 text-indigo-400 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Deuxième Document
            </a>
            <?php
            }
            if($epreuve->Fichier3 != "")
            {
            ?>            
            <a href="<?=REP_DOCUMENTS?>/<?= $epreuve->Fichier3 ?>" class="mb-2">
              <span class="bg-gray-800 text-indigo-400 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Troisième Document
            </a>
            <?php
            }
            if($epreuve->Fichier4 != "")
            {
            ?>
            <a href="<?=REP_DOCUMENTS?>/<?= $epreuve->Fichier4 ?>" class="mb-2">
              <span class="bg-gray-800 text-indigo-400 w-4 h-4 mr-2 rounded-full inline-flex items-center justify-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                  <path d="M20 6L9 17l-5-5"></path>
                </svg>
              </span>Quatrième Document
            </a>
            <?php
            }
            ?>
          </nav>
        </div>  
      </nav>
      </div>
    </div>
  </section>