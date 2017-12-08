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
        <script lang="JavaScript" type="text/javascript" src="prog1.js"></script>
    </head>
    <body>
        <table cellpadding="10" cellspacing="0" border="1" width="100%" bgcolor="lightyellow">
            <tr class="bimage">    <td colspan="2" align="center"><?php include 'banner.php';?></td>     </tr>
            <tr>    <td colspan="2" align="center"><?php include './horizontal_menu.php';?></td>      </tr>
            <tr>
                <td colspan="2" align="center">
                    
                                <?php
                                
                                    $id=$_POST["txt_id"];
                                    $ans=$_POST["txt_ans"];
                                    
                                    
                                    $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
                                    
                                    
                                    if(isset($link))
                                        {
                                        mysql_select_db("crimereport",$link) or die("Database Failed");
                                        
                                        
                                       
                                        
                                        }
                                
                                
                                
                                ?>
             
                    
                    
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
