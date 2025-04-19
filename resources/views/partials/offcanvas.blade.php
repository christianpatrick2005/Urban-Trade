<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" data-bs-theme="dark">
    <title>Offcanvas Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .menu-icon {
        font-size: 24px;
        margin: 15px 0;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
  
  <!-- Button to open offcanvas -->
  <div class="col d-flex align-items-center justify-content-center">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
      style="background-color: transparent; color: white; border: none; font-size: 24px;">
      ☰
    </button>
  </div>
  

  
  <!-- Offcanvas Sidebar -->
  <div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasMenuLabel">Urban Trade</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="d-flex flex-column ">
        <div class="menu-icon">⏱️</div>
        <div class="menu-icon">📊</div>
        <div class="menu-icon">🏆</div>
        <div class="menu-icon">📅</div>
        <div class="menu-icon">🎁</div>
        <div class="menu-icon">⚙️</div>
      </div>
    </div>
  </div>
  
  
  </body>
  </html>