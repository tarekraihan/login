<?php
/**********************************************
 * Developer : Tarek Raihan                   *
 * Project : Ingtechbd.com                    *
 * Script : To send mail                      *
 * Date : 19-06-2014                          *
 **********************************************/
include("class_File_Upload.php");
class Mail extends FileUpload
{
    var $mid;
    var $mail_sender;
    var $mail_receiver;
    var $mail_body;
    var $mail_subject;
    var $file_extension;
    var $file_temp;

    function SendMail($table,$id)
    {
        $feedback=0;
        $rs=mysql_query("SELECT * FROM `$table` WHERE id='$id'");
        $row=mysql_fetch_array($rs);
       // print_r($row);
       // echo $row[2];
        if($row)
        {
            $id=$row[0];
            $sender=$row[1];
            $receivers=$row[2];
			//$receiver=explode(',',$receivers,-1);
            $subject=$row[3];
            $message=$row[4];
            $extension=$row[5];
            $file="";

            if($extension=='jpg' ||'jpeg' ||'png' || 'pjpeg' || 'x-png')
            {
                $file="<img style='max-width:100%; width:100%; height:auto;' src='http://www.ingtechbd.com/backdoor/images/".$id.".".$extension."'/><br/><br/><br/>";
            }
            elseif($extension=='msword' || 'pdf')
            {
                $file="http://www.ingtechbd.com/backdoor/images/".$id.".".$extension."<br/>";
            }


            $body="";
            $body.="$file";
            $body.="$message";
            //$random_hash = md5(date('r', time()));
            // To send HTML mail, the Content-type header must be set
            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Additional headers
            $headers .= 'From: Ingenious Technologies <'.$sender.'>'. "\r\n";

			
			$row = array(fgetcsv( $receivers ));
			foreach($row as $value)
			{
            	mail($value,$subject,$body,$headers);
            	$feedback= 1;
				
			}
        }
        return $feedback;
    }
    function Send_Mail_Direct()
    {
        $file="";
        $feedback=0;
        if($this->file_extension =='jpg' ||'jpeg' ||'png' || 'pjpeg' || 'x-png')
        {
            $file="<img style='max-width:600px; height:auto;' src='http://www.ingtechbd.com/backdoor/images/".$this->mid.".".$this->file_extension ."/><br/>";
        }
        elseif($this->file_extension =='msword' || 'pdf')
        {
            $file="http://www.ingtechbd.com/backdoor/images/".$this->mid.".".$this->file_extension ."<br/>";
        }

        $body="";
        $body.=$file."<br/>";
        $body.="$this->mail_body";

        // To send HTML mail, the Content-type header must be set
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: Ingenious Technologies <'.$this->mail_sender.'>'. "\r\n";



        mail($this->mail_receiver,$this->mail_subject,$body,$headers);

         $feedback=1;


        return $feedback;

    }
	
	
	function Send_Mail_Employee()
    {
        

        $body="";
        
        $body.="$this->mail_body";

        // To send HTML mail, the Content-type header must be set
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: Ingenious Technologies <'.$this->mail_sender.'>'. "\r\n";



        mail($this->mail_receiver,$this->mail_subject,$body,$headers);

         $feedback=1;


        return $feedback;

    }

}