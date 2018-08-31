-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 09:01 AM
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
(20, 'CLINIQUE Moisture Surge Overnight Mask', 'Creamy, penetrating night mask helps skin drink deep to replenish lost moisture, build reserves for tomorrow. All night long, it soothes and nourishes to help skin hold in moisture. You wake and touch soft, dewy, glowing skin. Oil-free.', '1500.00', 'assets/images/facemask3.jpg', 1),
(21, 'Colourpop: GIVE IT TO ME STRAIGHT Pressed Powder Shadow Palette', 'Weâ€™ll be frank, this is our favorite palette yet. Full of warm coppers and rich, romantic mauves, it complements multiple skin tones and satisfies all your moods. Includes 7 buttery mattes and 5 intense metallics that can be used wet or dry.   Matter of Fact: pale pink Up Front: metallic pale gold with a silvery sheen Straight Up: metallic warm gold BS: matte orangey brown Frank: matte warm brown Candid: metallic bright copper Forthright: neutral metallic rose Downright: matte soft pinky beige Truth Hurts: matte peachy beige Be Blunt: metallic rich raspberry TMI: matte dusty burgundy Actually...: matte deepened chocolate brown', '800.00', 'assets/images/palettes2.jpg', 9),
(22, 'TOO FACED Chocolate Gold Metallic/Matte Eyeshadow Palette', 'Take decadence to the next level with Too Faced Chocolate Gold Metallic/Matte Eyeshadow Palette, a luxurious gold and cocoa powder-infused eyeshadow palette that smells as good as it looks. Have a major metallic moment with foiled shadows that are created with real gold for an epic high-shine finish that\'s paired with rich, seductive mattes for coffee to cocktails wear. All shadows feature a soft, velvety texture with full coverage payoff. The entire palette is infused with skin-loving cocoa powder for a decadent chocolate scent.  Shades: Money Bags (metallic warm green) Chocolate Gold (metallic pure gold) Rich Girl (metallic silvered taupe) Cocoa Truffle (matte chocolate brown) Decadent (matte deep black) Love & Cocoa (metallic deep bronze) Old Money (metallic pure copper) New Money (metallic shocking pink) Famous (metallic pure bronze) Classy & Sassy (metallic rose gold) So Boujee (matte cashmere) Holla For A Dolla (metallic golden hunter) Gold Dipped (metallic champagne gold) Livin\' Lavish (metallic plum) Drippin\' Diamond (metallic pure silver) Rollin\' In Dough (matte soft beige)', '2650.00', 'assets/images/palettes3.jpg', 9),
(23, 'CLARINS Online Only Water Lip Stain', 'Finally - color that won\'t kiss off! Discover buildable shades that are moisturizing, stray-proof, smooch-proof and fade-proof. Clarins matte, moisturizing Water Lip Stain stays vibrant until you take it off. 77% water-based and formulated with the benefits of a lip treatment. Water Lip Stain leaves lips soft, comfortable and incredibly kissable. You customize the result-from a just-kissed look to high voltage color. The more coats, the deeper the color intensity.', '1500.00', 'assets/images/lip1.jpg', 6),
(24, 'LA LADY CrÃ¨me Lux Lipstick', 'LUX it up. Enriched with our LUX Blend of hydrating butters, this creamy-matte, long wearing lipstick glides on the lips for intense pigmentation in shades made for every skin tone. You\'ll marry a music man in this rosy terracotta.', '375.00', 'assets/images/lip2.jpg', 6),
(25, 'Revolution Rose Gold Lipstick - Chauffeur', 'Introducing our newest lipstick collection: Rose gold. 5 beautiful shades from nude to vamp, packaged in beautiful rose gold. Comfortable to wear, high coverage formula with buildable colour.  Chauffeur is our perfect nude, for every day. Creamy high gloss glide on formula, packaged in a luxurious rose gold tube. Colour can be built up to full intensity or less for a sheen of colour. A great choice for natural every day make up.  A lipstick with beauty  Vegan Cruelty Free Gluten Free', '150.00', 'assets/images/lip3.jpg', 6),
(26, 'LANCÃ”ME Bienfait TeintÃ© Beauty Balm Sunscreen Broad Spectrum SPF 30', 'Comprehensive protection meets healthy-looking perfection. Bienfait TeintÃ© Beauty Balm Cream gives skin natural, even coverage while serving as your daily source of vitamin- and antioxidant-enriched hydration for 24-hour nurturing moisture with no greasy feel. This unique formula contains Broad Spectrum SPF 30 to protect skin. Available in seven shades for a perfectly even complexion and ideal hydration all day.  Results: This lightweight tinted formula provides moderate, natural coverage, giving skin a healthy hint of color and a healthy glow. See an even, flawless-looking skin tone.  Benefits: Non-comedogenic Dermatologist-tested for safety', '2650.00', 'assets/images/face1.jpg', 5),
(27, 'NO FILTER MATTE CONCEALER', 'Instantly conceal, cover, correct and contour with this long wearing, full coverage natural matte concealer. The lightweight blendable formula applies smoothly and seamlessly covers dark circles, blemishes, redness and discoloration with one swipe. The 100% cruelty-free, vegan formula is made with soft blurring pigment technology delivers a flawless complexion that lasts all day.  Finish Matte  Net Weight 4.0g (0.14oz)', '350.00', 'assets/images/face2.jpg', 5),
(28, 'Obsession Blush B109 Babe', 'Blush that gives dynamic colour and consistancy. Designed to slot into any Makeup Obsession palette', '70.00', 'assets/images/face3.jpg', 5),
(29, 'URBAN DECAY COSMETICS Anti-Aging Eyeshadow Primer Potion', 'Urban Decay found a way to make its legendary Anti-Aging Eye Shadow Primer Potion even better. With revamped packaging that includes an applicator, Eye Shadow Primer Potion looks more gorgeous and applies with more versatility. And the formula still packs the same powers: anti-aging benefits, all-day, crease-free shadow, more vibrant color and smoother application.  This revolutionary paraben-free formula features space-age polymer technology that fills in any imperfections on the skin\'s surface, prepping your lids for all-day shadow. Once you\'ve tried it, you\'ll never want to live without it.  This anti-aging formula also measurably improves the signs of aging over time. High-tech ingredients fight wrinkles and improve tone and texture, while optical blurring pigments create a subtle, soft-focus effect that instantly wakes up tired eyes and minimizes the appearance of redness, crepiness and other imperfections.', '1300.00', 'assets/images/eye1.jpg', 7),
(30, 'JET SET BLACK Precision Brow Colour', 'Water resistant, all-day-wear brow colour in a pot. Delivers smooth and precise application for bolder, better brows. Take off in this rich onyx black.', '350.00', 'assets/images/eye2.jpg', 7),
(31, 'Revolution Awesome Lash Mascara - Ultra Black', 'Want Volume & Length Together? This is the mascara to give you Awesome Lashes. Build & Lengthens with each stroke. Our brush will be leave you able to capture every lash with its tip. Formulation is buildable, for super lashes!. Available in Ultra Black & Black Cruelty Free Gluten Free', '200.00', 'assets/images/eye3.jpg', 7),
(32, 'MAC Cheek X 3: Acoustica / Jeremy Scott', 'This Jeremy Scott cheek palette features a blush, bronzer and highlighter to create a variety of sculpted looks. Cheek X 3: Acoustica / Jeremy Scott with easily blendable, long-lasting shades are packaged in one palette for portability. Specially outfitted in a one-of-a-kind CD mixtape design, in cheeky tribute to the days that new music and unhinged creative expression took root on city streets.  Hailed as one of fashion\'s rebels, Jeremy Scott creates decadent high fashion from American cultural obsessions. With a fanatical following of pop music\'s biggest icons, the irreverent designer provokes and pushes into fashion\'s outer limits. Scott\'s collection for MÂ·AÂ·C introduces manic colour for eyes, lips and cheeks specially packaged in cheeky tribute to the days of mixtapes, boomboxes, new music and unhinged creative expression taking root on city streets.  Includes: Heaven In Your Smile (pale frosty highlight) Acoustica (warm brown) Wall of Desire (midtone pink)', '1900.00', 'assets/images/bhc1.jpg', 8),
(33, 'PHYSICIANS FORMULA Butter Bronzer Murumuru Butter Bronzer', 'Physicians Formula Butter Bronzer Murumuru Butter Bronzer is an ultra-luxurious bronzer infused with Murumuru Butter, delivering a radiant Brazilian goddess glow! Moisturizing wonder features ultra-refined pearl and soft-focus pigments that smooth skin texture, brighten skin tone and deliver a gorgeous bronze finish.  Benefits: Ultra-rich bronzer formula instantly melts into skin, sealing-in moisture to deliver instant and lasting hydration Incredibly creamy and soft texture combines the best features of a powder and cream bronzer, to deliver a lit-from-within tropical glow unlike any other Infused with a powerful blend of Murumuru Butter, Cupuacu Butter and Tucuma Butter, from the lush and nutrient-rich Amazon Packed with essential fatty acids and pro-vitamins that soften, condition and moisturize skin, leaving it silky soft Featuring unique sponge applicator specially designed to be used with creamy bronzer formula Hypoallergenic, paraben free, gluten free, cruelty free, oil-free Non-comedogenic, dermatologist approved', '750.00', 'assets/images/bhc2.jpg', 8),
(34, 'Revolution Pro The Illuminator Distinctive', 'Create lit-from-within glow with Revolution PRO The Illuminator.  This versatile multi-use liquid highlighter can be used to add lustre to the eyes, lips and face. The creamy texture can be blended out to a sheer shimmer on the high points of the face, or layered up to create a long-wearing metallic foil finish that looks stunning over eyeshadows.  With a doe foot applicator and travel-friendly tube, The Illuminator can also be used as a lip topper over lipsticks to add dimension and sheen.  Distinctive - Holographic White Shimmer Famous â€“ Light Champagne Gold Shimmer Illustrious â€“ Gold Shimmer Limelight â€“ Light Pink Shimmer Picturesque â€“ Bronze Gold Shimmer  Cruelty-free and vegan.', '275.00', 'assets/images/bhc3.jpg', 8),
(35, 'MICHAEL TODD BEAUTY Floral Print Soniclear Elite Cleansing System', 'Soniclear Elite by Michael Todd Beauty is a 4-in-1 Beauty Device for face and body cleansing, firming massage & infusion with our serum infuser head-with consistent use, Soniclear provides cleaner, softer, smoother, firmer, brighter skin with a reduction in the appearance of pore size and more even skin tone and foot care with the pedi head.  The world\'s first antimicrobial protected sonic skin cleansing brush that guards against 99.9% of bacteria that can form on brushes between use so the brushes stay cleaner and fresher longer.', '8000.00', 'assets/images/skintools.jpg', 2),
(36, 'PMD Personal Microderm Hand and Body Kit', 'Reveal a beautiful you!  PMD helps women uncover their most vibrant, radiant complexion through an easy series of treatments. Looking good feels great, and PMD loves showing women the way to fresh, supple skin.  PMD Personal Microderm replicates the treatment given by professionals by using the same aluminum oxide crystals on the patented spinning discs. The hand-held tool uses vacuum action to gently pull skin towards the disc for optimum exfoliation. Once it removes the dead skin cells and reveals a clear, healthy complexion, your skin is able to absorb products much more effectively. The system includes several levels of exfoliating discs for a custom and controlled intensity.  With this tool, women of all skin types are able to rejuvenate their skin and build brilliant confidence. The PMD Personal Microderm tool unclogs pores, smooth\'s out skin, evens tone, reduces blemishes and improves the appearance of fine lines and wrinkles.', '6500.00', 'assets/images/skintools2.jpg', 2),
(37, 'NEUTROGENA Light Therapy Acne Mask', 'With dermatologist in-office acne technology, the Neutrogena Light Therapy Acne Mask is a revolution in acne treatment. This face mask harnesses the power of clinically proven technology to clear acne and allow skin to heal itself. Here is how light therapy works. Blue light targets acne-causing bacteria while red light reduces acne inflammation. This one-step acne treatment covers your face and is easy to use at home. After cleansing, put the mask on. Push the button and let it work for 10 minutes. You can sit back and relax until it automatically shuts off. Use it every day and you\'ll see clearer, healthier skin with this chemical free and UV free acne treatment. Clinically proven light therapy technology Dermatologist in-office acne technology 100% chemical free and UV free treatment', '6500.00', 'assets/images/skintools3.jpg', 2),
(38, 'MY LITTLE PONY BRUSH SET', 'MY LITTLE PONY  Off to an adventure? The My Little Pony Brush Set includes 5 mini brushes and a brush case perfect for travel. The set includes: Angled Face Brush, Fan Brush, Shader Brush, Tapered Blending Brush, Angled Eye Brush, and a translucent brush holder.   This item is limited edition and we will not be having any future restocks. Once this item is gone, itâ€™s gone!', '500.00', 'assets/images/brushes2.jpg', 10),
(39, 'Revolution Complexion Expert Duo Sponge', '2 multi functional sponges by Makeup Revolution. Includes a HARD Sponge for highlighting, contouring and blending and a SOFT sponge for flawless blending. Use the rounded sides for the larger areas of the face and the tip for precise coverage. The flat edge can be used around the nose and eyes. Leaving you with a totally flawless complexion.', '200.00', 'assets/images/brushes3.jpg', 10),
(40, 'IT BRUSHES FOR ULTA Your Superheroes Full-Size Travel Brush Set', 'Your Beauty Revealed! These are the brushes you want by your side for whatever the day (or night) may bring! Be your own beauty hero no matter where you are! Reveal your most beautiful you with 6 unstoppable brushes for full face flawless! IT will save time on your makeup routine. IT saves the day! Great brushes do the work for you!', '2700.00', 'assets/images/brushes1.jpg', 10),
(42, 'tabachoyxfff', 'batak', '301.00', 'assets/images/30594226_1758712007525291_2889154336462407122_n.jpg', 10);

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

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

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
  `role_id` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'user1', 'b3daa77b4c04a9551b8781d03191fe098f325e67', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `statuss`
--
ALTER TABLE `statuss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
