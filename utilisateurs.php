<?php 
$title_page = "Utilisateurs";
require_once 'layout/head.php';
?>
<h1>Liste des utilisateurs</h1>

<div class="row page page-utilisateurs content">
    <div class="col-xs-12 entry-content">
        <?php require_once 'data/users-labels.php'; ?>
        <?php require_once 'template-parts/users-labels-list.php'; ?>    
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>