
<nav class="navbar navbar-expand-lg bg-light text-dark sticky-top ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP 8 - MVC</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 90px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site('root') . "controller/index" ?>">
                        <button type="button" class="btn btn-outline-secondary">Home</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site('root') . "controller/sobre" ?>">
                        <button type="button" class="btn btn-outline-secondary">Sobre</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site('root') . "controller/lista" ?>">
                        <button type="button" class="btn btn-outline-secondary">Lista</button></a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>