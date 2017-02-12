function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/*
function checkDetails(){

    var usernameConfirmation=document.getElementById("username");
    var username=usernameConfirmation.value
    if(username.length <5)
        alert("too_short");
}
var btn = document.getElementById("loginButton");
btn.addEventListener("click", checkDetails, false);


   
    

function confirmEmail(){
    var emailAddressConfirm=document.getElementById("Email");
    var emailAddress=emailAddressConfirm.value
    if(emailAddress==="tyler_flynn@live.co.uk")
    {
        console.log("Correct!");
    }
    else
    {
        console.log("Nope!");
    }
}; 
*/