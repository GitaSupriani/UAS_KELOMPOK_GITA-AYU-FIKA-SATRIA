<!DOCTYPE html>
<html>
<head>
    <title>Tiket Konser</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .tiket {
            width: 200px;
            height: 450px;
            margin: 40px auto;
            padding: 20px;
            background-image: url('{{ asset('tiket2.jpg') }}');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.5);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .judul, .band, .konser {
            color: #00bfff; /* biru cerah */
            text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
        }

        .judul {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .band {
            font-size: 36px;
            font-weight: bold;
            margin: 5px 0;
            text-transform: uppercase;
        }

        .konser {
            font-size: 18px;
            font-style: italic;
        }

        .info {
            font-size: 14px;
            color: #fff;
            background-color: rgba(0,0,0,0.5);
            padding: 8px;
            border-radius: 8px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
        }

        .nomor-antrian {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            background-color: rgba(0,0,0,0.4);
            padding: 6px;
            border-radius: 8px;
            color: #ffeb3b;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.7);
        }
    </style>
</head>
<body>
    <div class="tiket">
        <div>
            <div class="judul">AFTERMIDNIGHT</div>
            <div class="band">Langit Sore</div>
            <div class="konser">Live Concert</div>
        </div>

        {{-- Nomor Antrian --}}
        <div class="nomor-antrian">
            No: {{ $antrian->nomor }}
        </div>

        <div class="info">
            {{ $antrian->nama }}<br>
            Lokasi: Gedung Citra<br>
            16-05-2015 19:00<br>
        </div>
    </div>

    <!-- Tombol cetak -->
    <div style="text-align: center; margin-top: 20px;">
        <button onclick="window.print()" 
                style="padding: 10px 20px; 
                       font-size: 16px; 
                       background-color: #00bfff; 
                       color: white; 
                       border: none; 
                       border-radius: 5px; 
                       cursor: pointer;">
            🖨️ Cetak Tiket
        </button>
    </div>
</body>
</html>
