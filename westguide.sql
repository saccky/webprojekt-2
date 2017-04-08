-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: Apr 08, 2017 at 04:39 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `westguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `article-title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `article-body` text CHARACTER SET utf8 NOT NULL,
  `article-image-path` text CHARACTER SET utf8,
  `article-author` text CHARACTER SET utf8 NOT NULL,
  `article-author-link` text CHARACTER SET utf8,
  `article-link` text CHARACTER SET utf8,
  `article-link-name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `article-event-fk` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article-title`, `article-body`, `article-image-path`, `article-author`, `article-author-link`, `article-link`, `article-link-name`, `article-event-fk`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ante diam. In dapibus mi augue, consectetur finibus nisi rhoncus at. Quisque porta arcu quis orci accumsan, sit amet rhoncus urna ultricies. Pellentesque lacinia turpis vitae odio posuere tincidunt. Vivamus tristique urna nec nibh cursus, id consectetur eros imperdiet. Aliquam erat volutpat. Maecenas lacinia sit amet diam eu pretium.\r\n\r\nNunc sed diam vel quam posuere eleifend. Phasellus ornare pellentesque massa, fermentum molestie augue fermentum in. Phasellus malesuada mauris et viverra dictum. Aliquam vitae ante vitae mi vehicula aliquet. Praesent varius ut est sit amet gravida. Donec nibh nunc, condimentum vitae mauris in, iaculis pharetra lacus. Nunc lacinia accumsan venenatis.\r\n\r\nPellentesque non interdum tellus. Mauris a ultricies lorem, ac pretium tellus. Sed maximus dolor a porttitor malesuada. Ut faucibus tortor lacinia porttitor scelerisque. Praesent consectetur volutpat nisi, a lobortis velit tempus sit amet. Nam maximus id urna sed suscipit. Pellentesque imperdiet auctor tortor. Suspendisse blandit, neque vitae tempus gravida, arcu risus bibendum mi, sit amet ultrices mauris dolor sit amet enim.', 'https://upload.wikimedia.org/wikipedia/commons/2/23/CiceroBust.jpg', 'Cicero', 'https://no.wikipedia.org/wiki/Marcus_Tullius_Cicero', 'http://no.lipsum.com/', 'Lorem Ipsum generator', NULL),
