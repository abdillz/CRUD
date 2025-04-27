<nav class="navbar navbar-default">
    <div class="container_fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?controller=home&action=index">C</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="<?= ($view == 'home/index') ? 'active' : '' ?>"><a href="index.php?controller=home&action=index">Beranda</a></li>
                <li class="<?= ($view == 'user/create') ? 'active' : '' ?>"><a href="index.php?controller=user&action=create">Tambah Pengguna</a></li>
                <li class="<?= ($view == 'user/index') ? 'active' : '' ?>"><a href="index.php?controller=user&action=index">Daftar Pengguna</a></li>
            </ul>
        </div>
    </div>
</nav>
