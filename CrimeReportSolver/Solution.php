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
                        $id=$_GET["cid"];
                        
 $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
                                        
                                        
                                        if(isset($link))
                                            {
                                            
                                                mysql_select_db("crimereport",$link) or die("Database Failed");
                                                
                                                
                                                $result_solution=mysql_query("select complain_text from complain where cid='$id'") or die("Query Failed::".  mysql_error());
                                                
                                                
                                                $complaintext="";
                                                
                                                    while($row=  mysql_fetch_assoc($result_solution))
                                                        {
                                                            $complaintext=$row["complain_text"];
                                                        
                                                        }
                                            }

                  
                  
                  ?>
                    
                    <form method="post" action="remedyGiven.php">
                        <table cellpadding="10" cellspacing="0" border="0" width="70%" bgcolor="lightyellow">
                            <input type="hidden" name="cid" value="<?=$id?>">
                            <tr bgcolor="red"><td colspan="4" align="center"><font color="white" size="4">COMPLAIN ANSWER</font></td></tr>
                            <tr>    <td><?=$id?>(COMPLAIN_ID)</td><td colspan="3"><?=$complaintext?></td></tr>        
                            <tr>    <td>MyAnswer::</td><td colspan="3"><textarea name="ta_answer" rows="10" cols="50"></textarea></td></tr>        
                            
                            <tr><td colspan="4" align="center"><input type="submit" value="Post Answer"></td></tr>
                            
                            
                            
                            
                        </table>
                        
                        
                        
                        
                        
                    </form>
                
            
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
