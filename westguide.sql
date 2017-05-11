-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: May 11, 2017 at 03:17 PM
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
  `article_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `article_datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `article_body` text CHARACTER SET utf8,
  `article_image_path` text CHARACTER SET utf8,
  `article_author` text CHARACTER SET utf8 NOT NULL,
  `article_author_link` text CHARACTER SET utf8,
  `article_link` text CHARACTER SET utf8,
  `article_link_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `article_event_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_datetime`, `article_body`, `article_image_path`, `article_author`, `article_author_link`, `article_link`, `article_link_name`, `article_event_fk`) VALUES
(1, 'Lorem ipsum', '2017-04-05 09:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non ante diam. In dapibus mi augue, consectetur finibus nisi rhoncus at. Quisque porta arcu quis orci accumsan, sit amet rhoncus urna ultricies. Pellentesque lacinia turpis vitae odio posuere tincidunt. Vivamus tristique urna nec nibh cursus, id consectetur eros imperdiet. Aliquam erat volutpat. Maecenas lacinia sit amet diam eu pretium.\r\n\r\nNunc sed diam vel quam posuere eleifend. Phasellus ornare pellentesque massa, fermentum molestie augue fermentum in. Phasellus malesuada mauris et viverra dictum. Aliquam vitae ante vitae mi vehicula aliquet. Praesent varius ut est sit amet gravida. Donec nibh nunc, condimentum vitae mauris in, iaculis pharetra lacus. Nunc lacinia accumsan venenatis.\r\n\r\nPellentesque non interdum tellus. Mauris a ultricies lorem, ac pretium tellus. Sed maximus dolor a porttitor malesuada. Ut faucibus tortor lacinia porttitor scelerisque. Praesent consectetur volutpat nisi, a lobortis velit tempus sit amet. Nam maximus id urna sed suscipit. Pellentesque imperdiet auctor tortor. Suspendisse blandit, neque vitae tempus gravida, arcu risus bibendum mi, sit amet ultrices mauris dolor sit amet enim.', 'https://upload.wikimedia.org/wikipedia/commons/2/23/CiceroBust.jpg', 'Cicero', 'https://no.wikipedia.org/wiki/Marcus_Tullius_Cicero', 'http://no.lipsum.com/', 'Lorem Ipsum generator', NULL),
(2, 'Cable Bills', '2017-04-30 17:19:55', 'Cable bills in America have been on the rise, with the average household spending $64.41 a month or about $768 a year. The thing is, there are many cheaper alternatives available these days that will provide you with enough entertainment options for the entire family. You can try a third-party service such as Netflix, which costs $9.99 a month, Amazon Prime at $99 a year or Hulu Plus, which costs $7.99 a month. If you prefer to stick to television, but usually only watch the same few channels, you can still lower costs by buying a package of channels. Sling TV does a base package called “The Best of Live TV,” which is $20 a month and includes 19 of the most popular channels. Add-on packs are an extra $5 each per month, so you can tailor it to your family’s needs and still save money.', 'Bilder-Aktivitet/Einstein.jpg', 'Kenneth Saccky', 'http://www.facebook.com/saccky?fref=ts', 'http://www.harvard.edu', 'HARVARD UNIVERSITY / THE BEST SCHOOL / FEBRUARY 21, 2017', 3),
(3, 'Bacon Ipsum', '2017-04-03 08:07:00', 'Bacon ipsum dolor amet strip steak sirloin hamburger tongue short loin pork short ribs corned beef, venison swine. Tenderloin hamburger rump shankle. Pork belly burgdoggen alcatra bacon, cupim bresaola chicken biltong ham hock sirloin swine hamburger drumstick. Turducken rump picanha chuck tongue capicola.\r\n\r\nShort ribs prosciutto ribeye, capicola pork loin shank corned beef meatball cow pig ball tip. Burgdoggen picanha swine kielbasa pig bacon sirloin short loin ham hock boudin. Meatball kielbasa alcatra jerky tenderloin beef ribs ground round burgdoggen leberkas sausage pork belly pork chop. Pancetta turkey hamburger kevin short loin shankle bacon swine landjaeger venison pork loin chuck shoulder prosciutto ham hock. Hamburger turducken venison drumstick meatloaf shankle meatball sirloin fatback capicola pancetta burgdoggen.\r\n\r\nBall tip doner flank, venison drumstick sausage turkey pancetta pork chop leberkas meatball prosciutto kielbasa boudin swine. Biltong picanha filet mignon shankle shank tri-tip. Tail tongue picanha ball tip turkey capicola chuck jowl landjaeger. Tenderloin t-bone capicola strip steak. Shankle alcatra leberkas andouille meatloaf burgdoggen brisket, jowl biltong landjaeger ball tip.\r\n\r\nSpare ribs short loin corned beef cupim tri-tip ground round. Tail kielbasa pork chop, chuck hamburger rump pork prosciutto picanha. Porchetta pastrami ham hock pork frankfurter, hamburger alcatra. Landjaeger tail spare ribs jerky leberkas pancetta. Capicola bresaola tail frankfurter rump, alcatra short ribs burgdoggen turducken brisket jowl. Fatback pork swine, andouille chicken biltong turkey pork chop tail corned beef tenderloin meatball. Shank kevin landjaeger, ground round leberkas pastrami kielbasa cupim flank rump cow tongue pork loin bacon brisket.\r\n\r\nShank short ribs pastrami ham hock cow bresaola ball tip sirloin cupim pork belly leberkas tail landjaeger. Tongue swine t-bone, ground round turkey ham hock meatloaf ribeye drumstick corned beef shoulder tenderloin porchetta biltong. Ground round sirloin picanha ham prosciutto rump sausage pork boudin flank. Shankle capicola beef ribs shank prosciutto ham hock strip steak tenderloin turducken turkey hamburger. Shank rump porchetta filet mignon corned beef salami alcatra ribeye andouille flank cow short loin.', 'https://upload.wikimedia.org/wikipedia/commons/3/31/Made20bacon.png', 'BACicerON', NULL, 'https://baconipsum.com/', 'Bacon Ipsum Website', NULL),
(4, 'Månen Europa', '2017-03-16 08:43:18', 'Europa (gammelgresk: Ευρώπη Eurṓpē), eller Jupiter II, er en av Jupiters måner. Den er den sjette månen og den andre galileiske månen utover fra Jupiter. Månen fullfører et omløp på 3,55 jorddager og har baneresonans med Io og Ganymedes. Diameteren på 1 569 km gjør Europa til den minste av de fire galileiske månene, og til den sjette største månen i solsystemet. Utenfor Jupiter-systemet er bare Titan og jordens måne større. Europa har planetmasse – det vil si stor nok masse til å oppnå hydrostatisk likevekt, og hadde vært en dvergplanet dersom den gikk i bane direkte rundt solen.', 'https://upload.wikimedia.org/wikipedia/commons/5/54/Europa-moon.jpg', 'Wikipedia', 'https://no.wikipedia.org/', 'https://no.wikipedia.org/wiki/Europa_(måne)', 'Link til Wikiartikkel', NULL),
(5, 'PHP', '2016-11-08 10:18:00', 'PHP ("PHP: Hypertext Preprocessor".) er et dynamisk, tolket og løst typet programmeringsspråk hovedsakelig brukt for å utvikle dynamiske nettsider. PHPs syntaks ligner C og Perl. Den vanligste implementasjonen av PHP er en fri og åpen versjon skrevet i C og distribuert av The PHP Group via php.net og SourceForge.\r\n\r\nPHP distribueres under PHP-Lisensen.', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg', 'Wikipedia', 'https://no.wikipedia.org/', 'https://no.wikipedia.org/wiki/PHP', 'PHP på Wikipdeia', NULL),
(6, 'Mathallen deler ut smaksprøver', '2017-04-07 12:13:38', 'I løpet av påskeuken kommer Mathallen i Oslo til å dele ut masse smaksprøver fra hele verden! Vi anbefaler på det sterkeste å møte opp og ta del i aktiviteter og smaking, hele familien.', 'https://upload.wikimedia.org/wikipedia/commons/6/65/Food_samples_1.jpg', 'Journalist Jon', NULL, NULL, NULL, 2),
(7, 'Åpent galleri Westerdals på Vulkan', '2017-04-23 09:44:46', 'Kom og se kunst og film fra studenter på Vulkan.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/8_mm_Kodak_safety_film_reel_01.jpg/800px-8_mm_Kodak_safety_film_reel_01.jpg', 'Frida F. Orfatter', NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_picture` text,
  `employee_email` text,
  `employee_info` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `employee_picture`, `employee_email`, `employee_info`) VALUES
