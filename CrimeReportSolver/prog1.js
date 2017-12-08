/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function makeRequestObject()
    {
        var xmlHttp=false;
        
        try
            {
                xmlHttp=new ActiveXObject('Msxml2.XMLHTTP');
                
                
            }
            catch(e)
                {
                    try
                    
                            {
                                
                                    xmlHttp=new ActiveXObject('Microsoft.XMLHTTP');
                            }
                            catch(E)
                                {
                                    xmlHttp=false;
                                    
                                }
                    
                }
                
                
                if(!xmlHttp && typeof(XMLHttpRequest)!='undefined')
                    {
                        xmlHttp=new XMLHttpRequest();
                        
                    }
                    
                    return xmlHttp;
        
    }
    
    
    function crossCheckId(val)
        {
            var xmlHttp=makeRequestObject();
            var _url='checkEmail.php?mail='+val;
            
           
            
            xmlHttp.open('GET',_url,true);
            xmlHttp.onreadystatechange=function()
                                                {
                                                    if(xmlHttp.readyState==4 && xmlHttp.status==200)
                                                        {
                                                            var content=xmlHttp.responseText;
                                                            
                                                            if(content)
                                                                {
                                                                    document.getElementById("info").innerHTML=content;
                                                                    
                                                                }
                                                                else
                                                                    {
                                                                        document.getElementById("info").innerHTML="";
                                                                        
                                                                    }
                                                            
                                                        }
                                                    
                                                }
            
            xmlHttp.send(null);
        }
        
  function recoverQuestion()
    {
        
        var xmlHttp=makeRequestObject();
        var _url='showSecurityQuest.php?mail='+document.getElementById("txt1").value;
        
        xmlHttp.open('GET',_url,true);
        
        xmlHttp.onreadystatechange=function()
                                            {
                                                
                                                if(xmlHttp.readyState==4 && xmlHttp.status==200)
                                                    {
                                                        var content=xmlHttp.responseText;
                                                        
                                                        if(content)
                                                            {
                                                                
                                                                document.getElementById("info").innerHTML=content;
                                                                
                                                                
                                                                
                                                            }
                                                        
                                                        
                                                    }
                                                
                                            }
                                            
                                            
                                            xmlHttp.send(null);
        
        
    }
