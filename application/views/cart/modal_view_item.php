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
        <table class="table table-hover table-responsive" id="my-cart-table">
        	<tbody>
        		<?php foreach($this->cart->contents() as $items) : ?>
        		<tr>
        			<td class="text-center" style="width: 30px;"><img src="images/img_1.png" height="30px" width="30px"></td>
        			<td><?php echo $items["name"];?></td>
        			<td><?php echo $items["price"];?></td>
        			<td><input min="1" value="<?php echo $items["qty"];?>" type="number"></td>
        			<td><?php echo $items["subtotal"];?></td>
        			<td class="text-center" style="width: 30px;">
        				<a href="javascript:void(0);" class="btn btn-xs btn-danger">X</a>
        			</td>
        		</tr>
        		<?php endforeach;?>
        		<tr>
        			<td></td>
        			<td><strong>Total</strong></td>
        			<td></td><td></td>
        			<td>
        				<strong id="my-cart-grand-total">
        					<?php echo $this->cart->total();?>
        				</strong>
        			</td>
        			<td></td>
        		</tr>

    			<tr style="color: red">
    				<td></td>
    				<td>
    					<strong>Total (including discount)
    				</strong>
    			</td>
    			<td></td><td></td>
    			<td>
    				<strong id="my-cart-discount-price">
    					$0.00
    				</strong>
    			</td>
    			<td></td>
    		</tr>
        	</tbody>
        </table>
    </div>
    <?php echo form_close();?>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $(":input").bind('keyup mouseup', function () {
        	var price    = $(this).closest('td').prev('td').text();
        	var qty = $(this).val();
        	$(this).closest('td').next('td').text(price * qty);
        });
    });
</script>

