<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        $email=$_GET["mail"];
        
        $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
        
        if(isset($link))
            {
            mysql_select_db("crimereport",$link) or die("Database Failed");
            
            
            $mail_resultset=mysql_query("select * from user_info where email_id='$email'") or die("Query Failed");
            
            if(mysql_num_rows($mail_resultset)>0)
                {
                        print "<font color=red>Already Exist!</font>";
                
                }
            
            
            
            }
        
        



?>