const form = document.getElementById('form');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  const nameInput = document.getElementById('name').value;
  const emailInput = document.getElementById('email').value;
  const confirmPass = document.getElementById('confirm_password').value;
  const passwordInput = document.getElementById('password').value;
  const emailPatt = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  const regex =/^[a-zA-Z0-9_]+$/;

  let isValid = true;

  if (!regex.test(nameInput)) {
    alert('The username must be alphanumeric');
    isValid = false;
  }
  if(nameInput<4 || nameInput>15){
    alert('The username is invalid')
  }
  if(passwordInput<4 || passwordInput>8){
    alert('Password must be greater then 4 digits and smaller then 8 digits');
  }


  if (!emailPatt.test(emailInput)) {
    alert('Invalid email address');
    isValid = false;
  }
  if (confirmPass !== passwordInput) {
    alert('Password does not match. Please try again!');
    isValid = false;
  }

  if (isValid) {
   
    console.log('Form is valid!');
  }
});