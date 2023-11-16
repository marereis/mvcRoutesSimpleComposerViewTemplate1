<?php
isset($_SESSION['dados']) && $dadosModel = $_SESSION['dados'];
unset($_SESSION['dados']);

echo '<H1 class="display-4">Lista de Funcionarios</H1>';
?>
<table class="table table-hover table-dark">
    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Funcionario</th>
            <th scope="col">Cargo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        ?>
        <tr>
            <td><a href="<?= site("root") . "controller/lista" ?>" style="display: block; width: 95%;" title="Editar dados"> <?php echo $_SESSION['lista'][$dadosModel]['id'] ?></a></td>
            <td><a href="<?= site("root") . "controller/lista" ?>" style="display: block; width: 95%;" title="Editar dados"> <?php echo $_SESSION['lista'][$dadosModel]['name'] ?> </a></td>
            <td><a href="<?= site("root") . "controller/lista" ?>" style="display: block; width: 95%;" title="Editar dados"> <?php echo $_SESSION['lista'][$dadosModel]['position'] ?></a></td>
        </tr>
        <?php

        ?>
    </tbody>
</table>

<a class="nav-link active" aria-current="page" href="<?= site('root') . "controller/index" ?>">
                        <button type="button" class="btn btn-outline-secondary">Voltar Home</button></a>