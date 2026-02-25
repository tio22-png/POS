<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna – POS App</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', sans-serif; background: #f3e5f5; color: #333; }
        header { background: linear-gradient(135deg, #7b1fa2, #4a148c); color: white; padding: 20px 40px; display: flex; align-items: center; gap: 12px; }
        header h1 { font-size: 1.6rem; }
        nav { background: #4a148c; padding: 10px 40px; }
        nav a { color: #ce93d8; text-decoration: none; margin-right: 20px; font-size: 0.95rem; }
        nav a:hover { color: #fff; }
        .profile-container { max-width: 500px; margin: 60px auto; background: white; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.12); overflow: hidden; }
        .profile-header { background: linear-gradient(135deg, #7b1fa2, #4a148c); padding: 40px; text-align: center; color: white; }
        .avatar { width: 90px; height: 90px; border-radius: 50%; background: rgba(255,255,255,0.2); display: flex; align-items: center; justify-content: center; font-size: 3rem; margin: 0 auto 16px; border: 3px solid rgba(255,255,255,0.5); }
        .profile-header h2 { font-size: 1.5rem; }
        .profile-header p { opacity: 0.75; font-size: 0.9rem; margin-top: 4px; }
        .profile-body { padding: 30px; }
        .info-row { display: flex; align-items: center; padding: 14px 0; border-bottom: 1px solid #f0f0f0; gap: 14px; }
        .info-row:last-child { border-bottom: none; }
        .info-row .label { font-size: 0.8rem; color: #999; text-transform: uppercase; letter-spacing: 0.5px; min-width: 100px; }
        .info-row .value { font-weight: 600; color: #333; font-size: 1rem; }
        .badge { display: inline-block; background: #e1bee7; color: #7b1fa2; padding: 4px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: 600; }
        footer { background: #4a148c; color: #ce93d8; text-align: center; padding: 16px; font-size: 0.85rem; margin-top: 20px; }
    </style>
</head>
<body>
    <header>
        <span style="font-size:1.8rem">👤</span>
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

    <div class="profile-container">
        <div class="profile-header">
            <div class="avatar">👤</div>
            <h2>{{ $name }}</h2>
            <p>Profil Pengguna</p>
        </div>
        <div class="profile-body">
            <div class="info-row">
                <span class="label">User ID</span>
                <span class="value">#{{ $id }}</span>
            </div>
            <div class="info-row">
                <span class="label">Nama Lengkap</span>
                <span class="value">{{ $name }}</span>
            </div>
            <div class="info-row">
                <span class="label">URL</span>
                <span class="value" style="font-size:0.85rem;color:#999;">/user/{{ $id }}/name/{{ $name }}</span>
            </div>
            <div class="info-row">
                <span class="label">Status</span>
                <span class="badge">Aktif</span>
            </div>
        </div>
    </div>

    <footer>&copy; {{ date('Y') }} POS App. All rights reserved.</footer>
</body>
</html>
