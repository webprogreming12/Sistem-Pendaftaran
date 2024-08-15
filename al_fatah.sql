-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 06:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `al_fatah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi_ber` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `deskripsi_ber`, `gambar`, `tgl`) VALUES
(1, 'Tingkatkan Kualitas Publikasi Ilmiah Dosen, Fakultas Syariah UIN KHAS Jember Gelar Workshop Academic Writing', '<p>Jember (Kemenag) --- Fakultas Syariah Universitas Islam Negeri (UIN) Kiai Haji Achmad Siddiq Jember menggelar workshop academic writing untuk meningkatkan kualitas dan kuantitas publikasi ilmiah dosen. Hadir sebagai narasumber Prof Rhonald Alan Lukens-Bull dari University of North Florida, Amerika Serikat.</p><p>Wakil Rektor bidang akademik dan pengembangan lembaga UIN KHAS Jember Prof M. Khusna Amal menjelaskan, UIN KHAS Jember saat ini melakukan pelbagai akselerasi, termasuk dalam peningkatan kualitas penelitian dan publikasi ilmiah.</p><p>“Kegiatan workshop academic writing yang digagas oleh Fakultas Syariah ini memiliki arti penting bagi peningkatan reputasi akademik UIN KHAS secara kelembagaan. Kami akan terus mendorong para civitas akademika untuk terus bersinergi dan berkolaborasi dalam peningkatan kualitas publikasi ilmiah para dosen”, terang Prof. Khusna Amal (13/5/2024) saat membuka kegiatan di Fakultas Syariah UIN KHAS Jember.</p><p>Guru Besar bidang sosiologi agama itu juga menambahkan bahwa kegiatan yang digagas oleh Fakultas Syariah ini menjadi bagian dari pengayaan budaya akademik di perguruan tinggi. Prof Amal berharap agar kegiatan peningkatan budaya akademik dapat menjadi tradisi penguatan intelektual sebagai penciri nafas pengembangan Fakultas Syariah UIN KHAS Jember.</p><p>Dekan Fakultas Syariah UIN KHAS Jember Dr. Wildani Hefni mengungkapkan bahwa pihaknya telah menyusun peta jalan pengembangan Fakultas Syariah, termasuk salah satunya adalah penguatan tradisi intelektual dengan menghadirkan para narasumber ahli baik dari dalam negeri maupun dari luar negeri.</p><p>“Penyelenggaraan event akademik yang dikemas dalam workshop academic writing ini merupakan salah satu indikator dari community of learning yang terus kami bangun sebagai penanda bahwa Fakultas Syariah UIN KHAS Jember kental dengan suasana tradisi akademik yang menggugah. Khusus untuk kegiatan ini, kami melakukan akselerasi agar para dosen memiliki kemampuan dalam publikasi ilmiah”, terang Dekan Fakultas Syariah Wildani Hefni.</p><p>Wildani Hefni juga menambahkan bahwa kegiatan ini diharapkan dapat mendorong akselerasi para dosen yang akan mengajukan kenaikan pangkat dan jabatan fungsional. “Melalui kegiatan ini, kami berharap para dosen semakin memperoleh kemudahan untuk menulis jurnal. Berbagai strategi dan trik akan dipaparkan oleh Prof. Rhonald Luknes Bull sehingga kami berharap hal itu dapat ditindaklanjuti oleh peserta,” harap Dekan Fakultas Syariah Wildani Hefni.</p><p>Kegiatan ini dipandu oleh Direktur PUSHPASI Fakultas Syariah, Basuki Kurniawan, MH. Hadir dalam kegiatan ini, seluruh pimpinan di Fakultas Syariah UIN KHAS Jember, Wakil Dekan I Dr. Busriyanti, Wakil Dekan II Dr. Martoyo, Wakil Dekan III Dr. Ahmadiono, Kabag TU, Sekjur Hukum Islam, para Koorprodi, Ketua Gugus Mutu, para dosen, serta seluruh pengelola di lingkungan Fakultas Syariah UIN KHAS Jember. (Fasya Media)</p>', '1715642861.jpeg', '2024-05-13'),
(2, 'Ada Tren Positif, Kemenag Targetkan 2026 Seluruh Tanah Wakaf Bersertifikat', '<p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Jakarta (Kemenag) --- Sebaran sertifikasi tanah wakaf terus menunjukkan tren positif dari tahun ke tahun. Untuk itu, Kementerian Agama (Kemenag) menargetkan pada 2026 seluruh tanah wakaf di Indonesia sudah bersertifikat.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Hal ini disampaikan Direktur Pemberdayaan Zakat dan Wakaf, Waryono Abdul Ghofur di Jakarta, Senin (13/5/2024). “Tahun ini, kami telah menyosialisasikan kerja sama sertifikasi tanah wakaf kepada Ormas Islam, lembaga pendidikan Islam, dan Lembaga Pengelola Zakat (LPZ) untuk mendukung dan mempercepat proses sertifikasi, agar di tahun 2026 semua tanah wakaf di Indonesia telah disertifikatkan,” ujar Waryono.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Kemenag telah bekerja sama dengan Kementerian Agraria dan Tata Ruang (ATR)/Badan Pertanahan Nasional (BPN) untuk memastikan legalitas tanah wakaf, menjaga harta benda wakaf dari potensi kehilangan, dan memastikan tata kelola perwakafan yang transparan dan akuntabel. Komitmen itu diperkuat melalui nota kesepahaman (MoU) yang ditandatangani Menteri Agama dan Menteri ATR/BPN pada 15 Desember 2021.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">“Melalui nota kesepahaman tersebut, kedua kementerian berkomitmen mempercepat dan memperkuat program sertifikasi tanah wakaf,” ujarnya.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Melalui MoU itu, imbuh Waryono, telah dibuka layanan khusus loket pendaftaran sertifikasi tanah wakaf yang terpisah dari layanan umum. Pendaftaran wakaf juga dibebaskan dari biaya PNBP, penetapan aturan khusus untuk sertifikasi tanah wakaf tanpa alas hak, dan pemerataan akses sertifikasi berbasis zonasi kabupaten/kota.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">“Langkah ini diharapkan dapat memudahkan dan mempercepat proses pengakuan legalitas tanah wakaf, serta memberi kepastian hukum kepada semua pihak yang terlibat,” ungkap Waryono.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\"><span style=\"font-weight: bolder;\">Sebaran Sertifikasi</span></p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Waryono menjelaskan, pada 2022 hingga 2023, sebaran sertifikasi wakaf mengalami perkembangan di sejumlah wilayah. Di Pulau Jawa, jumlah sertifikasi wakaf naik dari 20.807 menjadi 25.054. Angka ini mencapai 76% hingga 79% dari total nasional. Pulau Jawa juga menyumbang 78% tanah wakaf tersertifikasi pada 2023.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Di sisi lain, lanjutnya, Pulau Sumatra juga menunjukkan pertumbuhan positif dengan peningkatan jumlah sertifikasi tanah wakaf dari 4.449 lokasi pada 2022 menjadi 4.810 di 2023. Kendati persentase pertumbuhannya tidak setinggi Pulau Jawa, Sumatra tetap memberi kontribusi sekitar 15% dari total tanah wakaf yang tersertifikasi secara nasional di 2022 hingga 2023.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Sementara itu, wilayah Indonesia Timur, meski mengalami sedikit penurunan sertifikasi dari 2.263 pada 2022 menjadi 1.996 pada 2023, kontribusinya terhadap total nasional tetap stabil di angka 8%. Hal Ini menunjukkan bahwa meskipun skala lebih kecil, partisipasi Indonesia Timur dalam sertifikasi wakaf tetap penting.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">“Secara keseluruhan, Pulau Jawa terus menguat sebagai pusat aktivitas tanah wakaf terbesar di Indonesia, dengan 193.039 lokasi yang telah disertifikasi, yang menunjukkan sekitar 78% dari total sertifikasi wakaf per tahun. Pulau Sumatra dan Indonesia Timur menyumbang 36.397 dan 18.874 lokasi wakaf, masing-masing menyumbang sekitar 15% dan 8% dari total sertifikat yang diterbitkan setiap tahunnya,” papar Waryono.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\"><span style=\"font-weight: bolder;\">Beda Daerah, Beda Masalah</span></p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Terpisah, Kasubdit Pengamanan Aset Wakaf Jaja Zarkasyi menyebut sejumlah kendala dalam program sertifikasi tanah wakaf. \"Hasil evaluasi, dua kementerian ini melihat setidaknya tiga kluster yang menjadi kendala dalam program percepatan sertifikasi tanah wakaf,\" ujar Jaja.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Kluster pertama adalah adanya ketidaksesuaian antara ukuran yang tertera dalam Akta Ikrar Wakaf/Akta Pengganti Akta Ikrar Wakaf (AIW/APAIW) dengan peta bidang BPN, di mana luas tanah yang tercatat kerap tidak sesuai dengan pengukuran BPN.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Kluster kedua, belum terintegrasinya sistem administrasi, seperti kesulitan BPN dalam melakukan validasi Surat Keputusan pergantian nazir oleh Badan Wakaf Indonesia (BWI) yang berdampak pada efektivitas pengelolaan administrasi wakaf.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Sementara kluster ketiga terkait perbedaan kebijakan pengukuran tanah di berbagai daerah, beberapa di antaranya membebaskan biaya pengukuran sementara yang lainnya masih memungut biaya.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Terkait itu, Jaja menambahkan, dua kementerian menyepakati tiga tindakan strategis untuk penanganan isu-isu wakaf dan pertanahan. Pertama, menerbitkan Surat Edaran bersama yang berisi pedoman sertifikasi wakaf. Kedua, mempercepat integrasi sistem informasi wakaf dan sistem pendaftaran tanah BPN, yang ditargetkan rampung akhir tahun 2024.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">“Ketiga, mengkaji skema kerja sama pembiayaan pengukuran tanah wakaf di daerah dengan tantangan geografis, melibatkan Lembaga Pengelola Zakat (LPZ), seperti BAZNAS dan LAZ, serta kerja sama dengan pemerintah daerah,” pungkasnya. (Wcp/Mr)</p>', '1715614013.jpeg', '2024-05-14'),
(5, 'Jemaah Haji Asal Garut Wafat di Madinah, PPIH: Dibadalhajikan', '<p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Madinah (Kemenag) --- Satu jemaah haji Indonesia wafat di Madinah Al-Munawwarah. Upan Supian Anas (71), jemaah asal Garut wafat pada 13 Mei 2024 pukul 17:27 waktu Arab Saudi (WAS). Almarhum tergabung dalam kelompok terbang (kloter) dua Embarkasi Jakarta – Bekasi (JKS-02).</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">“Almarhum Upan Supian Anas meninggal pada hari Senin. Almarhum akan dibadalhajikan,” terang Kepala Daerah Kerja (Daker) Madinah Ali Machzumi, di Madinah, Selasa (14/5/2024).</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Ali Machzumi mengatakan, sebelum dinyatakan wafat, almarhum pingsan saat berada di Masjid Nabawi untuk melaksanakan salat Asar. Almarhum sempat ditangani tim medis dan dievakuasi ke klinik yang ada di dekat Masjid Nabawi hingga dinyatakan wafat.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Menurut keterangan dokter, kata Ali, almarhum mengalami Cardiovascular disease atau gangguan serangan jantung. “Mari kita doakan semoga almarhum wafat dalam keadaan husnul khatimah dan ibadahnya diterima Allah Swt. Almarhum akan dimakamkan di pemakaman Baqi yang berada di sisi kiri Masjid Nabawi,” ucap Ali.</p><p style=\"margin-bottom: 1.35em; line-height: 1.7; font-size: 16.8px; color: rgb(33, 37, 41); font-family: &quot;PT Sans&quot;, sans-serif;\">Kasi Klinik Kesehatan Haji Indonesia (KKHI) Firdaus menambahkan, pihaknya hanya akan merilis data jemaah wafat setelah keluar sertifikat kematian atau certificate of death (CoD) dari pihak berwenang di Arab Saudi. “Ini sudah kita informasikan. Artinya CoD nya sudah terbit,” tandasnya.</p>', 'p.jpg', '2024-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `foto`, `keterangan`, `tanggal`) VALUES
(3, 'product-2.jpg', '<p>Acara 17 Agustus 2023</p>', '2024-05-13'),
(4, 'product-1.jpg', '<p>Foto Ruangan</p>', '2024-05-14'),
(5, 'app-1.jpg', '<p>Kegiatan Guru</p>', '2024-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(11) NOT NULL,
  `deskripsi_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `deskripsi_info`) VALUES
(1, '<p>Pendaftaran Peserta Didik Baru PPDB Tahun Pelajaran 2024/2025</p><p>Pendaftaran Calon Peserta Didik Baru (PPDB) MIS AL-FATAH FIDITAN KOTA TUAL telah memasuki Gelombang 1 untuk Tahun Pelajaran 2024/2025 dibuka mulai Oktober 2024. Segera daftarkan dirimu dan jadilah bagian dari keluarga besar MIS AL-FATAH FIDITAN KOTA TUAL</p><p>Tata Cara Pendaftaran Online:</p><p>Sebelum melakukan pendaftaran online mohon dipersiapkan beberapa persyaratan berikut:</p><p>1. Melakukan daftar online yang telah disediakan di&nbsp; halaman daftar akun terlabih duluh. </p><p>2. Mengisi formulir online yang telah disediakan di halaman pendaftaran selanjutnya dengan mempersiapkan Nilai Rapor SMP Kelas VII dan VIII, Akte Kelahiran dan Pas Foto 3x4 sebanyak 3 lembar Kartu Keluarga (C1) Ijazah/ Rapor terakhir.</p><p>3. Wawancara akan dilakukan via telepon dari nomor telepon MIS AL-FATAH FIDITAN (0274-489511) pada hari dan jam kerja ke nomor HP yang telah anda input sebelumnya melalui form PPDB Online.</p><p>4. Untuk keterangan lebih lanjut dapat menghubungi: Sekolah (0899-9411-177) Silakan segera daftar secara online melalui Form PPDB Online di link berikut ini: Form Pendaftaran Klik link dibawah ini&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tlpn` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `alamat`, `email`, `tlpn`) VALUES
(1, 'A108 Adam Street, New York, NY 535022', 'info@example.com', '+1 5589 55488 55');

-- --------------------------------------------------------

--
-- Table structure for table `organisasi`
--

CREATE TABLE `organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gambar_or` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisasi`
--

INSERT INTO `organisasi` (`id_organisasi`, `nama`, `jabatan`, `status`, `gambar_or`) VALUES
(1, 'Abdul Hamid', 'Kepalah sekolah', 'Pegawai Negeri', 'team-1.jpg'),
(2, 'Indah Sulaiman', 'Skertaris', 'Pegawai Negeri', 'team-2.jpg'),
(3, 'Irwan Ahmad Abdulah', 'Guru IPA', 'Pegawai Negeri', 'team-3.jpg'),
(5, 'Surtini malik', 'Guru Bahasi Arab', 'Honorer', 'team-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `nama_pangilan` varchar(100) NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kl` varchar(50) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `nama_ayah` varchar(250) NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `pekerjaan_ayah` varchar(150) NOT NULL,
  `pekerjaan_ibu` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` char(16) NOT NULL,
  `file_pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `nama_lengkap`, `nama_pangilan`, `tempat_lahir`, `tgl_lahir`, `jenis_kl`, `agama`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `telepon`, `file_pdf`) VALUES