(1, 'Kenneth', 'profilbilder/kenneth.jpg', 'kennethsaccky@gmail.com', 'Info placeholder'),
(2, 'Linda', 'profilbilder/linda.jpg', NULL, 'Info placeholder'),
(3, 'Alexander', 'profilbilder/alexander.jpg', NULL, 'placeholder'),
(4, 'Margarethe', NULL, NULL, 'placeholder'),
(5, 'Christopher', 'profilbilder/christopher.jpg', NULL, 'palceholder');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_where` text NOT NULL,
  `event_datetime` datetime DEFAULT NULL,
  `event_where_link` text,
  `event_image_path` text,
  `event_body` text,
  `tag` enum('KULTUR','AKTIVITET','MAT','SKOLE') NOT NULL COMMENT 'MAT, KULTUR, AKTIVITET, SKOLE'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_where`, `event_datetime`, `event_where_link`, `event_image_path`, `event_body`, `tag`) VALUES
(1, 'Åpent galleri på Vulkan', 'Westerdals, Vulkan', '2017-04-18 12:00:00', 'https://www.westerdals.no/artikkel/campus-vulkan/', 'Bilder-Kultur/Åpent-galleri.jpg', 'Kom og se på kjent kunst fra Westerdals historie. Igjennom tidene har det blitt skapt fantastiske ting her på Westerdals, og vi vil denne dagen sette dette på utstilling! Det er åpent hele dagen, bare å komme innom.\r\n\r\n', 'KULTUR'),
(2, 'Smaksprøver i Mathallen', 'Mathallen, Vulkan', '2017-04-30 15:00:00', 'https://mathallenoslo.no/', 'Bilder-Mat/mathallen-redi.jpg', 'Kom og smak mat fra verden over, nært og fjernt! Kokkene ved mathallends mange resturanter til presentere et helt område fyllt med gode smaker fra verden over. Blant annet fra Frankrike, Roma og Italia. Kom og fyll magene deres! ', 'MAT'),
(3, 'Åpen forelesning om Amerkansk media', 'Westerdals Fjerdingen', '2017-05-19 10:00:00', 'https://www.westerdals.no/?gclid=CjwKEAjwl9DIBRCG_e3DwsKsizsSJADMmJ11HIdS_zO_qyV5RdKlNMQcMj6rbZqKF_KI_dJ2lUPdShoCywzw_wcB', 'Bilder-Aktivitet/Einstein.jpg', 'Kom og hør Einstein snakke om amerikanske husholdninger i forhold til tv og lignende media. Dette er noe dere bare ikke kan gå glipp av.\r\n\r\nSenere vil det bli servering av enkle retter med drikke. Ved baren.', 'AKTIVITET'),
(4, 'Alt av Kunst', 'Westerdals, Vulkan', '2017-05-30 09:00:00', 'https://www.westerdals.no/artikkel/campus-vulkan/', 'Bilder-Kultur/Kunst.jpg', 'Elevene ved Campus Vulkan inviterer til åpen dag, hvor de presenterer sine prosjekter som de har hatt utover året. Det blir alt fra moderne til klassisk kunst. Kostymer, diktverk og mye mer! \r\n\r\nBare å komme!', 'KULTUR'),
(5, 'Historie vandring', 'Akerselven, Westerdals Brenneriveien og Vulkan', '2017-05-19 10:00:00', 'https://www.westerdals.no/artikkel/campus-vulkan/\r\n\r\nhttps://no.wikipedia.org/wiki/Akerselva', 'Bilder-Kultur/Akerselven-Guide.jpg', 'Hvis du noen gang har lurt på historien rundt Akerselven og områdene rundt, så er dette noe for deg. Vi inviterer til guidet tur rundt Akerselven. Vi kommer til å snakke om alt fra gammel kultur, og ny kultur. Vi vil også vise bilder av hvordan det så ut før, og hvorfor det ser ut som det gjør nå. \r\n\r\nBare å komme, det blir strålende vær.\r\n\r\nMøt opp utenfor Vulkan klokken 10.00 ', 'KULTUR'),
(7, 'Omvisning og informasjon', 'Westerdals Fjerdingen, Vulkan og Brenneriveien', '2017-06-01 10:00:00', 'https://www.westerdals.no/', 'Bilder-Skole/foredrag.jpg', 'Vi inviterer til omvisning her på Vulkan og Fjerdingen. Dette er åpent for alle. Vi vil starte med å si litt om Westerdals historie, også gå over til å vise litt rundt. Vi starter først på Fjerdingen og beveger oss videre til Vulkan og Brenneriveien.\r\n\r\n Velkommen! Start 10.00 på Fjerdingen', 'SKOLE'),
(8, 'Sunnere Dessert!', 'Mathallen, Vulkan', '2017-05-24 11:00:00', 'https://mathallenoslo.no/', 'Bilder-Mat/Sunn.jpg', 'Linda Myre inviterer til Sunnere Dessert kurs i Mathallen like ved Vulkan. Dette er et kurs åpent for alle!\r\n\r\nVi skal begynne med å lage muffins, sjokolade mousse, og jordbær kake med en sunnere vri! \r\n\r\nDette foregår i 2-etasje i Mathallen klokken 11.00. Det er godt skjiltet, når dere kommer inn!\r\n', 'MAT'),
(9, 'Studere i utlandet?', 'Westerdals, Vulkan og Fjærdingen', '2017-05-19 12:00:00', 'https://www.westerdals.no/ta-et-semester-i-utlandet/', 'Bilder-Skole/Studere-utlandet.jpg', 'Vil du studere i utlandet? Vi kommer til å fortelle alt du trenger å vite angående dette området! Alt fra opphold til hvordan å komme seg dit. \r\n\r\nStudentene vil så holder foredrag om hvordan de har opplevd å være på utveksling til utlandet via Westerdals. \r\n\r\nSpørsmål vil bli besvart på slutten av foredraget.', 'SKOLE'),
(10, 'BiffDay', 'Mathallen, Vulkan', '2017-06-02 12:00:00', 'https://mathallenoslo.no/', 'Bilder-Mat/Hellstrøm.jpg', 'Hellstrøm skal holde en såkalt BiffDag for alle som vil, i Mathallen 24.juni! Han skal live kokkelere og vise hvordan man lager den perfekte biffen.\r\n\r\nRå, medium eller stekt! Hva foretrekker du?\r\n\r\nDette begynner klokken 12.00', 'MAT'),
(11, 'Student foredrag', 'Westerdals, Fjærdingen', '2017-05-12 13:00:00', 'https://www.westerdals.no/artikkel/campus-Fjerdingen/', 'Bilder-Skole/Student-foredrag.jpg', 'Studentene skal holde foredrag om hvordan det er å gå her på Westerdals. De skal begynne å fortelle om hvordan ting foregår her på Westerdals og litt om hvordan de triver her.\r\n\r\nEr miljøet bra? Blir de hørt? ble forventningene møtt da de begynte her? Dette er bra å få med seg hvis man er usikker på om man vil begynne her på westerdals. Dette er åpent for alle!', 'SKOLE'),
(12, 'Kunstig Intelligens og fremtiden', 'Westerdals, Fjærdingen', '2017-05-30 12:00:00', 'https://www.westerdals.no/artikkel/campus-Fjerdingen/\r\n\r\nhttps://no.wikipedia.org/wiki/Kunstig_intelligens', 'Bilder-Aktivitet/kunstig-intelligens.jpg', 'Hovedlederen for Intelligente Systemer vil starte dagen med å holde et foredrag om kunstig teknologi og fremtiden! Og fortelle om at westerdals vil henge med i denne utviklingen.\r\n\r\nEtter dette vil det være stands der folk kan prøve alt fra VR, 3D printing til å se hologrammer. Dette blir gøy! fremtiden er her\r\n\r\n', 'AKTIVITET'),
(13, 'Rock Night!', 'Westerdals, Fjærdingen', '2017-05-21 18:00:00', 'https://www.westerdals.no/artikkel/campus-Fjerdingen/', 'Bilder-Aktivitet/Rock''nRoll-Aktivitet.jpg', 'Studentene ved Musikklinjen ved Westerdals vil holde en minikonsert for alle over 18 år. De som skal spille er the Watchers, de gleder seg til å se deg!\r\n\r\nEtter dette vil det bli servering i baren med quiz. Dette blr kos!\r\n\r\nDette begynner klokken 18.00 i Fjerdingen', 'AKTIVITET');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article-event-fk` (`article_event_fk`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`article_event_fk`) REFERENCES `events` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
