function validateForm() {
    var fullnameInput = document.getElementById('fullname');
    var fullnameError = document.getElementById('fullnameError');
    var fullnameValue = fullnameInput.value.trim();

    // Validate Full Name to accept text only
    var nameRegex = /^[A-Za-z\s]+$/;
    if (!nameRegex.test(fullnameValue)) {
      fullnameError.textContent = 'Please enter a valid Full Name (text only).';
      fullnameInput.focus();
      return false;
    }

    fullnameError.textContent = ''; // Clear the error message if valid

    var emailInput = document.getElementById('email');
    var emailError = document.getElementById('emailError');
    var emailValue = emailInput.value.trim();

    // Validate Email using a regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(emailValue)) {
      emailError.textContent = 'Please enter a valid Email Address.';
      emailInput.focus();
      return false;
    }

    emailError.textContent = ''; // Clear the error message if valid

    var mobileInput = document.getElementById('mobile');
    var mobileError = document.getElementById('mobileError');
    var mobileValue = mobileInput.value.trim();

    // Validate Mobile Number for Philippines format
    var mobileRegex = /^(09|\+639)\d{9}$/;

    if (!mobileRegex.test(mobileValue)) {
      mobileError.textContent = 'Please enter a valid Mobile Number in the Philippines format (e.g., 09123456789 or +639123456789).';
      mobileInput.focus();
      return false;
    }
    mobileError.textContent = ''; // Clear the error message if valid

    return true; // Submit the form if all validations pass
  }
  // Calculate age based on date of birth
  function calculateAge() {
    var dobInput = document.getElementById('dob');
    var dob = new Date(dobInput.value);
    var today = new Date();
    var age = today.getFullYear() - dob.getFullYear();
    document.getElementById('age').value = age;
  }
  // Attach event listeners
  document.getElementById('dob').addEventListener('change', calculateAge);

  document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission
    if (validateForm()) {
              $.ajax({
                  url: 'process.php',
                  data: $(this).serialize(),
                  method: 'POST',
                  success: function(resp) {
                      // $('#error_msg').html(resp);
                    // echo "<script>
                    alert('New Record Addeded to the Database➕✅');
                      console.log(resp);
                  }
              })
    }
  });
