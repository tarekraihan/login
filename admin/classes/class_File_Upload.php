<?php
/**********************************************
 * Developer : Tarek Raihan                   *
 * Project : Ingtechbd.com backend            *
 * Script : To Upload file in a folder        *
 * Save attachment file.                      *
 * Date : 19-06-2014                          *
 **********************************************/
include("class_Delete.php");
class FileUpload extends Delete
{
    var $feedback="";
    var $fileTemp;
    var $fileType;
    var $fileSize;
    var $standardSize = 20000;
    var $fileName="";
    var $fileExtension="";
    var $id;
	var $folderName="";
    /*function __construct()
    {
        parent::__construct();
    }*/
	function File_Upload()
	{
        if(!empty($this->id))
        {
            if(!empty($this->fileType))
            {
                if (($this->fileType == "image/gif")
                    || ($this->fileType == "image/jpeg")
                    || ($this->fileType == "image/jpg")
                    || ($this->fileType == "image/pjpeg")
                    || ($this->fileType == "image/x-png")
                    || ($this->fileType == "image/png")
                    || ($this->fileType == "application/pdf")
                    || ($this->fileType == "application/msword"))
                {
                    if(!empty($this->fileSize))
                    {
                        if($this->fileSize < $this->standardSize)
                        {
                            move_uploaded_file($this->fileTemp,$this->folderName."/".$this->id.".".$this->fileExtension);
                            $this->feedback=1;
                        }
                        else
                        {
                            //$this->feedback="<div class='error'>The File is too big !!!</div>";
                            $this->feedback=0;
                        }
                    }
                    move_uploaded_file($this->fileTemp,$this->folderName."/".$this->id.".".$this->fileExtension);
                    $this->feedback=1;
                }
                else
                {
                    //$this->feedback="<div class='error'>File is not correct format.</div>";
                    $this->feedback=0;
                }
            }
            else
            {
                move_uploaded_file($this->fileTemp,$this->folderName."/".$this->id.".".$this->fileExtension);
                $this->feedback=1;
            }

        }
        else
        {
            if(!empty($this->fileType))
            {
                if (($this->fileType == "image/gif")
                    || ($this->fileType == "image/jpeg")
                    || ($this->fileType == "image/jpg")
                    || ($this->fileType == "image/pjpeg")
                    || ($this->fileType == "image/x-png")
                    || ($this->fileType == "image/png")
                    || ($this->fileType == "application/pdf")
                    || ($this->fileType == "application/msword")
                )
                {
                    if(!empty($this->fileSize))
                    {
                        if($this->fileSize < $this->standardSize)
                        {
                            move_uploaded_file($this->fileTemp,$this->folderName."/".$this->fileName);
                            $this->feedback=1;
                        }
                        else
                        {
                           // $this->feedback="<div class='error'>The File is too big !!!</div>";
                            $this->feedback=0;
                        }
                    }
                    move_uploaded_file($this->fileTemp,$this->folderName."/".$this->fileName);
                    $this->feedback=1;
                }
                else
                {
                    //$this->feedback="<div class='error'>File is not correct format.</div>";
                    $this->feedback=0;
                }
            }
            else
            {
                move_uploaded_file($this->fileTemp,$this->folderName."/".$this->fileName);
                $this->feedback=1;
            }

        }

        return $this->feedback;
	}
}