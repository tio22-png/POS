<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan – POS App</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #1a1a2e; color: #eee; }
        header { background: linear-gradient(135deg, #16213e, #0f3460); color: white; padding: 16px 30px; display: flex; align-items: center; justify-content: space-between; }
        header h1 { font-size: 1.4rem; display: flex; align-items: center; gap: 10px; }
        nav a { color: #90caf9; text-decoration: none; margin-left: 16px; font-size: 0.9rem; }
        nav a:hover { color: #fff; }
        .pos-layout { display: flex; height: calc(100vh - 60px); }
        .products-panel { flex: 1; padding: 20px; overflow-y: auto; background: #16213e; }
        .products-panel h2 { font-size: 1rem; color: #90caf9; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 1px; }
        .category-tabs { display: flex; gap: 8px; margin-bottom: 16px; flex-wrap: wrap; }
        .tab { background: #0f3460; color: #90caf9; border: none; padding: 6px 14px; border-radius: 20px; cursor: pointer; font-size: 0.8rem; transition: all .2s; }
        .tab.active, .tab:hover { background: #1a73e8; color: white; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(130px, 1fr)); gap: 12px; }
        .product-item { background: #0f3460; border-radius: 10px; padding: 14px; text-align: center; cursor: pointer; transition: all .2s; border: 2px solid transparent; }
        .product-item:hover { background: #1a73e8; border-color: #4fc3f7; transform: scale(1.03); }
        .product-item .icon { font-size: 2rem; margin-bottom: 6px; }
        .product-item h4 { font-size: 0.78rem; margin-bottom: 4px; }
        .product-item p { color: #4fc3f7; font-size: 0.8rem; font-weight: 700; }
        .cart-panel { width: 320px; background: #0f3460; padding: 20px; display: flex; flex-direction: column; border-left: 1px solid #1a73e8; }
        .cart-panel h2 { font-size: 1rem; color: #90caf9; margin-bottom: 16px; text-transform: uppercase; letter-spacing: 1px; }
        .cart-items { flex: 1; overflow-y: auto; }
        .cart-item { background: #16213e; border-radius: 8px; padding: 12px; margin-bottom: 8px; display: flex; justify-content: space-between; align-items: center; }
        .cart-item .name { font-size: 0.85rem; font-weight: 600; }
        .cart-item .price { font-size: 0.8rem; color: #4fc3f7; }
        .cart-item .qty { background: #1a73e8; color: white; padding: 2px 8px; border-radius: 10px; font-size: 0.75rem; }
        .cart-summary { border-top: 1px solid #1a73e8; padding-top: 16px; margin-top: 10px; }
        .summary-row { display: flex; justify-content: space-between; margin-bottom: 6px; font-size: 0.9rem; }
        .summary-row.total { font-size: 1.1rem; font-weight: 700; color: #4fc3f7; margin-top: 10px; padding-top: 10px; border-top: 1px dashed #1a73e8; }
        .btn-bayar { background: linear-gradient(135deg, #1a73e8, #4fc3f7); color: white; border: none; padding: 14px; border-radius: 10px; font-size: 1rem; font-weight: 700; cursor: pointer; margin-top: 14px; width: 100%; letter-spacing: 1px; transition: opacity .2s; }
        .btn-bayar:hover { opacity: 0.85; }
        .empty-cart { text-align: center; color: #4a6fa0; padding: 40px 0; }
        .empty-cart .icon { font-size: 3rem; margin-bottom: 10px; }
    </style>
</head>
<body>
    <header>
        <h1>🛒 POS App – Kasir</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/category/food-beverage">Produk</a>
            <a href="/user/1/name/Kasir">Profil</a>
        </nav>
    </header>

    <div class="pos-layout">
        <!-- Panel Produk -->
        <div class="products-panel">
            <h2>📦 Daftar Produk</h2>
            <div class="category-tabs">
                <button class="tab active">Semua</button>
                <button class="tab">🍔 Food & Beverage</button>
                <button class="tab">💄 Beauty & Health</button>
                <button class="tab">🏠 Home Care</button>
                <button class="tab">👶 Baby & Kid</button>
            </div>
            <div class="product-grid">
                <div class="product-item"><div class="icon">🍕</div><h4>Pizza Margherita</h4><p>Rp 45.000</p></div>
                <div class="product-item"><div class="icon">🍜</div><h4>Mie Goreng</h4><p>Rp 22.000</p></div>
                <div class="product-item"><div class="icon">🧃</div><h4>Jus Alpukat</h4><p>Rp 18.000</p></div>
                <div class="product-item"><div class="icon">☕</div><h4>Kopi Susu</h4><p>Rp 15.000</p></div>
                <div class="product-item"><div class="icon">🧴</div><h4>Serum Wajah</h4><p>Rp 120.000</p></div>
                <div class="product-item"><div class="icon">💊</div><h4>Vitamin C</h4><p>Rp 55.000</p></div>
                <div class="product-item"><div class="icon">🧹</div><h4>Sapu Bersih</h4><p>Rp 32.000</p></div>
                <div class="product-item"><div class="icon">🍼</div><h4>Botol Susu</h4><p>Rp 65.000</p></div>
                <div class="product-item"><div class="icon">🧸</div><h4>Boneka Beruang</h4><p>Rp 110.000</p></div>
                <div class="product-item"><div class="icon">🧼</div><h4>Sabun Herbal</h4><p>Rp 28.000</p></div>
                <div class="product-item"><div class="icon">🧷</div><h4>Popok Bayi</h4><p>Rp 88.000</p></div>
                <div class="product-item"><div class="icon">📚</div><h4>Buku Cerita</h4><p>Rp 48.000</p></div>
            </div>
        </div>

        <!-- Panel Keranjang -->
        <div class="cart-panel">
            <h2>🧾 Keranjang Belanja</h2>
            <div class="cart-items">
                <div class="cart-item">
                    <div>
                        <div class="name">Pizza Margherita</div>
                        <div class="price">Rp 45.000</div>
                    </div>
                    <span class="qty">x2</span>
                </div>
                <div class="cart-item">
                    <div>
                        <div class="name">Kopi Susu</div>
                        <div class="price">Rp 15.000</div>
                    </div>
                    <span class="qty">x1</span>
                </div>
                <div class="cart-item">
                    <div>
                        <div class="name">Vitamin C</div>
                        <div class="price">Rp 55.000</div>
                    </div>
                    <span class="qty">x3</span>
                </div>
            </div>
            <div class="cart-summary">
                <div class="summary-row"><span>Subtotal</span><span>Rp 280.000</span></div>
                <div class="summary-row"><span>Diskon</span><span style="color:#f44336">- Rp 0</span></div>
                <div class="summary-row"><span>Pajak (10%)</span><span>Rp 28.000</span></div>
                <div class="summary-row total"><span>TOTAL</span><span>Rp 308.000</span></div>
                <button class="btn-bayar">💳 BAYAR SEKARANG</button>
            </div>
        </div>
    </div>
</body>
</html>
