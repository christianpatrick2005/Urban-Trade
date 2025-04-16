<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Binomo-style Layout</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
  <style>
    body {
      background-color: #1e1e1e;
      color: white;
    }
    .sidebar {
      background-color: #2c2c2c;
      height: 100vh;
    }
    .menu-icon {
      margin: 1rem 0;
      text-align: center;
      font-size: 1.5rem;
    }
    .header {
      background-color: #2c2c2c;
      padding: 1rem;
    }
    .main-content {
      padding: 1rem;
    }
    .price-box {
      background-color: #333;
      padding: 0.5rem 1rem;
      border-radius: 8px;
      display: inline-block;
      font-weight: bold;
    }
    .info-box {
      background-color: #333;
      padding: 1rem;
      border-radius: 8px;
      margin-bottom: 1rem;
    }
    .chart-container {
        width: 600px;
        height: 500px;
        margin: auto;
    }

    table {
        width: 100%;
        height: 100%;
    }

    .up {
        background-color: green;
    }

    .down {
        background-color: red;
    }

    #controls {
        text-align: center;
        margin-top: 20px;
    }

    button {
        padding: 10px;
        font-size: 16px;
        margin: 5px;
        cursor: pointer;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-1 sidebar d-flex flex-column align-items-center">
      <div class="menu-icon">⏱️</div>
      <div class="menu-icon">📊</div>
      <div class="menu-icon">🏆</div>
      <div class="menu-icon">📅</div>
      <div class="menu-icon">🎁</div>
      <div class="menu-icon">⚙️</div>
    </div>

    <!-- Main Area -->
    <div class="col-11">
      <!-- Header -->
      <div class="header d-flex justify-content-between align-items-center">
        <div><strong>binomo</strong> | Crypto IDX 83%</div>
        <div>Akun demo: <strong>Rp14.000.000,00</strong> <button class="btn btn-warning btn-sm">Deposit</button></div>
      </div>

      <!-- Main Content -->
      <div class="main-content row">
        <!-- Left Info Panel -->
        <div class="col-md-8">
          <div class="info-box d-flex justify-content-between">
            <div>Total Investasi: Rp0,00</div>
            <div>Pendapatan Diharapkan: Rp0,00</div>
            <div>Waktu Tersisa: 00:06</div>
          </div>
          <div class="mt-4">
            <div class="price-box">Harga Saat Ini: 641.8684</div>
          </div>
          <p class="mt-3">📍Waktu yang tersisa: <strong>6 detik</strong></p>

          <div class="d-flex justify-content-center mt-4">
            <div class="chart-container">
                <table id="line-chart" class="charts-css line show-data-on-hover">
                    <tbody id="chart-data">
                        <tr><td class="up" style="--start: 0.3; --end: 0.6;"></td></tr>
                        <tr><td class="down" style="--start: 0.6; --end: 0.2;"></td></tr>
                    </tbody>
                </table>
            </div>
          </div>
          
        </div>


        <!-- Right Panel -->
        <div class="col-md-4">
          <div class="info-box">
            <div class="mb-2">Jumlah: <strong>Rp14.000</strong></div>
            <div class="mb-2">Waktu: <strong>20:05</strong></div>
            <div class="mb-2">Pendapatan: <strong>+83%</strong> = Rp25.620,00</div>
            <div class="mb-2">Pendapat mayoritas: <span style="color: #00c176;">59%</span> naik, <span style="color: #ff4d4f;">41%</span> turun</div>
            <div class="d-grid gap-2 mt-4">
              <button class="btn btn-up btn-lg text-light" style="background-color: #00c176" onclick="addPoint(true)">⬆️ Naik</button>
              <button class="btn btn-down btn-lg text-light" style="background-color: #ff4d4f" onclick="addPoint(false)">⬇️ Turun</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<script>
    function addPoint(isUp) {
        const chartData = document.getElementById("chart-data");

        // Ambil nilai akhir dari elemen terakhir
        const lastRow = chartData.lastElementChild;
        const lastEnd = lastRow ? parseFloat(lastRow.firstElementChild.style.getPropertyValue("--end")) : 0.5;

        // Tentukan nilai baru (0.1 - 1.0)
        let newEnd = isUp ? lastEnd + 0.3 : lastEnd - 0.3;
        newEnd = Math.min(Math.max(newEnd, 0.1), 1.0); // Jaga agar tetap dalam batas

        // Buat elemen baru
        const newRow = document.createElement("tr");
        const newCell = document.createElement("td");
        newCell.classList.add(isUp ? "up" : "down");
        newCell.style.setProperty("--start", lastEnd);
        newCell.style.setProperty("--end", newEnd);
        newRow.appendChild(newCell);
        chartData.appendChild(newRow);
    }
</script>
</body>
</html>
