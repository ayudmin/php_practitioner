<?php require('partials/head.php')?>

<h1>All users</h1>

<?php foreach ($users as $user) : ?>

    <li><?= $user->name; ?></li>

<?php endforeach; ?>


<h1>Submit form</h1>

<form action="/users" method="POST">

    <input type="text" name="name">
    <button type="submit">submit</button>


</form>




<?php require('partials/footer.php'); ?>
