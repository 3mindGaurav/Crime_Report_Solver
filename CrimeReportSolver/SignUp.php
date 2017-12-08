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
                    
                    <form method="post" action="signconfirm.php" enctype="multipart/form-data">
                        
                        <table cellpadding="10" cellspacing="0" border="0" width="70%" bgcolor="lightyellow">
                            <tr bgcolor="red">    <td colspan="4" align="center"><font color="white" size="4">SIGN UP HERE...</font></td>   </tr>
                            <tr>    <td width="25%"></td><td>Enter Name</td><td><input type="text" name="txt_name"></td><td width="25%"></td>    </tr>
                            <tr>    <td></td><td>Enter Email</td><td><input type="text" name="txt_email" onkeyup="crossCheckId(this.value)"></td><td id="info"></td>    </tr>
                            <tr>    <td></td><td>Enter Address</td><td><textarea name="ta_address" rows="10" cols="30"></textarea></td><td></td>    </tr>
                            <tr>    <td></td><td>Enter Phone</td><td><input type="text" name="txt_phone"></td><td></td>    </tr>
                            <tr>    <td></td><td>Enter Image</td><td><input type="file" name="file_upload"></td><td></td>    </tr>
                                    <tr>    <td></td><td>Security Question</td><td>
                                <?php
                                        $squest=array("What is your first school name?","What is your pet name?","What is your favourite writer?");
                                        
                                        
                                
                                
                                ?>
                                            
                                            <select name="cmb_quest">
                                                <option value="" selected>-select question-</option>
                                                <?php
                                                
                                                        foreach($squest as $value)
                                                            {
                                                            ?>
                                                <option value="<?=$value?>"><?=$value?></option>             
                                                                
                                                   <?php
                                                            
                                                            }
                                                
                                                ?>
                                                                                                        
                                                
                                                
                                            </select>
                                            
                                            
                                            
                                            
                                            
                                </td><td></td>    </tr>
                          <tr>    <td></td><td>Enter Answer</td><td><input type="text" name="txt_ans"></td><td></td>    </tr>
                          <tr>    <td></td><td>Enter Password</td><td><input type="password" name="txt_pass"></td><td></td>    </tr>
                          <tr>    <td></td><td>Confirm Password</td><td><input type="password" name="txt_pass1"></td><td></td>    </tr>
                          <tr>    <td colspan="4" align="center"><input type="submit" value="Sign Up!"></td>    </tr> 
                            
                        </table>
                        
                    </form>
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
