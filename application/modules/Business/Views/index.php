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
                                <td><div class='text-center'><div class='btn-group'><a class='tip image btn btn-primary btn-xs' id='$4 ($3)' href='" . base_url('uploads/$2') . "' title='" . lang("view_image") . "'><i class='fa fa-picture-o'></i></a> <a href='" . site_url('categories/edit/$1') . "' title='" . lang("edit_category") . "' class='tip btn btn-warning btn-xs'><i class='fa fa-edit'></i></a> <a href='" . site_url('categories/delete/$1') . "' onClick=\"return confirm('" . lang('alert_x_category') . "')\" title='" . lang("delete_category") . "' class='tip btn btn-danger btn-xs'><i class='fa fa-trash-o'></i></a></div></div></td>
                            </tr>            
                <?php
                        }
                    }
                ?>
            </tbody>
        </thead>
    </table>
</div>