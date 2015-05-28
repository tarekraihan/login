<?php
include("class_Update.php");
class Delete extends Update
{
	function Delete_Single_Row($id,$table,$field_name)
	{
		$feedback="";
		$query="DELETE FROM `$table` WHERE `$field_name`='$id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div id=\"message\" class=\"success message\">Successfully Deleted !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Deleted'.mysql_error() .'</div>';
			}
			return $feedback;	
	}

    function  Delete_file($path)
    {
        unlink($path);
    }
	
}

?>