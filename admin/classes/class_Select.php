<?php
include("class_Insert.php");
class Select extends Insert
{
	function Select_All_User()
	{

		$result=mysql_query("SELECT * FROM `user`");
		
		if($result)
		{
			$user="";
			$sl=0;
			while($data=mysql_fetch_array($result))
			{
				//print_r($data);
				$user.='<tr>';
				$user.='<td>'.++$sl.'</td>';
                $user.='<td>'.$data["full_name"].'</td>';
				$user.='<td>'.$data["user_name"].'</td>';
				$user.='<td>'.$data["email_address"].'</td>';
                if($data["user_role"]=="1")
                {
                    $user.='<td>Admin</td>';
                }elseif($data["user_role"]=="2")
                {
                    $user.='<td>Manager</td>';
                }
                elseif($data["user_role"]=="3")
                {
                    $user.='<td>User</td>';
                }

				if($data["status"]=="1")
				{
					$user.='<td style="color:green">Active</td>';	
				}elseif($data["status"]=="0")
				{
					$user.='<td style="color:red">Inactive</td>';
				}
				//$user.='<td>'.$data["password"].'</td>';
				$user.='<td><a href="?page=4 && id='.$data['id'].'"><img src="images/edit.png"></a></td>';
				$user.='<td><a href="?page=3 && id='.$data['id'].'" onclick="return confirm(\'Are you really want to delete this item\')"><img src="images/delete.png"/></a></td>';
				$user.='</tr>';
				
			}	
			return $user;
		}
		
		
	}

    function Select_Faq_Category()
    {
        $query="SELECT `faq_category_id`,`faq_category_name` FROM `tbl_faq_category`";
        $result=mysql_query($query);


        $Category="<option >Select one</option>";

        while($data=mysql_fetch_array($result))
        {
            $Category.='<option value="'.$data[0].'">'.$data['faq_category_name'].'</option>';
        }
        return $Category;
    }
	
	function Select_All_By_Id($id,$table,$field_name)
	{
		$query="SELECT * FROM `$table` WHERE `$field_name`='$id'";
        $result=mysql_query($query);
        $data=mysql_fetch_array($result);
		return $data;
	}
    function Select_All_By_Id1($id,$table,$field_name)
    {
        $query="SELECT * FROM `$table` WHERE `$field_name`='$id'";
        $result=mysql_query($query);

        return $result;
    }



	function Select_All_By_UserName($user_id,$table,$field_name)
	{
		$query="SELECT * FROM `$table` WHERE `$field_name`='$user_id'";
		$result=mysql_query($query);
		$data=mysql_fetch_array($result);
		return $data;
	}


	function Select_All($table,$offset,$limit)
		{
			$query="SELECT * FROM $table LIMIT $offset,$limit";
			$result=mysql_query($query);

			return $result;
		}
	function Select_All_Faq()
    {
        $query="SELECT a.faq_id,a.faq_category_id,a.faq,a.tag,a.publish_status,b.faq_category_name FROM `tbl_faq` AS a INNER JOIN tbl_faq_category AS b ON a.faq_category_id=b.faq_category_id";
        $result=mysql_query($query);
        return $result;
    }


}
?>
