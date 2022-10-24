-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 05:51 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_furnithreedots`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_categories`
--

INSERT INTO `tbl_categories` (`cat_id`, `cat_name`) VALUES
(1, 'bed'),
(2, 'chair'),
(3, 'clock'),
(4, 'sofa'),
(5, 'table');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orderdetail`
--

CREATE TABLE `tbl_orderdetail` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `unit_price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `discount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_orderdetail`
--

INSERT INTO `tbl_orderdetail` (`item_id`, `order_id`, `pro_id`, `unit_price`, `quantity`, `discount`) VALUES
(1, 1, 1, 56, 2, 0),
(2, 1, 7, 76, 1, 0),
(3, 2, 1, 56, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `order_time` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `order_time`, `user_id`) VALUES
(1, '2022-10-08 17:19:46', 6),
(2, '2022-08-02 17:19:46', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pro_des` text COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `pro_name`, `pro_des`, `price`, `pic`, `cat_id`) VALUES
(1, 'CRAFT CHAIR', 'As the name suggests, the Craft chair embodies a superb execution of the high skills of Takumi Kohgei woodwork craftsmanship. The organic yet clean shapes softly embrace the body of the person sitting on it. Its generous and dynamic presence, harmonized from the curves of the wooden elements, invites you to sit and relax on it. The legs blend in the backrest/armrest in the most natural and seamless way, showing how much attention is paid to every single detail and curve. Available in oak or walnut wood with leather or fabric upholstered seat, Craft is a high-end chair that elevates every environment it is placed in.', 56, 'chair-3-1.jpg', 2),
(2, 'IC1 MAST CHAIR', 'The soft-shaped backrest of the MAST chair seems to flutter in the wind supported by a thin wooden structure, like a mast for raising the sails of a sailing ship. It is a comfortable chair that softly embraces back and elbows', 56, 'chair-4-1.jpg', 2),
(3, 'CIELO', '', 56, 'chair-1-1.jpg', 2),
(4, 'nc-1', '', 56, 'chair-2-1.jpg', 2),
(5, 'NC4', 'The NC4 CHAIR combines a light moulded plywood seat and a solid wood backrest, machined and hand finished by skilled craftsmen. The organically carved backrest gently wraps the body in a smooth way.', 56, 'chair-5-1.jpg', 2),
(6, 'MASSENA', 'Maison DRUCKER is the oldest workshop of rattan chairs in France. MASSENA was born by the challenge of collaborating for the first time with a designer from abroad that could bring new insights to a classic French bistro chair, without losing DRUCKER heritage.', 56, 'chair-6-1.jpg', 2),
(7, 'ROUND', 'ROUND is a compact and light chair that can be stacked up to seven units. This chair, in its original simplicity enables a familiar and convenient use and therefore embodies TAIYOU&C.\'s philosophy of simple good qualities objects.', 76, 'chair-7-1.jpg', 2),
(8, 'YC1', 'YAMANAMI is a series of furniture designed for the japanese manufacturer TAKUMI KOHGEI. Their expertise is represented in every single detail of these pieces of furniture and the YC1 is one of the most iconic pieces of the collection, thanks to its unique backrest realised with ropes and a leather trim.', 56, 'chair-8-1.jpg', 2),
(9, 'IC2 SKIFF CHAIR', 'The feature of SKIFF CHAIR is the thin and light appearance of the backrest and seat in contrast with the bolder legs. The curvature of each surface has been perfected until finding the best comfort and aesthetics balance, delivering also a feeling to the body of becoming one only thing with the chair.', 56, 'chair-9-1.jpg', 2),
(10, 'HALO', 'HALO refers to the atmospheric phenomenon in which a ring of light appears around the sun or moon when it is obscured by clouds. We have expressed this phenomenon using bronze.\r\nHALO is a wall clock that makes us warm as it seems to illuminate our daily life. Takaoka doki (Takaoka copperware) features the casting technology used to emphasize the clock\'s solid feel and the precise finishing of the surface.', 56, 'clock-8-1.jpg', 3),
(11, 'PRAIRIE', 'PRAIRIE is characterised by a clean design, where a single line defines both the mattress frame and headboard. Thanks to its inclination, the headboard becomes a perfect backrest for reading books, watching television or using phones / tablets, etc.\r\n', 56, 'bed-1-1.jpg', 1),
(12, 'OIMO CAFE ZENPUKUJI', 'The OIMO CAFE ZENPUKUJI branch in Kichijoji features a custom-made SOYO kitchen and MAST counter chair from IMPLEMENTS. A calm, home atmosphere surrounds the customers while enjoying roasted sweet potatoes and Japanese tea.', 56, 'table-5-1.jpg', 5),
(13, 'HS-1', '', 56, 'sofa-2-1.jpg', 4),
(14, 'kime 2014', '\"kime\" collection expresses the desire to bring to modern life tools that are full of charm. The wood, with its unique texture and grain, gives a strong sense of warmth and vitality. These tools are created by Asahikawa craftsmen who love wood and know everything about it. The WALL CLOCK is characterised by a perfect balance between the geometric forms and the natural feeling of the wood.', 56, 'clock-1-1.jpg', 3),
(15, 'm clock', 'It is a radio clock that can be used as a stand-up clock with numbers studded on a small board. By carefully examining the length and thickness of the hands, the size of the numbers and the composition of the colours, the watch has an easy-to-see and comfortable appearance. The brass-colored second hand complements the board.', 56, 'clock-2-1.jpg', 3),
(16, 'MINAMO', 'MINAMO is a flower vase collection with wooden base and a polished stainless steel lid on the top of it, which completely mirrors its surroundings like the water surface. When flowers and plants are arranged in it, the attractive image created makes the time stand still, inducing a sense of ephemerality and richness of natural life.', 56, 'clock-3-1.jpg', 3),
(17, 'WAKKA', 'WAKKA is a simple yet beautiful and smart keychain. The metallic finishings give a high-end perception to it, both when you bring the keys around or when you place them on its wooden holder with a magnet. Just place WAKKA close to its holder and the magnet will keep it with your keys in a place always easy to find.The ring part is usually welded by bending a round bar into a ring shape, but in this case it has been carved from scratch.', 56, 'clock-4-1.jpg', 3),
(18, 'NATSUME', '\"kime\" collection expresses the desire to bring to modern life tools that are full of charm. The wood, with its unique texture and grain, gives a strong sense of warmth and vitality. These tools are created by Asahikawa craftsmen who love wood and know everything about it. NATSUME, entirely made of wood, preserves all the aroma and properties of your favourite tea leaves.', 56, 'clock-5-1.jpg', 3),
(19, 'FRAME CLOCK', 'The Frame Clock for Hacoa presents an elegant and timeless design, with focus on high quality materials such as walnut wood and brass. The frame, which is made out of twelve parts, not only defines the hours indexes, but also expresses the difference in colour and grain of a natural material like walnut. The clock face, available in natural walnut, grey and white, is incastonated in the frame and enriched by the brass indexes. The hours and minutes hands are also made in brass and this will make the clock enjoyable over time as the brass parts will age during the years, adding value to the clock. Thanks to its clean design, the clock is easy to read, also because of the nice contrast between the brass and walnut, and its presence fits in any environment, either modern or classic and both in private or public spaces.', 56, 'clock-6-1.jpg', 3),
(20, 'MOV', 'A free-standing stool that can be used at the beach by digging it into the sand with your foot in the hole. It can be used in other various situations such as in the soil, or a pair of them placed seat-side down can be a set of soccer goal posts.\r\n\r\nDESIGN REPORT AWARD 2007 Finalist / SaloneSatellite 2007, Italy', 56, 'clock-7-1.jpg', 3),
(21, 'CLOUD', 'The tatami bed CLOUD expresses kindness with its rounded form in a solid sense of stability. The volumes give to it a solid yet light appearance, thanks to the rounded edges and to the hidden legs, that make it look like it is almost floating.', 56, 'bed-2-1.jpg', 1),
(22, 'AZURE', 'Azure is a high-end modern bed designed not only for quality sleeping time, but also to add comfort to the activities we do before sleeping such as watching TV, reading books, etc. This is enhanced by the voluminous headboard cushions, which exceed in height the wooden headboard, creating a relaxing seating position similar to a sofa. To avoid gaps between them and the headboard, the cushions are flat on the back side, but curved on the front to gently embrace the body. The bed\'s proportions are the result of an accurate research to find balance between frame, mattress and cushion and communicate an inviting atmosphere, The combination of wood, metal, fabric and leather enriches its luxurious presence and options such as bedside tables and footboard extend the functionality. The tapered edges of the frame give a sense of lightness to the bed even though its generous dimensions. Thanks to the possibility to choose between different materials and sizes, the bed is suitable for any bedroom.', 56, 'bed-3-1.jpg', 1),
(23, 'BABY BED', 'A joint development project by MIKI HOUSE and KARIMOKU. The nursing chair has considered an appropriate elbow height to support the arm. Even if you turn your body, the backrest will be armrest as well. The shape is a result of hints and suggestions heard from the female staff of MIKI HOUSE. After defining the design, it has been perfected by the technology of KARIMOKU\'s sitting comfort research. The chair is also characterised by the warmth of natural wood and the soft curved shape.', 56, 'bed-4-1.jpg', 1),
(24, 'BEACH', 'BEACH is a bed featuring a simple design, where the low frame and headboard and make the bedroom feel more spacious. By using an L-shaped night table together, it is possible to create a calm space with an appropriate partition from the surroundings.', 56, 'bed-5-1.jpg', 1),
(25, 'CLOUD2', 'CLOUD2 is a tatami bed. Its particular construction is composed of one thick wooden frame and a thin metal structure, which gives the impression of floating. This feature brings a fresh perception to the tatami bed and thanks to this the bed can fit both in traditional and modern spaces.', 56, 'bed-6-1.jpg', 1),
(26, 'UA1', 'YU collection was born with the aim to express the values of the company, which focuses on high quality walnut furnitures, it also represents the beauty of the landscape that surrounds Okayama, where MASTERWAL is based. The ping pong table \"UA1\", which can be also used as a common table by removing the leather net, is characterised by a brass line, which gives an additional elegant touch to the walnut board.', 56, 'table-1-1.jpg', 5),
(27, 'yamanami 2014', 'YAMANAMI is a series of furniture designed for the japanese manufacturer TAKUMI KOHGEI. Yamanami means Mountain Range in Japanese, as the sculptural yet soft and clean design of the pieces is inspired by the Taisetsu mountains in Asahikawa, which surround the company workshop and the craftsmen who work there. Asahikawa is one of the main areas for wood manufacturing in Japan and the expertise of Takumi Kohgei is represented in every single detail of these pieces of furniture.', 56, 'table-2-1.jpg', 5),
(28, 'nagi 2013', 'NAGI collection is characterised by a calm and relaxing atmosphere that is typical of the region of Tokushima where FUJI FURNITURE is based. The company\'s special process of plywood moulding has been used to obtain soft and round shapes.', 56, 'table-3-1.jpg', 5),
(29, 'HARU', 'HARU consists of furniture pieces that become irreplaceable in our life even though we almost don\'t realise they are there.\r\nThe concept comes from the sun, which supports us everyday in a very gentle and subtle way. Thus, every piece is shaped to easily fit with discretion in any space.', 56, 'table-4-1.jpg', 5),
(31, 'YU ', 'YU collection for MASTERWAL started as a series of three chairs, but soon got extended to bench, sofa, tables and so on. Born with the aim to express the values of the company, which focuses on high quality walnut furnitures, it also represents the beauty of the landscape that surrounds Okayama, where MASTERWAL is based. YU, meaning thoughtful in Japanese, communicates also the brand concept. Within the three chairs, the \"UC3\" has become a symbol of the brand, thanks to its elegant and distinctive wooden frame and leatherback. The ping pong table \"UA1\", which can be also used as a common table by removing the leather net, marked a new step for MASTERWAL in defining the aim to cover any category with their high quality products.', 56, 'sofa-1-1.jpg', 4),
(32, 'nagi 2011', 'NAGI collection is characterised by a calm and relaxing atmosphere that is typical of the region of Tokushima where FUJI FURNITURE is based. The company\'s special process of plywood moulding has been used to obtain soft and round shapes.', 56, 'sofa-3-1.jpg', 4),
(33, 'DAN', 'DAN is a series of furniture with the concept of comfortable sizes that make the user want to sit and relax for a long time, combined with lightness that allows to easily move them around, all packed within a familiar feeling suitable for simple living. DAN is where you can find warmth and relax, escaping from the fast pace of modern life.', 56, 'sofa-4-1.jpg', 4),
(34, 'IS1 SAIL SOFA', 'This sofa is characterised by a gentle appearance that invites you to sit down and relax. It is also featured with pockets attached to the side for storing newspapers and magazines. Its proportions have been defined by the need of giving a voluminous feeling but at the same time being suitable for japanese houses, which usually don\'t have too much space.', 56, 'sofa-5-1.jpg', 4),
(35, 'ns-2', '', 56, 'sofa-6-1.jpg', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_sdt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `decen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_fullname`, `user_sdt`, `user_pass`, `user_address`, `user_username`, `decen_id`) VALUES
(1, 'Đỗ Diệu Trinh', '0901169496', 'Dodieutrinh123', 'Thành phố Hồ Chí Minh', 'dieutrinhhz', 1),
(2, 'Nguyễn Thị Bích Ngân', '0935050924', 'Nguyenthibichngan123', 'Hồ Chí Minh', 'bichngannguyenthi', 1),
(3, 'Hồ Văn Hân', '0123456789', 'Hovanhan123', 'Hồ Chí Minh', 'hanhanho', 1),
(4, 'Đoàn Thị Thanh Thanh', '07956428763', 'Boiboi123', 'Thành phố Huế', 'boiboi', 2),
(5, 'Đoàn Vũ Hải Anh', '0598746321', 'HaiBi123', 'Thừa Thiên Huế', 'haianhhz', 2),
(6, 'Lê Phan Xuân Ngọc', '0756894123', 'Xuanngoc123', 'Huế', 'xuanngoc', 2),
(7, 'Nguyễn Ngọc Ấn', '0987321654', 'Ngocannguyen123', 'Đà Nẵng', 'ngocanhz', 2),
(8, 'Nguyễn Tuyết Sơn', '0654987321', 'TuyetSon456', 'Đà Nẵng', 'tsonnguyen', 2),
(9, 'Trần Xuân Khương', '0956321478', 'XuanKhuong567', 'Hồ Chí Minh', 'xuankhuong', 2),
(10, 'Nguyễn Văn Minh Trí', '0965478321', 'Bopnguyen123', 'Hồ Chí Minh', 'bopbop', 2),
(11, 'Nguyễn Thị Vân Anh', '0698745312', 'BanhBeo123', 'Huế', 'banhbeobeo', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Chỉ mục cho bảng `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  ADD PRIMARY KEY (`item_id`);

--
-- Chỉ mục cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Chỉ mục cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_orderdetail`
--
ALTER TABLE `tbl_orderdetail`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
