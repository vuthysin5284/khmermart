<div class="row">

</div>
<div class="table-responsive">
    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
        <thead>
        <tr>
            <th rowspan="2">Name</th>
            <th rowspan="2">Phone</th>
            <th rowspan="2">Email</th>
            <th rowspan="2">Website</th>
            <th rowspan="2">Pricing</th>
            <th colspan="3" style="text-align: center">Makeup: Bride</th>
            <th colspan="2">Makeup: Others</th>
            <th rowspan="2">Extra costs</th>
            <th rowspan="2">Total</th>
            <th rowspan="2">Notes</th>
            <th rowspan="2"></th>
        </tr>
        <tr>
            <th>Trial</th>
            <th>Day-of</th>
            <th>Subtotal</th>
            <th>Day-of</th>
            <th>Subtotal</th>
        </tr>
        <tbody>
        <?php
        if(isset($hair_makeup)){
            foreach ($hair_makeup as $attire) {
                ?>
                <tr>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
                    <td><?php echo $attire->id;?></td>
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