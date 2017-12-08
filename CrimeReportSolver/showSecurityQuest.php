<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$mail=$_GET["mail"];


        $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
        
        if(isset($link))
            {
            mysql_select_db("crimereport",$link) or die("Database Failed");
            
                $squest_resultset=  mysql_query("select * from user_info where email_id='$mail'") or die("Query Failed::".mysql_error());
                $squest="";
                while($row=  mysql_fetch_assoc($squest_resultset))
                    {
                            
                        $squest=$row["security_quest"];
                    }
                    
                    
                
            
            }
        


?>

<font color="red" size="5"><?=$squest?></font>
<hr>

Enter Answer  <input type="text" name="txt_ans">
<hr>
<input type="submit" value="Recover Password">


