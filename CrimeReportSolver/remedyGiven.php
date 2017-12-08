<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
        <table cellpadding="10" cellspacing="0" border="1" width="100%" bgcolor="lightyellow">
            <tr class="bimage">    <td colspan="2" align="center"><?php include 'banner.php';?></td>     </tr>
            <tr>    <td colspan="2" align="center"><?php include './horizontal_menu.php';?></td>      </tr>
            <tr>
                <td colspan="2" align="center">
                    
               
                        <?php
                        
                        $id=$_POST["cid"];
                        
                        $answer=$_POST["ta_answer"];
                        
                        $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
                                        
                                        
                                        if(isset($link))
                                            {
                                            
                                           mysql_select_db("crimereport",$link)
                                                   or die("Database Failed");
                                           
                                           
                                           $indicator=mysql_query("insert into remedy(complain_id,remedy_desc) values('$id','$answer')") or die("Query Failed::".mysql_error());
                                                
                                           if($indicator>0)
                                            {
                                             
                                                
                                               $ind=mysql_query("update complain set complain_status='Solved' where cid='$id'") or die("Query Failed::".mysql_error());
                                               print "<hr>";
                                               
                                               print "<h2 align=center>Complain Remedy Updated!</h2>";
                                               print "<h3><a href='ComplainAnswers.php'>Jump to Next Complain!</h3>";
                                               print "<hr>";
                                               
                                            }
                                           
                                           
                                            }
                        
                        
                        
                        ?>
                
                
            
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
