<?php
class DB_Connection
{
	#For database connection
	function __construct()
	{
		$con=mysql_connect('localhost','root','') or die('failed');
		mysql_select_db("coreconc_magistrates",$con) or die('not ');


        //$con=mysql_connect('localhost','coreconc_tarek','Tarek222952') or die('failed');
        //mysql_select_db("coreconc_magistrates",$con) or die('not ');

        mysql_query('SET CHARACTER SET utf8');
        mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error());

		
	}	
	
}

?>