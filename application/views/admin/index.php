<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    .m-t-md {
        margin-top: -1px;
    }
    #upload_doc{
        display:none;
    }
    .mailbox-content{
        min-height:500px;
        padding: 0px;
        padding-top: 0px;
    }
    .active.default{
        border-left: 5px solid blue;
    }
</style>


<div class="col-md-2" style="padding-right:0px; padding-left: 10px;">
    <ul class="nav mailbox-nav" id="document" role="tablist" >
        <li class="active default">
            <a href="<?php echo base_url();?>customer/customer_list"
               data-url="<?php echo base_url();?>customer/customer_list" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-home"></i>Personal Home <span class="badge badge-success pull-right">346</span></a></li>
        <li class="default">
            <a href="<?php echo base_url();?>customer/customer_list"
               data-url="<?php echo base_url();?>customer/customer_list" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-sign-out"></i>My ads</a></li>
        <li class="default">
            <a href="<?php echo base_url();?>customer/customer_list"
               data-url="<?php echo base_url();?>customer/customer_list" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-heart"></i>Favourite ads</a></li>
        <li class="default">
            <a href="<?php echo base_url();?>customer/customer_list"
               data-url="<?php echo base_url();?>customer/customer_list" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-star"></i>Saved search</a></li>
        <li class="default">
            <a href="<?php echo base_url();?>customer/customer_list"
               data-url="<?php echo base_url();?>customer/customer_list" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-folder"></i>Archived ads</a></li>
        <li class="default">
            <a href="<?php echo base_url();?>customer/customer_list"
               data-url="<?php echo base_url();?>customer/customer_list" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-lock"></i>Pending approval</a></li>
        <li class="default">
            <a href="<?php echo base_url();?>customer/customer_list"
               data-url="<?php echo base_url();?>customer/customer_list" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-money"></i>Payment history</a></li>
    </ul>

</div>
<div class="col-md-8">
    <div class="panel panel-white">
        <div class="panel-body mailbox-content">

            <div class="menu-overly-mask"></div>
            <!-- Mobile Filter bar End-->

            <div class="adds-wrapper" style="margin-bottom:200px">
                <div class="tab-content">
                    <div class="tab-pane active" id="document_render">Loading...</div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="col-md-2">
    Recommendation

</div>