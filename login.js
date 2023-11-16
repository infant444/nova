function cap() {
    var alpha = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '!', '@', '#', '$', '%', '^', '&', '*', '+'];
    var a = alpha[Math.floor(Math.random() * 71)];
    var b = alpha[Math.floor(Math.random() * 71)];
    var c = alpha[Math.floor(Math.random() * 71)];
    var d = alpha[Math.floor(Math.random() * 71)];
    var e = alpha[Math.floor(Math.random() * 71)];
    var f = alpha[Math.floor(Math.random() * 71)];
    var final = a + b + c + d + e + f;
    document.getElementById("capt").value = final;
}
var a1=0,b1=0,c1=0,d1=0,e1=0,f1=0;
function formValidation() {
    var frm;
    var uid;
    var passid;
    var cpassid;
    var uname;
    var uadd;
    var uadd1;
    var ucountry;
    var uzip;
    var uemail;
    var ugender;
    frm = document.getElementById("registration");
    uid = document.getElementById("userid");
    passid = document.getElementById("passid");
    cpassid = document.getElementById("cpassid");
    uname = document.getElementById("username");
    uadd = document.getElementById("paddress1");
    uadd1 = document.getElementById("paddress2");
    ucountry = document.getElementById("country");
    uzip = document.getElementById("zip");
    uemail = document.getElementById("email");
    ugender = document.getElementsByName("gender");
    if (userid_validation(uid, 5, 12)) {
        if (passid_validation(passid, cpassid, 7, 12)) {
            if (allLetter(uname)) {
                if (countryselect(ucountry)) {
                    if (allnumeric(uzip)) {
                        if (ValidateEmail(uemail)) {
                            if (validgender(ugender)) {
                                window.location.href = "login.html";
                            }
                        }
                    }
                }
            }
        }
    }
}

function userid_validation(uid, mx, my) {
    var l = /^[a-z]+$/;
    var uid_len = uid.value.length;
    if (uid_len == 0) {
        alert("User Id should not be empty");
        uid.focus();
        return false;
    }
    else if (uid_len >= my || uid_len < mx) {
        alert("The user id length be between " + mx + " to " + my);
        uid.focus();
        return false;
    }
    else if (!uid.value.match(l)) {
        alert("All should be alphabet");
        uid.focus();
        return false;
    }
    return true;
}
function passid_validation(passid, cpassid, mx, my) {
    var passid_len = passid.value.length;
    var cpassid_len = cpassid.value.length;
    if (passid_len == 0) {
        alert("Password should not be empty ");
        passid.focus();
        return false;
    }
    else if (passid_len >= my || passid_len < mx) {
        alert("password length should be between " + mx + " to " + my);
        passid.focus();
        return false;
    }

    if (cpassid_len == 0) {
        alert("conform Password should not be empty");
        passid.focus();
        return false;
    }
    if (cpassid_len >= my || cpassid_len < mx) {
        alert("conform Password length should be between " + mx + " to " + my);
        passid.focus();
        return false;
    }
    if (cpassid.value != passid.value) {
        alert("password and conform Password should be same");
        passid.focus();
        return false;
    }
    console.log(passid.value);
    console.log(cpassid.value);
    return true;

}
function allLetter(uname) {
    var letters = /^[A-Za-z]+$/;
    if (uname.value == null) {
        alert('Username should not be empty');
    }
    else if (uname.value.match(letters)) {
        console.log(uname.value);
        return true;
    }
    else {
        alert('Username must have alphabet characters only');
        uname.value = "";
        uname.focus();
        return false;
    }
}
function countryselect(ucountry) {
    if (ucountry.value == "Default") {
        alert('Select your country from the list');
        ucountry.focus();
        return false;
    }
    else {
        console.log(ucountry.value);
        return true;
    }
}
function allnumeric(uzip) {
    var numbers = /^[0-9]+$/;
    if (uzip.value.match(numbers)) {
        console.log(uzip.value);
        return true;
    }
    else {
        alert('ZIP code must have numeric characters only');
        uzip.focus();
        return false;
    }
}
function ValidateEmail(uemail) {
    var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (uemail.value.match(mailformat)) {
        console.log(uemail.value);
        return true;
    }
    else {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
}
function validgender(ugender) {
    var isChecked = false;
    for (var i = 0; i < ugender.length; i++) {
        if (ugender[i].checked) {
            console.log(ugender.value);
            isChecked = true; // found one element checked
            break;
        }
    }
    if (isChecked == false) {
        alert("Select male/female");
    }
    return isChecked;
}
function copy(form) {
    form.taddress1.value = form.paddress1.value;
    form.taddress2.value = form.paddress2.value;
}
function res() {
    frm.reset();
}

/*   luser.addEventListener("keyup", (e)=>{
       var v=e.currentTarget.value;
       lpass.disabled=false; 
       if(v==="")
       {
           lpass.disabled=true;
       }        
   });

   lpass.addEventListener("keyup", (e)=>{
       var v=e.currentTarget.value;
       lpass.disabled=false;
       if(v==="")
       {
           ccap.disabled=true;
       }
   });
   ccap.addEventListener("keyup", (e)=>{
       var v=e.currentTarget.value;
       if(v==="")
       {
           submit.disabled=true;
       }
   });*/
function loginval() {
    var lfor = document.getElementById("for");
    var luser = document.getElementById("us");
    var lpass = document.getElementById("pass");
    var cap = document.getElementById("capt");
    var ccap = document.getElementById("capcha");
    if (capcha(cap, ccap)) {
        if (loginuser(luser, lpass)) {
            console.log("1".value);
            lo();
        }
    }
}
function lo() {
    window.location.href = "nova.html";
}

function loginuser(a, b) {
    var username = ["infant", "hari", "karthi", "tamil"];
    var password = ["21bca0104", "21bca0100", "21bca0089", "21bca0036"];
    for (var c = 0; c < username.length; c++) {
        if (a.value == username[c]) {
            if (b.value == password[c]) {
                return true;
            }
        }
    }
    alert("The incorrect username and password");
    return false;
}

function capcha(a, b) {
    if (a.value == b.value) {
        return true;
    }
    else {
        alert("invalid capcha");
        return false;
    }
}
function pg() {
    var a = document.getElementById("uid").value;
    var flag = 0;
    var c = 0;
    username = ["infant", "hari", "karthi"];
    password = ["21bca0104", "21bca0100", "21bca0089"];
    for (c = 0; c <= username.length; c++) {
        if (a == username[c]) {
            document.getElementById('pra').innerHTML = "The password is " + password[c];
            flag = 1;
        }
    }
    if (flag == 0) {
        alert("The userid is not founded");
    }
}
