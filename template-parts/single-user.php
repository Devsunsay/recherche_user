<?php
?>

<h1><?php echo $user['username']; ?></h1>

<div class="user">
    <div class="row row1">
    <img src="<?php echo $user['profile_image']; ?>">
    </div>

    <div class="row row2">
        <div class="column column1"><?php echo $user['email']; ?>
        </div>
    </div>

    <div class="row row3">
    <div class="column column1"><?php echo "référence " . $user['inscription_date']; ?>
        </div>
    </div>
</div>
     