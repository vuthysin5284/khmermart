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
            <a href="<?php echo base_url();?>overview/todo_list"
               data-url="<?php echo base_url();?>overvier/todo_list" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-inbox"></i>To-do<span class="badge badge-success pull-right">346</span></a></li>
        <li class="default">
            <a href="<?php echo base_url();?>overview/coordination"
               data-url="<?php echo base_url();?>overview/coordination" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-sign-out"></i>Coordination</a></li>
        <li class="default">
            <a href="<?php echo base_url();?>overview/schedule"
               data-url="<?php echo base_url();?>overview/schedule" data-toggle="tab" aria-expanded="false">
                <i class="fa fa-file-text-o"></i>Wedding day schedule</a></li>

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
    <div class="panel panel-white">
        <div class="panel-body mailbox-content">
            Recommendation
        </div>
    </div>

</div>
