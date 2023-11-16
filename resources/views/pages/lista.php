<?php
isset($_SESSION['dados']) && $dadosModel = $_SESSION['dados'];
unset($_SESSION['dados']);

echo '<H1 class="display-4">Lista de Funcionarios</H1>';
?>
<table class="table table-hover table-dark">
    <thead class="thead-light">
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Funcionario</th>
            <th scope="col">Cargo</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($dadosModel as $list) :
        ?>
            <tr>
                <td><a href="<?= site('root') . 'controller/listaid/' . $list['id'] ?>" style="display: block; width: 95%;" title="Editar dados"> <?= $list['id'] ?></a></td>
                <td><a href="<?= site('root') . 'controller/listaid/' . $list['id'] ?>" style="display: block; width: 95%;" title="Editar dados"> <?= $list['name'] ?> </a></td>
                <td><a href="<?= site('root') . 'controller/listaid/' . $list['id'] ?>" style="display: block; width: 95%;" title="Editar dados"> <?= $list['position'] ?></a></td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>

<a class="nav-link active" aria-current="page" href="<?= site('root') . "controller/index" ?>">
                        <button type="button" class="btn btn-outline-secondary">Voltar Home</button></a>

