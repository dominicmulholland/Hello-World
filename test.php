<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Test</title>
</head>
<script language="JavaScript">

function checkAll()
{
   if (document.myForm.selAll.checked == false)
   {
    for (i = 0; i < document.myForm.del.length; i++)
	document.myForm.del[i].checked = true ;
   }
   else if (document.myForm.selAll.checked == true)
   {
    for (i = 0; i < document.myForm.del.length; i++)
	document.myForm.del[i].checked = false ;
   }
}

</script>

<body>
     <table width="100%" cellpadding="4" cellspacing="0">
    <tr valign="TOP">
      <td>
   <form name="myForm" enctype="multipart/form-data" target="_self">
    <tr><td><p>Select to delete all<input type="checkbox" name="selAll" onmouseup="checkAll()" /></p></td></tr>
    <tr><td><p>Select to delete Link</p><input type="checkbox" name="del" value="0" /></td>
    <td><p>Select to delete Link</p><input type="checkbox" name="del" value="1" /></td>
    <td><p>Select to delete Link</p><input type="checkbox" name="del" value="2" /></td>
    <td><p>Select to delete Link</p><input type="checkbox" name="del" value="3" /></td></tr>
   </form>
         </td>
    </tr>
  </table>
</body>

</html>
