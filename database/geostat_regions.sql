-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 03:02 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geostat_regions`
--

-- --------------------------------------------------------

--
-- Table structure for table `georgia_indicators`
--

CREATE TABLE `georgia_indicators` (
  `ID` int(11) NOT NULL,
  `Area` varchar(128) NOT NULL,
  `Population` varchar(128) NOT NULL,
  `GDP` varchar(128) NOT NULL,
  `GDPPerCapita` varchar(128) NOT NULL,
  `UnemploymentRate` varchar(128) NOT NULL,
  `EmploymentRate` varchar(128) NOT NULL,
  `EmploymentRateIndustry` varchar(128) NOT NULL,
  `AverageSalaryIndustry` varchar(128) NOT NULL,
  `RegistredEntities` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `georgia_indicators`
--

INSERT INTO `georgia_indicators` (`ID`, `Area`, `Population`, `GDP`, `GDPPerCapita`, `UnemploymentRate`, `EmploymentRate`, `EmploymentRateIndustry`, `AverageSalaryIndustry`, `RegistredEntities`) VALUES
(1, '69.7', '3688.6', '12147.1', '5853.4', '20.6', '1295.9\r\n', '626.7', '896.8', '647875.0');

-- --------------------------------------------------------

--
-- Table structure for table `municipal_statistics`
--

CREATE TABLE `municipal_statistics` (
  `ID` int(11) NOT NULL,
  `basicInformation` varchar(128) NOT NULL,
  `Population` varchar(128) NOT NULL,
  `birth` varchar(128) NOT NULL,
  `death` varchar(128) NOT NULL,
  `naturalIncrease` varchar(128) NOT NULL,
  `marriage` varchar(128) NOT NULL,
  `divorce` varchar(128) NOT NULL,
  `populationDescription` varchar(255) NOT NULL,
  `employmentAndSalaries` varchar(128) NOT NULL,
  `businessSector` varchar(128) NOT NULL,
  `businessRegister` varchar(128) NOT NULL,
  `accordingToTheTypesOfActivities` varchar(128) NOT NULL,
  `AccordingToTheFormsOfOwnership` varchar(128) NOT NULL,
  `accordingToOrganizationalLegalForms` varchar(128) NOT NULL,
  `agriculture` varchar(128) NOT NULL,
  `construction` varchar(128) NOT NULL,
  `trading` varchar(128) NOT NULL,
  `hotels` varchar(128) NOT NULL,
  `transportAndStorage` varchar(128) NOT NULL,
  `healthCareAndSocialSecurity` varchar(128) NOT NULL,
  `education` varchar(128) NOT NULL,
  `culture` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `municipal_statistics`
--

INSERT INTO `municipal_statistics` (`ID`, `basicInformation`, `Population`, `birth`, `death`, `naturalIncrease`, `marriage`, `divorce`, `populationDescription`, `employmentAndSalaries`, `businessSector`, `businessRegister`, `accordingToTheTypesOfActivities`, `AccordingToTheFormsOfOwnership`, `accordingToOrganizationalLegalForms`, `agriculture`, `construction`, `trading`, `hotels`, `transportAndStorage`, `healthCareAndSocialSecurity`, `education`, `culture`) VALUES
(1, 'ძირითადი ინფორმაცია', 'მოსახლეობა', 'დაბადება', 'გარდაცვალება', 'ბუნებრივი მატება', 'ქორწინება', 'განქორწინება', 'მოსახლეობის აღწერა', 'დასაქმება და ხელფასები', 'ბიზნეს სექტორი', 'ბიზნეს რეგისტრი', 'საქმიანობის სახეების მიხედვით', 'საკუთრების ფორმების მიხედვით', 'ორგანიზაციულ-სამართლებრივი ფორმების მიხედვით', 'სოფლის მეურნეობა', 'მშენებლობა', 'ვაჭრობა', 'სასტუმროები', 'ტრანსპორტი და დასაწყობება', 'ჯანდაცვა და სოციალური უზრუნველყოფა', 'განათლება', 'კულტურა'),
(2, 'მუნიციპალიტეტის ფართობი ', 'მოსახლეობის რიცხოვნობა 1 იანვრის მდომარეობით', 'ცოცხლად დაბადებულთა რიცხოვნობა', 'გარდაცვლილთა რიცხოვნობა', 'ბუნებრივი მატება', 'რეგისტრირებულ ქორწინებათა რაოდენობა', 'რეგისტრირებულ განქორწინებათა რაოდენობა', 'მოსახლეობის მედიანური ასაკი', 'დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი):', 'ბიზნეს სექტორის ბრუნვა, სულ', 'რეგისტრირებული ბიზნეს სუბიექტების რაოდენობა (მოსახლეობის 1000 კაცზე)', 'რეგისტრირებული სუბიექტების რაოდენობა ეკონომიკური საქმიანობის სახეების მიხედვით', 'რეგისტრირებული სუბიექტების რაოდენობა საკუთრების ფორმის და ზომის მიხედვით', 'რეგისტრირებული სუბიექტების რაოდენობა ორგანიზაციულ-სამართლებრივი ფორმების მიხედვით', 'სასოფლო-სამეურნეო დანიშნულების მიწის ფართობის წილი მუნიციპალიტეტის მთელ ფართობში', 'მშენებლობაზე გაცემული ნებართვები', 'ბაზრების, ბაზრობების და ბაზრობის ტიპის საწარმოების რაოდენობა, ორგანიზაციულ-სამართლებრივი ფორმების მიხედვით', 'სასტუმროებისა და სასტუმროს ტიპის დაწესებულებების რაოდენობა (ადგილობრივი ერთეულების ჩათვლით)', 'საერთო სარგებლობის საავტომობილო გზების სიგრძე', 'პენსიის მიმღებთა რიცხოვნობა ', 'საჯარო სკოლამდელი აღზრდისა და განათლების დაწესებულებები', 'მუზეუმების რაოდენობა'),
(3, 'ადგილობრივი მმართველობის ერთეულის ადმინისტრაციული მდგომარეობა (რაიონული ცენტრი, თვითმმართველი ქალაქი, მუნიციპალიტეტის ადმინისტრა', 'მოსახლეობის რიცხოვნობა საქალაქო-სასოფლო დასახლებების მიხედვით 1 იანვრის მდგომარეობით', 'შობადობის ზოგადი კოეფიციენტი (მოსახლეობის 1 000 კაცზე)', 'მოკვდაობის ზოგადი კოეფიციენტი (მოსახლეობის 1 000 კაცზე)', 'ბუნებრივი მატების კოეფიციენტი (მოსახლეობის 1 000 კაცზე)', 'ქორწინების ზოგადი კოეფიციენტი (მოსახლეობის 1 000 კაცზე)', 'განქორწინების ზოგადი კოეფიციენტი (მოსახლეობის 1 000 კაცზე)', '65 წელზე მეტი ასაკის მოსახლეობის წილი (%)', 'დაქირავებით დასაქმებულთა რაოდენობა - ბიზნეს სექტორში (ათასი კაცი):', 'ბიზნეს სექტორის პროდუქციის გამოშვება, სულ', 'წელიწადში რეგისტრირებული ახალი ბიზნეს სუბიექტების რაოდენობა (მოსახლეობის 1 000 კაცზე)', 'აქტიური სუბიექტების რაოდენობა ეკონომიკური საქმიანობის სახეების მიხედვით', 'აქტიური სუბიექტების რაოდენობა საკუთრების ფორმის და ზომის მიხედვით', 'აქტიური სუბიექტების რაოდენობა ორგანიზაციულ-სამართლებრივი ფორმების მიხედვით', '', 'დასრულებული მშენებლობები', 'ბაზრების, ბაზრობების და ბაზრობის ტიპის საწარმოების რაოდენობა საკუთრების ფორმის მიხედვით', 'ნომრების რაოდენობა სასტუმროებსა და სასტუმროს ტიპის დაწესებულებებში', '', 'სოციალური პაკეტის მიმღებთა რიცხოვნობა', 'საჯარო და კერძო ზოგადსაგანმანათლებლო დაწესებულებები', 'პროფესიული თეატრების რაოდენობა'),
(4, 'ქალაქები და დაბები', 'ქალაქის მოსახლეობის წილი მუნიციპალიტეტის მთელ მოსახლეობაში  (%)', 'ცოცხლად დაბადებულთა რიცხოვნობა სქესის მიხედვით', 'გარდაცვლილთა რიცხოვნობა ასაკის და სქესის მიხედვით', '', 'დაქორწინებულთა რიცხოვნობა ასაკის და სქესის მიხედვით', 'განქორწინებულთა რიცხოვნობა ასაკის და სქესის მიხედვით', 'ასაკის დატვირთვის კოეფიციენტები', 'დაქირავებით დასაქმებულთა შრომის საშუალოთვიური ანაზღაურება - ბიზნეს სექტორში (ლარი):', 'ბიზნეს სექტორის შრომითი დანახარჯები, სულ', 'ეკონომიკურად აქტიური ბიზნეს სუბიექტების რაოდენობა (მოსახლეობის 1 000 კაცზე)', '', '', '', '', '', 'ბაზრების, ბაზრობების და ბაზრობის ტიპის საწარმოების რაოდენობა ტიპების მიხედვით', 'სასტუმროებისა და სასტუმროს ტიპის დაწესებულებების ფართობი', '', 'სოციალურად დაუცველი პირების წილი მთელ მოსახლეობაში', '', ''),
(5, 'ადმინისტრაციული ერთეულები და სოფლები', 'მოსახლეობის სიმჭიდროვე 1 კვ. კმ-ზე', 'დედის საშუალო ასაკი ბავშვის დაბადებისას', 'ჩვილ ბავშვთა მოკვდაობის კოეფიციენტი (1 000 ცოცხლად დაბადებულზე)', '', 'ქორწინების საშუალო ასაკი', '', '25-34 წლის მოსახლეობა (მოსახლეობის 1000 კაცზე)', '', 'ბიზნეს სექტორის საქონლისა და მომსახურების ყიდვები, სულ ', 'საჯარო დაწესებულებების რაოდენობა (მოსახლეობის 1000 კაცზე)', '', '', '', '', '', 'ბაზრების, ბაზრობების და ბაზრობის ტიპის საწარმოები ვაჭრობის დღეთა რაოდენობის მიხედვით.', 'სასტუმროებსა და სასტუმროს ტიპის დაწესებულებებში სტუმართა რაოდენობა ჩამოსვლის ადგილისა და მიზნის მიხედვით', '', 'რეგისტრირებული და საარსებო შემწეობის მიმღები ოჯახების რაოდენობა მუნიციპალიტეტების მიხედვით  ', '', ''),
(6, '', '', 'მკვდრადშობილთა რიცხოვნობა', '5 წლამდე ასაკის ბავშვთა მოკვდაობის კოეფიციენტი (1 000 ცოცხლად დაბადებულზე)', '', '', '', 'სხვაობა 10-24 წლის მცხოვრებთა რაოდენობასა და 50-64-ს შორის (მოსახლეობის 1000 კაცზე)', '', 'ბიზნეს სექტორის გადასაყიდად განკუთვნილი საქონლისა და მომსახურების ყიდვები, სულ ', '', '', '', '', '', '', 'ბაზრების, ბაზრობების და ბაზრობის ტიპის საწარმოების დირექციებში დასაქმებულთა საშუალო წლიური რაოდენობა', 'სასტუმროებისა და სასტუმროს ტიპის დაწესებულებებში დასაქმებულთა რაოდენობა', '', 'საარსებო შემწეობის მიმღებ ოჯახების წილი მთელ მოსახლეობაში', '', ''),
(7, '', '', '', 'თვითმკვლელობით გარდაცვლილთა რიცხოვნობა', '', '', '', 'შრომისუნარიანი მოსახლეობის წილი', '', 'ბიზნეს სექტორის დამატებული ღირებულება, სულ', '', '', '', '', '', '', 'ბაზრების, ბაზრობების და ბაზრობის ტიპის საწარმოებში სავაჭრო ადგილების რაოდენობა', '', '', '', '', ''),
(8, '', '', '', 'თვითმკვლელობის დონე (მოსახლეობის 10 000 კაცზე)', '', '', '', 'კერძო შინამეურნეობების რაოდენობა რეგიონების, თვითმმართველი ერთეულების, საქალაქო-სასოფლო დასახლებების და მათში მცხოვრებთა რიცხვის მიხედვით', '', 'ბიზნეს სექტორის შუალედური მოხმარება, სულ', '', '', '', '', '', '', 'ბაზრების, ბაზრობების და ბაზრობის ტიპის საწარმოებში დასაქმებულთა  რაოდენობა საშუალოდ ერთ დღეში', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', 'კერძო შინამეურნეობების რაოდენობა რეგიონების, თვითმმართველი ერთეულების, საქალაქო-სასოფლო დასახლებების და მათში მცხოვრებთა რიცხვის მიხედვით', '', 'ბიზნეს სექტორის ფიქსირებულ აქტივებში განხორციელებული ინვესტიციები, სულ', '', '', '', '', '', '', 'ბაზრების, ბაზრობების და ბაზრობის ტიპის საწარმოების ფინანსური მაჩვენებლები', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pagetitle`
--

