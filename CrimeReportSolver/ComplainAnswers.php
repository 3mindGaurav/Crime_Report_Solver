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
                                            
                                                $resultset=mysql_query("select * from complain where complain_status='Pending'") or die("Query Failed::".mysql_error());
                                                
                                                
                                                
                                            }
                            
                            
                            
                            ?>
                    
                    
                    <table cellpadding="10" cellspacing="0" width="100%" bgcolor="lightyellow" border="0">
                        
                        <tr bgcolor="red">    <td colspan="4" align="center"><font color="white" size="4">PENDING COMPLAINS</font></td>    </tr>
                        <tr>    <td colspan="4" align="center"><hr></td>    </tr>
                        <tr bgcolor="blue">    <td align="center"><font color="white" size="3">C. ID</font></font></td><td align="center"><font color="white" size="3">COMPLAIN TEXT</font></td><td align="center"><font color="white" size="3">EVIDENCE LINK</font></td><td align="center"><font color="white" size="3">YOUR ANSWER</font></td>    </tr>
                        <?php
                                    while($row_complain=  mysql_fetch_assoc($resultset))
                                        {
                        ?>
                        <tr>    <td align="center" width="10%"><?=$row_complain["cid"]?></td><td><?=$row_complain["complain_text"]?></td><td><a href="showImage.php?cid=<?=$row_complain["cid"]?>">Click Here!</a></td><td><a href="Solution.php?cid=<?=$row_complain["cid"]?>">Solution</a></td>    </tr>    
                                <tr>    <td colspan="4" align="center"><hr></td>    </tr>
                        <?php
                                        
                                        
                                        }
                        
                        
                        ?>
                        
                        
                        
                    </table>
                    
               
                
                
            
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
