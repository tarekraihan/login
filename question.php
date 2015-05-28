
	<div class="row no-margin">
	   <div class="inner_body">

	       <div class="row no-margin">
		    <div class="row_1 no-margin">
			  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
			    <div class="txt"><a href=""> মুদ্রা বহন </a></div>
			  </div>
			  
                  <div class="row no-margin">
                    <div class="search_box_1">
                         <div class="search_1">
                            <div class="input-group">
                                <input type="text" class="form-control search_opacity" placeholder="অনুসন্ধান করুন........"/>
                                  <span class="input-group-btn search_opacity">
                                    <button class="btn btn-default btn_search" type="button"><i class="fa fa-search search_icon"></i></button>
                                  </span>
                            </div><!--/input-group -->
                         </div>
                    </div>
                  </div>
			  </div>
		</div>

        <?php
            if(isset($_GET['faq']))
            {
                $Category_id=$_GET['faq'];
                $result=$main->Select_All_By_Id1($Category_id,$table="tbl_faq",$field_name="faq_category_id");


                while($data=mysql_fetch_array($result))

                {?>
                    <div class="row no-margin">
                        <div class="row_2 no-margin">
                           <div class="question_txt"><span style="font-size: 18px ; font-weight: bold;">  প্রশ্নঃ
                                   <a href="index.php?faq=2&&faq_id=<?php echo $data[0];?>" ><?php echo " ".$data[2];?></a>  </span> </div>
                            <div class="question_bd_txt"><span style="font-size: 18px ; font-weight: bold;"> উত্তরঃ  </span> <?php echo " ".$data[4];?>
                                <a href="index.php?faq=2&&faq_id=<?php echo $data[0];?>"><span style="color: #bd1113; ">...বিস্তারিত </span></a> </div>

                        </div>
                      </div>
                    <?php

                }

            }

        ?>


           <div class="row row_3 no-margin">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  back no-padding">
                   <a href="index.php"> <img src="images/back.jpg"/></a>
                   <p class="p_style_back">back to Home</p>
               </div>
           </div>


       </div>
	
