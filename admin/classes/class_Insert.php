<?php
	include("class_Admin.php");
	class Insert extends Admin
	{

		function insert_user($full_name,$user_name,$email,$user_role,$status,$password)
		{
			$query="";
			$query="INSERT INTO `user` (`full_name`,`user_name`,`email_address`,`user_role`,`status`,`password`) values('$full_name','$user_name','$email','$user_role','$status','$password')";
			$result=mysql_query($query);
			if($result)
			{
				$feedback="<div class=\"success\">Successfully Created !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Insert'.mysql_error() .'</div>';
			}
			return $feedback;
		}

        function insert_faq_answer($question,$answer_heading,$answer,$category_id,$tag,$faq_publish_date,$status)
        {
            $query="";
            $query="INSERT INTO `tbl_faq` (`faq`,`faq_answer_demo`,`faq_answer`,`faq_category_id`,`tag`,`faq_publish_date`,`publish_status`) values('$question','$answer_heading','$answer','$category_id','$tag','$faq_publish_date','$status')";
            $result=mysql_query($query);
            if($result)
            {
                $feedback="<div class=\"success\">Successfully Save !</div>";
            }
            else
            {
                $feedback='<div class="error">Problem to Save'.mysql_error() .'</div>';
            }
            return $feedback;
        }


		function insert_category($faq_name)
        {
            $query="INSERT INTO `tbl_faq_category` ( `faq_category_name`)VALUE ('$faq_name')";
            $result=mysql_query($query);

            if($result)
            {
                $feedback="<div class=\"success\">Successfully Save !</div>";
            }
            else
            {
                $feedback='<div class="error">Problem to Save'.mysql_error() .'</div>';
            }
            return $feedback;
        }


		
	}
?>