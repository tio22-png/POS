<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Care – POS App</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #e8f5e9; color: #333; }
        header { background: linear-gradient(135deg, #2e7d32, #1b5e20); color: white; padding: 20px 40px; display: flex; align-items: center; gap: 12px; }
        header h1 { font-size: 1.6rem; }
        nav { background: #1b5e20; padding: 10px 40px; }
        nav a { color: #a5d6a7; text-decoration: none; margin-right: 20px; font-size: 0.95rem; }
        nav a:hover { color: #fff; }
        .page-banner { background: linear-gradient(135deg, #2e7d32, #1b5e20); color: white; padding: 50px 40px; }
        .page-banner span { background: rgba(255,255,255,0.2); padding: 4px 14px; border-radius: 20px; font-size: 0.85rem; }
        .page-banner h2 { font-size: 2rem; margin: 12px 0 8px; }
        .page-banner p { opacity: 0.85; }
        .products { display: flex; flex-wrap: wrap; gap: 20px; padding: 40px; }
        .product-card { background: white; border-radius: 12px; padding: 20px; width: 200px; box-shadow: 0 2px 10px rgba(0,0,0,0.08); text-align: center; transition: transform .2s; }
        .product-card:hover { transform: translateY(-4px); }
        .product-card .img { font-size: 3rem; margin-bottom: 10px; }
        .product-card h3 { font-size: 0.95rem; margin-bottom: 6px; }
        .product-card .price { color: #2e7d32; font-weight: 700; font-size: 1rem; }
        footer { background: #1b5e20; color: #a5d6a7; text-align: center; padding: 16px; font-size: 0.85rem; margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <span style="font-size:1.8rem">🏠</span>
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
        <span>🏠 Kategori Produk</span>
        <h2>Home Care</h2>
        <p>Produk perawatan rumah untuk kenyamanan keluarga Anda.</p>
    </div>

    <div class="products">
        <div class="product-card"><div class="img">🧹</div><h3>Sapu Bersih Pro</h3><p class="price">Rp 32.000</p></div>
        <div class="product-card"><div class="img">🧺</div><h3>Keranjang Laundry</h3><p class="price">Rp 48.000</p></div>
        <div class="product-card"><div class="img">🪣</div><h3>Ember Serbaguna</h3><p class="price">Rp 25.000</p></div>
        <div class="product-card"><div class="img">🧽</div><h3>Spons Cuci Piring</h3><p class="price">Rp 12.000</p></div>
        <div class="product-card"><div class="img">🫧</div><h3>Sabun Cuci Piring</h3><p class="price">Rp 18.000</p></div>
        <div class="product-card"><div class="img">🪴</div><h3>Pupuk Tanaman</h3><p class="price">Rp 40.000</p></div>
    </div>

    <footer>&copy; {{ date('Y') }} POS App. All rights reserved.</footer>
</body>
</html>
