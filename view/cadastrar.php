<?php
require_once "cabecalho.php";
?>

<nav class="nav-extended purple lighten-3">
    <div class="nav-wrapper">
        <ul id="nav-mobile" class="right">
            <li><a href="/">Galeria</a></li>
            <li><a class="active" href="/novo">Cadastrar</a></li>
        </ul>
    </div>
    <div class="nav-header center">
        <h1 class="">FILMESFLIX</h1>
    </div>
</nav>

<div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="col s6 offset-s3">
            <!--offset-s3 usado para centralizar ao meio da pagina -->
            <div class="card hoverable">
                <div class="card-content black-text">
                    <span class="card-title">Cadastrar Filme</span>

 
                    <!-- input titulo -->
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="titulo" id="titulo" type="text" class="validate" required>
                            <label for="titulo">Título do Filme</label>
                        </div>
                    </div>

                    <!-- input sinopse -->
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea name="sinopse" maxlength="250" id="sinopse" class="materialize-textarea"
                                required></textarea>
                            <label for="sinopse">Sinopse</label>
                        </div>
                    </div>

                    <!-- input nota -->
                    <div class="row">
                        <div class="input-field col s4">
                            <input name="nota" id="nota" type="number" step=".1" min="0" max="10" class="validate"
                                required>
                            <label for="nota">Nota</label>
                        </div>
                    </div>

                    <!-- input capa -->
                    <div class="file-field input-field">
                        <div class="btn purple lighten-2">
                            <span>Capa</span>
                            <input type="file" name="poster_file">
                        </div>
                        <div class="file-path-wrapper">
                            <input name="poster" class="file-path validate" type="text" required>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <a href="/" class="btn grey">Cancelar</a>
                    <button type="submit" class="waves-effect waves-dark btn purple">Confirmar</button>
                </div>
            </div>
        </div>
    </form>
</div>

</body>

</html>