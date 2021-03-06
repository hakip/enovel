-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 05:13 AM
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
-- Table structure for table `chuong`
--

CREATE TABLE `chuong` (
  `id` int(11) NOT NULL,
  `ten` text NOT NULL,
  `noidung` text NOT NULL,
  `ngaytao` date NOT NULL,
  `ngaysua` date DEFAULT NULL,
  `truyen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chuong`
--

INSERT INTO `chuong` (`id`, `ten`, `noidung`, `ngaytao`, `ngaysua`, `truyen_id`) VALUES
(1, 'Chapter 1', 'Xuanyuan Ches eyes were dark, and he did not force the issue. Ah Chi looked outwardly like a completely heartless fella, but his heart and mind were sensitive and meticulous. If he did not want to speak about it, then no one would be able to get anything out of him no matter how much one asked.\r\n\r\n\"Thats right, I wanted to ask how did you get injured? You got yourself into such a wretched state.\"\r\n\r\nThe moment he asked that, Mu Chs smile on his face immediately congealed, and he then said seemingly rather discomfited. \"I dont even want to speak about that. I went out with my friends to reminisce about old times while having a few drinks. On the way back, I just had to stumble into a intense fight between two great forces in the pugilist world. I did not want to draw trouble to myself and was just about to make detour around them when those people suddenly a.s.sumed that I was going to make a report and tell on them, where they then attacked me like mad.\"\r\n\r\nXuanyuan Che grinned and said: \"Ive told you that drinking will only bring you trouble and you refuse to listen. The day will come that you could be killed by a knife in the back and you wont even know.\"\r\n\r\nThis fella had already begun to sneak into the Imperial wine cellar and stole wine to drink when he was just three years old. Hence, he had trained his body to develop a great tolerance for wine, sober after a thousand cups, drinking wine like he was drinking water.\r\n\r\nHearing the admonis.h.i.+ng words, Mu Chi remained indifferent but just curled his mouth up in a sneer. Suddenly remembering something, the corners of his mouth then curled up and that good looking and handsome face became more excited in an instant.\r\n\r\nXuanyuan Che arched up an eyebrow. \"What are you thinking of that made you so happy?\"\r\n\r\nXuanyuan Che burst into mocking laughter from anger. \"Seeing that youve been extorted of a million in gold, you seem to still be rather happy about it arent you?\"', '2018-12-12', NULL, 2),
(2, 'Chapter 1', 'Elena still remembers that Lin Xiao had told her a few days ago that he had mastered double chant like teacher Woos, and said that he wanted to find time to show her. At that time, Elena did not believe him at all and just thought that Lin Xiao was talking big.\r\n\r\nThe double chant cannot be done by simply mastering the technique, using “double chant” imposes a very serious mental burden on the caster. Only a magician with a magic level of more than six can barely resist it, an ordinary magician might even be tormented into madness by the serious mental burden!\r\n\r\nTherefore, she said that sixth-level magic was the absolute condition for mastering “double chant”, which was different from “chantless instant cast”.\r\n\r\nYet, Lin Xiao just overturned the absolute restriction and rewrote the rules of magic! That complicated incantation, that incomparably huge fireball, that terrifying destructive power, what could it be other than double chant?\r\n\r\nHe was clearly only a fourth-level magician, yet he successfully completed the double chant, achieving what was absolutely impossible as defined by the rules of magic!', '2018-12-12', NULL, 5),
(3, 'Chapter 1', 'If a primary school student beat an adult in a track and field compet.i.tion, \r\n	it would show that he was talented and a genius. If he won the world champions.h.i.+ps, he was a unique human being who would appear once every thousand years and would be placed above all geniuses.\r\n\r\nBut what if a primary school student ran faster than an F1 car, or faster than a Boeing airplane? Then what?\r\n\r\nThis was no longer a question of whether they were a genius or not. That would just be straight up \r\ndaydreaming.\r\n\r\n“The good news was that the crisis was completely solved, and the Jackalwere leader was burned without\r\n leaving any residue. They successfully completed the actual combat drill before teacher Momm!\r\n\r\nMore importantly, Lin Xiaos plan was a perfect success, and Caesar was willing to give up on the duel!\r\n\r\nIn reality, what had happened was all a show set up by Lin Xiao.\r\n\r\nIt was not an easy task to let Caesar voluntarily give up on the duel. It was not enough to simply save Caesar, because that might ignite his fighting spirit even more. In order to achieve this goal, Lin Xiao not only had to prove that he was stronger than Caesar, but he also had to make Caesar “convinced and willingly submit”.\r\n\r\nTo do this, and at the same time not going as far as revealing his true strength, Lin Xiao needed a special environment, this environment must have four things at the same time —— Lin Xiao, and Caesar, the two male protagonists, an enemy Caesar could not defeat, and an exceptionally secret stage.\r\n\r\nLin Xiao expended painstaking effort in order to prepare these four things.\r\n\r\nFirst of all, in order to not make Caesar suspicious, he first looked for Rosie, then using the pretense of helping Rosie improve her relations.h.i.+p with Caesar, he persuaded Rosie to invite Caesar to join his team. He then used the S-level evaluation as bait, and finally, successfully caught the big fish, Caesar.\r\n\r\nLin Xiao, Rosie, Caesar, and Elena, the four teamed up to hunt the Jackalwere leader, this was the first step of the plan.\r\n\r\nIn this way, the first two of the four things —— Lin Xiao and Caesar were in place, they then just had to find an enemy that Caesar could not defeat, and a secret stage.\r\n\r\nBefore, Teacher Momm had protected Lin Xiao and others when returning to the camp and encountered the Jackalwere leader. Later, Lin Xiao specifically confirmed the strength of the Jackalwere leader with Elena, confirming that it had impressive strength, and with the help of its armor and weapons, it was easy to defeat the Caesar that had an injury on his left arm, thus the latter half of the story occurred.\r\n\r\nLin Xiao made use of Elena’s “Monarch’s Aura” and “Magic Detection Radar” to sneak into the forest, drew detailed maps, and then disguised it as stuff left by mercenaries, then snuck Caesar and Rosie out of the camp to look for the Jackalwere leader.\r\n\r\nThis was the second step of the plan. According to the map, they soon arrived at Black Lake. They also found the Jackalwere leader. The third thing was —— an enemy that Caesar could not defeat, so three things were prepared.\r\n\r\nThe next step was the most important part ——', '2018-12-12', NULL, 3),
(4, 'Chapter 2', 'If a primary school student beat an adult in a track and field compet.i.tion, it would show that he was talented and a genius. If he won the world champions.h.i.+ps, he was a unique human being who would appear once every thousand years and would be placed above all geniuses.\r\n\r\nBut what if a primary school student ran faster than an F1 car, or faster than a Boeing airplane? Then what?\r\n\r\nThis was no longer a question of whether they were a genius or not. That would just be straight up daydreaming.\r\n\r\n“No, this isn’t an illusion!” After confirming that she was not dreaming, Elena knit her brows.\r\n\r\nLin Xiao, what in the world are you?\r\n\r\nWas he an emissary of the G.o.ddess of light? Or was he an angel from the realm of the G.o.ds? Did he descend to the human realm, pretend to be a good for nothing, specifically to deal with this fallen Demon King? Elena suddenly felt her head hurt.\r\n\r\nA Demon King targeted by the G.o.ds —— if that was true, then what’s the point of struggling? Wouldnt it be better to obediently serve as Lin Xiao’s maid for a lifetime?', '2018-12-12', NULL, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chuong_truyen` (`truyen_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chuong`
--
ALTER TABLE `chuong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuong`
--
ALTER TABLE `chuong`
  ADD CONSTRAINT `chuong_truyen` FOREIGN KEY (`truyen_id`) REFERENCES `truyen` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
