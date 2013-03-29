-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2013 at 12:32 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soulcoaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendaitems`
--

CREATE TABLE IF NOT EXISTS `agendaitems` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `agendaitems`
--

INSERT INTO `agendaitems` (`id`, `date`, `time`, `title`, `info`) VALUES
(5, '2013-04-21', '10.00 tot 17.00 uur', 'Opendag Stichting de Ster', 'Gratis informatieve consulenten.\nLokatie Kulturhus De Rietborgh\nBorgsche Rieten 15\nTerborg');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(63) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `type`, `name`, `info`, `description`, `content`) VALUES
(2, 'html', 'lezingen', '', 'Lezingen inleiding', '<p class="intro"><strong>Er kunnen lezingen en workshops over diverse onderwerpen voor u in groeps verband&nbsp; als op locatie&nbsp; in huis landfort te megchelen worden verzorgd. Hierover kunt u met mij contact opnemen.</strong></p>\n'),
(3, 'html', 'nieuwsbrief', '', 'Nieuwsbriefpagina inhoud', '<p><strong>Wilt u op de hoogte worden gehouden betreffende lezingen, workshops en activiteiten. Meldt u zich dan aan voor de nieuwsbrief.</strong></p>\n'),
(4, 'html', 'gastenboek', '', 'Gastenboek Inleiding', '<p><strong>Geef in eigen bewoordingen weer hoe je de coaching of Re-Connective healing &nbsp;consulten hebt ervaren, en wat dit voor je heeft betekend.</strong></p>\n'),
(5, 'html', 'essentie', '', 'Essentie Inhoud', '<p class="intro">Luister naar jezelf, leef vanuit je hart.</p>\n\n<p class="intro">Soul-Coaching is een praktijk voor diegene, die begeleid wil worden om weer in contact te komen met wie hij/zij in essentie is.</p>\n\n<p>Je eigen kracht en mogelijkheden weer kunnen ervaren in je leven, leven zoals die bedoeld is. Om weer vertrouwen&nbsp; en verantwoordelijkheid te nemen en weer op eigen kracht je levenskoers te bepalen. Je krijgt inzicht in je gedrag, denken, emoties, voelen en het leren loslaten van o.a. negatieve overtuigingen, waardoor je positieve veranderingen gaat ervaren en leert voelen hoe je levensrichting een positieve wending kan krijgen, waardoor je jouw levenspad weer gaat herkennen en herinneren.</p>\n\n<h2><em>Zit je op een kruispunt in je leven? Ben jij je eigen richtinggevoel even kwijt, zodat het lijkt dat je geen grip hebt op je leven, door situaties die nu bij jou spelen.</em></h2>\n\n<p>Deze situaties met bijbehorende emoties zijn levenslessen. Deze lessen laten je zien, waar je niet verwerkte pijnpunten uit je verleden zitten, via emoties zoals angst, boosheid, verdriet, teleurstelling. Deze pijnpunten en emoties mag je gaan begrijpen en loslaten zodat je kunt groeien naar een hoger bewustwordingsniveau. Als deze lessen niet worden begrepen en verwerkt zullen deze lessen op diverse manieren, als een patroon van vervelende situaties, weer terugkomen in je leven. Waarschijnlijk pak je deze situaties telkens op hetzelfde niveau aan waarop je ze ook hebt gecre&euml;erd. Levenslessen of situaties kunnen alleen maar worden opgelost als je er met een hoger bewustzijn naar kunt kijken. Dit kan door de situatie vanuit een ander perspectief te bekijken en te benaderen zoals op zielsniveau. Dit kan lastig zijn. Meestal zal je het probleem weg drukken of negeren alsof het niet bestaat. Met als gevolg dat dit probleem te pas en te onpas opduikt in je leven en je uit je kracht haalt, waarbij je niet de juiste keuzes voor jezelf maakt. Herken je dit patroon? Dan wil deze emotie, situatie of levensles geaccepteerd &nbsp;en begrepen worden zodat je deze kunt loslaten. Met Soul-Coach-begeleiding&nbsp; leer je stapje voor stapje de ballast van je levenslessen te begrijpen en vervolgens los te laten. Met nieuw inzicht en bewustwording op zielsniveau zal je lichter door het leven gaan en dienen de mogelijkheden zich aan die bij jou horen. Deze veranderingen zijn voor iedereen haalbaar. Met een beetje begeleiding en jouw eigen positieve inzet kun je dat,&nbsp;als je luistert naar je ziel leven vanuit je hart.</p>\n\n<p>Tijdens de coach-sessie wordt je begeleid om weer verbinding te maken met de bron-energie van de aarde en je hogere zelf of ziel, deze hogere zelf is een goddelijk deel van jou, het hoger weten. Het weten wat goed is voor jou. Door onze opvoeding, familie, vrienden, liefdesrelaties, school, opleidingen, werk en religie kunnen we ons leven zijn gaan leiden op ego niveau, volgens de daarop baserende normen en waarden, maar niet zoals we werkelijk zijn. Dit kan er toe leiden&nbsp; dat je je niet bewust bent van je eigen wensen en verlangens. Door weer bewust te gaan leven en aanwezig te zijn, kom je dichter bij je essentie, en word je je weer bewust, dat jij degene bent die bepaalt hoe jou leven er uitziet, en kun je weer genieten.</p>\n\n<p>Als je niet voldoende in verbinding bent met je essentie, bestaat de kans dat het ego de leiding heeft in je leven.&nbsp; Het ego heb je gecre&euml;erd in jouw leven om te kunnen overleven. Het ego is niet in staat om te zien wat werkelijk goed is voor jou en kan niet het &lsquo;grote plaatje&rsquo; zien. Het kan niet overzien wat voor jou de juiste keuzes zijn om de lessen te leren die belangrijk zijn voor jou. Deze lessen heb je nodig voor je persoonlijke-en spirituele groei en ontwikkeling, waardoor je steeds bewuster wordt en je leven lichter en mooier wordt. Door bewust te worden dat de stem in je hoofd (denken) de stem van je ego is en de stem van je hart (intu&iuml;tie) de stem van je essentie is, kun je een keuze maken door welke stem jij je laat leiden. Je kunt&nbsp; bewust een keuze maken of je jouw ego jouw leven laat bepalen of dat je gaat leven naar wie je werkelijk bent.</p>\n'),
(6, 'html', 'lichteninformatie', '', 'Licht en Informatie Inhoud', '<p>Alles bestaat uit energie en energie laat zich zien als licht. Licht is bewustzijn, licht is informatie, licht is leven. Jij bent licht.??Je licht kan minder stralend worden door gebeurtenissen uit het verleden, die doorwerken in het heden, door zorgen te ervaren en in angst te leven.?Onverwerkte gebeurtenissen en onverwerkte emoties zetten zich vast in je energiesysteem als een energetische blokkade. De plaats waar deze blokkade zich vastzet is afhankelijk van de soort blokkade. Je onttrekt letterlijk je licht en daarmee je bewustzijn uit dit gebied, omdat je niet kunt leven met de hoeveelheid pijn die onverwerkte gebeurtenissen en emoties met zich meebrengen. Dit is een onbewust proces en je &lsquo;vergeet&rsquo; dat je deze blokkades hebt. Het gevolg is dat je je steeds minder blij en gelukkig gaat voelen en dat deze blokkades je belemmeren in je huidige leven, zonder dat je precies kunt zeggen wat hiervan de oorzaak is. Deze belemmering kan op zeer veel verschillende manieren zichtbaar worden en het kan ook zijn doorwerking hebben op je fysieke lichaam en daarmee op je gezondheid.??Door je licht opnieuw te laten schijnen op deze belemmerende blokkades, word je je weer bewust van de onderliggende gebeurtenissen en emoties en kun je dit eenvoudig helen en loslaten. Door de technieken waarmee gewerkt wordt tijdens een coaching, worden de bijbehorende emoties&nbsp; kort &lsquo;aangeraakt&rsquo; en is het niet nodig om alles opnieuw te beleven. Het resultaat is dat jouw licht terugkeert in je energetische systeem en dat je daardoor weer meer in verbinding komt met degene die je werkelijk bent, je beperkende patronen kunt doorbreken en je het zelfgenezend vermogen van je lichaam &lsquo;aanzet&rsquo; tot genezing, waardoor je gezondheid vooruit gaat. Doordat je deze heling zelf hebt gecre&euml;erd, geeft dit innerlijk vertrouwen en verhoogt het je zelfvertrouwen.</p>\n'),
(7, 'html', 'kosmischeintelligentie', '', 'Kosmische Intelligentie Inhoud', '<p>De kracht van Soul-Coaching en de intelligente kosmische frequentie van Re-Connective Healing laten je weer verbinden met het universum en jouw diepste zijn. Deze bewustwording en heling zal een levens-veranderend effect op je hebben. Door de helende verbinding ga je weer voelen en ervaren wat jouw levensopdracht is. Je gaat begrijpen waarom je alle moeilijke situaties, die je op je pad kreeg, nodig had en wat hiervan het doel was. Hiermee bereik je, dat je jouw leven gaat begrijpen met alle ups en downs, en zal je ook jouw kracht en macht terughalen, waarbij je zal begrijpen waarom je deze levenslessen nodig had. Dat het nodig was om te groeien, te worden en te zijn wie je nu bent. Nu is het moment aangebroken, dat je dit mag gaan begrijpen voor de toekomst, zodat je de lessen, die nog op je levenspad gaan komen, gaat herkennen en bewust wordt wat je mag leren van deze lessen.</p>\n\n<p>Je zal deze lessen gaan waarderen, omdat ze je naar een hoger plan brengen. Daar waar jij wilt zijn, maar nu vanuit bewustzijn. Deze lessen zullen je nu niet meer uit je kracht te halen. Je begrijpt nu wat je er van mag leren. Mocht dit toch gebeuren dan weet je dat je de emotie die zich laat zien, verwerkt en los gelaten mag worden. Het doel van dit coach-traject is dat je hierna op eigen kracht deze emoties gaat begrijpen en kunt loslaten. Dit geeft je het gevoel weer kaptein op eigen schip te zijn!</p>\n\n<p>Vanuit spiritueel oogpunt kunnen veranderingen duurzaam plaatsvinden als je bewust bent van wie je werkelijk bent, en dus verbonden bent met je ware zelf, je ziel. De informatie die vrijkomt uit je ziel is bv je intu&iuml;tie, je eerste gevoel. Dit is een gevoel op harts-niveau. Voelen wat goed is voor jou, is voelen dat je oprecht bent verbonden met je hogere zelf vanuit een onvoorwaardelijke liefde voor jezelf. Vanuit dit voelen maak je de juiste keuzes in je leven die goed zijn voor jou. Hierdoor sta je in jouw kracht en leef je jouw leven!&nbsp;</p>\n\n<p>Tijdens een coaching ga je op zielsniveau werken om de verbinding met je essentie verder te versterken en energetische blokkades die zich laten zien op verschillende gebieden in je leven op te sporen. De enige methode om verder te kunnen met je leven, is door je pijnen los te laten en te transformeren met o.a de methode &lsquo;Evenwicht in Licht&rsquo;. Deze &nbsp;methode is voortgekomen uit de EFT (Emotional Freedom Technique) en de EE (Emotioneel Evenwicht). Door op deze verschillende gebieden te werken met de methode &lsquo;Evenwicht in Licht&rsquo;, kan de energie weer vrij stromen in je lichaam en kun je bewust waarnemen dat er een verandering heeft plaats gevonden in je systeem en daarmee in je leven.</p>\n\n<h2><em>Hoe je gedachten je leven bepalen.</em></h2>\n\n<h2><em>Alleen jij kan jouw leven, dat jij in je gedachten hebt gecre&euml;erd, veranderen. Door jouw overtuigingen te veranderen, zal jouw leven veranderen. &quot;Daarmee heb je zelf de sleutel in handen tot een gezonder en gelukkiger leven.</em></h2>\n'),
(8, 'textarea', 'site_description', 'Probeer de site te omschrijven in maximaal 150 tekens, liever +/- 60. ', 'Website Omschrijving', 'Soul-Coaching is een praktijk voor diegene, die begeleid wil worden om weer in contact te komen met wie hij/zij in essentie is. '),
(9, 'html', 'waarkunjeaanwerken', '', 'Waar kun je aan werken Inhoud', '<p class="intro">Door jezelf op het pad van zelfontwikkeling te brengen kan jij jezelf ontplooien, door jezelf te gaan herinneren wie je bent en&nbsp; ga jij openstaan voor alle nieuwe inzichten die zich aandienen in je leven. Voel hoe het is om &lsquo;echt te leven&rsquo; en te vertrouwen op je eigen informatie, intu&iuml;tie.</p>\n\n<p style="font-family: ''Helvetica Neue'', Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; line-height: 18px;">Tijdens de coachsessies word geleerd om je weer te verbinden met je hogere zelf, en te gronden met de bronenergie van de aarde, vanuit deze verbinding van zielskracht en hoger weten kun je je doelen bereiken en je verbinden met je essentie, zodat je onvoorwaardelijk van jezelf houdt en volledig vertrouwt op jezelf, op je eigen intu&iuml;tie en informatie.</p>\n\n<p style="font-family: ''Helvetica Neue'', Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; line-height: 18px;">Het niet in verbinding zijn met je essentie, het onderdrukken van emoties, het leven met beperkende geloofsovertuigingen en energetische blokkades hebben invloed op je leven. Dit kan op verschillende manieren tot uiting komen.</p>\n\n<p style="font-family: ''Helvetica Neue'', Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; line-height: 18px;">Hieronder enkele voorbeelden:</p>\n\n<p style="font-family: ''Helvetica Neue'', Arial, Helvetica, sans-serif; font-size: 12px; font-style: normal; font-variant: normal; line-height: 18px;">Je irriteert je aan bepaald gedrag van iemand.<br />\nJe hebt een oordeel over je eigen gedrag of het gedrag van iemand anders.<br />\nJe voelt je &lsquo;minder&rsquo; dan een ander.<br />\nJe voelt je &lsquo;meer&rsquo; dan een ander.<br />\nJe stelt voorwaarden aan jezelf of aan een ander.<br />\nJe geeft een ander de schuld van gebeurtenissen in jouw leven.<br />\nJe bent bang om &lsquo;fouten&rsquo; te maken.<br />\nJe bent jaloers op een ander.<br />\nJe voelt je slachtoffer in bepaalde situaties.<br />\nJe loopt steeds tegen dezelfde patronen aan in je leven.<br />\nJe voelt je regelmatig schuldig tegenover anderen.<br />\nJe bent ontevreden over je leven.<br />\nJe bent bang om de controle te verliezen over je leven.<br />\nJe hebt altijd het gevoel dat er iets mist in je leven.<br />\nJe voelt je afhankelijk van anderen.<br />\nJe voelt je niet echt gelukkig.</p>\n\n<p class="intro">Met veel plezier begeleid ik mensen in hun levensprocessen van spirituele en innerlijke groei om zichzelf en hun levenspad weer te herinneren, dit te ontwikkelen en bewust en gelukkig te leven.</p>\n\n<p class="intro">Albertine Wissink&nbsp; ( Foto Albertine)</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `guestbookitems`
--

CREATE TABLE IF NOT EXISTS `guestbookitems` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(63) NOT NULL,
  `name` varchar(255) NOT NULL,
  `accepted` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `guestbookitems`
--

INSERT INTO `guestbookitems` (`id`, `timestamp`, `ip`, `name`, `accepted`, `text`) VALUES
(18, '2013-03-16 11:16:30', '127.0.0.1', 'Tom Lankhorst', 1, 'Ik wens je veel plezier met je coaching praktijk!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

