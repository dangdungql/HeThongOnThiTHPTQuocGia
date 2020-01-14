-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Sam 11 Janvier 2020 à 13:07
-- Version du serveur :  5.5.64-MariaDB
-- Version de PHP :  7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `webhoctap`
--

-- --------------------------------------------------------

--
-- Structure de la table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL,
  `questions_id` int(10) unsigned NOT NULL,
  `name_answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cheking` tinyint(2) NOT NULL DEFAULT '0',
  `MaCongThuc` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `answers`
--

INSERT INTO `answers` (`id`, `questions_id`, `name_answer`, `cheking`, `MaCongThuc`, `update_time`) VALUES
(1, 1, 'Bình Ngô Đại Cáo', 0, 2147483647, '2019-03-16 20:48:16'),
(2, 1, 'Hịch Tướng sĩ', 0, 2147483647, '2019-03-16 20:48:16'),
(3, 1, 'Nam Quốc Sơn Hà', 1, 2147483647, '2019-03-16 20:48:16'),
(4, 1, 'Bản Tuyên Ngôn Độc lập 2/9', 0, 2147483647, '2019-03-16 20:48:16'),
(5, 2, 'Không biết', 0, 2147483647, '2019-03-16 20:48:16'),
(6, 2, 'Có thể bằng 2', 1, 2147483647, '2019-03-16 20:48:16'),
(7, 2, 'Chắc bằng 3', 0, 2147483647, '2019-03-16 20:48:16'),
(8, 2, 'Chắc bằng 4', 0, 2147483647, '2019-03-16 20:48:16'),
(9, 3, 'Tôi không biết', 0, 2147483647, '2019-03-16 20:48:16'),
(10, 3, 'Có thể bằng 3', 0, 2147483647, '2019-03-16 20:48:16'),
(11, 3, 'Chắc chắn bằng 4', 1, 2147483647, '2019-03-16 20:48:16'),
(12, 3, 'Có thể bằng 6', 0, 2147483647, '2019-03-16 20:48:16'),
(13, 4, 'Tôi không biết', 0, 2147483647, '2019-03-16 20:48:16'),
(14, 4, 'Có thể bằng 3', 0, 2147483647, '2019-03-16 20:48:16'),
(15, 4, 'Chắc chắn bằng 6', 1, 2147483647, '2019-03-16 20:48:16'),
(16, 4, 'Có thể bằng 6', 0, 2147483647, '2019-03-16 20:48:16'),
(17, 5, 'Tôi không biết', 0, 2147483647, '2019-03-16 20:48:16'),
(18, 5, 'Có thể bằng 3', 0, 2147483647, '2019-03-16 20:48:16'),
(19, 5, 'Chắc chắn bằng 6', 1, 2147483647, '2019-03-16 20:48:16'),
(20, 5, 'Có thể bằng 6', 0, 2147483647, '2019-03-16 20:48:16'),
(21, 6, 'Hồ', 0, NULL, NULL),
(22, 6, 'Nguyễn', 1, NULL, NULL),
(23, 6, 'Hoàng', 0, NULL, NULL),
(24, 6, 'Đặng', 0, NULL, NULL),
(25, 7, 'Ở vị trí cân bằng lò xo không biến dạng', 0, NULL, NULL),
(26, 7, 'Li độ có độ lớn bằng độ biến dạng lò xo.', 0, NULL, NULL),
(27, 7, 'Lực đàn hồi là lực kéo về.', 0, NULL, NULL),
(28, 7, 'Lò xo luôn dãn khi vật dao động điều hòa.', 1, NULL, NULL),
(29, 8, 'Lực đàn hồi tác dụng vào vật bằng 0.', 0, NULL, NULL),
(30, 8, 'Gia tốc của vật đạt cực tiểu.', 0, NULL, NULL),
(31, 8, 'Lực kéo về bằng giá trị lực đàn hồi.', 0, NULL, NULL),
(32, 8, 'Động năng của vật cực đại.', 1, NULL, NULL),
(33, 9, 'lò xo có chiều dài tự nhiên.', 0, NULL, NULL),
(34, 9, 'độ lớn lực đàn hồi cực đại.', 1, NULL, NULL),
(35, 9, 'lực tác dụng vào vật bằng 0.', 0, NULL, NULL),
(36, 9, 'gia tốc vật bằng 0.', 0, NULL, NULL),
(37, 10, 'Biên độ dao động lớn hơn độ biến dạng của lò xo khi vật qua vị trí cân bằng.', 0, NULL, NULL),
(38, 10, 'Lò xo luôn dãn trong quá trình dao động.', 1, NULL, NULL),
(39, 10, 'Trong một chu kì, lực đàn hồi tác dụng lên vật đổi chiều hai lần.', 0, NULL, NULL),
(40, 10, 'Tại vị trí cân bằng, lực đàn hồi tác dụng lên vật hướng xuống.', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `answerstn`
--

CREATE TABLE IF NOT EXISTS `answerstn` (
  `id` int(11) NOT NULL,
  `questions_id` int(11) NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `Made` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `answerstn`
--

INSERT INTO `answerstn` (`id`, `questions_id`, `NoiDung`, `Made`) VALUES
(13, 1, '9,8 m.', 1),
(14, 1, '19,6 m.', 1),
(15, 1, '9,8 m.', 1),
(16, 1, '57 m.', 1),
(17, 2, '0,05 s.', 1),
(18, 2, '0,45 s.', 1),
(19, 2, '0,05 s.', 1),
(20, 2, '2 s.', 1),
(21, 3, '8,35 s.', 1),
(22, 3, '7,8 s.', 1),
(23, 3, '8,35 s.', 1),
(24, 3, '1,5 s.', 1),
(25, 1, '9,8 m.', 2),
(26, 1, '19,6 m.', 2),
(27, 1, '9,8 m.', 2),
(28, 1, '57 m.', 2),
(29, 2, '0,05 s.', 2),
(30, 2, '0,45 s.', 2),
(31, 2, '0,05 s.', 2),
(32, 2, '2 s.', 2),
(33, 3, '8,35 s.', 2),
(34, 3, '7,8 s.', 2),
(35, 3, '8,35 s.', 2),
(36, 3, '1,5 s.', 2),
(37, 1, 'Anh', 3),
(38, 1, 'Mỹ', 3),
(39, 1, 'Anh', 3),
(40, 1, 'Liên Xô', 3),
(41, 2, 'Việt Nam gia nhập ASEAN (1995). ', 3),
(42, 2, 'Hiệp ước Bali được kí kết (1976). ', 3),
(43, 2, 'Việt Nam gia nhập ASEAN (1995). ', 3),
(44, 2, 'Brunây gia nhập ASEAN (1984). ', 3),
(45, 3, 'khủng hoảng và suy thoái', 3),
(46, 3, 'phát triển mạnh mẽ', 3),
(47, 3, 'khủng hoảng và suy thoái', 3),
(48, 3, 'phục hồi và phát triển', 3),
(49, 4, 'tham dự Hội nghị Quốc tế Nông dân', 3),
(50, 4, 'tham dự Đại hội V của Quốc tế Cộng sản', 3),
(51, 4, 'tham dự Hội nghị Quốc tế Nông dân', 3),
(52, 4, 'thành lập Hội Việt Nam Cách mạng Thanh niên', 3),
(53, 5, 'An Nam trẻ', 3),
(54, 5, 'Người nhà quê', 3),
(55, 5, 'An Nam trẻ', 3),
(56, 5, 'Búa liềm', 3),
(57, 6, 'Đảng Cộng sản Đông Dương', 3),
(58, 6, 'Đảng Lao động Việt Nam', 3),
(59, 6, 'Đảng Cộng sản Đông Dương', 3),
(60, 6, 'Đông Dương Cộng sản liên đoàn', 3),
(61, 7, 'Nhật đảo chính Pháp ở Đông Dương', 3),
(62, 7, 'Nhật tiến vào chiếm đóng Đông Dương', 3),
(63, 7, 'Nhật đảo chính Pháp ở Đông Dương', 3),
(64, 7, 'chiến tranh Thái Bình Dương bùng nổ', 3),
(65, 8, 'khóa chặt biên giới Việt - Trung', 3),
(66, 8, 'cô lập căn cứ địa Việt Bắc', 3),
(67, 8, 'khóa chặt biên giới Việt - Trung', 3),
(68, 8, 'quốc tế hóa chiến tranh Đông Dương', 3),
(69, 9, 'sử dụng bạo lực cách mạng', 3),
(70, 9, 'đấu tranh đòi hiệp thương tổng tuyển cử', 3),
(71, 9, 'sử dụng bạo lực cách mạng', 3),
(72, 9, 'kết hợp đấu tranh chính trị và ngoại giao', 3),
(73, 10, 'Huế - Đà Nẵng', 3),
(74, 10, 'Đường 14 - Phước Long', 3),
(75, 10, 'Huế - Đà Nẵng', 3),
(76, 10, 'Tây Nguyên', 3),
(77, 11, 'xuất khẩu gạo đứng đầu thế giới', 3),
(78, 11, 'đã có dự trữ và xuất khẩu gạo.', 3),
(79, 11, 'xuất khẩu gạo đứng đầu thế giới', 3),
(80, 11, 'khắc phục triệt để nạn đói trong nước', 3),
(81, 12, 'Cộng hòa', 3),
(82, 12, 'Quân chủ', 3),
(83, 12, 'Cộng hòa', 3),
(84, 12, 'Xã hội chủ nghĩa', 3),
(85, 13, 'Liên Xô có trách nhiệm tham gia chống quân phiệt Nhật ở châu Á.', 3),
(86, 13, 'Thành lập tổ chức Liên hợp quốc để duy trì hòa bình, an ninh thế giới. ', 3),
(87, 13, 'Liên Xô có trách nhiệm tham gia chống quân phiệt Nhật ở châu Á.', 3),
(88, 13, 'Phân công quân đội Đồng minh giải giáp quân Nhật ở Đông Dương', 3),
(89, 14, 'Nước Namibia tuyên bố độc lập (1990).', 3),
(90, 14, 'Nước Cộng hòa Ai Cập được thành lập (1953). ', 3),
(91, 14, 'Nước Namibia tuyên bố độc lập (1990).', 3),
(92, 14, 'Bản Hiến pháp (1993) của Nam Phi chính thức xóa bỏ chế độ phân biệt chủng tộc', 3),
(93, 15, 'Nam Phi ', 3),
(94, 15, 'Đông Bắc Á ', 3),
(95, 15, 'Nam Phi ', 3),
(96, 15, 'Mỹ Latinh', 3),
(97, 16, 'Nền kinh tế đứng đầu thế giới. ', 3),
(98, 16, 'Tiềm lực kinh tế - tài chính hùng hậu', 3),
(99, 16, 'Nền kinh tế đứng đầu thế giới. ', 3),
(100, 16, 'Mỹ bắt đầu bảo trợ về vấn đề hạt nhân', 3),
(101, 17, 'bước đầu đấu tranh tự giác', 3),
(102, 17, 'có một tổ chức công khai lãnh đạo.', 3),
(103, 17, 'bước đầu đấu tranh tự giác', 3),
(104, 17, 'có một đường lối chính trị rõ ràng. ', 3),
(105, 18, 'Đưa quần chúng nhân dân bước vào thời kỳ trực tiếp vận động cứu nước', 3),
(106, 18, 'Khẳng định đường lối lãnh đạo của Đảng và quyền lãnh đạo của giai cấp công nhân. ', 3),
(107, 18, 'Đưa quần chúng nhân dân bước vào thời kỳ trực tiếp vận động cứu nước', 3),
(108, 18, 'Là cuộc diễn tập đầu tiên của Đảng và quần chúng cho Tổng khởi nghĩa tháng Tám (1945). ', 3),
(109, 19, 'nhiệm vụ dân tộc của cách mạng hoàn thành. ', 3),
(110, 19, 'nhiệm vụ dân chủ của cách mạng hoàn thành. ', 3),
(111, 19, 'nhiệm vụ dân tộc của cách mạng hoàn thành. ', 3),
(112, 19, 'Tổng khởi nghĩa thắng lợi trên cả nước', 3),
(113, 20, 'ký với Pháp Hiệp định phòng thủ chung Đông Dương. ', 3),
(114, 20, 'viện trợ cho Pháp triển khai kế hoạch quân sự Rơve. ', 3),
(115, 20, 'ký với Pháp Hiệp định phòng thủ chung Đông Dương. ', 3),
(116, 20, 'tăng cường viện trợ cho Pháp thực hiện kế hoạch Nava', 3),
(117, 1, 'Dao động của con lắc lò xo luôn là dao động điều hòa', 4),
(118, 1, 'Cơ năng của vật dao động điều hòa không phụ thuộc vào biên độ dao động.', 4),
(119, 1, 'Hợp lực tác dụng lên vật dao động điều hòa luôn hướng về vị trí cân bằng.', 4),
(120, 1, 'Dao động của con lắc đơn luôn là dao động điều hòa.', 4),
(121, 2, 'tia hồng ngoại', 4),
(122, 2, 'tia X', 4),
(123, 2, 'tia đỏ.', 4),
(124, 2, 'tia tím', 4),
(125, 3, 'cường độ âm', 4),
(126, 3, 'độ cao', 4),
(127, 3, 'đồ thị li độ âm', 4),
(128, 3, 'mức cường độ âm', 4),
(129, 4, 'phản xạ ánh sáng', 4),
(130, 4, 'quang – phát quang', 4),
(131, 4, 'hóa – phát quang', 4),
(132, 4, 'tán sắc ánh sáng', 4),
(133, 5, 'luôn luôn có tia sáng ló ra ở mặt bên thứ hai của lăng kính.', 4),
(134, 5, 'tia ló lệch về phía đáy của lăng kính so với tia tới.', 4),
(135, 5, 'tia ló lệch về phía đỉnh của lăng kính so với tia tới.', 4),
(136, 5, 'đường đi của tia sáng đối xứng qua mặt phân giác của góc ở đỉnh.', 4),
(137, 6, 'vô cùng lớn', 4),
(138, 6, 'có giá trị âm', 4),
(139, 6, 'bằng không', 4),
(140, 6, 'có giá trị dương xác định', 4),
(141, 7, 'Các nguyên tử sắt', 4),
(142, 7, 'Các nam châm vĩnh cửu', 4),
(143, 7, 'Các mômen từ', 4),
(144, 7, 'Các điện tích chuyển động', 4),
(145, 8, 'T/4', 4),
(146, 8, 'T/8', 4),
(147, 8, 'T/12', 4),
(148, 8, 'T/6', 4),
(149, 9, '150 cm.', 4),
(150, 9, '50 cm', 4),
(151, 9, '100 cm', 4),
(152, 9, '200 cm', 4),
(153, 10, '1 vạch màu hỗn hợp 3 bức xạ.', 4),
(154, 10, '2 vạch màu đơn sắc riêng biệt.', 4),
(155, 10, '3 vạch màu đơn sắc riêng biệt.', 4),
(156, 10, '1 vạch màu đơn sắc.', 4),
(157, 11, '40 lần.', 4),
(158, 11, '20 lần.', 4),
(159, 11, '50 lần.', 4),
(160, 11, '100 lần', 4),
(161, 12, '10–8/9 (s).', 4),
(162, 12, '10–8/9 (s).', 4),
(163, 12, '10–8/12 (s).', 4),
(164, 12, '10–8/6 (s).', 4),
(165, 13, '10–6 C.', 4),
(166, 13, '10–5 C.', 4),
(167, 13, '5.10–5 C.', 4),
(168, 13, '10–4 C.', 4),
(169, 14, '5,5.1014 Hz.', 4),
(170, 14, '4,5. 1014 Hz.', 4),
(171, 14, '7,5.1014 Hz.', 4),
(172, 14, '6,5. 1014 Hz', 4);

-- --------------------------------------------------------

--
-- Structure de la table `chitietcongthuc`
--

CREATE TABLE IF NOT EXISTS `chitietcongthuc` (
  `MaChiTiet` int(11) NOT NULL,
  `TenCongThuc` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `MaChuong` int(11) NOT NULL,
  `linkvideo` text COLLATE utf8_unicode_ci NOT NULL,
  `note` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `chitietcongthuc`
--

INSERT INTO `chitietcongthuc` (`MaChiTiet`, `TenCongThuc`, `NoiDung`, `MaChuong`, `linkvideo`, `note`) VALUES
(1, 'Chu kỳ con lắc đơn', 'Định nghĩa,Video 1,Video 2', 1, '["http://localhost/www/tinymce/dialog.php/uploads/images/CHUYEN_DE_-_CON_LAC_LO_XO.pdf","http://localhost/www/tinymce/dialog.php/uploads/images/lucdanhoiconlacloxo.mp4","http://localhost/www/tinymce/dialog.php/uploads/images/logarit.mp4"]', 1),
(2, 'Bài học lịch sử cần ghi nhớ\r\n', '<div class="sapo_detail ">Kinhtedothi - Trong tuần qua, những cuộc họp mặt, hội thảo, mít tinh kỷ niệm 50 năm cuộc Tổng tiến công và nổi dậy Xuân Mậu Thân 1968 liên tục được tổ chức. Từ đó, tạo cơ sở quan trọng để đúc kết bài học lịch sử, vận dụng vào sự nghiệp xây dựng lực lượng vũ trang, quốc phòng toàn dân trong điều kiện hôm nay.</div>\r\n<div id="cotent_detail" class="pkg">\r\n    <p style="text-align: justify;">Như Đại tướng Phạm Văn Trà - nguyên Bộ trưởng Bộ Quốc phòng, người tham gia từ đầu đến cuối cuộc Tổng tiến công và nổi dậy Mậu Thân, đánh vào những cứ điểm quan trọng ở miền Tây khi trao đổi với báo chí đã chia sẻ: Cuộc Tổng tiến công Mậu Thân rất quan trọng và tạo bước ngoặt lịch sử tiến tới thay đổi cục diện chiến tranh ở Việt Nam. T.Ư Đảng quyết định phải có một cuộc tấn công lớn, toàn diện để đánh bại và đánh nhụt ý chí của Mỹ, làm cho nước Mỹ rúng động, từ đó ngồi vào bàn đàm phán Hiệp định Paris. Nếu không có Hiệp định Paris thì cuộc chiến tranh ở Việt Nam còn kéo dài.</p>\r\n    <p style="text-align: justify;">Nhiều nghiên cứu cũng khẳng định, cuộc Tổng tiến công đã mang lại ý nghĩa chiến lược rất lớn và góp phần thay đổi cục diện chiến tranh nhưng cũng phải chịu nhiều mất mát. Đại tướng Phạm Văn Trà đã nói: "Sự hy sinh mất mát đó có thể là lịch sử trong các cuộc chiến tranh. Như đơn vị do tôi làm tiểu đoàn trưởng, khi vào đánh, quân số có tới 1.100 người, nhưng hết đợt bốn, quân số chỉ còn hơn 200 người. Tuy nhiên, tổn thất đó có ý nghĩa rất quan trọng việc giành thắng lợi toàn cục sau này. Cũng như Bác Hồ đã nói “dù phải đốt cháy cả dãy Trường Sơn thì cũng quyết giành cho được độc lập”.</p>\r\n    <p style="text-align: justify;">\r\n        <table cellspacing="0" cellpadding="0" class="picture">\r\n            <tbody>\r\n                <tr>\r\n                    <td class="pic">\r\n                        <p class="box_img_detail">\r\n                            <img style="width: 100%;  height: auto;" src="http://media.kinhtedothi.vn/524/2018/2/5/Untitlejdnajfajfnkadfdf.jpg" alt="" title="" />\r\n                            <a href="/" class="icon_zoom_images"> </a>\r\n                        </p>\r\n                    </td>\r\n                </tr>\r\n                <tr>\r\n                    <td class="caption"> <span>Các chiến sĩ phân đội 1 và 2 quân giải phóng Trị Thiên Huế nghiên cứu sa bàn chuẩn bị các phương án tác chiến trong chiến dịch (ảnh tư liệu).</span></td>\r\n                </tr>\r\n            </tbody>\r\n        </table>\r\n    </p>\r\n    <div id="AdAsia"></div>\r\n    <p style="text-align: justify;">Nói về vai trò của quân dân miền Nam trong cuộc Tổng tiến công này, Đại tướng Phạm Văn Trà khẳng định: Nếu không có sự ủng hộ, đồng lòng của Nhân dân thì trong Mậu Thân 1968 chúng ta không thể đánh được, vì mọi sự tiếp tế như súng đạn, lương thực đều đến từ Nhân dân.</p>\r\n    <p style="text-align: justify;">Không có Nhân dân thì cách mạng không bao giờ thành công. Đó cũng là bài học được nhiều nhà nghiên cứu, nhân chứng lịch sử khẳng định. Như Đại tướng Lê Đức Anh - nguyên Chủ tịch nước, 50 năm trước, lúc đó ông đang đảm trách Tham mưu trưởng Bộ Chỉ huy Miền. Ông đã chia sẻ, chỉ trong 24 giờ, toàn bộ hậu phương an toàn của kẻ địch với nhiều cơ quan đầu não như Dinh Độc Lập, Tòa Đại sứ Mỹ, Bộ Tổng Tham mưu, Bộ Tư lệnh Hải quân, Tổng nha Cảnh sát, Đài Phát thanh Sài Gòn… bị tấn công đồng loạt. Cuộc tiến công táo bạo đã làm cho bộ máy điều hành chiến tranh của Mỹ và hơn 1 triệu quân sững sờ, choáng váng.</p>\r\n    <p style="text-align: justify;">Đại tướng Lê Đức Anh cho biết, đòn tiến công Xuân Mậu Thân 1968 đã gây chấn động nước Mỹ, khắp nơi biểu tình chống chiến tranh. Mỹ quyết định chấm dứt leo thang chiến tranh, tuyên bố ngừng ném bom miền Bắc và chấp thuận ngồi vào bàn đàm phán song phương với Việt Nam tại Paris. "Lực lượng biệt động là một sáng tạo về hình thức tổ chức lực lượng vũ trang của Đảng - gọn nhẹ, bí mật, linh hoạt, nằm trong dân, hòa với dân, thường xuyên hoạt động trong lòng địch... Với tinh thần dũng cảm vô song, lối đánh táo bạo và thông minh, sự hy sinh to lớn của lực lượng biệt động đã góp phần xứng đáng tạo nên hiệu quả chiến lược lớn của cuộc Tổng tiến công" - Đại tướng Lê Đức Anh nhận định.</p>\r\n    <p style="text-align: justify;">Bí thư Thành ủy TP Hồ Chí Minh Nguyễn Thiện Nhân khẳng định, từ cuộc Tổng tiến công, bài học về lòng yêu nước, sức mạnh đại đoàn kết toàn dân tộc là mẫu số chung của người Việt Nam, là sức mạnh của dân tộc cần được phát huy trong mọi giai đoạn phát triển của đất nước. "50 năm đã qua, thời gian đã phai mờ, thay đổi nhiều thứ, nhưng những giá trị lịch sử và bài học được đúc rút bằng xương bằng máu của biết bao cán bộ, chiến sĩ, Nhân dân trong Cuộc Tổng tiến công và nổi dậy Xuân Mậu Thân 1968 phải được thường xuyên ghi nhớ” - Bí thư Thành ủy TP Hồ Chí Minh đã nhấn mạnh.</p>\r\n    <p style="text-align: justify;">\r\n        <br />\r\n    </p>\r\n    <p style="text-align: justify;">\r\n        <br />\r\n    </p>\r\n</div>', 1, 'uploads/images/CHUYEN_DE_-_CON_LAC_LO_XO.pdf', 2),
(3, 'Chiều dài con lắc lò xo\r\n', 'Chiều dài con lắc lò xo\r\n', 2, 'uploads/images/lucdanhoiconlacloxo.mp4', 12),
(4, 'Công thức độc lập\r\n', 'Công thức độc lập\r\n', 3, '', 1),
(10, 'Lôgarit', '<p style="text-align:justify"><span style="color:blue">1. Định nghĩa:</span></p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; Cho hai số dương a, b với a ≠ 1 . Số α thỏa mãn đẳng thức a<span style="font-size:11.25px">α</span>&nbsp;= b được gọi là lôgarit cơ số a của b và kí hiệu là log<span style="font-size:11.25px">a</span>b. Ta viết: α = log<span style="font-size:11.25px">a</span>b ⇔ a<span style="font-size:11.25px">α</span>&nbsp;= b.</p>\r\n\r\n<p style="text-align:justify"><span style="color:blue">2. Các tính chất:</span>&nbsp;Cho a, b &gt; 0, a ≠ 1 ta có:</p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; - log<span style="font-size:11.25px">a</span>a = 1, log<span style="font-size:11.25px">a</span>1 = 0</p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; - a<span style="font-size:11.25px">log<span style="font-size:8.4375px">a</span>b</span>&nbsp;= b, log<span style="font-size:11.25px">a</span>(a<span style="font-size:11.25px">α</span>) = α</p>\r\n\r\n<p style="text-align:justify"><span style="color:blue">3. Lôgarit của một tích:</span>&nbsp;Cho 3 số dương a, b<span style="font-size:11.25px">1</span>, b<span style="font-size:11.25px">2</span>&nbsp;với a ≠ 1 , ta có</p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; - log<span style="font-size:11.25px">a</span>(b<span style="font-size:11.25px">1</span>.b<span style="font-size:11.25px">2</span>) = log<span style="font-size:11.25px">a</span>b<span style="font-size:11.25px">1</span>&nbsp;+ log<span style="font-size:11.25px">a</span>b<span style="font-size:11.25px">2</span></p>\r\n\r\n<p style="text-align:justify"><span style="color:blue">4. Lôgarit của một thương:</span>&nbsp;Cho 3 số dương a, b<span style="font-size:11.25px">1</span>, b<span style="font-size:11.25px">2</span>&nbsp;với a ≠ 1, ta có</p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; -&nbsp;<img alt="Toán lớp 12 | Chuyên đề: Lý thuyết - Bài tập có đáp án" src="https://vietjack.com/toan-lop-12/images/ly-thuyet-logarit.PNG" style="border:0px; box-sizing:border-box; display:inline; margin:0px 10px; max-width:100%; padding-bottom:4px; vertical-align:middle" /></p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; - Đặc biệt : với a, b &gt; 0, a ≠ 1&nbsp;<img alt="Toán lớp 12 | Chuyên đề: Lý thuyết - Bài tập có đáp án" src="https://vietjack.com/toan-lop-12/images/ly-thuyet-logarit-1.PNG" style="border:0px; box-sizing:border-box; display:inline; margin:0px 10px; max-width:100%; padding-bottom:4px; vertical-align:middle" /></p>\r\n\r\n<p style="text-align:justify"><span style="color:blue">5. Lôgarit của lũy thừa: Cho a, b<span style="font-size:11.25px">1</span>, b<span style="font-size:11.25px">2</span>, a ≠ 1, với mọi α, ta có</span></p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; - log<span style="font-size:11.25px">a</span>b<span style="font-size:11.25px">α</span>&nbsp;= αlog<span style="font-size:11.25px">a</span>b</p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; - Đặc biệt:&nbsp;<img alt="Toán lớp 12 | Chuyên đề: Lý thuyết - Bài tập có đáp án" src="https://vietjack.com/toan-lop-12/images/ly-thuyet-logarit-2.PNG" style="border:0px; box-sizing:border-box; display:inline; margin:0px 10px; max-width:100%; padding-bottom:4px; vertical-align:middle" /></p>\r\n\r\n<p style="text-align:justify"><span style="color:blue">6. Công thức đổi cơ số: Cho 3 số dương a, b, c với a ≠ 1, c ≠ 1 , ta có</span></p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; -&nbsp;<img alt="Toán lớp 12 | Chuyên đề: Lý thuyết - Bài tập có đáp án" src="https://vietjack.com/toan-lop-12/images/ly-thuyet-logarit-3.PNG" style="border:0px; box-sizing:border-box; display:inline; margin:0px 10px; max-width:100%; padding-bottom:4px; vertical-align:middle" /></p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; - Đặc biệt :&nbsp;<img alt="Toán lớp 12 | Chuyên đề: Lý thuyết - Bài tập có đáp án" src="https://vietjack.com/toan-lop-12/images/ly-thuyet-logarit-4.PNG" style="border:0px; box-sizing:border-box; display:inline; margin:0px 10px; max-width:100%; padding-bottom:4px; vertical-align:middle" />&nbsp;với α ≠ 0 .</p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;+ Lôgarit thập phân và Lôgarit tự nhiên</p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;+ Lôgarit thập phân là lôgarit cơ số 10. Viết: log<span style="font-size:11.25px">10</span>b = log b = lg b</p>\r\n\r\n<p style="text-align:justify">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;+ Lôgarit tự nhiên là lôgarit cơ số e. Viết: log<span style="font-size:11.25px">e</span>b = ln b</p>\r\n', 4, '', 1),
(12, 'Chu kỳ con lắc đơn', '<p>Hướng dẫn giải</p>\r\n\r\n<p>Công thức tính chu kỳ của con lắc đơn được tính như sau:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">π</span><span style="font-family:mjxc-tex-size3-r,mjxc-tex-size3-rw">√</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">g</span>T=2πlg</span></p>\r\n\r\n<p>+) Treo vật&nbsp;&nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">+</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>l1+l2</span></p>\r\n\r\n<p><span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-size2-r,mjxc-tex-size2-rw">√</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">+</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>T=T12+T22</span>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">+</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>1f2=1f12+1f22</span></p>\r\n\r\n<p>+) Treo vật&nbsp;&nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">−</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>l1−l2</span></p>\r\n\r\n<p><span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-size2-r,mjxc-tex-size2-rw">√</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">∣</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">∣</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">−</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">∣</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">∣</span>T=|T12−T22|</span>&nbsp; &nbsp;&nbsp;&nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">−</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>1f2=1f12−1f22</span></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">±</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">Δ</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span></span></p>\r\n', 1, 'uploads/images/lucdanhoiconlacloxo.mp4', 34),
(19, 'Chu kỳ con lắc lò xo', '<p>Hướng dẫn giải</p>\r\n\r\n<p>Chu kỳ của con lắc lò xo được tính theo công thức sau:</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">Δ</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">t</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">N</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">π</span><span style="font-family:mjxc-tex-size3-r,mjxc-tex-size3-rw">√</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">m</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">k</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">π</span><span style="font-family:mjxc-tex-size4-r,mjxc-tex-size4-rw">√</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">Δ</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">0</span></span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">g</span>T=ΔtN=2πmk=2πΔl0g</span></p>\r\n\r\n<p>+) Treo vật (<span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">m</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">+</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">m</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>m1+m2</span>)</p>\r\n\r\n<p><span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-size2-r,mjxc-tex-size2-rw">√</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">+</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>T=T12+T22</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">+</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>1f2=1f12+1f22</span></p>\r\n\r\n<p>+) Treo vật (<span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">m</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">−</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">m</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>m1−m2</span>)</p>\r\n\r\n<p><span style="font-size:19.04px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-size2-r,mjxc-tex-size2-rw">√</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">∣</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">∣</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">−</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">∣</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">∣</span>T=|T12−T22|</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">−</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">1</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">f</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span></span>1f2=1f12−1f22</span></p>\r\n\r\n<p>Thời&nbsp;gian lò xo nén và dãn</p>\r\n\r\n<p><span style="font-size:19.04px"><span style="font-family:mjxc-tex-size4-r,mjxc-tex-size4-rw">{</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">t</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">e</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">φ</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">e</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span></span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">ω</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">t</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">e</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">+</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">t</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">d</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">a</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">T</span>{tnen=φnenωtnen+tdan=T</span>&nbsp; &nbsp; &nbsp; với&nbsp;<span style="font-size:19.04px"><span style="font-family:mjxc-tex-size4-r,mjxc-tex-size4-rw">⎧</span><span style="font-family:mjxc-tex-size4-r,mjxc-tex-size4-rw">⎨</span><span style="font-family:mjxc-tex-size4-r,mjxc-tex-size4-rw">⎩</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">φ</span><span style="font-size:13.4613px"><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">e</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">n</span></span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">2</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">α</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">cos</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">α</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">=</span><span style="font-family:mjxc-tex-main-r,mjxc-tex-main-rw">Δ</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">l</span><span style="font-family:mjxc-tex-math-i,mjxc-tex-math-ix,mjxc-tex-math-iw">A</span></span></p>\r\n', 2, '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `dethi`
--

CREATE TABLE IF NOT EXISTS `dethi` (
  `Made` int(11) NOT NULL,
  `TenDeThi` text COLLATE utf8_unicode_ci NOT NULL,
  `MaMonHoc` int(11) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `dapan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `dethi`
--

INSERT INTO `dethi` (`Made`, `TenDeThi`, `MaMonHoc`, `link`, `dapan`) VALUES
(2, 'ĐỀ LUYỆN THI THQG SỐ 5', 1, './site/dethi-pdf/dethi.pdf', '1,2,1,4,4,2,4,3,3,4,1,2,4,1,3,1,1,3,3,4,2,2,1,4,2,3,3,2,2,2,3,4,1,4,3,2,4,2,3,2'),
(3, 'Kiểm tra Vật lý 12', 1, './site/dethi-pdf/kiemtraly.pdf', '4,3,2,3,4,2,1,1,3,2,4,2,4,1,3,4,1,4,3,1,1,1,4,2,3,2,2,4,1,1,1,4,3,2,3,4,1,4,2,1'),
(4, 'Đề kiểm tra vật lý 11', 1, './site/dethi-pdf/dethi11.pdf', '3,4,2,4,3,3,2,4,4,4,4,2,1,2,2,4,1,2,4,3,1,3,3,3,2,2,4,3,3,2');

-- --------------------------------------------------------

--
-- Structure de la table `diachi`
--

CREATE TABLE IF NOT EXISTS `diachi` (
  `id` int(11) NOT NULL,
  `noidung` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `diachi`
--

INSERT INTO `diachi` (`id`, `noidung`) VALUES
(1, 'Hà Nội'),
(2, 'Đà Nẵng'),
(3, 'TP Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Structure de la table `hs_baihoc`
--

CREATE TABLE IF NOT EXISTS `hs_baihoc` (
  `id` int(11) NOT NULL,
  `MaHocSinh` int(11) NOT NULL,
  `baihoc` int(11) NOT NULL,
  `Mucdo` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `hs_baihoc`
--

INSERT INTO `hs_baihoc` (`id`, `MaHocSinh`, `baihoc`, `Mucdo`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `hs_baithi`
--

CREATE TABLE IF NOT EXISTS `hs_baithi` (
  `id` int(10) NOT NULL,
  `id_user` text COLLATE utf8_unicode_ci NOT NULL,
  `id_baithi` int(10) NOT NULL,
  `luachon` text COLLATE utf8_unicode_ci NOT NULL,
  `diem` float NOT NULL,
  `giolambai` datetime NOT NULL,
  `gionapbai` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `hs_baithi`
--

INSERT INTO `hs_baithi` (`id`, `id_user`, `id_baithi`, `luachon`, `diem`, `giolambai`, `gionapbai`) VALUES
(13, 'dvdung97@gmail.com', 3, '1:4,2:3,3:2,4:4,5:3,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,38:4,39:2,40:1,', 9.5, '2019-12-02 20:55:28', '2019-12-02 08:57:36'),
(14, 'aaaaaa11888@gmail.com', 3, '1:3,2:3,3:3,4:3,5:3,6:3,7:3,8:3,9:3,10:3,11:3,12:3,13:2,14:3,15:3,16:3,17:3,18:3,19:3,20:3,21:3,22:3,23:3,24:3,25:3,26:3,27:3,28:3,29:3,30:3,31:3,32:3,33:3,34:3,35:3,36:3,37:3,38:3,39:3,40:3,', 2, '2019-12-03 08:07:19', '2019-12-02 20:08:17'),
(15, 'aaaaaa11888@gmail.com', 3, '1:2,2:3,3:3,4:2,5:3,6:2,7:3,8:3,9:1,10:3,12:1,13:2,14:3,15:4,16:1,17:1,18:1,19:2,20:3,21:2,22:2,23:3,24:2,25:2,', 1, '2019-12-03 08:08:29', '2019-12-02 20:09:26'),
(16, 'ngovantu09032003@gmail.com', 3, '1:4,2:2,3:3,4:2,5:4,6:2,7:3,8:2,9:3,10:4,11:1,12:2,13:1,14:2,15:3,16:1,17:2,18:1,19:3,20:2,21:1,22:2,23:3,24:2,26:1,27:1,28:2,29:2,30:2,31:2,32:4,33:3,34:4,35:2,36:3,37:3,38:3,39:1,40:1,', 3, '2019-12-03 08:05:25', '2019-12-02 20:09:55'),
(17, 'nttruong@gmail.com', 3, '1:2,2:3,3:4,4:3,5:2,6:4,7:3,8:2,9:4,10:1,11:1,12:2,13:2,14:1,15:1,16:1,17:4,18:1,19:3,20:1,21:4,22:3,23:1,24:1,25:2,26:4,27:2,28:4,29:4,30:2,31:4,32:4,33:3,34:1,35:3,36:3,37:4,38:1,39:2,40:3,', 3, '2019-12-03 08:06:34', '2019-12-02 20:11:22'),
(18, 'ledinhluyen1969@gmail.com', 3, '1:4,2:1,3:2,4:3,5:4,6:3,7:2,8:1,9:3,10:3,11:4,12:3,13:2,14:1,15:2,16:3,17:4,18:3,19:2,20:1,21:2,22:3,23:4,24:3,25:2,26:1,27:2,28:3,29:4,30:3,31:2,32:1,33:2,34:2,35:3,36:3,37:2,38:2,39:1,40:1,', 3.5, '2019-12-03 08:03:47', '2019-12-02 20:11:46'),
(19, 'aaaaaa11888@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:4,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:4,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,38:4,39:2,40:1,', 9.5, '2019-12-03 08:10:01', '2019-12-02 20:11:53'),
(20, 'ledinhluyen1969@gmail.com', 3, '1:1,2:2,3:3,4:3,5:3,6:2,7:1,8:2,9:3,10:2,11:1,12:2,14:2,15:2,16:2,17:1,18:2,19:1,20:2,21:3,22:2,23:1,24:1,25:2,26:3,27:3,28:2,29:2,30:1,31:2,32:3,33:3,34:2,35:1,36:1,37:3,38:3,39:4,40:1,', 2.75, '2019-12-03 08:12:10', '2019-12-02 20:13:13'),
(21, 'ttuananh2108@gmail.com', 3, '1:4,2:1,3:2,4:4,5:2,6:2,7:1,8:2,9:3,10:4,11:1,12:2,13:2,14:3,15:1,16:4,17:1,18:2,19:3,20:4,21:3,22:2,23:1,24:2,25:2,26:2,27:1,28:1,29:1,30:2,31:3,32:3,33:1,34:1,35:2,36:2,37:3,38:1,39:2,40:3,', 3.25, '2019-12-03 08:03:50', '2019-12-02 20:13:13'),
(22, 'ngovantu09032003@gmail.com', 3, '1:4,2:3,3:1,4:2,5:2,6:1,7:3,8:2,9:3,10:3,11:1,12:2,13:2,14:4,15:3,16:3,17:1,18:1,19:2,20:4,21:3,22:3,23:3,24:2,25:3,26:1,27:1,28:3,29:2,30:2,31:2,32:2,33:3,34:2,35:3,36:3,37:2,38:2,39:1,40:1,', 3, '2019-12-03 08:11:41', '2019-12-02 20:13:27'),
(23, 'bichngocofficial1234@gmail.com', 3, '1:2,2:4,3:1,4:1,5:3,6:4,7:3,8:2,9:3,10:3,11:4,12:2,13:3,14:4,15:2,16:1,17:3,18:1,19:4,20:3,21:2,22:4,23:2,24:2,25:1,26:2,27:3,28:1,29:4,30:1,31:3,32:1,33:4,34:2,35:4,36:1,37:1,38:2,39:2,40:1,', 2.5, '2019-12-03 08:03:43', '2019-12-02 20:13:46'),
(24, 'nttruong@gmail.com', 3, '7:1,9:3,10:2,', 0.75, '2019-12-03 08:11:59', '2019-12-02 20:14:03'),
(25, 'ledinhluyen1969@gmail.com', 3, '1:1,2:2,3:2,4:2,5:2,', 0.25, '2019-12-03 08:13:26', '2019-12-02 20:14:06'),
(26, 'vumailinh29122002@gmail.com', 3, '1:4,2:3,3:2,4:3,5:3,6:2,7:1,8:4,9:3,10:4,11:2,12:2,13:4,14:1,15:2,16:4,17:1,18:3,19:3,20:2,21:2,23:2,24:4,25:3,26:2,27:1,28:3,29:4,30:2,31:4,32:2,33:1,34:4,35:2,36:3,37:1,38:2,39:4,40:3,', 4, '2019-12-03 08:04:07', '2019-12-02 20:14:11'),
(27, 'bichngocofficial1234@gmail.com', 3, '1:4,2:2,', 0.25, '2019-12-03 08:14:02', '2019-12-02 20:14:13'),
(28, 'ledinhluyen1969@gmail.com', 3, '1:4,', 0.25, '2019-12-03 08:14:29', '2019-12-02 20:14:37'),
(29, 'theduongk8@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:2,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:3,35:3,36:1,37:4,38:3,39:1,40:3,', 8.25, '2019-12-03 08:03:53', '2019-12-02 20:14:58'),
(30, 'bichngocofficial1234@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:1,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:2,34:1,35:3,36:2,37:1,38:1,39:2,40:1,', 8.75, '2019-12-03 08:14:32', '2019-12-02 20:16:45'),
(31, 'ledinhluyen1969@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:2,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:2,20:1,21:1,22:1,23:4,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,38:4,39:2,40:1,', 9.5, '2019-12-03 08:14:56', '2019-12-02 20:16:57'),
(32, 'nttruong@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,38:4,39:2,40:1,', 10, '2019-12-03 08:14:26', '2019-12-02 20:17:21'),
(33, 'vucamvanexo61@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:2,16:4,17:1,18:2,19:3,20:1,21:1,22:2,23:4,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,38:4,39:2,40:1,', 9.25, '2019-12-03 08:14:47', '2019-12-02 20:17:34'),
(34, 'ngovantu09032003@gmail.com', 3, '1:4,2:3,3:2,4:3,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:2,27:3,28:3,29:1,30:1,31:1,32:3,33:3,34:2,35:3,36:3,37:2,38:2,39:3,40:1,', 8, '2019-12-03 08:15:59', '2019-12-02 20:17:35'),
(35, 'theduongk8@gmail.com', 3, '1:4,2:3,3:3,4:2,5:1,6:1,7:2,8:2,9:2,10:1,11:3,12:2,13:1,14:2,15:1,16:3,17:2,18:1,19:2,20:1,21:1,23:2,24:2,25:1,26:3,27:1,28:3,29:1,30:1,31:1,32:3,33:2,34:1,35:3,36:1,37:2,38:2,39:1,40:3,', 2.5, '2019-12-03 08:15:58', '2019-12-02 20:17:48'),
(36, 'vumailinh29122002@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,38:4,39:2,40:1,', 10, '2019-12-03 08:17:04', '2019-12-02 20:18:25'),
(37, 'chipi19012002@gmail.com', 3, '1:4,2:3,3:1,4:3,5:4,6:2,7:1,8:3,9:3,10:1,11:4,12:2,13:3,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:2,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,38:4,39:2,40:1,', 8.75, '2019-12-03 08:10:52', '2019-12-02 20:18:30'),
(38, 'vuduyquang@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:1,25:2,26:2,27:4,28:2,29:3,30:3,31:1,32:3,33:1,34:3,35:2,36:3,37:4,38:2,39:2,40:4,', 6.5, '0000-00-00 00:00:00', '2019-12-02 20:18:45'),
(39, 'thuylinh0366448988@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:1,27:1,29:1,30:1,31:2,32:4,33:1,34:3,35:2,36:4,37:2,38:2,39:1,40:4,', 7.25, '2019-12-03 08:04:39', '2019-12-02 20:18:56'),
(40, 'thuhang160602@gmail.com', 3, '1:4,2:4,3:4,4:3,5:3,6:2,7:3,8:3,9:2,10:4,11:3,12:3,13:1,14:4,15:3,16:3,17:1,18:4,19:1,20:3,21:2,22:1,23:4,24:2,25:3,26:1,27:1,28:4,29:1,30:1,31:1,32:2,33:1,34:2,35:4,36:3,37:2,38:2,39:1,40:1,', 4, '2019-12-03 08:06:08', '2019-12-02 20:19:51'),
(41, 'vucamvanexo61@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,38:4,39:2,40:1,', 10, '2019-12-03 08:18:13', '2019-12-02 20:20:13'),
(42, 'a01666448988@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:4,24:2,25:3,26:1,27:1,28:3,29:1,30:1,31:2,32:2,33:1,34:2,35:3,36:1,37:2,38:2,39:1,40:4,', 7.25, '2019-12-03 08:03:47', '2019-12-02 20:20:41'),
(43, 'hanbangngoc123@gmail.com', 3, '1:4,2:3,3:1,4:2,5:2,6:2,7:1,8:1,9:3,10:2,11:4,12:2,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:1,21:1,22:1,23:2,24:2,25:3,26:2,27:1,28:3,29:2,30:4,31:2,32:2,33:1,34:2,35:3,36:3,37:2,38:2,39:1,40:1,', 6.25, '2019-12-03 21:02:20', '2019-12-02 20:21:06'),
(44, 'theduongk8@gmail.com', 3, '1:4,2:3,3:1,4:2,5:1,6:3,7:4,8:2,9:3,10:2,11:3,13:2,14:2,15:3,16:1,17:2,18:3,19:1,20:2,21:3,23:2,24:3,25:3,26:4,27:2,28:3,29:1,30:1,31:1,32:3,33:1,34:2,35:2,36:3,37:1,38:3,39:3,40:1,', 3.25, '2019-12-03 08:18:37', '2019-12-02 20:21:21'),
(45, 'a01666448988@gmail.com', 2, '1:2,2:2,3:2,4:2,5:2,6:2,7:2,8:2,9:2,10:2,11:2,12:2,13:2,14:2,15:2,16:2,17:2,18:2,19:2,20:2,21:2,22:2,23:2,24:2,25:2,26:2,27:2,28:2,29:2,30:2,31:2,32:2,33:2,34:2,35:2,36:2,37:2,38:2,39:2,40:2,', 3, '2019-12-03 08:22:18', '2019-12-02 20:23:57'),
(46, 'theduongk8@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:3,8:1,9:3,10:1,11:4,12:3,13:4,14:1,15:3,16:4,17:1,18:3,19:3,20:1,21:1,22:1,23:4,24:3,25:3,26:2,27:2,28:4,29:1,30:1,31:1,32:4,33:3,34:2,35:3,36:4,37:1,39:2,40:1,', 8.5, '2019-12-03 08:21:55', '2019-12-02 20:24:12'),
(47, 'duchuong879@gmail.com', 3, '1:4,2:3,3:2,4:3,5:4,6:2,7:1,8:1,9:3,10:2,11:4,12:4,13:4,14:1,15:3,16:4,17:1,18:4,19:3,20:4,21:1,22:1,23:4,24:2,25:3,26:2,27:2,28:4,29:4,30:1,31:1,32:2,33:3,34:2,35:3,36:4,37:1,38:3,39:2,40:1,', 8.75, '2019-12-03 08:03:54', '2019-12-02 20:30:58'),
(48, 'dvdung97@gmail.com', 4, '', 0, '2019-12-03 09:18:36', '2019-12-02 21:18:43'),
(49, 'dvdung97@gmail.com', 4, '1:3,2:4,3:2,4:4,', 1.33333, '2019-12-03 09:23:06', '2019-12-02 21:23:11'),
(50, 'trankhanhnguyen2410@gmail.com', 4, '1:3,2:4,3:2,4:1,5:3,6:3,7:2,8:4,9:4,10:4,11:3,12:2,13:1,14:2,15:2,16:4,17:1,18:2,19:4,20:2,21:1,22:3,23:3,24:3,25:3,26:2,27:4,28:3,29:3,30:2,', 8.66667, '2019-12-03 09:45:34', '2019-12-02 22:03:32'),
(51, 'thuylinh1y01607@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:2,13:1,14:2,15:2,16:4,17:1,18:2,19:4,20:3,21:1,22:3,23:3,24:1,25:3,26:2,27:4,28:4,29:2,30:2,', 8.66667, '2019-12-03 09:44:48', '2019-12-02 22:05:03'),
(52, 'tatthui2003@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:3,13:1,14:2,15:2,16:4,17:1,18:2,19:4,20:1,21:1,22:3,23:3,24:3,25:3,26:2,27:4,28:4,29:3,30:2,', 8.66667, '2019-12-03 09:44:52', '2019-12-02 22:08:13'),
(53, 'mallow11a6@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:2,11:4,12:2,13:1,14:3,15:2,16:3,17:4,18:1,19:4,20:3,21:1,22:3,23:3,24:3,25:2,26:2,27:4,28:4,29:3,30:2,', 8, '2019-12-03 09:44:47', '2019-12-02 22:12:00'),
(54, 'anhminny@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:2,11:4,12:3,13:1,14:2,15:2,16:3,17:4,18:1,19:1,20:3,21:1,22:3,23:3,24:3,25:2,26:2,27:4,28:4,29:3,30:2,', 7.66667, '2019-12-03 09:44:47', '2019-12-02 22:12:46'),
(55, '', 4, '1:1,2:4,3:1,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:3,13:1,14:2,15:2,16:4,17:3,18:1,19:3,20:3,21:1,22:3,23:3,24:3,25:3,26:2,27:4,28:3,29:3,30:3,', 7.33333, '2019-12-03 09:56:56', '2019-12-02 22:12:48'),
(56, 'thuylinh1y01607@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:2,13:1,14:2,15:2,16:4,17:1,18:2,19:4,20:3,21:1,22:3,23:3,24:3,25:3,26:2,27:4,28:4,29:3,30:2,', 9.33333, '0000-00-00 00:00:00', '2019-12-02 22:13:16'),
(57, 'dungdauthi2003@gmail.com', 4, '1:1,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:2,11:4,12:3,13:3,14:2,15:3,16:2,17:4,18:1,19:1,20:3,21:2,22:3,23:3,24:2,25:1,26:2,27:4,28:4,29:3,30:2,', 5.66667, '2019-12-03 09:45:02', '2019-12-02 22:13:58'),
(58, 'zzkoquenzz@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:3,12:3,14:4,15:1,16:3,17:4,18:1,19:4,20:3,21:3,22:3,23:3,24:3,25:2,26:2,27:4,28:3,29:3,30:3,', 6.66667, '2019-12-03 09:45:03', '2019-12-02 22:14:09'),
(59, 'sc28lienquan@gmail.com', 4, '1:3,2:4,3:2,4:4,5:1,6:3,7:2,8:4,9:4,10:4,12:2,13:1,14:2,16:4,17:1,18:2,19:4,20:3,21:3,22:3,23:3,24:3,25:3,26:2,27:4,28:3,30:4,', 7.66667, '2019-12-03 09:44:53', '2019-12-02 22:14:34'),
(60, 'tuank38bhxh@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:3,13:1,14:2,15:2,16:4,17:2,18:2,19:4,20:3,21:1,22:3,23:3,25:3,26:2,27:4,28:3,29:3,30:3,', 8.33333, '2019-12-03 09:44:48', '2019-12-02 22:14:48'),
(61, 'luongdat238@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:2,12:3,13:1,14:2,15:2,16:4,17:1,18:2,19:3,20:2,21:2,22:3,23:3,24:1,25:2,26:2,27:4,28:4,29:3,30:2,', 7.66667, '2019-12-03 22:43:20', '2019-12-02 22:14:52'),
(62, 'dungdauthi2003@gmail.com', 4, '1:1,', 0, '2019-12-03 10:14:56', '2019-12-02 22:14:52'),
(63, 'thpdtfptzz@gmail.com', 4, '1:3,2:3,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:3,13:3,14:3,16:4,17:1,18:2,19:3,20:3,22:3,26:2,27:4,28:3,29:2,30:3,', 6, '2019-12-03 09:44:59', '2019-12-02 22:15:00'),
(64, 'thuylinh1y01607@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:2,13:1,14:2,15:2,16:4,17:1,18:2,19:4,20:3,21:1,22:3,23:3,24:3,25:3,26:2,27:4,28:4,29:3,30:2,', 9.33333, '2019-12-03 10:13:36', '2019-12-02 22:15:05'),
(65, 'snipervu37@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:2,11:4,12:3,13:3,14:3,15:4,16:3,17:1,18:2,19:3,20:4,21:1,22:3,23:3,24:3,25:1,26:2,27:4,28:3,29:3,30:2,', 7, '2019-12-03 09:45:06', '2019-12-02 22:15:06'),
(66, 'ductaitranql1@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:4,8:4,9:4,10:4,11:3,12:3,13:3,14:2,15:3,16:3,17:1,18:2,19:3,20:2,21:3,22:3,23:3,24:3,25:1,26:2,27:4,28:4,29:2,30:2,', 6, '2019-12-03 09:45:16', '2019-12-02 22:15:07'),
(67, '', 4, '', 0, '2019-12-03 10:14:40', '2019-12-02 22:15:09'),
(68, 'huyenduonghtm@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:2,11:4,12:3,13:1,14:2,15:2,16:4,17:1,18:2,19:4,20:3,21:1,22:3,23:3,24:1,25:3,26:2,27:4,28:2,29:3,30:2,', 8.33333, '2019-12-03 09:45:23', '2019-12-02 22:15:20'),
(69, 'ductaitranql1@gmail.com', 4, '1:3,2:4,', 0.666667, '2019-12-03 10:16:28', '2019-12-02 22:16:41'),
(70, 'mallow11a6@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:2,11:4,12:2,13:1,14:2,15:2,16:4,17:4,18:1,19:4,20:3,21:1,22:3,23:3,24:3,25:1,26:2,27:4,28:4,29:3,30:2,', 8.33333, '2019-12-03 10:12:48', '2019-12-02 22:17:08'),
(71, '', 4, '', 0, '0000-00-00 00:00:00', '2019-12-02 22:17:34'),
(72, 'tuank38bhxh@gmail.com', 4, '', 0, '0000-00-00 00:00:00', '2019-12-02 22:18:07'),
(73, 'thuylinh1y01607@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:2,13:1,14:2,15:2,16:4,17:1,18:2,19:4,20:3,21:1,22:3,23:3,24:3,25:3,26:2,27:4,28:3,29:3,30:2,', 9.66667, '0000-00-00 00:00:00', '2019-12-02 22:18:41'),
(74, '', 3, '', 0, '2019-12-03 10:18:41', '2019-12-02 22:19:01'),
(75, '', 4, '', 0, '2019-12-03 10:20:48', '2019-12-02 22:20:52'),
(76, 'luongdat238@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,8:4,9:4,10:4,11:4,12:2,', 3.66667, '2019-12-03 23:18:36', '2019-12-02 22:21:24'),
(77, 'mallow11a6@gmail.com', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:4,10:4,11:4,12:2,13:1,14:2,15:2,16:4,17:1,18:2,19:4,20:3,21:1,22:3,23:3,24:3,25:2,26:2,27:4,28:3,29:3,30:2,', 10, '2019-12-03 10:18:51', '2019-12-02 22:21:35'),
(78, 'luongdat238@gmail.com', 3, '', 0, '2019-12-03 23:20:13', '2019-12-02 22:21:46'),
(79, 'luongdat238@gmail.com', 2, '', 0, '2019-12-03 23:20:43', '2019-12-02 22:22:18'),
(80, 'thuylinh1y01607@gmail.com', 3, '1:3,2:3,3:3,4:3,5:3,6:3,7:3,8:3,9:3,10:3,11:3,12:3,13:3,14:3,15:3,16:3,17:3,18:3,19:3,20:3,21:3,22:3,23:3,24:3,25:3,26:3,27:3,28:3,29:3,30:3,', 1.5, '2019-12-03 10:22:24', '2019-12-02 22:22:59'),
(81, 'mallow11a6@gmail.com', 4, '24:3,', 0.333333, '2019-12-03 10:23:09', '2019-12-02 22:23:34'),
(82, 'thuylinh1y01607@gmail.com', 3, '1:4,2:3,3:2,4:4,5:1,6:1,7:1,8:3,9:3,10:4,11:3,12:1,13:1,14:1,15:4,16:4,17:1,18:1,19:2,20:1,21:2,22:4,23:4,24:2,25:3,26:2,27:4,28:3,29:4,30:3,', 3.25, '2019-12-03 10:23:13', '2019-12-02 22:24:22'),
(83, 'sc28lienquan@gmail.com', 3, '1:3,2:3,3:3,4:3,5:3,6:3,7:3,8:3,9:3,10:3,', 0.75, '2019-12-03 10:25:00', '2019-12-02 22:25:02'),
(84, 'duclinhn360@gmail.com', 4, '', 0, '2019-12-03 10:29:25', '2019-12-02 22:29:43'),
(85, 'tatthui2003@gmail.com', 4, '', 0, '0000-00-00 00:00:00', '2019-12-03 08:23:36'),
(86, 'tatthui2003@gmail.com', 4, '1:3,2:4,3:2,4:4,6:2,7:1,8:4,9:4,12:2,', 2.33333, '0000-00-00 00:00:00', '2019-12-03 08:51:51'),
(87, '', 4, '1:3,2:4,3:2,4:4,5:3,6:3,7:2,8:4,9:1,10:1,11:4,12:2,13:1,14:4,16:4,17:1,18:2,19:3,20:1,27:4,28:3,29:2,', 5.33333, '2019-12-03 14:30:43', '2019-12-03 10:00:44'),
(88, 'tatthui2003@gmail.com', 4, '', 0, '2019-12-03 22:12:36', '2019-12-03 10:17:32'),
(89, 'camtucaugiat@gmail.com', 4, '', 0, '0000-00-00 00:00:00', '2019-12-10 10:57:09'),
(90, 'tranthithuhuong14131661@gmail.com', 2, '1:1,3:1,5:1,6:2,9:1,', 0.75, '2019-12-16 17:02:09', '2019-12-16 05:02:23'),
(91, 'dtcong67@gmail.com', 3, '1:4,2:3,', 0.5, '2019-12-28 07:20:17', '2019-12-27 19:20:45'),
(92, 'legiona14@gmail.com', 2, '1:1,2:2,3:3,4:4,5:3,', 0.75, '2020-01-11 10:40:21', '2020-01-10 22:40:35');

-- --------------------------------------------------------

--
-- Structure de la table `hs_luachon`
--

CREATE TABLE IF NOT EXISTS `hs_luachon` (
  `MAHS` int(11) NOT NULL,
  `MA_SoThich` text COLLATE utf8_unicode_ci NOT NULL,
  `MA_DiaChi` text COLLATE utf8_unicode_ci NOT NULL,
  `Ma_Khoi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `hs_luachon`
--

INSERT INTO `hs_luachon` (`MAHS`, `MA_SoThich`, `MA_DiaChi`, `Ma_Khoi`) VALUES
(1, '1-3', '1-2', '1-2');

-- --------------------------------------------------------

--
-- Structure de la table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaMonHoc` int(11) NOT NULL,
  `TenMonHoc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`) VALUES
(1, 'Vật Lý'),
(2, 'Toán'),
(3, 'Tiếng anh'),
(4, 'Hóa Học'),
(5, 'Lịch Sử'),
(6, 'Ngữ Văn'),
(7, 'Sinh Học');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) unsigned NOT NULL,
  `name_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaCongThuc` int(11) DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci,
  `Made` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `questions`
--

INSERT INTO `questions` (`id`, `name_question`, `MaCongThuc`, `note`, `Made`) VALUES
(1, 'Bản tuyên ngôn độc lập đầu tiên là gì', 2147483647, NULL, 0),
(2, 'Một cộng một bằng mấy ? ', 2147483647, NULL, 0),
(3, 'Hai cộng hai', 2147483647, NULL, 0),
(4, 'Ba cộng ba bằng mấy ? ', 2147483647, NULL, 0),
(5, 'Bốn cộng hai bằng mấy ? ', 2147483647, NULL, 0),
(6, 'Họ nào dông dân nhất Việt Nam', NULL, NULL, 0),
(7, 'Đối với con lắc lò xo nằm ngang dao động điều hòa:', 19, 'Lò xo luôn dãn khi vật dao động điều hòa.', 1),
(8, 'Chiều dài của con lắc lò xo treo thẳng đứng dao động điều hoà biến đổi từ 20 cm đến 40 cm, khi lò xo có chiều dài 30 cm thì:', 19, 'Động năng của vật cực đại.', 1),
(9, 'Con lắc lò xo dao động điều hoà trên phương ngang, tốc độ vật triệt tiêu khi', 19, 'độ lớn lực đàn hồi cực đại.', 1),
(10, 'Kích thích con lắc lò xo treo thẳng đứng gồm vật có khối lượng m dao động điều hòa dọc theo trục của lò xo. Trong quá trình dao động, độ lớn của lực tác dụng lên điểm treo có giá trị nhỏ nhất 0,01 N. Chọn câu đúng.', 19, 'Lò xo luôn dãn trong quá trình dao động.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `questionstn`
--

CREATE TABLE IF NOT EXISTS `questionstn` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` int(11) NOT NULL,
  `Made` int(11) NOT NULL,
  `MaChuong` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `questionstn`
--

INSERT INTO `questionstn` (`id`, `number`, `NoiDung`, `answer`, `Made`, `MaChuong`) VALUES
(4, 1, 'Trong suốt giây cuối cùng, một vật rơi tự do đi được một đoạn đường bằng nửa độ cao toàn phần h kể từ vị trí ban đầu của vật. Độ cao h đo (lấy g = 9,8 m/s2) bằng', 1, 1, 0),
(5, 2, 'Một vật rơi thẳng đứng từ độ cao 19,6 m với vận tốc ban đầu bang 0 (bỏ qua sức cản không khí, lấy g = 9,8 m/s2). Thời gian vật đi được 1 m cuối cùng bằng', 2, 1, 0),
(6, 3, 'Một viên đá được thả từ một khí cầu đang bay lên theo phương thẳng đứng với vận tốc 5 m/s, ở độ cao 300 m. Viên đá chạm đất sau khoảng thời gian', 4, 1, 0),
(7, 1, '2_Trong suốt giây cuối cùng, một vật rơi tự do đi được một đoạn đường bằng nửa độ cao toàn phần h kể từ vị trí ban đầu của vật. Độ cao h đo (lấy g = 9,8 m/s2) bằng', 1, 2, 0),
(8, 2, '2_ Một vật rơi thẳng đứng từ độ cao 19,6 m với vận tốc ban đầu bang 0 (bỏ qua sức cản không khí, lấy g = 9,8 m/s2). Thời gian vật đi được 1 m cuối cùng bằng', 2, 2, 0),
(9, 3, '2_Một viên đá được thả từ một khí cầu đang bay lên theo phương thẳng đứng với vận tốc 5 m/s, ở độ cao 300 m. Viên đá chạm đất sau khoảng thời gian', 4, 2, 0),
(10, 1, 'Từ năm 1950 đến nửa đầu những năm 70 của thế kỷ XX, quốc gia nào có nền công nghiệp đứng thứ hai thế giới? ', 4, 3, 0),
(11, 2, 'Sự khởi sắc của Hiệp hội các quốc gia Đông Nam Á (ASEAN) được đánh dấu bằng sự kiện nào? ', 2, 3, 0),
(12, 3, 'Trong giai đoạn 1945 - 1973, kinh tế Mỹ ', 2, 3, 0),
(13, 4, 'Năm 1921, Nguyễn Ái Quốc đã ', 3, 3, 0),
(14, 5, 'Cơ quan ngôn luận của Đông Dương Cộng sản đảng (1929) là tờ báo ', 4, 3, 0),
(15, 6, 'Hội nghị lần thứ nhất Ban Chấp hành Trung ương lâm thời Đảng Cộng sản Việt Nam (tháng 10 - 1930) quyết định đổi tên Đảng thành ', 1, 3, 0),
(16, 7, 'Chỉ thị “Nhật - Pháp bắn nhau và hành động của chúng ta” (12 - 3 - 1945) được Ban Thường vụ Trung ương Đảng Cộng sản Đông Dương đề ra ngay sau khi ', 1, 3, 0),
(17, 8, 'Năm 1953, thực dân Pháp đề ra kế hoạch Nava nhằm mục đích ', 3, 3, 0),
(18, 9, 'Đối với cách mạng miền Nam, Hội nghị lần thứ 15 Ban Chấp hành Trung ương Đảng Lao động Việt Nam (tháng 1 - 1959) chủ trương ', 1, 3, 0),
(19, 10, 'Chiến dịch nào đã kết thúc thắng lợi cuộc Tổng tiến công và nổi dậy Xuân 1975 ở miền Nam Việt Nam? ', 3, 3, 0),
(20, 11, 'Trong những năm 1986 - 1990, về lương thực - thực phẩm, Việt Nam đạt được thành tựu là ', 2, 3, 0),
(21, 12, 'Với thắng lợi của Cách mạng tháng Hai năm 1917, Nga trở thành nước ', 1, 3, 0),
(22, 13, 'Hội nghị Pốtxđam (1945) thông qua quyết định nào? ', 4, 3, 0),
(23, 14, 'Sự kiện nào đánh dấu chủ nghĩa thực dân cũ ở châu Phi cơ bản bị sụp đổ? ', 3, 3, 0),
(24, 15, 'Sau Chiến tranh thế giới thứ hai, phong trào giải phóng dân tộc trên thế giới diễn ra đầu tiên ở khu vực nào? ', 3, 3, 0),
(25, 16, 'Từ nửa sau những năm 70 của thế kỷ XX, Nhật Bản thực hiện chính sách đối ngoại trở về châu Á dựa trên cơ sở nào? ', 3, 3, 0),
(26, 17, 'Cuộc bãi công của công nhân Ba Son (tháng 8 - 1925) là mốc đánh dấu phong trào công nhân Việt Nam ', 2, 3, 0),
(27, 18, 'Nội dung nào không phải là ý nghĩa của phong trào cách mạng 1930 - 1931 ở Việt Nam? ', 1, 3, 0),
(28, 19, 'Ngày 30 - 8 - 1945, vua Bảo Đại tuyên bố thoái vị là sự kiện đánh dấu ', 3, 3, 0),
(29, 20, 'Trong những năm 1953 - 1954, để can thiệp sâu vào chiến tranh Đông Dương, Mỹ đã ', 4, 3, 0),
(30, 1, 'Khi nói về dao động điều hòa, phát biểu nào sau đây đúng?', 3, 4, 48),
(31, 2, 'Trong các tia sau, tia nào có tần số lớn nhất?', 2, 4, 47),
(32, 3, 'Hãy cho biết đâu là đặc tính sinh lý của âm?', 2, 4, 0),
(33, 4, 'Khi chiếu chùm tia tử ngoại vào một ống nghiệm đựng dung dịch fluorexêin thì thấy dung dịch này phát ra ánh sáng màu lục. Đó là hiện tượng', 2, 4, 0),
(34, 5, 'Chiếu một tia sáng tới một mặt bên của lăng kính thì', 2, 4, 0),
(35, 6, 'Khi vật dẫn ở trạng thái siêu dẫn, điện trở của nó', 3, 4, 0),
(36, 7, 'Mọi từ trường đều phát sinh từ', 4, 4, 0),
(37, 8, 'Một vật dao động điều hòa dọc theo trục tọa độ nằm ngang Ox với chu kì T, vị trí cân bằng và mốc thế năng ở gốc tọa độ. Tính từ lúc vật có li độ dương lớn nhất, thời điểm đầu tiên mà động năng và thế năng của vật bằng nhau là', 2, 4, 0),
(38, 9, 'Một sóng ngang truyền theo chiều dương trục Ox, có phương trình sóng là u = 6cos(4πt – 0,02πx); trong đó u và x tính bằng cm, t tính bằng s. Sóng này có bước sóng là', 3, 4, 0),
(39, 10, 'Chiếu một chùm bức xạ hỗn hợp gồm 3 bức xạ điện từ có bước sóng lần lượt là 0,47 μm, 500 nm và 360 nm vào khe F của máy quang phổ lăng kính thì trên tiêu diện của thấu kính buồng tối, mắt người sẽ quan sát thấy', 2, 4, 0),
(40, 11, 'Với một công suất điện năng xác định được truyền đi, khi tăng điện áp hiệu dụng trước khi truyền tải 10 lần thì công suất hao phí trên đường dây (điện trở đường dây không đổi) giảm', 4, 4, 0),
(41, 12, 'Tại một điểm có sóng điện từ truyền qua, cảm ứng từ biến thiên theo phương trình B = B0cos(2π.l08t + π/3) (B0 > 0, t tính bằng s). Kể từ lúc t = 0, thời điểm đầu tiên để cường độ điện trường tại điểm đó bằng 0 là', 3, 4, 0),
(42, 13, 'Một mạch dao động LC lí tưởng có chu kì T = 10–3 s. Tại một thời điểm điện tích trên một bản tụ bằng 6.10–7 C, sau đó 5.10–4 s cường độ dòng điện trong mạch bằng 1,6π.10–3 A. Tìm điện tích cực đại trên tụ.', 1, 4, 0),
(43, 14, 'Trong thí nghiệm Y–âng về giao thoa với ánh sáng đơn sắc, khoảng cách giữa hai khe là 1 mm, khoảng cách từ mặt phẳng chứa hai khe đến màn quan sát là 2 m và khoảng vân là 0,8 mm. Cho c = 3.108 m/s. Tần số ánh sáng đơn sắc dùng trong thí nghiệm là', 3, 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `sothich`
--

CREATE TABLE IF NOT EXISTS `sothich` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sothich`
--

INSERT INTO `sothich` (`id`, `noidung`) VALUES
(1, 'Công Nghệ Thông Tin'),
(2, 'Tin học\r\n'),
(3, 'Điện điện tử, Tự động hóa\r\n'),
(4, 'kỹ thuật oto\r\n'),
(5, 'xây dựng\r\n'),
(6, 'cơ khí\r\n'),
(7, 'kỹ thuật nhiệt, hệ thống công nghiệp\r\n'),
(8, 'Hóa Sinh, Tài nguyên môi trường\r\n'),
(9, 'kinh tế xây dựng\r\n'),
(10, 'Quản trị\r\n'),
(11, 'kế toán\r\n'),
(12, 'kinh doanh\r\n'),
(13, 'tài chính\r\n'),
(14, 'Marketing\r\n'),
(15, 'Luật\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `tblbinhluan`
--

CREATE TABLE IF NOT EXISTS `tblbinhluan` (
  `id` int(10) NOT NULL,
  `ibbaihoc` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `binhluan` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `giodang` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tblbinhluan`
--

INSERT INTO `tblbinhluan` (`id`, `ibbaihoc`, `iduser`, `parent_id`, `binhluan`, `ngaydang`, `giodang`) VALUES
(1, 1, 1, 0, 'bài giảng hay', '2019-10-06', '00:00:00'),
(2, 1, 1, 0, 'bài giảng dễ hiểu', '2019-10-06', '00:00:00'),
(11, 1, 1, 0, 'hay', '2019-10-06', '20:51:06'),
(12, 1, 1, 0, 'hay', '2019-10-06', '20:53:19'),
(17, 1, 1, 0, 'bài giảng rất hay', '2019-10-11', '11:11:00'),
(18, 1, 1, 0, 'thầy giảng rất hay', '2019-10-11', '11:12:27'),
(82, 1, 1, 1, '<p>em thắc mắc</p>', '2019-10-11', '15:36:47'),
(83, 1, 1, 1, '<p>bài giảng hay</p>', '2019-10-11', '15:41:01'),
(84, 1, 1, 1, '<p>aaaaaaaaaaaaaaaaaa</p>', '2019-10-11', '20:23:28'),
(85, 1, 1, 1, 'aaaaaaaaaaaaaaa', '2019-10-15', '22:49:40'),
(86, 1, 1, 1, 'aaaaaaaaaaaaaaa', '2019-10-15', '22:49:50');

-- --------------------------------------------------------

--
-- Structure de la table `tblchuong`
--

CREATE TABLE IF NOT EXISTS `tblchuong` (
  `MaChuong` int(11) NOT NULL,
  `TenChuong` text COLLATE utf8_unicode_ci NOT NULL,
  `MaMonHoc` int(11) NOT NULL,
  `MaGiaoVien` int(11) NOT NULL,
  `note` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tblchuong`
--

INSERT INTO `tblchuong` (`MaChuong`, `TenChuong`, `MaMonHoc`, `MaGiaoVien`, `note`) VALUES
(1, 'GIỚI THIỆU CHƯƠNG TRÌNH', 1, 0, 0),
(2, 'DAO ĐỘNG CƠ HỌC', 1, 0, 4),
(3, 'SÓNG CƠ HỌC', 1, 0, 0),
(4, 'ĐIỆN XOAY CHIỀU', 1, 0, 0),
(5, 'dao động và sóng điện từ\r\n', 1, 0, 0),
(6, 'sóng ánh sáng\r\n', 1, 0, 0),
(7, 'lưởng tử ánh sáng\r\n', 1, 0, 0),
(8, 'hạt nhân nguyên tử', 1, 0, 0),
(9, 'vật lý 11', 1, 0, 0),
(10, 'hàm số', 2, 0, 0),
(11, 'phương trình mũ logarit', 2, 0, 0),
(12, 'nguyên hàm, tích phân và ứng dụng', 2, 0, 4),
(13, 'hình học không gian', 2, 0, 3),
(14, 'số phức', 2, 0, 0),
(15, 'hình học tọa độ không gian oxyz', 2, 0, 0),
(16, 'toán học lớp 11', 2, 0, 0),
(17, 'toán học lớp 10', 2, 0, 123),
(18, 'giải toán casio', 2, 0, 0),
(19, 'các bài toán vận dụng và thực tế', 2, 0, 0),
(20, 'Este - Lipit', 4, 0, 0),
(21, 'Cacbohiđrat', 4, 0, 0),
(22, 'Polime - Vật liệu polime', 4, 0, 0),
(23, 'Amin - aminoaxit - peptit - protein', 4, 0, 0),
(24, 'Đại cương kim loại', 4, 0, 0),
(25, 'Kim loại kiềm - kiềm thổ - nhôm', 4, 0, 0),
(26, 'Crom - Sắt - Đồng - Các kim loại khác', 4, 0, 0),
(27, 'Các vấn đề đại cương - phi kim và hợp chất (Hóa 10 - 11)', 4, 0, 0),
(28, 'Hidrocacbon - Hợp chất hữu cơ có nhóm chức (Hóa 11)', 4, 0, 0),
(29, 'Chuyển hóa vật chất và năng lượng', 7, 0, 0),
(30, 'Cơ chế di truyền và biến dị', 7, 0, 0),
(31, 'Tính quy luật của hiện tượng di truyền', 7, 0, 0),
(32, 'Di truyền học quần thể', 7, 0, 0),
(33, 'Ứng dụng di truyền học', 7, 0, 0),
(34, 'Di truyền học người', 7, 0, 0),
(35, 'Tiến hóa', 7, 0, 0),
(36, 'Sinh thái học', 7, 0, 0),
(37, 'Việt Nam sau chiến tranh thế giới thứ nhất', 5, 0, 1),
(38, 'Cuộc cách mạng giải phóng dân tộc Việt Nam (1930 – 1945)', 5, 0, 1),
(39, 'Cuộc đấu tranh bảo vệ và xây dựng chính quyền dân chủ nhân dân (1945 – 1946)', 5, 0, 1),
(40, 'Cuộc kháng chiến toàn quốc chống thực dân Pháp xâm lược và can thiệp Mỹ (1946 – 1954)', 5, 0, 1),
(41, 'Cách mạng xã hội chủ nghĩa ở miền Bắc và cách mạng dân tộc dân chủ nhân dân ở miền Nam, đấu tranh thống nhất đất nước (1954 - 1975)', 5, 0, 1),
(42, 'Công cuộc xây dựng và bảo vệ Tổ Quốc xã hội chủ nghĩa (1975 - 1991)', 5, 0, 1),
(43, 'Liên Xô và các nước Đông Âu sau chiến tranh thế giới thứ hai', 5, 0, 2),
(44, 'Các nước Á - Phi - Mỹ La Tinh sau chiến tranh thế giới thứ hai', 5, 0, 2),
(45, 'Mĩ, Nhật Bản, Tây Âu sau chiến tranh thế giới thứ hai', 5, 0, 2),
(46, 'Quan hệ quốc tế sau chiến tranh thế giới thứ hai', 5, 0, 2),
(47, 'Sự phát triển của khoa học kĩ thuật sau chiến tranh thế giới thứ hai', 5, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tbldanhmuc`
--

CREATE TABLE IF NOT EXISTS `tbldanhmuc` (
  `id` int(11) NOT NULL,
  `danhmuc` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu` int(11) NOT NULL,
  `home` int(11) NOT NULL,
  `ordernum` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tbldanhmuc`
--

INSERT INTO `tbldanhmuc` (`id`, `danhmuc`, `parent_id`, `menu`, `home`, `ordernum`, `status`) VALUES
(1, 'Chọn Sở thích', 0, 1, 0, 0, 1),
(2, 'Thi Thử', 0, 1, 0, 0, 1),
(3, 'Tài liệu', 0, 1, 0, 0, 1),
(4, 'Thi Thử Toán', 2, 1, 0, 0, 1),
(5, 'Thi Thử Lý', 2, 1, 0, 0, 1),
(6, 'Học Tiếng Anh', 0, 1, 0, 0, 1),
(7, 'Luyện Nói', 6, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbldethi`
--

CREATE TABLE IF NOT EXISTS `tbldethi` (
  `id` int(10) NOT NULL,
  `TenDeThi` int(10) NOT NULL,
  `MaMonHoc` int(10) NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `MaGiaoVien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tblspeech`
--

CREATE TABLE IF NOT EXISTS `tblspeech` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `capdo` int(11) NOT NULL,
  `danhmuc` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tblspeech`
--

INSERT INTO `tblspeech` (`id`, `text`, `capdo`, `danhmuc`) VALUES
(1, 'see you again', 1, 0),
(2, 'Thank you very much', 1, 0),
(3, 'No problem', 1, 0),
(4, 'I like that idea', 1, 0),
(6, 'He knows all about photography', 2, 1),
(7, 'He knows photography inside out', 2, 1),
(8, 'You really are going to town', 2, 1),
(9, 'I can do it with my eyes shut', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `id` int(10) NOT NULL,
  `taikhoan` text COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` text COLLATE utf8_unicode_ci NOT NULL,
  `hoten` text COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` int(10) NOT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(10) NOT NULL,
  `ngaythamgia` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tbluser`
--

INSERT INTO `tbluser` (`id`, `taikhoan`, `matkhau`, `hoten`, `dienthoai`, `facebook`, `hinhanh`, `admin`, `ngaythamgia`) VALUES
(2, 'dvdung97@gmail.com', '', 'Đặng Việt Dũng', '', 0, 'https://lh3.googleusercontent.com/a-/AAuE7mDAuEMPjMKZ9v5T1fSsUbpk7a1TAYqHn5ld2zHu5g=s96-c', 0, '0000-00-00'),
(6, 'nguyenvannam2020@gmail.com', '', 'Nguyễn Văn Nam', '', 0, '', 0, '0000-00-00'),
(7, '', '', '', '', 0, '', 0, '0000-00-00'),
(8, 'tranthithuhuong14131661@gmail.com', '', 'Thu Hường', '', 0, '', 0, '0000-00-00'),
(9, 'hauhohuu97.ql@gmail.com', '', 'Hồ Hữu Hậu', '', 0, '', 0, '0000-00-00'),
(10, 'tranhuong14131661@gmail.com', '', 'hiuhiu', '', 0, '', 0, '0000-00-00'),
(11, 'theduongk8@gmail.com', '', 'huongbinhhuyen', '', 0, '', 0, '0000-00-00'),
(12, 'duchuong879@gmail.com', '', 'Nguyễn Minh Đức', '', 0, '', 0, '0000-00-00'),
(13, 'ttuananh2108@gmail.com', '', 'Trần Tuấn Anh', '', 0, '', 0, '0000-00-00'),
(14, 'hanbangngoc123@gmail.com', '', 'nguyễn thị hoàng anh', '', 0, '', 0, '0000-00-00'),
(15, 'a01666448988@gmail.com', '', 'vũ thị bình', '', 0, '', 0, '0000-00-00'),
(16, 'vumailinh29122002@gmail.com', '', 'Vũ Linh', '', 0, '', 0, '0000-00-00'),
(17, 'bichngocofficial1234@gmail.com', '', 'nguyễn thị bích ngọc', '', 0, '', 0, '0000-00-00'),
(18, 'ledinhluyen1969@gmail.com', '', 'Le Thi Thuy', '', 0, '', 0, '0000-00-00'),
(19, 'thuhang160602@gmail.com', '', 'phan thu hang', '', 0, '', 0, '0000-00-00'),
(20, 'thuylinh0366448988@gmail.com', '', 'trần thị thùy', '', 0, '', 0, '0000-00-00'),
(21, 'ngovantu09032003@gmail.com', '', 'luyến kunai', '', 0, '', 0, '0000-00-00'),
(22, 'nttruong@gmail.com', '', 'anh truong dep trai', '', 0, '', 0, '0000-00-00'),
(23, 'aaaaaa11888@gmail.com', '', 'dfgdfd', '', 0, '', 0, '0000-00-00'),
(24, 'chipi19012002@gmail.com', '', 'Le Thi Yen', '', 0, '', 0, '0000-00-00'),
(25, 'vucamvanexo61@gmail.com', '', 'vũ cẩm vân', '', 0, '', 0, '0000-00-00'),
(26, 'vuduyquang@gmail.com', '', '01197702', '', 0, '', 0, '0000-00-00'),
(27, 'thpdtfptzz@gmail.com', '', 'tranvanphuong2003', '', 0, '', 0, '0000-00-00'),
(28, 'mallow11a6@gmail.com', '', 'phạm thu thảo', '', 0, '', 0, '0000-00-00'),
(29, 'dungdauthi2003@gmail.com', '', 'Đậu Thị Ngọc Dung', '', 0, '', 0, '0000-00-00'),
(30, 'luongdat238@gmail.com', '', 'Lương Đình Đạt', '', 0, '', 0, '0000-00-00'),
(31, 'thuylinh1y01607@gmail.com', '', 'nguyễn thị thùy linh', '', 0, '', 0, '0000-00-00'),
(32, 'zzkoquenzz@gmail.com', '', 'phạm lê quân', '', 0, '', 0, '0000-00-00'),
(33, 'tuank38bhxh@gmail.com', '', 'Nguyễn Sỹ Tuấn', '', 0, '', 0, '0000-00-00'),
(34, 'anhminny@gmail.com', '', 'Nguyễn Đức Anh', '', 0, '', 0, '0000-00-00'),
(35, 'sc28lienquan@gmail.com', '', 'Lê Hồng Quang', '', 0, '', 0, '0000-00-00'),
(36, 'nhtrung.2706003@gmail.com', '', 'nguyenhuutrung', '', 0, '', 0, '0000-00-00'),
(37, 'tatthui2003@gmail.com', '', 'Nguyen Lam Tat Thang', '', 0, '', 0, '0000-00-00'),
(38, 'ductaitranql1@gmail.com', '', 'Trần Dức Tài', '', 0, '', 0, '0000-00-00'),
(39, 'snipervu37@gmail.com', '', 'Nguyễn Vũ', '', 0, '', 0, '0000-00-00'),
(40, 'huyenduonghtm@gmail.com', '', 'Thu Trang', '', 0, '', 0, '0000-00-00'),
(41, 'trankhanhnguyen2410@gmail.com', '', 'tran khanh nguyen', '', 0, '', 0, '0000-00-00'),
(42, 'duclinhn360@gmail.com', '', 'Nguyễn Đức Linh', '', 0, '', 0, '0000-00-00'),
(43, 'tp43021@gmail.com', '', 'Nguyễn Thị Phương Thảo', '', 0, '', 0, '0000-00-00'),
(44, 'thpdtfptzz56@gmail.com', '', 'tranvanphuong2003', '', 0, '', 0, '0000-00-00'),
(45, 'hatmammoi@gmail.com', '', 'Lê Mỹ Linh', '', 0, '', 0, '0000-00-00'),
(46, 'camtucaugiat@gmail.com', '', 'phan cẩm tú', '', 0, '', 0, '0000-00-00'),
(47, 'parkroseanna2003@gmail.com', '', 'Nguyễn Như Quỳnh', '', 0, '', 0, '0000-00-00'),
(48, 'legiona14@gmail.com', '', 'Giô Na Lê', '', 1, '1514463992046262', 0, '0000-00-00'),
(49, 'dangdungql@gmail.com', '', 'Nguyên Dũng', '', 1, '2393252564297613', 0, '0000-00-00'),
(50, 'dangdungql@gmail.com', '', 'Dũng Đặng Việt', '', 0, 'https://lh6.googleusercontent.com/-bTrGUzqcEEE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcqrqglC0mQg-6rjMPph4Nx1Pwh4A/s96-c/photo.jpg', 0, '0000-00-00'),
(51, 'dtcong67@gmail.com', '', 'Duy Tran', '', 0, 'https://lh6.googleusercontent.com/-hHG9KRC61Gg/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdmeRIwnTRmKebrfjofks1oGG5sGA/s96-c/photo.jpg', 0, '0000-00-00'),
(52, 'dangdungql@gmail.com', '', 'Dũng Đặng Việt', '', 0, 'https://lh6.googleusercontent.com/-bTrGUzqcEEE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcqrqglC0mQg-6rjMPph4Nx1Pwh4A/s96-c/photo.jpg', 0, '0000-00-00'),
(53, 'danhthanh418@gmail.com', '', 'Danh Thanh', '', 1, '1513611722176765', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `id_user`, `parent_id`, `comment`, `date`, `name`) VALUES
(1, 1, 0, '<p>bÃ i giáº£ng hay</p>', '2019-10-17 20:36:58', 'Äáº·ng Viá»‡t DÅ©ng'),
(18, 1, 0, '<p>bÃ i giáº£ng ráº¥t lÃ  hay</p>', '2019-11-10 23:31:57', 'Äáº·ng Viá»‡t DÅ©ng'),
(19, 1, 0, '<p>bÃ i giáº£ng hay</p>', '2019-12-16 14:16:22', 'Äáº·ng Viá»‡t DÅ©ng'),
(20, 1, 0, '<p>bai giang hay</p>', '2019-12-18 17:01:49', 'Äáº·ng Viá»‡t DÅ©ng'),
(21, 1, 0, '<p>á»•n</p>', '2019-12-18 17:14:52', 'Äáº·ng Viá»‡t DÅ©ng'),
(22, 2, 0, '<p>á»•n</p>', '2019-12-18 17:34:52', 'Äáº·ng Viá»‡t DÅ©ng'),
(23, 2, 0, '<p><img src="images/loga.png" alt="" width="501" height="233" /></p>', '2019-12-21 03:56:01', 'Äáº·ng Viá»‡t DÅ©ng');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_daihoc`
--

CREATE TABLE IF NOT EXISTS `tbl_daihoc` (
  `id` int(11) NOT NULL,
  `TenTruong` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaDiem` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tbl_daihoc`
--

INSERT INTO `tbl_daihoc` (`id`, `TenTruong`, `DiaDiem`) VALUES
(1, 'Đại học công nghệ thông tin', 0),
(2, 'Đại học bách khoa hà nội', 0),
(3, 'Đại học kinh tế quốc dân', 0),
(4, 'Đại học kinh tế TP Hồ Chí Minh', 0),
(5, 'Đại học bách khoa Đà Nẵng', 0),
(6, 'Đại học bách khoa TPHCM', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_hs_baithi`
--

CREATE TABLE IF NOT EXISTS `tbl_hs_baithi` (
  `MAHS` int(11) NOT NULL,
  `MaDe` int(11) NOT NULL,
  `MaChuong` int(10) NOT NULL,
  `MucDo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tbl_hs_baithi`
--

INSERT INTO `tbl_hs_baithi` (`MAHS`, `MaDe`, `MaChuong`, `MucDo`) VALUES
(0, 0, 11, 1),
(1, 0, 12, 0.8);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_khoa`
--

CREATE TABLE IF NOT EXISTS `tbl_khoa` (
  `id` int(11) NOT NULL,
  `TenKhoa` text COLLATE utf8_unicode_ci NOT NULL,
  `DiemChuan` float NOT NULL,
  `id_daihoc` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tbl_khoa`
--

INSERT INTO `tbl_khoa` (`id`, `TenKhoa`, `DiemChuan`, `id_daihoc`) VALUES
(1, 'Thương mại điện tử ', 23.9, 1),
(2, 'Thương mại điện tử (chất lượng cao) ', 21.05, 1),
(3, 'Khoa học máy tính ', 24.55, 1),
(4, 'Khoa học máy tính (chất lượng cao) ', 22.65, 1),
(5, 'Mạng máy tính và truyền thông dữ liệu ', 23.2, 1),
(6, 'Mạng máy tính và truyền thông dữ liệu (chất lượng cao)', 20, 1),
(7, 'Kỹ thuật phần mềm ', 25.3, 1),
(8, 'Kỹ thuật phần mềm (chất lượng cao) ', 23.2, 1),
(9, 'Hệ thống thông tin ', 23.5, 1),
(10, 'Hệ thống thông tin (chất lượng cao) ', 21.4, 1),
(11, 'Hệ thống thông tin (tiên tiến) ', 17.8, 1),
(12, 'Kỹ thuật máy tính ', 23.8, 1),
(13, 'Kỹ thuật máy tính (chất lượng cao) ', 21, 1),
(14, 'Khoa học dữ liệu ', 23.5, 1),
(15, 'Công nghệ thông tin ', 24.65, 1),
(16, 'Công nghệ thông tin (Đào tạo tại Phân hiệu ĐHQG-HCM tại Bến Tre)', 22.9, 1),
(17, 'Công nghệ thông tin (chất lượng cao định hướng Nhật Bản) ', 21.3, 1),
(18, 'An toàn thông tin', 24.45, 1),
(19, 'An toàn thông tin (chất lượng cao) ', 22, 1),
(20, 'Công nghệ sinh học', 20, 5),
(21, 'Công nghệ thông tin (Chất lượng cao - ngoại ngữ Nhật)', 23.5, 5),
(22, 'Công nghệ thông tin (đào tạo theo cơ chế đặc thù - Hợp tác doanh nghiệp)', 23, 5),
(23, 'Công nghệ kỹ thuật vật liệu xây dựng', 18.5, 5),
(24, 'Công nghệ chế tạo máy', 20.5, 5),
(25, 'Quản lý công nghiệp', 18, 5),
(26, 'Công nghệ dầu khí và khai thác dầu (chất lượng cao)', 16.2, 5),
(27, 'Kỹ thuật cơ khí - chuyên ngành Cơ khí động lực (Chất lượng cao)', 16.5, 5),
(28, 'Kỹ thuật cơ điện tử (Chất lượng cao)', 19.5, 5),
(29, 'Kỹ thuật nhiệt (Chất lượng cao)', 15.5, 5),
(30, 'Kỹ thuật hệ thống công nghiệp', 15.25, 5),
(31, 'Kỹ thuật tàu thuỷ', 16.15, 5),
(32, 'Kỹ thuật điện (Chất lượng cao)', 17, 5),
(33, 'Kỹ thuật điện tử - viễn thông (Chất lượng cao)', 17, 5),
(34, 'Kỹ thuật điều khiển và tự động hóa (Chất lượng cao)', 21.25, 5),
(35, 'Kỹ thuật hoá học', 17.5, 5),
(36, 'Kỹ thuật môi trường (Chất lượng cao)', 16.45, 5),
(37, 'Công nghệ thực phẩm (Chất lượng cao)', 17.55, 5),
(38, 'Kiến trúc (Chất lượng cao)', 19.5, 5),
(39, 'Kỹ thuật xây dựng - chuyên ngành Tin học xây dựng', 20, 5),
(40, 'Kỹ thuật xây dựng - chuyên ngành Xây dựng dân dụng & công nghiệp (Chất lượng cao)', 16.1, 5),
(41, 'Kỹ thuật xây dựng công trình thủy (Chất lượng cao)', 16.8, 5),
(42, 'Kỹ thuật xây dựng công trình giao thông (Chất lượng cao)', 15.3, 5),
(43, 'Kỹ thuật cơ sở hạ tầng', 15.35, 5),
(44, 'Kinh tế xây dựng (Chất lượng cao)', 15.5, 5),
(45, 'Quản lý tài nguyên và môi trường', 17.5, 5),
(46, 'Chương trình tiên tiến ngành Điện tử viễn thông', 15.11, 5),
(47, 'Chương trình tiên tiến ngành Hệ thống nhúng', 15.34, 5),
(48, 'Chương trình tiên tiến Kỹ thuật Thực phẩm', 23, 2),
(49, 'Kỹ thuật Sinh học', 23.4, 2),
(50, 'Kỹ thuật Thực phẩm', 24, 2),
(51, 'Chương trình tiên tiến Kỹ thuật Hóa dược', 23.1, 2),
(52, 'Kỹ thuật Điện', 24.48, 2),
(53, 'Kỹ thuật Điều khiển - Tự động hóa', 26.05, 2),
(54, 'Kỹ thuật Ô tô', 25.05, 2),
(55, 'Kỹ thuật Cơ khí động lực', 23.7, 2),
(56, 'Kỹ thuật Hàng không', 24.7, 2),
(57, 'Kỹ thuật Dệt - May', 21.88, 2),
(58, 'Vật lý kỹ thuật', 22.1, 2),
(59, 'Hệ thống thông tin quản lý', 24.8, 2),
(60, 'Toán-Tin', 25.2, 2),
(61, 'Kỹ thuật Cơ khí', 23.86, 2),
(62, 'Kỹ thuật Cơ điện tử', 25.4, 2),
(63, 'CNTT: Khoa học Máy tính', 27.42, 2),
(64, 'CNTT: Kỹ thuật Máy tính', 26.85, 2),
(65, 'Kỹ thuật Nhiệt', 22.3, 2),
(66, 'Kỹ thuật Điện tử - Viễn thông', 24.8, 2),
(67, 'Tài chính - Ngân hàng', 22.5, 2),
(68, 'Kế toán', 22.6, 2),
(69, 'Quản trị kinh doanh', 23.3, 2),
(70, 'Kinh tế', 24.75, 3),
(71, 'Kinh tế đầu tư', 24.85, 3),
(72, 'Kinh tế phát triển', 24.45, 3),
(73, 'Kinh tế quốc tế', 26.15, 3),
(74, 'Thống kê kinh tế', 23.75, 3),
(75, 'Toán kinh tế', 24.15, 3),
(76, 'Quan hệ công chúng', 25.5, 3),
(77, 'Quản trị kinh doanh', 25.25, 3),
(78, 'Marketing', 25.6, 3),
(79, 'Bất động sản', 23.85, 3),
(80, 'Kinh doanh quốc tế', 26.15, 3),
(81, 'Kinh doanh thương mại', 25.1, 3),
(82, 'Thương mại điện tử', 25.6, 3),
(83, 'Tài chính Ngân hàng', 25, 3),
(84, 'Bảo hiểm', 23.35, 3),
(85, 'Kế toán', 25.35, 3),
(86, 'Khoa học quản lý', 23.6, 3),
(87, 'Quản lý công', 23.35, 3),
(88, 'Quản trị nhân lực', 24.9, 3),
(89, 'Hệ thống thông tin quản lý', 24.3, 3),
(90, 'Quản lý dự án', 24.4, 3),
(91, 'Luật', 23.1, 3),
(92, 'Luật kinh tế', 24.5, 3),
(93, 'Khoa học máy tính', 23.7, 3),
(94, 'Công nghệ thông tin', 24.1, 3),
(95, 'Khoa học Máy tính', 25.75, 6),
(96, 'Kỹ thuật Máy tính', 25, 6),
(97, 'Kỹ thuật Điện;', 24, 6),
(98, 'Kỹ thuật Cơ khí;Kỹ thuật Cơ điện tử;', 25.5, 6),
(99, 'Kỹ thuật Dệt;Công nghệ Dệt May', 21, 6),
(100, 'Kỹ thuật Hóa học;Công nghệ Thực phẩm;Công nghệ Sinh học', 23.75, 6),
(101, 'Kỹ thuật Xây dựng;Kỹ thuật Xây dựng Công trình Giao thông;Kỹ thuật Xây dựng Công trình Thủy;', 21.25, 6),
(102, 'Kiến trúc', 19.75, 6),
(103, 'Kỹ thuật Địa chất;Kỹ thuật Dầu khí;', 21, 6),
(104, 'Quản lý Công nghiệp', 23.75, 6),
(105, 'Kỹ thuật Môi trường;Quản lý Tài nguyên và Môi trường;', 21, 6),
(106, 'Vật lý Kỹ thuật', 21.5, 6),
(107, 'Cơ Kỹ thuật', 22.5, 6),
(108, 'Kỹ thuật Nhiệt ', 22, 6),
(109, 'Kỹ thuật Ô tô', 25, 6),
(110, 'Kỹ thuật Tàu thủy;Kỹ thuật Hàng không', 23, 6),
(111, 'Tự động hóa', 24, 6),
(112, 'Kỹ thuật Xây dựng Công trình Biển;Kỹ thuật Cơ sở Hạ tầng;', 21.25, 6),
(113, 'Kỹ thuật Điện tử - Viễn thông', 24, 6),
(114, 'Kinh tế', 23.3, 4),
(115, 'Quản trị kinh doanh', 24.15, 4),
(116, 'Kinh doanh quốc tế', 25.1, 4),
(117, 'Kinh doanh thương mại', 24.4, 4),
(118, 'Marketing', 24.9, 4),
(119, 'Tài chính Ngân hàng', 23.1, 4),
(120, 'Kế toán', 22.9, 4),
(121, 'Quản trị dịch vụ du lịch và lữ hành', 23.9, 4),
(122, 'Quản trị khách sạn', 24.4, 4),
(123, 'Toán kinh tế', 21.83, 4),
(124, 'Thống kê kinh tế', 21.81, 4),
(125, 'Hệ thống thông tin quản lý', 23.25, 4),
(126, 'Kỹ thuật phần mềm', 22.51, 4),
(127, 'Ngôn ngữ Anh', 24.55, 4),
(128, 'Luật', 23, 4),
(129, 'Quản lý công', 21.6, 4),
(130, 'Chuyên ngành Quản trị bệnh viện', 21.8, 4);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_mophong`
--

CREATE TABLE IF NOT EXISTS `tbl_mophong` (
  `id` int(10) NOT NULL,
  `TenMoPhong` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `link_img` text COLLATE utf8_unicode_ci NOT NULL,
  `MaMonHoc` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `tbl_mophong`
--

INSERT INTO `tbl_mophong` (`id`, `TenMoPhong`, `link`, `link_img`, `MaMonHoc`) VALUES
(1, 'Áp suất', 'https://phet.colorado.edu/sims/html/under-pressure/latest/under-pressure_vi.html', './mophong/vatly/1.png', 1),
(2, 'Bong bóng và tĩnh điện', 'https://phet.colorado.edu/sims/html/balloons-and-static-electricity/latest/balloons-and-static-electricity_vi.html', './mophong/vatly/2.png', 1),
(3, 'Bộ lắp ráp mạch điện: DC - Phòng thí nghiệm ảo', 'https://phet.colorado.edu/sims/html/circuit-construction-kit-dc-virtual-lab/latest/circuit-construction-kit-dc-virtual-lab_vi.html', './mophong/vatly/3.png', 1),
(4, 'Bộ lắp ráp mạch điện: DC', 'https://phet.colorado.edu/sims/html/circuit-construction-kit-dc/latest/circuit-construction-kit-dc_vi.html', './mophong/vatly/4.png', 1),
(5, 'Các dạng và sự chuyển hoá năng lượng', 'https://phet.colorado.edu/sims/html/energy-forms-and-changes/latest/energy-forms-and-changes_vi.html', './mophong/vatly/5.png', 1),
(6, 'Cân bằng', 'https://phet.colorado.edu/sims/html/balancing-act/latest/balancing-act_vi.html', './mophong/vatly/6.png', 1),
(7, 'Chất khí: phần giới thiệu', 'https://phet.colorado.edu/sims/html/gases-intro/latest/gases-intro_vi.html', './mophong/vatly/7.png', 1),
(8, 'Chuyển động của đạn tử', 'https://phet.colorado.edu/sims/html/projectile-motion/latest/projectile-motion_vi.html', './mophong/vatly/8.png', 1),
(9, 'Con lắc lò xo', 'https://phet.colorado.edu/sims/html/masses-and-springs/latest/masses-and-springs_vi.html', './mophong/vatly/9.png', 1),
(10, 'Con lắc lò xo: những điều cơ bản', 'https://phet.colorado.edu/sims/html/masses-and-springs-basics/latest/masses-and-springs-basics_vi.html', './mophong/vatly/10.png', 1),
(11, 'Công viên ván trượt: Phần cơ bản', 'https://phet.colorado.edu/sims/html/energy-skate-park-basics/latest/energy-skate-park-basics_vi.html', './mophong/vatly/11.png', 1),
(12, 'Điện tích và điện trường', 'https://phet.colorado.edu/sims/html/charges-and-fields/latest/charges-and-fields_vi.html', './mophong/vatly/12.png', 1),
(13, 'Điện trở của một dây dẫn', 'https://phet.colorado.edu/sims/html/resistance-in-a-wire/latest/resistance-in-a-wire_vi.html', './mophong/vatly/13.png', 1),
(14, 'Định luật Coulomb', 'https://phet.colorado.edu/sims/html/coulombs-law/latest/coulombs-law_vi.html', './mophong/vatly/14.png', 1),
(15, 'Định luật Faraday', 'https://phet.colorado.edu/sims/html/faradays-law/latest/faradays-law_vi.html', './mophong/vatly/15.png', 1),
(16, 'Định luật Hooke', 'https://phet.colorado.edu/sims/html/hookes-law/latest/hookes-law_vi.html', './mophong/vatly/16.png', 1),
(17, 'Định luật Ohm', 'https://phet.colorado.edu/sims/html/ohms-law/latest/ohms-law_vi.html', './mophong/vatly/17.png', 1),
(18, 'Giao thoa sóng', 'https://phet.colorado.edu/sims/html/wave-interference/latest/wave-interference_vi.html', './mophong/vatly/18.png', 1),
(19, 'John Travoltage', 'https://phet.colorado.edu/sims/html/john-travoltage/latest/john-travoltage_vi.html', './mophong/vatly/19.png', 1),
(20, 'Khúc xạ ánh sáng', 'https://phet.colorado.edu/sims/html/bending-light/latest/bending-light_vi.html', './mophong/vatly/20.png', 1),
(21, 'Lực hấp dẫn và quỹ đạo', 'https://phet.colorado.edu/sims/html/gravity-and-orbits/latest/gravity-and-orbits_vi.html', './mophong/vatly/21.png', 1),
(22, 'Lực và chuyển động: Phần cơ bản', 'https://phet.colorado.edu/sims/html/forces-and-motion-basics/latest/forces-and-motion-basics_vi.html', './mophong/vatly/22.png', 1),
(23, 'Ma sát', 'https://phet.colorado.edu/sims/html/friction/latest/friction_vi.html', './mophong/vatly/23.png', 1),
(24, 'Phân tử và ánh sáng', 'https://phet.colorado.edu/sims/html/molecules-and-light/latest/molecules-and-light_vi.html', './mophong/vatly/24.png', 1),
(25, 'Con lắc', 'https://phet.colorado.edu/sims/html/pendulum-lab/latest/pendulum-lab_vi.html', './mophong/vatly/25.png', 1),
(26, 'Lực hấp dẫn', 'https://phet.colorado.edu/sims/html/gravity-force-lab/latest/gravity-force-lab_vi.html', './mophong/vatly/26.png', 1),
(27, 'Quang phổ của thể đen', 'https://phet.colorado.edu/sims/html/blackbody-spectrum/latest/blackbody-spectrum_vi.html', './mophong/vatly/27.png', 1),
(28, 'Sóng', 'https://phet.colorado.edu/sims/html/waves-intro/latest/waves-intro_vi.html', './mophong/vatly/28.png', 1),
(29, 'Sóng trên một sợi dây', 'https://phet.colorado.edu/sims/html/wave-on-a-string/latest/wave-on-a-string_vi.html', './mophong/vatly/29.png', 1),
(30, 'Sự khuếch tán', 'https://phet.colorado.edu/sims/html/diffusion/latest/diffusion_vi.html', './mophong/vatly/30.png', 1),
(31, 'Tán xạ Rutherford', 'https://phet.colorado.edu/sims/html/rutherford-scattering/latest/rutherford-scattering_vi.html', './mophong/vatly/31.png', 1),
(32, 'Tạo dựng một nguyên tử', 'https://phet.colorado.edu/sims/html/build-an-atom/latest/build-an-atom_vi.html', './mophong/vatly/32.png', 1),
(33, 'Thị giác màu', 'https://phet.colorado.edu/sims/html/color-vision/latest/color-vision_vi.html', './mophong/vatly/33.png', 1),
(34, 'Tính chất của chất khí', 'https://phet.colorado.edu/sims/html/gas-properties/latest/gas-properties_vi.html', './mophong/vatly/34.png', 1),
(35, 'Trạng thái của vật chất', 'https://phet.colorado.edu/sims/html/states-of-matter/latest/states-of-matter_vi.html', './mophong/vatly/35.png', 1),
(36, 'Trạng thái của vật chất: Phần cơ bản', 'https://phet.colorado.edu/sims/html/states-of-matter-basics/latest/states-of-matter-basics_vi.html', './mophong/vatly/36.png', 1),
(37, 'Tụ điện: phần cơ bản', 'https://phet.colorado.edu/sims/html/capacitor-lab-basics/latest/capacitor-lab-basics_vi.html', './mophong/vatly/37.png', 1),
(38, 'Tương tác nguyên tử', 'https://phet.colorado.edu/sims/html/atomic-interactions/latest/atomic-interactions_vi.html', './mophong/vatly/38.png', 1),
(39, 'Xác suất Plinko', 'https://phet.colorado.edu/sims/html/plinko-probability/latest/plinko-probability_vi.html', './mophong/vatly/39.png', 1),
(40, 'Biểu thức', 'https://phet.colorado.edu/sims/html/expression-exchange/latest/expression-exchange_vi.html', './mophong/toan/1.png', 2),
(41, 'Cân bằng', 'https://phet.colorado.edu/sims/html/balancing-act/latest/balancing-act_vi.html', './mophong/toan/2.png', 2),
(42, 'Chuyển động của đạn tử', 'https://phet.colorado.edu/sims/html/projectile-motion/latest/projectile-motion_vi.html', './mophong/toan/3.png', 2),
(43, 'Con lắc lò xo', 'https://phet.colorado.edu/sims/html/masses-and-springs/latest/masses-and-springs_vi.html', './mophong/toan/4.png', 2),
(44, 'Diện tích', 'https://phet.colorado.edu/sims/html/area-builder/latest/area-builder_vi.html', './mophong/toan/5.png', 2),
(45, 'Đại số với mô hình diện tích', 'https://phet.colorado.edu/sims/html/area-model-algebra/latest/area-model-algebra_vi.html', './mophong/toan/6.png', 2),
(46, 'Đẳng thức: 2 biến', 'https://phet.colorado.edu/sims/html/equality-explorer-two-variables/latest/equality-explorer-two-variables_vi.html', './mophong/toan/7.png', 2),
(47, 'Đẳng thức: những điều cơ bản', 'https://phet.colorado.edu/sims/html/equality-explorer-basics/latest/equality-explorer-basics_vi.html', './mophong/toan/8.png', 2),
(48, 'Điện trở của một dây dẫn', 'https://phet.colorado.edu/sims/html/resistance-in-a-wire/latest/resistance-in-a-wire_vi.html', './mophong/toan/9.png', 2),
(49, 'Định luật Ohm', 'https://phet.colorado.edu/sims/html/ohms-law/latest/ohms-law_vi.html', './mophong/toan/10.png', 2),
(50, 'Đồ thị độ dốc - đoạn chắn', 'https://phet.colorado.edu/sims/html/graphing-slope-intercept/latest/graphing-slope-intercept_vi.html', './mophong/toan/11.png', 2),
(51, 'Đồ thị hàm bậc 2', 'https://phet.colorado.edu/sims/html/graphing-quadratics/latest/graphing-quadratics_vi.html', './mophong/toan/12.png', 2),
(52, 'Đồ thị Hàm tuyến tính', 'https://phet.colorado.edu/sims/html/graphing-lines/latest/graphing-lines_vi.html', './mophong/toan/13.png', 2),
(53, 'Giói thiệu Mô hình diện tích', 'https://phet.colorado.edu/sims/html/area-model-introduction/latest/area-model-introduction_vi.html', './mophong/toan/14.png', 2),
(54, 'Hàm số', 'https://phet.colorado.edu/sims/html/function-builder/latest/function-builder_vi.html', './mophong/toan/15.png', 2),
(55, 'Hàm số: phần cơ bản', 'https://phet.colorado.edu/sims/html/function-builder-basics/latest/function-builder-basics_vi.html', './mophong/toan/16.png', 2),
(56, 'Hồi quy bình phương cực tiểu', 'https://phet.colorado.edu/sims/html/least-squares-regression/latest/least-squares-regression_vi.html', './mophong/toan/17.png', 2),
(57, 'Phân số', 'https://phet.colorado.edu/sims/html/fraction-matcher/latest/fraction-matcher_vi.html', './mophong/toan/18.png', 2),
(58, 'Phân số: đẳng thức', 'https://phet.colorado.edu/sims/html/fractions-equality/latest/fractions-equality_vi.html', './mophong/toan/19.png', 2),
(59, 'Phân số: hỗn số', 'https://phet.colorado.edu/sims/html/fractions-mixed-numbers/latest/fractions-mixed-numbers_vi.html', './mophong/toan/20.png', 2),
(60, 'Phân số: phần giới thiệu', 'https://phet.colorado.edu/sims/html/fractions-intro/latest/fractions-intro_vi.html', './mophong/toan/21.png', 2),
(61, 'Phép nhân với mô hình diện tích', 'https://phet.colorado.edu/sims/html/area-model-multiplication/latest/area-model-multiplication_vi.html', './mophong/toan/22.png', 2),
(62, 'Con lắc', 'https://phet.colorado.edu/sims/html/pendulum-lab/latest/pendulum-lab_vi.html', './mophong/toan/23.png', 2),
(63, 'Phương trình', 'https://phet.colorado.edu/sims/html/equality-explorer/latest/equality-explorer_vi.html', './mophong/toan/24.png', 2),
(64, 'Sân chơi tỷ lệ', 'https://phet.colorado.edu/sims/html/proportion-playground/latest/proportion-playground_vi.html', './mophong/toan/25.png', 2),
(65, 'Sóng trên một sợi dây', 'https://phet.colorado.edu/sims/html/wave-on-a-string/latest/wave-on-a-string_vi.html', './mophong/toan/26.png', 2),
(66, 'Số học', 'https://phet.colorado.edu/sims/html/arithmetic/latest/arithmetic_vi.html', './mophong/toan/27.png', 2),
(67, 'Số thập phân với mô hình diện tích', 'https://phet.colorado.edu/sims/html/area-model-decimals/latest/area-model-decimals_vi.html', './mophong/toan/28.png', 2),
(68, 'Tạo ra 10', 'https://phet.colorado.edu/sims/html/make-a-ten/latest/make-a-ten_vi.html', './mophong/toan/29.png', 2),
(69, 'Tạo ra một Phân số', 'https://phet.colorado.edu/sims/html/build-a-fraction/latest/build-a-fraction_vi.html', './mophong/toan/30.png', 2),
(70, 'Tỷ suất đơn vị', 'https://phet.colorado.edu/sims/html/unit-rates/latest/unit-rates_vi.html', './mophong/toan/31.png', 2),
(71, 'Vòng tròn lượng giác', 'https://phet.colorado.edu/sims/html/trig-tour/latest/trig-tour_vi.html', './mophong/toan/32.png', 2),
(72, 'Xác suất Plinko', 'https://phet.colorado.edu/sims/html/plinko-probability/latest/plinko-probability_vi.html', './mophong/toan/33.png', 2),
(73, 'Bong bóng và tĩnh điện', 'https://phet.colorado.edu/sims/html/balloons-and-static-electricity/latest/balloons-and-static-electricity_vi.html', './mophong/hoa/1.png', 4),
(74, 'Các dạng và sự chuyển hoá năng lượng', 'https://phet.colorado.edu/sims/html/energy-forms-and-changes/latest/energy-forms-and-changes_vi.html', './mophong/hoa/2.png', 4),
(75, 'Trạng thái của vật chất', 'https://phet.colorado.edu/sims/html/states-of-matter/latest/states-of-matter_vi.html', './mophong/hoa/3.png', 4),
(76, 'Cân bằng phương trình phản ứng hoá học', 'https://phet.colorado.edu/sims/html/balancing-chemical-equations/latest/balancing-chemical-equations_vi.html', './mophong/hoa/4.png', 4),
(77, 'Chất khí: phần giới thiệu', 'https://phet.colorado.edu/sims/html/gases-intro/latest/gases-intro_vi.html', './mophong/hoa/5.png', 4),
(78, 'Chất phản ứng, Sản phẩm và Chất dư', 'https://phet.colorado.edu/sims/html/reactants-products-and-leftovers/latest/reactants-products-and-leftovers_vi.html', './mophong/hoa/6.png', 4),
(79, 'Dung dịch Acid-Base', 'https://phet.colorado.edu/sims/html/acid-base-solutions/latest/acid-base-solutions_vi.html', './mophong/hoa/7.png', 4),
(80, 'Định luật Coulomb', 'https://phet.colorado.edu/sims/html/coulombs-law/latest/coulombs-law_vi.html', './mophong/hoa/8.png', 4),
(81, 'Đồng vị và nguyên tử khối', 'https://phet.colorado.edu/sims/html/isotopes-and-atomic-mass/latest/isotopes-and-atomic-mass_vi.html', './mophong/hoa/9.png', 4),
(82, 'Hình dạng phân tử', 'https://phet.colorado.edu/sims/html/molecule-shapes/latest/molecule-shapes_vi.html', './mophong/hoa/10.png', 4),
(83, 'Hình dạng phân tử: phần cơ bản', 'https://phet.colorado.edu/sims/html/molecule-shapes-basics/latest/molecule-shapes-basics_vi.html', './mophong/hoa/11.png', 4),
(84, 'Nồng độ', 'https://phet.colorado.edu/sims/html/concentration/latest/concentration_vi.html', './mophong/hoa/12.png', 4),
(85, 'Nồng độ Mol', 'https://phet.colorado.edu/sims/html/molarity/latest/molarity_vi.html', './mophong/hoa/13.png', 4),
(86, 'Phân tử và ánh sáng', 'https://phet.colorado.edu/sims/html/molecules-and-light/latest/molecules-and-light_vi.html', './mophong/hoa/14.png', 4),
(87, 'Định luật Beer', 'https://phet.colorado.edu/sims/html/beers-law-lab/latest/beers-law-lab_vi.html', './mophong/hoa/15.png', 4),
(88, 'Quang phổ của thể đen', 'https://phet.colorado.edu/sims/html/blackbody-spectrum/latest/blackbody-spectrum_vi.html', './mophong/hoa/16.png', 4),
(89, 'Sóng trên một sợi dây', 'https://phet.colorado.edu/sims/html/wave-on-a-string/latest/wave-on-a-string_vi.html', './mophong/hoa/17.png', 4),
(90, 'Sự khuếch tán', 'https://phet.colorado.edu/sims/html/diffusion/latest/diffusion_vi.html', './mophong/hoa/18.png', 4),
(91, 'Cực tính của phân tử', 'https://phet.colorado.edu/sims/html/molecule-polarity/latest/molecule-polarity_vi.html', './mophong/hoa/19.png', 4),
(92, 'Tán xạ Rutherford', 'https://phet.colorado.edu/sims/html/rutherford-scattering/latest/rutherford-scattering_vi.html', './mophong/hoa/20.png', 4),
(93, 'Tạo dựng một nguyên tử', 'https://phet.colorado.edu/sims/html/build-an-atom/latest/build-an-atom_vi.html', './mophong/hoa/21.png', 4),
(94, 'Thang đo pH', 'https://phet.colorado.edu/sims/html/ph-scale/latest/ph-scale_vi.html', './mophong/hoa/22.png', 4),
(95, 'Thang đo pH: phần cơ bản', 'https://phet.colorado.edu/sims/html/ph-scale-basics/latest/ph-scale-basics_vi.html', './mophong/hoa/23.png', 4),
(96, 'Tính chất của chất khí', 'https://phet.colorado.edu/sims/html/gas-properties/latest/gas-properties_vi.html', './mophong/hoa/24.png', 4),
(97, 'Trạng thái của vật chất: Phần cơ bản', 'https://phet.colorado.edu/sims/html/states-of-matter-basics/latest/states-of-matter-basics_vi.html', './mophong/hoa/25.png', 4),
(98, 'Tương tác nguyên tử', 'https://phet.colorado.edu/sims/html/atomic-interactions/latest/atomic-interactions_vi.html', './mophong/hoa/26.png', 4),
(99, 'Biểu hiện gene : Những điều cơ bản', 'https://phet.colorado.edu/sims/html/gene-expression-essentials/latest/gene-expression-essentials_vi.html', './mophong/sinh/1.png', 7),
(100, 'Neuron', 'https://phet.colorado.edu/sims/html/neuron/latest/neuron_vi.html', './mophong/sinh/2.png', 7),
(101, 'Thị giác màu', 'https://phet.colorado.edu/sims/html/color-vision/latest/color-vision_vi.html', './mophong/sinh/3.png', 7),
(102, 'Cực tính của phân tử', 'https://phet.colorado.edu/sims/html/molecule-polarity/latest/molecule-polarity_vi.html', './mophong/sinh/4.png', 7),
(103, 'Thang đo pH', 'https://phet.colorado.edu/sims/html/ph-scale/latest/ph-scale_vi.html', './mophong/sinh/5.png', 7);

-- --------------------------------------------------------

--
-- Structure de la table `tohopmon`
--

CREATE TABLE IF NOT EXISTS `tohopmon` (
  `id` int(11) NOT NULL,
  `noidung` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tohopmon`
--

INSERT INTO `tohopmon` (`id`, `noidung`) VALUES
(1, 'A00'),
(2, 'A01'),
(3, 'C'),
(4, 'D');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `answerstn`
--
ALTER TABLE `answerstn`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chitietcongthuc`
--
ALTER TABLE `chitietcongthuc`
  ADD PRIMARY KEY (`MaChiTiet`);

--
-- Index pour la table `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`Made`);

--
-- Index pour la table `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hs_baihoc`
--
ALTER TABLE `hs_baihoc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hs_baithi`
--
ALTER TABLE `hs_baithi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMonHoc`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questionstn`
--
ALTER TABLE `questionstn`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sothich`
--
ALTER TABLE `sothich`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblbinhluan`
--
ALTER TABLE `tblbinhluan`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblchuong`
--
ALTER TABLE `tblchuong`
  ADD PRIMARY KEY (`MaChuong`);

--
-- Index pour la table `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbldethi`
--
ALTER TABLE `tbldethi`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tblspeech`
--
ALTER TABLE `tblspeech`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_daihoc`
--
ALTER TABLE `tbl_daihoc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_mophong`
--
ALTER TABLE `tbl_mophong`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tohopmon`
--
ALTER TABLE `tohopmon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `answerstn`
--
ALTER TABLE `answerstn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=173;
--
-- AUTO_INCREMENT pour la table `chitietcongthuc`
--
ALTER TABLE `chitietcongthuc`
  MODIFY `MaChiTiet` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT pour la table `dethi`
--
ALTER TABLE `dethi`
  MODIFY `Made` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `hs_baihoc`
--
ALTER TABLE `hs_baihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `hs_baithi`
--
ALTER TABLE `hs_baithi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT pour la table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `MaMonHoc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `questionstn`
--
ALTER TABLE `questionstn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `sothich`
--
ALTER TABLE `sothich`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `tblbinhluan`
--
ALTER TABLE `tblbinhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT pour la table `tblchuong`
--
ALTER TABLE `tblchuong`
  MODIFY `MaChuong` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT pour la table `tbldanhmuc`
--
ALTER TABLE `tbldanhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `tbldethi`
--
ALTER TABLE `tbldethi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tblspeech`
--
ALTER TABLE `tblspeech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `tbl_daihoc`
--
ALTER TABLE `tbl_daihoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT pour la table `tbl_mophong`
--
ALTER TABLE `tbl_mophong`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT pour la table `tohopmon`
--
ALTER TABLE `tohopmon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
