-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Des 2019 pada 16.54
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_motor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE IF NOT EXISTS `motor` (
  `id_motor` int(11) NOT NULL AUTO_INCREMENT,
  `pabrikan_motor` varchar(50) NOT NULL,
  `merek_motor` varchar(50) NOT NULL,
  `spesifikasi_motor` text NOT NULL,
  `harga_motor` varchar(20) NOT NULL,
  `gambar_motor` varchar(255) NOT NULL,
  PRIMARY KEY (`id_motor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`id_motor`, `pabrikan_motor`, `merek_motor`, `spesifikasi_motor`, `harga_motor`, `gambar_motor`) VALUES
(1, 'YAMAHA', 'WR 155 R', 'Tipe mesin = Liquid cooled, 4-Stroke, SOHC, 4 Valves, VVA\r\nJumlah/posisi silinder = Silinder tunggal\r\nDiameter x Langkah = 58,0 x 58,7 mm\r\nPerbandingan kompresi = 11,6 : 1\r\nDaya maksimum = 12,3 KW/10.000 rpm\r\nTorsi maksimum = 14,3 Nm/ 6500 rpm\r\nSistem starter = elektrik starter\r\nSistem pelumasan = basah\r\nKapasitas oli mesin = Total : 1,50 L ; Berkala : 0,85 L ; Ganti Filter oli : 0,95 L\r\nSistem bahan bakar = Fuel Injection\r\nVolume Silinder = 155 cc\r\nTipe Kopling = Wet Type Multi-plate\r\nTipe Transmisi = Manual\r\nPola Pengoperasian Transmisi = 1-N-2-3-4-5-6', 'Rp. 36.900.000,-', '5de7d0d5ee405.jpg'),
(4, 'YAMAHA', 'MX KING 150', 'TIPE MESIN = Liquid cooled 4-stroke, SOHC\r\nJUMLAH / POSISI SILINDER = Single cylinder / Tegak\r\nDIAMETER X LANGKAH = 57,0 x 58,7 mm\r\nPERBANDINGAN KOMPRESI = 10,4 : 1\r\nDAYA MAKSIMUM = 11,3 kW / 8500 rpm\r\nTORSI MAKSIMUM = 13,8 Nm / 7000 rpm\r\nSISTEM STARTER = Elektrik starter &amp; Kick starter\r\nSISTEM PELUMASAN = Basah\r\nKAPASITAS OLI MESIN = Total : 1,15 L ; Berkala : 0,95 L ; Ganti filter oli : 1,00 L\r\nSISTEM BAHAN BAKAR = Fuel Injection\r\nTIPE KOPLING = Basah, Kopling manual , Multiplat\r\nTIPE TRANSMISI = Constant mesh, 5-kecepatan', 'Rp. 23.735.000,-', '5de7d6aca7ca2.jpg'),
(5, 'YAMAHA', 'R1M', 'Engine Type : liquid-cooled, in-line 4 cyliner ,4-stroke, DOHC, 4-valves\r\nDisplacement = 998cm3\r\nBore x stroke = 79.0 mm x 50.9 mm\r\nCompression ratio =13.0: 1\r\nMaximum power = 147.1 kW (200.0PS) @ 13.500 rpm\r\nMaximum torque = 112.4 Nm (11.5) kg-m @ 11.500 rpm\r\nLubrication system = Force-speed lubrication, wet sump\r\nFuel supply system = Fuel Injection\r\nClutch type = Wet, multiple-disc\r\nIgnition system = TCI\r\nStarter system = Electric\r\nTransmission system = Constant mesh 6-speed\r\nFinal drive = Chain', 'Rp. 812.000.000,-', '5de7f097e77e2.jpg'),
(6, 'YAMAHA', 'MT-09', 'Engine Type = 3-cylinder, Liquid Cooled, 4-stroke\r\nDisplacement = 847 m2\r\nBore X Stroke = 78,0 mm X 59,1 mm\r\nCompression Ratio = 11,5 : 1\r\nMaximum Power = 84,6 KW (115 PS) @ 10.000 RPM\r\nMaximum Torque = 87,5 NM (8,9 KG-M) @ 8.500 RPM\r\nLubricant System = Wet Sump\r\nClutch Type = Wet Multiple Disc\r\nCarburator = Fuel Injection\r\nIgnition System = TCi\r\nTransmission Type = Constant Mesh, 6 Speed\r\nFinal Tranmission = Chain', 'Rp. 250.000.000,-', '5de7f248de1d5.jpg'),
(7, 'YAMAHA', 'X-MAX', 'TIPE MESIN = Liquid Cooled 4-stroke, SOHC\r\nJUMLAH / POSISI SILINDER = Single Cylinder\r\nDIAMETER X LANGKAH = 70,0 x 64,9 mm\r\nPERBANDINGAN KOMPRESI = 10.5Â±0.4 : 1\r\nDAYA MAKSIMUM = 16,8 Kw/7000rpm\r\nTORSI MAKSIMUM = 24,3 Nm/5500rpm\r\nSISTEM STARTER = Electric Starter\r\nSISTEM PELUMASAN = Wet Sump\r\nKAPASITAS OLI MESIN = Total = 1,7 L ; Berkala = 1,5 L\r\nSISTEM BAHAN BAKAR = Fuel Injection\r\nTIPE KOPLING = Single Dry Clutch\r\nTIPE TRANSMISI = Full Automatic', 'Rp. 59.820.000,-', '5de7f2c53fc45.jpg'),
(8, 'HONDA', 'CBR 250 RR', 'Engine Type = 4-Stroke, 8-Valve, Parallel Twin Cylinder \r\nEngine Displacement = 249,7 cm3\r\nFuel Supply System = PGM-FI, Throttle Sytem: Throttle-By-Wire System with Accelerator Position Sensor\r\nBore X Stroke = 62,0 x 41,4 mm\r\nTransmission = Manual, 6 Speed\r\nCompression Ratio = 11,5 : 1\r\nMaximum Power = 28,5 kW (38,7PS) / 12.500 rpm\r\nMaximum Torque = 23,3 Nm (2,4 kgf.m) / 11.000 rpm\r\nStarting System = Electric Starter\r\nClutch System = Multiplate Wet Clutch with Coil Spring\r\nCooling System = Liquid Cooled With Auto Electric Fan\r\nGear Shift Pattern = 1-N-2-3-4-5-6', 'Rp. 69.990.000,-', '5de7f3bde6756.jpg'),
(9, 'HONDA', 'CRF 150L', 'Tipe Mesin = 4-Langkah, SOHC, Satu Silinder\r\nKapasitas Mesin = 149.15 cm3\r\nSistem Suplai Bahan Bakar = PGM-FI (Programmed Fuel Injection)\r\nDiameter X Langkah = 57.3 x 57.8 mm\r\nTipe Tranmisi = 5-Speed\r\nRasio Kompresi = 9.5:1\r\nDaya Maksimum = 9,51 kW(12,91 PS)/8.000 rpm\r\nTorsi Maksimum = 12,43 Nm(1,27 kgf.m)/6.500 rpm\r\nTipe Starter = Pedal dan Elektrik\r\nTipe Kopling = Manual, Multiplate Wet Clutch\r\nSistem Pendingin Mesin = Pendingin Udara\r\nPola Perpindahan Gigi = 1 â€“ N â€“ 2 â€“ 3 â€“ 4 â€“ 5', 'Rp. 33.299.000,-', '5de7f486629ce.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
