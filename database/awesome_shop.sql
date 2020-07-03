-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2020 at 09:31 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awesome_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT '0',
  `resource_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `product_id`, `sort`, `is_feature`, `resource_path`) VALUES
(1, 1, 1, 1, 'https://asset.msi.com/global/picture/news/2018/nb/ge63-raider-20180110-1.png'),
(2, 2, 2, 1, 'https://images-na.ssl-images-amazon.com/images/I/712Z2KsHV5L._AC_SY450_.jpg'),
(3, 3, 3, 1, 'https://laymengcomputer.com/wp-content/uploads/2019/12/MacBook+Pro+16_inch.jpg'),
(4, 4, 4, 1, 'https://www.notebookcheck.net/fileadmin/Notebooks/Asus/G752VS-BA338T/4zu3_Asus_G752VS_BA338T.jpg'),
(5, 5, 5, 1, 'https://images-na.ssl-images-amazon.com/images/I/51o5RmQtroL._SX466_.jpg'),
(6, 6, 6, 1, 'https://images-na.ssl-images-amazon.com/images/I/71G1FCIP1EL._SX569_.jpg'),
(7, 7, 1, 2, 'https://cdn.shopify.com/s/files/1/0255/4560/5217/files/crossbodys_1800x.jpg?v=1576555333'),
(8, 8, 2, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQsWGxNdZdbPdv1V74Jk4iOHJnrE3ozIgP5bmGtje-v2pSsEdbD&usqp=CAU'),
(9, 9, 3, 2, 'https://media.gucci.com/style/DarkGray_Center_0_0_490x490/1515492904/443497_DTDIT_1000_001_063_0000_Light-GG-Marmont-small-matelass-shoulder-bag.jpg'),
(10, 10, 4, 2, 'https://images-na.ssl-images-amazon.com/images/I/71968AHPOKL._AC_UL1500_.jpg'),
(11, 11, 5, 2, 'https://imagescdn.khmer24.com/18-10-14/327620-hand-bag59-b.jpg'),
(12, 12, 6, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSHg0dWGy9GgJNKCzJaDTx8SYRFbifbiPghNg&usqp=CAU'),
(13, 13, 1, 3, 'https://images-na.ssl-images-amazon.com/images/I/91Dv9wC1UOL._AC_SL1500_.jpg'),
(14, 14, 2, 3, 'https://www.fjallraven.com/globalassets/catalogs/fjallraven/f7/f773/f77307/f249/7323450091569_ss18_a_oevik_wallet_21.jpg?width=2000&height=2000&mode=BoxPad&bgcolor=fff&quality=80'),
(15, 15, 3, 3, 'https://cdn.shopify.com/s/files/1/0111/6962/8223/products/distil-union-wally-bifold-wallet-black-leather-hero_1024x.png?v=1576245070'),
(16, 16, 4, 3, 'https://cdn.shopify.com/s/files/1/0230/0765/products/distil-union-wally-bifold-wallet-hero-gray.jpg?v=1571709188'),
(17, 17, 5, 3, 'https://wishworthstudio.com/wp-content/uploads/2019/05/Two-Button-Wallet.jpg'),
(18, 18, 6, 3, 'https://zardi.pk/wp-content/uploads/2020/01/High-Quality-Gucci-Bee-Wallet-Grey-1.jpg'),
(19, 19, 1, 4, 'https://img.freepik.com/free-psd/blank-white-kids-t-shirt-mock-up-template_34168-950.jpg?size=626&ext=jpg'),
(20, 20, 2, 4, 'https://sretsis.com/wp-content/uploads/2018/08/95.jpg\r\n'),
(21, 21, 3, 4, 'https://kathmandu.imgix.net/catalog/product/1/5/15108_605_federatewomenslsshirt_v2_a.jpg'),
(22, 22, 4, 4, 'https://lp2.hm.com/hmgoepprod?set=quality[79],source[/b1/6e/b16e4c7d672dc9ae8503cb0a88713a0aeca57ab1.jpg],origin[dam],category[men_tshirtstanks_bestbasics],type[DESCRIPTIVESTILLLIFE],res[m],hmver[1]&call=url[file:/product/main]'),
(23, 23, 5, 4, 'https://5.imimg.com/data5/YJ/BO/MY-10973479/mens-designer-casual-shirt-500x500.jpg'),
(24, 24, 6, 4, 'https://brumano.b-cdn.net/wp-content/uploads/2018/12/Royal-Blue-Casual-Check-Shirt-1-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `parent_id`) VALUES
(1, 'Electronics', 'I-laptop.png', 1),
(2, 'Hand_bag', 'I-hand_bage.png', 2),
(3, 'Wallet', 'I-wallet.png', 3),
(4, 'Clothes', 'I-shirt.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `image`) VALUES
(1, 'Our shop is so luxury', 'for your style', 'https://www.hamburg.com/image/12791868/16x9/990/557/7d62f44ef97d5552a4d1d64b98217232/eu/glore-shop-altona.jpg'),
(2, 'Good decoration', 'Enjoy your shopping time', 'https://retaildesignblog.net/wp-content/uploads/2012/06/Haberdash-shop-Form-Us-With-Love-Stockholm.jpg'),
(3, 'Interative', 'How do you think our shop?', 'https://retaildesignblog.net/wp-content/uploads/2012/05/Inside-fashion-store-Sohne-Partner-Vienna.jpg'),
(4, 'Best quality for all products', 'Everything guarantees', 'https://naturalexposures.com/wp-content/uploads/2012/01/D359473.jpg'),
(5, 'The best prices', 'electronics all you need is here', 'https://sc01.alicdn.com/kf/HTB15a0rSpXXXXafaFXXq6xXFXXXI/206102860/HTB15a0rSpXXXXafaFXXq6xXFXXXI.jpg'),
(6, 'modern styles', 'All wallet is original import', 'https://i1.wp.com/thewalletshop.com/wp-content/uploads/2018/01/IMG_3975-resized.jpg?fit=800%2C600&ssl=1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0',
  `discount` tinyint(4) NOT NULL DEFAULT '0',
  `description` text,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `amount`, `discount`, `description`, `category_id`) VALUES
(1, 'MSI', '500', 10, 10, 'New 1', 1),
(2, 'Dell', '400', 20, 20, 'New 2', 1),
(3, 'Mac book pro', '1000', 2, 10, 'New 3', 1),
(4, 'Azus', '700', 4, 30, 'New 4', 1),
(5, 'Iphone 11', '1200', 5, 10, 'cate_electro', 1),
(6, 'Samsung', '900', 4, 20, 'New Samsung', 1),
(7, 'Hand_bag 1', '50', 20, 5, 'New From Italy 1', 2),
(8, 'Hand_bag 2', '60', 4, 70, 'New from Italy 2', 2),
(9, 'Gucci hand_bag 1', '100', 3, 30, 'For girls', 2),
(10, 'Gucci hand_bag 2', '200', 4, 15, 'Good price now', 2),
(11, 'hand_bag 3', '160', 4, 27, 'Only one discount', 2),
(12, 'hand_bag 4', '70', 3, 12, 'Very good pice', 2),
(13, 'Boy_wallet 1', '40', 4, 15, 'New arrived', 3),
(14, 'Wallet', '60', 5, 20, 'Best quality', 3),
(15, 'wallet 3', '50', 5, 15, 'Best', 3),
(16, 'wallet 4', '70', 5, 0, 'Good', 3),
(17, 'Wallet 5', '40', 5, 15, 'Good', 3),
(18, 'Wallet 6', '60', 4, 19, 'Best', 3),
(19, 'T-shirt', '10', 5, 10, 'Man and woman', 4),
(20, 'Skirt', '5', 5, 10, 'Woman', 4),
(21, 'best cloth', '50', 5, 20, 'Nice', 4),
(22, 'New cloth', '60', 5, 30, 'Good product', 4),
(23, 'New one', '50', 4, 20, 'New arrived', 4),
(24, 'shirt', '40', 4, 30, 'Good ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

DROP TABLE IF EXISTS `product_tag`;
CREATE TABLE IF NOT EXISTS `product_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 11),
(12, 12, 12),
(13, 13, 13),
(14, 14, 14),
(15, 15, 15),
(16, 16, 16),
(17, 17, 17),
(18, 18, 18),
(19, 19, 19),
(20, 20, 20),
(21, 21, 21),
(22, 22, 22),
(23, 23, 23),
(24, 24, 24);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `written_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `content`, `written_at`, `product_id`) VALUES
(83, 'asd', '2020-07-02 09:52:25', 1),
(84, 'asd', '2020-07-02 09:52:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'laptop msi'),
(2, 'Dell '),
(3, 'laptop mac'),
(4, 'laptop Azus'),
(5, 'Iphone'),
(6, 'Samsung'),
(7, 'hand_bag'),
(8, 'hand_bag2'),
(9, 'Gucci1'),
(10, 'Gucci2'),
(11, 'Hand_bag1'),
(12, 'Hand_bag'),
(13, 'wallet'),
(14, 'wallet'),
(15, 'wallet'),
(16, 'wallet'),
(17, 'wallet'),
(18, 'wallet'),
(19, 'T-shirt'),
(20, 'Skirt'),
(21, 'shirt'),
(22, 'shirt'),
(23, 'best shirt'),
(24, 'shirt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
