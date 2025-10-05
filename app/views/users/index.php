<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Directory</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
  <style>
    body {
      background: linear-gradient(135deg, #0d0d0d, #1a1a1a, #2a1a22, #3b0d1e);
      background-size: 300% 300%;
      animation: gradientBG 8s ease infinite;
      position: relative;
      min-height: 100vh;        /* para mag-adjust sa taas */
      overflow-x: hidden;       /* iwas horizontal scroll */
      overflow-y: auto;         /* enable vertical scroll */
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

  <!-- Background Ribbon -->
  <div class="ribbon-bg"></div>

  <!-- Navbar -->
  <nav class="bg-black/70 backdrop-blur-md shadow-lg py-4 border-b border-pink-400/30 relative z-10">
    <div class="max-w-7xl mx-auto px-6">
      <h1 class="text-2xl font-bold text-pink-300"><i class="fa-solid fa-users mr-2"></i>User Directory</h1>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-6xl mx-auto mt-10 px-4 relative z-10 pb-10">
    <div class="bg-black/50 backdrop-blur-xl shadow-2xl rounded-3xl p-6 border border-pink-400/30">

      <!-- Search Bar -->
      <form method="get" action="<?=site_url('/users')?>" class="mb-4 flex justify-end">
        <input 
          type="text" 
          name="q" 
          value="<?=html_escape($_GET['q'] ?? '')?>" 
          placeholder="Search student..." 
          class="px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500 w-64 text-black">
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r-lg shadow transition-all duration-300">
          <i class="fa fa-search"></i>
        </button>
      </form>

      <!-- Add User Button -->
      <div class="flex justify-end mb-6">
        <a href="<?=site_url('users/create')?>"
           class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500 via-pink-300 to-white text-black font-semibold px-5 py-2 rounded-full shadow-md transition duration-300 hover:scale-105">
          <i class="fa-solid fa-user-plus"></i> Add New
        </a>
      </div>

      <!-- Users Table -->
      <div class="overflow-x-auto rounded-2xl border border-pink-400/30 shadow">
        <table class="w-full text-center border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-gray-800 to-gray-900 text-white text-sm uppercase tracking-wide">
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Lastname</th>
              <th class="py-3 px-4">Firstname</th>
              <th class="py-3 px-4">Email</th>
              <th class="py-3 px-4">Action</th>
            </tr>
          </thead>
          <tbody class="text-gray-300 text-sm">
            <?php foreach ($users as $user): ?>
              <tr class="hover:bg-white/10 transition duration-200">
                <td class="py-3 px-4"><?=html_escape($user['id']);?></td>
                <td class="py-3 px-4"><?=html_escape($user['last_name']);?></td>
                <td class="py-3 px-4"><?=html_escape($user['first_name']);?></td>
                <td class="py-3 px-4"><?=html_escape($user['email']);?></td>
                <td class="py-3 px-4 flex justify-center gap-3">
                  <a href="<?=site_url('users/update/'.$user['id']);?>"
                     class="bg-gradient-to-r from-yellow-400 to-amber-500 text-black font-semibold px-3 py-1 rounded-lg shadow flex items-center gap-1 hover:scale-105 transition">
                    <i class="fa-solid fa-pen-to-square"></i> Update
                  </a>
                  <a href="<?=site_url('users/delete/'.$user['id']);?>"
                     class="bg-gradient-to-r from-red-500 to-rose-600 text-white px-3 py-1 rounded-lg shadow flex items-center gap-1 hover:scale-105 transition">
                     <i class="fa-solid fa-trash"></i> Delete
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="mt-4 flex justify-center">
        <div class="pagination flex space-x-2">
          <?=$page ?? ''?>
        </div>
        <!-- Logout Button -->
    <a href="<?=site_url('auth/logout');?>"
       class="logout-btn">
       <i class="fa-solid fa-right-from-bracket"></i> Logout
    </a>

      </div>

    </div>
  </div>

</body> 
</html>
