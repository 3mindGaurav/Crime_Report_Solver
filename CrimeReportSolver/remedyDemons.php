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
                    
                            $id=$_POST["txt_id"];
                            
                            $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
                                        
                                        
                                        if(isset($link))
                                            {
                                            
                                                mysql_select_db("crimereport",$link) or die("Database Failed");
                                                
                                                $remedy_result=  mysql_query("select remedy_desc from remedy where complain_id='$id'") or die("Query Failed".mysql_error());
                                                
                                                
                                                $rem="";
                                                
                                                while($rem_row=  mysql_fetch_assoc($remedy_result))
                                                    {
                                                        $rem=$rem_row["remedy_desc"];
                                                    
                                                    }
                                            }   
      
                    ?>
                    
                
                    <form method="post" action="remedyDemons.php">
                        
                        <table cellpadding="10" cellspacing="0" border="0" width="80%" bgcolor="lightyellow">
                            <tr bgcolor="red">    <td colspan="4" align="center"><font color="white" size="4">SEARCH YOU REMEDY</font></td>    </tr>
                            <tr>    <td width="25%"></td><td>Enter Complain ID</td><td><input type="text" name="txt_id"></td><td width="25%"></td>    </tr>
                            <tr>    <td colspan="4" align="center"><input type="submit" value="Search"></td>   </tr>
                            
                            
                            
                        </table>
                        
                        <hr>
                        
                        <font color="red" size="5"><marquee><?=$rem?></marquee></font>
                        <hr>
                        
                        
                    </form>
            
                    
                    
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
