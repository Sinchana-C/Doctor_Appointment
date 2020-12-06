-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 08:08 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctor_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tab`
--

CREATE TABLE IF NOT EXISTS `admin_tab` (
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tab`
--

INSERT INTO `admin_tab` (`email`, `password`) VALUES
('chandan.cshekar@gmail.com', 'Dragonkings'),
('jayanthsjai@gmail.com', 'jayanth'),
('karthik@gmail.com', 'karthik'),
('krashnat24@gmail.com', 'krashna'),
('support4sft@eccube.in', 'balu');

-- --------------------------------------------------------

--
-- Table structure for table `app_tab`
--

CREATE TABLE IF NOT EXISTS `app_tab` (
  `appid` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `docid` varchar(10) NOT NULL,
  `dname` varchar(30) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `appday` varchar(30) NOT NULL,
  `apptime` varchar(30) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_tab`
--

INSERT INTO `app_tab` (`appid`, `name`, `email`, `docid`, `dname`, `venue`, `appdate`, `appday`, `apptime`, `hospital`) VALUES
('10164', 'krishna', 'krishna@gmail.com', '8586', 'Dr.chandan', '#98/22,mysore road,Bangalore', '2014-04-30', 'Wednesday', '2:30pm to 3:00pm', 'Bhavani'),
('10611', 'karthik', 'karthik@gmail.com', '1245', 'Dr.Praveen Bhosle', 'Sri satyam techno park', '2014-02-25', 'Tuesday', '9:00am to 9:30am', 'Bhavani hospital'),
('12878', 'mohan', 'mohan@gmail.com', '30181', 'Dr.Karthik', 'hyd', '2016-03-04', 'Friday', '12:00am to 12:30am', 'Apollo '),
('13834', 'nandy', 'support4php@eccube.in', '30181', 'Dr.Karthik', 'hyd', '2016-03-04', 'Friday', '12:30am to 1:00am', 'Apollo '),
('15193', 'chandu', 'chandu@gmail.com', '15036', 'ashok', 'bangalore', '2016-03-04', 'Friday', '10:30am to 11:00am', 'jayadeva'),
('16664', 'krishna', 'krishna@gmail.com', '10699', 'Dr.mohan', 'mumbai', '2014-03-18', 'Tuesday', '1:00pm to 1:30pm', 'victoria hospital'),
('17354', 'chandu', 'chandu@gmail.com', '8586', 'Dr.chandan', '#98/22,mysore road,Bangalore', '2014-04-26', 'Saturday', '2:00pm to 2:30pm', 'Bhavani'),
('19295', 'prathap', 'support4php@eccube.in', '15036', 'ashok', 'bangalore', '2016-03-04', 'Friday', '10:00am to 10:30am', 'jayadeva'),
('22381', 'satish', 'satish@yahoo.com', '8586', 'Dr.chandan', '#98/22,mysore road,Bangalore', '2014-04-30', 'Wednesday', '3:00pm to 3:30pm', 'Bhavani'),
('2288', 'prathap', 'prathap@gmail.com', '30181', 'Dr.Karthik', 'hyd', '2016-03-04', 'Friday', '1:00am to 1:30am', 'Apollo '),
('24431', 'prabhu', 'prabhu@gmail.com', '30181', 'Dr.Karthik', 'hyd', '2016-03-03', 'Thursday', '12:00am to 12:30am', 'Apollo '),
('24634', 'karthik', 'karthik@gmail.com', '8586', 'Dr.chandan', '#98/22,mysore road,Bangalore', '2014-04-29', 'Tuesday', '1:30pm to 2:00pm', 'Bhavani'),
('32051', 'manju', 'manju@gmail.com', '1944', 'Dr.Praveen', '#45/2, 4th block  jaynagar Bangalore', '2016-03-04', 'Friday', '12:30pm to 1:00pm', 'Bhavani hospital'),
('3207', 'jayanth', 'jayanthsjai@gmail.com', '8586', 'Dr.chandan', '#98/22,mysore road,Bangalore', '2014-04-30', 'Wednesday', '1:00pm to 1:30pm', 'Bhavani'),
('5192', 'satish', 'satish@yahoo.com', '1944', 'Dr.Praveen', '#45/2, 4th block  jaynagar Bangalore', '2014-02-24', 'Tuesday', '1:00pm to 1:30pm', 'Bhavani hospital'),
('7262', 'datta', 'datta@gmail.com', '8586', 'Dr.chandan', '#98/22,mysore road,Bangalore', '2014-04-28', 'Monday', '1:30pm to 2:00pm', 'Bhavani'),
('9520', 'raja', 'raja@gmail.com', '25203', 'aaa', 'aaa #90/', '2016-03-07', 'Monday', '8:00am to 8:30am', 'aaa'),
('9845', 'zubaer', 'Zubaer@gmail.com', '15036', 'ashok', 'bangalore', '2016-03-02', 'Wednesday', '10:30am to 11:00am', 'jayadeva');

-- --------------------------------------------------------

--
-- Table structure for table `doc_tab`
--

CREATE TABLE IF NOT EXISTS `doc_tab` (
  `docid` varchar(10) NOT NULL,
  `dname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `gender` char(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `hospital` varchar(30) NOT NULL,
  `availtime` varchar(30) NOT NULL,
  `availdays` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`docid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc_tab`
--

INSERT INTO `doc_tab` (`docid`, `dname`, `email`, `specialist`, `qualification`, `gender`, `address`, `phone`, `hospital`, `availtime`, `availdays`, `password`) VALUES
('10699', 'Dr.mohan', 'mohan21@gmail.com', 'neurologist', 'MBBS,MD', 'male', 'mumbai', 8677878686, 'victoria hospital', '9:00am to 3:30pm', 'Tuesday,Wednesday,Thursday,Friday', 'mohan'),
('1245', 'Dr.Praveen Bhosle', 'praveen.bhosle5@gmail.com', 'orthapaedic', 'MBBS,MD', 'male', 'Sri satyam techno park', 9147483647, 'Bhavani hospital', '9:00am to 1:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'praveen'),
('1246', 'Dr.vishnu', 'vishnu@gmail.com', 'skin', 'MBBS', 'male', '#85/2, santi nagar Bangalore', 7147499678, 'apollo hospital', '1:00pm to 1:30pm', 'Sunday', '123'),
('1247', 'Dr.krishna', 'krishna@gmail.com', 'cardiologist', 'MBBS', 'male', '#45/2, 4th block  jaynagar Bangalore', 7147483647, 'Sagar hospital', '1:30pm to 2:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'krishna'),
('15036', 'ashok', 'ashok@gamil.com', 'physician', 'MBBS', 'male', 'bangalore', 8792376499, 'jayadeva', '10:00am to 6:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'ashok'),
('1944', 'Dr.Praveen', 'praveen@gmail.com', 'physician', 'M.Pharm', 'male', '#45/2, 4th block  jaynagar Bangalore', 8976895467, 'Bhavani hospital', '12:30pm to 4:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', 'praveen'),
('21739', 'Dr.chethan', 'chethan@gmail.com', 'general surgeon', 'MBBS', 'male', 'Bangalore', 8888888888, 'apollo', '9:00am to 8:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'chethan'),
('25203', 'aaa', 'aaa@gmail.com', 'skin', 'MBBS', 'male', 'aaa #90/', 7654325778, 'aaa', '8:00am to 3:30pm', 'Monday,Wednesday', '12345678'),
('28093', 'Dr.Vijay', 'vijay54pa@gmail.com', 'dentist', 'BDS,MBBS,MD', 'male', 'Dapodi,Pune', 7796678531, 'Moraya Hospital', '1:30pm to 9:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'vijay'),
('28948', 'Dr.Mohan', 'mohan@gmail.com', 'dentist', 'BDS', 'male', 'Filmnagar,Hyderabad', 8739485760, 'Apollo hospital', '11:30am to 6:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'mohan'),
('30181', 'Dr.Karthik', 'karthikrajblog@gmail.com', 'skin', 'MBBS', 'male', 'hyd', 8861149320, 'Apollo ', '12:00am to 4:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday', 'karthik'),
('31898', 'Dr.mahesh', 'mahesh@gmail.com', 'physician', 'MBBS,MD', 'male', '#23/4, Hanumanthnagar Bangalore', 8934789653, 'KR hospital', '8:00am to 4:30pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'mahesh'),
('5317', 'dr.;praveen', 'praveen123@gmail.com', 'neurologist', 'MMBS', 'male', 'VIJayanagar', 9345712334, 'bgs', '8:30am to 9:00am', 'Wednesday,Sunday', 'praveen'),
('7336', 'Dr.Prabhakar', 'prabhakar123@gmail.com', 'psychiatrist', 'MBBS,MD', 'male', 'MiraRoad,Mumbai', 7898746748, 'bhaktivedant hospital', '8:00am to 4:30pm', 'Tuesday,Wednesday,Thursday,Friday', 'prabhakar'),
('7785', 'thousif', 'thousif@gmail.com', 'skin', 'MBBS', 'male', 'bangalore', 8792376540, 'aswad hospital', '5:00am to 4:30am', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'thousif'),
('8586', 'Dr.chandan', 'chandan@gmail.com', 'general surgeon', 'MBBS,MD', 'male', '#98/22,mysore road,Bangalore', 9087707687, 'Bhavani', '12:30pm to 6:00pm', 'Monday,Tuesday,Wednesday,Friday,Saturday', 'chandan'),
('9712', 'Dr.jaleendarnath', 'jake.srimale2@gmail.com', 'children', 'M.Pharm', 'male', 'bidar', 8147607514, 'apollo hospital', '9:00am to 1:00pm', 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday', 'jalee');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tab`
--

CREATE TABLE IF NOT EXISTS `feedback_tab` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_tab`
--

INSERT INTO `feedback_tab` (`name`, `email`, `comment`) VALUES
('krishna', 'krishna@gmail.com', 'the website is good i like it'),
('satish', 'satish@yahoo.com', 'hi,i am satish'),
('datta', 'datta@gmail.com', 'hello i am datta i have register into your website'),
('datta', 'datta@gmail.com', 'hello i am datta i have register into your website'),
('satish', 'satish@yahoo.com', 'i am satish'),
('rahul', 'rahul@gmail.com', 'hi...................'),
('krashna', 'krashnat24@gmail.com', 'hi ...........'),
('jayanth', 'jayanth@gmail.com', 'hi i am jayanth'),
('akshay', 'akshaypr04@gmail.com', 'excellent.........................'),
('aas', 'aa', 'a'),
('krishna', 'krishna@gmail.com', 'kkkkkkkkkk'),
('krishna', 'krishna@gmail.com', 'krishna..........................'),
('Chandan', 'chandan.cshekar@gmail.com', 'Hey this is a nice website'),
('Chandru', 'chandru@gmail.com', 'cool'),
('sam', 'sam@gmail.com', 'super'),
('Chandu', 'chandu@gmail.com', 'Wonderful'),
('karthik', 'karthik@gmail.com', 'vhhf'),
('nandeesh', 'support4php@eccube.in', 'xsdsdsd'),
('nandeesh', 'support4php@eccube.in', 'good'),
('man', 'mama', 'ssss'),
('nandeesh', 'support4php@eccube.in', 'good'),
('prathap', 'prathap@gmail.com', 'good'),
('nandeesh', 'support4php@eccube.in', 'fdfdf'),
('manju', 'manju@gmail.com', 'good'),
('nandeesh', 'nandynandeesh78@gmail.com', 'sadsd');

-- --------------------------------------------------------

--
-- Table structure for table `pay_tab`
--

CREATE TABLE IF NOT EXISTS `pay_tab` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `docid` varchar(10) NOT NULL,
  `appid` varchar(10) NOT NULL,
  `amount` int(5) NOT NULL,
  `cardno` bigint(16) NOT NULL,
  `cardtype` varchar(15) NOT NULL,
  PRIMARY KEY (`appid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay_tab`
--

INSERT INTO `pay_tab` (`name`, `email`, `docid`, `appid`, `amount`, `cardno`, `cardtype`) VALUES
('krishna', 'krishna@gmail.com', '8586', '10164', 100, 8888999977776666, 'visa'),
('mohan', 'mohan@gmail.com', '30181', '12878', 100, 4343434334343434, 'visa'),
('nandy', 'support4php@eccube.in', '30181', '13834', 100, 4343434334343434, 'visa'),
('chandu', 'chandu@gmail.com', '15036', '15193', 100, 4343343434343344, 'visa'),
('chandu', 'chandu@gmail.com', '8586', '17354', 100, 9090808070706060, 'master card'),
('prathap', 'support4php@eccube.in', '15036', '19295', 100, 3444343434443434, 'visa'),
('satish', 'satish@yahoo.com', '8586', '22381', 100, 7878878778788787, 'master card'),
('prathap', 'prathap@gmail.com', '30181', '2288', 100, 3232232323233232, 'visa'),
('prabhu', 'prabhu@gmail.com', '30181', '24431', 100, 3434343434343434, 'visa'),
('karthik', 'karthik@gmail.com', '8586', '24634', 100, 8793908753487589, 'master card'),
('manju', 'manju@gmail.com', '1944', '32051', 100, 3433343324343434, 'visa'),
('jayanth', 'jayanthsjai@gmail.com', '8586', '3207', 100, 4444333399998888, 'master card'),
('satish', 'satish@yahoo.com', '1944', '5192', 100, 2222333322222345, 'visa'),
('jayanth', 'jayanthsjai@gmail.com', '28093', '7215', 100, 123433335, '0'),
('datta', 'datta@gmail.com', '8586', '7262', 100, 7776888799989990, 'visa'),
('raja', 'raja@gmail.com', '25203', '9520', 100, 4444777723234444, 'master card'),
('krishna', 'krishna@gmail.com', '1247', '9789', 100, 1111122213411212, 'visa'),
('zubaer', 'Zubaer@gmail.com', '15036', '9845', 100, 3443343434343434, 'visa');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg_tab`
--

CREATE TABLE IF NOT EXISTS `user_reg_tab` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg_tab`
--

INSERT INTO `user_reg_tab` (`id`, `name`, `email`, `gender`, `age`, `dob`, `phone`, `password`) VALUES
(1, 'nandeesh', 'support4php@eccube.in', 'male', '22', '1992-05-11', '9566983225', 'nandy456'),
(2, 'prathap', 'prathap@gmail.com', 'male', '23', '1985-03-14', '8855522233', 'prathap');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
