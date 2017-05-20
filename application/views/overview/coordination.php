
<div class="table-responsive">
    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
        <thead>
            <tr>
                <th>#</th>
                <th>Names</th>
                <th>Role</th>
                <th>Phone #</th>
                <th>street</th>
                <th>Website</th>
                <th>Cost</th>
                <th>Notes</th>
            </tr>
            <tbody>
                <?php
                    if(isset($coordination)){
                        foreach ($coordination as $coordination) {
                ?>
                            <tr>
                                <td><?php echo $coordination->id;?></td>
                                <td><?php echo $coordination->names;?></td>
                                <td><?php echo $coordination->id;?></td>
                                <td><?php echo $coordination->id;?></td>
                                <td><?php echo $coordination->id;?></td>
                                <td><?php echo $coordination->id;?></td>
                                <td><?php echo $coordination->id;?></td>
                                <td><?php echo $coordination->id;?></td>
                            </tr>            
                <?php
                        }
                    }
                ?>
            </tbody>
        </thead>
    </table>
</div>