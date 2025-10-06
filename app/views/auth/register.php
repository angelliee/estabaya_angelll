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
<link href="https://fonts.googleapis.com/css2?family=IM+Fell+English&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  body {
    font-family: 'IM Fell English', serif;
    background: linear-gradient(135deg, #0d0d0d, #1a1a1a, #2a1a22, #3b0d1e);
    background-size: 300% 300%;
    animation: gradientBG 8s ease infinite;
    min-height: 100vh;
    overflow: hidden;
    position: relative;
    color: white;
  }

  @keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
  }

  .ribbon-bg {
    position: absolute;
    top: -100px;
    left: -150px;
    width: 400px;
    height: 120px;
    background: linear-gradient(45deg, #ffb3c1, #f72585);
    transform: rotate(-25deg);
    opacity: 0.3;
    filter: blur(4px);
    z-index: 0;
  }

  .register-card {
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 182, 193, 0.4);
    box-shadow: 0 0 25px rgba(255, 192, 203, 0.2);
  }

  .register-btn {
    background: linear-gradient(to right, #ff8fa3, #f72585);
    color: white;
  }

  .register-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 15px rgba(255, 182, 193, 0.6);
  }

  .link {
    color: #ffb3c1;
  }

  .link:hover {
    text-decoration: underline;
    color: #ffcce1;
  }

  .valid {
    color: #8aff8a;
  }

  .invalid {
    color: #ff6b6b;
  }
</style>
</head>

<body class="flex items-center justify-center min-h-screen">

  <!-- Background Ribbon -->
  <div class="ribbon-bg"></div>

  <!-- Register Card -->
  <div class="register-card rounded-3xl shadow-2xl p-8 w-full max-w-md relative z-10">
    <h1 class="text-3xl font-bold text-center text-pink-300 mb-6 flex items-center justify-center gap-2">
      <i class="fa-solid fa-user-plus text-pink-400"></i> Create Account
    </h1>

    <form method="post" class="space-y-5" id="registerForm">
      <!-- Username -->
      <div>
        <label class="block text-pink-200 font-medium mb-1">Username</label>
        <input type="text" name="username" required
               class="w-full px-4 py-3 rounded-lg border border-pink-400/40 bg-white/90 text-black focus:ring-2 focus:ring-pink-400 focus:outline-none placeholder-gray-500">
      </div>

      <!-- Password -->
      <div>
        <label class="block text-pink-200 font-medium mb-1">Password</label>
        <input type="password" name="password" id="password" required
               pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
               title="Must contain at least one uppercase letter, one lowercase letter, one number, and be at least 8 characters long"
               class="w-full px-4 py-3 rounded-lg border border-pink-400/40 bg-white/90 text-black focus:ring-2 focus:ring-pink-400 focus:outline-none placeholder-gray-500">
        <ul class="text-sm mt-2 ml-1" id="password-requirements">
          <li id="req-length" class="invalid">At least 8 characters</li>
          <li id="req-uppercase" class="invalid">At least one uppercase letter</li>
          <li id="req-lowercase" class="invalid">At least one lowercase letter</li>
          <li id="req-number" class="invalid">At least one number</li>
        </ul>
      </div>

      <!-- Role -->
      <div>
        <label class="block text-pink-200 font-medium mb-1">Role</label>
        <select name="role"
                class="w-full px-4 py-3 rounded-lg border border-pink-400/40 bg-white/90 text-black focus:ring-2 focus:ring-pink-400 focus:outline-none">
          <option value="user">User</option>
          <option value="admin">Admin</option>
        </select>
      </div>

      <!-- Register Button -->
      <button type="submit"
        class="w-full py-3 rounded-full font-semibold register-btn transition-all duration-300 shadow-lg">
        <i class="fa-solid fa-user-plus mr-2"></i> Register
      </button>
    </form>

    <p class="text-center text-pink-200 mt-6 text-sm">
      Already have an account?
      <a href="<?= site_url('auth/login') ?>" class="link font-semibold">Login</a>
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


