-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 08:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nttours`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbooking`
--

CREATE TABLE `carbooking` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carbooking`
--

INSERT INTO `carbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`) VALUES
(1, 'test@gmail.com', 2, '22/06/2017', '25/06/2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 1, '2017-06-19 17:15:43'),
(2, 'test@gmail.com', 3, '30/06/2017', '02/07/2017', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', 2, '2017-06-26 17:15:43'),
(3, 'test@gmail.com', 4, '02/07/2017', '07/07/2017', 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ', 0, '2017-06-26 18:10:06'),
(4, 'test1@gmail.com', 1, '11/07/2017', '12/07/2018', 'ddddddddddd', 0, '2017-06-29 15:20:45'),
(5, 'php@gmail.com', 6, '11/07/2017', '12/07/2017', 'i want to hire this taxi for few hours', 1, '2017-07-05 08:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `carbrands`
--

CREATE TABLE `carbrands` (
  `id` int(11) NOT NULL,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carbrands`
--

INSERT INTO `carbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Maruti', '2017-06-18 13:24:34', '2017-06-19 03:42:23'),
(2, 'BMW', '2017-06-18 13:24:50', NULL),
(3, 'Audi', '2017-06-18 13:25:03', NULL),
(4, 'Nissan', '2017-06-18 13:25:13', NULL),
(5, 'Toyota', '2017-06-18 13:25:24', NULL),
(7, 'Marutiu', '2017-06-19 03:22:13', NULL),
(8, 'Taxi', '2017-07-05 08:02:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(123) NOT NULL,
  `cityname` varchar(132) NOT NULL,
  `photo` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(123) NOT NULL,
  `countryname` varchar(132) NOT NULL,
  `flag` varchar(132) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `google_users`
--

CREATE TABLE `google_users` (
  `id` int(123) NOT NULL,
  `iid` varchar(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `picture` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `google_users`
--

INSERT INTO `google_users` (`id`, `iid`, `name`, `email`, `picture`) VALUES
(1, '116353359280499235070', 'Nash Tunic', 'nashtunic@gmail.com', 'https://lh3.googleusercontent.com/a-/AFdZucq53RWyYbl5I_lAP2LH-1fRUMfy9Be17z0XAvSn=s96-c'),
(2, '105427738390413573156', 'Francis Kitema', 'fkdevelopers254@gmail.com', 'https://lh3.googleusercontent.com/a/AItbvmknd8V9vWTsA7mbNiWVqbA3VpfdA9RlcIMQ3D9d=s96-c'),
(3, '101674117167663528060', 'RMORE Collections', 'rmorecollections@gmail.com', 'https://lh3.googleusercontent.com/a/AItbvmlx-WeN1R56CpFm8sSU3MxQdOyXimOx-H5ryLlf=s96-c');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(123) NOT NULL,
  `hname` varchar(123) NOT NULL,
  `countryid` int(123) NOT NULL,
  `hotelownerid` int(123) NOT NULL,
  `hotelownername` varchar(123) NOT NULL,
  `countryname` varchar(123) NOT NULL,
  `cityid` int(123) NOT NULL,
  `cityname` varchar(123) NOT NULL,
  `price` int(133) NOT NULL,
  `description` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hname`, `countryid`, `hotelownerid`, `hotelownername`, `countryname`, `cityid`, `cityname`, `price`, `description`) VALUES
(1, 'cfghmnbvc', 1, 2, 'erthgnfdf\\', 'sdfgbnbv', 1, 'sdfgnbdsd', 0, 'sergbvdsrgbvc'),
(2, 'cfghjnbvc', 2, 2, 'sdfgb cx', 'sdrfgbv', 1, 'sdfgnbdsd', 0, 'sergbvdsrgbvc'),
(3, 'fdghnm', 1, 12, 'fdghjm,', 'dfgnm', 2, 'dsfdghgnm', 0, 'sdsfgvbcvscgsfdbvc xdsfd'),
(4, 'fdghnm', 1, 12, 'fdghjm,', 'dfgnm', 2, 'dsfdghgnm', 0, 'sdsfgvbcvscgsfdbvc xdsfd');

-- --------------------------------------------------------

--
-- Table structure for table `hotelfeatures`
--

