var check = function() {
    if (document.getElementById('password').value !=
      document.getElementById('confirm').value) {
      document.getElementById('message').innerHTML = 'Password is not matching';
      }
      else{
        document.getElementById('message').innerHTML = '';
      }
  }

  