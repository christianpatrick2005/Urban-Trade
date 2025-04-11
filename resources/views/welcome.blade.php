<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart with Dynamic Points</title>

    <style>
        #chart {
            border-bottom: 2px solid black;
            border-left: 2px solid black;
            margin-left: 500px;
            margin-top: 100px;
            padding: 0;
            height: 250px;
            width: 250px;
            position: relative;
        }

        #x1, #y1 {
            position: absolute;
            font-size: larger;
        }

        #x1 {
            bottom: -50px;
            left: 100px;
        }

        #y1 {
            left: -60px;
            bottom: 110px;
        }

        .point {
            border-radius: 50%;
            position: absolute;
            height: 12px;
            width: 12px;
            background-color: blue;
            z-index: 1;
        }

        .line {
            height: 3px;
            position: absolute;
            transform-origin: left bottom;
            width: 57px;
        }

        .line.up {
            background-color: green;
        }

        .line.down {
            background-color: red;
        }

        #controls {
            margin-top: 20px;
            text-align: center;
        }

        button {
            margin: 5px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div id="chart">
        <p id="x1">x-Axis</p>
        <p id="y1">y-Axis</p>
    </div>

    <div id="controls">
        <button onclick="addPoint(true)">Naik</button>
        <button onclick="addPoint(false)">Turun</button>
        <a href="chart">halaman lain</a>
        <a href="donasi">halaman lain</a>
    </div>

    <script>
        let points = [
            { x: 36, y: 76 }
        ];
        let lastX = 36;
        let lastY = 76;

        function addPoint(isUp) {
            const chart = document.getElementById("chart");

            // Hitung posisi baru
            lastX += 40;
            lastY += isUp ? 40 : -40;

            // Buat titik baru
            const newPoint = document.createElement("div");
            newPoint.classList.add("point");
            newPoint.style.left = `${lastX}px`;
            newPoint.style.bottom = `${lastY}px`;

            // Buat garis baru
            if (points.length > 0) {
                const newLine = document.createElement("div");
                newLine.classList.add("line", isUp ? "up" : "down");
                newLine.style.left = `${lastX  }px`;
                newLine.style.bottom = `${isUp ? lastY : lastY}px`;
                newLine.style.transform = `rotate(${isUp ? 135 : -135}deg)`;

                chart.appendChild(newLine);
            }

            // Simpan data titik baru
            points.push({ x: lastX, y: lastY });
            chart.appendChild(newPoint);
        }
    </script>

</body>
</html>
