<?php
session_start();

if(empty($_SESSION["uid"]) || empty($_SESSION["pass"]))
    {
    header("Location: ErrorPage.php");
    
    }



?>

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
                    
               
                    <table cellpadding="10" cellspacing="0" border="0" width="70%" bgcolor="lightyellow">
                        <tr bgcolor="red">    <td><font color="white" size="4">ADMIN FORMS</font></td></tr>
                        <tr>    <td align="center">    <a href="ComplainAnswers.php">COMPLAIN ANSWERS</a></td></tr>
                        <tr>    <td align="center">    <a href="AnotherAdminSignup.php"><a href="AnotherSignup.php">ADMIN SIGNUP</a></td></tr>
                        <tr>    <td></td></tr>
                        
                        
                    </table>
                    
                    
                
                
            
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
