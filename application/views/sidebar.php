  <div class="col-md-3 left_col">
    <div class="left_col scroll-view">
      <div class="navbar nav_title" style="border: 0;">
        <a class="site_title">
          <span>
            FPL FC
          </span>
        </a>
      </div>
      <div class="clearfix"></div>
      <!-- menu profile quick info -->
      <div class="profile">
        <div class="profile_pic">
          <img src="<?PHP echo base_url() ?>img/placeholder/user.png" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
          <span>Welcome</span>
          <h2></h2>
        </div>
      </div>
      
      <br />
      <!-- sidebar menu -->
      <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
          <ul class="nav side-menu">

          <li>
              <a href="<?php echo site_url('home/index'); ?>"><i class="fa fa-home"></i> Home </a>
            </li>

            <li>
              <a href="<?php echo site_url('home/mostPicked'); ?>"><i class="fa fa-star"></i> Most Picked </a>
            </li>

            <li>
              <a href="<?php echo site_url('transfers/transfersIn'); ?>"><i class="fa fa-arrow-right"></i> Transfers In </a>
            </li>

            <li>
              <a href="<?php echo site_url('transfers/transfersOut'); ?>"><i class="fa fa-arrow-left"></i> Transfers Out </a>
            </li>

            <li>
              <a href="<?php echo site_url('perfomance/index'); ?>"><i class="fa fa-tachometer"></i> Perfomance </a>
            </li>
            <li>
              <a href="<?php echo site_url('price/index'); ?>"><i class="fa fa-dollar"></i> Price Prediction </a>
            </li>

                   

          </ul>
        </div>
      </div>
      <!-- /sidebar menu -->
    </div>
  </div>