CREATE TABLE `pagetitle` (
  `TitleID` int(11) NOT NULL,
  `PageTitleName` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagetitle`
--

INSERT INTO `pagetitle` (`TitleID`, `PageTitleName`) VALUES
(1, 'ოკუპირებული ტერიტორია (აფხაზეთი)'),
(2, 'სტატისტიკური ინფორმაცია სამეგრელო-ზემო სვანეთის რეგიონის შესახებ'),
(3, 'სტატისტიკური ინფორმაცია გურიის რეგიონის შესახებ'),
(4, 'სტატისტიკური ინფორმაცია აჭარის ავტონომიური რესპუბლიკის შესახებ'),
(5, 'სტატისტიკური ინფორმაცია სამცხე-ჯავახეთის რეგიონის შესახებ'),
(6, 'სტატისტიკური ინფორმაცია იმერეთის რეგიონის შესახებ'),
(7, 'სტატისტიკური ინფორმაცია რაჭა-ლეჩხუმისა და ქვემო სვანეთის რეგიონის შესახებ'),
(8, 'სტატისტიკური ინფორმაცია ქვემო ქართლის რეგიონის შესახებ'),
(9, 'სტატისტიკური ინფორმაცია კახეთის რეგიონის შესახებ'),
(10, 'სტატისტიკური ინფორმაცია თბილისის რეგიონის შესახებ'),
(11, 'სტატისტიკური ინფორმაცია მცხეთა-მთიანეთის რეგიონის შესახებ'),
(12, 'სტატისტიკური ინფორმაცია შიდა ქართლის რეგიონის შესახებ'),
(13, 'ოკუპირებული ტერიტორია (სამხრეთ ოსეთი)'),
(14, 'სტატისტიკური ინფორმაცია საქართველოს რეგიონების მიხედვით');

-- --------------------------------------------------------

--
-- Table structure for table `pagetitleeng`
--

CREATE TABLE `pagetitleeng` (
  `ID` int(11) NOT NULL,
  `PageTitleNameEng` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pagetitleeng`
--

INSERT INTO `pagetitleeng` (`ID`, `PageTitleNameEng`) VALUES
(1, 'Occupied Territory (Abkhazia)'),
(2, 'Statistics of Samegrelo-Zemo Svaneti Region'),
(3, 'Statistics of Guria Region'),
(4, 'Statistics of Autonomous Republic of Adjara'),
(5, 'Statistics of Samtskhe-Javakheti Region'),
(6, 'Statistics of Imereti Region'),
(7, 'Statistics of Racha-Lechkhumi and Kvemo Svaneti Region'),
(8, 'Statistics of Kvemo Kartli Region'),
(9, 'Statistics of Kakheti Region'),
(10, 'Statistics of Tbilisi Region'),
(11, 'Statistics of Mtskheta-Mtianeti Region'),
(12, 'Statistics of Shida Kartli Region'),
(13, 'Occupied Territory (Southern Ossetia)'),
(14, 'Statistical information by Regions of Georgia');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `ID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Area` varchar(128) NOT NULL,
  `Population` varchar(128) NOT NULL,
  `GDP` varchar(128) NOT NULL,
  `GDPPerCapita` varchar(128) NOT NULL,
  `UnemploymentRate` varchar(128) NOT NULL,
  `EmploymentRate` varchar(128) NOT NULL,
  `EmploymentRateIndustry` varchar(128) NOT NULL,
  `AverageSalaryIndustry` varchar(128) NOT NULL,
  `RegistredEntities` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`ID`, `Name`, `Area`, `Population`, `GDP`, `GDPPerCapita`, `UnemploymentRate`, `EmploymentRate`, `EmploymentRateIndustry`, `AverageSalaryIndustry`, `RegistredEntities`) VALUES
