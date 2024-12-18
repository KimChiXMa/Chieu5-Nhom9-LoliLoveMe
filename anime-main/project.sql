-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2024 at 07:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `author` text NOT NULL,
  `studio` text NOT NULL,
  `descrip` text NOT NULL,
  `thumbnail` text NOT NULL,
  `so_tap` varchar(5) NOT NULL DEFAULT '?'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anime`
--

INSERT INTO `anime` (`id`, `name`, `author`, `studio`, `descrip`, `thumbnail`, `so_tap`) VALUES
(1, 'Akame ga Kill!\r\n', 'Takahiro', 'White Fox', 'Tatsumi là một chiến binh nhỏ tuổi (chắc thế), vì muốn cứu ngôi làng của mình mà cậu cùng 2 người bạn đã dứt áo ra đi lên thủ đô, một nơi vốn đã tha hóa và trở thành địa ngục trần gian. \n\nVà xui xẻo thay, cậu vừa đến được thủ đô thì bị lừa mất sạch tiền bạc bởi một cô gái, thế nhưng cậu lại được một cô gái xinh đẹp khác giúp đỡ trong lúc gặp khó khăn. \n\nVậy chuyện gì mà Tatsumi chưa biết về gia đình của cô gái xinh đẹp đã giúp đỡ cậu, khi mà gia đình của cô ấy bị một nhóm sát thủ viếng thăm (có bao gồm cả cô gái đã lừa tình tiền của cậu trước đó), và chuyện gì sẽ xảy ra nếu nhóm sát thủ này là người tốt, và đang cần thêm nhân lực đây...?', 'https://drive.google.com/file/d/1GxdqDvlKA06mDSWfEjjyQpklIHuhaRZd/view?usp=drive_link', '24'),
(2, 'Charlotte', 'Maeda Jun', 'P.A.Works', 'Nội dung phim là câu chuyện xoay quanh những khả năng đặc biệt xảy ra trong một tỷ lệ phần trăm nhỏ của chàng trai và cô gái ở tuổi dậy thì. Yū Otosaka sử dụng quyền lực của mình mà không có người khác biết, và sống một cuộc sống trường trung bình khá bình thường. Trước khi anh đột nhiên xuất hiện một cô gái, Nao Tomori. Do cuộc họp của ông với cô ấy, số phận của đặc quyền người dùng sẽ được tiếp xúc. Đây là câu chuyện của những người có quyền hạn đặc biệt của những người kinh nghiệm thanh niên, được viết bởi Maeda Jun', 'https://drive.google.com/file/d/1AKkkoF9dYVYVRmWNWXWYci4arHvOZMNk/view?usp=drive_link', '15'),
(3, 'Kobayashi-san Chi no Maid Dragon', 'Coolkyousinnjya', 'Kyoto Animation', 'Kobayashi - một nữ kĩ sư phần mềm chăm chỉ, độc thân, sống một mình ở một khu chung cư. Một lần, cô tình cờ cứu giúp một con rồng, loài vật huyền thoại có thể hủy diệt cả thế giới. Có nợ thì phải trả, dù đó có là loài người thấp kém, Tohru đã được dạy như thế. Cô tâm niệm sẽ giúp đỡ hết mình cho ân nhân trong vai trò maid - một hầu gái, dù đôi khi mọi thứ có vẻ không suôn sẻ lắm... Hãy cùng theo dõi hành trình trở thành Hầu Gái của Tohru và những tình huống dở khóc dở cười mà Kobayashi phải trải qua nào!', 'https://drive.google.com/file/d/11LGR2ncgaF9l0ZgrhtWGvwR9AzbDMxwP/view?usp=drive_link', '13'),
(4, 'Shigatsu wa Kimi no Uso', 'Takao Yoshioka', 'A-1 Pictures', 'Câu chuyện kể về Arima Kousei, một thần đồng piano. Nhưng kể từ sau chấn động tâm lí do cái sự qua đời của mẹ cậu, Kosei đã không thể nghe thấy bất kì âm thanh nào. Cứ tưởng là cậu sẽ không bao giờ động vào những phím piano nữa nhưng đó là trước khi cậu đã gặp Miyazono Kaori...', 'https://drive.google.com/file/d/19JXU1eLGKERynI2ELAkGczxaA-NO83Kb/view?usp=drive_link', '22'),
(5, 'Re:Zero kara Hajimeru Isekai Seikatsu', 'Watanabe Masaharu', 'White Fox', '1 thanh niên đi mua tạp hóa đang trên đường về bỗng dưng được triệu hồi sang thế giới khác, ở đó anh chết đi lại quay về thời điểm bắt đầu.', 'https://drive.google.com/file/d/1VKQd_WkpXwj1pFVQtyO9I43IJZv_QKR6/view?usp=drive_link', '25'),
(6, 'Fate/Apocrypha', 'Higashide Yūichirō', 'A – 1 Pictures.', 'Nội dung của Fate/Apocrypha vẫn xoay quanh Cuộc Chiến Chén Thánh tại thành phố Fuyuki nhưng diễn ra trong một thế giới song song với thế giới của Fate/Stay Night. Tại đây, sau Cuộc Chiến Chén Thánh lần thứ 3, Đại Chén Thánh của thành phố Fuyuki đã đột ngột biến mất một cách bí ẩn.\r\n\r\nRất lâu sau đó, vào thời điểm những năm 2000, một gia tộc mang tên gọi Yggdmilennia đã công khai việc đánh cắp Chén Thánh của họ đồng thời tách rời khỏi Hội Pháp Sư. Để đoạt lại Chén Thánh, Hội Pháp Sư đã cử đi 50 thành viên tinh nhuệ nhất của mình nhưng tất cả đều bị sát hại bởi Servant Lancer của nhà Yggdmilennia. Tuy nhiên, người sống sót cuối cùng trong 50 pháp sư đã kịp kích hoạt cơ chế dự phòng của Đại Chén Thánh, được sử dụng nhằm ngăn chặn sự hợp tác giữa các Servant bằng cách cho phép 7 Master và 7 Servant mới được tham gia vào trận chiến. Từ đó mở màn cho Cuộc Đại Chiến Chén Thánh với 14 Master cùng 14 Servant tại thành phố Trifas giữa Hắc Trận Doanh – những thành viên của gia tộc Yggdmilennia và Xích Trận Doanh – những Master đại diện cho Hội Pháp Sư. Ngoài ra, để tạo sự cân bằng giữa hai bên, bản thân Chén Thánh cũng đã phải triệu hồi Ruler, Servant thứ 15 để làm người điều đình cho cuộc chiến.', 'https://drive.google.com/file/d/1kOB6k9nHI-lG8Sq-o5UZYpqchuurCZrf/view?usp=drive_link', '25'),
(7, 'Fate/Extra Last Encore\r\n', 'Aniplex', 'Shaft', 'Hakuno thấy mình bị buộc phải đấu tranh để sống sót trong một cuộc chiến mà anh không hiểu vì giải thường gì, Cậu đi trong một thế giới ảo kỳ lạ mà không nhớ gì về quá khứ. Hakuno Kishinami sẽ phải đối mặt với cả bạn bè và kẻ thù trong trận chiến với cái chết để không chỉ chiếm hữu một vật thể bí ẩn được biết đến như là \"Chén Thánh\", mà còn để tìm kiếm trả lời cho câu hỏi quan trọng nhất của tất cả: \"Tôi là ai?', 'https://drive.google.com/file/d/1vCyw6hBpB4Hpys6HEHNylTCzuzzoZN_B/view?usp=drive_link', '13'),
(8, 'Fate/Stay Night', 'Aniplex', 'Studio Deen', 'Fate Stay Night nói về câu chuyện \"Cuộc Chiến Dành Chén Thánh\" của các \"Servant\" và chỉ có các \"Servant\" mới có thể chạm vào Chén Thánh, Các \"Servant\" là những vị anh hùng trong truyền thuyết và được triệu hồi từ 7 \"Master\", họ tranh dành vì Chén Thánh, vì Chén Thánh sẽ biến điều ước của họ thành sự thật....\r\n\r\n', 'https://drive.google.com/file/d/1extVE-40BA0qTSlOnLJny9jvi1ikMAkI/view?usp=drive_link', '24'),
(9, 'Fate/stay night: Unlimited Blade Works\r\n', 'Aniplex', 'Studio Deen', 'Phiên bản này được làm dựa trên route thứ hai của VN cùng tên do Type-Moon thực hiện.\r\n\r\nTại thành phố Fuyuki, có một cuộc chiến diễn ra trong bí mật suốt 200 năm mà không ai hay biết. Cuộc chiến bắt đầu khi 7 Pháp Sư hội tụ đông đủ và dưới tư cách Master, họ triệu hồi nên những Servant hùng mạnh vốn là những Anh Hùng trong quá khứ. Tất cả đem chính mạng sống của mình ra đặt cược mong có thể đoạt được Chén Thánh - vật được cho là có thể biến bất kỳ điều ước nào thành hiện thực.', 'https://drive.google.com/file/d/1OarIWXRjRF4Cp-w2x2p8sQy0Ppi5kA2f/view?usp=drive_link', '?'),
(10, 'Fate/Grand Order: Zettai Majuu Sensen Babylonia', 'Aniplex', 'CloverWorks', 'Chuyển thể Dị Điểm 7 trong cốt truyện chính của game Fate/Grand Order. Lấy bối cảnh 2600 TCN tại Lưỡng Hà khi nhân loại bị đẩy vào bờ vực tuyệt diệt bởi thần thánh, nhóm Master tại Chaldea sẽ hợp lực cùng với vua của Uruk, Gilgamesh, chiến đấu bảo vệ loài người.', 'https://drive.google.com/file/d/1SMsQES748cKw2WrI49Fp1qe_N_s39knT/view?usp=drive_link', '21'),
(11, 'Alya Sometimes Hides Her Feelings in Russian', 'Ryota Itoh', 'Doga Kobo', '“И наменятоже обрати внимание” “Eh, gì vậy?” “Chẳng có gì cả đâu? Mình chỉ vừa mới nói ‘Tên này đúng là ngốc thật mà’ thôi” “Cậu có thể ngừng việc quăng ra mấy lời xúc phạm mình bằng tiếng Nga được không!?” Cô gái mang mái tóc bạch kim xinh đẹp tuyệt trần khó có ai có thể sánh bằng ấy đang ngồi cạnh tôi, Arya-san, nở một nụ cười đắc chí... nhưng, sự thật thì lại hoàn toàn khác. Vừa xong, cô ấy đã nói “Tớ cũng muốn được cậu chú ý nữa” bằng tiếng Nga! Thực ra, tôi, Kuze Masachika, sở hữu kỹ năng đọc-nghe-hiểu tiếng Nga đạt đến mức thượng thừa ngang người bản địa luôn rồi. Tôi không thể ngăn bản thân nở một nụ cười thích thú trước một Arya-san đang không hề hay biết gì về điều đó, người mà hôm nay, cũng đang nói ra những lời rất ngọt ngào bằng tiếng Nga!? Đây là một câu truyện romcom tuổi trẻ với một cô nàng JK người Nga siêu cao cấp, là đối tượng của sự ngưỡng mộ của mọi học sinh trong trường!', 'https://drive.google.com/file/d/15vBi8EyeujrH8cMcAGACyHWJRDISpEAp/view?usp=drive_link', '12');

-- --------------------------------------------------------

--
-- Table structure for table `anime_tag`
--

CREATE TABLE `anime_tag` (
  `id_anime` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anime_tag`
