<?php require('partials/header.php'); ?>
<h1>All users</h1>
<?php foreach ($users as $user) : ?>
    <li><?= $user->name ?></li>
<?php endforeach;?>

<h1>Submit your name</h1>

<!--<form method="get" action="/names">-->
<!--    <input name="name">-->
<!--    <button type="submit">Submit</button>-->
<!--</form>-->
<form method="post" action="/users">
    <input name="name">
    <button type="submit">Submit</button>
</form>


<?php require('partials/footer.php'); ?>
