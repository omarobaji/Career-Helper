-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 08:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cvdb`
--

CREATE TABLE `cvdb` (
  `skill2` text NOT NULL,
  `Rating` varchar(20) NOT NULL,
  `Rating1` varchar(20) NOT NULL,
  `Rating2` varchar(20) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `major` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `school_name` varchar(40) NOT NULL,
  `degree` text NOT NULL,
  `graduation_date` date NOT NULL,
  `exp` text NOT NULL,
  `exp1` text NOT NULL,
  `exp2` text NOT NULL,
  `des` text NOT NULL,
  `des1` text NOT NULL,
  `des2` text NOT NULL,
  `skill` text NOT NULL,
  `skill1` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cvdb`
--

INSERT INTO `cvdb` (`skill2`, `Rating`, `Rating1`, `Rating2`, `full_name`, `experience`, `faculty`, `major`, `city`, `phone`, `email`, `school_name`, `degree`, `graduation_date`, `exp`, `exp1`, `exp2`, `des`, `des1`, `des2`, `skill`, `skill1`) VALUES
('Fast Learner', ' Very Good', ' Excellent', ' Good', 'Muhammad Zalzaly', '0-3 years', 'Faculty of Business, Economics and Accounting', 'Marketing', 'Al-Beqaa', '03 003 283', 'mohammadzalzaly@hotmail.com', 'Heritage College', 'Bachelors in Marketing', '2015-12-05', '3 years at Google ', '', '', 'Managing marketing for google in the Middle East', '', '', 'Commitment', 'Communication Skills'),
('Patience', ' Very Good', ' Good', ' Excellent', 'Ahmad Al-Zein', '0-3 years', 'Faculty of science', 'Computer Science', 'Beirut', '03 313 452', 'zeinahmad@outlook.com', 'Bayader High School/ Beirut Arab Univers', 'Bachelors in computer science', '2017-01-06', '2 year internship at TechHive', '', '', 'Mainly working on Python skills', '', '', 'Python ', 'PHP'),
('Friendly', ' Very Good', ' Good', ' Excellent', 'George Elias', '3-5 years', 'Faculty of Engineering', 'Mechanical Engineering', 'Beirut', '78-2340344', 'georgeelias@hotmail.com', 'Lycee national', 'Masters in Mechanical Engineering', '2009-02-03', '2 years at aramco', '', '', 'Site training', '', '', 'Good mechanical skills', 'Responsive'),
('Blue Prints', 'Very Good', 'Good', 'Very Good', 'Hussein Jaafar', '0-3', 'Engineering', 'Civil Engineering', 'Aitet', '76 483 349', 'HuseinJaffar@hotmail.com', 'Beirut Arab University', 'Bachelors in Mechanical engineer', '0000-00-00', 'Internship at Aramco', '', '', '10 months', '', '', 'Fast Learner', 'Drawing skills'),
('Front End', 'Very Good', 'Good', 'Very Good', 'Ali Bennawi', '0-3', 'Science', 'Computer Science', 'Beirut', '76 932 192', 'BennnnawiAli@hotmail.com', 'Beirut Arab University', 'Bachelors in Computer Science', '0000-00-00', 'Internship at google', '', '', '6 months', '', '', 'Software Engineer', 'Data Structures'),
('Patience', ' Very Good', ' Very Good', ' Excellent', 'Dima Shaalan', '0-3 years', 'Faculty of Engineering', 'Architecture', 'Batroun', '78 384 127', 'dimam@hotmail.com', 'American University of Beirut', 'Bachelors in Architecture', '2018-06-03', 'Internship for 6 months', '', '', 'Assistant', '', '', 'Drawing skills', 'Responsive'),
('Fast Learner', ' Very Good', ' Good', ' Excellent', 'Omar Bannan', '0-3 years', 'Faculty of science', 'Computer Science', 'beirut', '03 387 234', 'bannnan@hotmail.com', 'Lebanese University', 'Bachelors in computer science', '2018-06-03', 'Internship at a startup', '', '', 'Coworker ', '', '', 'C++', 'Data Structures'),
('Fast paced', ' Very Good', ' Very Good', ' Excellent', 'Bilal Al-Fattah', '0-3 years', 'Faculty of science', 'Biology', 'Tripoli', '78-434 323', 'billo@outlook.com', 'Beirut Arab University', 'Bachelors in Biology', '2018-04-02', 'Lab instructor', '', '', 'Helping out in labs', '', '', 'Analyzing skills', 'Microbiologist'),
('Java Programming', 'Very Good', 'Good', 'Very Good', 'Taha Bilal', '0-3', 'Engineering', 'Computer Engineer', 'Beirut', '03 494 273', 'TahaBilal@outlook.com', 'Beirut Arab University', 'Bachelors in Computer Engineer', '0000-00-00', 'Internship', '', '', '6 months', '', '', 'Hardware mechanics', 'Technical'),
('Technical Skills', 'Very Good', 'Good', 'Very Good', 'Fatima Khatoun', '0-3', 'Engineering', 'Architecture', 'Tyre', '03 344 943', 'kkkhatoun@outlook.com', 'Notre Dame University', 'Bachelors in Architecture', '0000-00-00', 'Internship', '', '', '1 year', '', '', 'Drawing skills', 'Dexterity'),
('Java', 'Very Good', 'Good', 'Very Good', 'Bill Gates', '0-3', 'Science', 'Computer Science', 'Beirut', '78 123 342', 'Microsoft@hotmail.com', 'Lebanese University', 'Bachelors in Computer Engineer', '0000-00-00', 'Owner of Microsoft', '', '', 'Small startup ', '', '', 'Business Eye', 'Technical'),
('Persuasive', 'Very Good', 'Good', 'Very Good', 'Zeina akar', '0-3', 'Business', 'Marketing', 'Akkar', '03 944 284', 'akkkar@outlook.com', 'Beirut Arab University', 'Bachelors in Marketing', '0000-00-00', 'Internship at MedBank', '', '', '10 months', '', '', 'Talkative', 'Technical'),
('Drawing skills', 'Very Good', 'Good', 'Very Good', 'Haifa Wehbi', '0-3', 'Engineering', 'Architecture', 'Beirut', '03 485 485', 'HAifaweehbi@outlook.com', 'Lebanese American University', 'Bachelors in Architecture', '0000-00-00', 'Internship ', '', '', '1 year', '', '', 'Technical', 'Fast Paced'),
('Fast Paced', 'Very Good', 'Good', 'Very Good', 'Badr Ghumrawi', '0-3', 'Science', 'English Literature', 'Beirut', '78 842 273', 'Badrrrr@outlook.com', 'Lebanese American University', 'Bachelors in English Literature', '0000-00-00', 'Teachers Assistant', '', '', '1 year', '', '', 'Ability to teach', 'Ability to learn');

