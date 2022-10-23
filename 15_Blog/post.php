<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"> <?= $currentPost['title'] ?></h1>
            <p id="post-description"> <?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">            
            </div>
            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit aliquam earum voluptatum animi? Vel quas natus laudantium ducimus beatae aliquam consequuntur! Dolorum optio iusto dolores architecto sunt dolore? Earum, quibusdam.
            Autem esse, eum mollitia at pariatur cum placeat sit ab harum distinctio deserunt atque! A enim accusamus corrupti fugiat. Numquam repudiandae saepe fugit debitis. Quam facere nisi impedit amet alias!
            Quae itaque eius eaque officiis facere at. Asperiores odio est doloribus alias quo autem sapiente debitis ex, eveniet sunt quae, fugit eligendi! Qui molestiae eius, nisi dolore quos nam vel.
            Nostrum rem soluta accusamus dolores ab tenetur recusandae pariatur placeat! Vitae sequi, cum et est necessitatibus quaerat nulla, ducimus eligendi nisi nesciunt adipisci tenetur. Est sapiente facere possimus voluptatem reprehenderit.
            Odio facere facilis magni adipisci id labore harum perferendis dolore maxime alias illum, tenetur corrupti qui iusto? Ea unde est, ullam numquam nisi quia neque aliquam officiis, voluptatum sunt voluptate?</p>

            <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit aliquam earum voluptatum animi? Vel quas natus laudantium ducimus beatae aliquam consequuntur! Dolorum optio iusto dolores architecto sunt dolore? Earum, quibusdam.
            Autem esse, eum mollitia at pariatur cum placeat sit ab harum distinctio deserunt atque! A enim accusamus corrupti fugiat. Numquam repudiandae saepe fugit debitis. Quam facere nisi impedit amet alias!
            Quae itaque eius eaque officiis facere at. Asperiores odio est doloribus alias quo autem sapiente debitis ex, eveniet sunt quae, fugit eligendi! Qui molestiae eius, nisi dolore quos nam vel.
            Nostrum rem soluta accusamus dolores ab tenetur recusandae pariatur placeat! Vitae sequi, cum et est necessitatibus quaerat nulla, ducimus eligendi nisi nesciunt adipisci tenetur. Est sapiente facere possimus voluptatem reprehenderit.
            Odio facere facilis magni adipisci id labore harum perferendis dolore maxime alias illum, tenetur corrupti qui iusto? Ea unde est, ullam numquam nisi quia neque aliquam officiis, voluptatum sunt voluptate?</p>
        </div>

        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categorias-title">Categorias</h3>
            <ul id="categorias-list">
                <?php foreach($categorias as $categoria): ?>
                <li><a href="#"><?= $categoria ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

    

<?php
    include_once("templates/footer.php");
?>