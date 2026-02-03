<?php
// Misal kita mau buat tahun footer otomatis
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loading...</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: #020617;
      color: #f8fafc;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      text-align: center;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .box {
      background: rgba(255,255,255,0.06);
      padding: 30px;
      border-radius: 16px;
      width: 100%;
      max-width: 400px;
      box-sizing: border-box;
    }

    .spinner {
      width: 40px;
      height: 40px;
      border: 4px solid rgba(255,255,255,0.2);
      border-top: 4px solid #22c55e;
      border-radius: 50%;
      margin: 0 auto 20px;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .hidden { display: none; }

    h1 { color: #ef4444; margin-bottom: 10px; font-size: 24px; }
    p { font-size: 16px; margin: 6px 0; }
    small { opacity: 0.6; font-size: 14px; }

    footer {
      padding: 12px 20px;
      text-align: center;
      font-size: 12px;
      opacity: 0.6;
      border-top: 1px solid rgba(255,255,255,0.1);
      background: rgba(255,255,255,0.03);
    }

    @media(max-width: 480px) {
      .box { padding: 20px; }
      h1 { font-size: 20px; }
      p, small { font-size: 14px; }
    }
  </style>
</head>
<body>

  <main>
    <div class="box">
      <!-- LOADING -->
      <div id="loading">
        <div class="spinner"></div>
        <p>Menghubungkan ke server...</p>
        <small>Mohon tunggu ya</small>
      </div>

      <!-- ROAST -->
      <div id="roast" class="hidden">
        <h1>🚫 403 Forbidden</h1>
        <p><strong>Server menolak permintaan kamu</strong></p>
        <p>Alasan: <em>kamu kepo</em> 🤨</p>
        <small>Silakan tutup tab ini dan pura-pura nggak pernah buka</small>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer>
    &copy; <?php echo $year; ?> kndchn
  </footer>

  <script>
    // Loading → roast
    setTimeout(() => {
      document.getElementById("loading").style.display = "none";
      document.getElementById("roast").classList.remove("hidden");
      document.title = "403 Forbidden";
    }, 2500);
  </script>
</body>
</html>
