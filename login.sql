-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2024 at 03:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `full_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `age` varchar(2) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `appointment_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`full_name`, `email`, `phone`, `age`, `blood_type`, `appointment_date`) VALUES
('Kamlesh Kumar', 'kamlesh914213@gmail.com', '0914213590', '23', 'A+', '2022-12-12'),
('Sonu Kumar', 'sonu914213@gmail.com', '9142135907', '23', 'B-', '2024-02-01'),
('Manon Kumar', 'manoj914213@gmail.com', '0142135907', '25', 'A+', '2024-02-02'),
('Gopal Kumar', 'gopal914213@gmail.com', '9142135907', '25', 'A+', '2024-03-04'),
('Sunil Kumar', 'sunil914213@gmail.com', '0142135907', '34', 'A+', '2024-02-03'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', '0914213590', '25', 'A+', '2024-02-09'),
('Ravi Kumar', 'ravi914213@gmail.com', '0142135907', '27', 'A+', '2023-02-04'),
('Suman Kumar', 'suman914213@gmail.com', '0914213590', '23', 'A+', '2024-12-02'),
('ROhan Kumar', 'rohan914213@gmail.com', '0914213590', '24', 'A+', '2023-02-03'),
('Komal Kumari', 'komalkumari13@gmail.com', '0142135907', '20', 'A+', '2024-02-04'),
('Kajal Kumari', 'kajalkumari13@gmail.com', '0914213590', '22', 'A+', '2020-02-04'),
('Rishi Kumar', 'Rishi4213@gmail.com', '0914213597', '19', 'A+', '2024-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `contact_me`
--

CREATE TABLE `contact_me` (
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_me`
--

INSERT INTO `contact_me` (`name`, `mobile`, `email`, `message`) VALUES
('Kamlesh Kumar', '0914213590', 'kamlesh914213@gmail.com', 'i am from jharkhand.'),
('manoj kumar', '9142135907', 'manoj914213@gmail.com', 'i am from jharkhand.'),
('Akriti', '9876543234', 'akriti123@gmail.com', 'i am bad girl.'),
('gopal Kumar', '8787654363', 'gopal914213@gmail.com', 'jharkhand'),
('Pravin kumar', '7867564356', 'pravin132@gmail.com', 'chatra'),
('Sunil Kumar', '0914213590', 'sunil914213@gmail.com', 'Bokaro'),
('piyush Kumar', '9142135907', 'piyush914213@gmail.com', 'Patna'),
('Komal Sharma', '9142135907', 'komalsharma914213@gmail.com', 'Koderma'),
('Dileep Kumar', '9142135907', 'dileep914213@gmail.com', 'chatra'),
('pappuKumar', '8876535907', 'pappu4213@gmail.com', 'Dibha'),
('YogendraKumar', '8765435907', 'yogendra14213@gmail.com', 'Tikar'),
('suman kumar', '9142135907', 'kamlesh914213@gmail.com', 'i need 5 unit blood o positive so i requesr to you please provide me thank you');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(2) NOT NULL,
  `blood_type` varchar(3) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`name`, `email`, `age`, `blood_type`, `phone`, `address`) VALUES
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 23, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 23, 'A+', 914213507, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 23, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 56, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('sachin Kumar', 'kamlesh914213@gmail.com', 78, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Ravi Kumar', 'kamlesh914213@gmail.com', 56, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Pawan Kumar', 'kamlesh914213@gmail.com', 12, 'A+', 914213590, 'Delhi\r\n'),
('prashant  Kumar', 'kamlesh914213@gmail.com', 23, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 24, 'A+', 914213590, 'Noida '),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 24, 'A+', 914213590, 'Noida '),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 24, 'A+', 914213590, 'Noida '),
('subhash Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 914213597, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 914213597, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 914213597, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 23, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 56, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 56, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Jaya Gupta', 'jayagupta456@gmail.com', 22, 'A+', 2147483647, 'Pitij , chatra (Jharkhand)'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 914213590, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Manoj Kumar', 'manoj123@gmail.com', 22, 'A+', 2147483647, 'kasiyadih,Tikar,Chatra(825401),jharkhand'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 23, 'A+', 2147483647, 'Chatra,Jharkhand\r\n'),
('Sunil Kumar', 'sunilkumar6200@gmail.com', 24, 'A+', 2147483647, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 22, 'A+', 2147483647, 'Chatra,Jharkhand'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 45, 'A+', 914213597, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Kamlesh Kumar', 'kamlesh914213@gmail.com', 34, 'A+', 2147483647, 'Vill-Obra,Post-Tikar,Pos+Dis-Chatra'),
('Manoj Kumar', 'manoj213@gmail.com', 22, 'A+', 2147483647, 'Chatra ,Jharkhand'),
('Sonu Kumar', 'sonu14213@gmail.com', 34, 'A+', 2147483647, 'hzb\r\n'),
('Shweta Yadav', 'Shweta809256@gmail.com', 22, 'A+', 2147483647, 'Dariyatu, Chatra, Jharkhand');

-- --------------------------------------------------------

--
-- Table structure for table `users_signup`
--

CREATE TABLE `users_signup` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_signup`
--

INSERT INTO `users_signup` (`username`, `email`, `password`) VALUES
('kamlesh kumar', 'kamlesh914213@gmail.com', 'kamlesh@123'),
('komal shram', 'komalsharma25332@gmail.com', 'komal@123'),
('komal_sharma7788 ', 'komalsharma123@gmail.com', 'komal@123'),
('Jaya Gupta', 'jayagupta456@gmail.com', 'jaya@123'),
('Akriti ', 'akriti123@gmail.com', 'akriti@123'),
('Manoj Kumar', 'manoj123@gmail.com', 'manoj@123'),
('Shweta yadav', 'Shweta809256@gmail.com', 'shweta@123');

-- --------------------------------------------------------

--
-- Table structure for table `your_table_name`
--

CREATE TABLE `your_table_name` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `your_table_name`
--
ALTER TABLE `your_table_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `your_table_name`
--
ALTER TABLE `your_table_name`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
