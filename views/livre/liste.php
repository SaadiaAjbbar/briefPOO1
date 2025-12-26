<section class="container mx-auto py-20 text-center mb-72">
<h1 class="text-2xl font-bold mb-6">Liste des livres</h1>

    <div class="overflow-x-auto">
        <table class="w-full bg-white shadow-md rounded-lg text-left">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="p-3">Titre</th>
                    <th class="p-3">Auteur</th>
                    <th class="p-3">Année</th>
                    <th class="p-3">Statut</th>
                    <th class="p-3 ">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($livres as $livre): ?>
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-3"><?= $livre->title ?></td>
                    <td class="p-3"><?= $livre->author ?></td>
                    <td class="p-3"><?= $livre->year ?></td>
                    <td class="p-3 font-semibold text-green-600"><?= $livre->status ?></td>
                    <td class="p-3 font-semibold text-green-600"><span class=" w-2.5 h-8 bg-red text-amber-950">supprimer </span><span>modifier</span></td>
                    
                </tr>

                <?php endforeach ?>

                
            </tbody>
        </table>
    </div>
</section>