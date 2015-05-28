<?php
$feedback='dsfa';
if(isset($_GET['faq_category_id']))
{
    $faq_category_id=$_GET['faq_category_id'];
    $data=$main->Select_All_By_Id($faq_category_id,$table="tbl_faq_category",$field_name="faq_category_id");
}


if(isset($_POST['btnSubmit']))
{
    $faq_name=$_POST['txtCategory'];
    $feedback=$main->update_category($faq_name,$faq_category_id);
}


?>



<div class="row">

    <div class="panel panel-primary">

        <div class="panel-heading article_heading">
            <span class="glyphicon glyphicon-link" aria-hidden="true"></span>
            CATEGORY
        </div>

        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <form action=" " method="post">
                            <div class="form-group" style="margin-top:0px;">
                                <p class="categoty_name_text">ENTER CATEGORY NAME</p>
                                <input  type="text" name="txtCategory" value="<?php echo $data[1];?>" class="form-control category_name_insert">
                            </div>
                            <input type="submit" class="btn btn-success pull-right" value="Update" name="btnSubmit" />
                        </form>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                        <p class="created_category">CREATED CATEGORY</p>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">


                                <ul class="list-group">

                                    <?php

                                    $result=$main->Select_All($table="tbl_faq_category",$offset="0",$limit="6");

                                    while($data=mysql_fetch_array($result))

                                    {?>
                                        <li class="list-group-item">
                                            <?php echo $data[1];?>
                                            <span class="pull-right">
                                                            <a href="?page=5&&faq_category_id=<?php echo $data[0];?>" class="edit_delete_button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>
                                                             <a href="?page=2&&faq_category_id=<?php echo $data[0];?>" onclick="return confirm(\'Are you really want to delete this item\')"  class="edit_delete_button"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span> </a>
                                                          </span>
                                        </li>
                                    <?php

                                    }

                                    ?>

                                </ul>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <ul class="list-group">
                                    <?php

                                    $result=$main->Select_All($table="tbl_faq_category",$offset="6",$limit="6");

                                    while($data=mysql_fetch_array($result))

                                    {?>
                                        <li class="list-group-item">
                                            <?php echo $data[1];?>
                                            <span class="pull-right">
                                                            <a href="?page=5&&faq_category_id=<?php echo $data[0];?>" class="edit_delete_button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>
                                                            <a href="?page=2&&faq_category_id=<?php echo $data[0];?>" onclick="return confirm(\'Are you really want to delete this item\')"  class="edit_delete_button"><span class="glyphicon glyphicon-trash " aria-hidden="true"></span> </a>
                                                          </span>
                                        </li>
                                    <?php

                                    }

                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- panel body -->
    </div> <!-- panel strats -->

</div>