-- --------------------------------------------------------

--
-- Table structure for table `employeetab`
--

CREATE TABLE `employeetab` (
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `City` text NOT NULL,
  `PhoneNumber` text NOT NULL,
  `Major` text NOT NULL,
  `Faculty` text NOT NULL,
  `SchoolName` text NOT NULL,
  `GradDate` int(11) NOT NULL,
  `Skills` text NOT NULL,
  `Skills1` text NOT NULL,
  `Skills2` text NOT NULL,
  `Description` text NOT NULL,
  `Description1` text NOT NULL,
  `Description2` text NOT NULL,
  `Experience` text NOT NULL,
  `Experience1` text NOT NULL,
  `Rating` text NOT NULL,
  `Rating1` text NOT NULL,
  `Rating2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeetab`
--

INSERT INTO `employeetab` (`FullName`, `Email`, `City`, `PhoneNumber`, `Major`, `Faculty`, `SchoolName`, `GradDate`, `Skills`, `Skills1`, `Skills2`, `Description`, `Description1`, `Description2`, `Experience`, `Experience1`, `Rating`, `Rating1`, `Rating2`) VALUES
('Bill Gates', 'BillGates@hotmail.com', '', '2147483647', 'Computer Science', '', '', 0, 'Python , JavaScript', '', '', 'Optimistic and Very Energetic', '', '', '', '', '', '', ''),
('Andrew Politsci', 'Andrew23@hotmail.com', '', '44', 'Mechanical Engineer', '', '', 0, 'Structural Analysis , Industry Skills', '', '', 'British young lad thats good at teamwork and creativity', '', '', '', '', '', '', ''),
('George Elias', 'GeorgeElias@hotmail.com', '', '+961 208 489', 'Architecture', '', '', 0, 'Good interior designing', '', '', 'Hardwork is my middle name', '', '', '', '', '', '', ''),
('Muhammad Zalzaly', 'ZalzalyMuhammah@hotmail.com', '', '+961 483 043', 'Marketing', '', '', 0, 'Good communicating skills', '', '', 'Young motivated fresh graduate!', '', '', '', '', '', '', ''),
('Evan Kruz ', 'EvanKruz@hotmail.com', '', '+44 23 208 489', 'Biology', '', '', 0, 'Major Biology knowledge and good Teaching skills', '', '', 'Patience is key', '', '', '', '', '', '', ''),
('Jana Berjawi', 'BerjawiJana@icloud.com', '', '+966 43045 2345', 'Fashion Design', '', '', 0, 'Professional Knitting ', '', '', 'I have a great eye for fashion, Graduated with a 4.00 GPA ', '', '', '', '', '', '', ''),
('Ahmad Al-Zein', 'AhmadZein@gmail.com', '', '+961 938 943', 'Computer Science', '', '', 0, 'Java and Python coder', '', '', 'Great technical skills, Very patient', '', '', '', '', '', '', ''),
('Bader Ghumrawi', 'Badr123Ghum@live.com', '', '+1 (2) 2349 489', 'English', '', '', 0, 'Great English language, Great education skills ', '', '', '4.0 GPA throughout university, Graduated from Ohio State University', '', '', '', '', '', '', ''),
('Fatima Mneimneh', 'Fattouma@outlook.com', '', '+961 038 581', 'Computer Science', '', '', 0, 'Data structures, C++', '', '', 'Motivated and ready for hard work !', '', '', '', '', '', '', ''),
('Charif Yassine ', 'Charifoo@hotmail.com', '', '+961 234 191', 'Architecture', '', '', 0, 'Major Drawing skills', '', '', 'Young fresh graduate looking for a good pay', '', '', '', '', '', '', ''),
('Zeina Al-Nemrawi', 'Zeinaaa12@icloud.com', '', '+961 232 934', 'Architecture', '', '', 0, 'Designing skills, Good verbal communication', '', '', '3.00 GPA throughout the American University of Beirut', '', '', '', '', '', '', ''),
('George Elias', 'GeorgeElias@hotmail.com', '', '+961 208 489', 'Architecture', '', '', 0, 'Good interior designing', 'Hardwork is my middle name', 'skills2', 'des', 'des1', 'des2', 'exp', 'exp1', '', '', ''),
('', '', 'Beirut', '', '', 'Architecture', 'Heritage College', 2019, '', 'skills1', '', '', '', '', '', '', '', '', ''),
('Nabih berre', 'Berri@hotmail.com', '2019', '', 'Biology', 'Science', 'skills1', 0, '3akrate', 'Science', 'lazzi2 tize 3al kerse', '7araket amal', 'tize mlaz2a', '30 sene 3al kerse', 'exp1', 'Beirut', '', '', ''),
('Nabih berre', 'Berri@hotmail.com', 'Beirut', '+961 313 313', 'Biology', 'Science', 'Heritage College', 2019, '', 'skills1', '3akrate', 'lazzi2 tize 3al kerse', '7araket amal', 'tize mlaz2a', '30 sene 3al kerse', 'exp1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `NameUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usersignup`
--

CREATE TABLE `usersignup` (
  `ID` int(11) NOT NULL,
  `FullName` text NOT NULL,
  `Email` text NOT NULL,
  `Choices` text NOT NULL,
  `Password` text NOT NULL,
  `ConfirmPassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usersignup`
--

INSERT INTO `usersignup` (`ID`, `FullName`, `Email`, `Choices`, `Password`, `ConfirmPassword`) VALUES
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, 'qwer', 'o.obaji@live.com', 'Employer', 'qwer', 'qwer'),
(0, 'qwer', 'o.obaji@live.com', 'Employer', 'qwer', 'qwer'),
(0, 'qwer', 'o.obaji@live.com', 'Employer', 'qwer', 'qwer'),
(0, 'qwer', 'o.obaji@live.com', 'Employer', 'qwer', 'qwer'),
(0, 'qwer', 'o.obaji@live.com', 'Employer', 'qwer', 'qwer'),
(0, 'akiik', 'a0a0@gmail.com', 'Employee', 'qwer', 'qwer'),
(0, 'akiik', 'a0a0@gmail.com', 'Employee', 'qwer', 'qwer'),
(0, 'qwer', 'qwrq@mra.com', 'Employee', 'qwer', 'qwer'),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, 'Ali Obaji', 'AliObaji@hotmail.com', 'Employee', 'alialiali', 'alialiali'),
(0, '', '', '', '', ''),
(0, 'qwer', 'qwrq@mra.com', 'Employer', 'qwert', 'qwert'),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, '', '', '', '', ''),
(0, 'Omar Obaji', 'o.obaji@live.com', 'Employer', 'qwer', 'qwer'),
(0, 'Omar Obaji', 'o.obaji@live.com', 'Employee', '123', '123'),
(0, 'qwr', 'qwerqwerqwrqw@hotmail.com', 'Employer', 'qwer', 'qwer'),
(0, 'qwr', 'qwerqwerqwrqw@hotmail.com', 'Employer', 'qwer', 'qwer'),
(0, 'qwr', 'qwerqwerqwrqw@hotmail.com', 'Employer', 'qwer', 'qwer'),
(0, 'Omar Obaji', 'o.obaji@live.com', 'Employer', 'qwerr', 'qwerr'),
(0, 'Omar Obaji', 'o.obaji@live.com', 'Employer', 'pop', 'pop'),
(0, 'Ramadan Mubarak', 'o.obaji@live.com', 'Employee', 'Ramadan', 'Ramadan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
