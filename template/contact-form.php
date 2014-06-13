 <?php

 if(!empty($_POST['name']) AND !empty($_POST['lastname']) AND !empty($_POST['subject']) AND !empty($_POST['message'])){

$to ="mail@mail.com";
$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
$headers .= "From:".$_POST['name'].$_POST['lastname']."\r\n";      		
$tema="".$_POST['subject']."";
$mensaje="
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$_POST[name]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Apellido:</strong></td>
    <td align='left'>$_POST[lastname]</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Asunto:</strong></td>
    <td width='80%' align='left'>$_POST[subject]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Mensaje:</strong></td>
    <td align='left'>$_POST[message]</td>
  </tr>
</table>
";
@mail($to,$tema,$mensaje,$headers);
   echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0;URL=http://www.fabogesic.com/test-1306\">";
} else {
    echo "No se puede enviar el formulario, verifica los campos";
}
?>