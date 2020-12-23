  <?php
  if(isset($urlId))
  {
  ?>
  <section class="text-gray-500 bg-gray-900 body-font overflow-hidden">
  
    <div class="container px-5 py-24 mx-auto">
<?php
  if($urlId == $_SESSION['idprofile'])
  {
?>      
      <div class="flex flex-col text-center w-full">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Votre profil d'utilisateur</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Consultez et gérez votre profil, ainsi que votre groupe depuis cette interface.</p>
      </div>
<?php
}
else
{
?>  
      <div class="flex flex-col text-center w-full">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Profil utilisateur N°<?= $profile->ID_profiles ?></h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Consultez le profil des autres, ainsi que leur groupe depuis cette interface.</p>
      </div>
<?php
}
?>
    <div class="container py-10 mx-auto border border-gray-900">
      <div class="lg:w-2/4 mx-auto flex flex-wrap">
        <div class="lg:pr-10 lg:py-7 mb-6 lg:mb-0 ml-auto mr-auto">
          <div class="items-center contents">
            <img alt="profil" class=" object-cover object-center rounded-full mr-5 mb-4" src="https://dummyimage.com/100x100" />
            <h1 class="text-white text-3xl title-font font-medium mb-4"><?= $profile->Nom ?> <?= $profile->Prenom ?></h1>
          </div>
  
          <p class="leading-relaxed"><?= $profile->Description ?></p>
  
          <div class="flex mb-2">
            <a class="flex-grow text-indigo-500 py-2 text-lg px-1">Classe <?= $profile->Classe ?></a>
            <a class="flex-grow text-indigo-500 py-2 text-lg px-1 mb-3">Campus <?= $profile->Campus ?></a>
          </div>
          <div class="flex py-2">
            <span class="text-gray-500 mr-5">Email ESTIAM</span>
            <span class="ml-auto text-white"><?= $profile->Email ?></span>
          </div>
          <div class="flex py-2 mb-6">
            <span class="text-gray-500">Groupe</span>
            <span class="ml-auto text-white"><?= $profile->Groupe ?></span>
          </div>
          <div class="flex"> 
          <?php
          if($urlId == $_SESSION['idprofile'])
          {
            ?>
          <?php
          if($_SESSION['groupe'] == 1)
          {
            ?>            
            <a href="/groupe/<?= $_SESSION['idprofile'] ?>">
            <button class="md:flex lg:ml-auto text-white bg-indigo-500 border-0 py-2 px-10 focus:outline-none hover:bg-indigo-600 rounded">Choix du Groupe</button>
            </a>
          <?php
          }
          else
          {
          ?>
          <button class="md:flex lg:ml-auto text-white bg-indigo-500 border-0 py-2 px-10 focus:outline-none hover:bg-indigo-600 rounded">Classement Groupe</button>
          <?php
          }
          ?>
            <a href="/deconnexion">
            <button class="md lg:mr-auto ml-5 text-white bg-indigo-500 border-0 py-2 px-10 focus:outline-none hover:bg-indigo-600 rounded">Se déconnecter</button>
            </a>
          
          <?php
          }
          ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php 
  }
  else
  {header("Location: /accueil");}
  ?>