<section class="container mx-auto py-20 text-center mb-72">
<h1 class="text-2xl font-bold mb-6">Liste des Readers</h1>

    <div class="overflow-x-auto">
        <table class="w-full bg-white shadow-md rounded-lg text-left">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="p-3">prenom</th>
                    <th class="p-3">nom</th>
                    <th class="p-3">email</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($readers as $reader): ?>
                <tr class="border-t hover:bg-gray-50">
                    <td class="p-3"><?= $reader->firstName ?></td>
                    <td class="p-3"><?= $reader->lastName ?></td>
                    <td class="p-3"><?= $reader->email ?></td>
                    
                </tr>

                <?php endforeach ?>

                
            </tbody>
        </table>
    </div>
</section>