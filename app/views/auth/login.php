<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
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

  .login-card {
    background: rgba(0, 0, 0, 0.6);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 182, 193, 0.4);
    box-shadow: 0 0 25px rgba(255, 192, 203, 0.2);
  }

  .login-btn {
    background: linear-gradient(to right, #ff8fa3, #f72585);
    color: white;
  }

  .login-btn:hover {
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
</style>
</head>

<body class="flex items-center justify-center min-h-screen">

  <!-- Background Ribbon -->
  <div class="ribbon-bg"></div>

  <!-- Login Card -->
  <div class="login-card rounded-3xl shadow-2xl p-8 w-full max-w-md relative z-10 text-center">
    <h1 class="text-3xl font-bold text-pink-300 mb-6 flex items-center justify-center gap-2">
      <i class="fa-solid fa-user-lock text-pink-400"></i> Welcome Back
    </h1>

    <form method="post" class="space-y-5 text-left">
      <div>
        <label class="block text-pink-200 font-medium mb-1">Username</label>
        <input type="text" name="username" required
               class="w-full px-4 py-3 rounded-lg border border-pink-400/40 bg-white/90 text-black focus:ring-2 focus:ring-pink-400 focus:outline-none placeholder-gray-500">
      </div>

      <div>
        <label class="block text-pink-200 font-medium mb-1">Password</label>
        <input type="password" name="password" required
               class="w-full px-4 py-3 rounded-lg border border-pink-400/40 bg-white/90 text-black focus:ring-2 focus:ring-pink-400 focus:outline-none placeholder-gray-500">
      </div>

      <button type="submit"
        class="w-full py-3 rounded-full font-semibold login-btn transition-all duration-300 shadow-lg">
        <i class="fa-solid fa-right-to-bracket mr-2"></i> Login
      </button>
    </form>

    <p class="text-center text-pink-200 mt-6 text-sm">
      Don’t have an account?
      <a href="<?= site_url('/') ?>" class="link font-semibold">Register</a>
    </p>
  </div>

</body>
</html>


