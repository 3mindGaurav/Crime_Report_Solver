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
                    <tr>    <td width="60%" align="center"><?php include './sliding_images.php';?></td><td align="center">
                
                            
                            
                            <form method="post" action="validateLogin.php">
                                <table cellpadding="10" cellspacing="0" border="0" width="100%" bgcolor="lightyellow">
                                    <tr bgcolor="red">    <td colspan="4" align="center"><font color="white" size="4">LOGIN HERE...</font></td>    </tr>
                                    <tr>    <td width="25%"></td><td><b>User Id</b></td><td><input type="text" name="txt_uid"></td><td width="25%"></td>    </tr>
                                    <tr>    <td></td><td><b>Password</b></td><td><input type="password" name="txt_pass"></td><td></td>    </tr>
                                    <tr>    <td colspan="4" align="center"><input type="submit" value="Login"></td>    </tr>
                                    <tr>    <td colspan="4" align="center"><hr></td>    </tr>
                                    <tr>    <td colspan="4" align="center"><a href="SignUp.php">New User Sign Up!</a></td>    </tr>
                                    <tr>    <td colspan="4" align="center"><a href="Forget.php" class="link_col">Forget Password</a></td>    </tr>
                                    <tr>    <td colspan="4" align="center"><hr></td>    </tr>
                                    
                                    
                                    
                                    
                                </table>
                                
                                
                                
                                
                            </form>
                            
                            
                            
                            
                            
                            
                            
                            
                </td>      </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