--

INSERT INTO `anime_tag` (`id_anime`, `id_tag`) VALUES
(1, 6),
(1, 8),
(2, 1),
(2, 3),
(2, 5),
(6, 8),
(7, 8),
(8, 8),
(9, 8),
(10, 8);

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id_anime` int(11) NOT NULL,
  `tentap` int(11) NOT NULL,
  `id` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`id_anime`, `tentap`, `id`) VALUES
(11, 9, 'https://drive.google.com/file/d/10N_3rk-HSfARsKOYJg_KLNCSSq1EYP1q/view?usp=drive_link'),
(11, 12, 'https://drive.google.com/file/d/12gm_jnpSepjuTbl4FVI8uw9FQTewLbNI/view?usp=drive_link'),
(11, 6, 'https://drive.google.com/file/d/14n3_iooBVEVFke6jd2Tqyy5zly16hXaL/view?usp=drive_link'),
(1, 6, 'https://drive.google.com/file/d/1aRVVBLonoAFxaxi71rFt4Vu4rvI73vFn/view?usp=drive_link'),
(1, 8, 'https://drive.google.com/file/d/1BKiTjayfPvL9J-fqiv6JOW1qWwjQ86yY/view?usp=drive_link'),
(11, 2, 'https://drive.google.com/file/d/1djT3Lsv1EO5x7VuslSZVtBakfLH589TM/view?usp=drive_link'),
(11, 1, 'https://drive.google.com/file/d/1DVasScGV5QResLQGmnxqsiAPZgzJPbWw/view?usp=drive_link'),
(1, 7, 'https://drive.google.com/file/d/1f-ky8cJoCyEMt87gHJZ7Jq3TXRxPNEdD/view?usp=drive_link'),
(1, 3, 'https://drive.google.com/file/d/1fdzXKRYH3p_eGyBg5YkrQnRYg9AQS1jT/preview'),
(11, 4, 'https://drive.google.com/file/d/1FW-AdWcPXjH_MwZY1b2fw_bHvKk0rKr4/view?usp=drive_link'),
(1, 1, 'https://drive.google.com/file/d/1HRC4D7it5sgmlDtdGNKTPOvJLNQSTT2O/view?usp=drive_link'),
(1, 2, 'https://drive.google.com/file/d/1hU-B5Y3y-Y5d91ZHszxrkaXWV7V_K-4G/preview'),
(11, 3, 'https://drive.google.com/file/d/1hYWb_QzPNqTnfNCLifxfEGRWrimpg46E/view?usp=drive_link'),
(11, 7, 'https://drive.google.com/file/d/1IrFo-48jE3FKumGDJaMpJ9vQ_zf5adhG/view?usp=drive_link'),
(11, 10, 'https://drive.google.com/file/d/1mhUmsTbRDOxv8z9AmBUQiJdFq49vh6D6/view?usp=drive_link'),
(1, 10, 'https://drive.google.com/file/d/1PBzlkrEBTGy-boTHJdVMRut5hCmJLOE2/view?usp=drive_link'),
(11, 8, 'https://drive.google.com/file/d/1qM3c2CtXI1B44bRwnBs7LnVNtWUlggAg/view?usp=drive_link'),
(1, 11, 'https://drive.google.com/file/d/1sFGF1F2sAgmbDSqQhcCNehadiaZURyWZ/view?usp=drive_link'),
(11, 5, 'https://drive.google.com/file/d/1uVUzM6oIvYJ_SpecjpE4QMaOHRUPPuVq/view?usp=drive_link'),
(1, 9, 'https://drive.google.com/file/d/1WMr91zul_xuJHZiPA6j5erxB3IzSFeUn/view?usp=drive_link'),
(1, 4, 'https://drive.google.com/file/d/1yW1OY2Ohyrgk-KhsfyoPJeMucyGD9W3Q/view?usp=drive_link'),
(1, 5, 'https://drive.google.com/file/d/1ZMffvlAbVtzR1QUkHPvjAyyHKttb_Blm/view?usp=drive_link');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `user_id` int(11) NOT NULL,
  `anime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `name_tag` text NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`name_tag`, `id_tag`) VALUES
('romcom', 1),
('shounen', 2),
('học đường', 3),
('shoujo', 4),
('comedy', 5),
('Fantasy', 6),
('Historical', 7),
('Action', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `displayname` text DEFAULT NULL,
  `email` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `displayname`, `email`) VALUES
(1, 'hy123456', 'hy123456', 'hy123456', 'hy@gmail.com'),
(2, 'aaa', 'aaa', 'aaa', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anime_tag`
--
ALTER TABLE `anime_tag`
  ADD PRIMARY KEY (`id_anime`,`id_tag`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`user_id`,`anime_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
