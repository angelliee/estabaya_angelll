<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #0d0d0d, #1a1a1a, #2a1a22, #3b0d1e);
      background-size: 300% 300%;
      animation: gradientBG 8s ease infinite;
      position: relative;
      overflow: hidden;
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
  </style>
</head>
<body class="text-white font-serif">

  <div class="ribbon-bg"></div>

  <nav class="bg-black/70 backdrop-blur-md shadow-lg py-4 border-b border-pink-400/30 relative z-10">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-pink-300"><i class="fa-solid fa-pen-to-square mr-2"></i> Update User</h1>
      <a href="<?=site_url('users')?>"
         class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-pink-300 to-white text-black font-semibold px-5 py-2 rounded-full shadow-md transition duration-300 hover:scale-105">
        <i class="fa-solid fa-arrow-left"></i> Back
      </a>
    </div>
  </nav>

  <div class="max-w-lg mx-auto mt-12 px-4 relative z-10">
    <div class="bg-black/50 backdrop-blur-xl shadow-2xl rounded-3xl p-8 border border-pink-400/30">
      <h2 class="text-center text-2xl font-bold text-pink-200 mb-6">
        Update User Details
      </h2>

      <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-5">
        <div>
          <label class="block text-pink-300 text-sm mb-1">First Name</label>
          <input type="text" name="first_name" value="<?= html_escape($user['first_name'])?>" required
                 class="w-full p-3 rounded-xl bg-black/40 border border-pink-300/40 text-white focus:outline-none focus:ring-2 focus:ring-pink-400">
        </div>
        <div>
          <label class="block text-pink-300 text-sm mb-1">Last Name</label>
          <input type="text" name="last_name" value="<?= html_escape($user['last_name'])?>" required
                 class="w-full p-3 rounded-xl bg-black/40 border border-pink-300/40 text-white focus:outline-none focus:ring-2 focus:ring-pink-400">
        </div>
        <div>
          <label class="block text-pink-300 text-sm mb-1">Email</label>
          <input type="email" name="email" value="<?= html_escape($user['email'])?>" required
                 class="w-full p-3 rounded-xl bg-black/40 border border-pink-300/40 text-white focus:outline-none focus:ring-2 focus:ring-pink-400">
        </div>
        <div class="flex justify-center">
          <button type="submit"
                  class="bg-gradient-to-r from-pink-500 via-pink-300 to-white text-black font-semibold px-6 py-3 rounded-full shadow-md transition duration-300 hover:scale-105 hover:from-pink-600 hover:to-pink-200 flex items-center gap-2">
            <i class="fa-solid fa-check"></i> Save Changes
          </button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
