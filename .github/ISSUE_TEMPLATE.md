## Judul
Add filter items by category

## Deskripsi
Menambahkan fitur filter data items berdasarkan category_id pada endpoint GET /api/v1/items.

## Langkah Reproduksi (jika bug)
1. Buka endpoint GET /api/v1/items
2. Tambahkan query parameter category_id
3. Periksa hasil response item berdasarkan kategori

## Harapan
Endpoint GET /api/v1/items?category_id={id} dapat menampilkan item sesuai kategori yang dipilih.

## Label
- enhancement