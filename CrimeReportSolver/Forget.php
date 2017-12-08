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
                    
              
                    <form method="post" action="recoverPassword.php">
                        <table  cellpadding="10" cellspacing="0" border="0" width="70%">
                            <tr bgcolor="red">    <td colspan="4" align="center"><font color="white" size="4">PASSWORD RECOVERY FORM</font></td>  </tr>
                            <tr>    <td width="25%"></td><td>UserID</td><td><input type="text" id="txt1" name="txt_id"></td><td width="25%"><a href="javascript: recoverQuestion()">Get Question</a></td>    </tr>
                            <tr>    <td colspan="4" align="center" id="info"></td>   </tr>
                                
                            
                            
                            
                            
                        </table>
                        
                        
                    </form>
                    
                    
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
