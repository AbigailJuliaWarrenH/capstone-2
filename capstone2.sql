-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2018 at 11:00 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`) VALUES
(10, 'Beauty Care: Brushes and Tools'),
(8, 'Beauty Care: Makeup: Bronzer/Highlighter/Contour'),
(7, 'Beauty Care: Makeup: Eyes'),
(5, 'Beauty Care: Makeup: Face'),
(6, 'Beauty Care: Makeup: Lips'),
(9, 'Beauty Care: Makeup: Palettes'),
(3, 'Skin Care: Products: Body'),
(1, 'Skin Care: Products: Face'),
(4, 'Skin Care: Products: Hair'),
(2, 'Skin Care: Tools and Machine');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(13,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `image`, `category_id`) VALUES
(9, 'The Face Shop Natural Mask Package', 'The Face Shop: 12 Various Natural Mask ', '300.00', 'assets/images/facemask1.jpg', 1),
(10, 'BioAqua Skin Regenerating Panda Mask With Wild Oats', 'BioAqua Skin Regenerating Panda Mask With Wild Oats (one mask)', '50.00', 'assets/images/facemask2.jpg', 1),
(13, 'PUREOLOGY Style + Protect Refresh & Go Dry Shampoo', 'Pureology\'s Refresh & Go Dry Shampoo is a non-drying, oil-absorbing dry shampoo perfect for achieving effortless style on the second day and beyond. The formula features Rice Starch to absorb oil while adding movement and texture. It also has Pureology\'s AntiFade Complex which contains antioxidants and full spectrum UVA/UVB sunscreens to help color-treated hair retain that salon-fresh feeling.  Key Benefits: Absorbs oil on hair to create beautiful, refreshed and styles on the second day and beyond Features Rice Starch to absorb oil and create effortless texture Features AntiFade Complex to protect color-treated hair ', '1200.00', 'assets/images/hairprod1.jpg', 4),
(14, 'Free From Frizz 330ml Smoothie Shampoo', 'Free From Frizz transforms unruly locks into sleek frizz-free hair. Smooth your frizz daily with Free From Frizz Shampoo.  Ingredients:  Aqua, Sodium Laureth Sulfate, Cocamidopropyl Betaine, Ammonium Laureth Sulfate, Cocamide DEA, Sodium Chloride, Parfum, Benzyl Alcohol, Citric Acid, Glycerin, Glycerol, PEG-12 Dimethicone, Polyacrylamidomethylpropane Sulfonic Acid Disodium EDTA, Dehydroacetic Acid, Linalool, Prunus Persica Fruit Extract, Prunus Avium Fruit Extract Musa Paradisiaca Fruit, Cucurbita Pepo Fruit Extract Spinacia Oleracea Leaf Extract, Citronellol Lepidium Meyenii Root Extract, Denatonium Benzoate, CI 15985', '345.00', 'assets/images/hairprod2.jpg', 4),
(15, 'Live Love Volume Spray', 'Vivacious volume spray, for a fierce and fuller finish, use on damp hair!', '140.00', 'assets/images/hairprod3.jpg', 4),
(16, 'BECCA BECCA x Chrissy Teigen Glow Body Oil', 'Created in collaboration with BECCA glow queen, Chrissy Teigen. BECCA x Chrissy Teigen Glow Body Oil is a luxuriously lightweight body oil infused with an irresistible, summer aroma that illuminates the skin and hair. Drench yourself in glow from head to toe!  BECCA has captured the essence of summer (or vacation) in a bottle! The captivating fragrance - an addictive, sultry solar aroma infused with soft, lush floral, Italian bergamot and exotic, warm sandalwood notes - instantly transports you to a soft sand beach where summer never ends. Skin drinks up moisturizing oil and reflects a touch of shimmer for a silky soft, sun-kissed glow. Looks, feels, and smells exactly like the afternoon sun hitting your still-wet-from-the-ocean-skin.', '2100.00', 'assets/images/bodyprod1.jpg', 3),
(17, 'SHEAMOISTURE Coconut & Hibiscus Dead Sea Salt Muscle Relief Mineral Soak', 'SheaMoisture\'s Coconut & Hibiscus Dead Sea Salt Nourishing Soak with Frankincense & Myrrh Extract helps to nourish, firm and tone skin while providing antioxidant protection. Relaxes muscles and soothes achy joints.  Shea Moisture\'s Story:  Sofi Tucker started selling shea nuts at the village market in Bonthe, Sierra Leone in 1912. By age 19, the widowed mother of four was selling shea butter, african black soap and her homemade hair and skin preparations all over the countryside. Sofi Tucker was a grandmother and sheamoisture is her legacy. With the purchase of African Black Soap Body Wash it helps empower disadvantaged women to realize a brighter, healthier future.  Benefits: Ethically traded ingredients sustainably produced Pioneering community commerce and Fair Trade since 1912 Tested on their family for four generations. Never on animals.', '700.00', 'assets/images/bodyprod2.jpg', 3),
(18, 'Katie Price Body Wash for Men', 'Revitalise and feel refreshed with this hydrating and energising body wash. This body wash will awaken your senses and give you the start you need for the day ahead. Skin will be thoroughly cleansed, conditioned and moisturised whilst leaving it scented with this masculine aroma.', '175.00', 'assets/images/bodyprod3.jpg', 3),
(19, 'I Heart Revolution Cotton Candy Chocolate Palette', 'Life is short, so make it sweet with this Cotton Candy Chocolate Palette. Create some serious eye candy with this luscious blend of 18 playful pinky shimmers, heavenly sweet metallics and nude mattes.  There\'s no candy coating here, everybody will be jelly of your new dainty eye look.  Apply with a dry brush or wet the brush with one of the I Heart Revolution Fixing sprays for a sweet scented finish.  Eyeshadow shades; Topped - champagne gold metallic Carnival - pale rose gold metallic Enjoy - taupe nude matte Fancy - pale copper satin Fairground - matte taupe with a gold shimmer Sweetheart - brick red satin Made To Share - caramel matte Fairy Floss - pastel pink shimmer Strawberry - rosey pink metallic Clouds - grey metallic Spun Sugar - warm rosey metallic with a pink shift Sweet Tooth - metallic ÃƒÂ©cru Pretty In Pastel - metallic pastel purple Confection - light bronze metallic with a white shift So Sweet - light pink metallic with a white shift Treat For You - deep cinnamon matte Puff - deep muted purple with a pale pink shift Dreams - deep copper metallic with a slight shimmer', '620.00', 'assets/images/palettes1.jpg', 9),
(20, 'CLINIQUE Moisture Surge Overnight Mask', 'Creamy, penetrating night mask helps skin drink deep to replenish lost moisture, build reserves for tomorrow. All night long, it soothes and nourishes to help skin hold in moisture. You wake and touch soft, dewy, glowing skin. Oil-free.', '1500.00', 'assets/images/facemask3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL,
  `status_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statuss`
--

CREATE TABLE `statuss` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_fk0` (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_fk0` (`user_id`),
  ADD KEY `orders_fk1` (`status_id`),
  ADD KEY `orders_fk2` (`payment_method_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_fk0` (`item_id`),
  ADD KEY `order_details_fk1` (`order_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `statuss`
--
ALTER TABLE `statuss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `users_fk0` (`role_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_details_fk0` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `statuss`
--
ALTER TABLE `statuss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`status_id`) REFERENCES `statuss` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_fk2` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_fk0` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_fk1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_fk0` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
