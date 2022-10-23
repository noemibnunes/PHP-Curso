<?php
    include_once("templates/header.php");
?>
    <main>
      <div id="title-container">
        <h1>Como você pretende falar com a gente?</h1>
      </div>

      <div class="contatos-container">
          <div id="email-container">
              <h3 id="contatos-title">Email</h3>
              <img src="<?= $BASE_URL ?>/img/email.png" alt="email">
              <p class="p-content">email@email.com</p>
          </div>

          <div id="telefone-container">
              <h3 id="contatos-title">telefone</h3>
              <img src="<?= $BASE_URL ?>/img/telefone.png" alt="telefone">
              <p class="p-content">0800 987 5425</p>
          </div>

          <div id="chat-container">
              <h3 id="contatos-title">Email</h3>
              <img src="<?= $BASE_URL ?>/img/chat.png" alt="chat  ">
              <p class="p-content">basta abrir o chat no app.</p>
          </div>

        </div>
  </main>

<?php
    include_once("templates/footer.php");
?>