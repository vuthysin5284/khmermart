<div class="navbar">
    <div class="navbar-inner container">
        <div class="sidebar-pusher">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="logo-box">
            <a href="<?php echo base_url();?>" class="logo-text"><span>KhmerMart</span></a>
        </div><!-- Logo Box -->
        <div class="search-button">
            <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
        </div>
        <div class="topmenu-outer">
            <div class="top-menu">
                <ul class="nav navbar-nav navbar-left" style="margin-top: 14px">
                    <li>
                        <select class="form-control">
                            <option value="">Products</option>
                            <option value="">Supplier</option>
                        </select>
                    </li>
                    <li>
                        <input type="text" class="form-control" style="width: 500px" placeholder="Search ..." />
                    </li>
                    <li>
                        <select class="form-control">
                            <option value="">All Categories</option>
                            <option value="">Agriculture & Food</option>
                            <option value="">Wedding Service</option>
                        </select>
                    </li>
                    <li>
                        <button class="btn btn-info">Search</button>
                    </li>

                </ul>


                <ul class="nav navbar-nav navbar-right">

                    <li><a href="javascript:void(0);" class="waves-effect waves-button waves-classic">ខ្មែរ</a></li>
                    <li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" onclick="showAjaxModal('<?php echo base_url();?>cart/view_item');">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="badge badge-success pull-right" id="item">
                                <?php echo count($this->cart->contents());?>
                            </span>
                        </a>
                    </li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-button waves-classic">Login</a></li>
                    <li><a href="javascript:void(0);" class="waves-effect waves-button waves-classic">Register</a></li>
                    <li><a href="<?php echo base_url(); ?>admin"><i class="fa fa-user"></i></a></li>

                    <!--li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart"></i><span class="badge badge-success pull-right" id="item"><?php echo count($this->cart->contents());?></span></a>
                        <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                            <li><p class="drop-title">Your Shopping <?php echo count($this->cart->contents());?> item(s)</p></li>
                            <li class="dropdown-menu-list slimscroll tasks">
                                <ul class="list-unstyled">
                                    <?php foreach($this->cart->contents() as $items) : ?>
                                        <li>
                                            <a href="#">
                                                <span class="badge badge-roundless badge-default pull-right">1min ago</span>
                                                <p class="task-details"><?php echo $items["name"]. "(". $items["qty"] .")";?></p>
                                            </a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                            <li class="drop-all"><a href="#" class="text-center">Total: <?php echo $this->cart->total();?> USD</a></li>
                        </ul>
                    </li-->
                    <!--li class="dropdown">
                        <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                            <span class="user-name">
                                <?php
                                    $session = (object)$this->session->all_userdata();
                                    if(isset($session->user) && !empty($session->user)){
                                        $loggeduser = (object)$session->user;
                                        echo ($loggeduser->username);
                                    }
                                ?>
                                <i class="fa fa-angle-down"></i>
                            </span>
                            <img class="img-circle avatar" src="<?php echo base_url(); ?>assets/images/avatar1.png" width="40" height="40" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-list" role="menu">
                            <li role="presentation"><a href="<?php echo base_url(); ?>admin"><i class="fa fa-user"></i>Profile</a></li>
                            <li role="presentation"><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
                            <li role="presentation"><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right">4</span></a></li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock screen</a></li>
                            <li role="presentation"><a href="<?php echo base_url();?>auth/logout"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                        </ul>
                    </li-->

                    <!--li>
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic" id="showRight">
                            <i class="fa fa-comments"></i>
                        </a>
                    </li-->
                </ul><!-- Nav -->
            </div><!-- Top Menu -->
        </div>
    </div>

</div><!-- Navbar -->