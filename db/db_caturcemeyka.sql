-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mei 2024 pada 19.56
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_caturcemeyka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_beranda`
--

CREATE TABLE `t_beranda` (
  `id_content` int(3) NOT NULL,
  `t_h1` varchar(100) DEFAULT NULL,
  `t_h2` varchar(100) DEFAULT NULL,
  `t_button` varchar(30) DEFAULT NULL,
  `hero_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_beranda`
--

INSERT INTO `t_beranda` (`id_content`, `t_h1`, `t_h2`, `t_button`, `hero_image`) VALUES
(1, 'Perkenalkan, kami penerbit Catur Cemeyka', 'Publikasikan karya Anda dengan cepat, tepat, dan terjangkau bersama kami', 'Lebih Lanjut', 'books-1204029_1280.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_blog`
--

CREATE TABLE `t_blog` (
  `id_blog` int(10) NOT NULL,
  `judul` varchar(300) DEFAULT NULL,
  `tgl_post` date DEFAULT NULL,
  `image` text,
  `artikel` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_blog`
--

INSERT INTO `t_blog` (`id_blog`, `judul`, `tgl_post`, `image`, `artikel`) VALUES
(4, 'Manfaat Menulis: Mengungkapkan Diri dan Membangun Keterampilan', '2024-05-04', 'office-620817_640.jpg', '<p>Menulis adalah salah satu kegiatan yang tidak hanya bermanfaat untuk mengungkapkan pikiran dan perasaan, tetapi juga memiliki dampak positif yang luas pada perkembangan individu. Berikut adalah beberapa manfaat menulis yang penting:</p><p>1. Ekspresi Diri:</p><p>Menulis memberi kita platform untuk mengekspresikan diri dengan bebas. Baik itu dalam bentuk jurnal harian, puisi, cerita pendek, atau esai, menulis memungkinkan kita untuk menyalurkan gagasan, impian, dan pengalaman kita. Ini membantu kita menjelajahi dan memahami diri sendiri lebih dalam.</p><p>2. Peningkatan Keterampilan Komunikasi:</p><p>Menulis secara teratur membantu meningkatkan keterampilan komunikasi. Proses merumuskan ide menjadi kata-kata yang efektif memperkuat kemampuan menyampaikan pesan dengan jelas dan persuasif, baik dalam komunikasi lisan maupun tertulis.</p><p>3. Pemikiran Kritis:</p><p>Menulis membutuhkan pemikiran yang terstruktur dan analitis. Saat kita menyusun argumen atau memecahkan masalah dalam tulisan, kita secara alami melatih kemampuan pemikiran kritis dan analisis.</p><p>4. Kreativitas:</p><p>Menulis merangsang imajinasi dan kreativitas. Baik itu menulis cerita fiksi, membuat puisi, atau bahkan menulis skenario, proses menggali ide-ide baru dan menciptakan dunia imajiner dapat meningkatkan kemampuan kreatif kita.</p><p>5. Memori dan Pengingatan:</p><p>Aktivitas menulis membantu memperkuat memori dan kemampuan pengingatan. Saat kita menulis, kita cenderung memproses informasi dengan lebih mendalam, yang dapat meningkatkan kemampuan kita untuk mengingat dan menyimpan informasi.</p><p>6. Mengatasi Stres dan Menyelesaikan Masalah:</p><p>Menulis juga dapat menjadi alat yang efektif untuk mengatasi stres dan mengelola emosi. Melalui menulis, kita dapat mengekspresikan perasaan yang rumit, mencari pemahaman tentang masalah yang kita hadapi, dan mencari solusi.</p><p>7. Peningkatan Keterampilan Penelitian:</p><p>Bagi mereka yang terlibat dalam menulis non-fiksi, proses meneliti topik tertentu untuk mendukung argumen atau informasi yang disampaikan dalam tulisan memperkaya keterampilan penelitian.</p><p>8. Pengaruh Positif pada Kesehatan Mental:</p><p>Studi telah menunjukkan bahwa menulis secara teratur dapat memiliki dampak positif pada kesehatan mental. Ini dapat mengurangi gejala depresi, meningkatkan mood, dan membantu dalam proses penyembuhan dari trauma.</p><p>Dengan berbagai manfaat ini, menulis tidak hanya menjadi kegiatan kreatif yang menyenangkan tetapi juga menjadi alat yang kuat untuk pengembangan diri dan kesejahteraan mental. Dengan mengintegrasikan menulis ke dalam rutinitas sehari-hari, kita dapat merasakan manfaatnya dalam kehidupan sehari-hari.</p>'),
(5, 'Profil Orang yang Gemar Menulis: Memahami Karakteristik dan Fakta Menarik', '2024-05-04', 'writing-923882_6401.jpg', '<p style="line-height: 24px;" open="" sans",="" sans-serif;"=""><font color="#444444">Orang yang gemar menulis sering memiliki karakteristik yang menonjol dan beragam fakta menarik yang mendefinisikan mereka:</font></p><ol><li style="line-height: 24px;"><font color="#444444"><b>Kreatif dan Imaginatif&nbsp;</b>: Mereka cenderung memiliki imajinasi yang kaya dan kemampuan untuk melihat dunia dari sudut pandang yang unik. Hal ini memungkinkan mereka untuk menciptakan cerita, puisi, atau karya tulis kreatif lainnya.</font></li><li style="line-height: 24px;"><b>Penuh dengan Ide </b>: Mereka selalu memiliki ide-ide segar dan inovatif. Setiap pengalaman atau observasi sehari-hari bisa menjadi bahan tulisan yang menarik bagi mereka.</li><li style="line-height: 24px;"><b>Obsesif dengan Kata-kata</b>: Mereka sering memperhatikan kata-kata dan bahasa dengan cermat. Pilihan kata dan cara penyusunan kalimat menjadi fokus utama dalam tulisan mereka.</li><li style="line-height: 24px;"><b>Pemikiran Analitis</b>: Meskipun sering memiliki imajinasi yang kuat, mereka juga memiliki kemampuan untuk berpikir secara analitis. Mereka cenderung memilah-milah informasi dengan cermat dan mengorganisasikannya secara logis dalam tulisan mereka.</li><li style="line-height: 24px;"><b>Disiplin dan Konsistensi&nbsp;</b>: Mereka memahami pentingnya kedisiplinan dalam menulis dan berusaha untuk menetapkan jadwal rutin untuk praktik menulis mereka.</li><li style="line-height: 24px;"><b>Emosional dan Sensitif</b>: Mereka sering memiliki kepekaan emosional yang tinggi, yang tercermin dalam tulisan mereka. Mereka mungkin mengekspresikan perasaan mereka dengan jujur dan mendalam melalui kata-kata.</li><li style="line-height: 24px;"><b>Pencari Pengetahuan</b>: Mereka sering penasaran dan ingin terus belajar. Kebutuhan untuk pengetahuan baru mendorong mereka untuk melakukan penelitian dan membaca secara luas.</li><li style="line-height: 24px;"><b style="color: rgb(68, 68, 68); font-size: 1rem;">Mencari Dampak</b><span style="color: rgb(68, 68, 68); font-size: 1rem;">: Meskipun menulis mungkin menjadi kegiatan yang memuaskan secara pribadi, banyak dari mereka yang juga ingin memiliki dampak positif pada pembaca mereka. Mereka berharap tulisan mereka dapat menginspirasi, menghibur, atau mengubah pandangan orang lain.</span></li></ol>'),
(6, 'Langkah Pertama Menuju Pengalaman Penulisan yang Memuaskan: Memulai Menulis Buku', '2024-05-04', 'adult-1850177_640.jpg', '<p>Memulai menulis buku adalah langkah besar yang memiliki berbagai alasan yang kuat. Pertama, menulis buku memungkinkan Anda untuk mengabadikan pengalaman dan pengetahuan Anda. Ini adalah cara yang efektif untuk meninggalkan warisan dan mempengaruhi generasi mendatang. Selain itu, proses menulis buku membantu dalam pengembangan diri dengan membutuhkan refleksi mendalam dan pemahaman yang lebih baik tentang subjek yang Anda tulis. Buku Anda juga bisa menjadi sumber inspirasi bagi pembaca Anda, mengubah pandangan mereka tentang dunia.</p><p>Selain itu, menulis buku bisa membantu membangun otoritas dan reputasi di bidang tertentu. Ini membantu Anda dikenal sebagai ahli di lapangan Anda. Buku yang diterbitkan juga bisa menjadi sumber penghasilan pasif jangka panjang, memberikan Anda pendapatan tambahan yang stabil.</p><p>Lebih dari itu, menulis buku memungkinkan Anda untuk menyampaikan pesan Anda dengan lebih luas dan lebih dalam daripada medium lainnya. Ini adalah pencapaian yang membanggakan dan bisa menjadi cara untuk mengatasi tantangan pribadi. Akhirnya, memulai menulis buku adalah langkah pertama untuk mewujudkan impian Anda untuk menjadi seorang penulis yang sukses.</p>'),
(7, 'Manfaat Membaca Buku: Memperluas Wawasan, Meningkatkan Kesejahteraan, dan Menginspirasi Perubahan', '2024-05-04', 'book-1835799_640.jpg', '<p><span style="font-size: 1rem;">Membaca buku adalah kegiatan yang memberikan banyak manfaat bagi pembaca, baik secara fisik maupun mental. Salah satu manfaat utama membaca adalah meningkatkan keterampilan literasi seseorang. Ketika membaca, seseorang terbiasa dengan bahasa tertulis, meningkatkan pemahaman tata bahasa, ejaan, dan kosakata. Ini tidak hanya memperkaya keterampilan komunikasi mereka, tetapi juga meningkatkan kemampuan mereka untuk memproses informasi dengan lebih baik.</span></p><p>Selain itu, membaca buku juga mengasah pikiran dan meningkatkan kemampuan kognitif. Aktivitas membaca melibatkan otak dalam interpretasi dan pemahaman teks, sehingga merangsang berbagai bagian otak. Ini dapat membantu meningkatkan daya ingat, konsentrasi, dan fokus. Bahkan, studi telah menunjukkan bahwa orang yang membaca secara teratur memiliki risiko lebih rendah terkena penyakit neurodegeneratif seperti Alzheimer.</p><p>Buku juga merupakan sumber pengetahuan yang tak terbatas. Dengan membaca berbagai genre dan topik, pembaca dapat memperluas wawasan mereka tentang dunia dan memperdalam pemahaman mereka tentang berbagai subjek. Dari fiksi hingga non-fiksi, buku menyediakan akses ke ide-ide baru, pandangan yang berbeda, dan pengetahuan yang beragam.</p><p>Selain manfaat intelektual, membaca buku juga memiliki dampak positif pada kesejahteraan emosional seseorang. Buku sering kali menjadi tempat perlindungan yang nyaman di mana seseorang dapat melarikan diri dari stres dan kekhawatiran sehari-hari. Membaca fiksi, khususnya, telah terbukti mengurangi tingkat stres dan meningkatkan kesejahteraan mental dengan membawa pembaca ke dalam dunia imajiner yang baru.</p><p>Buku juga merupakan alat yang efektif untuk membangun empati dan pemahaman sosial. Melalui membaca cerita tentang pengalaman orang lain, pembaca dapat memahami perasaan dan perspektif yang berbeda. Ini membantu dalam mengembangkan kemampuan untuk berempati dan berkomunikasi dengan orang lain dengan lebih baik.</p><p>Tidak hanya itu, membaca buku juga dapat menjadi sumber inspirasi dan motivasi bagi pembaca. Buku sering kali berisi cerita tentang keberhasilan, ketahanan, dan perjuangan, yang dapat menginspirasi orang untuk mengejar impian mereka sendiri dan mengatasi rintangan yang mungkin mereka hadapi.</p><p>Terakhir, membaca buku juga bisa menjadi kegiatan yang menyenangkan dan menghibur. Dari membenamkan diri dalam petualangan yang mendebarkan hingga mengeksplorasi dunia fantasi yang magis, membaca buku memberikan hiburan tanpa batas bagi pembaca dari segala usia.</p><p>Secara keseluruhan, membaca buku adalah kegiatan yang memberikan banyak manfaat yang melampaui sekadar hiburan. Dari meningkatkan keterampilan literasi hingga meningkatkan kesejahteraan emosional, membaca buku adalah investasi berharga untuk kesejahteraan dan perkembangan pribadi seseorang.</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jumlah`
--

CREATE TABLE `t_jumlah` (
  `id_jumlah` int(10) NOT NULL,
  `icon` varchar(30) DEFAULT NULL,
  `nama_karya` varchar(50) DEFAULT NULL,
  `jumlah` varchar(10) DEFAULT NULL,
  `visible` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jumlah`
--

INSERT INTO `t_jumlah` (`id_jumlah`, `icon`, `nama_karya`, `jumlah`, `visible`) VALUES
(1, 'bi bi-book', 'Buku Diterbitkan', '2332', 'Y'),
(2, 'bi bi-list-task', 'Project', '215', 'Y'),
(3, 'bi bi-journal-richtext', 'Desain & Layout', '1463', 'Y'),
(4, 'bi bi-people', 'Klien Kami', '300', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_klien`
--

CREATE TABLE `t_klien` (
  `id_klien` int(10) NOT NULL,
  `img_klien` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_klien`
--

INSERT INTO `t_klien` (`id_klien`, `img_klien`) VALUES
(1, 'logo_(2).png'),
(2, 'logo_(2)1.png'),
(3, 'logo_(2)2.png'),
(4, 'logo_(2)3.png'),
(5, 'logo_(2)4.png'),
(6, 'logo_(2)5.png'),
(7, 'logo_(2)6.png'),
(8, 'logo_(2)7.png'),
(9, 'logo_(2)8.png'),
(10, 'logo_(2)9.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_paket`
--

CREATE TABLE `t_paket` (
  `id_paket` int(10) NOT NULL,
  `nama_paket` varchar(30) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `image` text,
  `detail` text,
  `terlaris` enum('Y','N') DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `visible` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_paket`
--

INSERT INTO `t_paket` (`id_paket`, `nama_paket`, `harga`, `image`, `detail`, `terlaris`, `no_hp`, `visible`) VALUES
(1, 'Paket Pemula', '500000', 'paket_pemula3.png', '<ul open="" sans",="" sans-serif;"="" style="margin-bottom: 25px; padding: 0px; list-style: none; color: rgb(68, 68, 68); text-align: center; line-height: 26px;"><li style="padding-bottom: 10px;">Buku ukuran A5 (14.5X20.5)</li><li style="padding-bottom: 10px;">Maksimal 175 halaman (Halaman berlebih dikenakan biaya tambahan)</li><li style="padding-bottom: 10px;">Terbit 20 buku</li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis Jasa Proofreading</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis ISBN</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis Desain Cover (5x revisi)</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Promo Buku di Facebook dan Instagram</span></li></ul>', 'N', '085283558664', 'Y'),
(2, 'Paket Menengah', '1000000', 'paket_menengah.png', '<ul style="padding: 0px; margin-bottom: 25px; list-style: none; color: rgb(68, 68, 68); text-align: center; line-height: 26px; font-family: &quot;Open Sans&quot;, sans-serif;"><li style="padding-bottom: 10px;">Buku ukuran A5 (14.5X20.5)</li><li style="padding-bottom: 10px;">Maksimal 175 halaman (Halaman berlebih dikenakan biaya tambahan)</li><li style="padding-bottom: 10px;">Terbit 20 buku</li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis Jasa Proofreading</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis ISBN</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis Desain Cover (5x revisi)</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Promo Buku di Facebook dan Instagram</span></li></ul>', 'Y', '085283558664', 'Y'),
(3, 'Paket Premium', '2000000', 'paket_premium.png', '<ul open="" sans",="" sans-serif;"="" style="margin-bottom: 25px; padding: 0px; list-style: none; color: rgb(68, 68, 68); text-align: center; line-height: 26px;"><li style="padding-bottom: 10px;">Buku ukuran A5 (14.5X20.5)</li><li style="padding-bottom: 10px;">Maksimal 175 halaman (Halaman berlebih dikenakan biaya tambahan)</li><li style="padding-bottom: 10px;">Terbit 20 buku</li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis Jasa Proofreading</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis ISBN</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Gratis Desain Cover (5x revisi)</span></li><li style="padding-bottom: 10px;"><span style="font-weight: bolder;">Promo Buku di Facebook dan Instagram</span></li></ul>', 'N', '085283558664', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_penawaran`
--

CREATE TABLE `t_penawaran` (
  `id_penawaran` int(3) NOT NULL,
  `icon` varchar(30) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `penawaran` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(300) DEFAULT NULL,
  `visible` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_penawaran`
--

INSERT INTO `t_penawaran` (`id_penawaran`, `icon`, `color`, `penawaran`, `deskripsi`, `visible`) VALUES
(1, 'ri-book-2-line', 'red', 'Penerbitan', 'Penerbitan buku, dimulai dari satu eksemplar hingga jumlah besar sesuai keinginan konsumen. Juga ada tiga paket, antara lain paket pemula, paket menengah, dan paket lanjutan.', 'Y'),
(2, 'ri-printer-line', 'orange', 'Percetakan', 'Catur Cemeyka juga melayani percetakan buku dengan harga terjangkau.', 'Y'),
(3, 'ri-edit-box-line', 'green', 'Editing', 'Jasa tambahan yang disediakan untuk para penerbit buku. Jasa editing menjadikan buku yang Anda terbitkan terhindar dari salah ketik (typo), juga susunan kalimat yang tidak serasi.', 'Y'),
(4, 'ri-layout-horizontal-line', 'blue', 'Desain & Layout', 'Jasa tambahan untuk klien yang menerbitkan buku. Dengan desain dan layout, buku yang Anda terbitkan menjadi lebih menarik dan indah.', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_project`
--

CREATE TABLE `t_project` (
  `id_project` int(10) NOT NULL,
  `nama_project` varchar(50) DEFAULT NULL,
  `image` text,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_project`
--

INSERT INTO `t_project` (`id_project`, `nama_project`, `image`, `deskripsi`) VALUES
(2, 'Penerbitan Buku', 'books-1204029_12804.jpg', 'Dari meningkatkan keterampilan literasi hingga meningkatkan kesejahteraan emosional, membaca buku adalah investasi berharga untuk kesejahteraan dan perkembangan pribadi seseorang.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_quote`
--

CREATE TABLE `t_quote` (
  `id_quote` int(10) NOT NULL,
  `quote` varchar(80) DEFAULT NULL,
  `deskripsi` text,
  `foto` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_quote`
--

INSERT INTO `t_quote` (`id_quote`, `quote`, `deskripsi`, `foto`) VALUES
(1, 'Tidak ada pencapaian yang tak dimulai dari satu langkah kecil', '<p><span style="color: rgb(68, 68, 68); font-family: " open="" sans",="" sans-serif;="" background-color:="" rgb(246,="" 249,="" 255);"="">Sejak didirikan tahun 2017, Penerbit Catur Cemeyka selalu</span><span style="" open="" sans",="" sans-serif;="" background-color:="" rgb(246,="" 249,="" 255);"=""><font color="#000000"> mendukung para penulis, baik itu akademisi, praktisi, sastrawan, hingga pelajar dan mahasiswa untuk menerbitkan buku dengan cepat, murah, dan berkualitas</font></span><span style="color: rgb(68, 68, 68); font-family: " open="" sans",="" sans-serif;="" background-color:="" rgb(246,="" 249,="" 255);"="">. Kami selalu menjaga kualitas demi kepuasan konsumen.</span></p>', 'books-1204029_12801.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_testimoni`
--

CREATE TABLE `t_testimoni` (
  `id_testimoni` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `image` text,
  `testimoni` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_testimoni`
--

INSERT INTO `t_testimoni` (`id_testimoni`, `nama`, `pekerjaan`, `image`, `testimoni`) VALUES
(1, 'Rani', 'Pemilik Toko Buku', '19464292.png', 'Penerbit ini menawarkan katalog judul yang beragam dan berkualitas, dengan layanan pelanggan yang baik'),
(2, 'Ahmad', 'Penulis Berpengalaman', '19464291.png', 'Penerbit ini memiliki tim profesional yang responsif dan mengelola proses penerbitan dengan cermat dan efisien'),
(3, 'Dini', 'Penulis Pemula', '1946429.png', 'Penerbit ini memberikan bimbingan komprehensif dan dukungan emosional yang luar biasa bagi penulis pemula seperti saya'),
(4, 'Fitri', 'Mahasiswa', '19464293.png', 'Penerbit ini memberikan panduan jelas dan membantu melalui setiap tahap proses penerbitan, dari naskah hingga desain sampul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tim`
--

CREATE TABLE `t_tim` (
  `id_tim` int(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tim`
--

INSERT INTO `t_tim` (`id_tim`, `nama`, `jabatan`, `image`) VALUES
(2, 'Nama Team', 'CEO', 'dummy-man-png-2-1.png'),
(3, 'Nama Team', 'Desainer', 'dummy-man-png-2-11.png'),
(4, 'Nama Team', 'Editor', 'dummy-man-png-2-12.png'),
(5, 'Nama Team', 'Marketing', 'dummy-man-png-2-13.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(35) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `foto` text,
  `akses` enum('administrator','admin web') DEFAULT NULL,
  `tampil` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `password`, `nama_lengkap`, `foto`, `akses`, `tampil`) VALUES
(1, 'cemeyka', '202cb962ac59075b964b07152d234b70', 'Catur Cemeyka Jambi', 'bbba.jpg', 'admin web', 'Y'),
(2, 'catur', '202cb962ac59075b964b07152d234b70', 'Mas Catur', 'Cover_LKJIP_2022.png', 'admin web', 'N'),
(3, 'admin', '202cb962ac59075b964b07152d234b70', 'Yandi Hajrudin', 'WhatsApp_Image_2021-11-01_at_12_56_12_(1).jpeg', 'administrator', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_beranda`
--
ALTER TABLE `t_beranda`
  ADD PRIMARY KEY (`id_content`);

--
-- Indexes for table `t_blog`
--
ALTER TABLE `t_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `t_jumlah`
--
ALTER TABLE `t_jumlah`
  ADD PRIMARY KEY (`id_jumlah`);

--
-- Indexes for table `t_klien`
--
ALTER TABLE `t_klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indexes for table `t_paket`
--
ALTER TABLE `t_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `t_penawaran`
--
ALTER TABLE `t_penawaran`
  ADD PRIMARY KEY (`id_penawaran`);

--
-- Indexes for table `t_project`
--
ALTER TABLE `t_project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `t_quote`
--
ALTER TABLE `t_quote`
  ADD PRIMARY KEY (`id_quote`);

--
-- Indexes for table `t_testimoni`
--
ALTER TABLE `t_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `t_tim`
--
ALTER TABLE `t_tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_beranda`
--
ALTER TABLE `t_beranda`
  MODIFY `id_content` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_blog`
--
ALTER TABLE `t_blog`
  MODIFY `id_blog` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `t_jumlah`
--
ALTER TABLE `t_jumlah`
  MODIFY `id_jumlah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_klien`
--
ALTER TABLE `t_klien`
  MODIFY `id_klien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_paket`
--
ALTER TABLE `t_paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_penawaran`
--
ALTER TABLE `t_penawaran`
  MODIFY `id_penawaran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_project`
--
ALTER TABLE `t_project`
  MODIFY `id_project` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_quote`
--
ALTER TABLE `t_quote`
  MODIFY `id_quote` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_testimoni`
--
ALTER TABLE `t_testimoni`
  MODIFY `id_testimoni` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_tim`
--
ALTER TABLE `t_tim`
  MODIFY `id_tim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