(2, 'Cable Bills', 'Cable bills in America have been on the rise, with the average household spending $64.41 a month or about $768 a year. The thing is, there are many cheaper alternatives available these days that will provide you with enough entertainment options for the entire family. You can try a third-party service such as Netflix, which costs $9.99 a month, Amazon Prime at $99 a year or Hulu Plus, which costs $7.99 a month. If you prefer to stick to television, but usually only watch the same few channels, you can still lower costs by buying a package of channels. Sling TV does a base package called “The Best of Live TV,” which is $20 a month and includes 19 of the most popular channels. Add-on packs are an extra $5 each per month, so you can tailor it to your family’s needs and still save money.', 'Einstein.jpg', 'Kenneth Saccky', 'http://www.facebook.com/saccky?fref=ts', 'http://www.harvard.edu', 'HARVARD UNIVERSITY / THE BEST SCHOOL / FEBRUARY 21, 2017', 3),
(3, 'Bacon Ipsum', 'Bacon ipsum dolor amet strip steak sirloin hamburger tongue short loin pork short ribs corned beef, venison swine. Tenderloin hamburger rump shankle. Pork belly burgdoggen alcatra bacon, cupim bresaola chicken biltong ham hock sirloin swine hamburger drumstick. Turducken rump picanha chuck tongue capicola.\r\n\r\nShort ribs prosciutto ribeye, capicola pork loin shank corned beef meatball cow pig ball tip. Burgdoggen picanha swine kielbasa pig bacon sirloin short loin ham hock boudin. Meatball kielbasa alcatra jerky tenderloin beef ribs ground round burgdoggen leberkas sausage pork belly pork chop. Pancetta turkey hamburger kevin short loin shankle bacon swine landjaeger venison pork loin chuck shoulder prosciutto ham hock. Hamburger turducken venison drumstick meatloaf shankle meatball sirloin fatback capicola pancetta burgdoggen.\r\n\r\nBall tip doner flank, venison drumstick sausage turkey pancetta pork chop leberkas meatball prosciutto kielbasa boudin swine. Biltong picanha filet mignon shankle shank tri-tip. Tail tongue picanha ball tip turkey capicola chuck jowl landjaeger. Tenderloin t-bone capicola strip steak. Shankle alcatra leberkas andouille meatloaf burgdoggen brisket, jowl biltong landjaeger ball tip.\r\n\r\nSpare ribs short loin corned beef cupim tri-tip ground round. Tail kielbasa pork chop, chuck hamburger rump pork prosciutto picanha. Porchetta pastrami ham hock pork frankfurter, hamburger alcatra. Landjaeger tail spare ribs jerky leberkas pancetta. Capicola bresaola tail frankfurter rump, alcatra short ribs burgdoggen turducken brisket jowl. Fatback pork swine, andouille chicken biltong turkey pork chop tail corned beef tenderloin meatball. Shank kevin landjaeger, ground round leberkas pastrami kielbasa cupim flank rump cow tongue pork loin bacon brisket.\r\n\r\nShank short ribs pastrami ham hock cow bresaola ball tip sirloin cupim pork belly leberkas tail landjaeger. Tongue swine t-bone, ground round turkey ham hock meatloaf ribeye drumstick corned beef shoulder tenderloin porchetta biltong. Ground round sirloin picanha ham prosciutto rump sausage pork boudin flank. Shankle capicola beef ribs shank prosciutto ham hock strip steak tenderloin turducken turkey hamburger. Shank rump porchetta filet mignon corned beef salami alcatra ribeye andouille flank cow short loin.', 'https://upload.wikimedia.org/wikipedia/commons/3/31/Made20bacon.png', 'BACicerON', NULL, 'https://baconipsum.com/', 'Bacon Ipsum Website', NULL),
(4, 'Månen Europa', 'Europa (gammelgresk: Ευρώπη Eurṓpē), eller Jupiter II, er en av Jupiters måner. Den er den sjette månen og den andre galileiske månen utover fra Jupiter. Månen fullfører et omløp på 3,55 jorddager og har baneresonans med Io og Ganymedes. Diameteren på 1 569 km gjør Europa til den minste av de fire galileiske månene, og til den sjette største månen i solsystemet. Utenfor Jupiter-systemet er bare Titan og jordens måne større. Europa har planetmasse – det vil si stor nok masse til å oppnå hydrostatisk likevekt, og hadde vært en dvergplanet dersom den gikk i bane direkte rundt solen.', 'https://upload.wikimedia.org/wikipedia/commons/5/54/Europa-moon.jpg', 'Wikipedia', 'https://no.wikipedia.org/', 'https://no.wikipedia.org/wiki/Europa_(måne)', 'Link til Wikiartikkel', NULL),
(5, 'PHP', 'PHP ("PHP: Hypertext Preprocessor".) er et dynamisk, tolket og løst typet programmeringsspråk hovedsakelig brukt for å utvikle dynamiske nettsider. PHPs syntaks ligner C og Perl. Den vanligste implementasjonen av PHP er en fri og åpen versjon skrevet i C og distribuert av The PHP Group via php.net og SourceForge.\r\n\r\nPHP distribueres under PHP-Lisensen.', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg', 'Wikipedia', 'https://no.wikipedia.org/', 'https://no.wikipedia.org/wiki/PHP', 'PHP på Wikipdeia', NULL),
(6, 'Mathallen deler ut smaksprøver', 'I løpet av påskeuken kommer Mathallen i Oslo til å dele ut masse smaksprøver fra hele verden! Vi anbefaler på det sterkeste å møte opp og ta del i aktiviteter og smaking, hele familien.', 'https://upload.wikimedia.org/wikipedia/commons/6/65/Food_samples_1.jpg', 'Journalist Jon', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `event-title` varchar(255) NOT NULL,
  `event-where` text NOT NULL,
  `event-where-link` text,
  `event-image-path` text,
  `event-body` text NOT NULL,
  `tag` enum('KULTUR','AKTIVITET','MAT','SKOLE') NOT NULL COMMENT 'MAT, KULTUR, AKTIVITET, SKOLE'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event-title`, `event-where`, `event-where-link`, `event-image-path`, `event-body`, `tag`) VALUES
(1, 'Åpent galleri på Vulkan', 'Westerdals på Vulkan', 'https://www.westerdals.no/artikkel/campus-vulkan/', 'westerdals_bygning_01-1-ekempel.jpg', 'Åpen dag! Kom og se på kunst og andre ting.', 'KULTUR'),
(2, 'Smaksprøver i Mathallen', 'Mathallen, Vulkan', 'https://mathallenoslo.no/', 'mathallen-vertikalt-flagg.jpg', 'Kom og smak mat fra verden over, nært og fjernt!', 'MAT'),
(3, 'Åpen forelesning om Amerkansk media', 'Westerdals Fjerdingen', NULL, 'Einstein.jpg', 'Kom og hør Einstein snakke om amerikanske husholdninger of forhold til tv og lignende media.', 'AKTIVITET');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article-event-fk` (`article-event-fk`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`article-event-fk`) REFERENCES `events` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
