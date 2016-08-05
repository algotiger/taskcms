<table style="border: solid 2px #777 ; width: 200px">
    <?php
    $user = $data['user'];
    ?>

    <tr>
        <td>Name</td>
        <td>Emaile</td>
    </tr>


        <tr>
            <td><input type="text" value="<?= $user['name'] ?>"></td>
            <td><input type="text" value="<?= $user['email'] ?>"></td>
        </tr>

</table>
