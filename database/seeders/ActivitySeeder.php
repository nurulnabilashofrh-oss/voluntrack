<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\User;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            $user = User::create([
                'name' => 'Organizer VolunTrack',
                'email' => 'organizer@voluntrack.com',
                'password' => bcrypt('password'),
            ]);
        }

        $activities = [
            [
                'title' => 'Ekspedisi Sapa Papua #8 - Raja Ampat',
                'description' => 'Pengabdian masyarakat berbasis human capital development + trip premium di UNESCO Global Geopark. Membantu pendidikan dan kesehatan anak-anak pesisir.',
                'location' => 'Kampung Yenbekwan, Raja Ampat',
                'date' => '2026-08-15',
                'capacity' => 50,
                'image' => 'papua.jpg',
            ],
            [
                'title' => 'Gerakan Sejuta Buku Untuk Pelosok Negeri',
                'description' => 'Program pengumpulan dan pendistribusian buku bacaan serta pembangunan taman baca mini di daerah tertinggal.',
                'location' => 'Kabupaten Cianjur, Jawa Barat',
                'date' => '2026-09-10',
                'capacity' => 30,
                'image' => 'buku.jpg',
            ],
            [
                'title' => 'Aksi Bersih Pantai & Konservasi Mangrove',
                'description' => 'Pelestarian lingkungan pesisir laut melalui penanaman bibit pohon mangrove bersama pemuda dan relawan lokal.',
                'location' => 'Pantai Ancol, Jakarta Utara',
                'date' => '2026-10-05',
                'capacity' => 100,
                'image' => 'mangrove.jpg',
            ],
            [
                'title' => 'Mengajar Anak Jalanan di Kolong Jembatan',
                'description' => 'Memberikan pendidikan dasar, motivasi, dan kegiatan kreatif interaktif bagi anak-anak marjinal perkotaan.',
                'location' => 'Kolong Flyover Pasupati, Bandung',
                'date' => '2026-10-20',
                'capacity' => 25,
                'image' => 'anak-jalanan.jpg',
            ],
            [
                'title' => 'Bakti Sosial & Pengobatan Gratis, Cianjur',
                'description' => 'Pemeriksaan kesehatan gratis dan pembagian paket sembako untuk warga lansia kurang mampu di daerah pegunungan.',
                'location' => 'Kecamatan Cipanas, Cianjur',
                'date' => '2026-11-02',
                'capacity' => 75,
                'image' => 'baksos.jpg',
            ],
            [
                'title' => 'Pelatihan Digital UMKM Desa Wisata',
                'description' => 'Mendampingi para pelaku usaha lokal agar bisa memasarkan produk kerajinan tangan mereka secara online melalui media sosial.',
                'location' => 'Desa Wisata Nglanggeran, Yogyakarta',
                'date' => '2026-11-18',
                'capacity' => 40,
                'image' => 'umkm.jpg',
            ],
            [
                'title' => 'Penanaman 1000 Pohon Hijau di Lahan Kritis',
                'description' => 'Gerakan reboisasi untuk mencegah longsor dan menjaga sumber mata air bersih di kawasan lereng gunung.',
                'location' => 'Lereng Gunung Merbabu, Boyolali',
                'date' => '2026-12-05',
                'capacity' => 120,
                'image' => 'pohon.jpg',
            ],
            [
                'title' => 'Relawan Trauma Healing Korban Bencana',
                'description' => 'Memberikan pendampingan psikososial dan permainan edukatif ceria untuk anak-anak korban bencana alam.',
                'location' => 'Kabupaten Lumajang, Jawa Timur',
                'date' => '2026-12-15',
                'capacity' => 35,
                'image' => 'trauma-healing.jpg',
            ],
            [
                'title' => 'Ramadhan Berbagi: 1000 Paket Ifthar',
                'description' => 'Kegiatan sosial pengadaan dan pembagian makanan buka puasa gratis untuk kaum dhuafa dan musafir di jalanan.',
                'location' => 'Kota Surabaya, Jawa Timur',
                'date' => '2027-03-12',
                'capacity' => 60,
                'image' => 'ramadhan.jpg',
            ],
        ];

        foreach ($activities as $act) {
            Activity::create([
                'title' => $act['title'],
                'description' => $act['description'],
                'location' => $act['location'],
                'date' => $act['date'],
                'capacity' => $act['capacity'],
                'image' => $act['image'], // Menyimpan nama file gambar
                'user_id' => $user->id,
            ]);
        }
    }
}