-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 10:34 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetic_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_tbl`
--

CREATE TABLE `banner_tbl` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_title` varchar(50) NOT NULL,
  `b_des` text NOT NULL,
  `b_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_tbl`
--

INSERT INTO `banner_tbl` (`b_id`, `b_name`, `b_title`, `b_des`, `b_image`) VALUES
(1, 'FIND YOUR MATCH WITH OUR FOUNDATION FINDER', 'FOUNDATION FINDER', 'The actual term \"lipstick\" wasn\'t first used until 1880, however, people were coloring their lips long before that date. ', 'banner_img_01.png'),
(2, 'VIRTUAL TRY ON', 'DISCOVER NEW PRODUCTS', 'FIND THE LIPSTICK THAT WILL ENHANCE YOUR COMPLEXION AND THE FOUNDATION THAT\'S YOUR PERFECT MATCH WITH OUR VIRTUAL TRY ON TOOL.', 'banner_img_02.png'),
(3, 'MOISTURE RENEW LIPSTICK', 'Trace and define your natural lip line with a lip ', 'Kiss hello to lit-looking lips. Rimmel London Moisture Renew Lipstick delivers highly-pigmented colour in an intensely moisturising yet lightweight formula. If your lips are in need of extra hydration, this is the best lipstick for dry lips.', 'banner_img_03.png');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`cat_id`, `cat_name`, `cat_image`) VALUES
(1, 'Face', 'face.jpg'),
(2, 'Eyes', 'eye.jpg\r\n'),
(3, 'Lips', 'lip.jpg'),
(4, 'Nails', 'nail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(50) NOT NULL,
  `con_email` varchar(150) NOT NULL,
  `con_sub` varchar(200) NOT NULL,
  `con_msg` text NOT NULL,
  `con_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`con_id`, `con_name`, `con_email`, `con_sub`, `con_msg`, `con_status`) VALUES
(1, 'Muhammad Ali', 'aptechphp5@gmail.com', 'Sale Information', 'When this year sale?', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `order_id` int(10) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `PhoneNo` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_Mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prod_tbl`
--

CREATE TABLE `prod_tbl` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(150) DEFAULT NULL,
  `p_des` text,
  `p_price` int(11) DEFAULT NULL,
  `p_image` varchar(150) DEFAULT NULL,
  `catid_fk` int(11) DEFAULT NULL,
  `subcatid_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_tbl`
--

INSERT INTO `prod_tbl` (`p_id`, `p_name`, `p_des`, `p_price`, `p_image`, `catid_fk`, `subcatid_fk`) VALUES
(1, 'LASTING FINISH 25 HOUR FOUNDATION INFUSED WITH HYA', 'Need a long-lasting foundation? Rimmel London Lasting Finish 25 Hour Foundation with Comfort Serum has got you covered.', 2000, 'Rimmel-London-Lasting-Finish25h-700Ebony-xl.jpeg', 1, 1),
(2, 'LASTING MATTE FOUNDATION', 'Create the most flawless makeup canvas with Lasting Matte Foundation; the full coverage, lightweight base that controls shine to keep your skin comfortably matte. The mousse formula transforms into a powder finish, plus it ensures your complexion feels hydrated and balanced for up to 12 hours.', 1381, 'xl_lasting-matte-founda_605-deep-chocolate_1.jpeg', 1, 1),
(3, 'LASTING RADIANCE POWDER', 'Rimmel London introduces 6 shades of micro-fine powder blend together effortlessly for an illuminating finish that gives skin instant radiance, Lasting Radiance Powder.', 1381, 'xl_lasting-radiance-pow_003_1.png', 1, 2),
(4, 'MATCH PERFECTION LOOSE POWDER', 'Very good powder, especially for my pale face. Matches for a long time, does not leave any streaks, blends nicely with the skin leaving it velvety and dull.', 1748, 'xl_match-perfection-loo_transparent_1.jpeg', 1, 2),
(5, 'THE MULTI-TASKER CONCEALER', 'The Multi-Tasker Concealer covers up blemishes, brightens dark circles and covers to even out skin tone. The super-sized soft-touch wand with built-in product reservoir lets you add precise full coverage wherever you need it  on blemishes and under the eyes or all over the face. The buildable high-pigment makeup formula glides on and blends into skin perfectly to create a brighter-looking, smooth, even canvas. The colour corrector lasts all day, so you can say bye-bye to breakouts,Ã¢â‚¬Â¯discolouration, redness, pigmentation, acne scars and visible pores.Ã¢â‚¬Â¯', 2500, 'rm_the_multi_tasker_concealer_010_porcelain_open_xl.jpeg', 1, 3),
(6, 'LASTING RADIANCE CONCEALER', 'The new Lasting Radiance Concealer from Rimmel London instantly illuminates the skin for a fresh and radiant look!\r\nâ€¢ Conceals and illuminates\r\nâ€¢ Skin brightening\r\nâ€¢ Vitamin C erases signs of tiredness\r\nâ€¢ Radiance pearls for a fresh glow\r\nâ€¢ Full and flawless coverag', 1268, 'xl_lasting-radiance-con_080-chestnut_1.png', 1, 3),
(7, 'BROW SHAKE FILLING POWDER', 'Bold, Sculpted Brows Day and Night\r\n\r\nâ€¢ Shake the pack to disperse the powder well for optimal use\r\nâ€¢ Soft powder and applicator shapes & sculpts brows\r\nâ€¢ Intense colour to fill, define & line\r\nâ€¢ Fade, smudge, transfer & waterproof so brows stays fixed all day and all night!', 1268, 'xl_brow-shake-filling-p_black_1.png', 2, 4),
(8, 'BROW THIS WAY FILL & SCULPT EYEBROW DEFINER', 'Defined, intense, natural-looking brows. Lasts 12hrs with no transferring or fading. \r\n\r\nâ€¢ Double ended eyebrow definer for perfectly defined & sculpted brows \r\nâ€¢ Triangular retractable tip to fill your brows with precision \r\nâ€¢ Easy to use spoolie brush to set your brows\r\nâ€¢ Transfer proof, fade proof, up to 12hrs ', 1503, 'xl_brow-this-way-2-in-1_soft-black_1.png', 2, 4),
(9, 'WONDER EXTENSION MASCARA', 'Rimmel Wonder Extension Mascara is a lash-lengthening mascara that gives the effect of lash extensions, leaving full, long and defined lashes. The formula is built with a stretchy texture that extends beyond the tips of your lashes. The lash-grabbing brush lifts and extends as it lengthens. Clump-free, long lasting, smudge-proof, flake-proof and easy to remove ret', 1748, 'WonderExtensionClosed-xl.jpeg', 2, 5),
(10, 'SCANDALEYES RELOADED MASCARA', 'Pump up your lashes with Rimmel London Scandaleyes Reloaded Mascara. If you crave instant volume and zero clumps, this unstoppable mascara will change the game. Glide the max density brush from root to tip to achieve.', 1503, 'xl_scandaleyes-reloaded_black_1.jpeg', 2, 5),
(11, 'WONDER CLOUD LIQUID EYESHADOW', 'Wonder Cloud Liquid Eyeshadow from Rimmel blends like a dream. This new generation liquid eyeshadow has an ultra soft, whipped texture with buildable pigment & built-in primer, and it is easily applied with just the fingertips. The crease-proof, waterproof formula gives a luminous matte finish and ultra long wear. Available in 8 nude and pastel shades for every kind of London eye.', 1268, 'Rimmel-london_WonderCloud_001-Honey-Drop_Open-xl.jpeg', 2, 6),
(12, 'LASTING FINISH MATTE LIPSTICK', 'A long lasting lipstick with easy application and a natural soft matte finish. Our unique formula combines pure pigments, blur-effect powders, and balm-like conditioners in 15 wearable shades.\r\n\r\n- Comfortable, long lasting wear\r\n- Soft matte finish\r\n- Glides on seamlessly\r\n- Easy application\r\n- Buildable effect', 1503, 'xl_LF-Soft-Matte-145-Open_2.jpeg', 3, 7),
(13, 'OH MY GLOSS! PLUMP', 'Gloss it up with Oh My Gloss! Plump, infused with plumping complex that gives you fuller, smooth-looking lips in one step. Feel the plumping effect with a trio of cinnamon, camphor, and capsicum oils that bring glass-like shine and moisture to your lips. ItÃ¢â‚¬â„¢s your time to shine, anytime, anywhere!', 1566, 'RM_OhMyGloss!_801_AngelShimmer_Closed-xl.jpeg', 3, 8),
(14, 'STAY SATIN LIQUID LIPSTICK', 'Did someone say â€˜lip goalsâ€™ ? Achieve your perfect lip look with a sweep of Stay Satin Liquid Lip Colour; the long-lasting lipstick serving up the most statement-making shades. To get your pout on-point, glide the super-lightweight formula onto lips using the precision applicator. The result? Smooth, satin lip colour in just one stroke - and it lasts for up to eight hours. Yaaaassss.', 1381, 'xl_stay-satin-liquid-li_500-redical_1.png', 3, 9),
(15, '60 SECONDS SUPER SHINE NAIL POLISH', 'Super-glossy, ultra-shiny nails are just one sweep away. If you are too busy for a full-on mani, Rimmel London 60 Seconds Super Shine Nail Polish has got you covered. Glide on one stroke of this quick-dry nail polish for precise application and high-impact colour in 60 seconds flat. Oh, and it lasts for up to 10 days. Yaaass', 1503, 'xl_60-seconds-super-shi_310-double-decker-re_1.jpeg', 4, 10),
(16, 'SUPER GEL NAIL POLISH', 'Looking for the perfect gel-like manicure you can do at home? Get a high-shine, chip-resistant, long-lasting gel nails look with Rimmel London Super Gel Nail Polish. It is super-easy to apply - no UV light needed - and lasts up to 14 days. Nailed it', 1381, 'xl_super-gel_urban-purple_1.jpeg', 4, 10),
(17, 'SUPER GEL TOP COAT', 'A Patented Two-Step Gel Colour System For Salon-Style Nails\r\nâ€¢ Step 2 Gel Top Coat\r\nâ€¢ 2 Simple Steps\r\nâ€¢ Up to 14 days of gel colour  No UV lamp needed\r\nâ€¢ Apply 1-2 coats of Super Gel colour, followed by Super Gel Top Coat to activate curing.\r\nâ€¢ Easy to Remove\r\nâ€¢ Available in a clear or glitter finish', 1268, 'xl_super-gel-top-coat_glitter-finish_1.jpeg', 4, 11),
(18, 'LASTING RADIANCE FOUNDATION', 'Get glowed-up with Lasting Radiance Foundation. It instantly illuminates skin, smoothing and sculpting with a healthy-looking, fresh-faced finish. The radiance-boosting formula contains radiance pearls, enhancing your complexion with *that* glow, even if youâ€™ve skipped your eight hours (again). This medium coverage liquid foundation even disguises pores and imperfections, for a flawless skin finish. Dot and blend over skin for all-day hydration and a smooth, fresh base.', 1067, 'xl_lasting-radiance-fou_504-mocha_1.png', 1, 1),
(19, 'INSTA FLAWLESS PERFECTING RADIANT SKIN TINT PERFECTOR', 'Your perfect foundation colour match is right here. Ace your base with Rimmel London Match Perfection Foundation; a medium coverage formula with smart-tone technology that matches 99% of UK skin tones. Yaaassss.Create a smooth base with our range of foundation shades, featuring a 24-hour moisture complex and soft-focus powders to glide over pores, ', 1035, 'Rimmel-London-Insta-Flawless-Perfecting.jpg', 1, 1),
(20, 'MATCH PERFECTION FOUNDATION', 'Our first clean makeup that works, no compromises. 100% vegan & cruelty free. Free from fragrance*, mineral oils, animal derived ingredients*.Our NEW KIND & FREEâ„¢ Moisturising Skin Tint is made with 100% vegan & cruelty-free ingredients â€“ stuff thatâ€™s simply good for you & good for the planet.', 1084, 'lg_match-perfection-fou_chocolate-603---cool_1.jpeg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcat_tbl`
--

CREATE TABLE `subcat_tbl` (
  `subcat_id` int(11) NOT NULL,
  `subcat_name` varchar(50) DEFAULT NULL,
  `catid_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat_tbl`
--

INSERT INTO `subcat_tbl` (`subcat_id`, `subcat_name`, `catid_fk`) VALUES
(1, 'FOUNDATION', 1),
(2, 'POWDER', 1),
(3, 'CONCEALER', 1),
(4, 'BROW', 2),
(5, 'MASCARA', 2),
(6, 'EYESHADOW', 2),
(7, 'LIPSTICK', 3),
(8, 'LIP GLOSS', 3),
(9, 'LIQUID LIPSTICK', 3),
(10, 'NAIL POLISH', 4),
(11, 'TOP COATS', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `order_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(10) NOT NULL,
  `item_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `prod_tbl`
--
ALTER TABLE `prod_tbl`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `catid_fk` (`catid_fk`),
  ADD KEY `subcatid_fk` (`subcatid_fk`);

--
-- Indexes for table `subcat_tbl`
--
ALTER TABLE `subcat_tbl`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `cat_id_fk` (`catid_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prod_tbl`
--
ALTER TABLE `prod_tbl`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subcat_tbl`
--
ALTER TABLE `subcat_tbl`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prod_tbl`
--
ALTER TABLE `prod_tbl`
  ADD CONSTRAINT `prod_tbl_ibfk_1` FOREIGN KEY (`catid_fk`) REFERENCES `category_tbl` (`cat_id`),
  ADD CONSTRAINT `prod_tbl_ibfk_2` FOREIGN KEY (`subcatid_fk`) REFERENCES `subcat_tbl` (`subcat_id`);

--
-- Constraints for table `subcat_tbl`
--
ALTER TABLE `subcat_tbl`
  ADD CONSTRAINT `cat_id_fk` FOREIGN KEY (`catid_fk`) REFERENCES `category_tbl` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
