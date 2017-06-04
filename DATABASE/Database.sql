CREATE DATABASE IF NOT EXISTS `xml` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `xml`;


CREATE TABLE `xml` (
  `ID` int(11) NOT NULL,
  `TEXT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `xml` (`ID`, `TEXT`) VALUES
(27, 'TEST'),
(28, 'TEST0'),
(29, 'TEST1'),
(30, 'TEST2'),
(31, 'TEST3');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `xml`
--
ALTER TABLE `xml`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `xml`
--
ALTER TABLE `xml`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

