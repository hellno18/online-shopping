-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 03:20 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `full_name`) VALUES
(4, 'admin', '$2y$10$hxRWXQdTITK2PgwyjMDvveqsurKPqcr33MNwIi0/33q5dLojGR2ku', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL,
  `email_customer` varchar(100) NOT NULL,
  `password_customer` varchar(50) NOT NULL,
  `name_customer` varchar(100) NOT NULL,
  `address_customer` varchar(100) NOT NULL,
  `telephone_customer` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price_product` int(11) NOT NULL,
  `weight_product` int(11) NOT NULL,
  `photo_product` varchar(100) NOT NULL,
  `description_product` text NOT NULL,
  `category_product` varchar(100) NOT NULL,
  `condition_product` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `price_product`, `weight_product`, `photo_product`, `description_product`, `category_product`, `condition_product`) VALUES
(9, 'ãƒ•ãƒ¬ã‚¢è¢– ãƒ‰ãƒ¬ã‚¹ã‚·ãƒ£ãƒ„ åŠè¢– ã¨ã‚ã¿ç´ æ ã‚·ãƒ•ã‚©ãƒ³ ãƒ–ãƒ©', 1980, 200, 'T-Shirt01.jpg', ' æŸ”ã‚‰ã‹ã§å°‘ã—ãƒãƒªã®ã‚ã‚‹ç´ æã®ãƒ–ãƒ©ã‚¦ã‚¹ã€‚ ã‚†ã£ãŸã‚Šã¨ã—ãŸãƒœãƒƒã‚¯ã‚¹ã‚·ãƒ«ã‚¨ãƒƒãƒˆãŒãƒªãƒ©ãƒƒã‚¯ã‚¹ã—ãŸç€å¿ƒåœ°ã§ã™ã€‚ ã‚·ãƒ³ãƒ—ãƒ«ãªãƒ‡ã‚¶ã‚¤ãƒ³ã§é£¾ã‚Šãƒœã‚¿ãƒ³ã¨5åˆ†ä¸ˆãƒ•ãƒ¬ã‚¢ã®è¢–ãŒãƒã‚¤ãƒ³ãƒˆã§ã™ã€‚\r\nç€ä¸ˆã¯ãŠå°»åŠåˆ†ãŒéš ã‚Œã‚‹ãã‚‰ã„ã§ã™ã€‚é€ã‘æ„Ÿã¯å¤šå°‘ã‚ã‚Šã¾ã™ãŒã€ã‚­ãƒ£ãƒŸã‚½ãƒ¼ãƒ«ç­‰ã‚’1æžšç€ã¦é ‚ã‘ã‚Œã°æ°—ã«ãªã‚‰ãªã„ãã‚‰ã„ã§ã™ã€‚ä¼¸ç¸®æ€§ã¯ã‚ã‚Šã¾ã›ã‚“ãŒã€ç€è„±ã¯ã—ã‚„ã™ã ã‚·ãƒ¯ã«ã¯ãªã‚Šã«ãã„ã§ã™ã€‚æ´—æ¿¯ã‚‚ã—ã‚„ã™ãã€æ—…è¡Œå…ˆã«ã‚‚å¤§æ´»èºã™ã‚‹1ç€ã«ãªã‚‹ã§ã—ã‚‡ã†ã€‚\r\nã‚µã‚¤ã‚º:ç€ä¸ˆ/è‚©å¹…/ãƒã‚¹ãƒˆ/è¢–ä¸ˆ(cm)ã€Mã€‘60/38/101/35				', 'Womans', 'New'),
(10, 'ãƒ¯ãƒ³ãƒ”ãƒ¼ã‚¹ ãƒ¬ãƒ‡ã‚£ãƒ¼ã‚¹ ã‚·ãƒ³ãƒ—ãƒ« ç€å¿ƒåœ°æŠœç¾¤ Vãƒãƒƒã‚¯ é•·è¢– ãƒ­ãƒ³ã‚°ä¸ˆ ãƒžã‚­', 1184, 200, 'T-Shirt02.jpg', 'Material Composition: ç¶¿ã€ãƒãƒªã‚¨ã‚¹ãƒ†ãƒ«\r\nâ˜…ã€ä¸»ãªæˆåˆ†ã¯ç¶¿ãªã®ã§ã€ã¨ã¦ã‚‚å¿«é©ã§ã™ã€‘ ä¸»ãªæˆåˆ†ã¯è‚Œè§¦ã‚Šã®ç¶¿ç´ æã§ã€æ°—è»½ã«ç€ã‚„ã™ãã€ç€å¿ƒåœ°æŠœç¾¤! ã‚ªã‚¹ã‚¹ãƒ¡ã§ã™! â€» è³¼å…¥ã™ã‚‹å‰ã«ã‚µã‚¤ã‚ºã‚’ç¢ºèªã—ã¦ãã ã•ã„ã€‚ 		', 'Womans', 'New'),
(11, 'ãƒ¯ãƒ³ãƒ”ãƒ¼ã‚¹ ãƒ¬ãƒ‡ã‚£ãƒ¼ã‚¹ æ˜¥ è£èµ·æ¯› å®šç•ª ã‚«ã‚¸ãƒ¥ã‚¢ãƒ« ãƒ«ãƒ¼ãƒ ã‚¦ã‚§ã‚¢ ãƒ‘ã‚¸ãƒ£ãƒž', 1000, 200, 'T-Shirt03.jpg', ' Material: ãƒãƒªã‚¨ã‚¹ãƒ†ãƒ«\r\nã€Šã‚µã‚¤ã‚ºã€‹â€»å¹³ç½®ãã§ã®æŽ¡å¯¸ã®ç‚º Â±1~2cm ã»ã©èª¤å·®ãŒç”Ÿã˜ã‚‹å ´åˆãŒã”ã–ã„ã¾ã™ã€‚â€»ãƒã‚¹ãƒˆãƒ»ã‚¢ãƒ¼ãƒ ãƒ›ãƒ¼ãƒ«ãƒ»äºŒã®è…•å›žã‚Šãƒ»æ‰‹é¦–å›žã‚Šã¯å¹³ç½®ãã‚µã‚¤ã‚ºx2ã§è¡¨è¨˜ã—ã¦ã„ã¾ã™ã€‚\r\nã€Šç´ æã€‹ãƒãƒªã‚¨ã‚¹ãƒ†ãƒ«100%', 'Womans', 'New'),
(12, ' ãƒ¯ãƒ³ãƒ”ãƒ¼ã‚¹ ãƒ¬ãƒ‡ã‚£ãƒ¼ã‚¹ ãƒ­ãƒ³ã‚° åŠè¢– ã‚·ãƒ•ã‚©ãƒ³ å¤§äºº å¯æ„›ã„ ã‚ªã‚·ãƒ£ãƒ¬ ç€ç—©', 2180, 200, 'T-Shirt04_.jpg', ' Material Composition: ã‚·ãƒ•ã‚©ãƒ³\r\nâ˜†ã‚ªãƒ•ã‚·ãƒ§ãƒ«ãƒ€ã®ä¸Šå“ãªåŠè¢–ãƒ¯ãƒ³ãƒ”ãƒ¼ã‚¹ã§ã™ã€‚ãƒ™ãƒ«ãƒˆãŒä»˜ã„ã¦ãŠã‚Šã€è…°ã®ç¾Žã—ã•ã‚’å¼•ãå‡ºã›ã¾ã™ã€‚ãƒã‚¤ã‚¦ã‚¨ã‚¹ãƒˆã®ãƒ‡ã‚¶ã‚¤ãƒ³ã§è„šé•·åŠ¹æžœãŒã‚ã‚Šã€ç€ç—©ã›ã§ã‚¹ãƒªãƒ ãªä½“åž‹ã‚’ä½œã‚Šå‡ºã›ã¾ã™ã€‚\r\nï¼ˆMï¼‰ãƒã‚¹ãƒˆ92cmã€€ç€ä¸ˆ81cmã€€ã‚¦ã‚¨ã‚¹ãƒˆ96cmã€\r\nâ˜†é«˜å“è³ªã‚·ãƒ•ã‚©ãƒ³ç´ æã‚’æŽ¡ç”¨ã—ã¦ãŠã‚Šã€è‚Œã«å„ªã—ãé€šæ°—æ€§ã¨æŸ”è»Ÿæ€§ã«å„ªã‚Œã¦ã„ã¾ã™ã€‚æ‰‹ä½œã‚Šã§ã²ã¨é‡ã²ã¨é‡ä½œã£ã¦ããŸä¸€å“ã§ã™ã€‚çˆ½ã‚„ã‹ã§æ¶¼ã—ã„ç€å¿ƒåœ°ã«ãªã‚Šã¾ã™ã€‚						', 'Womans', 'New'),
(13, 'ã‚¸ã‚§ãƒ©ãƒ¼ãƒˆ2ãƒœãƒ¼ãƒ€ãƒ¼ãƒ‰ãƒ¬ã‚¹  ãƒ¬ãƒ‡ã‚£ãƒ¼ã‚¹', 5082, 200, 'T-Shirt05.jpg', ' [ç”Ÿç”£å›½]: ä¸­å›½\r\n[ç´ æ]: ãƒãƒªã‚¨ã‚¹ãƒ†ãƒ« 97% ãƒŠã‚¤ãƒ­ãƒ³ 2% ãƒãƒªã‚¦ãƒ¬ã‚¿ãƒ³ 1%\r\nSIZE:Free è‚©å¹…:35cm è¢–ä¸ˆ:58cm èº«å¹…:46cm ç€ä¸ˆ:80cm', 'Womans', 'New'),
(14, 'ãƒ¯ãƒ³ãƒ”ãƒ¼ã‚¹ ãƒ¬ãƒ‡ã‚£ãƒ¼ã‚¹ ç§‹å†¬', 2180, 300, 'T-Shirt06.jpg', ' ãƒ­ãƒ³ã‚°ä¸ˆã®ã‚†ã£ãŸã‚Šã¨ã—ãŸã‚·ãƒ«ã‚¨ãƒƒãƒˆã§ã‚ˆãä½“åž‹ã‚«ãƒãƒ¼ã§ãã¾ã™ã€‚ã‚¦ã‚¨ã‚¹ãƒˆã§ãƒªãƒœãƒ³ã‚’ä»˜ã„ã¦ãƒ¡ãƒªãƒãƒªã®ã‚ã‚‹ç¾Žã‚¹ã‚¿ã‚¤ãƒ«ã‚’æ¼”å‡ºã—ã¾ã™ã€‚ã“ã‚Œ1æžšç¾½ç¹”ã‚Œã°ä¸€æ°—ã«ç§‹æ„ŸãŒå‡ºã¾ã™ãŒã€ã•ã‚‰ã‚Šã¨ã—ãŸç´ æã§é‡ã­ç€ã‚’ã—ã¦ã‚‚ã‹ã•ã°ã‚‰ãªã„ã‚¢ã‚¤ãƒ†ãƒ ã§ã™ã€‚ãƒ™ãƒ«ãƒˆã¯è‡ªç”±ãªçµã³æ–¹ãŒå¯èƒ½ãªã®ã§æ°—åˆ†ã‚¢ãƒ¬ãƒ³ã‚¸ã§ãã€ã‚¦ã‚¨ã‚¹ãƒˆã‚’ç¸›ã‚Œã°ç°¡å˜ãªAãƒ©ã‚¤ãƒ³ãƒ¯ãƒ³ãƒ”ãƒ¼ã‚¹ã«æ—©å¤‰ã‚ã‚Šã§ã™ã€‚ç¨‹ã‚ˆã„åŽšã•ã§ã“ã‚Œã‹ã‚‰ã®ç§‹ã«ã´ã£ãŸã‚Šã—ã¦ã€ã‚·ãƒ³ãƒ—ãƒ«ã®ãƒ™ãƒ¼ã‚·ãƒƒã‚¯è‰²ã§è‚Œå¯’ã„æ™‚ä½•ã‹ã«ã‚‚å¤§æ´»èºã§ãã‚‹ãƒ¯ãƒ³ãƒ”ãƒ¼ã‚¹ã§ã™ã€‚', 'Womans', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_product`
--

CREATE TABLE `purchased_product` (
  `id_purchased_product` int(11) NOT NULL,
  `id_purchased` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchased_product`
--

INSERT INTO `purchased_product` (`id_purchased_product`, `id_purchased`, `id_product`, `amount`) VALUES
(1, 1, 1, 1),
(9, 12, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id_purchase` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `date_purchase` date NOT NULL,
  `total_purchase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id_purchase`, `id_customer`, `date_purchase`, `total_purchase`) VALUES
(1, 1, '2020-03-03', 30000),
(12, 29, '2020-03-04', 300001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `purchased_product`
--
ALTER TABLE `purchased_product`
  ADD PRIMARY KEY (`id_purchased_product`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id_purchase`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchased_product`
--
ALTER TABLE `purchased_product`
  MODIFY `id_purchased_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id_purchase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
