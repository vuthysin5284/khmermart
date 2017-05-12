<div class="row">
    <div class="col-md-6 pull-right text-right">
        <button class="btn btn-info" onclick="showAjaxModal('<?php echo base_url();?>customer/new_room/0/new');">
            <!--i class="fa fa-user-plus"></i-->
            <?php echo get_phrase('new_store');?>
        </button>
    </div>
</div>
<div class="table-responsive">
    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Names</th>
                <th>Businnes type</th>
                <th>Home</th>
                <th>address</th>
                <th>street</th>
                <th>phone</th>
                <th>open hour</th>
                <th>lat</th>
                <th>long</th>
                <th>logo</th>
                <th>other</th>
                <th>social type</th>
            </tr>
            <tbody>
                <?php
                    if(isset($customers)){
                        foreach ($customers as $customer) {
                ?>
                            <tr>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->names;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td><?php echo $customer->id;?></td>
                                <td>
                                    <div class='text-center'>
                                        <div class='btn-group'>
                                            <a class="tip image btn btn-primary btn-xs" href="" title="View image">
                                                <i class='fa fa-picture-o'></i>
                                            </a>
                                            <a href="#" onclick="showAjaxModal('<?php echo base_url();?>customer/new_room/<?php echo $customer->id;?>/new')" title="Edit" class='tip btn btn-warning btn-xs'>
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