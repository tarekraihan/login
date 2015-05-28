<?php

if(isset($_GET["page"])){
    if($_GET["page"]==1)
    {
        include("pages/insert_faq.php");
    }

    else if($_GET["page"]==2)
    {
        include("pages/category.php");
    }
    else if($_GET["page"]==3)
    {
        include("pages/faq_list.php");
    }
    else if($_GET["page"]==4)
    {
        include("pages/edit_faq.php");
    }
    else if($_GET["page"]==5)
    {
        include("pages/edit_category.php");
    }

}
else
{
    echo "<h1>Welcome !!</h1>";
}
?>