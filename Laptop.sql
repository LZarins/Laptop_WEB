-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb29.awardspace.net
-- Generation Time: Apr 16, 2023 at 04:47 PM
-- Server version: 5.7.40-log
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3624525_zarins`
--

-- --------------------------------------------------------

--
-- Table structure for table `Laptop`
--

CREATE TABLE `Laptop` (
  `Laptop_ID` int(11) NOT NULL,
  `Modelis` varchar(11) NOT NULL,
  `Tips` varchar(50) NOT NULL,
  `Info` text NOT NULL,
  `Nosaukums` varchar(50) NOT NULL,
  `Ekrana_izmers` varchar(25) NOT NULL,
  `Ekrana_izskirtspeja` varchar(25) NOT NULL,
  `Procesors` varchar(50) NOT NULL,
  `Procesora_kodoli` int(11) NOT NULL,
  `RAM` varchar(10) NOT NULL,
  `Videokarte` varchar(50) NOT NULL,
  `Video_kartes_atmina` varchar(25) NOT NULL,
  `Kur_atrast` text NOT NULL,
  `Kur_atrast_A` text NOT NULL,
  `Bilde` text NOT NULL,
  `Bilde1` text NOT NULL,
  `Bilde2` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Laptop`
--

INSERT INTO `Laptop` (`Laptop_ID`, `Modelis`, `Tips`, `Info`, `Nosaukums`, `Ekrana_izmers`, `Ekrana_izskirtspeja`, `Procesors`, `Procesora_kodoli`, `RAM`, `Videokarte`, `Video_kartes_atmina`, `Kur_atrast`, `Kur_atrast_A`, `Bilde`, `Bilde1`, `Bilde2`) VALUES
(1, 'Acer', 'Gaming', 'Acer Nitro ir jaud&#299gs sp&#275&#316u kl&#275pjdators, kuru ir iesp&#275jams konfigur&#275t priek&#353 liel&#257ka &#257truma, palielinot Ram l&#299dz 32 GB DDR4 un ar vienu SSD slotu un vienu HDD.', 'Acer Nitro 5 AN515', '15.6\'\'', '1920 x 1080', 'AMD Ryzen 5 ', 6, '8 GB', 'Nvidia GeForce GTX 1650', '4 GB', 'https://www.salidzini.lv/cena?q=Acer+Nitro+5+AN515', 'https://www.amazon.co.uk/s?k=Acer+Nitro+5+AN515&crid=50J4ZLARJF72&sprefix=acer+nitro+5+an515%2Caps%2C96&ref=nb_sb_noss_2', 'https://www.bite.lv/sites/default/files/2021-04/acer_nitro_5_an5_5-55-5516-5.png', '//static.acer.com/up/Resource/Acer/Laptops/Nitro_5/Gallery/20200323/Acer-Nitro-5_AN515-55_RGB-KB_gallery_05.png', '//static.acer.com/up/Resource/Acer/Laptops/Nitro_5/Gallery/20200323/Acer-Nitro-5_AN515-55_RGB-KB_gallery_04.png'),
(2, 'Lenovo', 'Gaming', 'Ar Lenovo IdeaPad Gaming 3 palieliniet savu e-sporta pieredzi izmantojot kl&#275pjdatoru, kas sniedz iesp&#275ju uzk&#257pt l&#299deru saraksta aug&#353gal&#257 ar gludu sp&#275&#316u &#257trumu un pat&#299kamu displeju.', 'Lenovo IdeaPad Gaming 3', '15.6\'\'', '1920 x 1080', 'AMD Ryzen 7', 8, '16 GB', 'Nvidia GeForce GTX 1650 Ti', '4 GB', 'https://www.salidzini.lv/cena?q=Lenovo+IdeaPad+Gaming+3', 'https://www.amazon.co.uk/s?k=Lenovo+IdeaPad+Gaming+3&crid=5GVG480GUND8&sprefix=lenovo+ideapad+gaming+3%2Caps%2C113&ref=nb_sb_noss', 'https://www.bite.lv/sites/default/files/2020-10/lenovo_ideapad_gaming_3_82ey004al-6.png', 'https://bigbox.lv/799858-thickbox_default/portativais-dators-lenovo-ideapad-gaming-3-15ihu6-82k1-156-fullhd-ips-60-hz-intel-core-i5-11300h-ram-8-gb-ssd-512gb-nvidia-geforce-rtx-3050-4-gb-windows-11-home-black-82k100d2lt.jpg', 'https://cdn.tet.lv/tetveikals-prd-images/product_popup_image/products/showimage-3-5f3b989eb6df9.jfif'),
(3, 'MSI', 'Gaming', 'MSI GL65 Leopard ir visur pielietojamais, jaud&#299gais Sp&#275&#316u kl&#275pjdators jaun&#257kaj&#257 paaudz&#275, kura jauda &#316auj sp&#275l&#275m rit&#275t gludi un jebkam citam &#257rpuss sp&#275l&#275m darboties lieliski.', 'MSI GL65 Leopard ', '15.6\'\'', '1920x1080', 'Intel Core i7', 8, '16 GB', 'Nvidia GeForce GTX 1660 Ti', '6 GB', 'https://www.salidzini.lv/cena?q=MSI+GL65+Leopard+', 'https://www.amazon.co.uk/s?k=MSI+GL65+Leopard&crid=33784DH9CB60R&sprefix=msi+gl65+leopard+%2Caps%2C103&ref=nb_sb_noss', 'https://asset.msi.com/resize/image/global/product/product_4_20190719105945_5d313221a3d89.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 'https://asset.msi.com/resize/image/global/product/product_6_20200309181257_5e6616a91b2a4.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png', 'https://asset.msi.com/resize/image/global/product/product_10_20200309181302_5e6616ae2cf27.png62405b38c58fe0f07fcef2367d8a9ba1/1024.png'),
(4, 'Acer', 'Work and study', 'ACER Aspire ir paroc&#299gs darbu un m&#257c&#299bu kl&#275pjdators, kas nav pa lielu vai pa mazu un ir gana ergonomisks jebkuram darbam iek&#353 kl&#275pjdatora.', 'ACER Aspire A514', '14\"', '1920x1080', 'Intel Core i5', 6, '8 GB', 'Intel Iris Xe Graphics', '4 GB', 'https://www.salidzini.lv/cena?q=ACER+Aspire+A514', 'https://www.amazon.co.uk/s?k=ACER+Aspire+A514&crid=2K0RTAGAC79AR&sprefix=acer+aspire+a514%2Caps%2C100&ref=nb_sb_noss', '//static.acer.com/up/Resource/Acer/Laptops/Aspire_5/images/20190820/Acer-Aspire-5-A514-52-52G-52K-52KG-black-main.png', '//static.acer.com/up/Resource/Acer/Laptops/Aspire_5/photogallery/20190820/Acer-Aspire-5-A514-52-52G-52K-52KG-black-05.png', '//static.acer.com/up/Resource/Acer/Laptops/Aspire_5/photogallery/20190820/Acer-Aspire-5-A514-52-52G-52K-52KG-black-04.png'),
(5, 'Asus', 'Work and study', 'Asus VivoBook ir jauns pat&#299kams izskats, tas ir pl&#257ns un viegls ar dimanta griezuma mal&#257m un tekst&#363ras apdari. Perfekts kl&#275pjdators darbam vai M&#257c&#299b&#257m, str&#257d&#257jot jebkur&#257 viet&#257.', 'Asus VivoBook M433IA', '14\'\'', '1920 x 1080', 'AMD Ryzen 7', 8, '8 GB', ' AMD Radeon Graphics', 'Dynamic', 'https://www.salidzini.lv/cena?q=Asus+VivoBook+M433IA', 'https://www.amazon.co.uk/s?k=Asus+VivoBook+M433IA&crid=2HHNTVWY8WU9K&sprefix=asus+vivobook+m433ia%2Caps%2C99&ref=nb_sb_noss', 'https://cdn.tet.lv/tetveikals-prd-images/full_size/products/asusvivo3-602a23ad95ece.jpg', 'https://dlcdnwebimgs.asus.com/gain/a397effd-b338-4885-a168-e89cc92c6f7d/', 'https://dlcdnwebimgs.asus.com/gain/a69f1e0b-117a-4f8e-ac67-5c3251c88342/'),
(8, 'Razer', 'Gaming', 'Razer Blade Pro 17 ir jaud&#299g&#257ks nek&#257 jebkad agr&#257k ar kompaktu dizainu un uzlabot&#257m termisk&#257m ier&#299c&#275m. Razer Blade ir jaud&#299gs mobilais galddators, kas sp&#275j iztur&#275t veiktsp&#275jai pras&#299gas sp&#275les, atrodoties ce&#316&#257, straum&#275jot video tie&#353raid&#275 vai radot &#353edevrus.', 'Razer Blade Pro 17 RZ09', '13.3\'\'', '1920 x 1080', 'Intel core i7', 4, ' 32 GB', 'Nvidia GeForce RTX 3080', '10', 'https://www.salidzini.lv/cena?q=Razer+Blade+Pro+17+RZ09', 'https://www.amazon.co.uk/s?k=Razer+Blade+Pro+17+RZ09&crid=26GLH0172GWGZ&sprefix=razer+blade+pro+17+rz09%2Caps%2C108&ref=nb_sb_noss', 'https://manuals.plus/wp-content/uploads/2021/03/razer-blade-pro-17.png', 'https://www.bhphotovideo.com/images/images1000x1000/razer_rz09_03148e13_r3u1_17_3_blade_gaming_laptop_1521050.jpg', 'https://media.ldlc.com/r1600/ld/products/00/05/81/02/LD0005810210_1_0005810510_0005823627.jpg'),
(9, 'Asus', 'Gaming', 'ASUS ROG Zephyrus ir dinamisks un gatavs ce&#316o&#353anai, tas ir profesion&#257&#316u sp&#275&#316u kl&#275pjdators, kas pa&#257trina ikdienas daudzuzdevumu veik&#353anu un sp&#275les, ar piel&#257gojamu displeju un pat&#299kamu Dolby Atmos ska&#326u.', 'ASUS ROG Zephyrus G14', '14\'\'', '1920 x 1080', ' AMD Ryzen 9 ', 8, '16 GB', ' Nvidia GeForce RTX 2060', '6 GB', 'https://www.salidzini.lv/cena?q=ASUS+ROG+Zephyrus+G14', 'https://www.amazon.co.uk/s?k=ASUS+ROG+Zephyrus+G14&crid=2SP12F8CULHL7&sprefix=asus+rog+zephyrus+g14%2Caps%2C102&ref=nb_sb_noss', 'https://cdn.tet.lv/tetveikals-prd-images/product_popup_image/products/h732-9-60c73e129b6ea.png', 'https://static-01.daraz.com.np/p/be40e0b89818d57b611fed2c261bdb14.jpg', 'https://cdn.tet.lv/tetveikals-prd-images/product_popup_image/products/h732-8-60c73e12a523d.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Laptop`
--
ALTER TABLE `Laptop`
  ADD PRIMARY KEY (`Laptop_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Laptop`
--
ALTER TABLE `Laptop`
  MODIFY `Laptop_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