(9, 'Surtini malik', 'Surtini ', 'amsing kota', '2024-05-14', 'Perempuan', 'Islam', 'ibrahim ', 'farida ', 'pegawai negeri', 'pegawai negeri', 'amasing kota', '0882006452084', '240514_021420_7051.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `sejarah` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `youtube` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `deskripsi`, `visi`, `misi`, `sejarah`, `gambar`, `youtube`) VALUES
(1, '<p style=\"text-align: justify; \">MIS Al-Fatah Fiditan adalah sebuah lembaga pendidikan di daerah Fiditan yang didirikan oleh Al-Fatah Fiditan. Sekolah ini dikenal karena komitmennya dalam memberikan pendidikan berkualitas serta kontribusinya dalam mengembangkan potensi siswa secara holistik. MIS Al-Fatah Fiditan menekankan pendidikan agama dan akademik dengan tujuan membentuk generasi yang berkualitas dan berakhlak mulia.</p>', '<p style=\"text-align: justify; \">Visi MIS Al-Fatah Fiditan mungkin berkisar pada upaya untuk memberikan pendidikan berkualitas tinggi yang berlandaskan pada nilai-nilai agama Islam serta menghasilkan generasi yang berakhlak mulia dan berpotensi untuk berkembang menjadi pemimpin yang bertanggung jawab.</p><p style=\"text-align: justify;\">Mungkin misinya adalah:</p><p style=\"text-align: justify;\">1. Memberikan pendidikan yang berkualitas tinggi yang berlandaskan pada ajaran Islam.</p><p style=\"text-align: justify;\">2. Membentuk siswa menjadi individu yang berakhlak mulia, berintegritas, dan bertanggung jawab.</p><p style=\"text-align: justify;\">3. Mengembangkan potensi siswa secara holistik, baik dalam bidang akademik maupun non-akademik.</p><p style=\"text-align: justify;\">4. Menyiapkan siswa untuk menjadi pemimpin masa depan yang mampu memberikan kontribusi positif bagi masyarakat dan agama.</p>', '<div style=\"text-align: justify; \">Berikut ini adalah kemungkinan misi dari MIS Al-Fatah Fiditan:<br></div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">1. Menyediakan pendidikan berkualitas tinggi yang berlandaskan pada ajaran Islam.</div><div style=\"text-align: justify;\">2.&nbsp; Membentuk siswa menjadi individu yang berakhlak mulia, berintegritas, dan bertanggung jawab.</div><div style=\"text-align: justify;\">3. Mengembangkan potensi siswa secara holistik, termasuk dalam bidang akademik, spiritual, sosial, dan keterampilan.</div><div style=\"text-align: justify;\">4. Menumbuhkan semangat keunggulan dan inovasi dalam proses belajar mengajar.</div><div style=\"text-align: justify;\">5. Menanamkan rasa cinta pada ilmu pengetahuan dan agama.</div><div style=\"text-align: justify;\">6. Menyiapkan siswa untuk menjadi pemimpin yang berkomitmen bagi agama, masyarakat, dan bangsa.</div>', '<div style=\"text-align: justify;\">Sebagai asumsi, ini mungkin adalah sejarah singkat berdirinya MIS Al-Fatah Fiditan:</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">MIS Al-Fatah Fiditan didirikan pada tahun [tahun berdirinya] oleh Al-Fatah Fiditan dengan tujuan memberikan pendidikan berkualitas tinggi yang berlandaskan pada ajaran Islam kepada masyarakat di sekitar Fiditan. Berawal dari keinginan untuk memberikan akses pendidikan yang lebih baik kepada anak-anak di daerah tersebut, MIS Al-Fatah Fiditan tumbuh menjadi salah satu lembaga pendidikan terkemuka di wilayah itu. Dengan komitmen yang kuat untuk mengembangkan potensi siswa secara holistik dan membentuk karakter yang berakhlak mulia, MIS Al-Fatah Fiditan terus menjadi pusat pendidikan yang dihormati dan diandalkan oleh masyarakat setempat.</div>', 'youtube.jpeg', 'https://www.youtube.com/watch?v=qf502EKz23o');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`) VALUES
(7, 'Rizal', 'rizal12', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `organisasi`
--
ALTER TABLE `organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organisasi`
--
ALTER TABLE `organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
