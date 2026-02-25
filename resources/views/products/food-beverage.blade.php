<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food & Beverage – POS App</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #fff8f0; color: #333; }
        header { background: linear-gradient(135deg, #e65100, #bf360c); color: white; padding: 20px 40px; display: flex; align-items: center; gap: 12px; }
        header h1 { font-size: 1.6rem; }
        nav { background: #bf360c; padding: 10px 40px; }
        nav a { color: #ffccbc; text-decoration: none; margin-right: 20px; font-size: 0.95rem; }
        nav a:hover { color: #fff; }
        .page-banner { background: linear-gradient(135deg, #e65100, #bf360c); color: white; padding: 50px 40px; }
        .page-banner span { background: rgba(255,255,255,0.2); padding: 4px 14px; border-radius: 20px; font-size: 0.85rem; }
        .page-banner h2 { font-size: 2rem; margin: 12px 0 8px; }
        .page-banner p { opacity: 0.85; }
        .products { display: flex; flex-wrap: wrap; gap: 20px; padding: 40px; }
        .product-card { background: white; border-radius: 12px; padding: 20px; width: 200px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); text-align: center; transition: transform .2s; }
        .product-card:hover { transform: translateY(-4px); }
        .product-card .img { font-size: 3rem; margin-bottom: 10px; }
        .product-card h3 { font-size: 0.95rem; margin-bottom: 6px; }
        .product-card .price { color: #e65100; font-weight: 700; font-size: 1rem; }
        footer { background: #bf360c; color: #ffccbc; text-align: center; padding: 16px; font-size: 0.85rem; margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <span style="font-size:1.8rem">🍔</span>
        <h1>POS App</h1>
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/category/food-beverage">Food & Beverage</a>
        <a href="/category/beauty-health">Beauty & Health</a>
        <a href="/category/home-care">Home Care</a>
        <a href="/category/baby-kid">Baby & Kid</a>
        <a href="/penjualan">Penjualan</a>
    </nav>

    <div class="page-banner">
        <span>🍔 Kategori Produk</span>
        <h2>Food & Beverage</h2>
        <p>Temukan berbagai pilihan makanan dan minuman terbaik.</p>
    </div>

    <div class="products">
        <div class="product-card"><div class="img">🍕</div><h3>Pizza Margherita</h3><p class="price">Rp 45.000</p></div>
        <div class="product-card"><div class="img">🍜</div><h3>Mie Goreng Spesial</h3><p class="price">Rp 22.000</p></div>
        <div class="product-card"><div class="img">🧃</div><h3>Jus Alpukat</h3><p class="price">Rp 18.000</p></div>
        <div class="product-card"><div class="img">☕</div><h3>Kopi Susu</h3><p class="price">Rp 15.000</p></div>
        <div class="product-card"><div class="img">🍰</div><h3>Kue Ulang Tahun</h3><p class="price">Rp 85.000</p></div>
        <div class="product-card"><div class="img">🍱</div><h3>Nasi Box Spesial</h3><p class="price">Rp 35.000</p></div>
    </div>

    <footer>&copy; {{ date('Y') }} POS App. All rights reserved.</footer>
</body>
</html>
