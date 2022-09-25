-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 03:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paws_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `regTime`) VALUES
(1, 'ADMIN001', 'ADMIN001', '2022-07-12 20:54:29'),
(2, 'ADMIN002', 'ADMIN002', '2022-07-12 20:54:29'),
(5, 'ADMIN003', 'ADMIN003', '2022-07-13 12:05:50'),
(6, 'ADMIN004', 'ADMIN004', '2022-08-27 21:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `id` int(25) NOT NULL,
  `applicantid` int(25) NOT NULL,
  `ownerid` int(25) NOT NULL,
  `petid` int(25) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not Accepted Yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`id`, `applicantid`, `ownerid`, `petid`, `status`) VALUES
(1, 2, 1, 4, 'Accepted'),
(2, 3, 1, 4, 'Not Accepted Yet'),
(5, 4, 1, 6, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `appliedvets`
--

CREATE TABLE `appliedvets` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `resume` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not Approved Yet'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appliedvets`
--

INSERT INTO `appliedvets` (`id`, `name`, `email`, `contact`, `nid`, `gender`, `age`, `image`, `resume`, `status`) VALUES
(1, 'Anna Sthesia', 'anna099@gmail.com', '01727422309', '1332765489', 'Female', 28, 'img1.jpg', 'resume1.pdf', 'Approved'),
(2, 'William Anderson', 'william@gmail.com', '01724357641', '1234567890', 'Male', 30, 'img2.jpg', 'resume2.pdf', 'Approved'),
(3, 'Emily Harrison', 'emily01@gmail.com', '01728432309', '1826543076', 'Female', 32, 'img3.jpg', 'resume3.pdf', 'Not Approved Yet');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `date`) VALUES
(1, 'Food', 'The category that follows includes all varieties of pet food.', '2022-07-17 10:47:44'),
(2, 'Medicine', 'The following category includes all forms of pet medications.', '2022-07-17 11:28:55'),
(3, 'Accessories', 'The following category includes every kind of pet accessory.', '2022-07-17 11:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `foster`
--

CREATE TABLE `foster` (
  `id` int(25) NOT NULL,
  `uid` int(25) NOT NULL,
  `petName` varchar(225) NOT NULL,
  `petAge` int(10) NOT NULL,
  `petGender` varchar(225) NOT NULL,
  `petType` varchar(225) NOT NULL,
  `vax` varchar(500) NOT NULL,
  `fromdt` datetime NOT NULL,
  `todt` datetime NOT NULL,
  `status` varchar(500) NOT NULL DEFAULT 'Status is not available yet. Please check later.',
  `amount` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foster`
--

INSERT INTO `foster` (`id`, `uid`, `petName`, `petAge`, `petGender`, `petType`, `vax`, `fromdt`, `todt`, `status`, `amount`) VALUES
(2, 1, 'Max', 3, 'Male', 'Dog', 'vax2.jpg', '2022-07-15 12:00:00', '2022-07-30 12:00:00', 'Your application has been approved. Please be present 10 minutes before the designated time. Thank you.', 3750),
(3, 5, 'Eddie', 3, 'Male', 'Dog', 'vax3.jpg', '2022-08-31 18:30:00', '2022-09-08 15:30:00', 'Status is not available yet. Please check later.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `details` varchar(1500) NOT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pethome`
--

CREATE TABLE `pethome` (
  `id` int(25) NOT NULL,
  `uid` int(22) NOT NULL,
  `petName` varchar(255) NOT NULL,
  `petAge` int(10) NOT NULL,
  `petGender` varchar(255) NOT NULL,
  `petType` varchar(255) NOT NULL,
  `petDescription` varchar(600) NOT NULL,
  `petImg1` varchar(500) NOT NULL,
  `petImg2` varchar(500) NOT NULL,
  `petImg3` varchar(500) NOT NULL,
  `vaxImg` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Not Adopted',
  `adoptedby` int(25) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pethome`
--

INSERT INTO `pethome` (`id`, `uid`, `petName`, `petAge`, `petGender`, `petType`, `petDescription`, `petImg1`, `petImg2`, `petImg3`, `vaxImg`, `status`, `adoptedby`, `time`) VALUES
(4, 1, 'Pororo', 4, 'Female', 'Dog', 'Pororo is a big softie who is more like a hippopotamus! She is chunky and snuggly, but also loves a good play session. Luckily, she tires out easily! She will put her whole head in your lap for cuddles, and when she is extra happy, she rolls around on the ground, belly up. She also enjoys playing tug and de-squeaking a good squeaky toy.', 'Pororo1.jpg', 'Pororo2.jpg', 'Pororo3.jpg', 'vaccine4.jpg', 'Not Adopted', 2, '2022-07-12 18:48:17'),
(6, 1, 'Eddie', 3, 'Male', 'Cat', 'Eddie is a big softie. He likes to make new friends and play with them!', 'img6.1.jpg', 'img6.2.jpg', 'img6.3.jpg', 'vaccine6.jpg', 'Adopted', 4, '2022-08-27 21:17:00'),
(7, 1, 'Maddy', 2, 'Female', 'Cat', 'Maddy is a big softie. He likes to make new friends and play with them!', 'img7.1.jpg', 'img7.2.jpg', 'img7.3.jpg', 'image.jpg', 'Not Adopted', NULL, '2022-09-02 15:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcatid` int(11) NOT NULL,
  `prodname` varchar(255) NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `proddescription` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `catid`, `subcatid`, `prodname`, `manufacturer`, `proddescription`, `price`, `discount_price`, `img1`, `img2`, `availability`, `creationDate`) VALUES
(1, 1, 1, 'Natural Meat', 'WellPet', '<font face=\"arial\">Applicable for cats of all ages.</font><div><font face=\"arial\">Nutritional Content: Crude Protein (38%), Crude Fat (16%), Crude Fiber (6%), Moisture (10%), Taurine (0.2%), Calcium (1%)</font></div><div><font face=\"arial\">Net Weight: 10kg</font></div><div><font face=\"arial\">Country of Origin: Shandong, China</font></div>', 1500, 1200, 'img1.1.jpg', 'img1.2.jpg', 'In Stock', '2022-07-17 19:22:04'),
(2, 3, 3, 'Bentonite Litter', 'Me-O', '<ul style=\"color: rgb(73, 73, 73); font-family: Karla, Arial, Helvetica, sans-serif; font-size: 15px;\"><li>Natural Product: Made from natural material and safe for you and your pets</li><li>Odor Control: Effectively controls unpleasant odors for continuous hygiene</li><li>Super Absorbent: Quickly forms clumps with the cat’s feces and urine minimizing the amount of soiled litter that needs to be removed and replaced</li><li>Dust Free: Do not contain powdery residues that stick on cat’s paws and stain your floors</li></ul>', 1500, 0, 'img2.1.jpg', 'img2.2.jpg', 'In Stock', '2022-07-17 20:41:29'),
(3, 3, 4, 'Lid Cage', 'Cat Centre', '<font face=\"arial\">Material: Plastic</font><div><font face=\"arial\">Weight: 1kg</font></div><div><ul class=\"a-unordered-list a-vertical a-spacing-mini\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 18px; color: rgb(15, 17, 17); padding: 0px; font-family: Arial, sans-serif; font-size: 14px;\"><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Animal Transport Carrier - Easy Access Top Entry Hinged Lid - Strong Design</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Ventilation Slots - Easy Carry Handle - Designed for Small/Medium Animals</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Strong Pet Safe Plastic - Perfect for Vet Trips - Top Access Reduces Stress</span></li><li style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\">Keep your Pet Inside During Routine Vet Trips</span><', 2500, 2200, 'img3.1.jpg', 'img3.2.jpg', 'In Stock', '2022-07-17 20:51:06'),
(4, 1, 5, 'Shredded Blend', 'Purina ProPlan', '<ul><li><font color=\"#4d4d4d\" face=\"arial\"><span style=\"font-size: 16px; letter-spacing: -0.48px;\">Hard kibble combined with tender, shredded pieces for taste and texture dogs love.</span></font></li><li><font color=\"#4d4d4d\" face=\"arial\"><span style=\"font-size: 16px; letter-spacing: -0.48px;\">High protein formula, with real chicken as the first ingredient.</span></font></li><li><font color=\"#4d4d4d\" face=\"arial\"><span style=\"font-size: 16px; letter-spacing: -0.48px;\">Fortified with guaranteed live probiotics for digestive and immune health.</span></font></li><li><font color=\"#4d4d4d\" face=\"arial\"><span style=\"font-size: 16px; letter-spacing: -0.48px;\">Vitamin A and omega-6 fatty acids to nourish skin and coat.</span></font></li><li><font color=\"#4d4d4d\" face=\"arial\"><span style=\"font-size: 16px; letter-spacing: -0.48px;\">Crude Protein(26%), Crude Fat(16%),Crude Fiber(3%),Moisture(12%),Calcium(1.1%)</span></font></li><li><font color=\"#4d4d4d\" face=\"arial\"><span style=\"font-size: 16px; ', 3750, 0, 'img4.1.jpg', 'img4.2.jpg', 'In Stock', '2022-07-18 18:30:37'),
(5, 1, 5, 'Roasted Chicken', 'Pedigree', '<ul><li><font face=\"arial\">Complete and balanced nutrition has antioxidants, vitamins and minerals to help maintain a healthy lifestyle.</font></li><li><font face=\"arial\">Optimal levels of omega-6 fatty acid nourish the skin and help keep coat shiny and healthy.</font></li><li><font face=\"arial\">Whole grains and a special fiber blend support healthy digestion with a delicious roasted chicken flavor.</font></li><li><font face=\"arial\">Unique, crunchy texture helps clean the teeth with every bite to support good oral health between brushings.</font></li><li><font face=\"arial\">Net Weight: 5kg</font></li></ul>', 3000, 0, 'img5.1.jpg', 'img5.2.jpg', 'In Stock', '2022-07-18 18:39:04'),
(6, 1, 2, 'Pate Seafood', 'Pedigree', '<ul><li><font face=\"arial\">Pate variety pack features real meat in extra gravy for the high-protein nutrition your little carnivore craves.</font><br></li><li><font face=\"arial\"></font></li><li><font face=\"arial\">Enhanced with vitamins and minerals for overall well-being, and essential taurine for heart and vision health.</font></li><li><font face=\"arial\">Provides a 100% complete and balanced meal for cats, on its own or as a delicious kibble topper.</font></li><li><font face=\"arial\">Flavor and texture are great for picky eaters, and moisture helps add essential hydration for your pal.</font></li><li><font face=\"arial\">Crafted with love in USA facilities and comes in easy-to-serve cans that make mealtime simple and hassle-free.</font></li></ul>', 2500, 2350, 'img6.1.jpg', 'img6.2.jpg', 'In Stock', '2022-07-18 18:44:25'),
(7, 1, 5, 'Prescription Diet', 'Hills', '<ul><li><font face=\"arial\">Clinically tested nutrition for conditions that respond to fiber that promotes urinary tract health.</font></li><li><font face=\"arial\">Helps metabolize fat, maintain lean muscle and a healthy weight.</font></li><li><font face=\"arial\">High levels of L-carnitine to increase energy metabolism and burn fat.</font></li><li><font face=\"arial\">High fiber levels provide a feeling of fullness and help stabilize fluctuation of blood glucose.</font></li></ul>', 3750, 3000, 'img7.1.jpg', 'img7.2.jpg', 'In Stock', '2022-07-18 19:29:43'),
(8, 3, 7, 'Plastic Litter', 'PuppyGoHere', '<font face=\"arial\">Extremely large litter box. Review size diagram prior to ordering to make sure you have space. The dimensions are the outside dimensions. The opening is on the 22\" side. A helpful solution for a dog that lifts his leg, dogs that are over 20 lbs but less than 30 lbs. Works for large cats, multi cat homes, disabled dogs and senior cats.</font><br>', 1500, 0, 'img8.1.jpg', 'img8.2.jpg', 'In Stock', '2022-07-18 19:54:18'),
(9, 3, 8, 'Mandalorian Bed', 'Star Wars', '<ul><li><li><font face=\"arial\">Extra cozy bolster bed lets your pet dream of their next bounty of fun in absolute comfort.</font></li><li><font face=\"arial\">Soft Sherpa fleece inside with a STAR WARS: THE MANDALORIAN-themed design featuring Mando’s Mudhorn signet.</font></li><li><font face=\"arial\">Lofted polyfill in the bolsters and cushion supports your pet’s whole body to help them get more restful sleep.</font></li><li><font face=\"arial\">Machine washable so you can keep their favorite chill spot clean and comfy, nap after nap.</font></li><li><font face=\"arial\">One of the unique pet beds for STAR WARS: THE MANDALORIAN superfans found only at PAWS.</font></li></li></ul>', 3000, 2700, 'img9.1.jpg', 'img9.2.jpg', 'In Stock', '2022-07-18 19:59:42'),
(10, 2, 9, 'Agrogenta11', 'Agrovet', '<font face=\"arial\">Treatment and averting infections brought on by gentamicin sensitive bacteria of the genitourinary, respiratory and gastrointestinal systems. Additionally helpful in cases of mastitis, metritis, postoperative and cutaneous infections, as well as septicemias.</font><br><div><font face=\"arial\"><b><u>Formulation:</u>&nbsp;</b><span style=\"color: rgb(33, 25, 21); font-size: 14px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Gentamicin as sulphate 110 mg, excipients q.s. ad 1 mL</span></font></div>', 550, 0, 'img10.1.jpg', 'img10.2.jpg', 'In Stock', '2022-08-03 08:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(25) NOT NULL,
  `prodId` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `prodId`, `name`, `comment`, `postdate`) VALUES
(1, 5, 'Nafisa Nawer', 'My dog is healthy because I give him pedigree. Lots of flavor in it, I always buy roasted chicken flavor. No doubt, the quality of this product is of great quality.', '2022-08-04 16:57:29'),
(2, 5, 'Nafisa Nawer', 'Pedigree is one of the best food for all the pet in your house. Pedigree contains lots of nutrients which is healthy for the pets and makes my pet energetic every time. And its package is also attractive.', '2022-08-04 16:59:45'),
(3, 5, 'Nafisa Nawer', 'It was those days where my dog was so thin and lean. We all thought he has some kind of disease. It was then the pedigree which we fed my dog and now he is healthy. Pedigree is a very healthy product for my puppy.', '2022-08-04 17:00:32'),
(4, 5, 'Nafisa Nawer', 'This is the best dog food I have a male rottwieler dog at my home it loves pedigree flavor a lot according to my dog it is the best.', '2022-08-04 17:01:31'),
(5, 7, 'Alif Al Nizad', 'This food made my pet more healthy and cheerful. I do recommend this product.', '2022-08-14 10:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(25) NOT NULL,
  `categoryid` int(25) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `time`) VALUES
(1, 1, 'Dry Cat Food', '2022-07-17 15:16:11'),
(2, 1, 'Canned Cat Food', '2022-07-17 15:31:54'),
(3, 3, 'Cat Litter', '2022-07-17 20:38:18'),
(4, 3, 'Pet Carrier Basket', '2022-07-17 20:47:15'),
(5, 1, 'Dry Dog Food', '2022-07-18 18:10:49'),
(6, 1, 'Canned Dog Food', '2022-07-18 19:20:25'),
(7, 3, 'Dog/Cat Litter Box', '2022-07-18 19:21:10'),
(8, 3, 'Bed', '2022-07-18 19:56:29'),
(9, 2, 'All type of pet', '2022-08-03 08:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logoutTime` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `email`, `userip`, `loginTime`, `logoutTime`, `status`) VALUES
(1, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-29 19:19:02', '2022-06-30 01:46:19 AM', 1),
(2, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-29 19:46:30', '2022-06-30 01:52:57 AM', 1),
(5, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-03 19:08:37', '2022-07-04 01:39:12 AM', 1),
(6, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-03 19:39:20', '2022-07-04 02:04:42 AM', 1),
(10, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-06 10:10:04', '2022-07-06 04:10:09 PM', 1),
(11, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-06 10:22:41', '2022-07-06 04:25:58 PM', 1),
(13, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-08 20:45:26', '2022-07-09 02:59:41 AM', 1),
(14, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-09 09:55:55', '2022-07-09 05:48:05 PM', 1),
(16, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-12 16:27:42', '2022-07-12 11:09:32 PM', 1),
(18, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-12 18:03:20', '2022-07-13 12:24:03 AM', 1),
(19, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-12 18:24:20', '2022-07-13 12:30:23 AM', 1),
(20, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-12 18:30:31', '2022-07-13 12:51:59 AM', 1),
(21, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-12 18:53:35', '2022-07-13 01:34:51 AM', 1),
(23, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-13 09:32:01', '2022-07-13 03:34:36 PM', 1),
(24, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-13 19:23:49', '2022-07-14 01:41:48 AM', 1),
(27, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-18 16:35:27', '2022-07-19 01:19:29 AM', 1),
(38, 'nizad22@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-07 19:28:54', '2022-08-08 02:28:36 AM', 1),
(40, 'nazifa@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-08 09:21:33', '2022-08-08 03:23:07 PM', 1),
(42, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-08 18:46:11', '2022-08-09 02:13:50 AM', 1),
(45, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-14 08:07:46', '2022-08-14 04:06:25 PM', 1),
(46, 'nizad22@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-14 10:06:33', '2022-08-14 06:37:25 PM', 1),
(47, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-14 12:37:33', '2022-08-14 07:40:59 PM', 1),
(48, 'nizad22@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-14 13:41:07', '2022-08-14 08:33:47 PM', 1),
(49, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-15 05:39:31', '2022-08-15 01:19:32 PM', 1),
(50, 'nizad22@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-15 07:19:40', '2022-08-15 01:22:56 PM', 1),
(51, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-19 17:13:19', '2022-08-19 11:18:42 PM', 1),
(52, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-19 18:06:13', NULL, 1),
(53, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-19 18:06:14', '2022-08-20 12:16:56 AM', 1),
(54, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-19 19:11:44', NULL, 1),
(55, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-24 07:34:48', NULL, 1),
(56, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-24 07:59:45', NULL, 1),
(57, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-24 12:47:47', '2022-08-24 07:46:08 PM', 1),
(58, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-25 09:21:50', '2022-08-25 03:24:20 PM', 1),
(59, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-25 09:24:31', '2022-08-25 03:45:44 PM', 1),
(60, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-25 09:45:55', NULL, 1),
(61, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-26 07:47:25', NULL, 1),
(62, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 17:33:56', NULL, 1),
(63, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 18:13:37', NULL, 1),
(64, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 18:14:50', NULL, 1),
(65, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 18:19:21', '2022-08-28 01:07:17 AM', 1),
(66, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 19:07:24', '2022-08-28 01:14:04 AM', 1),
(67, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 19:14:10', '2022-08-28 01:38:50 AM', 1),
(68, 'zarin002@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:36:47', '2022-08-28 02:37:45 AM', 1),
(69, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:38:02', '2022-08-28 02:41:21 AM', 1),
(70, 'zarin002@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:41:31', NULL, 0),
(71, 'zarin002@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:41:38', '2022-08-28 02:42:08 AM', 1),
(72, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:42:14', '2022-08-28 02:48:14 AM', 1),
(73, 'zarin002@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:48:21', '2022-08-28 02:53:07 AM', 1),
(74, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:53:13', '2022-08-28 02:57:37 AM', 1),
(75, 'zarin002@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:57:44', '2022-08-28 02:58:26 AM', 1),
(76, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 20:58:32', '2022-08-28 03:13:35 AM', 1),
(77, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 21:14:55', '2022-08-28 03:17:45 AM', 1),
(78, 'zarin002@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 21:17:54', '2022-08-28 03:19:54 AM', 1),
(79, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 21:20:01', '2022-08-28 03:21:29 AM', 1),
(80, 'afra123@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-27 21:22:19', '2022-08-28 03:28:26 AM', 1),
(81, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-09-02 15:41:43', '2022-09-02 09:48:42 PM', 1),
(82, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-09-02 15:51:12', '2022-09-02 09:55:27 PM', 1),
(83, 'zarin002@gmail.com', 0x3a3a3100000000000000000000000000, '2022-09-02 15:55:35', NULL, 1),
(84, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-09-02 16:16:52', '2022-09-02 10:31:22 PM', 1),
(85, 'nnawar706@gmail.com', 0x3a3a3100000000000000000000000000, '2022-09-05 16:56:52', '2022-09-05 10:57:13 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contact`, `address`, `password`, `regTime`) VALUES
(1, 'Nafisa Nawer', 'nnawar706@gmail.com', '01723037921', 'Japan Garden City, Dhaka-1207', '827ccb0eea8a706c4c34a16891f84e7b', '2022-06-29 19:16:08'),
(2, 'Alif Al Nizad', 'nizad22@gmail.com', '01274722903', 'Dhanmondi 12/1, Dhaka-1207', '827ccb0eea8a706c4c34a16891f84e7b', '2022-08-07 19:17:12'),
(3, 'Nazifa Nawer', 'nazifa@gmail.com', '01753886355', 'Banani, Dhaka', '01cfcd4f6b8770febfb40cb906715822', '2022-08-08 09:21:19'),
(4, 'Zarin', 'zarin002@gmail.com', '01727422344', 'Dhaka, Bangladesh', '827ccb0eea8a706c4c34a16891f84e7b', '2022-08-27 20:36:23'),
(5, 'Afra Hossain', 'afra123@gmail.com', '01727422309', 'Dhaka, Bangladesh', '827ccb0eea8a706c4c34a16891f84e7b', '2022-08-27 21:22:09');

-- --------------------------------------------------------

--
-- Table structure for table `vetlog`
--

CREATE TABLE `vetlog` (
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `vetip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logoutTime` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vetlog`
--

INSERT INTO `vetlog` (`id`, `email`, `vetip`, `loginTime`, `logoutTime`, `status`) VALUES
(1, 'anna099@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-05 21:56:15', '2022-07-06 03:58:19 AM', 1),
(2, 'anna099@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-06 10:04:46', '2022-07-06 04:05:53 PM', 1),
(3, 'anna099@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-06 10:17:21', '2022-07-06 04:22:03 PM', 1),
(4, 'anna099@gmail.com', 0x3a3a3100000000000000000000000000, '2022-07-06 10:26:08', '2022-07-06 04:39:55 PM', 1),
(10, 'anna099@gmail.com', 0x3a3a3100000000000000000000000000, '2022-08-19 17:09:06', '2022-08-19 11:13:12 PM', 1),
(13, 'anna099@gmail.com', 0x3a3a3100000000000000000000000000, '2022-09-02 15:49:23', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vets`
--

CREATE TABLE `vets` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vets`
--

INSERT INTO `vets` (`id`, `name`, `email`, `contact`, `nid`, `password`, `regTime`) VALUES
(1, 'Dr. Anna Sthesia', 'anna099@gmail.com', '01727422308', '1332765489', '827ccb0eea8a706c4c34a16891f84e7b', '2022-07-06 10:03:48'),
(2, 'William Anderson', 'william@gmail.com', '01724357641', '1234567890', '827ccb0eea8a706c4c34a16891f84e7b', '2022-07-12 18:53:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliedvets`
--
ALTER TABLE `appliedvets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foster`
--
ALTER TABLE `foster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pethome`
--
ALTER TABLE `pethome`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vetlog`
--
ALTER TABLE `vetlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vets`
--
ALTER TABLE `vets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appliedvets`
--
ALTER TABLE `appliedvets`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `foster`
--
ALTER TABLE `foster`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pethome`
--
ALTER TABLE `pethome`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vetlog`
--
ALTER TABLE `vetlog`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vets`
--
ALTER TABLE `vets`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
