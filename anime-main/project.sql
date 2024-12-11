-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 10:15 AM
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
(1, 'Akame ga Kill!\r\n', 'Takahiro', 'White Fox', 'Tatsumi là một chiến binh nhỏ tuổi (chắc thế), vì muốn cứu ngôi làng của mình mà cậu cùng 2 người bạn đã dứt áo ra đi lên thủ đô, một nơi vốn đã tha hóa và trở thành địa ngục trần gian. \n\nVà xui xẻo thay, cậu vừa đến được thủ đô thì bị lừa mất sạch tiền bạc bởi một cô gái, thế nhưng cậu lại được một cô gái xinh đẹp khác giúp đỡ trong lúc gặp khó khăn. \n\nVậy chuyện gì mà Tatsumi chưa biết về gia đình của cô gái xinh đẹp đã giúp đỡ cậu, khi mà gia đình của cô ấy bị một nhóm sát thủ viếng thăm (có bao gồm cả cô gái đã lừa tình tiền của cậu trước đó), và chuyện gì sẽ xảy ra nếu nhóm sát thủ này là người tốt, và đang cần thêm nhân lực đây...?', 'https://static.wikia.nocookie.net/dubbing9585/images/c/cd/AkamegaKill.jpg', '24'),
(2, 'Charlotte', 'Maeda Jun', 'P.A.Works', 'Nội dung phim là câu chuyện xoay quanh những khả năng đặc biệt xảy ra trong một tỷ lệ phần trăm nhỏ của chàng trai và cô gái ở tuổi dậy thì. Yū Otosaka sử dụng quyền lực của mình mà không có người khác biết, và sống một cuộc sống trường trung bình khá bình thường. Trước khi anh đột nhiên xuất hiện một cô gái, Nao Tomori. Do cuộc họp của ông với cô ấy, số phận của đặc quyền người dùng sẽ được tiếp xúc. Đây là câu chuyện của những người có quyền hạn đặc biệt của những người kinh nghiệm thanh niên, được viết bởi Maeda Jun', 'https://upload.wikimedia.org/wikipedia/vi/3/32/Charlotte_key.jpg', '15'),
(3, 'Kobayashi-san Chi no Maid Dragon', 'Coolkyousinnjya', 'Kyoto Animation', 'Kobayashi - một nữ kĩ sư phần mềm chăm chỉ, độc thân, sống một mình ở một khu chung cư. Một lần, cô tình cờ cứu giúp một con rồng, loài vật huyền thoại có thể hủy diệt cả thế giới. Có nợ thì phải trả, dù đó có là loài người thấp kém, Tohru đã được dạy như thế. Cô tâm niệm sẽ giúp đỡ hết mình cho ân nhân trong vai trò maid - một hầu gái, dù đôi khi mọi thứ có vẻ không suôn sẻ lắm... Hãy cùng theo dõi hành trình trở thành Hầu Gái của Tohru và những tình huống dở khóc dở cười mà Kobayashi phải trải qua nào!', 'https://animehay.de/upload/poster/1853.jpg', '13'),
(4, 'Shigatsu wa Kimi no Uso', 'Takao Yoshioka', 'A-1 Pictures', 'Câu chuyện kể về Arima Kousei, một thần đồng piano. Nhưng kể từ sau chấn động tâm lí do cái sự qua đời của mẹ cậu, Kosei đã không thể nghe thấy bất kì âm thanh nào. Cứ tưởng là cậu sẽ không bao giờ động vào những phím piano nữa nhưng đó là trước khi cậu đã gặp Miyazono Kaori...', 'https://animehay.de/upload/poster/75.jpg', '22'),
(5, 'Re:Zero kara Hajimeru Isekai Seikatsu', 'Watanabe Masaharu', 'White Fox', '1 thanh niên đi mua tạp hóa đang trên đường về bỗng dưng được triệu hồi sang thế giới khác, ở đó anh chết đi lại quay về thời điểm bắt đầu.', 'https://animehay.de/upload/poster/442.jpg', '25'),
(6, 'Fate/Apocrypha', 'Higashide Yūichirō', 'A – 1 Pictures.', 'Nội dung của Fate/Apocrypha vẫn xoay quanh Cuộc Chiến Chén Thánh tại thành phố Fuyuki nhưng diễn ra trong một thế giới song song với thế giới của Fate/Stay Night. Tại đây, sau Cuộc Chiến Chén Thánh lần thứ 3, Đại Chén Thánh của thành phố Fuyuki đã đột ngột biến mất một cách bí ẩn.\r\n\r\nRất lâu sau đó, vào thời điểm những năm 2000, một gia tộc mang tên gọi Yggdmilennia đã công khai việc đánh cắp Chén Thánh của họ đồng thời tách rời khỏi Hội Pháp Sư. Để đoạt lại Chén Thánh, Hội Pháp Sư đã cử đi 50 thành viên tinh nhuệ nhất của mình nhưng tất cả đều bị sát hại bởi Servant Lancer của nhà Yggdmilennia. Tuy nhiên, người sống sót cuối cùng trong 50 pháp sư đã kịp kích hoạt cơ chế dự phòng của Đại Chén Thánh, được sử dụng nhằm ngăn chặn sự hợp tác giữa các Servant bằng cách cho phép 7 Master và 7 Servant mới được tham gia vào trận chiến. Từ đó mở màn cho Cuộc Đại Chiến Chén Thánh với 14 Master cùng 14 Servant tại thành phố Trifas giữa Hắc Trận Doanh – những thành viên của gia tộc Yggdmilennia và Xích Trận Doanh – những Master đại diện cho Hội Pháp Sư. Ngoài ra, để tạo sự cân bằng giữa hai bên, bản thân Chén Thánh cũng đã phải triệu hồi Ruler, Servant thứ 15 để làm người điều đình cho cuộc chiến.', 'https://animehay.de/upload/poster/2270.jpg', '25'),
(7, 'Fate/Extra Last Encore\r\n', 'Aniplex', 'Shaft', 'Hakuno thấy mình bị buộc phải đấu tranh để sống sót trong một cuộc chiến mà anh không hiểu vì giải thường gì, Cậu đi trong một thế giới ảo kỳ lạ mà không nhớ gì về quá khứ. Hakuno Kishinami sẽ phải đối mặt với cả bạn bè và kẻ thù trong trận chiến với cái chết để không chỉ chiếm hữu một vật thể bí ẩn được biết đến như là \"Chén Thánh\", mà còn để tìm kiếm trả lời cho câu hỏi quan trọng nhất của tất cả: \"Tôi là ai?', 'https://animehay.ink/upload/poster/2471.jpg', '13'),
(8, 'Fate/Stay Night', 'Aniplex', 'Studio Deen', 'Fate Stay Night nói về câu chuyện \"Cuộc Chiến Dành Chén Thánh\" của các \"Servant\" và chỉ có các \"Servant\" mới có thể chạm vào Chén Thánh, Các \"Servant\" là những vị anh hùng trong truyền thuyết và được triệu hồi từ 7 \"Master\", họ tranh dành vì Chén Thánh, vì Chén Thánh sẽ biến điều ước của họ thành sự thật....\r\n\r\n', 'https://animehay.ink/upload/poster/342.jpg', '24'),
(9, 'Fate/stay night: Unlimited Blade Works\r\n', 'Aniplex', 'Studio Deen', 'Phiên bản này được làm dựa trên route thứ hai của VN cùng tên do Type-Moon thực hiện.\r\n\r\nTại thành phố Fuyuki, có một cuộc chiến diễn ra trong bí mật suốt 200 năm mà không ai hay biết. Cuộc chiến bắt đầu khi 7 Pháp Sư hội tụ đông đủ và dưới tư cách Master, họ triệu hồi nên những Servant hùng mạnh vốn là những Anh Hùng trong quá khứ. Tất cả đem chính mạng sống của mình ra đặt cược mong có thể đoạt được Chén Thánh - vật được cho là có thể biến bất kỳ điều ước nào thành hiện thực.', 'https://animehay.ink/upload/poster/960.jpg', '?'),
(10, 'Fate/Grand Order: Zettai Majuu Sensen Babylonia', 'Aniplex', 'CloverWorks', 'Chuyển thể Dị Điểm 7 trong cốt truyện chính của game Fate/Grand Order. Lấy bối cảnh 2600 TCN tại Lưỡng Hà khi nhân loại bị đẩy vào bờ vực tuyệt diệt bởi thần thánh, nhóm Master tại Chaldea sẽ hợp lực cùng với vua của Uruk, Gilgamesh, chiến đấu bảo vệ loài người.', 'https://animehay.ink/upload/poster/2886.jpg', '21'),
(11, 'Alya Sometimes Hides Her Feelings in Russian', 'Ryota Itoh', 'Doga Kobo', '“И наменятоже обрати внимание” “Eh, gì vậy?” “Chẳng có gì cả đâu? Mình chỉ vừa mới nói ‘Tên này đúng là ngốc thật mà’ thôi” “Cậu có thể ngừng việc quăng ra mấy lời xúc phạm mình bằng tiếng Nga được không!?” Cô gái mang mái tóc bạch kim xinh đẹp tuyệt trần khó có ai có thể sánh bằng ấy đang ngồi cạnh tôi, Arya-san, nở một nụ cười đắc chí... nhưng, sự thật thì lại hoàn toàn khác. Vừa xong, cô ấy đã nói “Tớ cũng muốn được cậu chú ý nữa” bằng tiếng Nga! Thực ra, tôi, Kuze Masachika, sở hữu kỹ năng đọc-nghe-hiểu tiếng Nga đạt đến mức thượng thừa ngang người bản địa luôn rồi. Tôi không thể ngăn bản thân nở một nụ cười thích thú trước một Arya-san đang không hề hay biết gì về điều đó, người mà hôm nay, cũng đang nói ra những lời rất ngọt ngào bằng tiếng Nga!? Đây là một câu truyện romcom tuổi trẻ với một cô nàng JK người Nga siêu cao cấp, là đối tượng của sự ngưỡng mộ của mọi học sinh trong trường!', 'https://m.media-amazon.com/images/S/pv-target-images/8236b4c0432b21acf56976c12139d708f68e8251857603c1523d002f7c500092._BR-6_AC_SX720_FMjpg_.jpg', '12');

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
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id_episode` int(11) NOT NULL,
  `id_anime` int(11) NOT NULL,
  `tap` int(11) NOT NULL,
  `link_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`id_episode`, `id_anime`, `tap`, `link_video`) VALUES
(1, 1, 1, 'https://www.youtube.com/embed/xQeFjowkGMU'),
(2, 1, 2, 'https://www.youtube.com/embed/Lexs1sAr5FE'),
(3, 1, 3, 'https://www.youtube.com/embed/whtaJKXIfUk'),
(4, 11, 1, 'https://www.youtube.com/embed/FSN6IRJMAEw');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id_episode`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id_episode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
