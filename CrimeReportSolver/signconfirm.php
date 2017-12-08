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
                                                
                                                $name=$_POST["txt_name"];
                                                $email=$_POST["txt_email"];
                                                $phone=$_POST["txt_phone"];
                                                $address=$_POST["ta_address"];
                                                $image_content=  mysql_real_escape_string(file_get_contents($_FILES["file_upload"]["tmp_name"]));
                                                $squest=$_POST["cmb_quest"];
                                                $sans=$_POST["txt_ans"];
                                                $pass=$_POST["txt_pass"];
                                                $utype="Normal";
                                                
                                                
                                                if(isset($link))
                                                    {
                                                    mysql_select_db("crimereport",$link) or die("Database Failed");
                                                    
                                                    mysql_query("call crimereport.signup('$email','$name','$address','$phone','$squest','$sans','$utype','$image_content','$pass')") or die("Query Failed".  mysql_error());
                                                    ?>
                                                        
                    <hr>
                    
                    <h2 align="center"><font color="green">Sign Up Successful!</font></h2>
                    <h4 align="center">To Login <a href="index.php">Click Here!</a></h4>
                    
                    
                    <hr>
                                                        
                                                        
                                                        <?php
                                                    
                                                    }
                                                
                                                
                                    
                                    
                                    ?>
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
