
<?php if($allRecordsAjax && count($allRecordsAjax) > 0): ?>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1; foreach($allRecordsAjax as $val): ?>
            <tr>
                <th scope="row"><?=$i;?></th>
                <td><?=$val['first_name']?></td>
                <td><?=$val['last_name']?></td>
                <td><?=$val['email']?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>