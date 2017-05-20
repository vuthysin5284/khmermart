<?php
/**
 * Created by PhpStorm.
 * User: Sin Vuthy
 * Date: 5/20/2017
 * Time: 6:19 PM
 */
?>


<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title"><?php echo get_phrase('view_item');?></h4>
</div>
<hr style="margin-top: -10px;"/>

<div class="panel-body">

    <?php echo form_open(base_url(),array('class' => 'form-horizontal form-groups-bordered', 'enctype' => 'multipart/form-data'));?>
    <div class="panel-body">
        Hello, world
    </div>
    <?php echo form_close();?>
</div>

