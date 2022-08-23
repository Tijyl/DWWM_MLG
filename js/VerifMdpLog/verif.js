// function checkEmail(email) {
//     var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(email);
// }
// function validate() {
//     var email = document.getElementById("email").value;

//     if (checkEmail(email)) {
//         alert('Adresse e-mail valide');
//     } else {
//         alert('Adresse e-mail non valide');
//     }
//     return false;
// }

function validate() { 
    var msg; 
    var str = document.getElementById("mdp").value; 
    if (
            str.match( /[0-9]/g) && 
            str.match(/[a-z]/g) && 
            str.match( /[^a-zA-Z\d]/g) &&
            str.length <= 8 &&
            str.length >= 6 )
        msg = "<p style='color:green'>Mot de passe valide.</p>"; 
    else 
        msg = "<p style='color:red'>Mot de passe invalide.</p>"; 
    document.getElementById("msg").innerHTML= msg; 
} 