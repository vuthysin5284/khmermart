<div class="col-md-12">
    <div class="panel panel-white">
        <div class="panel-heading clearfix">
            <h4 class="panel-title">Customer Tracker</h4>
        </div>
        <div class="panel-body">
            <form action="<?php echo base_url();?>/customer/create" method="post">
            	<?php foreach ($customers as $customer):?>
            	<div class="form-group">
                    <label for="names">Customer name</label>
                    <input name="names" value="<?php echo $customer->id;?>" class="form-control" id="names" placeholder="Enter name" type="text">
                </div>

                <div class="form-group">
                    <label for="businnes_type">businnes_type</label>
                    <select name="businnes_type" id="businnes_type" class="form-control m-b-sm">
                        <?php foreach ($business_types as $business_type):?>
                        <option value="<?php echo $business_type->id;?>"><?php echo $business_type->names;?></option>
                        <?php endforeach;?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="home">home</label>
                    <input name="home" value="<?php echo $customer->home;?>" id="home" class="form-control" placeholder="Enter email" type="text">
                </div>

                <div class="form-group">
                    <label for="address">address</label>
                    <input name="address" value="<?php echo $customer->home;?>" class="form-control" id="address" placeholder="Password" type="text">
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

                <input type="submit" name="submit" class="btn btn-primary">Submit</button>
                <?php endforeach;?>
            </form>
        </div>
    </div>
</div>