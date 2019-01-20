<!DOCTYPE html>
<html><head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="C:\Users\zied\Desktop\ferjeni\posabsolute-jQuery-Validation-Engine-499f567\css\validationEngine.jquery.css"
 type="text/css"/>
 <script src="C:\Users\zied\Desktop\ferjeni\posabsolute-jQuery-Validation-Engine-499f567\js\languages\jquery.validationEngine-fr.js" 
 type="text/javascript" charset="utf-8"></script>
<script src="C:\Users\zied\Desktop\ferjeni\posabsolute-jQuery-Validation-Engine-499f567\js\jquery.validationEngine.js" 
type="text/javascript" charset="utf-8"></script>
 </head><body>
<form id="f" method="post" action="form.php">
<br><br>
nom :<input class="validate[required]" id="ereq1" type="text" name="T1"> <br><br>
adresse :<input class="validate[required]" id="ereq1" type="text" name="T2">  <br><br>
date de naissance : <input  class="validate[required,custom[date]]" type="text" name="T3" id="date" /> <br><br>
email : <input class="validate[required,custom[email]]" type="text" name="T4" id="email" /><br><br>
tele : <input  class="validate[required,custom[onlyLetterNumber]]" type="text" name="T5" id="special" /><br><br>
site internet : <input class="validate[required]" id="ereq1" type="text" name="T6"> <br><br>
login : 
password :
site internet : <input class="validate[required]" id="ereq1" type="text" name="site"> <br><br>
<br><br>
<input type="submit" value="clic">
</form>
<script>
$(document).ready(function(){
    $("#f").validationEngine();
   });
</script>
</body></html>
<?php
if(isset($_POST['T1']))
         {
             $basededonne = array() ;
              $basededonne['T1']=$_POST['T1'];
             $basededonne['T2']=$_POST['T2'];
             $basededonne['T3']=$_POST['T3'];
             $basededonne['T4']=$_POST['T4'];
             $basededonne['T5']=$_POST['T5']; 
			 $basededonne['T6']=$_POST['T6'];
             $basededonne['site']=$_POST['site']; 	 			 
                            $js=file_get_contents('infor.json');
             $js=json_decode($js,true);
             $js[]=$basededonne;
             $js = json_encode($js);
             file_put_contents('infor.json',$js);
         }
?>