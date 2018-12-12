-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 05:10 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ass2`
--

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `id` int(11) NOT NULL,
  `url_anh` text NOT NULL,
  `ten` varchar(100) NOT NULL,
  `theloai` varchar(15) DEFAULT NULL,
  `mota` text NOT NULL,
  `ngaytao` date NOT NULL,
  `ngaysua` date NOT NULL,
  `trangthai` int(11) NOT NULL,
  `tentacgia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`id`, `url_anh`, `ten`, `theloai`, `mota`, `ngaytao`, `ngaysua`, `trangthai`, `tentacgia`) VALUES
(1, 'https://i.imgur.com/fcVVPsZ.jpg', 'INVINCIBLE CONQUEROR', 'Action', 'The strong are lonesome. Overcoming the loneliness pushes you to stand invincible at the top.\r\nPro-disciple of the Shaolin Temple on earth, Huang Xiaolong was reborn into a Martial Spirit world, carrying Hua Xia’s secret knowledge, the Body Metamorphose Scripture.\r\nIn a Martial Spirit world, only those with Martial Spirit are able to train in battle qi and becoming a warrior. Huang Xiaolong born with a heaven-defying rare Martial Spirit was mistakenly taken for common variant Martial Spirit during the awakening ceremony conducted by the tribe and thus sidelined.\r\nHowever, Huang Xiaolong with his common “variant” Martial Spirit again, and again displayed unnatural talent, defeating geniuses, shocking the clan and the entire Martial Spirit World', '2018-12-12', '2018-12-12', 0, 'SHEN JIAN'),
(2, 'https://i.imgur.com/j3QJ9yC.jpg', 'Black Bellied Belle: Demon Lord, Bite The Bait Please', 'Fantasy', 'The first time they met they had battled fiercely, just for a mere bunch of herbs. She needed it to save\r\n	 people, and he wanted to use it to save his own life. “Let go of it, or you will die.” The man’s violet \r\n	 eyes were cold and sinister as he said in a low voice. She held on tightly to the base of the herb and \r\n	 pulled its roots right out of the ground, before she turned her eyes back with a crafty smile. “It’s mine\r\n	 now. s.n.a.t.c.h it from me if you can.” When they met several years later they were no longer on opposing\r\n	  sides in hostility. In order to repay the debt for having stolen the herb back then, she went on to \r\n	  miraculously cure his body’s condition, relieving him of the inhumane torment that wrecked at his body day\r\n	  and night. He was amazed by the G.o.dly skills in Medicine she possessed and his heart went on to fall \r\n	  irrecoverably head over heels in love.', '2018-12-12', '2018-12-12', 0, 'XUANHUAN'),
(3, 'https://i.imgur.com/6Ua5si8.jpg', 'Picked Up A Demon King To Be A Maid', 'COMEDY', 'If the demon king was reduced to a slave, what would you do to her? Would you kill her and become humanity’s greatest hero? Or would you enslave her and enjoy the highest level of pleasure in the world? No, he doesn’t want any of that, Lin Xiao just wanted to be an unremarkable reserve hero. Black stocking long leg princess, two-faced loli saint… no one can tempt him to change his majestic ideals of eating and waiting for death! That’s why his answer was — “Demon King, can you quickly put on your clothes and scram on out of here?”', '2018-12-12', '2018-12-12', 0, '????'),
(4, 'https://i.imgur.com/qfTtNB7.jpg', 'Martial God Asura', 'ACTION', 'In terms of potential, Even if you are not a genius, you can learn Mysterious Techniques and martial skills. You can also learn without a teacher.\r\nIn terms of strength, Even if you have tens of thousands of treasures, you may not be able to defeat my grand World Spirit army.\r\nWho am I? Every single living thing in the world views me as Asura. However, I did not know about that. Thus, as Asura, I became the Martial G.o.d.', '2018-12-12', '2018-12-12', 0, 'XIULUO WUSHEN'),
(5, 'https://i.imgur.com/tzGNJwq.jpg', 'Spirit Hotel', 'COMEDY', 'After being unemployed for a long time, Feisha s.h.i.+ finally found a new job – the front desk manager at the oldest hotel in the universe. This hotel has a fallen angel, vampire, werewolf, faerie, dwarf, t.i.tan, invisible person&h.e.l.lip; just no humans. This hotel serves customers who are fallen angels, vampires, werewolves, faeries, dwarfs, t.i.tans, invisible people&h.e.l.lip; still no humans. This hotel’s name? Noah’s Ark.', '2018-12-12', '2018-12-12', 0, 'SU YOU BING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
