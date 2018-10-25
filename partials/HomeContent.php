<style type="text/css" media="screen">
	.logo1{margin-top: 35%;}
	.story_text_container{}
	/*h3{margin-top: 0px !important;padding-top: 0px !important;}*/
</style>
<div class="home_div" id="home_div"> <!-- home div start -->

<!-- home story 1 start -->

<div id="events_container">

	<?php


        $result=mysqli_query($con,"SELECT * FROM tbl_event_club where Show_web='Yes'  ORDER BY Date_Occur DESC Limit 1 ");

        while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))

        {

            $id=$row['id'];

            $file_path = 'http://thebridgesschool.pk/bridges-high-school/Events-Calender-Planner/upload/';

            $file_path1 = 'http://thebridgesschool.pk/bridges-high-school/Events-Calender-Planner/';

            $club_logo=$file_path.$row['logo1'];

            $larger_org=$file_path.$row['logo2'];

            $static_image1=$file_path.$row['pic1'];

            $static_image2=$file_path.$row['pic2'];

            $slide_show3=$file_path.$row['pic3'];

            $slide_show4=$file_path.$row['pic4'];

            $slide_show5=$file_path.$row['pic5'];

            $slide_show1=$file_path.$row['pic6'];

            $slide_show2=$file_path.$row['pic7'];

            $catname=$row['id'];            

    	?>

        <div class="sep_ext_st"></div>

        <div class="story_container"> <!-- story container start from here -->

            <div class="events_text_container"> <!-- events text container start -->

                <div class="events_heading">

                    <h3 style="position:relative;margin-top: 0px !important;padding-top: 0px !important;">
						
                    	<span class="textLevelOne">Bridge's <?php echo $row['Organized_by']; ?> <?php if($row['Par_largeComunity']!='') { ?> & the <?php echo $row['Par_largeComunity']; } echo ' '; ?>  Presents:</span> <br/> <?php echo $row['Activiity_Name']; echo '<span style="font-size:14px;">'; if($row['type']){ echo ' ('; echo $row['type']; echo ')'; } echo'</span>'; ?>  

                        <!-- <br/>     -->

						<?php   // 31.07.2012   ?> 

                    </h3>

                </div>

                <div class="events_description">

                    <P class="textLevelThree">

                        <?php echo $row['Summary']; ?>

                    </P>

                </div>

            </div> <!-- events text container end -->

            <div class="events_logo hidden-sm hidden-xs">

                <div class="logo1"> <img src="<?php echo $club_logo; ?>" width="75"  /> </div>
                <!-- ../images/red-logo.png -->
                <?php if($larger_org!="http://thebridgesschool.pk/bridges-high-school/Events-Calender-Planner/upload/") {?>
                <div class="logo2" style=""> <img src="<?= $larger_org?>"  width="75" style="" /> </div>
				<?php } ?>
            </div>

            <div class="events_pic1" style="width:230px; height:230px;"> <img src="<?php echo $static_image1; ?>" width="230" height="230" style="border-radius: 17px;"/> </div>

            <div class="events_pic2" style="width:230px; height:230px;"> 
            	<?php //echo $static_image2; ?>
            	<img src="http://bridges.com/fhk/image2.jpg" width="230" height="230" id="slide_show"  style="border-radius: 17px;" />

                <div style="width:243px; height:26px; margin:auto; position:relative; top:-47px;"> 
                	<!-- background-image:url(imgs/view-slide-show.png); -->

                    

                    <!--<script>

                    $(document).ready(function(){

                            /*$("#view_slide<php //echo $row['id'];?>").click(function(){

                                $.ajax({url: "slide_show_images.php?planner_id=<php //echo $row['id']?>", success: function(result){

                                    $("#view_slide_images<php //echo $row['id'];?>").slideDown(700);

                                    $("#view_slide_images<php //echo $row['id'];?>").html(result);

                                }});

                            });*/

                        });

                    </script>-->

    

                    <div id="view_slide_images<?php echo $row['id'];?>" style="width:100%;height:2000px;position:fixed;top:0px;display:none;left:0px;background-color:rgba(204, 204, 204, 0.5);z-index:500;">

                      	<div style="width:600px;height:600px;border:10px solid #000;margin:0 auto; margin-top:20px; border-radius:6px;">

                        	<div id="cross_slider_images<?php echo $row['id'];?>" style="width:33px;height:33px;border-radius:50px;background-color:#FFFFFF;float:right;position:absolute;z-index:50;margin-left:582px;margin-top:-20px;border:2px solid #000;font-family:calibri;font-size:22px;line-height:31px;font-weight:bold;color:#F00;">X</div>                                  

                      		<div id="jssor_1" style="position: relative; top: 0px; left: 0px; width: 600px; height: 600px; overflow: hidden; visibility: hidden; background-color: #24262e;">

                            	<div data-u="loading" style="position: absolute; top: 0px; left: 0px; border:none;">

                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>

                                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>

                                </div>

                            	<div data-u="slides" style="cursor: pointer; position: relative; top: 0px; left: 0px; width: 600px; height: 600px; overflow: hidden; border:none;">

                                	<div data-p="144.50" style="display: none;">

                                        <img data-u="image" src="bridges-high-school/Events-Calender-Planner/upload/<?php echo $row['pic1'];?>" height="300" width="300"/>

                                    </div>

                                    <div data-p="144.50" style="display: none;">

                                        <img data-u="image" src="bridges-high-school/Events-Calender-Planner/upload/<?php echo $row['pic2'];?>" height="300" width="300"/>

                                    </div>

                                    <div data-p="144.50" style="display: none;">

                                        <img data-u="image" src="bridges-high-school/Events-Calender-Planner/upload/<?php echo $row['pic3'];?>" height="300" width="300"/>

                                    </div>

                                    <div data-p="144.50" style="display: none;">

                                        <img data-u="image" src="bridges-high-school/Events-Calender-Planner/upload/<?php echo $row['pic4'];?>" height="300" width="300"/>

                                    </div>

                                    <div data-p="144.50" style="display: none;">

                                        <img data-u="image" src="bridges-high-school/Events-Calender-Planner/upload/<?php echo $row['pic5'];?>" height="300" width="300"/>

                                    </div>

                                    <div data-p="144.50" style="display: none;">

                                        <img data-u="image" src="bridges-high-school/Events-Calender-Planner/upload/<?php echo $row['pic6'];?>" height="300" width="300"/>

                                    </div>

                                    <div data-p="144.50" style="display: none;">

                                        <img data-u="image" src="bridges-high-school/Events-Calender-Planner/upload/<?php echo $row['pic7'];?>" height="300" width="300"/>

                                    </div>

                                </div>

                                <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:600px;height:100px;" data-autocenter="1">

                                    <div data-u="slides" style="cursor: default;">

                                        <div data-u="prototype" class="p">

                                            <div class="w">

                                                <div data-u="thumbnailtemplate" class="t"></div>

                                            </div>

                                        <div class="c"></div>

                                        </div>

                                    </div>

                                </div>

                                <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>

                                <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>

                            </div>

                    	</div>                              

        			</div>

                	<div style="clear:both;"></div>

    				<p id="view_slide<?php echo $row['id'];?>" style="cursor:pointer;font-weight:bold;font-size:16px;text-decoration:underline;font-style:normal;text-align: center;">
						<a style="color:#fff;" href="view-slide-show-images.php?id=<?php echo $row['id'];?>" target="_blank">View Slide Show</a>
					</p>

                </div> 

            </div>

        </div> <!-- story container ends here -->

    <?php }  ?>

