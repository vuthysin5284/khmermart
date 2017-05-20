
<div class="table-responsive">
    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
        <thead>
            <tr>
                <th>#</th>
                <th>Time</th>
                <th>Item</th>
                <th>Note</th>
            </tr>
            <tbody>
                <?php
                    if(isset($schedule)){
                        foreach ($schedule as $schedule) {
                ?>
                            <tr>
                                <td><?php echo $schedule->id;?></td>
                                <td><?php echo $schedule->names;?></td>
                                <td><?php echo $schedule->names;?></td>
                                <td><?php echo $schedule->id;?></td>
                            </tr>            
                <?php
                        }
                    }
                ?>
            </tbody>
        </thead>
    </table>
</div>