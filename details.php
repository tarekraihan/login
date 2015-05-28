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
        if(isset($_GET['faq_id']))
        {
            $faq_id=$_GET['faq_id'];
            $result=$main->Select_All_By_Id1($faq_id,$table="tbl_faq",$field_name="faq_id");


            while($data=mysql_fetch_array($result))

            {?>
                <div class="row no-margin">
                    <div class="row_2 no-margin">
                        <div class="question_txt"><span style="font-size: 18px ; font-weight: bold;">  প্রশ্নঃ<?php echo " ".$data[2];?></span> </div>
                        <div class="question_bd_txt"><span style="font-size: 18px ; font-weight: bold;"> উত্তরঃ  </span> <?php echo " ".$data[3];?>
                            <a href="index.php?faq=2&&faq_id=<?php echo $data[0];?>"></div>

                    </div>
                </div>
            <?php

            }

        }

        ?>


        <div class="row no-margin">

            <div class="row_1 no-margin">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                    <div class="fb-comments" data-href="http://localhost/magistrates/index.php?faq=2&&faq_id=<?php echo $faq_id;?>" data-numposts="5" data-colorscheme="light"></div>
                </div>
            </div>
        </div>


    </div>
