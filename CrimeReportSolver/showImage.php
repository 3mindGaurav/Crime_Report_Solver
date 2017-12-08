<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id=$_GET["cid"];

 $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
                                        
                                        
                                        if(isset($link))
                                            {
                                            
                                                mysql_select_db("crimereport",$link) or die("Database Failed");
                                                
                                                
                                                $result_image=mysql_query("select evidence_image from complain where cid='$id'") or die("Query Failed::".  mysql_error());
                                                
                                                
                                                $image_c="";
                                                
                                                while($row_image=  mysql_fetch_assoc($result_image))
                                                    {
                                                        $image_c=$row_image["evidence_image"];
                                                                
                                                    
                                                    }
                                                    header("Content-Type: image/jpg");
                                                    print_r($image_c);
                                                
                                            }


?>