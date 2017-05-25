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

        <li class="default">
            <a href="<?php echo base_url();?>food/bakery"
               data-url="<?php echo base_url();?>food/bakery" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-sign-out"></i>Seafood</a></li>
        <li class="default">
            <a href="<?php echo base_url();?>food/bakery"
               data-url="<?php echo base_url();?>food/bakery" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-file-text-o"></i>Rice</a></li>

        <li class="default">
            <a href="<?php echo base_url();?>food/bakery"
               data-url="<?php echo base_url();?>food/bakery" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-file-text-o"></i>Beef, Pork and Fish</a></li>

        <li class="default">
            <a href="<?php echo base_url();?>food/bakery"
               data-url="<?php echo base_url();?>food/bakery" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-file-text-o"></i>Breakfast Foods</a></li>

        <li class="default">
            <a href="<?php echo base_url();?>food/bakery"
               data-url="<?php echo base_url();?>food/bakery" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-file-text-o"></i>Dairy, Cheese, and Eggs</a></li>

        <li class="default">
            <a href="<?php echo base_url();?>food/bakery"
               data-url="<?php echo base_url();?>food/bakery" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-file-text-o"></i>Fruit</a></li>
        <li class="default">
            <a href="<?php echo base_url();?>food/bakery"
               data-url="<?php echo base_url();?>food/bakery" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-file-text-o"></i>Drinks</a></li>


    </ul>
</div>
<div class="col-md-8">
    <div class="panel-body">
        <div class="menu-overly-mask"></div>
        <div class="adds-wrapper" style="margin-bottom:200px">
                <div class="tab-pane active" id="document_render">Loading...</div>
        </div>
    </div>

</div>

<div class="col-md-2">
    <div class="panel panel-white">
        <div class="panel-body mailbox-content">
            Recommendation
        </div>
    </div>

</div>
