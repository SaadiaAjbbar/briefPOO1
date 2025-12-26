<section class="container mx-auto py-16 mb-36">
    <h2 class="text-3xl font-bold mb-6 text-center text-black">Contactez-nous</h2>

    <form action="" method="POST" class="max-w-xl mx-auto bg-white p-8 shadow-md rounded-lg space-y-4">
        <input type="text" name="nom" placeholder="Votre nom" class="w-full border px-4 py-2 rounded-lg"
               value="<?php //echo htmlspecialchars($title); ?>">
        <input type="email" name="email" placeholder="Votre email" class="w-full border px-4 py-2 rounded-lg"
               value="<?php //echo htmlspecialchars($author); ?>">
        <input type="text" name="year" placeholder="la date de creation" class="w-full border px-4 py-2 rounded-lg">
           <?php //echo htmlspecialchars($year); ?>
       </input>
        <button type="submit" class="w-full bg-[#FA871F] text-white py-2 rounded-lg hover:bg-white hover:text-[#FA871F] hover:border-2">Envoyer</button>
    </form>
</section>