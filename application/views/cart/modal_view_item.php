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
        		<tr title="summary 1" data-id="1" data-price="10">
        			<td class="text-center" style="width: 30px;">
        				<img src="images/img_1.png" height="30px" width="30px">
        			</td>
        			<td>product 1</td>
        			<td title="Unit Price">$10.00</td>
        			<td title="Quantity">
        				<input min="1" style="width: 70px;" value="1" type="number">
        			</td>
        			<td title="Total" class="my-product-total">$10.00</td>
        			<td class="text-center" style="width: 30px;">
        				<a href="javascript:void(0);" class="btn btn-xs btn-danger">X</a>
        			</td>
        		</tr>

        		<tr>
        			<td></td>
        			<td><strong>Total</strong></td>
        			<td></td><td></td>
        			<td>
        				<strong id="my-cart-grand-total">
        					$10.00
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
        					$5.00
        				</strong>
        			</td>
        			<td></td>
        		</tr>
        	</tbody>
        </table>
    </div>
    <?php echo form_close();?>
</div>

