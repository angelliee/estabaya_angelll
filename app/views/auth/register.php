<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=IM+Fell+English&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  body {
    font-family: 'IM Fell English', serif;
    background-color: #fae5b3;
  }
  .font-title {
    font-family: 'Cinzel Decorative', cursive;
    letter-spacing: 2px;
  }
  .btn-hover:hover {
    box-shadow: 0 0 12px gold, 0 0 24px crimson;
    transform: scale(1.05);
  }
  .valid {
    color: green;
  }
  .invalid {
    color: red;
  }
</style>
</head>
<body class="min-h-screen flex items-center justify-center">

  <!-- Register Card -->
  <div class="bg-yellow-50 border-4 border-yellow-700 rounded-xl shadow-xl w-full max-w-sm p-8">
    <h1 class="font-title text-3xl text-center text-red-900 mb-6 flex items-center justify-center gap-2">
      <i class="fa-solid fa-hat-wizard text-yellow-700"></i> Create Account
    </h1>

    <form method="post" class="space-y-5" id="registerForm">
      <div>
        <label class="block text-yellow-900 font-medium mb-1">Username</label>
        <input type="text" name="username" required
               class="w-full px-4 py-3 border-2 border-yellow-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-800 bg-yellow-100 placeholder-yellow-700">
      </div>

      <div>
        <label class="block text-yellow-900 font-medium mb-1">Password</label>
        <input type="password" name="password" id="password" required
               pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
               title="Must contain at least one uppercase letter, one lowercase letter, one number, and be at least 8 characters long"
               class="w-full px-4 py-3 border-2 border-yellow-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-800 bg-yellow-100 placeholder-yellow-700">
        <ul class="text-sm mt-2 ml-1" id="password-requirements">
          <li id="req-length" class="invalid">At least 8 characters</li>
          <li id="req-uppercase" class="invalid">At least one uppercase letter</li>
          <li id="req-lowercase" class="invalid">At least one lowercase letter</li>
          <li id="req-number" class="invalid">At least one number</li>
        </ul>
      </div>

      <div>
        <label class="block text-yellow-900 font-medium mb-1">Role</label>
        <select name="role"
                class="w-full px-4 py-3 border-2 border-yellow-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-800 bg-yellow-100 text-yellow-900">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <button type="submit"
        class="w-full py-3 bg-gradient-to-r from-red-800 to-yellow-700 text-yellow-100 font-title text-lg rounded-lg shadow-lg btn-hover transition duration-300">
        <i class="fa-solid fa-user-plus"></i> Register
      </button>
    </form>

    <p class="text-center text-yellow-900 mt-5 text-sm">
      Already have an account?
      <a href="<?= site_url('auth/login') ?>" class="text-red-800 font-semibold hover:underline">Login</a>
    </p>
  </div>

<script>
const passwordInput = document.getElementById("password");
const reqLength = document.getElementById("req-length");
const reqUppercase = document.getElementById("req-uppercase");
const reqLowercase = document.getElementById("req-lowercase");
const reqNumber = document.getElementById("req-number");

passwordInput.addEventListener("input", function() {
  const value = passwordInput.value;

  // Check length
  value.length >= 8 ? reqLength.className = "valid" : reqLength.className = "invalid";

  // Check uppercase
  /[A-Z]/.test(value) ? reqUppercase.className = "valid" : reqUppercase.className = "invalid";

  // Check lowercase
  /[a-z]/.test(value) ? reqLowercase.className = "valid" : reqLowercase.className = "invalid";

  // Check number
  /\d/.test(value) ? reqNumber.className = "valid" : reqNumber.className = "invalid";
});
</script>

</body>
</html>
