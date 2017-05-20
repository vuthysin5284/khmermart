<div class="table-responsive">
    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
        <thead>
            <tr>
                <th>#</th>
                <th>To do</th>
                <th>Due date</th>
                <th>Progress</th>
                <th>Notes</th>
            </tr>
            <tbody>
                <?php
                    if(isset($todo)){
                        foreach ($todo as $todo) {
                ?>
                            <tr>
                                <td><?php echo $todo->id;?></td>
                                <td><?php echo $todo->names;?></td>
                                <td><?php echo $todo->id;?></td>
                                <td><?php echo $todo->id;?></td>
                                <td><?php echo $todo->id;?></td>
                            </tr>            
                <?php
                        }
                    }
                ?>
            </tbody>
        </thead>
    </table>
</div>