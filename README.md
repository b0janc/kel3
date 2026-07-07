proyek-kasir/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Auth/
│   │   │   │   └── LoginController.php          # Menangani login & logout
│   │   │   ├── Admin/
│   │   │   │   └── DashboardController.php      # Dashboard untuk admin/kasir
│   │   │   ├── CheckoutController.php           # Proses checkout transaksi
│   │   │   └── RiwayatTransaksiController.php   # Menampilkan riwayat transaksi
│   │   └── Middleware/
│   │       └── Authenticate.php                 # Middleware bawaan (auth)
│   └── Models/
│       ├── User.php                             # Model user/kasir
│       ├── Produk.php                           # Model produk
│       └── Transaksi.php                        # Model transaksi (header & detail)
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── admin.blade.php                  # Layout khusus dashboard admin
│       ├── auth/
│       │   └── login.blade.php                  # Halaman login
│       ├── dashboard.blade.php                  # Dashboard setelah login
│       ├── checkout.blade.php                   # Halaman kasir / checkout
│       └── riwayat-transaksi.blade.php          # Riwayat transaksi
├── routes/
│   └── web.php                                  # Semua routing web
└── database/
    └── migrations/                              # Migrasi tabel user, produk, transaksi