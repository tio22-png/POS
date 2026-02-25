<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home – POS App</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f0f4f8; color: #333; }
        header {
            background: linear-gradient(135deg, #1a73e8, #0d47a1);
            color: white;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        header h1 { font-size: 1.6rem; }
        nav { background: #0d47a1; padding: 10px 40px; }
        nav a { color: #90caf9; text-decoration: none; margin-right: 20px; font-size: 0.95rem; }
        nav a:hover { color: #fff; }
        .hero {
            background: linear-gradient(135deg, #1a73e8 0%, #0d47a1 100%);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .hero h2 { font-size: 2.5rem; margin-bottom: 12px; }
        .hero p { font-size: 1.1rem; opacity: 0.9; margin-bottom: 30px; }
        .hero a {
            background: white;
            color: #1a73e8;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            margin: 5px;
            display: inline-block;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 50px 40px;
            justify-content: center;
        }
        .card {
            background: white;
            border-radius: 12px;
            padding: 28px;
            width: 220px;
            text-align: center;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            transition: transform .2s;
        }
        .card:hover { transform: translateY(-4px); }
        .card .icon { font-size: 2.5rem; margin-bottom: 12px; }
        .card h3 { font-size: 1rem; margin-bottom: 6px; color: #1a73e8; }
        .card p { font-size: 0.85rem; color: #666; }
        footer { background: #0d47a1; color: #90caf9; text-align: center; padding: 16px; font-size: 0.85rem; }
    </style>
</head>
<body>
    <header>
        <span style="font-size:1.8rem">🛒</span>
        <h1>POS App</h1>
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/category/food-beverage">Food & Beverage</a>
        <a href="/category/beauty-health">Beauty & Health</a>
        <a href="/category/home-care">Home Care</a>
        <a href="/category/baby-kid">Baby & Kid</a>
        <a href="/user/1/name/Admin">User</a>
        <a href="/penjualan">Penjualan</a>
    </nav>

    <div class="hero">
        <h2>Selamat Datang di POS App</h2>
        <p>Sistem Point of Sale untuk mengelola produk dan transaksi dengan mudah.</p>
        <a href="/penjualan">Mulai Transaksi</a>
        <a href="/category/food-beverage" style="background:transparent;color:white;border:2px solid white;">Lihat Produk</a>
    </div>

    <div class="cards">
        <div class="card">
            <div class="icon">🍔</div>
            <h3>Food & Beverage</h3>
            <p>Produk makanan dan minuman</p>
        </div>
        <div class="card">
            <div class="icon">💄</div>
            <h3>Beauty & Health</h3>
            <p>Produk kecantikan dan kesehatan</p>
        </div>
        <div class="card">
            <div class="icon">🏠</div>
            <h3>Home Care</h3>
            <p>Produk perawatan rumah</p>
        </div>
        <div class="card">
            <div class="icon">👶</div>
            <h3>Baby & Kid</h3>
            <p>Produk bayi dan anak</p>
        </div>
    </div>

    <footer>&copy; {{ date('Y') }} POS App. All rights reserved.</footer>
</body>
</html>
