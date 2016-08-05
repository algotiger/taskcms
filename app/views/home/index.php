<table style="border: solid 2px #777 ; width: 200px">
    <?php
        $users = $data['users'];
    ?>

    <tr>
        <td>Name</td>
        <td>Emaile</td>
    </tr>

    <?php foreach ($users as $user){?>
        <tr>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email']?></td>

        </tr>
    <?php } ?>
</table>
