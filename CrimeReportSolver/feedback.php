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
                                $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
                                
                                
                                if(isset($link))
                                    {
                                    mysql_select_db("crimereport",$link) or die("Database Failed");
                                    
                                    
                                    
                                    $resultset=  mysql_query("select * from feedback") or die("Query Failed".mysql_error());
                                    
                                    
                                    
                                    }
                                    
                                    
                                    
                                
                    
                    ?>
                    <form method="post" action="confirm_feed.php">
                        
                        <table cellpadding="10" cellspacing="0" border="0" width="70%" bgcolor="lightyellow">
                            
                            <tr bgcolor="red">    <td colspan="4" align="center"><font color="white">YOUR FEEDBACK</font></td>  </tr>
                            
                                    <?php
                                    
                                            while($row=  mysql_fetch_assoc($resultset))
                                                {
                                                
                                     ?>
                            <tr>    <td><?=$row["fid"]?></td><td colspan="3" align="center"><b><?=$row["query"]?></b></td>    </tr> 
                                         
                                      <?php
                                                }
                                    
                                    ?>
                            
                            
                            <tr>    <td>YOUR FEEDBACK</td><td colspan="3" align="center"><textarea name="ta_query" rows="10" cols="50"></textarea></td>   </tr>
                            <tr>    <td colspan="4" align="center"><input type="submit" value="Post Query"></td></tr>
                        </table>
                        
                    </form>
                            
                    
                    
            
                
                
           
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
