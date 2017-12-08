<?php

session_start();

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$uid=$_POST["txt_uid"];
$pass=$_POST["txt_pass"];


        $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
        
        
        if(isset($link))
            {
            mysql_select_db("crimereport",$link) or die("Database Failed");
            
            $resultset=  mysql_query("select * from login where userid='$uid' and pass='$pass'") or die("Query Failed::".  mysql_error());
            
            if(mysql_num_rows($resultset)>0)
                {
                
                    $_SESSION["uid"]=$uid;
                    $_SESSION["pass"]=$pass;
                        
                        $utype="";
                        
                        while($row=  mysql_fetch_assoc($resultset))
                            {
                                $utype=$row["user_type"];
                                
                                if($utype=="Normal")
                                    {
                                            header("Location: Userway.php");
                                    
                                    }
                                    else if($utype=="Admin")
                                        {
                                        header("Location: Adminway.php");
                                        
                                        
                                        }
                                        else
                                            {
                                            
                                                header("Location: Policeway.php");
                                            }
                                
                            
                            }
                        
                
                }
            
            
            
            
            }





?>