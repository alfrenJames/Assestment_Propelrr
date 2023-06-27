<form id="registrationForm" action="addPeople.php" method="post" onsubmit="return validateForm()">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required>
    <span id="fullnameError" class="error-message"></span>

    <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" required>
    <span id="emailError" class="error-message"></span>

    <label for="mobile">Mobile Number:</label>
    <input type="tel" id="mobile" name="mobile" required>
    <span id="mobileError" class="error-message"></span>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="age">Age:</label>
    <input type="text" id="age" name="age" readonly>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
      <option value="">Select</option>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
    <input type="submit" value="Submit">
  </form>