(1, 'აფხაზეთი', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(2, 'სამეგრელო-ზემო სვანეთი', '7468.2', '301.2', '3131.4', '3251.1', '15.7', '105.8', '27.0', '1018.7', '61226'),
(3, 'გურია', '2033.2', '105.3', '777.6', '2323.8', '17.1', '43.4', '8.1', '708.1', '19056'),
(4, 'აჭარის ა.რ', '2900', '355.5', '4377.0', ' 3982.9\r\n', '19.2', '120.7', '68.1', '995.6', '71910'),
(5, 'სამცხე-ჯავახეთი', '6412.8', '148.3', '1702.3', '3610.7', '14.9', '56.9', '11.5', '963.1', '24048'),
(6, 'იმერეთი', '6414.7', '466.6', '4151.6', '2757.1', '23.1', '147.4', '53', '929.6', '107107'),
(7, 'რაჭა-ლეჩხუმი და ქვემო სვანეთი', '4600', '27.6', '286.3', '3197.8', '30.0', '8.1', '2.1', '738.8', '6633'),
(8, 'ქვემო ქართლი', '6436.2', '434.5', '3955.6', '2918.9', '25.2', '123.9', '39,3', '1111.2', '59357'),
(9, 'კახეთი', '11375', '304.9', '2522.4', '2618.2', '8.7', '116.1', '20.7', '832.7', '48769'),
(10, 'თბილისი', '504.2', '1,171.2', '24882.8', '6702.8', '23.8', '379.9', '443.3', '1348.1', '353588'),
(11, 'მცხეთა-მთიანეთი', '5606', '92.4', '1292.5', '4451.6', '14.7', '31.2', '10.8', '1275.4', '14922'),
(12, 'შიდა ქართლი', '3428.3', '250.5\r\n', '2187.2', '2762.6', '22.3', '84.0', '18.9', '751.3', '35095'),
(13, 'სამხრეთ ოსეთი', '-', '-', '-', '-', '-', '-', '-', '-', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `georgia_indicators`
--
ALTER TABLE `georgia_indicators`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `municipal_statistics`
--
ALTER TABLE `municipal_statistics`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pagetitle`
--
ALTER TABLE `pagetitle`
  ADD PRIMARY KEY (`TitleID`);

--
-- Indexes for table `pagetitleeng`
--
ALTER TABLE `pagetitleeng`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `georgia_indicators`
--
ALTER TABLE `georgia_indicators`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `municipal_statistics`
--
ALTER TABLE `municipal_statistics`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `pagetitle`
--
ALTER TABLE `pagetitle`
  MODIFY `TitleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pagetitleeng`
--
ALTER TABLE `pagetitleeng`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
