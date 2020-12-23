<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="<?=PATH_CSS?>/site.css"/>
    <link rel="shortcut icon" href="<?=REP_IMAGES?>/favicon.ico" type="image/x-icon"/>
    <title> Esti'Hack </title>    
  </head>

<header class="bg-gray-900 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a href="/"class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
        <img alt="logo" class="w- h-10 object-cover object-center flex-shrink-0 rounded-full" src="<?=REP_IMAGES?>/icon.png" />
        <span class="ml-3 text-xl">Esti'Hack</span>
      </a>
      <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-700    flex flex-wrap items-center text-base justify-center">
        <a href="/classement" class="mr-5 hover:text-white text-gray-500">Classement</a>
        <a href="/challengeslist" class="mr-5 hover:text-white text-gray-500">Épreuves</a>
      </nav>
      <nav>
      <?php
      if(isset($_SESSION['idprofile']) AND $_SESSION['idprofile'] > 0)
      {
      ?>
      <a href="/profile/<?=$_SESSION['idprofile']?>" class="mr-5 text-gray-300 text-xl"> <?= $_SESSION['nom'] ?> <?= $_SESSION['prenom'] ?></a>
      <a href="/deconnexion">
      <button class="inline-flex items-center text-gray-500 bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Deconnexion
      </button>
      </a>      
      <?php
      }
      else
      {
      ?>
      <a href="/connexion">
      <button class="inline-flex items-center text-gray-500 bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Connexion
      </button>
      </a>
      <a href="/inscription">
      <button class="inline-flex items-center text-gray-500 bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Rejoins le sauvetage
      </button> 
      </a> 
      <?php
      }      
      ?>
      </nav>    
    </div>
  </header>

  	<body class="bg-gray-900">
        <?php 
        //On appelle la vue
        include_once 'views/'.$pageName;
        ?>         
    </body>

<footer class="text-gray-500 bg-gray-900 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-white">
        <img alt="logo" class="w- h-10 object-cover object-center flex-shrink-0 rounded-full" src="https://cdn.discordapp.com/attachments/785510147145334845/788356641640022026/icon.png" />
        <span class="ml-3 text-xl">Esti'Hack</span>
      </a>
    <p class="text-sm text-gray-600 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">© 2020 Estiam Education —
      <a href="https://estiam.education" class="text-gray-500 ml-1" target="_blank" rel="noopener noreferrer">Réalisé par Eray O. - Rayane K. - Aksel G. - Alexis T. dans le cadre du hackathon de Décembre 2020</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-600">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-600">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>

</html>   