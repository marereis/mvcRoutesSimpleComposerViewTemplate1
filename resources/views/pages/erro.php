<div class="container text-center">

    <div class="container">
        <br><h1> Ooooooops... Erro 404 </h1><br><br>
        <div class="alert alert-danger mt-2" role="alert"> <h2><?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?></h2>
        </div><br>
        <p class="font-pop font-sz24 m-3"> Desculpe por isso, caso o problema persista, por favor entre em contato com Administrador. </p>

        <br><a class="nav-link active" aria-current="page" href="<?= site('root')."controller/index" ?>">
            <button type="button" class="btn btn-outline-secondary">Voltar Home</button></a>

    </div>

</div>