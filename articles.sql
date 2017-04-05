-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: Apr 05, 2017 at 09:52 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image-path` text NOT NULL,
  `author` text NOT NULL,
  `author-link` text,
  `link` text,
  `link-name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `image-path`, `author`, `author-link`, `link`, `link-name`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ante diam. In dapibus mi augue, consectetur finibus nisi rhoncus at. Quisque porta arcu quis orci accumsan, sit amet rhoncus urna ultricies. Pellentesque lacinia turpis vitae odio posuere tincidunt. Vivamus tristique urna nec nibh cursus, id consectetur eros imperdiet. Aliquam erat volutpat. Maecenas lacinia sit amet diam eu pretium.\r\n\r\nNunc sed diam vel quam posuere eleifend. Phasellus ornare pellentesque massa, fermentum molestie augue fermentum in. Phasellus malesuada mauris et viverra dictum. Aliquam vitae ante vitae mi vehicula aliquet. Praesent varius ut est sit amet gravida. Donec nibh nunc, condimentum vitae mauris in, iaculis pharetra lacus. Nunc lacinia accumsan venenatis.\r\n\r\nPellentesque non interdum tellus. Mauris a ultricies lorem, ac pretium tellus. Sed maximus dolor a porttitor malesuada. Ut faucibus tortor lacinia porttitor scelerisque. Praesent consectetur volutpat nisi, a lobortis velit tempus sit amet. Nam maximus id urna sed suscipit. Pellentesque imperdiet auctor tortor. Suspendisse blandit, neque vitae tempus gravida, arcu risus bibendum mi, sit amet ultrices mauris dolor sit amet enim.', 'https://upload.wikimedia.org/wikipedia/commons/2/23/CiceroBust.jpg', 'Cicero', 'https://no.wikipedia.org/wiki/Marcus_Tullius_Cicero', 'http://no.lipsum.com/', 'Lorem Ipsum generator'),
(2, '(Nummer) Artikkel', 'Cable bills in America have been on the rise, with the average household spending $64.41 a month or about $768 a year. The thing is, there are many cheaper alternatives available these days that will provide you with enough entertainment options for the entire family. You can try a third-party service such as Netflix, which costs $9.99 a month, Amazon Prime at $99 a year or Hulu Plus, which costs $7.99 a month. If you prefer to stick to television, but usually only watch the same few channels, you can still lower costs by buying a package of channels. Sling TV does a base package called “The Best of Live TV,” which is $20 a month and includes 19 of the most popular channels. Add-on packs are an extra $5 each per month, so you can tailor it to your family’s needs and still save money.', 'Einstein.jpg', 'Kenneth Saccky', 'http://www.facebook.com/saccky?fref=ts', 'http://www.harvard.edu', 'HARVARD UNIVERSITY / THE BEST SCHOOL / FEBRUARY 21, 2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
