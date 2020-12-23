<section class="text-gray-500 bg-gray-900 body-font">
    <div class="container px-1 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-6">
        <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-white">Classement des équipes</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Gilbert étant pressé d'arriver à ses fins, consulte regulièrement cette liste pour voir l'avancée des équipes.<br>Complète les challenges pour monter plus haut dans la liste !</p>
      </div>
  
      <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:px-0 items-end">
        <div class="relative sm:mr-4 mb-4 sm:mb-0 flex-grow w-full" data-children-count="1">
          <label for="full-name" class="leading-7 text-sm text-gray-400">ID du groupe</label>
          <input type="text" id="full-name" name="full-name" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <div class="relative sm:mr-4 mb-4 sm:mb-0 flex-grow w-full" data-children-count="1">
          <label for="email" class="leading-7 text-sm text-gray-400">Nom du groupe</label>
          <input type="email" id="email" name="email" class="w-full bg-gray-800 rounded border border-gray-700 focus:border-indigo-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Rechercher</button>
      </div>
    </div>
  
      <div class="lg:w-2/3 w-full m-auto overflow-auto mb-5">
        <table class="table-auto w-full text-left whitespace-no-wrap">
          <thead>
            <tr>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">Place</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800 rounded-tl rounded-bl">ID</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Nom</th>
              <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-gray-800">Points</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach($groupes as $groupe):
            ?>
            <tr>
              <td class="px-4 py-3"><?= $place += 1 ?></td>
              <td class="px-4 py-3"><?= $groupe->ID_groupes ?></td>
              <td class="px-4 py-3"><?= $groupe->Nom ?></td>
              <td class="px-4 py-3"><?= $groupe->Points ?> points</td>
            </tr>
            <?php
            endforeach;
            ?>
          </tbody>
        </table>
      </div>
      
      <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto mb-10">
        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Signaler un problème</a>
        <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Actualiser les données</button>
      </div>
    </div>
  </section>