CREATE TABLE `hotelfeatures` (
  `id` int(132) NOT NULL,
  `hotelid` int(123) NOT NULL,
  `hotelname` varchar(123) NOT NULL,
  `description` varchar(132) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotelrooms`
--

CREATE TABLE `hotelrooms` (
  `id` int(123) NOT NULL,
  `roomname` varchar(123) NOT NULL,
  `roomtypeid` int(123) NOT NULL,
  `roomtypename` varchar(123) NOT NULL,
  `hotelid` varchar(123) NOT NULL,
  `hotelname` varchar(123) NOT NULL,
  `price` int(132) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotelroomtype`
--

CREATE TABLE `hotelroomtype` (
  `id` int(123) NOT NULL,
  `roomtype` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_users`
--

CREATE TABLE `hotel_users` (
  `id` int(123) NOT NULL,
  `iid` varchar(123) NOT NULL,
  `name` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `picture` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_users`
--

INSERT INTO `hotel_users` (`id`, `iid`, `name`, `email`, `picture`, `password`) VALUES
(1, '105427738390413573156', 'Francis Kitema', 'fkdevelopers254@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJzvmySWwwuKFtzC-Wfc-u2SUocTzZTxpcsQYzBP=s96-c', '123'),
(2, '116353359280499235070', 'Nash Tunic', 'nashtunic@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GiCLt4Zemfs926MVlZYF_Kbu4sm-yyLEzPQKJ8T=s96-c', '123'),
(3, '107498427187157921186', 'Music Junkies', 'musicjunkieske@gmail.com', 'https://lh3.googleusercontent.com/a/AATXAJxxoi2ZUl6uFGNEsk0N0HWgvsc5hWdFMFqUe7TR=s96-c', '123');

-- --------------------------------------------------------

--
-- Table structure for table `packagerate`
--

CREATE TABLE `packagerate` (
  `id` int(123) NOT NULL,
  `packageid` int(123) NOT NULL,
  `paxno` int(123) NOT NULL,
  `kes` int(123) NOT NULL,
  `usd` int(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packagetype`
--

CREATE TABLE `packagetype` (
  `id` int(11) NOT NULL,
  `typename` varchar(123) NOT NULL,
  `photo` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pricerates`
--

CREATE TABLE `pricerates` (
  `id` int(123) NOT NULL,
  `month` varchar(132) NOT NULL,
  `hotelid` int(132) NOT NULL,
  `hotelname` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tourpackages`
--

CREATE TABLE `tourpackages` (
  `id` int(123) NOT NULL,
  `driverid` varchar(1233) NOT NULL,
  `packagename` varchar(123) NOT NULL,
  `kes` int(123) NOT NULL,
  `usd` int(11) NOT NULL,
  `nights` varchar(123) NOT NULL,
  `days` varchar(123) NOT NULL,
  `countryid` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `photo` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourpackages`
--

INSERT INTO `tourpackages` (`id`, `driverid`, `packagename`, `kes`, `usd`, `nights`, `days`, `countryid`, `cityid`, `description`, `photo`) VALUES
(1, '101674117167663528060', 'Kenya at a Glance Safari', 16556, 50000099, '4', '50', 0, 0, 'Your Journey At A Glance\r\n	\r\nFrom $1,680 Per Person\r\n\r\n	\r\n4 Nights /  5 Days\r\n\r\n	\r\nKenya\r\n\r\n	\r\nFamily Friendly\r\n\r\n	\r\nPrivate Tour\r\n\r\nShort on time, yet looking to experience a magical safari in Kenya? This tour, is just a sneak preview into Kenya, travelling to the most exciting and famous game parks, experiencing the rich culture and excitement of the wild savannah.\r\n\r\n\r\nITINERARY\r\n	\r\nArrive at Jomo Kenyatta Int. Airport (JKIA)\r\n\r\n.\r\n.\r\n.\r\n.\r\n.\r\nTransfer to City Hotel\r\n.\r\n.\r\n.\r\n.\r\n.\r\n\r\nDay 1: Arrival in Nairobi\r\nJAMBO – KARIBU!! It is ‘touch down’ at the Jomo Kenyatta International Airport. Representatives of Twiga Tours, your hosts in Kenya eagerly await your arrival in traditional African style – wet towels and bubbly. It is a tradition in Africa to present a gift as an expression of our joy and happiness – what better gift than an authentic (branded) safari hat and other safari essentials! Thereafter transfer to your hotel in Nairobi, Kenya’s colourful capital city to check in to your city hotel. Rest of the day or evening is spent at leisure.\r\n\r\nMeals: LDBB\r\nAccommodation: Tamarind Tree Hotel\r\n\r\n.\r\n.\r\n.\r\n.\r\n.\r\nTransfer to Lake Nakuru National Park\r\n.\r\n.\r\n.\r\n.\r\n.\r\n\r\nDay 2: Lake Nakuru National Park\r\nAfter a hearty breakfast, check out of your hotel and depart for Lake Nakuru National Park. Enroute enjoy a brief stop at the Rift Valley View Point to enjoy the breath-taking beauty of the valley below. The Great Rift Valley is part of an intra-continental ridge system that runs through Kenya from north to south. The rift escarpment road is of historical significance as it was built by Italian Prisoners of War during World War II. As you cross the valley, you pass Mount Longonut, a stratovolcano located southeast of Lake Naivasha proceed onwards towards Lake Nakuru. You arrive at the lodge to a very warm welcome, check-in then lunch.\r\n\r\nThis afternoon you depart on a game viewing. Some of the interesting places to visit include the baboon cliff, the lion hill and the Mau escarpment. The park is home to various animal species including prides of lion, Cape buffalo, waterbucks, warthogs, the endangered Rothschild giraffes, the black & white Rhino, the Burchell’s zebra, impalas, and the elusive leopard among many others. Over 300 bird species have been recorded here too. Lake Nakuru National Park is one of the best places to see the endangered black and white Rhino. Enjoy dinner and overnight at the Lodge.\r\n\r\n**Due to the rising water levels of the lake, the population of the flamingo has diminished, so the hue of pink from the flamingo is not as intense as it once was.\r\nMeals: LDBB\r\nAccommodation: Mbweha Safari Camp\r\n\r\n.\r\n.\r\n.\r\n.\r\n.\r\nTransfer to Masai Mara National Reserve\r\n.\r\n.\r\n.\r\n.\r\n.\r\n\r\nDay 3: Masai Mara National Reserve\r\nAfter breakfast depart for Kenya’s famous Masai Mara Game Reserve. You start the day venturing through the Great Rift Valley travelling to the northern most extension of the Serengeti Plains and one of the richest wildlife Ga', ''),
(2, '101674117167663528060', 'Rift Valley Trails Safari', 1680, 0, '4', '5', 0, 0, '\r\nYour Journey At A Glance\r\n	\r\nFrom $1,680 Per Person\r\n\r\n	\r\n4 Nights / 5 Days\r\n\r\n	\r\nKenya\r\n\r\n	\r\nFamily Friendly\r\n\r\n	\r\nPrivate Tour\r\n\r\nShort on time, yet looking to experience a magical safari in Kenya? This tour, is just a sneak preview into Kenya, travelling to the most exciting and famous game parks, experiencing the rich culture and excitement of the wild savannah.\r\n\r\n\r\nITINERARY\r\n	\r\nArrive at Jomo Kenyatta Int. Airport (JKIA)\r\n\r\n.\r\n.\r\n.\r\n.\r\n.\r\nTransfer to City Hotel\r\n.\r\n.\r\n.\r\n.\r\n.\r\n\r\nDay 1: Arrival in Nairobi\r\nJAMBO – KARIBU!! It is ‘touch down’ at the Jomo Kenyatta International Airport. Representatives of Twiga Tours, your hosts in Kenya eagerly await your arrival in traditional African style – wet towels and bubbly. It is a tradition in Africa to present a gift as an expression of our joy and happiness – what better gift than an authentic (branded) safari hat and other safari essentials! Thereafter transfer to your hotel in Nairobi, Kenya’s colourful capital city to check in to your city hotel. Rest of the day or evening is spent at leisure.\r\n\r\nMeals: LDBB\r\nAccommodation: Tamarind Tree Hotel\r\n\r\n.\r\n.\r\n.\r\n.\r\n.\r\nTransfer to Lake Nakuru National Park\r\n.\r\n.\r\n.\r\n.\r\n.\r\n\r\nDay 2: Lake Nakuru National Park\r\nAfter a hearty breakfast, check out of your hotel and depart for Lake Nakuru National Park. Enroute enjoy a brief stop at the Rift Valley View Point to enjoy the breath-taking beauty of the valley below. The Great Rift Valley is part of an intra-continental ridge system that runs through Kenya from north to south. The rift escarpment road is of historical significance as it was built by Italian Prisoners of War during World War II. As you cross the valley, you pass Mount Longonut, a stratovolcano located southeast of Lake Naivasha proceed onwards towards Lake Nakuru. You arrive at the lodge to a very warm welcome, check-in then lunch.\r\n\r\nThis afternoon you depart on a game viewing. Some of the interesting places to visit include the baboon cliff, the lion hill and the Mau escarpment. The park is home to various animal species including prides of lion, Cape buffalo, waterbucks, warthogs, the endangered Rothschild giraffes, the black & white Rhino, the Burchell’s zebra, impalas, and the elusive leopard among many others. Over 300 bird species have been recorded here too. Lake Nakuru National Park is one of the best places to see the endangered black and white Rhino. Enjoy dinner and overnight at the Lodge.\r\n\r\n**Due to the rising water levels of the lake, the population of the flamingo has diminished, so the hue of pink from the flamingo is not as intense as it once was.\r\nMeals: LDBB\r\nAccommodation: Mbweha Safari Camp\r\n\r\n.\r\n.\r\n.\r\n.\r\n.\r\nTransfer to Masai Mara National Reserve\r\n.\r\n.\r\n.\r\n.\r\n.\r\n\r\nDay 3: Masai Mara National Reserve\r\nAfter breakfast depart for Kenya’s famous Masai Mara Game Reserve. You start the day venturing through the Great Rift Valley travelling to the northern most extension of the Serengeti Plains and one of the richest wildlife Ga', ''),
(3, '101674117167663528060', 'Kisumu', 324, 34, '43', '43345', 0, 0, 'dfgfghnertyuijhgffghnb\r\n', ''),
(6, '116353359280499235070', 'gfyuyiop', 5, 4, '4', '4', 0, 0, 'fdgfhjkl', ''),
(7, '116353359280499235070', 'yuioui', 7678, 78, '787', '78', 0, 0, 'hkl', ''),
(8, '116353359280499235070', 'jhyykjulkijl;ok', 9809, 90, '909', '89', 0, 0, 'h kjblklmk', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(1, 'ytb rvtr', 2, 'vtretrvet', 345345, 'Petrol', 3453, 7, 'knowledge_base_bg.jpg', '20170523_145633.jpg', 'phpgurukul-1.png', 'social-icons.png', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-19 08:46:23', '2017-06-20 15:38:13'),
(2, 'Test Demoy', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam nibh. Nunc varius facilisis eros. Sed erat. In in velit quis arcu ornare laoreet. Curabitur adipiscing luctus massa. Integer ut purus ac augue commodo commodo. Nunc nec mi eu justo tempor consectetuer. Etiam vitae nisl. In dignissim lacus ut ante. Cras elit lectus, bibendum a, adipiscing vitae, commodo et, dui. Ut tincidunt tortor. Donec nonummy, enim in lacinia pulvinar, velit tellus scelerisque augue, ac posuere libero urna eget neque. Cras ipsum. Vestibulum pretium, lectus nec venenatis volutpat, purus lectus ultrices risus, a condimentum risus mi et quam. Pellentesque auctor fringilla neque. Duis eu massa ut lorem iaculis vestibulum. Maecenas facilisis elit sed justo. Quisque volutpat malesuada velit. ', 859, 'CNG', 2015, 4, 'car_755x430.png', 'looking-used-car.png', 'banner-image.jpg', 'about_services_faq_bg.jpg', '', 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, '2017-06-19 13:16:17', '2017-06-21 13:57:11'),
(3, 'Lorem ipsum', 4, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 563, 'CNG', 2012, 5, 'featured-img-3.jpg', 'dealer-logo.jpg', 'img_390x390.jpg', 'listing_img3.jpg', '', 1, 1, 1, 1, 1, 1, NULL, 1, 1, NULL, NULL, NULL, '2017-06-19 13:18:20', '2017-06-20 15:40:11'),
(4, 'Lorem ipsum', 1, 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum', 5636, 'CNG', 2012, 5, 'featured-img-3.jpg', 'featured-img-1.jpg', 'featured-img-1.jpg', 'featured-img-1.jpg', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, NULL, '2017-06-19 13:18:43', '2017-06-20 15:44:12'),
(5, 'ytb rvtr', 5, 'vtretrvet', 345345, 'Petrol', 3453, 7, 'car_755x430.png', NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2017-06-20 14:57:09', '2017-06-21 13:56:43'),
(6, 'Waganor Taxi', 8, 'Its Well matintaied', 10, 'Petrol', 2017, 4, 'Koala.jpg', 'Desert.jpg', 'Hydrangeas.jpg', 'Jellyfish.jpg', '', 1, 1, 1, NULL, 1, 1, NULL, 1, 1, 1, NULL, 1, '2017-07-05 08:04:18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbooking`
--
ALTER TABLE `carbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carbrands`
--
ALTER TABLE `carbrands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google_users`
--
ALTER TABLE `google_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelfeatures`
--
ALTER TABLE `hotelfeatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelrooms`
--
ALTER TABLE `hotelrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotelroomtype`
--
ALTER TABLE `hotelroomtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_users`
--
ALTER TABLE `hotel_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packagerate`
--
ALTER TABLE `packagerate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packagetype`
--
ALTER TABLE `packagetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricerates`
--
ALTER TABLE `pricerates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourpackages`
--
ALTER TABLE `tourpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbooking`
--
ALTER TABLE `carbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `carbrands`
--
ALTER TABLE `carbrands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `google_users`
--
ALTER TABLE `google_users`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hotelfeatures`
--
ALTER TABLE `hotelfeatures`
  MODIFY `id` int(132) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotelrooms`
--
ALTER TABLE `hotelrooms`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotelroomtype`
--
ALTER TABLE `hotelroomtype`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_users`
--
ALTER TABLE `hotel_users`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packagerate`
--
ALTER TABLE `packagerate`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packagetype`
--
ALTER TABLE `packagetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricerates`
--
ALTER TABLE `pricerates`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tourpackages`
--
ALTER TABLE `tourpackages`
  MODIFY `id` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
