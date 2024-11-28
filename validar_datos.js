function validar(formulario)
{
    if(formulario.campo_nombre.value.length  <1)
    {
        alert("Debes escribir el nombre");
        formulario.campo_nombre.focus();
        return (false);
    }
}
 
function activar()
{
    if((document.form1.campo_nombre.value.length <1) || (document.form1.campo_mail.value.length <1))    
        document.form1.Submit.disabled="disabled";
    else
        document.form1.Submit.disabled="";
}
