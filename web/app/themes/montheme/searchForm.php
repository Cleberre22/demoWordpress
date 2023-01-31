<form class="input-group" style="width: 70%" action="<?= esc_url(home_url('/'))  ?>">
    <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><img class="logoNavbar" src=http://localhost:8000/app/uploads/2023/01/loupe.png alt="" style="width: 24px; height: 24px;"></span>
    </div>
    <input type="text" name="s" class="form-control" placeholder="Chercher un aliment, une ville ou un animal..." aria-label="Searcch" aria-describedby="basic-addon1" value="<?php get_search_query()  ?>">
</form>