 
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title"><?php echo get_phrase('create_new_room');?></h4>
</div>
<hr style="margin-top: -10px;"/>

<style>
	.red{
		color:red;
	}
</style>

<?php //var_dump($room_detail);?>

<div class="panel-body">

    <?php echo form_open(base_url(),array('class' => 'form-horizontal form-groups-bordered',
				'id'=>'frmNewRoom', 'enctype' => 'multipart/form-data'));?>
    <div class="panel-body">
    <input type="hidden" name="pb_hidden_id" />
    <input type="hidden" name="pb_crud_id" />

        <div class="form-group">
            <label for="names">Customer name</label>
            <input name="names" class="form-control" id="names" placeholder="Enter name" type="text">
        </div>

        <div class="form-group">
            <label for="businnes_type">businnes_type</label>
            <select name="businnes_type" id="businnes_type" class="form-control m-b-sm">
                <?php foreach ($business_types as $business_type):?>
                    <option value="1"><?php echo $business_type->names;?></option>
                <?php endforeach;?>
            </select>
        </div>

        <div class="form-group">
            <label for="home">home</label>
            <input name="home" id="home" class="form-control" placeholder="Enter email" type="text">
        </div>

        <div class="form-group">
            <label for="address">address</label>
            <input class="form-control" id="address" placeholder="Password" type="text">
        </div>

        <div class="form-group">
            <label for="street">street</label>
            <input name="street" class="form-control" id="street" placeholder="Password" type="text">
        </div>

        <div class="form-group">
            <label for="phone">phone</label>
            <input name="phone" class="form-control" id="phone" placeholder="Password" type="text">
        </div>

        <div class="form-group">
            <label for="open_hour">open_hour</label>
            <input class="form-control" id="open_hour" placeholder="Password" type="text">
        </div>

        <div class="form-group">
            <label for="lat">lat</label>
            <input name="lat" class="form-control" id="lat" placeholder="Password" type="text">
        </div>

        <div class="form-group">
            <label for="long">long</label>
            <input name="long" class="form-control" id="long" placeholder="Password" type="text">
        </div>

        <div class="form-group">
            <label for="logo">logo</label>
            <input name="logo" class="form-control" id="logo" placeholder="Password" type="text">
        </div>

        <div class="form-group">
            <label for="other">other</label>
            <input name="other" class="form-control" id="other" placeholder="Password" type="text">
        </div>

        <div class="form-group">
            <label for="social_type">social_type</label>
            <select name="social_type" id="social_type" class="form-control m-b-sm">
                <option value="1">Facebook</option>
                <option value="2">Linkin</option>
                <option value="3">Tritter</option>
                <option value="4">Skype</option>
            </select>
        </div>

        <hr style="margin-top: 10px;"/>
        <div class="form-actions pull-right" style="margin-right:20px;">
            <button type="button"  data-dismiss="modal" class="btn btn-info"><?php echo get_phrase('close');?></button>
            <button type="reset" class="btn btn-info"><?php echo get_phrase('reset');?></button>
            <button type="button" id="btnSubmit" class="btn btn-info">
                    <?php echo get_phrase('save');?>
            </button>
        </div>
    </div>
        <?php echo form_close();?>
</div>
