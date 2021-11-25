<?php
session_start();

require_once "cabecalho.php";
require_once "./util/Mensagem.php";

$controller = new FilmesController();
$filmes = $controller->index();
?>

<nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">

        <ul id="nav-mobile" class="right">
            <li><a href="/" class="active">Galeria</a></li>
            <li><a href="/novo">Cadastrar</a></li>
        </ul>
    </div>
    <div class="nav-header center">
        <h1>FILMESFLIX</h1>
    </div>
    <div class="nav-content">
        <ul class="tabs tabs-transparent purple darken-1">
            <li class="tab"><a href="#" class="active">Todos</a></li>
            <li class="tab"><a href="#">Assistidos</a></li>
            <li class="tab"><a href="#">Favoritos</a></li>
        </ul>
    </div>
</nav>

<div class="row">
    <?php foreach($filmes as $filme) : ?>
    <div class="col s3">
        <div class="card hoverable">
            <div class="card-image">
                <img src="<?php echo $filme->poster ?>">
                <button class="btn-fav btn-floating halfway-fab waves-effect waves-light red"
                    data-id="<?=($filme->id) ?>"><i class="material-icons">
                        <?= ($filme->favorito) ? "favorite" : "favorite_border" ?></i></button>
            </div>
            <div class="card-content">
                <span class="card-title"><?php echo $filme->titulo ?></span>
                <p class="valign-wrapper"><i class="material-icons amber-text">star</i></a><?php echo $filme->nota ?>
                </p>
                <p><?php echo $filme->sinopse ?></p>
            </div>
        </div>

    </div>
    <?php endforeach ?>
</div>

<?= Mensagem::mostrar(); ?>

<script>
document.querySelectorAll(".btn-fav").forEach(btn => {
    btn.addEventListener("click", (e) => {
        const id = btn.getAttribute("data-id");
        fetch(`/favoritar/${id}`).then(response => response.json())
        .then(response => {
            if (response.success === "ok") {
                if (btn.querySelector("i").innerHTML === "favorite") {
                    btn.querySelector("i").innerHTML = "favorite_border";

                } else {
                    btn.querySelector("i").innerHTML = "favorite";
                }
            }
        })
        .catch(error => {
            M.toast({
                    html: 'Erro ao Favoritar' 
                });
        })

    });
});
</script>

</body>


</html>