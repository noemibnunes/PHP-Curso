<?php
    include_once("templates/header.php");
?>
    <main>
        <div class="sobre-container">
            <div id="missao-container">
                <h3 id="sobre-title">Missão</h3>
                <img src="<?= $BASE_URL ?>/img/missao.png" alt="missao">
                <p class="p-content">Lorem ipsum eum mollitia at pariatur cum placeat sit ab harum distinctio deserunt atque fugiat.</p>
            </div>

            <div id="visao-container">
                <h3 id="sobre-title">Visão</h3>
                <img src="<?= $BASE_URL ?>/img/visao.png" alt="visao">
                <p class="p-content">Lorem ipsum dolor sit repudiandae saepe fugit debitis. Quam facere nisi impedit amet alias.</p>
            </div>

            <div id="valores-container">
                <h3 id="sobre-title">Valores</h3>
                <img src="<?= $BASE_URL ?>/img/valores.png" alt="valores">
                <p class="p-content">Lorem ipsum dolor sit quas natus laudantium ducimus beatae aliquam consequuntur.</p>
            </div>
        </div>
    </main>

<?php
    include_once("templates/footer.php");
?>