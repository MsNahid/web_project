-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2015 at 03:36 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cid` int(100) NOT NULL,
  `cname` char(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'Apple'),
(2, 'Asus'),
(3, 'Blackberry'),
(4, 'HTC'),
(5, 'Lenovo'),
(6, 'LG'),
(7, 'Nokia'),
(8, 'Samsung'),
(9, 'Sony'),
(10, 'Acer'),
(12, 'Microsoft');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `uname` varchar(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`uname`, `pid`, `desc`) VALUES
('jitu', 1, 'Excellent !!!!'),
('jitu', 11, 'Best'),
('saied', 1, 'Very Poor ;('),
('saied', 11, 'some thing ....'),
('rawnak', 1, 'fdjfjksd'),
('rawnak', 25, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `pdetails`
--

CREATE TABLE IF NOT EXISTS `pdetails` (
  `pid` int(100) NOT NULL,
  `technology` varchar(255) NOT NULL,
  `announced` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dimensions` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `sim` varchar(255) NOT NULL,
  `type` text NOT NULL,
  `size` varchar(255) NOT NULL,
  `resulation` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `chipset` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `card_slot` varchar(255) NOT NULL,
  `internal` varchar(255) NOT NULL,
  `primary` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `secondary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdetails`
--

INSERT INTO `pdetails` (`pid`, `technology`, `announced`, `status`, `dimensions`, `weight`, `sim`, `type`, `size`, `resulation`, `os`, `chipset`, `cpu`, `gpu`, `card_slot`, `internal`, `primary`, `features`, `video`, `secondary`) VALUES
(1, 'No cellular connectivity', '2014, June', 'Available. Released 2014, September', '215 x 130 x 8.5 mm (8.46 x 5.12 x 0.33 in)', '360 g (12.70 oz)', 'No', 'IPS LCD capacitive touchscreen, 16M colors', '8.0 inches (~66.4% screen-to-body ratio)', '1200 x 1920 pixels (~283 ppi pixel density)', 'Android OS, v4.4.2 (KitKat)', 'Intel Atom Z3745', 'Quad-core 1.86 GHz', '', 'microSD, up to 32 GB', '16/32 GB, 2 GB RAM', '5 MP, 2592 ? 1944 pixels', '', 'Yes', '2 MP'),
(10, 'GSM / CDMA / HSPA / EVDO', '2011, October', 'Available. Released 2011, October', '115.2 x 58.6 x 9.3 mm (4.54 x 2.31 x 0.37 in)', '140 g (4.94 oz)', 'Micro-SIM', 'LED-backlit IPS LCD, capacitive touchscreen, 16M colors', '3.5 inches (~54.0% screen-to-body ratio)', '640 x 960 pixels (~330 ppi pixel density)', 'iOS 5, upgradable to iOS 7.1.2, upgradable to iOS 8.1.3', 'Apple A5', 'Dual-core 1 GHz Cortex-A9', 'PowerVR SGX543MP2', 'No', '8/16/32/64 GB, 512 MB RAM', '8 MP, 3264 x 2448 pixels, autofocus, LED flash', '1/3.2'''' sensor size, 1.4 µm pixel size, geo-tagging', '1080p@30fps', 'VGA, 480p@30fps, videocalling over Wi-Fi and 3G'),
(44, 'No cellular connectivity', '2014, June', 'Available. Released 2014, September', '215 x 130 x 8.5 mm (8.46 x 5.12 x 0.33 in)', '360 g (12.70 oz)', 'No', 'IPS LCD capacitive touchscreen, 16M colors', '8.0 inches (~66.4% screen-to-body ratio)', '1200 x 1920 pixels (~283 ppi pixel density)', 'Android OS, v4.4.2 (KitKat)', 'Intel Atom Z3745', 'Quad-core 1.86 GHz', '', 'microSD, up to 32 GB', '16/32 GB, 2 GB RAM', '5 MP, 2592 ? 1944 pixels', '', 'Yes', '2 MP'),
(46, 're', 're', '', 'hffe', '', 'rew', '', 'rew', '', 're', 'rewr', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`pid` int(100) NOT NULL,
  `pname` char(100) NOT NULL,
  `cid` int(100) NOT NULL,
  `pic` char(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `cid`, `pic`) VALUES
(1, 'Acer Iconia Tab', 10, 'acer-iconia-tab-8-2014-1.jpg'),
(2, 'Acer Liquid', 10, 'acer-liquid-e600-1.jpg'),
(4, 'Acer Liquid Jade', 10, 'acer-liquid-jade-s-s56.jpg'),
(5, 'Acer  Liquid X1', 10, 'acer-liquid-x1.jpg'),
(6, 'Acer Liquid', 10, 'acer-liquid-z410.jpg'),
(7, 'Apple Ipad Air', 1, 'apple-ipad-air.jpg'),
(8, 'Apple Ipad Mini-3 New', 1, 'apple-ipad-mini-3-new.jpg'),
(9, 'Apple Iphone 4 Office Final', 1, 'apple-iphone-4-ofic-final.jpg'),
(10, 'Apple Iphone-4s New', 1, 'apple-iphone-4s-new.jpg'),
(11, 'Apple Iphone-5s Office', 1, 'apple-iphone-5s-ofic.jpg'),
(12, 'Apple Iphone-6-3', 1, 'apple-iphone-6-3.jpg'),
(13, 'Asus Fonepad-7', 2, 'asus-fonepad-7-fe375cl.jpg'),
(14, 'Asus Memo-Pad-7', 2, 'asus-memo-pad-7.jpg'),
(15, 'Asus X002', 2, 'asus-x002.jpg'),
(16, 'Asus PadFone X', 2, 'Asus-PadFone-X.jpg'),
(17, 'Blackberry 9720', 3, 'blackberry-9720.jpg'),
(18, 'Blackberry Z3 New', 3, 'blackberry-z3-new.jpg'),
(19, 'Blackberry Z10-Office', 3, 'blackberry-z10-ofic.jpg'),
(20, 'HTC Desire-626', 4, 'htc-desire-626.jpg'),
(21, 'HTC Desire-826-1', 4, 'htc-desire-826-1.jpg'),
(22, 'HTC Desire Eye', 4, 'htc-desire-eye-ofic1.jpg'),
(23, 'HTC Nexus-9', 4, 'htc-nexus-9.jpg'),
(24, 'HTC One-M8', 4, 'htc-one-m8.jpg'),
(25, 'lenovo-a916.jpg', 5, 'lenovo-a916.jpg'),
(26, 'Lenovo-A6000-1', 5, 'lenovo-a6000-1.jpg'),
(27, 'Lenovo Tablet S8', 5, 'lenovo-tablet-s8.jpg'),
(28, 'Lenovo Vibe Z2 Pro R1', 5, 'lenovo-vibe-z2-pro-r1.jpg'),
(29, 'Lenovo Yoga Tablet-2', 5, 'lenovo-yoga-tablet-2.jpg'),
(30, 'LG G3 creen', 6, 'lg-g3-screen.jpg'),
(31, 'LG L80', 6, 'lg-l80.jpg'),
(32, 'LG Tribute LS660', 6, 'lg-tribute-ls660.jpg'),
(33, 'Nokia Asha-308', 7, 'nokia-asha-308.jpg'),
(34, 'Nokia Asha 502-Dual Sim', 7, 'nokia-asha-502-dual-sim.jpg'),
(35, 'Nokia Lumia-530', 7, 'nokia-lumia-530.jpg'),
(36, 'Nokia-Lumia-535-DS', 7, 'nokia-lumia-535-ds.jpg'),
(37, 'Nokia Lumia-735', 7, 'nokia-lumia-735.jpg'),
(38, 'Samsung Galaxy Grand Max', 8, 'samsung-galaxy-grand-max.jpg'),
(39, 'Samsung Galaxy J1 SM', 8, 'samsung-galaxy-j1-sm-j100h1.jpg'),
(40, 'Samsung Galaxy Note Edge1', 8, 'samsung-galaxy-note-edge1.jpg'),
(41, 'Sony Xperia E3 Dual', 9, 'sony-xperia-e3-dual.jpg'),
(42, 'Sony Xperia Z2 Tablet', 9, 'sony-xperia-z2-tablet.jpg'),
(43, 'Sony Xperia Z Ultra', 9, 'sony-xperia-z-ultra.jpg'),
(44, 'Acer Liquid Gallant Duo New', 10, 'acer-liquid-gallant-duo-new.jpg'),
(45, 'Lumia 620', 12, 'lumia.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`uid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `utype` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `mname`, `lname`, `uname`, `pass`, `email`, `utype`) VALUES
(1, 'Habibur', NULL, 'Rahman', 'rawnak', '3573dd3c8f7fa2075538bb9c8a3a4d48', 'rawnak@gmail.com', 0),
(4, 'Nasima', '', 'Karim', 'karim', 'a8c9a3662e836ebdc9d23f889afc9dcd', 'karim@gmail.com', 1),
(5, 'Rana', '', 'khan', 'rana', '6e9454559ab0f65c702f78d553acab30', 'rana@gmail.com', 1),
(6, 'Naeem', '', 'Ahmed', 'naeem', 'cb07207b5d25bee77ea76b73523da1fb', 'bdnaeem3@gmail.com', 1),
(7, 'Afsana', '', 'Rea', 'rea', 'f83b2399cf42e7ab8947466f8b2ee447', 'rea@gmail,com', 1),
(8, 'Kaykobad', '', 'khan', 'kayko', 'd26fa5f2b03db55b3cd66019a62ae057', 'kayko@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cid`), ADD UNIQUE KEY `id` (`cid`);

--
-- Indexes for table `pdetails`
--
ALTER TABLE `pdetails`
 ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`pname`,`cid`,`pid`), ADD UNIQUE KEY `pid` (`pid`,`pic`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`uid`,`uname`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
