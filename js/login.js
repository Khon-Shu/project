const form = document.getElementById('myform');
form.addEventListener('submit', function(event) {
  event.preventDefault();
  const usernameInput = document.getElementById('username').value;
  const passwordInput = document.getElementById('password').value;
  const patt=/^[a-zA-Z0-9_]+$/;
  let isvalid=true;
 
  if(!patt.test(usernameInput)){
    alert('Username must be alphanumeric');
    isvalid=false;
  }
  if (usernameInput  === '' || passwordInput  === '') {
    alert('Please fill in both username and password fields');
    isvalid=false;
  }

  if (usernameInput.length < 3 || passwordInput.length < 8) {
    alert('Username must be at least 3 characters and password must be at least 8 characters');
    isvalid=false;
  }


}); 