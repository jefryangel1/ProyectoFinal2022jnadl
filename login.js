var attemp=3;
function validate(){
    var usuar=document.getElementById("usuar").value;
    var password=document.getElementById("password").value;
    if(usuar=="lcp"&& password=="123"){
        alert("Usuario y contraseña Correctos");
        window.location="inicio.php";
        return false;
    }
    if(usuar=="admin"&& password=="mensaje"){
        alert("Usuario y contraseña Correctos");
        window.location="mostrarmen.php";
        return false;
    }
    else{
        attemp--;
    } 
    alert("Usuario y contraseña incorrectos")
    if(attemp==0){
        document.getElementById("usuar").disable=true;
        document.getElementById("password").disable=true;
        document.getElementById("sumit").disable=true;
    }
}