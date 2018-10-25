<?php  session_start(); 

require("configurations/connection.php");
require("scripts/Generic.php");

//if this is true then all session check are not considered
$testSession= false; //$_SESSION['web_id']= 1;
$loggedIn= true;
$homeworkquery=mysqli_query($homeworkcon,"SELECT t.name37,t.name2,t.GradeID from (SELECT * FROM `combine_cluster3` ORDER BY id DESC ) as t group BY t.GradeID ORDER BY t.GradeID ASC");



  /*

  if(isset($_POST["parent_login"]))

  {



    $parent_name=$_POST["parent_name"];

   $parent_key=$_POST["parent_key"];

   $sub=$_POST["parent_login"];





   $query=mysqli_query($con,"SELECT * FROM `parent_credentials` WHERE `parent_name`='$parent_name' AND `parent_key`='$parent_key' AND `status`='1'");

   $row=mysqli_fetch_array($query,MYSQLI_ASSOC);

   if(!empty($row))

     {



        // print_r("fdsa");exit;

      ?>

          <script>

          showHomeWork();   

          </script>

                        

                       

                        

 



            <php

     }

  }

*/

  ?>



  <!DOCTYPE html>



  <html lang="en">







  <head>



    <meta charset="utf-8">



    <meta http-equiv="X-UA-Compatible" content="IE=edge">



    <meta name="viewport" content="width=device-width, initial-scale=1">



    <meta name="title" content="The Bridges School | Sowing the seeds of lifelong learning"/>



    <meta name="description" content=" TBS provides an orderly, safe, & supportive environment that fosters curiosity, inquiry, excellence and lifelong passion for learning."/>



    <meta name="keywords" content="school, education, bridge, good education, top schools, lahore, bridges"/>



    <link rel="shortcut icon" href="img/logo/logo.png">



    <title>The Bridges School | Sowing the seeds of lifelong learning </title>







    <!-- Bootstrap -->



    <link href="css/bootstrap.min.css" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />



    <link rel="stylesheet" href="css/animate.css">



    <link rel="stylesheet" href="css/jquery.fancybox.css" type="text/css" media="screen" />



    <link href="css/style.css" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="css/bootstrap-dropdownhover.min.css">



    <link rel="stylesheet" type="text/css" href=" https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <!-- media Queries -->



    <link rel="stylesheet" href="css/responsive.css">



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


    <script src="//cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>



    <style type="text/css" media="screen">



    .jssora05l,.jssora05r{display:block;position:absolute;width:40px;height:40px;cursor:pointer;background:url('img/a17.png') no-repeat;overflow:hidden}.jssora05l{background-position:-10px -40px}.jssora05r{background-position:-70px -40px}.jssora05l:hover{background-position:-130px -40px}.jssora05r:hover{background-position:-190px -40px}.jssora05l.jssora05ldn{background-position:-250px -40px}.jssora05r.jssora05rdn{background-position:-310px -40px}.jssort01 .p{position:absolute;top:0;left:0;width:72px;height:72px}.jssort01 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none}.jssort01 .w{position:absolute;top:0;left:0;width:100%;height:100%}.jssort01 .c{position:absolute;top:0;left:0;width:68px;height:68px;border:#000 2px solid;box-sizing:content-box;background:url('img/t01.png') -800px -800px no-repeat;_background:none}.jssort01 .pav .c{top:2px;_top:0;left:2px;_left:0;width:68px;height:68px;border:#000 0 solid;_border:#fff 2px solid;background-position:50% 50%}.jssort01 .p:hover .c{top:0;left:0;width:70px;height:70px;border:#fff 1px solid;background-position:50% 50%}.jssort01 .p.pdn .c{background-position:50% 50%;width:68px;height:68px;border:#000 2px solid}* html .jssort01 .c,* html .jssort01 .pdn .c,* html .jssort01 .pav .c{width:72px;height:72px} 



  </style>





</head>







<body>



  <!-- model -->

  <div class="header" id="headerModel" style=" margin-top:0px; background-image:none; width:50%; margin:auto;display: none;position: absolute;z-index: 9999;margin-left: 22%;margin-top: 10%">

    <span class="cross">

      <button type="button" class="close" data-dismiss="modal">&times;</button>

    </span>

    <div id="parent_id" style="width:50%;height: 331px; padding:10px; margin:0 auto; background-color:#FBFBFB; border-radius:5px; border:1px solid #E9E9E9;text-align: center;">

     <h1 align="center" style="margin-top: 14px;">Administrator Login</h1>

     <form action="TBS_session_process.php" method="post">

      <input type="text" name="admin_user_name" required style="position: relative; top:50px; width:85%; margin-bottom:10px; padding-left:10px; height:33px; border:1px solid #E9E9E9" placeholder="User Name" />



      <input type="password" name="admin_password" required style="position: relative; top:50px; width:85%; margin-bottom:10px; padding-left:10px; height:33px; border:1px solid #E9E9E9" placeholder="Password" />



      <input type="submit" name="admin_use" style="position:relative;top:50px;width:87.6%;margin-bottom:10px;padding-left:10px;height:38px;border:1px solid #005099;background-color:#005099;color:#FFF;font-size:17px;font-weight:bold;" placeholder="Enter Student Roll Number" />

    </form>

  </div>  

</div>

<!-- model -->

<div class="header" id="homeworkModel" style=" margin-top:0px; background-image:none; width:73%; margin:auto;display: none;position: absolute;z-index: 9999;margin-left: 13%;margin-top: 10%">

  <span class="cross">

    <button type="button" class="close" data-dismiss="modal">&times;</button>

  </span>

  <div id="parent_home" style="width:50%;height: 331px; padding:10px; margin:0 auto; background-color:#FBFBFB; border-radius:5px; border:1px solid #E9E9E9;text-align: center;">

    <h1 align="center" style="margin-top: 14px;">Parent's Login</h1>

    <form action="parents_login.php" method="POST" id="parentLoginForm">

      <input type="text" name="parent_name" required style="position: relative; top:50px; width:85%; margin-bottom:10px; padding-left:10px; height:33px; border:1px solid #E9E9E9" placeholder="Enter Parent Name" />



      <input type="password" name="parent_key" required style="position: relative; top:50px; width:85%; margin-bottom:10px; padding-left:10px; height:33px; border:1px solid #E9E9E9" placeholder="Enter Parent Password" />



      <input type="submit" name="parent_login" id="parent_login" data-target="#parent_login" data-toggle="modal" style="position:relative;top:50px;width:87.6%;margin-bottom:10px;padding-left:10px;height:38px;border:1px solid #005099;background-color:#005099;color:#FFF;font-size:17px;font-weight:bold;" placeholder="Check" />



    </form>

  </div>

  <div id="homeworkdiv" style="height: 427px;padding: 10px;margin: 0px auto;background-color: rgb(251, 251, 251);border-radius: 5px;border: 1px solid rgb(233, 233, 233);text-align: center;display: none;" class="container">

    <h1>Home Works</h1>

    <table class="table table-responsive">

      <thead>

        <th>Grades</th>

        <th>HomeWorks</th>

        <th>Actions</th>

      </thead>

      <tbody>

        <?php while($homework=mysqli_fetch_array($homeworkquery,MYSQLI_ASSOC)){ 

          ?>

          <tr>

            <td>

              <?php echo $homework['GradeID']; ?>

            </td>

            <td>

              <?php echo $homework['name2']; ?>

            </td>

            <td>

              <?php

              $home=$homework['name37'];



              $array =  explode(',', $home);



              foreach ($array as $item) {

                ?>

                <a href="http://thebridgesschool.pk/lmsadmin.thebridgesschool.pk/uploads/<?= $item;?>" >Download</a>

                <?php

              }

              ?>   </td>

            </tr>



            <?php   

          }

          ?>

        </tbody>

      </table>







    </div>









  </div>

  <!--end model -->



  <!-- model -->

  <div class="header" id="homeworkdetails" style=" margin-top:0px; background-image:none; width:50%; margin:auto;display: none;position: absolute;z-index: 9999;margin-left: 22%;margin-top: 10%">

    <span class="cross">

      <button type="button" class="close" data-dismiss="modal">&times;</button>

    </span>

    <div id="parent_home" style="width:50%;height: 331px; padding:10px; margin:0 auto; background-color:#FBFBFB; border-radius:5px; border:1px solid #E9E9E9;text-align: center;">

      <h1 align="center" style="margin-top: 14px;">Home work Login</h1>

      <form action="" method="post" id="">







        <input type="text" name="parent_name" required style="position: relative; top:50px; width:85%; margin-bottom:10px; padding-left:10px; height:33px; border:1px solid #E9E9E9" placeholder="Enter Parent Name" />



        <input type="password" name="parent_key" required style="position: relative; top:50px; width:85%; margin-bottom:10px; padding-left:10px; height:33px; border:1px solid #E9E9E9" placeholder="Enter Parent Password" />



        <input type="submit" name="parent_login" id="parent_login" data-target="#parent_login" data-toggle="modal" style="position:relative;top:50px;width:87.6%;margin-bottom:10px;padding-left:10px;height:38px;border:1px solid #005099;background-color:#005099;color:#FFF;font-size:17px;font-weight:bold;" placeholder="Check" />



      </form>

    </div>









  </div>



  <header>



    <nav div class="navbar navbar-static-top" role="navigation">



      <div class="container" style="padding-left: 5px;padding-right: 0px;">



        <div class="navbar-brand">



          <a href="index.php">



            <img src="img/logo.png" alt="Logo">



          </a>



          <div class="logo-desc">



            <a href="index.php">



              <h1>



                THE BRIDGES SCHOOL



              </h1>



              <h2 class="border-top" style="  text-transform: initial;">Sowing the Seeds of Lifelong Learning</h2>



            </a>



          </div>  



        </div>



        <div class="rightTopBox">



          <center>



            <ul class="social-network" style="margin:20px 20px">



              <li><a href="https://www.facebook.com/thebridgesschool/" title="Facebook" target="_blank"><img src="img/social_icon/facebook.png" alt=""></a></li>



              <li><a href="https://www.linkedin.com/in/bridges-school-55b327145/" title="linked-in" target="_blank"><img src="img/social_icon/linked-in.png" alt=""></a></li>



              <li><a href="https://twitter.com/BridgesSchool1" title="twitter" target="_blank"><img src="img/social_icon/twitter.png" alt=""></a></li>



              <li><a href="https://www.youtube.com/channel/UCP9rgVdPygtzSVsMbGwqZWg" title="youtube" target="_blank"><img src="img/social_icon/youtube.png" alt=""></a></li>



              <li><a href="https://www.instagram.com/thebridgesschool158/?hl=en" title="instagram" target="_blank"><img src="img/social_icon/insta.png" alt="" style="    padding: 0.19%;"></a></li>



            </ul>
            <ul class="social-network-button">



              <li style=""><a href="#"><span class="homework_backgroundColor">Parents' Feedback</span></a></li>



              <li><a href="#" data-target="#homeworkModel" data-toggle="modal" href="#homeworkModel" ><span class="ParrentsFeedBack_backgroundColor">Home Work</span></a></li>
            </ul>
            </center>



            </div>



          </div>



        </nav>





        <nav class="container navbar navbar-default navbar-static-top" role="navigation" style="z-index: 1;padding-left: 0px;">



          <div class="navigation">



            <div class="container">



              <div class="navbar-header">



                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">



                 <span class="sr-only">Toggle navigation</span>



                 <span class="icon-bar"></span>



                 <span class="icon-bar"></span>



                 <span class="icon-bar"></span>



               </button>



             </div>







             <div class="navbar-collapse collapse">



              <div class="menu">



                <ul class="nav nav-tabs marginLeft" role="tablist">



                  <li role="presentation" class="menu_cell"><a href="#!" class="" id="home">Home</a></li>



                  <li role="presentation" class="menu_cell"><a href="#!" class="" id="about">About</a></li>



                  <li role="presentation" class="menu_cell"><a href="#!" id="operation"> Operation & Procedures</a></li>



                  <li role="presentation" class="menu_cell"><a href="#!" id="academic">Academic & Curriculum</a></li>



                  <li role="presentation" class="menu_cell"><a href="#!" id="tbs">TBS Life, Outreach & Admissions</a></li>



                  <li role="presentation" class="menu_cell"><a href="#!" id="performance">Performance & Support</a></li>



                </ul>



              </div>



            </div>



          </div>



        </div>
<style type="text/css" media="screen">
  #animateSlideSubmanuebg
    {
      position:absolute;color:#fff;background-color: #005099;width: 97.5%;height: 35px;margin-bottom: -1px;margin-left: 0.5%;z-index: -1;display: none;
    }
  .animateSlideSubmanue
    {
      width: 99%;height: 35px;margin-bottom: -1px;z-index: 7777;display: none;
    }
  .animateSlideSubmanue a{float: left;margin-left: 3%;text-transform: none;color: #fff;margin-top: 0.5%;}
</style>
	    <center>

      <div id="animateSlideSubmanuebg">
        
      </div>
      <div class="animateSlideSubmanue" id="aboutSubManue">
        <a href="#about_tbs">About TBS</a>
        <a href="#our_mission">Our Mission</a>
        <a href="#our_pedagogy">Our Pedagogy</a>
      </div>
      <div class="animateSlideSubmanue" id="operation_procedures">
        <a href="#oprationProcedure">Operation & Procedures</a>
        <a href="#TheFirst">First Day</a>
        <a href="#ArrivingSchool">Arriving at School</a>
        <a href="#ParentsRelations">Parents Relations</a>
        <a href="#HealthIssues">Health Issues</a>
        <a href="#Things_Know">Things to Know</a>
      </div>
      <div class="animateSlideSubmanue" id="Academic_Curriculum">
        <a href="#PersonalSocial">Personal Social & Physical Development</a>
        <a href="#CreativityDevelopment">Creativity Development</a>
        <a href="#LanguageHistory">Language History</a>
        <a href="#Sciences">Sciences</a>
        <a href="#MathEconomics">Math & Economics</a>
      </div>
      <div class="animateSlideSubmanue" id="tbs_submenu">
        <a href="#OtreachParents">Otreach Parents & Community Relations</a>
        <a href="#MonthlyNewsletter">Monthly Newsletter</a>
        <a href="#AdmissionsAndSupport">Admission & Support</a>
        <a href="#SPOAF">Student Placement & Online Admissions Forms</a>
      </div>
    </center>

      </nav>



      <!-- sub menu -->



      <!-- subpage slide -->



      <!-- sub menu end -->



      <!-- Slider --> 



      <div class="container BannerSize" style="padding-left: 4px !important;padding-right: 17px !important;">



        <div id="myCarousel" class="carousel slide" data-ride="carousel" style=""><!-- background-color: #004e92;border-radius: 0px 0px 40px 40px; -->



          <!-- updates -->



          <div class="rightUpdates" style="">



            <img src="img/remember.png" />



            <hr/> 



            <marquee class="marquee" behavior="scroll" scrollamount="1" scrolldelay="1"  direction="down" onmouseover="this.stop();" onmouseout="this.start();" style="">  



              <?php               



              $result=mysqli_query($con,"SELECT * FROM tbl_site_news ");



              while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))



              {



                ?>



                <font class="news_feed"> <?php echo $row['news']; ?> </font>
                <hr/>
                <font class="news_feed"> <?php //echo $row['event_title'].'<br/>'.$row['event_date']; ?> </font>



                <?php



              }



              ?>



              



            </marquee>



          </div>



          <!-- Indicators -->



          <ol class="carousel-indicators">



            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>



            <li data-target="#myCarousel" data-slide-to="1"></li>



            <li data-target="#myCarousel" data-slide-to="2"></li>



            <li data-target="#myCarousel" data-slide-to="3"></li>



            <li data-target="#myCarousel" data-slide-to="4"></li>



            <li data-target="#myCarousel" data-slide-to="5"></li> 



          </ol>







          <?php 



          $result=mysqli_query($con,"SELECT * FROM tbl_header_images where 1=1");







          while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))



          {







            //$file_path = 'http:/01/thebridgesschool.pk/bridges-high-school/website/';
            $file_path = 'http://bridges.com/';







            $srcimg1=$file_path.$row['pic1'];



            $srcimg2=$file_path.$row['pic2'];



            $srcimg3=$file_path.$row['pic3'];



            $srcimg4=$file_path.$row['pic4'];



            $srcimg5=$file_path.$row['pic5'];



            $srcimg6=$file_path.$row['pic6'];



          }







          ?>



          <!-- Wrapper for slides -->

          <style type="text/css" media="screen">



        </style>

        <div class="carousel-inner marginLeftBanner" style="">



          <div class="item active">



            <img src="<?php echo $srcimg1; ?>" alt="Image1" style="width:100%;">



          </div>







          <div class="item">



            <img src="<?php echo $srcimg2; ?>" alt="Image2" style="width:100%;">



          </div>







          <div class="item">



            <img src="<?php echo $srcimg3; ?>" alt="Image3" style="width:100%;">



          </div>







          <div class="item">



            <img src="<?php echo $srcimg4; ?>" alt="Image4" style="width:100%;">



          </div>



          <div class="item">



            <img src="<?php echo $srcimg5; ?>" alt="Image4" style="width:100%;">



          </div>



          <div class="item">



            <img src="<?php echo $srcimg6; ?>" alt="Image4" style="width:100%;">



          </div>



        </div>











      </div>



    </div>



    <!-- image slider end -->



  </header>



  <div class="clearfix">
    <div class="outerSocialIcone">
      <center>
        <div class="socialIcons" style="">
          <a href="https://www.facebook.com/thebridgesschool/" target="_blank"><img src="img/social_icon/facebook.png" alt="facebook" /></a>
          <a href="https://www.linkedin.com/in/bridges-school-55b327145/" target="_blank"><img src="img/social_icon/linked-in.png" alt="Linked-in" /></a>
          <a href="https://twitter.com/BridgesSchool1" target="_blank"><img src="img/social_icon/twitter.png" alt="twitter" /></a>
          <a href="https://www.youtube.com/channel/UCP9rgVdPygtzSVsMbGwqZWg" target="_blank"><img src="img/social_icon/youtube.png" alt="youtube" /></a>
          <a href="https://www.instagram.com/thebridgesschool158/?hl=en" target="_blank"><img src="img/social_icon/insta.png" alt="instagram" /></a>
          <b id="close">X</b>        
        </div>
      </center>
    </div>
    <?php include 'partials/HomeContent.php';?>
    <?php //include 'partials/AboutContent.php';?>
    <?php //include 'partials/OprationsContent.php';?>
    <?php //include 'partials/AccademicContent.php';?>
    <?php //include 'partials/TBSContent.php';?>
    <?php //include 'partials/PerformanceContent.php';?>
  </div>
  <div  class="container clearfix" style="margin-bottom: 17px;margin-top: 17px;">

    <div class="MobFull" style="float: left;width: 47%;margin-top: -3%;">

      <form class="well form-horizontal" action=" " method="post"  id="contact_form">

        <fieldset>



          <!-- Form Name -->

          <legend>Contact Us</legend>



          <!-- Text input-->



          <div class="form-group">  

            <div class="col-md-12 inputGroupContainer">

              <div class="input-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

                <input  name="first_name" placeholder="Your Name" class="form-control" required="true" type="text">

              </div>

            </div>

          </div>





          <!-- Text input-->

          <div class="form-group"> 

            <div class="col-md-12 inputGroupContainer">

              <div class="input-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>

                <input name="email" placeholder="E-Mail Address" class="form-control" required="true" type="text">

              </div>

            </div>

          </div>





          <!-- Text input-->



          <div class="form-group">  

            <div class="col-md-12 inputGroupContainer">

              <div class="input-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>

                <input name="phone" placeholder="+92-345-6789123" class="form-control" required="true" type="text">

              </div>

            </div>

          </div>



          <!-- Text area -->



          <div class="form-group">

            <div class="col-md-12 inputGroupContainer" style="margin: 7px">

              <div class="input-group">

                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil" style="left: -7px;"></i></span>

                <textarea class="form-control" name="comment" required="true" placeholder="Your Message..."></textarea>

              </div>

            </div>

          </div>



          <!-- Success message -->

          <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Your message has been send...</div>



          <!-- Button -->

          <div class="form-group">

            <label class="col-md-4 control-label"></label>

            <div class="col-md-4" style="float: right;">

              <button type="submit" name="submitForm" style="float: right;border-radius: 17px;" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>

            </div>

          </div>



        </fieldset>

      </form>

      <?php

      if(isset($_POST['submitForm']))

      {

        $to = "info@thebridgesschool.pk ";

        $from = $_POST['email'];

        $subject = "ThrBridgesSchool Contact Form";

        $first_name = $_POST['first_name'];

        $email = $_POST['email'];

        $phone = $_POST['phone'];

        $comment = $_POST['comment'];

        $headers = "From:" . $from;

        $message = $first_name . "\n" . $email . "\n" . $phone . "\n\n" . $comment ;

        mail($to,$subject,$message,$headers);

      }      

      ?>

    </div>



    <iframe class="MobFull" style="float: left;margin-left: 26px;border-radius: 17px;margin-top: -5px;" width="50.1%" height="260" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=bridges+pre+school+152+abu+bakar+block+garden+town+lahore&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=65.81231,91.494141&amp;ie=UTF8&amp;hq=bridges+pre+school+152+abu+bakar+block&amp;hnear=Garden+Town,+Lahore,+Lahore+District,+Punjab,+Pakistan&amp;t=m&amp;cid=9937877046851070933&amp;ll=31.523971,74.324055&amp;spn=0.018291,0.04283&amp;z=14&amp;iwloc=A&amp;output=embed">



      <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=bridges+pre+school+152+abu+bakar+block+garden+town+lahore&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=65.81231,91.494141&amp;ie=UTF8&amp;hq=bridges+pre+school+152+abu+bakar+block&amp;hnear=Garden+Town,+Lahore,+Lahore+District,+Punjab,+Pakistan&amp;t=m&amp;cid=9937877046851070933&amp;ll=31.523971,74.324055&amp;spn=0.018291,0.04283&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>

    </iframe>



  </div>



  <footer>





    <div class="">



      <div class="container">



        <div class="row">











          <div class="col-md-12 f-contact">

            <p>
              <span><i class="fa fa-envelope"></i><a href="mailto:info@thebridgesschool.pk" style="color: #8a8d94;text-transform: none;">info@thebridgesschool.pk </a></span>

             <span><i class="fa fa-phone"></i><a href="tel:04235844869" style="color: #8a8d94;text-transform: none;">(92-42) 35844869 </a></span>



             <span><i class="fa fa-fax"></i>(92-42) 35913470 </span> 



             <span><i class="fa fa-home"></i> 152, Abu Bakar Block , New Garden Town</span>
          </p>



           </div>



         </div>



       </div>



     </div>











   </footer>



   <!-- Include all compiled plugins (below), or include individual files as needed -->



   <script src="js/bootstrap.min.js"></script>

	<script>
	/* When the user clicks on the button,
	toggle between hiding and showing the dropdown content */
	function myFunction() {
	    document.getElementById("myDropdown").classList.toggle("show");
	}

	function filterFunction() {
	    var input, filter, ul, li, a, i;
	    input = document.getElementById("myInput");
	    filter = input.value.toUpperCase();
	    div = document.getElementById("myDropdown");
	    a = div.getElementsByTagName("a");
	    for (i = 0; i < a.length; i++) {
	        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
	            a[i].style.display = "";
	        } else {
	            a[i].style.display = "none";
	        }
	    }
	}
	</script>


   <!-- <script src="js/wow.min.js"></script> -->



   <script src="js/jquery.fancybox.pack.js"></script>



   <script src="js/jquery.easing.1.3.js"></script>



   <!-- <script src="js/jquery.bxslider.min.js"></script> -->



   <script src="js/functions.js"></script>



   <script src="js/bootstrap-dropdownhover.js"></script>



   <!-- js from live -->



   <script type="text/javascript" src="js/navigation.js"></script> <!-- for ols js slide -->



 <!--  <script type="text/javascript" src="js/jquery.js"></script>



  <script type="text/javascript" src="js/scripts.js"></script>



  <script type="text/javascript" src="js/bjqs-1.3.min.js"></script>



  <script type="text/javascript" src="js/jquery.validate.js"></script> -->



  <script>



    $(document).ready(function(){



     $('#parentLoginForm').submit(function(e) {

      e.preventDefault();

            // console.log($(this).serialize());

            $.ajax({

             type: "POST",

             url: 'parents_login.php',

             data: $(this).serialize(),

             success: function(data)

             {

                //   console.log(data);

                if (data == 'loggedIn') {

                  alert("Logged-in");

                  $("#homeworkdiv").show(1000);

                  $("#parent_home").hide(1000);

                }

                else {

                  alert("Logged-in Failed");

                }

              }

            });

          });





     $("#home").click(function(){


      $(".home_div").show();

      $("#animateSlideSubmanuebg").hide("slow");

      $("#aboutSubManue").hide();

      $("#operation_procedures").hide();

      $("#Academic_Curriculum").hide();

      $("#tbs_submenu").hide();

      $(".about_div").hide();

      $(".operation_div").hide();

      $(".academic_div").hide();

      $(".performance_div").hide();

      $(".tbs_div").hide();





    });



     $("#about").click(function(){



      $(".about_div").show();

      $("#animateSlideSubmanuebg").show();

      $("#aboutSubManue").show("slow");
      
      $("#operation_procedures").hide();

      $("#Academic_Curriculum").hide();

      $("#tbs_submenu").hide();

      $(".home_div").hide();

      $(".operation_div").hide();

      $(".academic_div").hide();

      $(".performance_div").hide();

      $(".tbs_div").hide();

    });



     $("#operation").click(function(){



      $(".operation_div").show();

      $("#animateSlideSubmanuebg").show();

      $("#aboutSubManue").hide();
      
      $("#operation_procedures").show("slow");

      $("#Academic_Curriculum").hide();

      $("#tbs_submenu").hide();

      $(".about_div").hide();

      $(".home_div").hide();

      $(".academic_div").hide();

      $(".performance_div").hide();

      $(".tbs_div").hide();

    });



     $("#academic").click(function(){



      $(".academic_div").show();

      $("#animateSlideSubmanuebg").show();

      $("#aboutSubManue").hide();
      
      $("#operation_procedures").hide();

      $("#Academic_Curriculum").show("slow");

      $("#tbs_submenu").hide();

      $(".operation_div").hide();

      $(".about_div").hide();

      $(".home_div").hide();

      $(".performance_div").hide();

      $(".tbs_div").hide();

    });



     $("#tbs").click(function(){



      $(".tbs_div").show();

      $("#animateSlideSubmanuebg").show();

      $("#aboutSubManue").hide();
      
      $("#operation_procedures").hide();

      $("#Academic_Curriculum").hide();

      $("#tbs_submenu").show("slow");

      $(".academic_div").hide();

      $(".operation_div").hide();

      $(".about_div").hide();

      $(".home_div").hide();

      $(".performance_div").hide();

    });



     $("#performance").click(function(){



      $(".performance_div").show();

      $("#animateSlideSubmanuebg").hide("slow");

      $("#aboutSubManue").hide();
      
      $("#operation_procedures").hide();

      $("#Academic_Curriculum").hide();

      $("#tbs_submenu").hide();

      $(".tbs_div").hide();

      $(".academic_div").hide();

      $(".operation_div").hide();

      $(".about_div").hide();

      $(".home_div").hide();

    });
     $("#toggleee").click(function(){

      $("#togglee").Toggle();
    });
      $(".SocialMedia").click(function()
        {
          $(".outerSocialIcone").show('slow');
        });
      
      $("#close").click(function()
        {
          $(".outerSocialIcone").hide('slow');
        });
   });

 </script>

<script>
  //fhk lazyloader
  console.log("Making sure images have fallback options. BASE:" + "<?=base_url();?>");
  var images = document.getElementsByTagName('img'); 
  for(var i = 0; i < images.length; i++) {
    if(images[i].getAttribute('dsrc'))
      images[i].setAttribute('src', images[i].getAttribute('dsrc'));
    
    images[i].onerror = function(){
        this.onerror=null;
      this.src= "<?=base_url();?>img/noPicture.png";
    };
  }
</script>
</body>

</html>



