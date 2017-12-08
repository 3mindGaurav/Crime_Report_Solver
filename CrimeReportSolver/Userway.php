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
                    
                      <marquee  scrollamount="2" direction="up" loop="true" width="70%">
                
                <p>
                   <font color="blue">
                            The purpose of this site is to make legal complains 
                            convenient enough for those people who assumes that the legal
                            processes are very tedious to handle!
                  
                   </font>
                    
                </p>
                
                
                
            </marquee>
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
