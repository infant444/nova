function formValidation() {
   var frm = document.getElementById("registration");
   var uname = document.getElementById("username");
   var uemail = document.getElementById("email");
   var uphone = document.getElementById("phone");
   var age = document.getElementById("age");
   var uspecia = document.getElementById("special");
   if (allLetter(uname)) {
      if (ValidateEmail(uemail)) {
         if (allnumeric(uphone)) {
            if (alletter(uspecia)) {
               if (numeric(age)) {
                  window.location.href = "sucess.html";
               }
            }
         }
      }
   }
   document.getElementById("registration").reset();
}
function allLetter(uname) {
   var letters = /^[A-Za-z\.\ ]+$/;
   if (uname.value == "") {
      alert('Username should not be empty');
   }
   else if (uname.value.match(letters)) //letters.test(uname.value);
   {
      return true;
   }
   else {
      alert('Username must have alphabet characters only');
      uname.value = "";
      uname.focus();
      return false;
   }
}
function ValidateEmail(uemail) {
   var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   if (uemail.value.match(mailformat)) {
      return true;
   }
   else {
      alert("You have entered an invalid email address!");
      uemail.focus();
      return false;
   }
}
function allnumeric(uphone) {
   var numbers = /^[0-9]+$/;
   if (uphone.value.match(numbers) && uphone.value.length == 10) {
      return true;
   }
   else {
      alert('Phone number must have numeric characters only and it should  contain 10 digit');
      uphone.focus();
      return false;
   }
}
function numeric(age) {
   var numbers = /^[0-9]+$/;
   if (age.value.match(numbers) && age.value != '') {
      return true;
   }
   else {
      alert('age should be number');
      uphone.focus();
      return false;
   }
}
function alletter(uspecia) {
   var letters = /^[A-Za-z]+$/;
   if (uspecia.value == null) {
      alert('specialist name should not be empty');
   }
   else if (uspecia.value.match(letters)) //letters.test(uname.value);
   {
      return true;
   }
   else {
      alert('specialist name must have alphabet characters only');
      uspecia.value = "";
      uspecia.focus();
      return false;
   }
}