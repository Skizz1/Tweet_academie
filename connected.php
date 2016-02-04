<?php include('header.php'); ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Twitter</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Rechercher">
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                </form>
                <li><button type="button" class="btn btn-primary navbar-btn"><span class="glyphicon glyphicon-log-out"></span></button></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <?= $contenu ?>
    </div>
<?php include('footer.php'); ?>