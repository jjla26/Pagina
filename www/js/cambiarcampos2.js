function cambiarcampos2(obj){
    
    if (obj.value == "Pendiente"){
        document.getElementById("cliente1").style.display='block';
        document.getElementById("rut1").style.display='block';
        document.getElementById("Nombre1").style.display='block';
        document.getElementById("Cedula1").style.display='block';
        document.getElementById("Bancob").style.display='block';
        document.getElementById("Cuenta1").style.display='block';
        document.getElementById("bancosOrg").style.display='none';
        document.getElementById("cuentasOrg").style.display='none';
        
     
}   if(obj.value == "Inmediata"){
        
        document.getElementById("cliente1").style.display='block';
        document.getElementById("rut1").style.display='block';
        document.getElementById("Nombre1").style.display='block';
        document.getElementById("Cedula1").style.display='block';
        document.getElementById("Bancob").style.display='block';
        document.getElementById("Cuenta1").style.display='block';
        document.getElementById("bancosOrg").style.display='block';
        document.getElementById("cuentasOrg").style.display='block';
        
        
    
}   if (obj.value == "NR"){ 

        document.getElementById("cliente1").style.display='none';
        document.getElementById("rut1").style.display='none';
        document.getElementById("Nombre1").style.display='none';
        document.getElementById("Cedula1").style.display='none';
        document.getElementById("Bancob").style.display='none';
        document.getElementById("Cuenta1").style.display='none';
        document.getElementById("bancosOrg").style.display='none';
        document.getElementById("cuentasOrg").style.display='none';
        
        
    
}
    
}

function cambiarcampos4(obj){
    
    if (obj.value == "Pendiente"){
        document.getElementById("bancosOrg1").style.display='none';
        document.getElementById("cuentasOrg1").style.display='none';
        
     
}   if(obj.value == "Inmediata"){
        
        document.getElementById("bancosOrg1").style.display='block';
        document.getElementById("cuentasOrg1").style.display='block';
        
    
}}

function cambiarcampos5(obj){
    
    if (obj.value == "Pendiente"){
        document.getElementById("bancosOrg2").style.display='none';
        document.getElementById("cuentasOrg2").style.display='none';
        
     
     
}   if(obj.value == "Inmediata"){
        
        document.getElementById("bancosOrg2").style.display='block';
        document.getElementById("cuentasOrg2").style.display='block';
        
    
}}