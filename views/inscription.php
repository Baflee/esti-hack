  <section class="text-gray-500 bg-gray-900 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font font-medium text-3xl text-white">Inscrivez-vous pour la sécurité de tous.</h1>
        <p class="leading-relaxed mt-4 mb-20">S'inscrire dès maintenant, aide à développer vos connaissances en cybersécurité et évite le risque qu'un anonymous pirate votre PC pendant que vous piratez. Bienvenue en 2077.</p>
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-800 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-white text-lg font-medium title-font mb-5">Inscription avec le compte ESTIAM</h2>
        <form action="" method="post">
        <div class="relative mb-2">
            <label for="nom" class="leading-7 text-sm text-gray-400">Nom</label>
            <input type="text" id="nom" name="nom" class="w-full bg-gray-700 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-2">
            <label for="prenom" class="leading-7 text-sm text-gray-400">Prénom</label>
            <input type="text" id="prenom" name="prenom" class="w-full bg-gray-700 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative mb-2">
            <label for="prenom" class="leading-7 text-sm text-gray-400">Campus & Classe</label>
          <select class="w-full bg-gray-700 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="campus">
            <?php
            foreach($campuss as $campus):
            ?>  
            <option value="<?=$campus->ID_campus?>"><?=$campus->Nom?></option>
            <?php
            endforeach;
            ?>
          </select>
        </div>
        <div class="relative mb-2">
            <select class="w-full bg-gray-700 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" name="classe">
            <?php
            foreach($classes as $classe):
            ?>  
            <option value="<?=$classe->ID_classes?>"><?=$classe->Nom?></option>
            <?php
            endforeach;
            ?>
            </select>
          </div>
        <div class="relative mb-2">
          <label for="email" class="leading-7 text-sm text-gray-400">Email ESTIAM</label>
          <input type="email" id="email" name="email" class="w-full bg-gray-700 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative mb-5">
          <label for="password" class="leading-7 text-sm text-gray-400">Mot de passe</label>
          <input type="password" id="" name="password" class="w-full bg-gray-700 rounded border border-gray-600 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <input type="submit" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="inscription" value="Validez votre inscription"></input>
        </form>
        <p class="text-xs text-gray-600 mt-3">Pro-tip: Se connecter sur un site ne fait pas de vous un hackeur.</p>
      </div>
    </div>
  </section>