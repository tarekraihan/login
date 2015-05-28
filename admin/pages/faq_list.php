<?php
$feedback="";
if(isset($_GET['faq_question_id']))
{
    $faq_id=$_GET['faq_question_id'];
    $feedback=$main->Delete_Single_Row($faq_id,$table="tbl_faq",$field_name="faq_id");
}

?>



<div class="row">

    <div class="panel panel-primary">

        <div class="panel-heading article_heading">
            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
            QUESTION BANK
        </div>

        <div class="panel-body">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive article_table">
                        <table class="table">
                            <tr class="active">
                                <td class="table_heading">&nbsp;</td>
                                <td class="table_heading">QUESTION TITLE</td>
                                <td class="table_heading">QUESTION CATEGORY</td>
                                <td class="table_heading">STATUS</td>
                                <td class="table_heading">EDIT</td>
                            </tr>


                                <?php

                                $result=$main->Select_All_Faq();

                                while($data=mysql_fetch_array($result))

                                {?>
                            <tr>
                                    <td><input type="checkbox" value=""></td>
                                    <td><?php echo $data[2]; ?></td>
                                    <td><?php echo $data[5]; ?></td>
                                    <td>
                                        <?php
                                            if($data[4]==1)
                                            {
                                                echo "প্রকাশিত ";
                                            }
                                            else
                                            {
                                                echo "অপ্রকাশিত ";
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <span class="pull-right">
                                                            <a href="?page=4&&faq_question_id=<?php echo $data[0];?>" class="edit_delete_button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a>
                                                            <a href="?page=3&&faq_question_id=<?php echo $data[0];?>" onclick="return confirm(\'Are you really want to delete this item\')" ><span class="glyphicon glyphicon-trash " aria-hidden="true"></span> </a>
                                                          </span>
                                    </td>
                            </tr>
                                <?php

                                }
                                ?>




                        </table>
                    </div>
                </div>
            </div>
        </div><!-- panel body -->
    </div> <!-- panel strats -->

</div>