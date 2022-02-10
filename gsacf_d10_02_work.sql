-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 2 月 10 日 13:41
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d10_02_work`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `contents_box`
--

CREATE TABLE `contents_box` (
  `id` int(12) NOT NULL,
  `username` varchar(256) COLLATE utf8mb4_bin NOT NULL,
  `content` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `comment` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `tag` varchar(128) COLLATE utf8mb4_bin NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `contents_box`
--

INSERT INTO `contents_box` (`id`, `username`, `content`, `comment`, `tag`, `created_at`) VALUES
(9, 'ブル', '【2021年度成績】打率：.301、\r\n本塁打：32、打点：83、盗塁：3', '拳を突き上げろ', 'pacific', '2022-02-10 22:17:46'),
(10, 'あぶさん', '【生涯成績】先発：137、勝利：\r\n79、敗戦：23、防御率：3.33、\r\n奪三振：846', '勝率.775はエグい', 'pacific', '2022-02-10 22:22:07'),
(11, 'スイッチ', '【2020年度成績】打率：.221、\r\n本塁打：2、打点：11、盗塁：4', '西武ドームで弄られすぎ', 'pacific', '2022-02-10 22:26:50'),
(12, 'ボー', '【2021年度成績】打率：.265、\r\n本塁打：39、打点：113、盗塁：\r\n1', '4年連続30本以上', 'central', '2022-02-10 22:31:29'),
(13, '太陽', '【生涯成績】先発：535、勝利：\r\n172、敗戦：184、防御率：\r\n3.60、奪三振：2481', '実は奈良出身', 'central', '2022-02-10 22:34:02'),
(14, 'シチズン', '【2021年度成績】打率：.298、\r\n本塁打：5、打点：35、盗塁：4', '去年ついにブレイク。嫁がギャル', 'central', '2022-02-10 22:36:38');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `contents_box`
--
ALTER TABLE `contents_box`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `contents_box`
--
ALTER TABLE `contents_box`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
