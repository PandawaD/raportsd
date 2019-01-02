-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 08:27 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pd_raport`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `nis` varchar(25) NOT NULL,
  `smstr` int(1) NOT NULL,
  `sakit` int(2) NOT NULL,
  `ijin` int(2) NOT NULL,
  `alpa` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`nis`, `smstr`, `sakit`, `ijin`, `alpa`) VALUES
('2985', 1, 4, 1, 1),
('2904', 2, 2, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi`
--

CREATE TABLE `deskripsi` (
  `idd` int(10) NOT NULL,
  `kode_mapel` int(10) NOT NULL,
  `kode_kelas` int(10) NOT NULL,
  `kode_kategori` int(10) NOT NULL,
  `kat1` text NOT NULL,
  `kat2` text NOT NULL,
  `kat3` text NOT NULL,
  `kat4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi`
--

INSERT INTO `deskripsi` (`idd`, `kode_mapel`, `kode_kelas`, `kode_kategori`, `kat1`, `kat2`, `kat3`, `kat4`) VALUES
(3, 11, 1, 4, 'bisa nulis 4 lkkmsdfasdfaaaaaaaaaaaaaaaaaaaaaaaaaaasdfsdfsdfsdf', 'bisa nulis 3 angka sadkf;sadm as fsdlaflsdaf nsdafjsdf', 'bisa nulis 2 angka angka dealkdfkdjsafnsadnfknsdlkanfkalsfd jhhbjhbh hbjhbh', 'bisa nulis 1  sdamf iasdmfisadf imasidmf'),
(4, 11, 1, 3, 'tau 4 angka', 'tau 3 angka', 'tau 2 angka', 'tau 1 angka'),
(5, 12, 1, 4, 'menyanyi 4 lagu', 'menyanyi 3 lagu', 'menyanyi 2 lagu', 'menyanyi 1 lagu'),
(6, 12, 1, 3, 'tau lagu 4 lagu daerah', 'tau lagu 3 lagu daerah', 'tau lagu 2 lagu daerah', 'tau lagu 1 lagu daerah'),
(7, 9, 1, 4, 'Menceritakan kegiatan sesuai dengan aturan yang berlaku dalam kehidupan sehari-hari di rumah. Menceritakan, pengalaman kebersamaan dalam keberagaman karakteristik individu di rumah.', 'Menceritakan kegiatan sesuai dengan aturan yang berlaku dalam kehidupan sehari-hari di rumah. Menceritakan, pengalaman kebersamaan dalam keberagaman  individu di rumah.', 'Menceritakan kegiatan sesuai dengan aturan yang berlaku dalam kehidupan sehari-hari di rumah. dan pengalaman  kebersamaan di rumah.', 'perlu bimbingan'),
(9, 9, 1, 3, 'bagus', 'bagus', 'bagus', 'bagus');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `xul` int(2) NOT NULL,
  `ekstra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekskul`
--

INSERT INTO `ekskul` (`xul`, `ekstra`) VALUES
(1, 'Pramuka'),
(2, 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `fisik`
--

CREATE TABLE `fisik` (
  `nis` varchar(25) NOT NULL,
  `smstr` int(1) NOT NULL,
  `tinggi` int(3) NOT NULL,
  `berat` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fisik`
--

INSERT INTO `fisik` (`nis`, `smstr`, `tinggi`, `berat`) VALUES
('2985', 1, 150, 60);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(40) NOT NULL,
  `nama_guru` text NOT NULL,
  `jenkel` enum('pria','wanita') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `nama_guru`, `jenkel`, `tempat_lahir`, `tgl_lahir`, `status`, `foto`) VALUES
('---', 'Gaguk Suharsono', 'pria', 'jember', '27/03/1977', 'GTT', ''),
('-----------', 'Rifatul Hasanah', 'wanita', 'Jember', '23/12/1982', 'GTT', ''),
('195904151987031005', 'Katimin', 'pria', 'Pacitan', '15/04/1959', 'PNS', ''),
('195906121983081006', 'Muh. Dusu', 'pria', 'jember', '12/06/1959', 'PNS', ''),
('196001251982011011', 'Samidi', 'pria', 'Gunung Kidul', '25/01/1960', 'PNS', ''),
('196507291987031005', 'Hadi Kusyono', 'pria', 'Jember', '29/07/1965', 'PNS', ''),
('197403251999121001', 'Rahmatullah', 'pria', 'Jember', '25/03/1974', 'PNS', ''),
('198508132010012022', 'Devin Widyarahman', 'wanita', 'Blitar', '13/08/1985', 'PNS', '');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `nis` varchar(25) NOT NULL,
  `nip` varchar(40) NOT NULL,
  `kelas` int(2) NOT NULL,
  `semester` enum('pria','wanita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(10) NOT NULL,
  `nama_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
(1, 'Spiritual'),
(2, 'Sosial'),
(3, 'Pengetahuan'),
(4, 'Keterampilan');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` int(10) NOT NULL,
  `nama_kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `nama_kelas`) VALUES
(1, '1/ganjil'),
(2, '1/genap\r\n'),
(3, '2/ganjil'),
(4, '2/genap'),
(5, '3/ganjil'),
(6, '3/genap'),
(7, '4/ganjil'),
(8, '4/genap'),
(9, '5/ganjil'),
(10, '5/genap'),
(11, '6/ganjil'),
(12, '6/genap');

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE `kesehatan` (
  `nis` varchar(25) NOT NULL,
  `smstr` int(1) NOT NULL,
  `penglihatan` text NOT NULL,
  `pendengaran` text NOT NULL,
  `gigi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesehatan`
--

INSERT INTO `kesehatan` (`nis`, `smstr`, `penglihatan`, `pendengaran`, `gigi`) VALUES
('2985', 1, 'baik', 'baik', 'baik'),
('2959', 1, 'baik', 'baik', 'baik');

-- --------------------------------------------------------

--
-- Table structure for table `kopetensi`
--

CREATE TABLE `kopetensi` (
  `kd` varchar(25) NOT NULL,
  `kode_kategori` int(10) NOT NULL,
  `kode_kelas` int(10) NOT NULL,
  `kode_mapel` int(10) NOT NULL,
  `kode_subtema` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kopetensi`
--

INSERT INTO `kopetensi` (`kd`, `kode_kategori`, `kode_kelas`, `kode_mapel`, `kode_subtema`) VALUES
('1.1.1.mat.3.1', 3, 1, 11, 1),
('1.1.1.mat.3.2', 3, 1, 11, 1),
('1.1.1.mat.4.1', 4, 1, 11, 1),
('1.1.1.ppkn.1.2', 1, 2, 9, 1),
('1.1.1.ppkn.2.2', 2, 1, 9, 1),
('1.1.1.ppkn.3.2', 3, 1, 9, 1),
('1.1.1.ppkn.4.2', 4, 1, 9, 1),
('1.1.1.sbdp.3.1', 3, 1, 12, 1),
('1.1.1.sbdp.4.2', 4, 1, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level_user` enum('admin','kepsek','g1','g2','g3','g4','g5','g6') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `nip`, `username`, `password`, `level_user`) VALUES
(4, '197403251999121001', 'rahmatullah', 'admin', 'admin'),
(5, '-----------', 'rifa', 'rifa', 'g1'),
(6, '195904151987031005', 'katimin', 'katimin', 'kepsek');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `kode_mapel` int(10) NOT NULL,
  `nama_mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`kode_mapel`, `nama_mapel`) VALUES
(8, 'Pendidikan Agama dan Budi Pekerti'),
(9, 'Pendidikan Pancasila dan Kewarganegaraan'),
(10, 'Bahasa Indonesia'),
(11, 'Matematika'),
(12, 'Seni Budaya dan Prakarya'),
(13, 'Pendidikan Jasmani, Olahraga dan Kesehatan'),
(14, 'Bahasa Madura'),
(15, 'Baca Tulis Al-Quran'),
(16, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nis` varchar(25) NOT NULL,
  `kd` varchar(25) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ekskul`
--

CREATE TABLE `nilai_ekskul` (
  `nis` varchar(25) NOT NULL,
  `xul` int(2) NOT NULL,
  `nilai` text NOT NULL,
  `smstr` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_ekskul`
--

INSERT INTO `nilai_ekskul` (`nis`, `xul`, `nilai`, `smstr`) VALUES
('2985', 1, 'baik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pk`
--

CREATE TABLE `pk` (
  `nis` varchar(25) NOT NULL,
  `smstr` int(1) NOT NULL,
  `kd` varchar(25) NOT NULL,
  `nilai` int(3) NOT NULL,
  `kode_kategori` int(10) NOT NULL,
  `kode_kelas` int(10) NOT NULL,
  `kode_mapel` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pk`
--

INSERT INTO `pk` (`nis`, `smstr`, `kd`, `nilai`, `kode_kategori`, `kode_kelas`, `kode_mapel`) VALUES
('2985', 1, '1.1.1.mat.3.1', 82, 3, 1, 11),
('2985', 1, '1.1.1.mat.4.1', 80, 4, 1, 11),
('2985', 1, '1.1.1.sbdp.3.1', 92, 3, 1, 12),
('2985', 1, '1.1.1.sbdp.4.2', 95, 4, 1, 12),
('2960', 1, '1.1.1.mat.3.1', 90, 3, 1, 11),
('2960', 1, '1.1.1.mat.4.1', 89, 4, 1, 11),
('2960', 1, '1.1.1.sbdp.3.1', 86, 3, 1, 12),
('2960', 1, '1.1.1.sbdp.4.2', 87, 4, 1, 12),
('2961', 1, '1.1.1.mat.3.2', 80, 3, 1, 11),
('2961', 1, '1.1.1.mat.4.1', 90, 4, 1, 11),
('2963', 1, '1.1.1.mat.3.1', 85, 3, 1, 11),
('2963', 1, '1.1.1.mat.4.1', 89, 4, 1, 11),
('2963', 1, '1.1.1.ppkn.4.2', 85, 4, 1, 9),
('2963', 1, '1.1.1.ppkn.3.2', 80, 3, 1, 9),
('2985', 2, '1.1.1.mat.3.1', 100, 3, 1, 11),
('2985', 2, '1.1.1.mat.4.1', 65, 4, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `nis` varchar(25) NOT NULL,
  `prestasii` text NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`nis`, `prestasii`, `detail`) VALUES
('2858', '', 'main '),
('2960', '', 'main di gor'),
('2985', '', 'asd'),
('2962', '', 'asd'),
('2963', 'sa', 'sadsd'),
('2985', 'asassaas', 'qwert');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `nis` varchar(25) NOT NULL,
  `saran` text NOT NULL,
  `smstr` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`nis`, `saran`, `smstr`) VALUES
('2985', 'sadf', 1),
('2904', 'kamu itu harus belajar lebih giat ya naaaaak', 2);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `smstr` int(1) NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`smstr`, `sem`) VALUES
(1, 'ganjil'),
(2, 'genap');

-- --------------------------------------------------------

--
-- Table structure for table `sikap`
--

CREATE TABLE `sikap` (
  `nis` varchar(25) NOT NULL,
  `kategori` enum('Spritual','Sosial') NOT NULL,
  `nilai` text NOT NULL,
  `smstr` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sikap`
--

INSERT INTO `sikap` (`nis`, `kategori`, `nilai`, `smstr`) VALUES
('2959', 'Spritual', 'ketatan dalam beribadah,berperilaku syukur,toleransi dalam beribadah', 1),
('2985', 'Spritual', 'berdoa sebelum dan sesudah melakukan kegiatan,', 1),
('2985', 'Sosial', 'jujur,disiplin,', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(25) NOT NULL,
  `kelas` int(2) NOT NULL,
  `nisn` varchar(50) NOT NULL,
  `nama_siswa` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `jenkel` enum('pria','wanita','','') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `ayah` text NOT NULL,
  `ibu` text NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `kelas`, `nisn`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `agama`, `ayah`, `ibu`, `alamat`, `foto`) VALUES
('2742', 6, '005425635', 'M. Farhan Maulana', 'Jember', '09/04/2005', 'pria', 'Islam', 'Moch. Ali', 'Asyiah', 'Patemon', ''),
('2773', 6, '005213706', 'Dwi Abelia Rahmayanti', 'Jember', '20/11/2005', 'wanita', 'Islam', 'Sugianto', 'Hol Fadilah', 'Patemon', ''),
('2778', 6, '005516840', 'Hendri Saputra', 'Jember', '17/05/2005', 'pria', 'Islam', 'H. Nafis', 'Ruswa', 'Sumberkokap', ''),
('2785', 6, '005116479', 'M. Rodi', 'Jember', '12/02/2005', 'pria', 'Islam', 'Hasan', 'Jami', 'Pandian', ''),
('2788', 6, '006285038', 'Moh. Rizet Zaenuri', 'Jember', '30/06/2005', 'pria', 'Islam', 'Priadi', 'Siti Aminah', 'Jenggleng', ''),
('2789', 6, '006467590', 'Maulidah Mukarromah', 'Jember', '02/02/2006', 'wanita', 'Islam', 'Semhadi', 'Misyana', 'Patemon', ''),
('2796', 6, '005976240', 'Muhammad Irfan Efendi', 'Jember', '03/07/2005', 'pria', 'Islam', 'Muhammad Taufiq', 'Sundari', 'Sumberkokap', ''),
('2806', 6, '0068709181', 'Adib Putra Ma`arif', 'Jember', '11/05/2006', 'pria', 'ISLAM', 'SUCIPNO', 'LIPTIYAH', 'PATEMON', ''),
('2807', 6, '006825641', 'Dila Fitriani', 'Jember', '15/11/2005', 'wanita', 'Islam', 'Warsito', 'Suryati', 'Sumberkokap', ''),
('2808', 6, '007642899', 'Dini Silfiatul Izzah', 'Jember', '18/04/2007', 'wanita', 'Islam', 'Hosnan', 'Helmi Rukmana', 'Sumber Tengah', ''),
('2809', 6, '006257513', 'Ebim Faqihuddin', 'Jember', '30/05/2006', 'pria', 'Islam', 'taki', 'Amina', 'Pandian', ''),
('2810', 6, '007301254', 'Kiswatun Naimah', 'Jember', '18/04/2007', 'wanita', 'Islam', 'Ahmadi', 'Rise', 'Sumber Tengah', ''),
('2811', 6, '006964780', 'Lailatul Magfiroh', 'Jember', '03/10/2006', 'wanita', 'Islam', 'Amsari', 'Husnaida', 'Mumbul', ''),
('2812', 6, '006407928', 'Mardiyah', 'Jember', '21/02/2006', 'wanita', 'Islam', 'Tori', 'Juhria', 'Patemon', ''),
('2813', 6, '007406198', 'Moch. Abdul Wafi', 'Jember', '07/07/2007', 'pria', 'Islam', 'Eri', 'Suriya', 'Jenggleng', ''),
('2814', 6, '0073258351', 'NURUL MA`ARIF', 'Jember', '27/04/2007', 'pria', 'ISLAM', 'M NASIK KARIMULLAH ABIY', 'SITI KHOFIFAH', 'DUSUN SUMBER TENGAH', ''),
('2815', 6, '007737090', 'Moch. Rizal Fiqri', 'Jember', '27/05/2007', 'pria', 'Islam', 'Satun ', 'Sarifah', 'Jenggleng', ''),
('2817', 6, '006875054', 'Muhammad Latiful Hoir', 'Jember', '06/08/2006', 'pria', 'Islam', 'Samsuri', 'Purwati', 'Sumber Tengah', ''),
('2818', 6, '006157908', 'Muhammad Ridho Khoiril Anwar', 'Jember', '09/08/2006', 'pria', 'Islam', 'Suheri', 'Wartin', 'Sumber Tengah', ''),
('2819', 6, '007226990', 'Nafiratul Maufiroh', 'Jember', '04/04/2007', 'wanita', 'Islam', 'Fathorrozi', 'Sriwati', 'Sumberkokap', ''),
('2820', 6, '007116756', 'Putri Anisatul', 'Jember', '28/01/2007', 'wanita', 'Islam', 'Satari', 'Jumlia', 'Mumbul', ''),
('2821', 6, '006231640', 'Putri Renaftul Avitzah', 'Jember', '20/07/2006', 'wanita', 'Islam', 'Tohari', 'Riwani', 'Sumberkokap', ''),
('2822', 6, '006843287', 'Reva Vindita', 'Jember', '17/07/2006', 'wanita', 'Islam', 'Budiono', 'Shafin', 'Sumber Tengah', ''),
('2823', 6, '006841917', 'Rifki Ainul Huda', 'Jember', '06/07/2006', 'pria', 'Islam', 'Satun', 'Imamah', 'Sumber Tengah', ''),
('2824', 6, '0075536915', 'Risma Wasi`ah', 'Jember', '11/02/2007', 'wanita', 'ISLAM', 'SUMADI', 'IDA', 'DUSUN PATEMON', ''),
('2825', 6, '006800312', 'Rohisatul Jannah', 'Jember', '25/08/2006', 'wanita', 'Islam', 'Edi Susanto', 'Eva Septa Rahayu', 'Sumberkokap', ''),
('2826', 6, '007935521', 'Safira Fitria Ramadina', 'Jember', '31/01/2007', 'wanita', 'Islam', 'Sugianto', 'Siti Juhiriyah', 'Sumber Tengah', ''),
('2827', 6, '006923547', 'Safril Triyan Saputra', 'Jember', '15/10/2006', 'pria', 'Islam', 'Sanimo', 'Tatik Habibah', 'Sumber Tengah', ''),
('2828', 6, '0057100019', 'Sela Ma`rifah', 'Jember', '20/04/2005', 'wanita', 'ISLAM', 'SARIP', 'ELLIP', 'DUSUN PANDIAN', ''),
('2829', 6, '007771043', 'Siti Magfirah', 'Jember', '03/06/2007', 'wanita', 'Islam', 'Siswanto', 'Rohalima', 'Mumbul', ''),
('2830', 6, '007117086', 'Siti Musrifatul Hasanah', 'Jember', '20/02/2007', 'wanita', 'Islam', 'Suliyanto', 'Umsilah', 'Pandian', ''),
('2831', 6, '006571932', 'Siti Tita Raisi', 'Jember', '01/07/2006', 'wanita', 'Islam', 'Rep', 'Sri Hatinah', 'Sumberkokap', ''),
('2832', 6, '006688677', 'Zelviatus Zulva', 'Jember', '06/12/2006', 'pria', 'Islam', 'Nurul', 'Endang Purnamasari', 'Sumberkokap', ''),
('2834', 5, '0086104560', 'Ach Ainurridho', 'JEMBER', '21-07-2008', 'pria', 'Islam', 'AWAN GUNAWAN', 'YATI ANDRISTIANI', 'DSN JENGGLENG', ''),
('2835', 5, '0071790084', 'Ahmad Haydar Sabilillah', 'JEMBER', '26-07-2007', 'pria', 'Islam', 'DARWIS MUHAMMAD', 'SUHARTATIK', 'DSN PANDIAN', ''),
('2836', 5, '0077713837', 'Ahmad Lutfi', 'JEMBER', '25-07-2007', 'pria', 'Islam', 'ZAENAL ARIFIN', 'KIPTIYAH', 'DSN SBR TENGAH', ''),
('2837', 5, '0081072067', 'Ahmad Raiza Adithiya Bahri', 'JEMBER', '23-06-2008', 'pria', 'Islam', 'SAIFUL BAHRI', 'SITI HOLIFAH', 'DSN SBR TENGAH', ''),
('2838', 5, '0088973565', 'Amelia', 'JEMBER', '31-03-2008', 'wanita', 'Islam', 'SUDARYANTO', 'ROSITA', 'DSN SBR TENGNAH', ''),
('2839', 5, '0088843351', 'Anisa Safitri Hasanah', 'JEMBER', '01-01-2008', 'wanita', 'Islam', 'ASMAD', 'IDA ROYANI', 'SBR TENGAH', ''),
('2840', 4, '007345627', 'Fitriyah', 'Jember', '08/08/2007', 'wanita', 'Islam', 'Sunardi', 'Misyani', 'Dusun Patemon', ''),
('2841', 4, '007599357', 'Haris Sandi Maulana', 'Jember', '17/06/2007', 'pria', 'Islam', 'Supardi', 'Yeni Harifah', 'Sumberkokap', ''),
('2842', 5, '0087432755', 'Inara Khafie', 'JEMBER', '01-07-2008', 'wanita', 'Islam', 'AHMAD HATIBI', 'FAUZIATUL HAMIMAH', 'DSN PANDIAN', ''),
('2843', 5, '0063997241', 'Intan Wulandari', 'SURABAYA', '19-03-2006', 'wanita', 'Islam', 'RIMAN', 'TATIK', 'JL.CENDERAWASIH', ''),
('2844', 5, '0071744146', 'Kamiluddin', 'JEMBER', '2007-04-26', 'pria', 'Islam', 'ARJOSO', 'YATI', 'DSN PANDIAN', ''),
('2845', 5, '0088920230', 'Mamluk Atus Sholeha', 'JEMBER', '11-03-2008', 'wanita', 'Islam', 'MUHAMMAD ALI', 'SITI ROMLAH', 'DSN SBR KOKAP', ''),
('2846', 5, '0076505789', 'Micelle Ica Saputri', 'JEMBER', '16-12-2007', 'pria', 'Islam', 'MOCH HAERI', 'SUCI LATIFAH', 'DSN SBR KOKAP', ''),
('2847', 5, '0073908459', 'Miftahul Arifin', 'JEMBER', '29-06-2007', 'pria', 'Islam', 'MISWAR', 'MAIMUNA', 'DSN PATEMON', ''),
('2848', 5, '0071140166', 'Moch Balan Sultoni', 'JEMBER', '01-02-2007', 'pria', 'Islam', 'BUANG SUGIONO', 'SRI SOFIATI', 'DSN SBR KOKAP', ''),
('2849', 5, '0077295352', 'Moch Feri', 'JEMBER', '22-06-2007', 'pria', 'Islam', 'HARTONO', 'SUMARNI', 'DSN PATEMON', ''),
('2850', 5, '0076188815', 'Moch.royhan Firdaus', 'JEMBER', '10-04-2007', 'pria', 'Islam', 'SUBAIDI', 'SUDARSE', 'SBR KOKAP', ''),
('2851', 5, '0072949713', 'Mochammad Choiril Amir', 'Jember', '21/10/2007', 'pria', 'ISLAM', 'SUK`UDI (ALM)', 'MISTINA', 'SUMBER TENGAH', ''),
('2852', 5, '0077068591', 'Moh Ragil Firmansyah', 'JEMBER', '03-09-2007', 'pria', 'Islam', 'PRIADI', 'SITI AMINAH', 'JANGGLENG', ''),
('2853', 5, '0075804789', 'Muhammad Rendi Firmansyah', 'JEMBER', '15/09/2007', 'pria', 'Islam', 'SUNAELI', 'NURHANI', 'SBR TENGAH', ''),
('2854', 5, '0074126645', 'Muhammad Subhan', 'JEMBER', '17/02/2007', 'pria', 'Islam', 'MOH HALILI', 'MISYANI', 'DSN SUMBER TENGAH', ''),
('2855', 4, '008544899', 'Nabil Maulana', 'Jember', '19/07/2008', 'pria', 'Islam', 'Moch. Haris', 'Nur Halimah', 'Pandian', ''),
('2856', 5, '0082870843', 'Nur Aini Desi Kamilah', 'JEMBER', '05/01/2008', 'wanita', 'Islam', 'SUWITO', 'SURAKMI', 'SBR KOKAP', ''),
('2857', 5, '0073469228', 'Rani Wardatul Auliya', 'JEMBER', '03/10/2007', 'wanita', 'Islam', 'MURSIT', 'KIPTIYAH', 'DSN PATEMON', ''),
('2858', 5, '0078319252', 'Saefil Ula', 'JEMBER', '21/10/2007', 'wanita', 'ISLAM', 'KUSNOTO', 'ASTUTIK', 'DSN SUMBER KOKAP', ''),
('2859', 5, '0075862019', 'Siti Aisyah', 'JEMBER', '21/08/2007', 'wanita', 'Islam', 'ASYARI', 'SITI HATIMAH', 'DSN SUMBER TENGAH', ''),
('2860', 5, '0088153721', 'Siti Himayah', 'JEMBER', '15/01/2008', 'wanita', 'Islam', 'MUZAKKI', 'TATIK', 'DUSUN MUMBUL', ''),
('2861', 5, '0083454912', 'Siti Raudatul Jannah', 'JEMBER', '22/01/2008', 'wanita', 'Islam', 'HOSNAN', 'LAILATUL BADRIAH', 'DSN SUMBER TENGAH', ''),
('2862', 5, '0079465460', 'Sitti Humairoh', 'JEMBER', '09/10/2007', 'wanita', 'Islam', 'MISJO', 'SITTI', 'DSN JENGGLENG', ''),
('2863', 4, '008507697', 'Sitti latifa Nafidoh', 'Jember', '02/04/2008', 'wanita', 'Islam', 'Irsem', 'Siti Zaenab', 'Pandian', ''),
('2864', 5, '0074478615', 'Sofyan Arifandi', 'JEMBER', '24/08/2007', 'pria', 'Islam', 'IMAM MAHRUS ROSI', 'SITI FATIMAH', 'DSN PATEMON', ''),
('2865', 5, '0085289131', 'Sri Wahyuni', 'JEMBER', '15/01/2008', 'wanita', 'Islam', 'UWI', 'NIMA', 'DSN JENGGLENG', ''),
('2866', 5, '0074403467', 'Uslifatul Ameliah', 'JEMBER', '06/11/2007', 'wanita', 'Islam', 'TULIS', 'SAYANI', 'DSN SUMBER KOKAP', ''),
('2867', 5, '0073463061', 'Vilah Fitriati', 'JEMBER', '13/10/2010', 'wanita', 'Islam', 'SUNARYO', 'YULIATI', 'DSN SUMBERNANGKA', ''),
('2868', 5, '0071655955', 'Wina', 'JEMBER', '07/07/2007', 'wanita', 'Islam', 'UWI', 'IYA', 'DSN PATEMON', ''),
('2870', 4, '009166036', 'Achmad Farendi Saefullah', 'Jember', '16/05/2009', 'pria', 'Islam', 'Moch Zaenal Affendi', 'Sumriyeh', 'Sumberkokap', ''),
('2871', 4, '009809960', 'Aldy Andika Saputra', 'Jember', '22/05/2010', 'pria', 'Islam', 'Jumarto', 'Sutarni', 'Sumberkokap', ''),
('2873', 4, '008975511', 'Aviv Nuril Asfiah', 'Jember', '24/03/2008', 'wanita', 'Islam', 'Sukrisno', 'Jamilatul Khazanah', 'Sumber Tengah', ''),
('2874', 4, '008822205', 'Cintia Novi Rahmadani', 'Jember', '16/08/2008', 'wanita', 'Islam', 'Ruslan', 'Ervin Damayanti', 'Gumuk Serayu', ''),
('2875', 3, '0087427386', 'Fadhoilul Asisih', 'JEMBER', '08-12-2008', 'pria', 'Islam', 'SURAHMAT', 'SITI HOLIFAH', 'SUMBER KOKAP', ''),
('2876', 4, '009227691', 'Farhan Abdillah', 'Jember', '28/04/2009', 'pria', 'Islam', 'Rudi Hartono', 'Ismiatul Latifah', 'Sumber Nangka', ''),
('2878', 4, '008648211', 'Firdatus Soleha', 'Jember', '29/03/2008', 'wanita', 'Islam', 'Moch Ifa Mustofa', 'Irma', 'Mumbul', ''),
('2879', 4, '008460610', 'Gustin Meriyatul Wahyuni', 'Jember', '28/04/2008', 'wanita', 'Islam', 'Wawan TS', 'Aswati Umamah', 'Mumbul', ''),
('2881', 4, '008283601', 'Insan Kamil Adzikri', 'Jember', '16/07/2008', 'pria', 'Islam', 'Mudakkir', 'Nipa', 'Sumberkokap', ''),
('2882', 4, '008172456', 'Kiswatut Taqwa', 'Jember', '26/02/2008', 'wanita', 'Islam', 'Masmud', 'Misriyah', 'Sumber Tengah', ''),
('2883', 4, '008792356', 'Lutfiatul Qomariyah', 'Jember', '19/11/2008', 'pria', 'Islam', 'Sanin', 'Rusyati', 'Sumber Nangka', ''),
('2884', 4, '008523773', 'M. Fahri Abdillah', 'Jember', '17/08/2008', 'pria', 'Islam', 'Moh. Hasan', 'Musrifah', 'Sumber Tengah', ''),
('2885', 4, '008883208', 'M. Andra Alfa Roha', 'Jember', '15/05/2008', 'pria', 'Islam', 'Hatib', 'Niwati', 'Sumberkokap', ''),
('2886', 4, '009683299', 'Maulidiyah', 'Jember', '08/05/2009', 'wanita', 'Islam', 'Hermin Suryanto', 'Rokayah', 'Mumbul', ''),
('2887', 4, '008935915', 'Moch. Alfin Fadil', 'Jember', '02/11/2008', 'pria', 'Islam', 'Moch. Suhra', 'Misyana', 'Mumbul', ''),
('2888', 3, '0084824449', 'Moch.yesir', 'JEMBER', '01-06-2008', 'pria', 'Islam', 'A .DARYANTO', 'HUSAIMAH', 'SUMBER KOKAP', ''),
('2889', 4, '0085261446', 'Muh. Maroviki', 'Jember', '01/09/2008', 'pria', 'Islam', 'Muh. gazali', 'Martina', 'Pandian', ''),
('2890', 4, '008386840', 'Muhammad Asrofil Azizi', 'Jember', '11/10/2008', 'pria', 'Islam', 'Sholehuddin', 'Yulaika Isningati', 'Sumber Tengah', ''),
('2891', 4, '009914404', 'Muhammad Fawaid', 'Jember', '01/01/2009', 'pria', 'Islam', 'Toyo', 'Sunarya', 'Sumber Tengah', ''),
('2892', 4, '008341113', 'Muhammad Ivan Rosidi', 'Jember', '01/05/2008', 'pria', 'Islam', 'Taji', 'Fatniyati', 'Pandian', ''),
('2893', 4, '009653958', 'Muhammad Rifan', 'Jember', '01/01/2009', 'pria', 'Islam', 'Anis Fagianto', 'Rukayyah', 'Sumber Tengah', ''),
('2894', 4, '008333224', 'Muhammad Riskan Maulana Ishak', 'Jember', '21/08/2008', 'pria', 'Islam', 'Ramli', 'Wita Wulandari', 'Patemon', ''),
('2895', 4, '009826626', 'Nur Halimah', 'Jember', '18/04/2009', 'wanita', 'Islam', 'Marseh', 'Sayuni', 'Sumber Tengah', ''),
('2898', 4, '008321676', 'Rofikahtun Naimah', 'Jember', '18/05/2008', 'wanita', 'Islam', 'Nahrawi', 'Sayami', 'Sumberkokap', ''),
('2899', 4, '007830707', 'Siti Nur Halina', 'Jember', '14/07/2007', 'wanita', 'Islam', 'Muhammad', 'Rusyati', 'Sumber Tengah', ''),
('2900', 4, '008104673', 'Siti Nurul Qomariyah', 'Jember', '22/06/2008', 'wanita', 'Islam', 'Hosnan', 'Juhairiyah', 'Mumbul', ''),
('2901', 4, '008632051', 'Siti Syafiyah', 'Jember', '24/04/2008', 'wanita', 'Islam', 'Niman Sunawi', 'Farida', 'Mumbul', ''),
('2902', 4, '008231495', 'Wandik Agus Ferdianzah', 'Jember', '17/08/2008', 'pria', 'Islam', 'Buhari', 'Kiptiyah', 'Patemon', ''),
('2904', 3, '99553020', 'Abdul Wafi', 'JEMBER', '08/09/2009', 'pria', 'Islam', 'BUNGKOS', 'MUSRIFAH', 'dsn mumbul', ''),
('2905', 3, '0109274444', 'Ahmad Ferdi Hasan', 'JEMBER', '27-03-2010', 'pria', 'Islam', 'MUSTAFA', 'SRI WAHYUNI', 'Jl.Cendrawasih', ''),
('2906', 3, '0092128013', 'Aisah Anis Damayanti', 'JEMBER', '16-06-2009', 'wanita', 'Islam', 'Admojo', 'SAMI', 'Jl.Cendrawasih', ''),
('2907', 3, '0091863515', 'Alfin Abdillah', 'JEMBER', '02-07-2009', 'pria', 'Islam', 'HERYANTO', 'TIBYANI', 'Pandian', ''),
('2908', 3, '0108031773', 'Amelia Tri Utami', 'JEMBER', '09-03-2010', 'wanita', 'Islam', 'MISBAHUL MUNIR', 'LINDA PUJI ASTUTIK', 'patemon', ''),
('2909', 3, '0095314444', 'Aurellia Putri Tri Shakinah', 'BANYUWANGI', '19-11-2009', 'wanita', 'Islam', 'ROEDY SOEGIARTO', 'CUK SRI HARTATIK', 'Jl.Cendrawasih', ''),
('2910', 3, '0091138388', 'Eka Ramdani', 'JEMBER', '16-06-2009', 'pria', 'Islam', 'ABDUL WAFI', 'ARWATI', 'Jl.Cumedak', ''),
('2911', 3, '0098536498', 'Fadilatul Hasanah', 'JEMBER', '30-07-2009', 'wanita', 'Islam', 'MOCH.MUHLIS', 'SUMRATI', 'PATEMON', ''),
('2912', 3, '0098654113', 'Ferdiansyah', 'JEMBER', '18-04-2009', 'pria', 'Islam', 'NASAN', 'RUSYATI', 'Jl.SumberKokap', ''),
('2913', 3, '0091417186', 'Fery Novianto', 'JEMBER', '29-11-2009', 'pria', 'Islam', 'SAENURI', 'SUHRIYEH', 'patemon', ''),
('2914', 3, '0093308463', 'Galuh Anindita Octarian', 'JEMBER', '20-10-2009', 'wanita', 'Islam', 'RUDI HARTONO', 'HOLIFAH', 'Mumbul', ''),
('2915', 3, '0094965014', 'Imelda Agustin', 'JEMBER', '26-08-2009', 'wanita', 'Islam', 'BAYU', 'YAYUK M.N', 'Jl.Cendrawasih', ''),
('2916', 3, '0081921013', 'M.aji Nurfiqi Ramdani', 'BANYUWANGI', '22-11-2008', 'pria', 'Islam', 'YANTO', 'HAIRIYAH', 'PATEMON', ''),
('2917', 3, '0105569591', 'Maulana Ahmad Rizki', 'JEMBER', '27-01-2010', 'pria', 'Islam', 'USTADI', 'TITIN MUSLIFAH', 'sumber tengah', ''),
('2918', 3, '0091955253', 'Moch Fahrudin Ghazali', 'JEMBER', '20-03-2009', 'pria', 'Islam', 'MOH ALI', 'ASIYA', 'PATEMON', ''),
('2919', 3, '0093341340', 'Moch Ilman Huda', 'JEMBER', '28-07-2009', 'pria', 'Islam', 'HOIRULLAH', 'SITI AFIYAH', 'PATEMON', ''),
('2920', 3, '0105981742', 'Moch Sahrul Gunawan', 'JEMBER', '13-04-2010', 'pria', 'Islam', 'KARYAWAN', 'MISNAINI', 'Jl.Cendrawasih', ''),
('2921', 3, '0094553719', 'Moh Iqbal', 'Jember', '18/11/2009', 'pria', 'ISLAM', 'MOH.HASIM AS`ARI', 'SITI WAHYUNI', 'Jl.Cendrwasih', ''),
('2922', 3, '0091283809', 'Muh Ifan Nurul Hidayah', 'JEMBER', '18-02-2009', 'pria', 'Islam', 'MOH TAUFIQ HIDAYAT', 'SITI RAHMAWATI', 'Jl.Cendrawasih', ''),
('2923', 3, '0091452430', 'Muhammad Ilzamul Haqqi', 'JEMBER', '23-11-2009', 'pria', 'Islam', 'MUHAMMAD ZAINI ARIFIN', 'ILHAMIYAH', 'mumbul', ''),
('2924', 3, '0095698360', 'Muhammad Wildan Alhak', 'JEMBER', '22-05-2009', 'pria', 'Islam', 'TURYADI', 'ELY ATI', 'Jl.Cendrawasih', ''),
('2925', 3, '0098240278', 'Nofita Putri Anggi', 'JEMBER', '23-11-2009', 'wanita', 'Islam', 'MOCH ABD ROSIDI', 'HALIMA', 'Mumbul', ''),
('2926', 3, '0098580797', 'Putri Nurul Hikmah', 'JEMBER', '30-06-2009', 'wanita', 'Islam', 'TOHARI', 'RIWANI', 'DUSUN SUMBER KOKAP', ''),
('2927', 3, '0098545016', 'Tania Aulia Zifanka', 'JEMBER', '28-12-2009', 'pria', 'Islam', 'HERIYADI', 'FETI MEGAWATI', 'Jl.Cumedak', ''),
('2928', 5, '0076049413', 'Nuris Salam', 'BANYUWANGI', '20/09/2007', 'pria', 'Islam', 'JUNAIDI', 'ISNAIYAH', 'sumber tengah', ''),
('2930', 2, '0105114393', 'Adelia Putri', 'JEMBER', '07/02/2010', 'wanita', 'Islam', 'JUPRI', 'ATINA', 'JL.CENDRAWASIH', ''),
('2931', 2, '0101470478', 'Ailatul Fitriyah', 'JEMBER', '15/09/2010', 'wanita', 'Islam', 'MOCH .IFA MUSTAFA', 'IRMA', 'Mumbul', ''),
('2932', 2, '0096702272', 'Aisyah Evi Rama Dani', 'JEMBER', '19/09/2009', 'wanita', 'Islam', 'SUDAHNAN', 'HATIJA', 'JL.CENDRAWASIH', ''),
('2933', 2, '0107069727', 'Alivin Kubro', 'Jember', '05/05/2010', 'pria', 'Islam', 'SYAIFUL RAHMATULLAH', 'RISKA', 'JL.CENDRAWASIH', ''),
('2934', 2, '0101494200', 'Aprilia Izzatin Nabilah', 'Jember', '19/04/2010', 'wanita', 'Islam', 'GHUFRON MAHSUSI', 'SUHAIMI ANAISIYAH', 'JL.CENDRAWASIH', ''),
('2935', 2, '0105207488', 'Dista Aini Fitria', 'Jember', '06/04/2010', 'wanita', 'Islam', 'RUDIANTO', 'HOIRIYAH', 'PANDIAN', ''),
('2936', 2, '0106144707', 'Fina Awfa Afkarina', 'Jember', '25/02/2010', 'wanita', 'Islam', 'MOCH YUNUS', 'YUYUK ANDRIANI', 'LEDOKOMBO', ''),
('2937', 2, '0101183177', 'Florenzo Irawan', 'Jember', '10/06/2010', 'pria', 'Islam', 'NANANG SETYO IRAWAN', 'FEBRINA EFFIYANTI', 'JL.CENDRAWASIH', ''),
('2938', 2, '0108698898', 'Helmiyatul Ningsih', 'JEMBER', '15/10/2010', 'wanita', 'Islam', 'NAPI', 'SITI HALIMAH', 'JL.CENDRAWASIH', ''),
('2939', 2, '0101974332', 'Intan Nuraini', 'JEMBER', '12/06/2010', 'wanita', 'Islam', 'GUPUHRIYANTO', 'MUTTIYATULLISEH', 'JL.CENDRAWASIH', ''),
('2940', 2, '0095264957', 'Kusnanto', 'JEMBER', '16/10/2009', 'pria', 'Islam', 'HASAN', 'JAMI', 'PANDIAN', ''),
('2941', 2, '0116168747', 'Linda Enjelina Hafshoh', 'JEMBER', '09/03/2011', 'wanita', 'Islam', 'ABDUL HALIM', 'RIRIN RATNASARI', 'Krajan Pandian', ''),
('2942', 2, '0107863524', 'Marisatul Izzah', 'JEMBER', '31/07/2010', 'wanita', 'Islam', 'MOCH HARIS', 'NUR HALIMAH', 'PANDIAN', ''),
('2943', 2, '0103572599', 'Muhammad Adi Gunawan', 'JEMBER', '10/04/2010', 'pria', 'Islam', 'IMAM GHAZALI', 'SISWATI', 'PATEMON', ''),
('2944', 2, '0106824565', 'Muhammad Danial', 'JEMBER', '21/12/2010', 'pria', 'Islam', 'MULYADI', 'ROKAYYAH', 'PANDIAN', ''),
('2945', 2, '0101198340', 'Muhammad Faruq', 'JEMBER', '11/02/2010', 'pria', 'Islam', 'MULYADI', 'ROKAYYAH', 'SUMBER TENGAH', ''),
('2946', 2, '0106462450', 'Muhammad Iqbalut Surur', 'JEMBER', '14/08/2010', 'pria', 'Islam', 'susyanto', 'LIN', 'MUMBUL', ''),
('2947', 2, '0109619687', 'Muhammad Khalil', 'JEMBER', '01/05/2010', 'pria', 'Islam', 'RONI', 'LUTFIAH', 'PATEMON', ''),
('2948', 2, '0102858510', 'Muhammad Nurul Risqi Afandi', 'JEMBER', '28/07/2010', 'pria', 'Islam', 'EMHADI', 'DEWI SITI AISAH', 'PATEMON', ''),
('2949', 2, '0107791587', 'Muhammad Raditya Putra', 'JEMBER', '29/09/2010', 'pria', 'Islam', 'SUHERNO', 'RUKAYAH', 'PATEMON', ''),
('2950', 2, '0107133822', 'Muhammad Subaeri', 'JEMBER', '05/09/2010', 'pria', 'Islam', 'SURYO', 'JUMAINA', 'Sumber kokap', ''),
('2951', 2, '0101502832', 'Naila Rohmatul Maula', 'JEMBER', '19/07/2010', 'wanita', 'Islam', 'MISNAN', 'ARBAENA', 'MUMBUL', ''),
('2952', 2, '0112718755', 'Nur Hofifah', 'JEMBER', '23/06/2011', 'wanita', 'Islam', 'NIJO', 'MIMIK SUDARSIH', 'PANDIAN', ''),
('2953', 2, '0115348423', 'Ria Awalia', 'JEMBER', '13/03/2011', 'wanita', 'Islam', 'ANANG SUGIONO', 'SRI ANI', 'perum bukit binus jaya', ''),
('2954', 2, '0106569096', 'Safinatus Zahroh', 'JEMBER', '01/09/2010', 'wanita', 'Islam', 'MUHAMMAD FAUZAN', 'FARIDA', 'JL.CENDRAWASIH', ''),
('2955', 2, '0116586868', 'Safiroh Saniatus .s', 'JEMBER', '12/05/2011', 'wanita', 'Islam', 'Sugiarto', 'Ucik sriwahyuni', 'JL.CENDRAWASIH', ''),
('2956', 2, '0107583033', 'Shofia Jufinka Hendra Yanti', 'JEMBER', '10/06/2010', 'wanita', 'Islam', 'HENDRA', 'MURNI', 'JL.CENDRAWASIH', ''),
('2957', 2, '0109922074', 'Uswatun Maryana', 'JEMBER', '20/03/2010', 'wanita', 'Islam', 'SAHRI', 'JATIMA', 'JL.CENDRAWASIH', ''),
('2958', 5, '0078319252', 'RIRIS MAULIDA', 'Jember', '18/04/2007', 'pria', 'ISLAM', 'MISNAJI', 'JUMA`ATI', 'SUMBER GEBANG LANGKAP', ''),
('2959', 1, '0118755588', 'AHMAD NUR MUTAKIN', 'JEMBER', '17/12/2011', 'pria', 'islam', 'TOYO', 'TOYANI', 'DUSUN SUMBER KOKAP', ''),
('2960', 1, '0118323373', 'ANDRE FIRMANSYAH', 'JEMBER', '12/01/2011', 'pria', 'ISLAM', 'HERMAN', 'ICE SUSILOWATI', 'Pandian', ''),
('2961', 1, '0112949056', 'ANUGRAH', 'JEMBER', '14/08/2011', 'pria', 'ISLAM', 'A.YANTO', 'SAMSIYEH', 'Jalan cendrawasih', ''),
('2962', 1, '0115075800', 'ARI RISKI ', 'JEMBER', '15/06/2011', 'pria', 'ISLAM', 'PORWANTO', 'RISKA HASANAH', 'DUSUN SUMBER KOKAP', ''),
('2963', 1, '0118323373', 'CITRA VIONA ALEXSANDIA', 'JEMBER', '11/01/2012', 'wanita', 'ISLAM', 'SUMADI', 'IDA', 'Patemon', ''),
('2964', 1, '0116092737', 'DARISAH ISMA`ILLIAH', 'Jember', '14/08/2011', 'wanita', 'Islam', 'ISMA`IL', 'SITI MUTMAINAH', 'Jalan barat gudang', ''),
('2965', 1, '0116991269', 'FARIDA FARAH SAKINAH', 'JEMBER', '21/09/2011', 'wanita', 'ISLAM', 'NURHASIN', 'ISEH', 'Jalan patemon', ''),
('2966', 1, '0116953324', 'IBNU SABIL ANDI RAGA WAHYUDI', 'JEMBER', '18/11/2011', 'pria', 'ISLAM', 'ISWAHYUDI', 'SITI MAIMUNA', 'Cendrawasih', ''),
('2967', 1, '0114735691', 'ILMIAH', 'JEMBER', '', 'wanita', 'ISLAM', 'TOMAS', 'SITI HOLIFAH', 'Jalan mumbul', ''),
('2968', 1, '0119040581', 'JULIO AZZAM ALFARISI', 'JEMBER', '04/07/2011', 'pria', 'ISLAM', 'RINTO ANTO', 'ENDAH TRI PURNAWATI', 'DUSUN SUMBER KOKAP', ''),
('2969', 1, '0114477641', 'KURNIAWAN FADILATU RAHMAD', 'Jember', '10/11/2011', 'pria', 'ISLAM', 'SAIFUL', 'SITI ROMLAH', 'Cendrawasih', ''),
('2970', 1, '0119926553', 'M.RIFKI ZAINUL ILMI', 'JEMBER', '24/11/2011', 'pria', 'ISLAM', 'SUGIANTO', 'HELMIYAH', 'Patemon', ''),
('2971', 1, '0111199651', 'MIFTAHUL ANWAR', 'JEMBER', '27/03/2011', 'pria', 'ISLAM', 'ABDUL KADIR', 'AZIZAH', 'Cendrawasih', ''),
('2972', 1, '0115781864', 'MUHAMMAD FENGKI FERTANDO', 'JEMBER', '09/05/2011', 'pria', 'ISLAM', 'SUWARNO', 'NIWATI', 'Jalan sukosari', ''),
('2973', 1, '0111581952', 'MUHAMMAD IHSAN AL-FATONI', 'Jember', '24/10/2011', 'pria', 'Islam', 'ABD. RACHMAN SHOLEH', 'HAMIDATUS SA`DIYAH', 'Jalan cendrawasih', ''),
('2974', 1, '0124306638', 'MUHAMMAD IKHWAN EFENDY', 'JEMBER', '27/10/2012', 'pria', 'ISLAM', 'ABDUL MUKIB', 'SUMIYATI', 'Jalan patemon', ''),
('2975', 1, '0117096932', 'MUHAMMAD NAUVAL ALFIAN', 'JEMBER', '11/11/2011', 'pria', 'ISLAM', 'MISBAHUL HASAN', 'FATHATUS SHOLEHAH', 'Dusun sumber tengah', ''),
('2976', 1, '0115883693', 'MUHAMMAD SYAIROSI ANNAZILI', 'JEMBER', '01/06/2011', 'pria', 'ISLAM', 'AGUS SLAMETO', 'RISKA HERLINA', 'Cendrawasih', ''),
('2977', 1, '0117073030', 'MUHAMMAD WILDANIL QUSYAIRI', 'JEMBER', '15/09/2011', 'pria', 'ISLAM', 'SUSIYANTO', 'RIFATUL MUZEYYENAH', 'Jalan janggleng', ''),
('2978', 1, '0115689875', 'MUMTAZAH AFKARINA', 'JEMBER', '14/08/2011', 'wanita', 'ISLAM', 'SAMSUL ARIFIN', 'MUAWANAH', 'Cendrawasih', ''),
('2979', 1, '0112080958', 'QOYYAD MAHLUFI', 'JEMBER', '20/10/2011', 'pria', 'ISLAM', 'MUALLIM', 'ROSIDEH', 'DUSUN SUMBER KOKAP', ''),
('2980', 1, '0115536110', 'RAFA ALFARIZY', 'Jember', '07/11/2011', 'pria', 'Islam', 'SAIFUL BAHRI', 'SUYINAH', 'Patemon', ''),
('2981', 1, '0114628827', 'REZA REVANDO AKBAR', 'Jember', '05/11/2011', 'pria', 'ISLAM', 'ANANG SUGIONO', 'SRI ANI', 'perum bukit binus jaya', ''),
('2982', 1, '0117768776', 'ROHIT ADI SAPUTRA', 'JEMBER', '12/02/2012', 'pria', 'ISLAM', 'YULIANTORO', 'ANITA', 'DUSUN SUMBER KOKAP', ''),
('2983', 1, '0127817826', 'SAHFA ANISATUL MILLAH', 'Jember', '17/01/2012', 'wanita', 'ISLAM', 'AGUS SUBAERI', 'NUR SYAMSIAH', 'Jalan cendrawasih', ''),
('2984', 1, '0115223649', 'SAMSUL HADI', 'JEMBER', '16/12/2011', 'pria', 'Islam', 'FATHORROSI', 'YULIATIN', 'Pandian', ''),
('2985', 1, '0115352803', 'SEPTIAN PUTRA RAMADANI', 'JEMBER', '04/09/2011', 'pria', 'ISLAM', 'SISRO', 'LUTVIAH AYU SAFITRI', 'DUSUN SUMBER KOKAP', ''),
('2986', 1, '0113975609', 'ULFA MASRUROH', 'JEMBER', '03/08/2011', 'wanita', 'ISLAM', 'JOKO SULASMAN', 'AISIYAH', 'Cendrawasih', '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa1`
--

CREATE TABLE `siswa1` (
  `id` int(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` int(2) NOT NULL,
  `tempat` varchar(15) NOT NULL,
  `tanggal` varchar(15) NOT NULL,
  `kelamin` enum('Pria','Wanita') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subtema`
--

CREATE TABLE `subtema` (
  `kode_subtema` int(10) NOT NULL,
  `subtema` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtema`
--

INSERT INTO `subtema` (`kode_subtema`, `subtema`) VALUES
(1, 'Aku dan Teman Baru'),
(2, 'pengalaman bersama teman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD KEY `nis` (`nis`,`smstr`),
  ADD KEY `smstr` (`smstr`);

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`idd`),
  ADD KEY `kode_mapel` (`kode_mapel`,`kode_kelas`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`xul`);

--
-- Indexes for table `fisik`
--
ALTER TABLE `fisik`
  ADD KEY `nis` (`nis`,`smstr`),
  ADD KEY `smstr` (`smstr`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD KEY `nis` (`nis`,`nip`,`kelas`,`semester`),
  ADD KEY `nip` (`nip`),
  ADD KEY `kelas` (`kelas`),
  ADD KEY `semester` (`semester`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD KEY `nis` (`nis`,`smstr`),
  ADD KEY `smstr` (`smstr`);

--
-- Indexes for table `kopetensi`
--
ALTER TABLE `kopetensi`
  ADD PRIMARY KEY (`kd`),
  ADD KEY `kode_kategori` (`kode_kategori`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_mapel` (`kode_mapel`),
  ADD KEY `kode_subtema` (`kode_subtema`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kode_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `nis` (`nis`),
  ADD KEY `kd` (`kd`);

--
-- Indexes for table `nilai_ekskul`
--
ALTER TABLE `nilai_ekskul`
  ADD KEY `nis` (`nis`),
  ADD KEY `xul` (`xul`),
  ADD KEY `smstr` (`smstr`);

--
-- Indexes for table `pk`
--
ALTER TABLE `pk`
  ADD KEY `nis` (`nis`,`smstr`,`kd`),
  ADD KEY `smstr` (`smstr`),
  ADD KEY `kd` (`kd`),
  ADD KEY `kode_kategori` (`kode_kategori`,`kode_kelas`,`kode_mapel`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_mapel` (`kode_mapel`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD KEY `nis` (`nis`),
  ADD KEY `smstr` (`smstr`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`smstr`);

--
-- Indexes for table `sikap`
--
ALTER TABLE `sikap`
  ADD KEY `nis` (`nis`),
  ADD KEY `semester` (`smstr`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `siswa1`
--
ALTER TABLE `siswa1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subtema`
--
ALTER TABLE `subtema`
  ADD PRIMARY KEY (`kode_subtema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `idd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `xul` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kode_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `kode_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `smstr` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `siswa1`
--
ALTER TABLE `siswa1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subtema`
--
ALTER TABLE `subtema`
  MODIFY `kode_subtema` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `absen_ibfk_2` FOREIGN KEY (`smstr`) REFERENCES `semester` (`smstr`) ON UPDATE CASCADE;

--
-- Constraints for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD CONSTRAINT `deskripsi_ibfk_1` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`) ON UPDATE CASCADE,
  ADD CONSTRAINT `deskripsi_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `deskripsi_ibfk_3` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON UPDATE CASCADE;

--
-- Constraints for table `fisik`
--
ALTER TABLE `fisik`
  ADD CONSTRAINT `fisik_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fisik_ibfk_2` FOREIGN KEY (`smstr`) REFERENCES `semester` (`smstr`) ON UPDATE CASCADE;

--
-- Constraints for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD CONSTRAINT `kesehatan_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kesehatan_ibfk_2` FOREIGN KEY (`smstr`) REFERENCES `semester` (`smstr`) ON UPDATE CASCADE;

--
-- Constraints for table `kopetensi`
--
ALTER TABLE `kopetensi`
  ADD CONSTRAINT `kopetensi_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kopetensi_ibfk_2` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kopetensi_ibfk_3` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kopetensi_ibfk_4` FOREIGN KEY (`kode_subtema`) REFERENCES `subtema` (`kode_subtema`) ON UPDATE CASCADE;

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`) ON UPDATE CASCADE;

--
-- Constraints for table `nilai_ekskul`
--
ALTER TABLE `nilai_ekskul`
  ADD CONSTRAINT `nilai_ekskul_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ekskul_ibfk_2` FOREIGN KEY (`xul`) REFERENCES `ekskul` (`xul`) ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ekskul_ibfk_3` FOREIGN KEY (`smstr`) REFERENCES `semester` (`smstr`) ON UPDATE CASCADE;

--
-- Constraints for table `pk`
--
ALTER TABLE `pk`
  ADD CONSTRAINT `pk_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pk_ibfk_2` FOREIGN KEY (`smstr`) REFERENCES `semester` (`smstr`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pk_ibfk_3` FOREIGN KEY (`kd`) REFERENCES `kopetensi` (`kd`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pk_ibfk_4` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pk_ibfk_5` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pk_ibfk_6` FOREIGN KEY (`kode_mapel`) REFERENCES `mapel` (`kode_mapel`) ON UPDATE CASCADE;

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `prestasi_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE;

--
-- Constraints for table `saran`
--
ALTER TABLE `saran`
  ADD CONSTRAINT `saran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `saran_ibfk_2` FOREIGN KEY (`smstr`) REFERENCES `semester` (`smstr`) ON UPDATE CASCADE;

--
-- Constraints for table `sikap`
--
ALTER TABLE `sikap`
  ADD CONSTRAINT `sikap_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sikap_ibfk_2` FOREIGN KEY (`smstr`) REFERENCES `semester` (`smstr`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
