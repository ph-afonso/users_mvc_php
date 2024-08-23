<?php $render('header'); ?>

<h2>Edit User</h2>
 
<form method="POST" action="<?=$base;?>/user/<?=$user['id']?>/edit">
    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?=$user['name']?>">
    </label><br/><br/>

    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$user['email']?>">
    </label><br/><br/>

    <input type="submit" value="Save">
</form>

<?php $render('footer'); ?>