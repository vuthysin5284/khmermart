
<style>
    .cd-gallery {
        margin: auto;
    }
</style>

<div class="row">

    <div class="modal-header">
        <h4 class="modal-title">Create New Room</h4>
    </div>
    <div class="col-md-12">

        <ul class="cd-gallery">

            <?php for($i=1;$i<=50; $i++){?>

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
                    <a href="javascript:void(0);" class="pull-left add-to-cart" id="1"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Details</a>
                </div>
            </li>
            <?php } ?>


        </ul>
    </div>

    <div class="modal-header">
        <h4 class="modal-title">Create New Room</h4>
    </div>
    <div class="col-md-12">


        <ul class="cd-gallery">

            <?php for($i=1;$i<=50; $i++){?>

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
                        <a href="javascript:void(0);" class="pull-left add-to-cart" id="1"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        <a href="#" class="pull-right details"><i class="fa fa-list-ul"></i>Details</a>
                    </div>
                </li>
            <?php } ?>




        </ul>
    </div>



</div><!-- Row -->

