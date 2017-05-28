-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: May 28, 2017 at 02:20 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_datetime`, `article_body`, `article_image_path`, `article_author`, `article_author_link`, `article_link`, `article_link_name`, `article_event_fk`) VALUES
(51, 'Omvisning og informasjon', '2017-05-28 14:03:37', '  Lurer du pÃ¥ hvordan skolene vÃ¥res ser ut og hvor de befinner seg? Vi inviterer alle nye studenter til omvisning pÃ¥ skolene vÃ¥res fra Fjerdingen til Vulkan. Trykk pÃ¥ se hendelse for Ã¥ se oppmÃ¸tested og tidspunkt. Alle er hjertelig velkomne.   ', 'Bilder-Skole/foredrag2.jpg', 'Frida F. Orfaater', '', '', '', 7),
(52, 'Operaen i Oslo', '2017-05-28 13:57:44', ' Operaen i Oslo er en kjent turiststed som er verdt Ã¥ besÃ¸ke. Operaen ble hÃ¸ytidelig Ã¥pnet den 12. april 2008 og har vunnet en rekke priser og er fredet av Riksantikvaren. Operahuset ligger veldig nÃ¦rt Oslos sentralbanestasjon og er en ca 5 minutters gÃ¥tur. Her kan man ta massevis av flotte bilder og man fÃ¥r en flott utsikt over Oslofjorden. \r\n \r\nMan kan bestille omvisning i vÃ¥r stolte opera, og det finnes restauranter i huset som man kan bestille dersom man skal i et selskap o.l. Hvis du er glad i opera, kan man like godt bestille billetter til deres forestillinger.\r\n ', 'Bilder-Kultur/opera-oslo.jpg', 'Ingrid Apple', '', 'http://operaen.no/#calendar ', 'Billetter kan du fÃ¥ kjÃ¸pt her', NULL),
(53, 'Frognerparken', '2017-05-28 13:28:00', '   En av Oslos stÃ¸rste turistattraksjoner er Frognerparken. Frognerparken er en offentlig park som tidligere var eid av den gamle AkergÃ¥rden Frogner HovedgÃ¥rd helt tilbake i 1788. Dette er en park som inneholder av unike statuer og monumenter som blir kalt for Vigelandsparken som gir et spesielt preg over parken. Er du ogsÃ¥ pÃ¥ Pokemon tur er dette det perfekte stedet Ã¥ hamstre inn nye Pokemons. \r\n \r\nTa T-banen fra det nÃ¦rmeste stoppet, og gÃ¥ av pÃ¥ Majorstuen. Det er ca 10 minutters gÃ¥ avstand fra t-banestasjonen til parken. \r\n   ', 'Bilder-Kultur/frognerparken.jpg', 'Astrid R.T. Ikkel', '', '', '', NULL),
(54, 'Historievandring', '2017-05-28 13:55:25', '  Historievandring er en tradisjon her ved Westerdals Oslo ACT. Her inviterer vi alle historieinteresserte mennesker til en tur med guide der man fÃ¥r oppleve historien om Akerselva og nÃ¦romrÃ¥det. Her er det bare Ã¥ hive seg pÃ¥ og ta med seg en venn. Vandringen koster ingenting og det eneste du trenger Ã¥ ta med deg er noen gode sko og gÃ¥ med. For mer informasjon angÃ¥ende dette arrangementet, klikk pÃ¥ â€œSe hendelseâ€, der du fÃ¥r mer informasjon om startsted og tidspunkt. Velkommen!  ', 'Bilder-Kultur/historie.jpg', 'Jan Hellevik', '', '', '', 5),
(55, 'Kunstig intelligens og fremtiden', '2017-05-28 13:57:57', '  Har du lurt pÃ¥ hva kunstig intelligens er og hva det innebÃ¦rer? Kanskje fremtiden er litt annerledes enn du hva du selv tror?  Kom innom Westerdals Campus Fjerdingen for et foredrag av selveste hovedlederen selv. Her kan du finne teknologi, stands og til og med 3D-printere.   ', 'Bilder-Aktivitet/kunstig.jpg', 'Max Power', '', '', '', 12),
(56, 'Veiarbeid utenfor Campus Fjerdingen', '2017-05-28 13:31:40', ' Husk at det er veiarbeid utenfor Campus Fjerdingen. Dette vil vare en liten periode, sÃ¥ det vil ikke gÃ¥ an Ã¥ kjÃ¸re inn bil her. Bruk gjerne kollektivtransport, sykkel eller gÃ¥ nÃ¥r du skal til skolen.  ', 'Bilder-Skole/veiarbeid.jpg', 'Westerdals Infosenter', '', '', '', NULL),
(57, 'Legenden Sting returnerer til Oslo Spektrum!', '2017-05-28 13:44:57', ' Rockelegenden Sting returnerer til Oslo Spektrum den 25.september 2017. Sting har tidligere vÃ¦rt vokalist i rockebandet The Police og opptrÃ¥dte der fra 1977 helt til bandet ble opplÃ¸st i 1986. Etter dette har han bygd en meget suksessfull solokarriere, og sanger som Shape of My Heart, Englishman in New York og Fields of Gold.  ', 'Bilder-Aktivitet/sting.jpg', 'Astrid R.T. Ikkel', '', 'http://www.ticketmaster.no/artist/sting-billetter/2196?camefrom=Client_TicketmasterNorge_Home_Sting_LiveNation_240517&tm_link=tm_homeA_2_f6 ', 'KjÃ¸p biletter her', NULL),
(58, 'Westerdals Oslo ACT student forelesning', '2017-05-28 13:47:00', '   Westerdals inviterer nye fremtidige studenter til foredrag av Westerdals sine studenter om hvordan det er Ã¥ gÃ¥ pÃ¥ skolen. Gruer du eller gleder deg til Ã¥ starte pÃ¥ en ny skole? ForhÃ¥pentligvis hÃ¥per vi at du gleder deg, og vi kan garantere deg at du ikke vil angre! Les videre pÃ¥ eventet med Ã¥ trykke lengre ned for tid og oppmÃ¸tested. Velkommen skal du vÃ¦re!   ', 'Bilder-Skole/foredrag.jpg', 'Ingrid Apple', '', '', '', 11),
(59, 'Jewel of India', '2017-05-28 13:54:24', ' Er du glad i litt krydret mat og fra Asia som ikke er kinesisk eller Thai-mat? Ta gjerne turen innom Jewel of India pÃ¥ Frogner. Her fÃ¥r du servert indisk mat i den aller beste klassen du kan tenke deg. Er du usikker pÃ¥ hva du vil ha, vil kelnerne komme med gode tips til bÃ¥de nybegynner og de litt mer erfarne. VÃ¥res anbefaling er at du prÃ¸ver den tradisjonelle Tikka Masalaâ€™en. \r\n \r\nJewel of India finner du pÃ¥ Oscars Gate 81\r\nVil du ringe og bestille et bord? Ring: 22553929\r\n ', 'Bilder-Mat/jewel-of-india.jpg', 'Kai Mikkelsen', '', '', '', NULL),
(60, 'Ã…pent galleri pÃ¥ Westerdals Campus Vulkan', '2017-05-28 13:56:35', '  Er du en kreativ sjel som vil oppleve hva man kan fÃ¥ til pÃ¥ Westerdals Oslo ACT ved Campus Vulkan? Da kan du komme innom Vulkan for Ã¥ se hva vÃ¥re studenter greier Ã¥ skape bÃ¥de av film og malerier. Kanskje du er bedre? Kanskje du fÃ¥r nye inspirasjoner? Kom innom og ta en prat med studentene ogsÃ¥! Les videre pÃ¥ eventet lengre ned for tid og oppmÃ¸tested. Velkommen skal du vÃ¦re!  ', 'Bilder-Kultur/galleri.jpg', 'Jan Hellevik', '', '', '', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `employee_picture`, `employee_email`, `employee_info`) VALUES
(1, 'Kenneth', 'profilbilder/kenneth.jpg', 'user@email.com', '                                       26 Ã¥r gillar front-end programmering :)                                                                                     '),
(2, 'Linda', 'profilbilder/linda.jpg', 'linord@gmail.com', '                                                              22 Ã¥r gammel, kvalifikasjonsomrÃ¥der er teknologi, business og web. Lurer dere pÃ¥ noe angÃ¥ende kommende eventer, ta kontakt pÃ¥ mail. Svar forekommer de nÃ¦rmeste dagene                                                                                         '),
(3, 'Alexander', 'profilbilder/alexander.jpg', 'email@mail.mail', '                        22 Ã¥r gammel fra BÃ¦rum. Liker Ã¥ programmere.                                                            '),
(4, 'Margarethe', '', 'margthor@gmail.com', '                                                                                                             21 Ã¥r fra Stavanger, gÃ¥r programmering og liker teknologi.                                                                                                                                                                                                                       '),
(5, 'Christoffer', 'profilbilder/christopher.jpg', 'CTharald@gmail.com', '                                       21 Ã¥r, bachelorstudent i programmering. KvalifikasjonsomrÃ¥der er teknologi, programmering og web. Hvis det er noen spÃ¸rsmÃ¥l om siden eller eventer, vennligst ta kontakt.                                                           ');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_title`, `event_where`, `event_datetime`, `event_where_link`, `event_image_path`, `event_body`, `tag`) VALUES
(1, 'Ã…pent galleri pÃ¥ Vulkan', 'Westerdals, Vulkan', '2017-04-18 12:00:00', 'https://www.westerdals.no/artikkel/campus-vulkan/', 'Bilder-Kultur/galleri.jpg', '                                                                        Kom og se pÃ¥ kjent kunst fra Westerdals historie. Igjennom tidene har det blitt skapt fantastiske ting her pÃ¥ Westerdals, og vi vil denne dagen sette dette pÃ¥ utstilling! Det er Ã¥pent hele dagen, bare Ã¥ komme innom.\r\n\r\n                                                            ', 'KULTUR'),
(2, 'SmaksprÃ¸ver i Mathallen', 'Mathallen, Vulkan', '2017-04-30 15:00:00', 'https://mathallenoslo.no/', 'Bilder-Mat/mathallen-redi.jpg', '                        Kom og smak mat fra verden over, nÃ¦rt og fjernt! Kokkene ved mathallends mange resturanter til presentere et helt omrÃ¥de fyllt med gode smaker fra verden over. Blant annet fra Frankrike, Roma og Italia. Kom og fyll magene deres!                     ', 'MAT'),
(3, 'Ã…pen forelesning om Amerkansk media', 'Westerdals Fjerdingen', '2017-05-19 10:00:00', 'https://www.westerdals.no/?gclid=CjwKEAjwl9DIBRCG_e3DwsKsizsSJADMmJ11HIdS_zO_qyV5RdKlNMQcMj6rbZqKF_KI_dJ2lUPdShoCywzw_wcB', 'Bilder-Aktivitet/media.jpg', '                                                Kom og hÃ¸r Einstein snakke om amerikanske husholdninger i forhold til tv og lignende media. Dette er noe dere bare ikke kan gÃ¥ glipp av.\r\n\r\nSenere vil det bli servering av enkle retter med drikke. Ved baren.                                        ', 'AKTIVITET'),
(4, 'Alt av Kunst', 'Westerdals, Vulkan', '2017-05-30 09:00:00', 'https://www.westerdals.no/artikkel/campus-vulkan/', 'Bilder-Kultur/Kunst.jpg', '                        Elevene ved Campus Vulkan inviterer til Ã¥pen dag, hvor de presenterer sine prosjekter som de har hatt utover Ã¥ret. Det blir alt fra moderne til klassisk kunst. Kostymer, diktverk og mye mer! \r\n\r\nBare Ã¥ komme!                    ', 'KULTUR'),
(5, 'Historievandring', 'Akerselven, Westerdals Brenneriveien og Vulkan', '2017-05-19 10:00:00', 'https://www.westerdals.no/artikkel/campus-vulkan/https://no.wikipedia.org/wiki/Akerselva', 'Bilder-Kultur/historie.jpg', '                                                Hvis du noen gang har lurt pÃ¥ historien rundt Akerselven og omrÃ¥dene rundt, sÃ¥ er dette noe for deg. Vi inviterer til guidet tur rundt Akerselven. Vi kommer til Ã¥ snakke om alt fra gammel kultur, og ny kultur. Vi vil ogsÃ¥ vise bilder av hvordan det sÃ¥ ut fÃ¸r, og hvorfor det ser ut som det gjÃ¸r nÃ¥. \r\n\r\nBare Ã¥ komme, det blir strÃ¥lende vÃ¦r.\r\n\r\nMÃ¸t opp utenfor Vulkan klokken 10.00                                         ', 'KULTUR'),
(7, 'Omvisning og informasjon', 'Westerdals Fjerdingen, Vulkan og Brenneriveien', '2017-06-01 10:00:00', 'https://www.westerdals.no/', 'Bilder-Skole/foredrag2.jpg', '                                                Vi inviterer til omvisning her pÃ¥ Vulkan og Fjerdingen. Dette er Ã¥pent for alle. Vi vil starte med Ã¥ si litt om Westerdals historie, ogsÃ¥ gÃ¥ over til Ã¥ vise litt rundt. Vi starter fÃ¸rst pÃ¥ Fjerdingen og beveger oss videre til Vulkan og Brenneriveien.\r\n\r\n Velkommen! Start 10.00 pÃ¥ Fjerdingen                                        ', 'SKOLE'),
(8, 'Sunnere Dessert!', 'Mathallen, Vulkan', '2017-05-24 11:00:00', 'https://mathallenoslo.no/', 'Bilder-Mat/Sunn.jpg', '                        Linda Myre inviterer til Sunnere Dessert kurs i Mathallen like ved Vulkan. Dette er et kurs Ã¥pent for alle!\r\n\r\nVi skal begynne med Ã¥ lage muffins, sjokolade mousse, og jordbÃ¦r kake med en sunnere vri! \r\n\r\nDette foregÃ¥r i 2-etasje i Mathallen klokken 11.00. Det er godt skjiltet, nÃ¥r dere kommer inn!\r\n                    ', 'MAT'),
(9, 'Studere i utlandet?', 'Westerdals, Vulkan og FjÃ¦rdingen', '2017-05-19 12:00:00', 'https://www.westerdals.no/ta-et-semester-i-utlandet/', 'Bilder-Skole/utlandet.jpg', '                                                Vil du studere i utlandet? Vi kommer til Ã¥ fortelle alt du trenger Ã¥ vite angÃ¥ende dette omrÃ¥det! Alt fra opphold til hvordan Ã¥ komme seg dit. \r\n\r\nStudentene vil sÃ¥ holde foredrag om hvordan de har opplevd Ã¥ vÃ¦re pÃ¥ utveksling til utlandet via Westerdals. \r\n\r\nSpÃ¸rsmÃ¥l vil bli besvart pÃ¥ slutten av foredraget.                                        ', 'SKOLE'),
(10, 'BiffDay', 'Mathallen, Vulkan', '2017-06-02 12:00:00', 'https://mathallenoslo.no/', 'Bilder-Mat/biff.jpg', '                                                                                                HellstrÃ¸m skal holde en sÃ¥kalt BiffDag for alle som vil, i Mathallen 24.juni! Han skal live kokkelere og vise hvordan man lager den perfekte biffen.\r\n\r\nRÃ¥, medium eller stekt! Hva foretrekker du?\r\n\r\nDette begynner klokken 12.00                                                                                ', 'MAT'),
(11, 'Student foredrag', 'Westerdals, FjÃ¦rdingen', '2017-05-12 13:00:00', 'https://www.westerdals.no/artikkel/campus-Fjerdingen/', 'Bilder-Skole/foredrag.jpg', '                                                                                                Studentene skal holde foredrag om hvordan det er Ã¥ gÃ¥ her pÃ¥ Westerdals. De skal begynne Ã¥ fortelle om hvordan ting foregÃ¥r her pÃ¥ Westerdals og litt om hvordan de triver her.\r\n\r\nEr miljÃ¸et bra? Blir de hÃ¸rt? ble forventningene mÃ¸tt da de begynte her? Dette er bra Ã¥ fÃ¥ med seg hvis man er usikker pÃ¥ om man vil begynne her pÃ¥ westerdals. Dette er Ã¥pent for alle!                                                                                ', 'SKOLE'),
(12, 'Kunstig Intelligens og fremtiden', 'Westerdals, FjÃ¦rdingen', '2017-05-30 12:00:00', 'https://www.westerdals.no/artikkel/campus-Fjerdingen/https://no.wikipedia.org/wiki/Kunstig_intelligens', 'Bilder-Aktivitet/kunstig.jpg', '                                                Hovedlederen for Intelligente Systemer vil starte dagen med Ã¥ holde et foredrag om kunstig teknologi og fremtiden! Og fortelle om at westerdals vil henge med i denne utviklingen.\r\n\r\nEtter dette vil det vÃ¦re stands der folk kan prÃ¸ve alt fra VR, 3D printing til Ã¥ se hologrammer. Dette blir gÃ¸y! fremtiden er her\r\n\r\n                                        ', 'AKTIVITET'),
(13, 'Rock Night!', 'Westerdals, FjÃ¦rdingen', '2017-05-21 18:00:00', 'https://www.westerdals.no/artikkel/campus-Fjerdingen/', 'Bilder-Aktivitet/rock.jpg', '                                                                                                Studentene ved Musikklinjen ved Westerdals vil holde en minikonsert for alle over 18 Ã¥r. De som skal spille er the Watchers, de gleder seg til Ã¥ se deg!\r\n\r\nEtter dette vil det bli servering i baren med quiz. Dette blr kos!\r\n\r\nDette begynner klokken 18.00 i Fjerdingen                                                                                ', 'AKTIVITET');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
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
