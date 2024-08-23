<?php $render('header'); ?>

<a href="<?=$base?>/new">New User</a>
<table border="1" width="100%">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Actions</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
        <td><?= $user['id'] ?></td>
        <td><?= $user['name'] ?></td>
        <td><?= $user['email'] ?></td>
        <td>
            <a href="<?=$base?>/user/<?= $user['id'] ?>/edit">
                <img width="20" src="<?=$base?>/assets/images/document.png" alt="">
            </a>
            <a href="<?=$base?>/user/<?= $user['id'] ?>/delete" onclick="return confirm('Are you sure you want to delete the user?')">
                <img width="20" src="<?=$base?>/assets/images/trash.png" alt="">
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>