</div>

<div class="story_ban"></div>

<div class="story_bottom_extra"></div>

<!-- home story 1 end -->

<!-- Section 2 start -->

						

						<?php 
							//this function is in Generic.php
							$res= loadWebContent($con, "home");

							//$result3 = mysqli_query($con,"SELECT * FROM web_content where  Show_web = 'yes' ");
							$i=0;

						?>

                        <?php	

							

						

								while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))	{	
								// print_r($row);
									$i++;
									//var_dump($_SERVER['SERVER_NAME']); die("EOF");
									$file_path = base_url();

									$src1=$file_path.$row['logo1'];

									$src2=$file_path.$row['logo2'];

									$catname=$row['id'];

							?>

							<div class="story_container"> <!-- story container starts -->

								<div class="story_text_container" style="overflow:hidden;margin-top: 3.5%;">

									<div class="story_heading_container_events">

										<h3 style="margin-top: 0px !important;padding-top: 0px !important;">
										<br/>
											 <?php 
						$allowEdit= $testSession? 'contenteditable="true"': '';
						echo '<div '.$allowEdit.' class="textLevelOne">'.str_replace('\r\n',"",stripslashes(str_replace('"\"',"",stripslashes(str_replace('\\r',"\r",str_replace('\\n',"\n",$row['heading']))))));

						echo '</div><br/><div '.$allowEdit.' class="textLeveltwo">';

						echo str_replace('\r\n',"",stripslashes(str_replace('"\"',"",stripslashes(str_replace('\\r',"\r",str_replace('\\n',"\n",$row['heading_description']))))));

						echo '</div><div '.$allowEdit.' class="textLevelThree" style="float:right;">';

						echo str_replace('\r\n',"",stripslashes(str_replace('"\"',"",stripslashes(str_replace('\\r',"\r",str_replace('\\n',"\n",$row['heading_admin']))))));
						echo '</div>';
							?>

										</h3>

									</div>

									<!-- <div style="width:450px; height:15px; margin:auto;"></div> -->
									<!-- <h5 class="textLevelThree" >-->
									<div class="story_description_container" <?=$allowEdit;?>>

<!-- 
											As we wrap up this session with a “big bang”, we hope that our efforts of teaching the art of cross-learning will keep the students inspired to connect the dots of similarities between themes and concepts, which their summer endeavors may bring about. We need the support of parents to endorse this learning methodology during summer break and to keep fueling into the child’s curiosity. -->

							            	 <?php $content= str_replace('\r\n',"",stripslashes(str_replace('"\"',"",stripslashes(str_replace('\\r',"\r",str_replace('\\n',"\n",$row['description']))))));
							            	 	echo $content; //substr($content, 0, 100);
							            	 ?>  
									</div>

									<div class="story_below_container" id="victory_ban_<?=$i?>">

										<h6>

											<span id="victory_<?=$i?>" class="victory" > Read More </span><!-- &nbsp;&nbsp;&nbsp;&nbsp; <span> Share </span>  &nbsp;&nbsp;&nbsp;&nbsp; <span> Print </span> -->

										</h6>

									</div>

								</div>
								

								<div class="story_pic1"> <img src="<?php echo $src1; ?>" height="230" width="230"/> </div>

								<div class="story_pic2"> <img src="<?php echo $src2; ?>" height="230" width="230"/> </div>

							</div> <!-- story container end -->

							<div class="sep_ext"></div>

							<div class="story_readmore_container"  id="victory_div_<?=$i?>"> <!-- story read more start -->

								<div class="read_more_text" <?=$allowEdit;?>>

									

											<?php
												//$row['readmore'];
												echo str_replace('\r\n',"",stripslashes(str_replace('"\"',"",stripslashes(str_replace('\\r',"\r",str_replace('\\n',"\n", $row['readmore']))))));

												echo '<br/>';

												?>
								</div>
								<div class="read_more_extra"></div>

								<div class="story_closing_container">

									<h6>

										<span id="victory_close_<?=$i?>" class="victory_close"> Read Less </span> 
									</h6>

								</div>

								<div class="read_more_extra"></div>

							</div> <!-- story readmore end -->

							

							<div class="story_ban"></div>

							<div class="story_bottom_extra"></div>

							<?php }

							





						?>

<!-- SECTION 2 end -->

				<div class="MobFull" style="width:1000px; height:40px; margin:auto; background-color:; position:relative; top:20px;"></div> 



					</div>

                    <script>

                        $(document).ready(function(e) {

                            $("#view_slide<?php echo $row['id'];?>").click(function(e) {

                                $("#view_slide_images<?php echo $row['id'];?>").slideDown(700);

                            });

                            $("#cross_slider_images<?php echo $row['id'];?>").click(function(e) {

                                $("#view_slide_images<?php echo $row['id'];?>").slideUp(700);

                            });

                            

                        });

                    </script>

                            <!-- <script>

                            jssor_1_slider_init();

                            </script> -->



                            <script>

                                $(document).ready(function(e) {

                                    $("#homework_last").click(function(e) {

                                             $("#homework_last").hide(200);

                                             $("#homework_ban_last").hide(200);

                                             $("#victory_last_div").show(200);

                                             

                                    });

                                    $("#vicory_close_last").click(function(e) {

                                             $("#story_closing_container_last").hide(200);

                                             $("#victory_last_div").hide(200);

                                             $("#homework_ban_last").show(200);

                                             $("#homework_last").show(200);

                                             

                                    });

                                });

                            </script>