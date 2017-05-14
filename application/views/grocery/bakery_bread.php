
<style>
    .cd-gallery {
        margin: auto;
    }
</style>

<div class="row">
    <div class="col-md-12">
        <ul class="cd-gallery">

            <li>
                <span class="cd-sale bg-success">New</span>
                <a href="javascript:void(0);">
                    <ul class="cd-item-wrapper">
                        <li class="selected">
                            <img src="<?php echo base_url(); ?>assets/images/shop/ugmonk-tshirt-1.jpg" alt="Preview image">
                        </li>
                    </ul>
                </a>
                <div class="cd-item-info">
                    <b><a href="#0">Mountains</a></b>
                    <em class="cd-price">$26</em>
                </div>
                <div class="cd-item-details">
                    <a href="#" class="pull-left add-to-cart" id="add_to_cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Details</a>
                </div>
            </li>

            <li>
                <span class="cd-sale bg-success">New</span>
                <a href="javascript:void(0);">
                    <ul class="cd-item-wrapper">
                        <li class="selected">
                            <img src="<?php echo base_url(); ?>assets/images/shop/ugmonk-cap-1.jpg" alt="Preview image">
                        </li>
                    </ul>
                </a>
                <div class="cd-item-info">
                    <b><a href="#0">Baseball Cap</a></b>
                    <em class="cd-price">$42</em>
                </div>
                <div class="cd-item-details">
                    <a href="#" class="pull-left add-to-cart">
                        <i class="fa fa-shopping-cart"></i>Add to cart
                    </a>
                    <a href="#" class="pull-right details">
                        <i class="fa fa-list-ul"></i>Details
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div><!-- Row -->

<script type="text/javascript">
    $(document).ready(function() {

        $("#add_to_cart").click(function(){
            $.ajax({
                type: "POST",
                url: baseurl + "cart/add",
                cache:false,
                data: {
                    id : '',
                    name : '',
                    sex : ''
                },
                success: function(response) {
                    $('#item').text(response);
                }
            });
        });
    });
</script>

