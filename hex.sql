-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 05:49 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hex`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `position` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `image`, `password`, `position`, `is_active`, `date_created`) VALUES
(1, 'ryanN', 'ryanN@gmail.com', 'default.jpg', '$2y$10$Ohcg2ANIcwvDd2cktEXzveTPQT0oCIy475y.uBVv3pHf2RbWA6WAu', 'talent', 1, 1565706104),
(2, 'tecgo', 'mentor@gmail.com', 'default.jpg', '$2y$10$PHSXi819P5xDG6fR.CpDluD4XIZow0AUP1iA0CyX6tdaz5ZQWSo62', 'mentor', 1, 1565759640),
(3, 'deep', 'company@gmail.com', 'default.jpg', '$2y$10$siVVjLmpKOsZmGnAIWz63uKnkHTKtlkXYXGakTPzgmsxCIZkvcVEu', 'company', 1, 1565759933),
(4, 'niken', 'ndickna@nik.com', 'default.jpg', '$2y$10$D2et/qHn5dO1bqpYYbKXUu2O6zrCuPVAcPYuQ3lq.5aTy2nyInoke', 'mentor', 1, 1565760444),
(6, 'ryannn', 'ryannnN@gmail.com', 'default.jpg', '$2y$10$WoysRtjzpWYcVjEJ8c1MvOd5Lah/0OSjxzFpns4CEaw..Pej4OuxK', 'talent', 1, 1566288522),
(7, 'ghoul', 'ghoul@gmail.com', 'default.jpg', '$2y$10$JmQn2gLKhYRZeYEFx4boFO774Fi4IVqmrhav4vzeoKtGOClpqsL3i', 'talent', 1, 1566316403),
(8, 'sane', 'sane@yahoo.com', 'default.jpg', '$2y$10$/XkD6EgY/k1EbsE9m26S6uh9wc1MM3/YpF/kUZQH0rsIQz1G8tXoO', 'talent', 1, 1566452902),
(9, 'facebook', 'mark@face.org', 'default.jpg', '$2y$10$Pk5ON1bDBsHdCrgry6GiZu.UiRhZS9FtmvrGZwEuC9oe3slv7tuaK', 'company', 1, 1566546459),
(10, 'ryan', 'jj@g.c', 'default.jpg', '$2y$10$PFNf3aHeX9l1Ix9OmLR9SO8.eGrTzwZ.zhuWFnIbHrm8KyVdop1JG', 'talent', 1, 1567397590);

-- --------------------------------------------------------

--
-- Table structure for table `profilcompany`
--

CREATE TABLE `profilcompany` (
  `company_id` int(11) NOT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilcompany`
--

INSERT INTO `profilcompany` (`company_id`, `nik`, `name`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kota`, `provinsi`, `kode_pos`, `jabatan`, `no_hp`) VALUES
(3, '35112345678912345', 'Harto S.kom', 'Malang', '1998-01-02', 'laki-laki', 'south Market', 'Malang', 'Jawa Timur', '6661', 'Leader', '08923456712');

-- --------------------------------------------------------

--
-- Table structure for table `profilcompany2`
--

CREATE TABLE `profilcompany2` (
  `company2_id` int(11) NOT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `provinsi` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL,
  `jumlah_pendapatan` varchar(50) DEFAULT NULL,
  `jumlah_tenaga` varchar(50) DEFAULT NULL,
  `jenis_usaha` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilcompany2`
--

INSERT INTO `profilcompany2` (`company2_id`, `npwp`, `name`, `alamat`, `kota`, `provinsi`, `kode_pos`, `jumlah_pendapatan`, `jumlah_tenaga`, `jenis_usaha`, `no_telp`, `website`) VALUES
(3, '92233720368547758077', 'facebook', 'comptown street', 'LA', 'Jawa Timur', '6661', '4NOLE12', '100', 'BUMN', '0341564512', 'www.facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `profilmentor`
--

CREATE TABLE `profilmentor` (
  `mentor_id` int(11) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `tempat_lahir` varchar(16) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(16) DEFAULT NULL,
  `pendidikan_terakhir` varchar(16) DEFAULT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(128) DEFAULT NULL,
  `pekerjaan` varchar(128) DEFAULT NULL,
  `no_hp` varchar(128) DEFAULT NULL,
  `materi` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profilmentor`
--

INSERT INTO `profilmentor` (`mentor_id`, `name`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `alamat`, `kota`, `provinsi`, `kode_pos`, `pekerjaan`, `no_hp`, `materi`) VALUES
(4, 'niken', '3512345678912345', 'Malang', '1998-02-10', 'laki-laki', 'S1', 'hatimu', 'Malang', 'Jawa Timur', '6661', 'Mahasiswa', '08923451234', 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `profiltalent`
--

CREATE TABLE `profiltalent` (
  `talent_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `nik` varchar(256) DEFAULT NULL,
  `tempat_lahir` varchar(128) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(128) DEFAULT NULL,
  `pendidikan_terakhir` varchar(128) DEFAULT NULL,
  `alamat` varchar(128) DEFAULT NULL,
  `kota` varchar(128) DEFAULT NULL,
  `provinsi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(128) DEFAULT NULL,
  `pekerjaan` varchar(128) DEFAULT NULL,
  `no_hp` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiltalent`
--

INSERT INTO `profiltalent` (`talent_id`, `name`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `alamat`, `kota`, `provinsi`, `kode_pos`, `pekerjaan`, `no_hp`) VALUES
(1, 'ryanN', '3519898678123352', 'Malang', '1998-12-11', 'laki-laki', 'SMA', 'Sukun gang 21', 'Malang', 'Jawa Timur', '565554', 'Mahasiswa', '08923453215'),
(6, 'ryannn', '3512348918295678', 'Malang', '1998-02-08', 'Perempuan', 'S2', 'sukun gang 8', 'Malang', 'Jawa Timur', '6661', 'CEO', '0888888888888');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `notelp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`username`, `email`, `notelp`) VALUES
('ndickna', 'company@gmail.com', '999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profilcompany`
--
ALTER TABLE `profilcompany`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `profilcompany2`
--
ALTER TABLE `profilcompany2`
  ADD PRIMARY KEY (`company2_id`);

--
-- Indexes for table `profilmentor`
--
ALTER TABLE `profilmentor`
  ADD PRIMARY KEY (`mentor_id`);

--
-- Indexes for table `profiltalent`
--
ALTER TABLE `profiltalent`
  ADD PRIMARY KEY (`talent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profilcompany`
--
ALTER TABLE `profilcompany`
  ADD CONSTRAINT `to_client_c` FOREIGN KEY (`company_id`) REFERENCES `client` (`id`);

--
-- Constraints for table `profilcompany2`
--
ALTER TABLE `profilcompany2`
  ADD CONSTRAINT `toclient` FOREIGN KEY (`company2_id`) REFERENCES `client` (`id`);

--
-- Constraints for table `profilmentor`
--
ALTER TABLE `profilmentor`
  ADD CONSTRAINT `to_client_` FOREIGN KEY (`mentor_id`) REFERENCES `client` (`id`);

--
-- Constraints for table `profiltalent`
--
ALTER TABLE `profiltalent`
  ADD CONSTRAINT `to_client` FOREIGN KEY (`talent_id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
