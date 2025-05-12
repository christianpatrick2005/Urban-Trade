<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trading Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <style>
        :root {
            --primary-bg: #1a1a1a;
            --secondary-bg: #2d2d2d;
            --accent-green: #00c176;
            --accent-red: #ff4d4f;
            --accent-yellow: #ffd700;
        }
        
        body {
            background-color: var(--primary-bg);
            color: white;
            min-height: 100vh;
            margin-top: 100px
        }
        
        .sidebar {
            background-color: var(--secondary-bg);
            padding: 1rem 0;
            border-right: 1px solid #3d3d3d;
        }
        
        .menu-icon {
            padding: 1.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
            border-radius: 8px;
            margin: 0.5rem 0;
        }
        
        .menu-icon:hover {
            background-color: #3d3d3d;
            transform: scale(1.1);
        }
        
        .header {
            background-color: var(--secondary-bg);
            padding: 1rem 2rem;
            border-bottom: 1px solid #3d3d3d;
        }
        
        .chart-container {
            background: var(--secondary-bg);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        .info-card {
            background: var(--secondary-bg);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border: 1px solid #3d3d3d;
        }
        
        .price-tag {
            background: linear-gradient(45deg, #2d2d2d, #3d3d3d);
            padding: 0.8rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        
        .btn-trade {
            padding: 1.2rem;
            font-size: 1.1rem;
            border-radius: 8px;
            transition: all 0.2s ease;
            border: none;
        }
        
        .btn-trade:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        
        #line-chart {
            --color: rgba(255,255,255,0.2);
            --axes-width: 1px;
            --grid-gap: 15px;
        }
        
        .progress-bar {
            height: 6px;
            border-radius: 3px;
            overflow: hidden;
            background: #3d3d3d;
        }
        
        .progress-fill {
            height: 100%;
            transition: width 0.5s ease;
        }
    </style>
</head>
<body class="">
    @include('partials/navbar')
    
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            {{-- <div class="col-1 sidebar">
                <div class="d-flex flex-column align-items-center">
                    <div class="menu-icon">⏱️</div>
                    <div class="menu-icon">📊</div>
                    <div class="menu-icon">🏆</div>
                    <div class="menu-icon">📅</div>
                    <div class="menu-icon">🎁</div>
                    <div class="menu-icon">⚙️</div>
                </div>
            </div> --}}

            <!-- Main Content -->
            <div class="col-13 p-4">
                <!-- Header -->
                <div class="header d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center gap-3">
                        <h4 class="mb-0 fw-bold">CRYPTO IDX</h4>
                        <span class="badge bg-success">83% Profit</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="">Saldo:</span>
                            <span class="price-tag">Rp14.000.000</span>
                        </div>
                        <a class="btn btn-warning d-flex align-items-center gap-2" href="donasi">
                            <span>💰</span>
                            <span>Deposit</span>
                        </a>
                    </div>
                </div>

                <!-- Trading Section -->
                <div class="row g-4">
                    <!-- Chart Area -->
                    <div class="col-lg-8">
                        <div class="chart-container">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="mb-0">BTC/IDR</h5>
                            </div>
                            
                            <div class="position-relative">
                                <div id="my-chart" class="chart-container">
                                    <table id="line-chart" class="charts-css line show-data-on-hover show-data-axes">
                                        <tbody id="chart-data">
                                            <tr><td class="up" style="--start: 0.3; --end: 0.6;"></td></tr>
                                            <tr><td class="down" style="--start: 0.6; --end: 0.2;"></td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="position-absolute top-0 end-0 mt-3 me-3 d-flex gap-2">
                                    <div class="badge bg-success">+59% Naik</div>
                                    <div class="badge bg-danger">+41% Turun</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Trading Panel -->
                    <div class="col-lg-4">
                        <div class="info-card">
                            <div class="mb-4">
                                <h5 class="mb-3">Order Details</h5>
                                <div class="d-flex flex-column gap-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="stake-amount" class="form-label mb-0">Jumlah (Rp):</label>
                                        <input type="range" id="stake-amount" class="form-range" min="5000" max="100000" step="1000" oninput="updateStakeValue(this.value)">
                                    </div>
                                    <div class="text-end mt-1">
                                        <span id="stake-display" class="fw-bold">Rp 10.000</span>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <span class="">Pendapatan:</span>
                                        <span class="text-success fw-bold"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-3">
                                <button class="btn-trade bg-success" onclick="addPoint(true)">
                                    ⬆️ Naik (+83%)
                                </button>
                                <button class="btn-trade bg-danger" onclick="addPoint(false)">
                                    ⬇️ Turun (-100%)
                                </button>
                            </div>
                        </div>

                        <div class="info-card">
                            <h5 class="mb-3">Market Info</h5>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex justify-content-between">
                                    <span>Volume 24h:</span>
                                    <span id="btc-volume">Loading...</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span>Perubahan 24h:</span>
                                    <span id="btc-change" class="text-success">Loading...</span>
                                </div>                                
                                <div class="d-flex justify-content-between">
                                    <span class="">Likuiditas:</span>
                                    <span class="text-warning">Tinggi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function addPoint(isUp) {
            const chartData = document.getElementById("chart-data");
            const lastRow = chartData.lastElementChild;
            const lastEnd = lastRow ? parseFloat(lastRow.firstElementChild.style.getPropertyValue("--end")) : 0.5;

            let newEnd = isUp ? 
                Math.min(lastEnd + (Math.random() * 0.4), 1.0) : 
                Math.max(lastEnd - (Math.random() * 0.4), 0.1);

            const newRow = document.createElement("tr");
            const newCell = document.createElement("td");
            newCell.classList.add(isUp ? "up" : "down");
            newCell.style.setProperty("--start", lastEnd);
            newCell.style.setProperty("--end", newEnd);
            
            // Add animation
            newCell.style.opacity = "0";
            setTimeout(() => {
                newCell.style.opacity = "1";
                newCell.style.transition = "opacity 0.3s ease";
            }, 10);

            newRow.appendChild(newCell);
            chartData.appendChild(newRow);

            // Auto-scroll to latest data point
            chartData.parentElement.scrollLeft = chartData.parentElement.scrollWidth;
        }
    </script>

    <script>
        function updateStakeValue(value) {
            document.getElementById('stake-display').innerText = `Rp ${parseInt(value).toLocaleString('id-ID')}`;
        }
    </script>


    @vite(['resources/js/crypto.js'])
</body>
</html>