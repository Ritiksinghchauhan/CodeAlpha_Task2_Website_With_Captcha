function generateCaptcha(){
    var cap=new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','0','1','2','3','P','Q','R','S','T','U','V','W','X','Y','Z','4','5','6','7','8','9','@','%','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','$','&','?','=','*');

     var i;
     for(i=0;i<5;i++){
        var a=cap[Math.floor(Math.random()*cap.length)];
        var b=cap[Math.floor(Math.random()*cap.length)];
        var c=cap[Math.floor(Math.random()*cap.length)];
        var d=cap[Math.floor(Math.random()*cap.length)];
        var e=cap[Math.floor(Math.random()*cap.length)];

    }
    var code=a+b+c+d+e;
    document.getElementById("mainCaptcha").value=code;
}


function checkValidCaptcha(){
    string1=removeSpaces(document.getElementById("mainCaptcha").value);
    string2=removeSpaces(document.getElementById("textInput").value);
    if(string1==string2){
        document.getElementById("success").innerHTML="Form is Validated Successfully";

        alert("Thank you for confirming:)")
        window.location="home.html"
        return true;

    }
    else{
        document.getElementById("error").innerHTML="Please enter the valid captcha";
        return false;
    }
}
function removeSpaces(string){
    return string.split(" ").join("");
}
