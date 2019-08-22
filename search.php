<?php 
$title_page = "Recherche";
require_once 'layout/head.php';
require_once 'layout/navbar.php';
?>

<div class="row page page-search content">
    <div class="col-xs-12 entry-content">

        <form action="search-process.php" method="POST">
            <div>
                <label for="mail">Email de l'utilisateur cherché : </label>
                <input type="email" id="mail" name="user_mail">
            </div>
        </form>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>