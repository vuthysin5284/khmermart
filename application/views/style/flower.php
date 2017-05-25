<div class="row">
</div>List of possible florists and the breakout costs of major items.
<div class="table-responsive">
    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
        <thead>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Website</th>
            <th>Bouquet (bride)</th>
            <th>Bouquet (other)</th>
            <th>Boutineer</th>
            <th>Other</th>
            <th>Total cost</th>
            <th>Notes</th>
            <th></th>
        </tr>
        <tbody>
        <?php
        if(isset($flower)){
            foreach ($flower as $attire) {
                ?>
                <tr>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->names;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td>
                        <div class='text-center'>
                            <div class='btn-group'>
                                <a class="tip image btn btn-primary btn-xs" href="" title="View image">
                                    <i class='fa fa-picture-o'></i>
                                </a>
                                <a href="#" onclick="showAjaxModal('<?php echo base_url();?>customer/new_room/<?php echo $attire->id;?>/new')" title="Edit" class='tip btn btn-warning btn-xs'>
                                    <i class='fa fa-edit'></i>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php
            }
        }
        ?>
        </tbody>
        </thead>
    </table>
</div>