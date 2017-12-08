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
                                    $id_type=$_POST["cmb_id"];
                                    $id_number=$_POST["txt_id"];
                                    $complain=$_POST["ta_complain"];
                                    
                                    $category="Victim";
                                    
                                    $link=  mysql_connect("127.0.0.1:3306","root","root") or die("Server Failed");
                                    
                                    $image_content=  mysql_real_escape_string(file_get_contents($_FILES["file_upload"]["tmp_name"]));
                                    
                                    
                                    if(isset($link))
                                        {
                                        
                                        mysql_select_db("crimereport",$link) or die("Database Failed");
                                        
                                        $indicator=mysql_query("insert into complain(category,id_type,id_number,complain_text,evidence_image) values('$category','$id_type','$id_number','$complain','$image_content')") or die("Query Failed".mysql_error());
                                        
                                        if($indicator>0)
                                            {
                                                $c=0;
                                            
                                                    $cid=mysql_query("select max(cid) from complain") or die("Query 2 failed::".mysql_error());
                                            
                                                    while($r=  mysql_fetch_row($cid))
                                                        {
                                                            $c=$r[0];
                                                        
                                                        }
                                                        
                                                    print "<h2 align=center>Complain Is Registered!</h2>";
                                                    print "<h3 align=center>Your complain id is:: <font color=red>".$c."</font></h3>";
                                                    
                                            
                                            }
                                        
                                        
                                        
                                        }
                                        
                                    
                                    
                                    
                                        
                            
                            
                            
                            ?>
                    
                    
              
                    
                </td>
                
                
            </tr>
            
            
            
            
            
            
        </table>
    </body>
</html>
