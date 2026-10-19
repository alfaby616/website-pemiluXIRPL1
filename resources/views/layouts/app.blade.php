<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilu XI RPL 1 - Comic Edition</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4d03f;
            background-image: radial-gradient(#e67e22 15%, transparent 16%), radial-gradient(#e67e22 15%, transparent 16%);
            background-size: 30px 30px;
            background-position: 0 0, 15px 15px;
            font-family: 'Comic Neue', cursive;
            margin: 0; padding: 20px;
            color: #000;
        }
        .comic-container {
            max-width: 900px; margin: 0 auto;
            background: #fff; border: 6px solid #000;
            box-shadow: 12px 12px 0px #000; padding: 40px;
            border-radius: 15px; position: relative;
        }
        h1, h2, h3 { font-family: 'Bangers', cursive; letter-spacing: 2px; margin-top: 0; }
        
        /* Panel Utama */
        .comic-panel {
            border: 5px solid #000; box-shadow: 8px 8px 0px #000;
            padding: 25px; margin-bottom: 25px;
            background: #fff; border-radius: 8px;
            position: relative; overflow: hidden;
        }
        .comic-panel.yellow { background-color: #f1c40f; }
        .comic-panel.blue { background-color: #3498db; color: white; }
        .comic-panel.red { background-color: #e74c3c; color: white; }
        
        /* Balon Kata Khas Komik */
        .speech-bubble {
            position: relative; background: #fff; border: 4px solid #000;
            border-radius: 20px; padding: 15px; margin-bottom: 20px;
            box-shadow: 4px 4px 0px #000; color: #000; font-weight: bold;
        }
        .speech-bubble::after {
            content: ''; position: absolute; bottom: -20px; left: 30px;
            border-width: 20px 20px 0; border-style: solid;
            border-color: #000 transparent transparent transparent;
        }

        /* Tombol Interaktif */
        .btn-comic {
            background: #e74c3c; color: white; border: 4px solid #000;
            box-shadow: 6px 6px 0px #000; padding: 12px 25px;
            font-size: 1.5rem; font-family: 'Bangers', cursive;
            cursor: pointer; text-decoration: none; display: inline-block;
            transition: all 0.1s; text-transform: uppercase;
        }
        .btn-comic:hover { transform: translateY(-3px); box-shadow: 8px 8px 0px #000; }
        .btn-comic:active { box-shadow: 0px 0px 0px #000; transform: translate(6px, 6px); }
        .btn-blue { background: #3498db; }
        .btn-green { background: #2ecc71; }
        .btn-yellow { background: #f1c40f; color: #000; }
        
        /* Layout & Input */
        .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 30px; }
        input {
            width: 100%; padding: 12px; border: 4px solid #000; 
            margin-bottom: 15px; font-family: 'Comic Neue'; font-size: 1.2rem;
            box-sizing: border-box; border-radius: 5px;
            box-shadow: 3px 3px 0px #ccc;
        }
        input:focus { outline: none; border-color: #3498db; box-shadow: 3px 3px 0px #3498db; }

        /* Aksen & Animasi */
        .action-text {
            position: absolute; font-family: 'Bangers'; font-size: 3rem;
            color: #f1c40f; text-shadow: 3px 3px 0 #000, -2px -2px 0 #000, 2px -2px 0 #000, -2px 2px 0 #000;
            transform: rotate(-15deg); z-index: 10; animation: pop 0.5s ease-out forwards;
        }
        .avatar { width: 100px; height: 100px; border: 4px solid #000; border-radius: 50%; background: #eee; box-shadow: 4px 4px 0 #000; }
        
        /* Progress Bar (Statistik) */
        .stat-bar { background: #ecf0f1; border: 3px solid #000; border-radius: 10px; height: 25px; margin-top: 5px; overflow: hidden; position: relative;}
        .stat-fill { height: 100%; background: #2ecc71; border-right: 3px solid #000; transition: width 1s ease-in-out;}
        .stat-fill.striped { background-image: linear-gradient(45deg, rgba(255,255,255,.15) 25%, transparent 25%, transparent 50%, rgba(255,255,255,.15) 50%, rgba(255,255,255,.15) 75%, transparent 75%, transparent); background-size: 1rem 1rem; }

        @keyframes float { 0% { transform: translateY(0px); } 50% { transform: translateY(-10px); } 100% { transform: translateY(0px); } }
        @keyframes pop { 0% { transform: scale(0) rotate(-45deg); opacity: 0; } 80% { transform: scale(1.2) rotate(-10deg); opacity: 1; } 100% { transform: scale(1) rotate(-15deg); } }
        
        .floating { animation: float 3s ease-in-out infinite; }
        
        @media (max-width: 768px) { .grid-2 { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <div class="comic-container">
        @yield('content')
    </div>
</body>
</html>