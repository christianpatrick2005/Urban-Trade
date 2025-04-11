<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart.css Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <style>
        .chart-container {
            width: 400px;
            height: 300px;
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

    <div class="chart-container">
        <table id="line-chart" class="charts-css line show-data-on-hover">
            <tbody id="chart-data">
                <tr><td class="up" style="--start: 0.3; --end: 0.6;"></td></tr>
                <tr><td class="down" style="--start: 0.6; --end: 0.2;"></td></tr>
            </tbody>
        </table>
    </div>

    <div id="controls">
        <button onclick="addPoint(true)">Naik</button>
        <button onclick="addPoint(false)">Turun</button>
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
