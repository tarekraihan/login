<?php

if(isset($_GET["faq"])){
    if($_GET["faq"]==1)
    {
        include("question.php");
    }

    else if($_GET["faq"]==2)
    {
        include("details.php");
    }

}
else
{
    include("home.php");
}
?>