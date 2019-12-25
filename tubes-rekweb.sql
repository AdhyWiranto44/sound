-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2019 at 08:02 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes-rekweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `email_user` varchar(128) NOT NULL,
  `id_headset` int(11) DEFAULT NULL,
  `quantity` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `headset`
--

CREATE TABLE `headset` (
  `id_headset` int(11) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `merk_produk` varchar(128) NOT NULL,
  `harga_produk` int(128) NOT NULL,
  `tipe_produk` varchar(128) NOT NULL,
  `gambar_produk` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `headset`
--

INSERT INTO `headset` (`id_headset`, `nama_produk`, `merk_produk`, `harga_produk`, `tipe_produk`, `gambar_produk`) VALUES
(1, 'Samsung Gear Icon X', 'Samsung', 600000, 'Earphone', 'e1.jpg'),
(2, 'Sony MDR-XB50BS Black', 'Sony', 500000, 'Earphone', 'e2.jpg'),
(3, 'AKG Earphone', 'AKG', 1000000, 'Earphone', 'e3.jpg'),
(4, 'Sport Stereo', 'Sony', 700000, 'Earphone', 'e4.jpg'),
(5, 'Powerbeats Pro', 'Beats', 2000000, 'Earphone', 'e5.jpg'),
(6, 'Samsung Galaxy Earbuds', 'Samsung', 1899000, 'Earphone', 'e6.jpg'),
(7, 'JBL C230 TWS Bluetooth Earphone', 'JBL', 238000, 'Earphone', 'e7.jpg'),
(8, 'Mi Airdots', 'Xiaomi', 205000, 'Earphone', 'e8.jpg'),
(9, 'Apple Airpods 2', 'Apple', 2300000, 'Earphone', 'e9.jpg'),
(10, 'Sony MDR-EX155AP/B', 'Sony', 219000, 'Earphone', 'e10.jpg'),
(11, 'Beats Studio 3 Wireless', 'Beats', 3912000, 'Headphone', 'h1.jpg'),
(12, 'Beats Solo Pro Wireless', 'Beats', 4199000, 'Headphone', 'h2.jpg'),
(13, 'SBH-503 Bluetooth Stereo', 'Samsung', 210000, 'Headphone', 'h3.jpg'),
(14, 'MDR-XB450AP Stereo', 'Sony', 130000, 'Headphone', 'h4.jpg'),
(15, 'Extra Bass MDR-XB450AP', 'Sony', 699000, 'Headphone', 'h5.jpg'),
(16, 'Sennheiser HD 4.30i', 'Sennheiser', 600000, 'Headphone', 'h6.jpg'),
(17, 'Sony MDR-1ADAC', 'Sony', 800000, 'Headphone', 'h7.jpg'),
(18, 'Bose SoundLink Around', 'Bose', 750000, 'Headphone', 'h8.jpg'),
(19, 'JBL JR300BT', 'JBL', 870000, 'Headphone', 'h9.jpg'),
(20, 'JBL E55BT', 'JBL', 520000, 'Headphone', 'h10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id` int(11) NOT NULL,
  `nama_kurir` varchar(128) NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id`, `nama_kurir`, `biaya`) VALUES
(1, 'JNE', 9000),
(2, 'TiKi', 8000),
(3, 'Pos Indonesia', 11000),
(4, 'J&T Express', 22000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `email_user` varchar(128) DEFAULT NULL,
  `id_headset` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `metode_pembayaran` varchar(128) NOT NULL,
  `total_pesanan` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `email_user`, `id_headset`, `quantity`, `alamat`, `no_telp`, `id_kurir`, `metode_pembayaran`, `total_pesanan`) VALUES
(30, 'user@gmail.com', 13, 1, 'Bandung', '081911437177', 4, 'Mobile Banking', 1192000),
(31, 'user@gmail.com', 4, 1, 'Bandung', '081911437177', 4, 'Mobile Banking', 1192000),
(32, 'user@gmail.com', 14, 2, 'Bandung', '081911437177', 4, 'Mobile Banking', 1192000),
(33, 'adhywiranto68@gmail.com', 6, 1, 'UNPAS Setiabudhi', '081911437177', 4, 'Internet Banking', 5833000),
(34, 'adhywiranto68@gmail.com', 11, 1, 'UNPAS Setiabudhi', '081911437177', 4, 'Internet Banking', 5833000),
(35, 'user@gmail.com', 12, 1, 'fddghgjbfdfg', '123123', 2, 'Internet Banking', 4207000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Alysa Yuandra', 'alysayuandra2110@gmail.com', 'default.jpg', '$2y$10$LE6DGyhFYTJ2N7n2ChMEyOiaMZmcqF5twrEQcKiAbmpQDdeZNfTX2', 2, 1, 1575083503),
(2, 'Lidya Islamiati', 'lidya@gmail.com', 'default.jpg', '$2y$10$2d9oiYHUjnplUNzZseYbVOzJpsUIn3IDPybLD5.0wiaugBNJrHLKK', 2, 1, 1575084180),
(4, 'Adhy', 'adhywiranto68@gmail.com', 'photo_profile.jpg', '$2y$10$xWwvkq8b3m6LuzX2B5qU6OFwQXv0K9n3dmW.mJlQKnnWOKYV3ryyi', 2, 1, 1575092497),
(5, 'Adhy Wiranto Sudjana', 'adhy_173040038@mail.unpas.ac.id', '173040038.jpg', '$2y$10$aXWEO3ansueleItXTcFxj.OKkXey1VPHxHO3NhMDeRdAP0Vrp0nVe', 1, 1, 1575281301),
(6, 'Admin Kuy', 'admin@gmail.com', 'logounpas-baru.jpg', '$2y$10$yteY5VQwnr6fd.EJQ12ojusfMwLDA4/j6wtR3E1vmE2a8D.p0fxO.', 1, 1, 1575524889),
(7, 'User', 'user@gmail.com', 'default.jpg', '$2y$10$Av72K8lKyt2S37JZtdScDezjraR99K.c/d2twoY7Bx1x390unBLqK', 2, 1, 1575524951),
(8, 'Admin Baru', 'admin2@gmail.com', 'default.jpg', '$2y$10$6DJhgXFwK1qS9RQ2PY0K.u/HtonPA46LPLYXsIvbke1OwoeKmXzwC', 1, 1, 1576724865),
(9, 'uwu', 'uwu@gmail.com', 'default.jpg', '$2y$10$t7mMqP6rLdIhJUhTAgeUKerEhpN6lRUtbq.FdzautVLsKWGIMB3km', 2, 1, 1577153467),
(10, 'twice', 'twice@gmail.com', 'default.jpg', '$2y$10$ItO4FTUCH198RV/S17ERQe7vMqpEN2abm.qiDnWBFDw5QjgPFLXi.', 1, 1, 1577153501),
(11, 'Diki', 'diki@gM.COM', 'default.jpg', '$2y$10$VJtAN5sm0iJ.nvtQUENkBepzFH/hXczXiXkw27ZEpR.wvUIcdl6DG', 1, 1, 1577254709),
(12, 'diki', 'diki@gmail.com', 'default.jpg', '$2y$10$SHWvJsJalpYPy1oHvpu4D.4nllREEeSpyiCsECQ3wqP0E0ttko5UO', 1, 1, 1577254784);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(8, 1, 5),
(10, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Products'),
(6, 'History');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(7, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(8, 5, 'Headphones', 'Products/dataHeadphones', 'fas fa-headphones-alt', 1),
(9, 5, 'Earphones', 'Products/dataEarphones', 'fas fa-music', 1),
(10, 6, 'Transaction List', 'history/transactionlist', 'fas fa-file-invoice', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_headset` (`id_headset`);

--
-- Indexes for table `headset`
--
ALTER TABLE `headset`
  ADD PRIMARY KEY (`id_headset`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id` (`email_user`),
  ADD KEY `id_cart` (`id_headset`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `headset`
--
ALTER TABLE `headset`
  MODIFY `id_headset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_headset`) REFERENCES `headset` (`id_headset`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
