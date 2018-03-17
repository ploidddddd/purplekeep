<?php
if(isset($events) ){
    $bought = FALSE;
    // print_r($events);
foreach ($events as $e) { } foreach ($organizer as $o) { }
    foreach ($user as $u) { }
    //location
    foreach($location as $locate){}

foreach($going as $g){
    if($this->session->userdata['userSession']->userID == $g->account_id){
        $bought = TRUE;

    }

}
// if($isset($tixStat)){foreach ( as $ts) { }}

    }?>
<!-- Add these lines below to pages with customizable elements -->
<?php
  require('assets/CustomizationManager.php');
  CustomizationManager::SetTheme("configurations 1");
?>
<!-- Up to here -->
    <head>
<style>
/*Gallery */
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 90px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 3px;
    text-align: center;
}
/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal1-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
.star{
    height: 32px;
    width: 32px;
    margin-top:5px;
    margin-left:10px;
}
</style>
</head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url();?>/cLogin/viewDashBoard"><img src="<?php echo base_url(CustomizationManager::$images->LOGO_DARK)?>"></a>
                </div>

                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <!-- <button class="navbar-btn nav-button wow bounceInRight login"> <a href ="<?php echo site_url();?>/cLogin/userLogout" data-wow-delay="0.1s">Logout </a></button> -->
                        <a href ="<?php echo site_url();?>/CLogin/userLogout" data-wow-delay="0.1s"><button class="navbar-btn nav-button wow bounceInRight login"> <?php echo CustomizationManager::$strings->LOGOUT_BUTTON ?> </button></a>
                    </div>

                    <div class="button navbar-right">
                        <!-- <button class="navbar-btn nav-button wow bounceInRight login"> <a href ="<?php echo site_url();?>/event/cEvent/viewCreateEvent" data-wow-delay="0.4s">Create Event </a></button> -->
                        <a href ="<?php echo site_url();?>/event/CEvent/viewCreateEvent" data-wow-delay="0.4s"><button class="navbar-btn nav-button wow bounceInRight login"> <?php echo CustomizationManager::$strings->LANDING_PAGE_CREATE_EVENT_BUTTON ?> </button></a>
                    </div>


                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url();?>/cLogin/viewDashBoard"><?php echo CustomizationManager::$strings->NAV_HOME ?></a></li>

                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url();?>/event/cEvent/viewEvents"><?php echo CustomizationManager::$strings->NAV_PROFILE ?></a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url();?>/user/cUser/viewAnnouncements"><?php echo CustomizationManager::$strings->NAV_ANNOUNCEMENTS ?><?php if($announcementCount>0) {?><span id="bdg" class="ballons"><?php echo $announcementCount;?></span><?php }?></a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url();?>/event/cEvent/viewPreferenceEvents"><?php echo CustomizationManager::$strings->NAV_INTERESTED ?></a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="<?php echo site_url();?>/finance/cCart/viewCart"><?php echo CustomizationManager::$strings->NAV_VIEW_CART ?></a></li>
                        <!--
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href ="<?php echo site_url();?>/event/cEvent/viewCreateEvent" >Contact</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href ="#" >Profile</a></li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <div class="page-head">
            <div class="container">
                <div class="row overflow">
                    <?php
                        //<div class="corner-ribbon top-right sticky red">Shibal</div>
                        date_default_timezone_set('Asia/Manila');
                        $now = new DateTime("now");
                        $end = new DateTime($e->event_date_end);
                        $start = new DateTime($e->event_date_start);
                        $interval = date_diff($now, $start);
                        $year = $interval->format("%y");
                        $month = $interval->format("%m");
                        $day = $interval->format("%d");
                        $week = 0;
                        if($day >= 7){
                            $week = intval($day/7);
                        }

                        //echo "<div class='  blue'>".$year." ".$month." ".$week." ".$day." </div>";
                        if($now < $start){
                            if($year != 0 && ($month >= 12 || $month == 0)){
                                echo "<div class='corner-ribbon top-left sticky blue'>".$year." Year/s Left</div>";
                            }elseif($month != 0 && $week >=4){
                                echo "<div class='corner-ribbon top-left sticky red'>".$month." Month/s Left</div>";
                            }elseif($week != 0 && $month == 0){
                                echo "<div class='corner-ribbon top-left sticky orange'>".$week." Week/s Left</div>";
                            }elseif($day != 0 && $week == 0){
                                echo "<div class='corner-ribbon top-left sticky yellow'>".$day." Day/s Left</div>";
                            }
                        }else if($now >= $start && $now <= $end){
                            echo "<div class='corner-ribbon top-left sticky green'>  Happening now!</div>";
                        }else{
                            echo "<div class='corner-ribbon top-left sticky black'>Event has passed</div>";
                        }
                    ?>
                    <div class="page-head-content">
                        <h1 class="page-title">EVENT DETAILS</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <?php if ($this->session->flashdata('error_msg')): ?>
                                <div class="alert alert-danger" style="margin-top: 15px;">
                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                    <?php echo $this->session->flashdata('error_msg'); ?>
                                </div>
                            <?php endif ?>
                             <?php if ($this->session->flashdata('success_msg')): ?>
                                <div class="alert alert-success" style="margin-top: 15px;">
                                    <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                                    <?php echo $this->session->flashdata('success_msg'); ?>
                                </div>
                            <?php endif ?>
                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">
                                <div class="clearfix">
                                    <div class="favorite-and-print">
                                        <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header" style="margin-top:40px;">
                                <h1 class="property-title pull-left"><?php echo $e->event_name; ?></h1>

                                <?php if(isset($user_event_preference_id)){
                                    echo "<a href='".site_url()."/event/cEvent/interestedRemove/".$user_event_preference_id."'><img class='star' src='".site_url().'../../assets/neilAssets/img/star.png'."'></a>";
                                }else{
                                    echo "<a href='".site_url()."/event/cEvent/interested/".$e->event_id."'><img class='star' src='".site_url().'../../assets/neilAssets/img/white-star.png'."'></a>";
                                }
                                ?>
                                <?php if($this->session->userdata['userSession']->userID == $e->user_id){?>
                                <span class="property-price pull-right"><?php echo $e->event_status; ?></span>
                                <?php } ?>

                                <div class="section additional-details">

                                    <h4 class="s-property-title">Additional Details</h4>

                                    <ul class="additional-details-list clearfix">
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Location</span>

                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $e->event_venue.', '.$locate->location_name.', '.$locate->region_code; ?></span>
                                        </li>

                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Date Start</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo date('m/d/Y h:i:s a', strtotime("$e->event_date_start")); ?></span>
                                        </li>
                                        <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Date End</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo date('m/d/Y h:i:s a', strtotime("$e->event_date_start"));  ?></span>
                                        </li>

                                        <!-- <li>
                                            <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Grade</span>
                                            <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">Wan point jero</span>
                                        </li>  -->

                                    </ul>
                                </div>
                                <!-- End additional-details area  -->

                                <div class="section">
                                    <h4 class="s-property-title">Description</h4>
                                    <div class="s-property-content">
                                        <p><?php echo $e->event_details; ?></p>
                                    </div>
                                </div>
                                <!-- End description area  -->
                            </div>

                            <div class="property-meta entry-meta clearfix ">
                                <span class="property-info-entry">
                                    <span class="property-info-label">Ticket Sale Status</span>
                                    <span class="property-info-value"><?php echo $e->event_status; ?></span>
                                </span>

                            </div>

                            <!-- .property-meta -->

                        <?php if($this->session->userdata['userSession']->userID == $e->user_id){?>
                            <div class="section property-share">
                                <h4 class="s-property-title">Users who are going:</h4>
                                <div class="roperty-social">
                                    <ul>
                                    <?php foreach($going as $g){?>
                                        <li>
                                        <div class="gallery">
                                          <a target="_blank" href="img_fjords.jpg">
                                            <img src="<?php echo base_url('assets/nikkiAssets/img/client-face1.png" class="img-circle')?>" style ="height:30px; height:60px ">
                                          </a>
                                        </div>
                                        <div class="desc">
                                              <?php echo $g->first_name." ".$g->middle_initial." ".$g->last_name;?>
                                          </div>
                                        </li>
                                    <?php }?>
                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                            <!-- End video area  -->
                            <?php foreach($events as $x){ if($id == $x->user_id && $x->event_status != "Expired"){

                                if($x->event_status == "Approved"){
                                    echo'
                                    <div class="button navbar-right">
                                        <button class="navbar-btn nav-button login"> <a href ="'.site_url("/event/cEvent/editEvent/$e->event_id").'">Edit Event </a></button>
                                    </div>';
                                }else if($x->event_status == "Pending"){
                                    echo'
                                    <div class="button navbar-right">
                                        <button class="navbar-btn nav-button login" style="background-color:gray;" id="confirmdelete"><a>Delete Event</a></button>
                                    </div>

                                    <div class="button navbar-right">
                                        <button class="navbar-btn nav-button login"> <a href ="'.site_url("/event/cEvent/editEvent/$e->event_id").'">Edit Event </a></button>
                                    </div>';
                                }
                            }} ?>
                        </div>
                    </div>
                    <div class="modal fade bd-example" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #cb6d53;">
                            <h2 style="color: white;">CONFIRM DELETE!</h2>
                          </div>
                          <div class="modal-body">
                            <h2>Are you sure you want to delete this event?</h2>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" style="background-color: gray;"><a href ="<?php echo site_url('event/cEvent/deleteEvent/'.$e->event_id);?>">Delete</a></button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right" >
                          <div style="position: -webkit-sticky; position: sticky; top: 0; z-index: 50;">
                            <?php
                            echo '<div class="dealer-widget" >';
                            ?>
                            <div class="dealer-content" >
                                    <div class="inner-wrapper" >

                                        <div class="clear" >
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="<?php echo base_url('assets/nikkiAssets/img/client-face1.png" class="img-circle')?>" style ="height:100px; height:200px ">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">

                                                <div class="clear">
                                                  <h3 class="dealer-name">
                                                      <a href=""><?php echo $o->first_name." ".$o->middle_initial." ".$o->last_name;?></a>
                                                  </h3>
                                                  <h4 class="dealer-name">
                                                      <span>Organizers</span>
                                                  </h4>
                                                    <ul class="dealer-contacts">
                                                        <li><i class="pe-7s-map-marker strong"> </i> University of San Carlos</li>
                                                        <li><i class="pe-7s-mail strong"> </i> <?php echo $o->email;?></li>
                                                        <li><i class="pe-7s-call strong"> </i> <?php echo $o->contact_no;?></li>
                                                    </ul>
                                                </div>

                                                <div class="dealer-social-media">
                                                  <a class="twitter" target="_blank" href="">
                                                      <i class="fa fa-twitter"></i>
                                                  </a>
                                                  <a class="facebook" target="_blank" href="">
                                                      <i class="fa fa-facebook"></i>
                                                  </a>
                                                  <a class="instagram" target="_blank" href="">
                                                      <i class="fa fa-instagram"></i>
                                                  </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated" >
                                <div class="panel-heading" >
                                    <h3 class="panel-title">Ticket Prices</h3>
                                </div>
                                <div class="panel-body recent-property-widget" >
                                    <ul>
                                    <input  id="cLoad" hidden value="<?php echo $u->load_amt; ?>">
                                        <?php foreach ($types as $t) { ?>
                                        <li>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry" >
                                                <h4> <?php echo  $t->ticket_name." ".$t->ticket_count." left";?><button class="myBtn" data-id='<?php echo  $t->ticket_type_id;?>'>Buy More Tickets</button></h4>

                                                <span class="property-price"><?php echo "P"." ".$t->price.".00";?></span>
                                                 <?php if($e->event_status == "Approved"){?>
                                                 <!-- <span>&nbsp; &nbsp; &nbsp;
                                                 <form method="post" action="<?php echo site_url();?>/event/cEvent/buyTicket">
                                                     <input type="text" name="eId" value="<?php echo $e->event_id;?>">
                                                     <input type="text" name="tId" value="<?php echo $t->ticket_type_id;?>">

                                                 </form> -->

                                                 <?php
                                                $now = new DateTime("now");
                                                $end = new DateTime($e->event_date_end);

                                                 if(!$bought && $now <= $end){?>
                                                   <a href="<?php echo site_url();?>/event/cEvent/buyTicket/<?php echo $t->ticket_type_id;?>/<?php echo $e->event_id;?>"><input hidden class="val" value="<?php echo $t->price;?>">
                                                <button   class="buy navbar-btn nav-button wow bounceInRight login animated" >Buy</button></a>
                                                <?php }?>

                                                </span>                                            <?php }?>
                                                <!--<span>&nbsp;&nbsp;&nbsp; Sold:
                                                 <?php $ts->cnt?>
                                                </span> -->
                                                <!-- <script>
   $(document).on('click', 'button.buy', function () {
        alert("asdasdasd");
        var val =$("this").closest('input.val').getVal();
        var cVal = $(document).closest('.cVal').getVal();
        alert("ASDASDAsd");
    });
</script> -->
                                            </div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <h1>Card Load: <span><?php echo $u->load_amt; ?></span></h1>
                            </div>
                          </div>
                            
                            <!-- <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-heading">
                                <h3 class="panel-title">Search</h3>
                            </div> -->
                            <!-- <div class="panel-body search-widget">
                                <form action="" class=" form-inline">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control" placeholder="Key word">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-6">

                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Category">

                                                    <option>Music Concerts</option>
                                                    <option>Workshops</option>
                                                    <option>Fashion Show</option>
                                                    <option>Party</option>
                                                    <option>Food Bazaars</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>

                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <label for="price-range">Price range (P):</label>
                                                <input type="text" class="span2" value="" data-slider-min="0"
                                                       data-slider-max="10000" data-slider-step="5"
                                                       data-slider-value="[0,1000]" id="price-range" ><br />
                                                <b class="pull-left color">P0.00</b>
                                                <b class="pull-right color">P10,000.00</b>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" checked> Workshops</label>
                                                </div>
                                            </div>

                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox"> Parties</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" checked> Food Bazaar</label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox" checked> Fashion Shows</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label><input type="checkbox"> Concerts </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label> <input type="checkbox"> Exhibits</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset class="padding-5">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label>  <input type="checkbox" checked> Sports Event </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="checkbox">
                                                    <label>  <input type="checkbox"> Others </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset >
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input class="button btn largesearch-btn" value="Search" type="submit">
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div> -->

                        </aside>
                    </div>
                </div>

            </div>
        </div>


        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <!-- <h4>About us </h4> -->
                                <h4><?php echo CustomizationManager::$strings->ABOUT_HEADER ?></h4>
                                <div class="footer-title-line"></div>

                               <img src= "<?php echo base_url(CustomizationManager::$images->LOGO_DARK)?>" alt="" class="wow pulse" data-wow-delay="1s" >
                                <p><?php echo CustomizationManager::$strings->ABOUT_MESSAGE ?></p>

                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <!-- <h4>Contact Us</h4> -->
                                <h4><?php echo CustomizationManager::$strings->CONTACT_US_HEADER ?></h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> <?php include 'vAddress.php';?></li>
                                    <li><i class="pe-7s-mail strong"> </i> <?php include 'vEmail.php';?></li>
                                    <li><i class="pe-7s-call strong"> </i> <?php include 'vContactNo.php';?></li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) UI Module , All rights reserved 2017  </span>
                        </div>
                        <div class="bottom-menu pull-right">
                            <ul>
                                <li><a class="wow fadeInUp animated" href="<?php echo site_url();?>/cLogin/viewDashBoard" data-wow-delay="0.2s"><?php echo CustomizationManager::$strings->FOOTER_NAV_HOME ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trigger/Open The Modal -->

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add to Cart</h4>
        </div>
        <div class="modal-body">
            <form method="POST" id="cartForm" action="<?php echo site_url('finance/cCart/addToCart'); ?>">
                <div class="row">
                    <div class="col-md-4">
                        <button class="btn" id="unaM" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                    </div>
                    <div class="col-md-4">
                        <input type="text" id="qty1" name="qty1" class="form-control" value="1" aria-label="Quantity">
                    </div>
                    <div class="col-md-4">
                        <button class="btn" id="unaP" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                </div>


                <input type="hidden" id="ticID" name="ticket" class="form-control col-8" placeholder="Quantity" aria-label="Quantity">
        </div>
        <div class="modal-footer">
            <button class="btn btn-success" id="addToCart"  type="submit">Add to Cart</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
        </div>
      </div>

    </div>
  </div>
<script>
var value=0;
$(document).ready(function(){
  var modal = document.getElementById('myModal');
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close")[0];
  $(".myBtn").click(function(){
    $("#myModal").modal();
    $("#ticID").val($(this).data('id')) ;
  });
  $("#unaM").click(function(){
    if($('#qty1').val() > 1){
      var get = $('#qty1').val();
      get-=1;
      $('#qty1').val(get);
    }
  });
  $("#unaP").click(function(){
    var get = parseInt($('#qty1').val());
    get+=1;
    $('#qty1').val(get);
  });

  $("#intrstd").click(function(){
    $(this).attr("disabled",true);
  });

  // btn.onclick = function() {
  //   modal.style.display = "block";

  // }
  // span.onclick = function() {
  //   modal.style.display = "none";
  // }
  // window.onclick = function(event) {
  //   if (event.target == modal) {
  //     modal.style.display = "none";
  //   }
  // }
  // $('#confirmdelete').click(function(){
  //       $('#deletemodal').modal('show');
  //   });

  // $('.qtyinput').val(value);

  // $('.unaM').click(function(){
  //   if($('#qty1').val() > 1){
  //     var get = $('#qty1').val();
  //     get-=1;
  //     $('#qty1').val(get);
  //   }
  // });

  // $('.unaP').click(function(){
  //   var get = parseInt($('#qty1').val());
  //   get+=1;
  //   $('#qty1').val(get);
  // });

  // $(document).on('submit','#cartForm', function(e){
  //   e.preventDefault();
  //   var _url = $(this).attr('action');

  //   $.ajax({
  //       url:_url,
  //       method: "POST",
  //       data: $(this).serialize(),
  //       success: function(){
  //         alert('ok');
  //         //$(':input').val(0);
  //       },
  //       error: function(){

  //          alert('failed!'+ $("qty1").val());
  //       }
  //   });
  // });
});
</script>
