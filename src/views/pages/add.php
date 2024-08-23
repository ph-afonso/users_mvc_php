<?php $render('header'); ?>

<h2>Add New User</h2>
 
<form method="POST" action="<?=$base;?>/new">
    <label>
        Nome:<br/>
        <input type="text" name="name">
    </label><br/><br/>

    <label>
        E-mail:<br/>
        <input type="email" name="email">
    </label><br/><br/>

    <input type="submit" value="Submit">
</form>

<?php $render('footer'); ?>