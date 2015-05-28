<?php
	include_once("class_Select.php");
class Update extends Select
{
	function Update_User_Info($id,$full_name,$userName,$email,$userRole,$status,$password)
	{
		$feedback="";
		$query="UPDATE user SET full_name='$full_name', user_name='$userName', email_address='$email', user_role='$userRole',status='$status', password='$password' WHERE id='$id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_Password($id,$newpass,$currpass)
	{
		$feedback="";
		$query="UPDATE `user` SET password='$newpass' old_password='currpass' WHERE id='$id'";
		$result=mysql_query($query);
		if($result)
		{
			$feedback='<div class="success">Successfully Updated!</div>';	
		}
		else
		{
			$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
		}
		return $feedback;	
	}
	
	function Update_Faq($faq_category_id,$faq,$faq_answer,$faq_answer_demo,$tag,$faq_publish_date,$publish_status,$faq_id)
	{
		$feedback="";
		$query="UPDATE `tbl_faq` SET `faq_category_id`='$faq_category_id',`faq`='$faq',`faq_answer`='$faq_answer',`faq_answer_demo`='$faq_answer_demo',`tag`='$tag',`faq_publish_date`='$faq_publish_date',`publish_status`='$publish_status' WHERE `faq_id`='$faq_id'";
		$result=mysql_query($query);
		if($result)
		{
			$feedback='<div class="success">Successfully Updated!</div>';	
		}
		else
		{
			$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
		}
		return $feedback;
	}

    function update_category($faq_name,$faq_category_id)
    {
        $query="UPDATE `tbl_faq_category` SET `faq_category_name`='$faq_name' WHERE `faq_category_id`='$faq_category_id'";
        $result=mysql_query($query);
        if($result)
        {
            $feedback='<div class="success">Successfully Updated!</div>';
        }
        else
        {
            $feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
        }
        return $feedback;
    }


    function Update_leave_type($type_id,$type)
	{
		$feedback="";
		$query="UPDATE leave_type SET type='$type' WHERE type_id='$type_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_employee_info($employee_id,$employeeName,$designation,$joiningDate,$fatherName,$motherName,$presentAddress,$parmanentAddress,$email,$mobileNo,$dateOfBirth,$gender,$nationality,$religion,$maritalStatus,$bloodGroup)
	{
		$feedback="";
		$query="UPDATE employee_info SET name='$employeeName', designation='$designation', joining_date='$joiningDate', father_name='$fatherName', mother_name='$motherName', present_address='$presentAddress', parmanet_address='$parmanentAddress', email='$email', phone_number='$mobileNo', date_of_birth='$dateOfBirth', sex='$gender', nationality='$nationality', religion='$religion', marital_status='$maritalStatus', blood_group='$bloodGroup' WHERE employee_id='$employee_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>"; 
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_Designation($designation_id,$designation)
	{
		$feedback="";
		$query="UPDATE designation SET designation='$designation' WHERE designation_id='$designation_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_Gender($gender_id,$gender)
	{
		$feedback="";
		$query="UPDATE gender SET gender='$gender' WHERE gender_id='$gender_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_Nationality($nationality_id,$nationality)
	{
		$feedback="";
		$query="UPDATE nationality SET nationality='$nationality' WHERE nationality_id='$nationality_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_Religion($religion_id,$religion)
	{
		$feedback="";
		$query="UPDATE religion SET religion='$religion' WHERE religion_id='$religion_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_MaritalStatus($marital_status_id,$marital_status)
	{
		$feedback="";
		$query="UPDATE marital_status SET marital_status='$marital_status' WHERE marital_status_id='$marital_status_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_Blood_Group($blood_group_id,$blood_group)
	{
		$feedback="";
		$query="UPDATE blood_group SET blood_group='$blood_group' WHERE blood_group_id='$blood_group_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_User_Role($role_id,$user_role)
	{
		$feedback="";
		$query="UPDATE user_role SET user_role='$user_role' WHERE role_id='$role_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_Leave_Chart($leave_chart_id,$leaveType,$leaveDays)
	{
		$feedback="";
		$query="UPDATE leave_chart SET leave_type_id='$leaveType', leave_days='$leaveDays' WHERE leave_chart_id='$leave_chart_id'";
		$result=mysql_query($query);
		if($result)
			{
				$feedback="<div class=\"success\">Successfully Updated !</div>";
			}
			else
			{
				$feedback='<div class="error">Problem to Updated '.mysql_error() .'</div>';
			}
			return $feedback;
		
	}
	
	function Update_Assaing($leave_id,$recommandedBy,$approvedBy)
	{
		$feedback=false;
		$query="UPDATE `leave` SET recommanded_by='$recommandedBy',approved_by='$approvedBy' WHERE leave_id='$leave_id'";
		$result=mysql_query($query);
		if($result)
		{
			$feedback=true;	
		}
		else
		{
			$feedback=false;
		}
		return $feedback;	
	}
}
?>