<?php
$feedback='dsfa';
if(isset($_GET['faq_question_id']))
{
    $question_id=$_GET['faq_question_id'];
    $data=$main->Select_All_By_Id($question_id,$table='tbl_faq',$field_name='faq_id');

}
if(isset($_POST['btnSubmit']))
{
    $faq=$_POST['txtQuestion'];
    $answer_heading=$_POST['txtAnswerHeading'];
    $answer=$_POST['txtAnswer'];
    $category_id=$_POST['selectCategory'];
    $tag=$_POST['txtTag'];
    $publish_date=date('Y-m-d');
    $status=$_POST['selectStatus'];

    $feedback=$main->Update_Faq($category_id,$faq,$answer,$answer_heading,$tag,$publish_date,$status,$question_id);

        $data[2]='';
        $data[4]='';
        $data[3]='';
        $data[5]='';
}
?>


<div class="panel panel-primary">
    <div class="row">
        <form action=" " method="post">
            <div class="panel panel-primary">

                <div class="panel-heading qustion_page_heading">
                    <span class="glyphicon glyphicon-folder-close"></span>
                    QUESTION / ANSWER
                </div>
                <br/>
                <?php

                if($feedback !='')
                {

                }
                else
                {
                    ?>
                    <div class="panel-heading qustion_page_heading">
                        <span class="glyphicon glyphicon-folder-close"></span>
                        <?php
                        echo $feedback;
                        ?>
                    </div>
                <?php
                }
                ?>


                <div class="panel-body">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <label class="sub_header">QUESTION</label>
                                    </div>
                                    <div class="panel-footer"><input type="text" name="txtQuestion" class="form-control" value="<?php echo $data[2];?>" placeholder="Write your question"></div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <label class="sub_header">ANSWER HEADING</label>
                                    </div>
                                    <div class="panel-footer"><textarea name="txtAnswerHeading" class="form-control"> <?php echo $data[4];?></textarea></div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <label class="sub_header">ANSWER</label>
                                    </div>
                                    <div class="panel-footer"><textarea name="txtAnswer" class="form-control content_text"> <?php echo $data[3];?></textarea></div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <label class="sub_header">SELECT CATEGORY</label>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="form-group">

                                            <select name="selectCategory" class="form-control">

                                                <?php echo $main->Select_Faq_Category(); ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <label class="sub_header">TAG</label>
                                    </div>
                                    <div class="panel-footer"><input type="text" name="txtTag" class="form-control"  value="<?php echo $data[5];?>" placeholder="Write Tag with comma separated "> </div>
                                </div>

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4">
                                <select  name="selectStatus" class="form-control draft_publish">
                                    <option value="1">Published</option>
                                    <option value="2">Draft</option>
                                </select>
                            </div>

                            <div class="col-lg-8 col-md-6 col-sm-8 col-xs-8">
                                <input type="submit" class="btn btn-success pull-right" style="margin-right:10px;" name="btnSubmit" value="Update" />
                                <input type="reset" class="btn btn-danger pull-right" style="margin-right:10px;" value="Reset" />

                            </div>

                        </div>

        </form>
    </div>

</div><!-- panel body -->


</div> <!-- panel strats -->

</div>
