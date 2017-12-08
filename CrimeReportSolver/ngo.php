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
                    
                    <form method="post" action="individualcomplain.php" enctype="multipart/form-data">
                        <table cellpadding="10" cellspacing="0" border="0" width="90%" bgcolor="lightyellow">
                            <tr bgcolor="red" size="4">    <td colspan="4" align="center"><font color="white" size="4">NGO COMPLAIN FEEDING</font></td>    </tr>
                                    <tr>    <td width="25%"></td><td>ID Type</td><td>
                                            <b>In Case Of NGO Registration Id is Mandatory</b>
                                            <input type="hidden" name="cmb_id" value="NGOReg.No">
                                            
                                            
                                </td><td width="25%"></td>    </tr>
                                    <tr>    <td></td><td>Id Number</td><td><input type="text" name="txt_id"></td><td></td>    </tr>
                                    <tr>    <td></td><td>Complain Text</td><td><textarea name="ta_complain" rows="20" cols="40"></textarea></td><td></td>    </tr>
                                    <tr>    <td></td><td>Evidence</td><td><input type="file" name="file_upload"></td><td></td>    </tr>
                                    <tr>    <td colspan="4" align="center"><input type="submit" value="Register Complain"></td>   </tr>
                            
                            
                            
                            
                        </table>
                        
                        
                        
                        
                        
                        
                        
                    </form>
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
