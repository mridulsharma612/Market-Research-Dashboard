-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 31, 2018 at 08:01 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probiqgr_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) DEFAULT NULL,
  `client_name` text,
  `address` text,
  `phone` int(10) DEFAULT NULL,
  `location` text NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `address`, `phone`, `location`, `remarks`) VALUES
(NULL, 'hello', 'delhi', 123, 'delhi', 'good'),
(NULL, 'test', '', 0, '', ''),
(NULL, 'testing', 'delhi', 1122, 'delhi', 'none'),
(NULL, 'aa', 'aa', 0, 'aa', 'aa'),
(NULL, 'aa', 'aa', 0, 'aa', 'aa'),
(NULL, 'PR', 'TEST', 2147483647, 'TEST', 'TEST'),
(NULL, 'INN', 'test', 1234567890, 'TEST', ''),
(NULL, 'jiti', 'sdfghj', 3456789, 'cvbn', 'gn'),
(NULL, 'Jin', '1234', 2147483647, 'GGN', 'dfghjk'),
(NULL, 'NextOn', 'UAE', 2147483647, 'UAE', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_survey`
--

DROP TABLE IF EXISTS `new_survey`;
CREATE TABLE IF NOT EXISTS `new_survey` (
  `survey_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` text,
  `survey_name` text,
  `client_live_url` text,
  `completed` int(11) NOT NULL DEFAULT '0',
  `incompleted` int(11) NOT NULL DEFAULT '0',
  `quota_full` int(11) NOT NULL DEFAULT '0',
  `client_test_url` text,
  `cost_or_nterview` text,
  `time_period` text,
  `incidence_rate` text,
  `number_of_completes` text,
  `end_urls` text,
  `creation_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `location` text,
  `remarks` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `v_id` text NOT NULL,
  `s_id` text NOT NULL,
  `our_id` text,
  `status` text,
  `id` text,
  `vendor` text,
  `a_id` text,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`v_id`, `s_id`, `our_id`, `status`, `id`, `vendor`, `a_id`, `date`) VALUES
('sasdsd', '33', 'hshshs', 'Terminated', '33', '123', NULL, '2018-05-03 19:49:26'),
('asdsda', '33', 'hshshs', 'Terminated', '33', '123', NULL, '2018-05-03 19:49:26'),
('5ad38447-f742-457a-a7e1-0e5b8dac19bf', '33', 'hshshs', 'Terminated', '33', '105', NULL, '2018-05-03 19:49:26'),
('hahauah', '34', 'hshshs', 'Terminated', '34', '106', NULL, '2018-05-03 19:49:26'),
('hdthdy', '33', 'hshshs', 'Terminated', '33', '105', NULL, '2018-05-03 19:49:26'),
('5ad45ad2-6be0-437e-8ad9-e5f92416d43d', '34', 'hshshs', 'Terminated', '34', '106', NULL, '2018-05-03 19:49:26'),
('5ad45b2a-62aa-48f7-84a4-e55d868f3d90', '34', 'hshshs', 'Terminated', '34', '106', NULL, '2018-05-03 19:49:26'),
('5ad45d3c-9881-43df-b463-bfe4bd035ec6', '34', 'hshshs', 'Terminated', '34', '106', NULL, '2018-05-03 19:49:26'),
('5ad45e51-88a3-484c-9b7f-827c983423e7', '35', NULL, NULL, NULL, '107', NULL, '2018-05-03 19:49:26'),
('5ad45f18-f350-47a1-84b3-1d5549b6787c', '35', NULL, NULL, NULL, '107', NULL, '2018-05-03 19:49:26'),
('ghrgurd', '35', NULL, NULL, NULL, '107', NULL, '2018-05-03 19:49:26'),
('Munish', '33', NULL, NULL, NULL, '105', NULL, '2018-05-03 19:49:26'),
('dasdasdasdas', '36', NULL, NULL, NULL, '1044', NULL, '2018-05-03 19:49:26'),
('dasdasdasdas', '36', NULL, NULL, NULL, '1044', NULL, '2018-05-03 19:49:26'),
('sahil', '36', '', 'Completed', 'acf32fa9469f1cd614bb', '1044', 'acf32fa9469f1cd614bb', '2018-05-03 19:49:26'),
('sahil2', '36', '', 'Completed', 'acf32fa9469f1cd614bb', '1044', 'acf32fa9469f1cd614bb', '2018-05-03 19:49:26'),
('sahiltest', '36', '', 'Terminated', 'dcbfc1f44a758b7e324d', '1044', 'dcbfc1f44a758b7e324d', '2018-05-03 19:49:26'),
('5ad9b7df-50b7-4904-b42d-18f1ae18801c', '35', NULL, NULL, NULL, '107', NULL, '2018-05-03 19:49:26'),
('5ad9bcd6-91f3-4b4f-b8d2-6179606c9c75', '35', NULL, NULL, NULL, '107', NULL, '2018-05-03 19:49:26'),
('5adbfa3f-9ce4-4366-b063-564347e7d39c', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('asdjhaf', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('MUNISH', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('5ae143a0-83ac-46c7-a18a-626d81f71510', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('munish', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('5ae369f5-35e3-4aab-9db4-3e1524a0010f', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('5ae36a65-a155-40b3-b7a0-ecb78b2adc1f', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('5ae36c46-db6c-44c5-86ed-f7ee08a8069f', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('5ae36c62-ebf9-469d-b005-b6a202c8123c', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('5ae36da4-6406-4a22-83bd-77866496a43e', '38', '', 'Terminated', '93b8addce1c6839510a5', '5', '93b8addce1c6839510a5', '2018-05-03 19:49:26'),
('5ae43196-ff22-4494-bb52-10473cb90304', '39', '', 'Completed', '71087b2266fdc56744f8', '1', '71087b2266fdc56744f8', '2018-05-03 19:49:26'),
('5ae432b4-14da-4710-a284-c72861f75161', '39', '', 'Completed', '71087b2266fdc56744f8', '1', '71087b2266fdc56744f8', '2018-05-03 19:49:26'),
('5ae43370-8bb6-456d-894c-afd6e74c9453', '39', '', 'Completed', '71087b2266fdc56744f8', '1', '71087b2266fdc56744f8', '2018-05-03 19:49:26'),
('sahil', '39', '', 'Completed', '74be8903ba266765882f', '1', '74be8903ba266765882f', '2018-05-03 19:49:26'),
('test', '39', '', 'Completed', '74be8903ba266765882f', '1', '74be8903ba266765882f', '2018-05-03 19:49:26'),
('testtest', '39', '', 'Completed', 'd5278b82ba234e6ce7df', '1', 'd5278b82ba234e6ce7df', '2018-05-03 19:49:26'),
('testtting', '39', '', 'Completed', 'b21b4c61bc80f84f1847', '1', 'b21b4c61bc80f84f1847', '2018-05-03 19:49:26'),
('onceagaintesting', '39', '', 'Completed', '8ae6dc6ce78218307942', '1', '8ae6dc6ce78218307942', '2018-05-03 19:49:26'),
('dsadasdasd', '38', '', 'Completed', 'ffbe01b86ed3af89c950', '5', 'ffbe01b86ed3af89c950', '2018-05-03 19:49:26'),
('testfinalworking', '38', NULL, NULL, NULL, '5', '0f1a947db3257e49bd6b', '2018-05-03 19:49:26'),
('test', '38', NULL, NULL, NULL, '5', '06f73785c700afbef86e', '2018-05-03 19:49:26'),
('testsahil', '38', NULL, NULL, NULL, '5', '7678ffd0d2a700afe59b', '2018-05-03 19:49:26'),
('testfinaltst', '38', NULL, NULL, NULL, '5', '6e9d14eb5aee8746d37c', '2018-05-03 19:49:26'),
('sahiltest', '38', NULL, NULL, NULL, '5', '14362347540e378ab83e', '2018-05-03 19:49:26'),
('sahil', '38', NULL, NULL, NULL, '5', '994b4f6b290b5732fd51', '2018-05-03 19:49:26'),
('sahil', '39', NULL, NULL, NULL, '1', '646a843c831dfcbb6776', '2018-05-03 19:49:26'),
('dsadsdasd', '39', NULL, NULL, NULL, '1', '5496b55ab08d2a9c5c4f', '2018-05-03 19:49:26'),
('sahil', '37', NULL, 'completed', NULL, '111', '45e4f57671d646141814', '2018-05-03 19:50:00'),
('sahiltest', '37', 'bfbf940ecf403526e57b', 'Terminated', 'bfbf940ecf403526e57b', '111', 'bfbf940ecf403526e57b', '2018-05-03 19:54:27'),
('5ae36da4-6406-4a22-83bd-77866496a43e', '38', NULL, NULL, NULL, '5', '93b8addce1c6839510a5', '2018-05-04 05:52:35'),
('5aebf829-181b-4ece-853d-eec8988d3ece', '40', '1ef9be430390d9030adc', 'Terminated', '1ef9be430390d9030adc', '434343', '1ef9be430390d9030adc', '2018-05-04 06:07:01'),
('5aebf8b4-8176-43ad-84ff-1fc0a1b4a86f', '40', NULL, NULL, NULL, '434343', 'f21db441a6f5f6112ebc', '2018-05-04 06:07:42'),
('5aebf8f2-8450-465b-b5e1-bf9253ecc842', '40', NULL, NULL, NULL, '434343', 'eeda7440b0b8b80fa8f7', '2018-05-04 06:08:55'),
('5aebf9c1-4ae1-4ec7-a1e7-755273a64333', '40', NULL, NULL, NULL, '434343', '1bc1645e3c0d0e0023ee', '2018-05-04 06:12:18'),
('5aed0fa8-2d62-4019-9a3c-724fd6227458', '39', NULL, NULL, NULL, '1', '74be8903ba266765882f', '2018-05-05 01:58:43'),
('5af0b477-ab0d-4bdc-975a-8f39c81e3fde', '41', 'aecea13d0ac6d1158e21', 'Terminated', 'aecea13d0ac6d1158e21', '100041', 'aecea13d0ac6d1158e21', '2018-05-07 20:18:43'),
('5af0b585-f81f-4f22-b203-09f560afe5a6', '42', NULL, NULL, NULL, '10021', '1e4a1b381c98c9ec1cce', '2018-05-07 20:22:24'),
('5af0b58f-6065-4f8b-82ef-a14f9d4f6f90', '42', NULL, NULL, NULL, '10021', '8979c893707835541f40', '2018-05-07 20:22:40'),
('5af0b599-c747-449e-819a-334091ef235c', '42', NULL, NULL, NULL, '10021', '4185d51de568bf185455', '2018-05-07 20:22:43'),
('5af0b5ab-4954-4c4f-9463-5b694d9c3781', '42', NULL, NULL, NULL, '10021', 'd966973a3608dadf6d83', '2018-05-07 20:23:01'),
('5af0b5b1-6f09-454b-9d1e-011de5931570', '42', NULL, NULL, NULL, '10021', '90301502bf69418bcb89', '2018-05-07 20:23:07'),
('5af0b5b2-8124-4931-a1ca-ef567ad86933', '42', NULL, NULL, NULL, '10021', '8aa455a947601d0c4cbf', '2018-05-07 20:23:08'),
('5af0b5bd-8bd1-48e2-af69-4790fb5ab489', '42', NULL, NULL, NULL, '10021', 'f218368ae7514e9ff4c6', '2018-05-07 20:23:18'),
('5af0b5bd-ef02-4b53-92cf-a97175f63ecb', '42', NULL, NULL, NULL, '10021', '5ab50a85f0da319bb5fe', '2018-05-07 20:23:20'),
('5af0b5c8-1e70-4f80-a8fe-e573bf563f36', '42', NULL, NULL, NULL, '10021', '6157b294b04cfda3805e', '2018-05-07 20:23:35'),
('5af0b5d5-7182-48d4-8b8a-468b74c4c6b9', '42', NULL, NULL, NULL, '10021', '69b3c76272b3ec2c1faf', '2018-05-07 20:23:45'),
('5af0b5e7-17af-4a5e-9939-8375ba165f3f', '42', NULL, NULL, NULL, '10021', '1b995ce8ebb2443f38b1', '2018-05-07 20:24:00'),
('5af0b5e2-927b-4675-9153-7aede119810a', '41', '53ced063182cf13a04f7', 'Terminated', '53ced063182cf13a04f7', '100041', '53ced063182cf13a04f7', '2018-05-07 20:25:37'),
('5af0b5f4-dbd7-47b6-bc57-3b20e0dde98b', '42', NULL, NULL, NULL, '10021', '75aa35676d8c19fab8d8', '2018-05-07 20:24:15'),
('5af0b604-aa7f-4421-a5e6-67aec8e98872', '42', NULL, NULL, NULL, '10021', '0aa2a6fad61f065a3009', '2018-05-07 20:24:28'),
('5af0b60a-e899-4b05-b13b-dce33c4115f2', '42', NULL, NULL, NULL, '10021', 'e09c8408e610a332973d', '2018-05-07 20:24:36'),
('5af0b604-25b7-4be2-9a38-d5661b8e6e18', '42', NULL, NULL, NULL, '10021', '421d21063703895da9ee', '2018-05-07 20:24:41'),
('5af0b615-a7df-44bf-abeb-92eb9a599142', '42', NULL, NULL, NULL, '10021', '036e2b9260a94e46a607', '2018-05-07 20:24:48'),
('5af0b61b-00c5-4ccc-b957-0cd9bf86f7f4', '42', NULL, NULL, NULL, '10021', '610f886d73e176e4d14f', '2018-05-07 20:24:53'),
('5af0b620-e680-4468-9d34-c7952a90aea0', '42', NULL, NULL, NULL, '10021', '887359c9ae7cff3a2188', '2018-05-07 20:24:57'),
('5af0b5f7-2015-4b63-b002-847b09f5a68f', '42', NULL, NULL, NULL, '10021', 'd70b803a0737f12867ef', '2018-05-07 20:25:00'),
('5af0b63e-b00b-49a9-9e56-d76c50480c12', '42', NULL, NULL, NULL, '10021', 'f46ea5638fc8e0fb8a47', '2018-05-07 20:25:28'),
('5af0b63f-7a3f-442a-8a39-fd57239fc3bc', '42', NULL, NULL, NULL, '10021', '287519c00bceb3d0ea38', '2018-05-07 20:25:30'),
('5af0b647-364e-4fce-800a-df993efa5463', '42', NULL, NULL, NULL, '10021', '19dddad4b6f13ed5a2d7', '2018-05-07 20:25:36'),
('5af0b650-378e-40b9-bf73-3294cd9aed25', '42', NULL, NULL, NULL, '10021', 'c389eefbc8cb9285cb08', '2018-05-07 20:25:45'),
('5af0b64f-7b0b-4243-9235-a849b57e7b0f', '42', NULL, NULL, NULL, '10021', '84d4a8830a0103cbf826', '2018-05-07 20:25:46'),
('5af0b65e-b21a-48a2-8195-48e6051d9084', '42', NULL, NULL, NULL, '10021', '0153d6ee7d059241f64a', '2018-05-07 20:26:04'),
('5af0b668-91ba-4a3a-8236-f1a53a958f3c', '42', NULL, NULL, NULL, '10021', '883b69045398aeeb5aef', '2018-05-07 20:26:11'),
('5af0b66d-520b-426d-bf1f-702de933d015', '42', NULL, NULL, NULL, '10021', '797fa25720ed437bdc7f', '2018-05-07 20:26:15'),
('5af0b674-d2b6-4c2d-ad0e-11436a3485e1', '42', NULL, NULL, NULL, '10021', '175e69f331e341e0c3fc', '2018-05-07 20:26:21'),
('5af0b675-f55d-4ed8-8a04-85a999d124e3', '42', NULL, NULL, NULL, '10021', 'e407c7bbc05482229fb8', '2018-05-07 20:26:24'),
('5af0b677-9d12-4130-b542-b8fab19a58c6', '42', NULL, NULL, NULL, '10021', '62c1247ee7d2a5fc2141', '2018-05-07 20:26:25'),
('5af0b679-bfe2-4ee4-a812-2afddd4c0b7b', '42', NULL, NULL, NULL, '10021', '0660559c8bb2ba5bde81', '2018-05-07 20:26:29'),
('5af0b685-24e9-4f70-a03d-acbd8ce531a3', '42', NULL, NULL, NULL, '10021', '80c02dd7594170416a2c', '2018-05-07 20:26:39'),
('5af0b686-df49-41ac-ad56-11729c3ac444', '42', NULL, NULL, NULL, '10021', 'e816fba7b3609f7361d0', '2018-05-07 20:26:40'),
('5af0b681-3d00-4afa-8586-fc8f3cdbe80d', '42', NULL, NULL, NULL, '10021', '22925c1bda3f511eb767', '2018-05-07 20:26:49'),
('5af0b68d-4df9-4a58-b5d9-6a2a9bc1de65', '42', NULL, NULL, NULL, '10021', '4f1868cc536569514a36', '2018-05-07 20:26:49'),
('5af0b691-4784-42a1-841d-c85f649251ca', '42', NULL, NULL, NULL, '10021', '3f332ca962fa9da09c5a', '2018-05-07 20:26:57'),
('5af0b6a0-4311-4ed0-97f0-f312d3464c5d', '42', NULL, NULL, NULL, '10021', 'dee83e6dd26191f84e12', '2018-05-07 20:27:06'),
('5af0b6b4-70be-44f2-866c-d8a14f656c19', '42', NULL, NULL, NULL, '10021', '298c93147f952ef7bd22', '2018-05-07 20:27:26'),
('5af0b6b6-47f0-4993-a485-6c5b0914eeaa', '42', NULL, NULL, NULL, '10021', 'd2a9c138d6e67a056505', '2018-05-07 20:27:28'),
('5af0b6b6-3e9a-491c-a733-b36dafe84473', '42', NULL, NULL, NULL, '10021', '833f67585a4bff25599f', '2018-05-07 20:27:28'),
('5af0b6b9-f3ef-4b39-9d54-077660469c70', '42', NULL, NULL, NULL, '10021', '69e8b98338319b55253b', '2018-05-07 20:27:32'),
('5af0b6b9-f3ef-4b39-9d54-077660469c70', '42', NULL, NULL, NULL, '10021', '738e6fcbf11ff81416dc', '2018-05-07 20:27:35'),
('5af0b6cd-840f-48b3-b1f0-4f38860b3f5e', '42', NULL, NULL, NULL, '10021', '4676b706144e3c2b9158', '2018-05-07 20:27:52'),
('5af0b6d3-4459-43e5-b992-895a2eb3838e', '42', NULL, NULL, NULL, '10021', 'ceb18012670b0edfe98d', '2018-05-07 20:27:57'),
('5af0b6d4-95ea-46a9-b8f8-6f63e2aaf123', '42', NULL, NULL, NULL, '10021', 'f3aa9b9239053d98d0c4', '2018-05-07 20:27:59'),
('5af0b6bb-8199-4855-8462-659f47409e71', '42', NULL, NULL, NULL, '10021', 'cf142948cb5c9b0a774e', '2018-05-07 20:28:05'),
('5af0b6da-ab2b-44d1-ada1-0dddb844d6b8', '42', NULL, NULL, NULL, '10021', 'a102558533544dca9dec', '2018-05-07 20:28:08'),
('5af0b6e9-14b6-4d18-80cb-b2fa4678c15b', '42', NULL, NULL, NULL, '10021', '8cb61bba5845f2d40550', '2018-05-07 20:28:19'),
('5af0b738-da0b-4818-916b-c7ccc4eff1d1', '41', '769b5d1d38fb510f356f', 'Terminated', '769b5d1d38fb510f356f', '100041', '769b5d1d38fb510f356f', '2018-05-07 20:29:44'),
('5af0b79c-37d2-4681-9c02-b766e43d035a', '41', '8a024283c7b12666d513', 'Terminated', '8a024283c7b12666d513', '100041', '8a024283c7b12666d513', '2018-05-07 20:34:59'),
('5af0b8bb-859c-4976-b6fb-8a88291b062e', '41', 'e6b2d968eed68b389a51', 'Terminated', 'e6b2d968eed68b389a51', '100041', 'e6b2d968eed68b389a51', '2018-05-07 20:40:14'),
('5af0b8de-2e1d-473a-806c-682404cc45f7', '41', 'd028cc1db35add58b121', 'Terminated', 'd028cc1db35add58b121', '100041', 'd028cc1db35add58b121', '2018-05-07 20:37:03'),
('5af0b959-a64b-40b8-b2e6-f16995095d7e', '41', NULL, NULL, NULL, '100041', '3b15e2bcb868b09e93b9', '2018-05-07 20:38:48'),
('5af0b9df-66d9-4b0b-957d-9c6b2035e70a', '41', 'a2bf8a918bafe5ed7764', 'Terminated', 'a2bf8a918bafe5ed7764', '100041', 'a2bf8a918bafe5ed7764', '2018-05-07 20:47:06'),
('5af0bbf1-11a0-406e-97e7-77a4a42e9981', '41', '28fcda34d0b76034c224', 'Terminated', '28fcda34d0b76034c224', '100041', '28fcda34d0b76034c224', '2018-05-07 20:49:54'),
('5af0bc51-ab3e-4a90-8e05-10cce30c09bb', '42', NULL, NULL, NULL, '10021', '2c3838bfc19052d689bc', '2018-05-07 20:51:23'),
('5af0bc80-fa4e-42de-962d-4723de3516dc', '41', '4a4ce16cb066de623804', 'Terminated', '4a4ce16cb066de623804', '100041', '4a4ce16cb066de623804', '2018-05-07 20:52:23'),
('5af0bcb5-e344-4273-9b2b-f74669c4f724', '41', '9df603fa7a3e7d1c40ac', 'Terminated', '9df603fa7a3e7d1c40ac', '100041', '9df603fa7a3e7d1c40ac', '2018-05-07 20:53:16'),
('5af0bcbf-c2ac-4b26-8fb1-8323e858b909', '42', NULL, NULL, NULL, '10021', '1c336772ff90c295d63b', '2018-05-07 20:53:21'),
('5af0bcbc-23e4-4815-a538-1111b4695139', '42', NULL, NULL, NULL, '10021', '3c4a63755dde6b3d2dbe', '2018-05-07 20:53:27'),
('5af0bd08-aeb2-4482-938c-374102636b64', '42', NULL, NULL, NULL, '10021', '83e514df6a395078e35c', '2018-05-07 20:54:27'),
('5af0bd1b-3853-401d-8a42-65087f3ed93e', '42', NULL, NULL, NULL, '10021', '6a3e3154a3584e82ea76', '2018-05-07 20:54:46'),
('5af0bd37-ef02-4b02-a5e8-97f32721c877', '41', '9253fa41a442528cab8e', 'Terminated', '9253fa41a442528cab8e', '100041', '9253fa41a442528cab8e', '2018-05-07 20:55:19'),
('5af0bd3e-1942-48b7-80c3-16cc5594c131', '41', 'ae1c71d1bdf0c596fc30', 'Terminated', 'ae1c71d1bdf0c596fc30', '100041', 'ae1c71d1bdf0c596fc30', '2018-05-07 20:56:06'),
('5af0bd70-ecf8-4be5-afb7-0b14eb5c5af1', '41', '02b8be30cc98e7735684', 'Terminated', '02b8be30cc98e7735684', '100041', '02b8be30cc98e7735684', '2018-05-07 20:56:38'),
('5af0bda3-6bad-4078-8c41-9973b368e237', '41', '49b85e7f5d07a4bc76db', 'Terminated', '49b85e7f5d07a4bc76db', '100041', '49b85e7f5d07a4bc76db', '2018-05-07 21:01:57'),
('5af0bdc3-f283-492e-852c-9d5e8a5d160f', '42', NULL, NULL, NULL, '10021', '6ea826eca9e668f12b07', '2018-05-07 20:57:32'),
('5af0bdce-d1db-4c12-a50b-39d435f71c78', '42', NULL, NULL, NULL, '10021', '3444c12602ac2c49e735', '2018-05-07 20:57:44'),
('5af0bdd1-f507-418b-af04-d1c3bc256fff', '42', NULL, NULL, NULL, '10021', '593f345773ad7cacfe36', '2018-05-07 20:57:47'),
('5af0bdd2-1d15-448f-a438-06128a42a114', '42', NULL, NULL, NULL, '10021', 'b3c70c4c9c5808b66957', '2018-05-07 20:57:49'),
('5af0bde3-1361-4564-975e-55f2c1fb0535', '42', NULL, NULL, NULL, '10021', '49515c2e68bf56f40843', '2018-05-07 20:58:05'),
('5af0bdf7-ede0-49c6-a86e-4b67ff1f170e', '42', NULL, NULL, NULL, '10021', 'fee89624541a48ae6e86', '2018-05-07 20:58:24'),
('5af0be2f-c2fd-4e81-b911-3afb6bdbf894', '42', NULL, NULL, NULL, '10021', 'ffaece5ab0e44096cad8', '2018-05-07 20:59:22'),
('5af0beb4-09d6-4531-854f-f04e556cd37d', '42', NULL, NULL, NULL, '10021', '0d2a35cacd25633d64ae', '2018-05-07 21:01:35'),
('5af0beb5-f80a-4039-b6c3-691906e1714c', '42', NULL, NULL, NULL, '10021', '9ed43f6ff6eda921f3c6', '2018-05-07 21:01:35'),
('5af0becb-47d9-4918-8858-6a8d94b32159', '42', NULL, NULL, NULL, '10021', '7989d0e70b4cc08c3bd6', '2018-05-07 21:02:18'),
('5af0befa-40f6-4eb9-9a4f-8b6bcb309b86', '41', 'd169b89ca55cdac1d799', 'Terminated', 'd169b89ca55cdac1d799', '100041', 'd169b89ca55cdac1d799', '2018-05-07 21:02:59'),
('5af0bf08-3ece-4961-97ae-e37695e766e8', '42', NULL, NULL, NULL, '10021', '0e810cd0d8cbe73ecf3e', '2018-05-07 21:03:04'),
('5af0bee8-39c4-43f9-ad97-6cec5f8c5b96', '41', '90bd443904540a53e9d9', 'Terminated', '90bd443904540a53e9d9', '100041', '90bd443904540a53e9d9', '2018-05-07 21:10:05'),
('5af0bf41-1e7c-4775-824c-c3ef7ff40dc1', '42', NULL, NULL, NULL, '10021', '7df04484a2c94c211d6d', '2018-05-07 21:03:55'),
('5af0bf31-036c-4bc8-9fb6-bafb0efd7b1e', '42', NULL, NULL, NULL, '10021', 'cae4f1f0558e66137625', '2018-05-07 21:03:59'),
('5af0bf59-bea0-48cc-9613-938a3c3593cb', '42', NULL, NULL, NULL, '10021', '7d7a97481edc02a9abb3', '2018-05-07 21:04:18'),
('5af0bf8a-49ee-43c9-bcb4-ec5883518c4a', '42', NULL, NULL, NULL, '10021', 'bdab0fe0496e9f990f0d', '2018-05-07 21:05:07'),
('5af0bf9f-d93a-49c2-b2b8-0dfc4e210761', '41', '1c0f0d3eda94ca5c908c', 'Terminated', '1c0f0d3eda94ca5c908c', '100041', '1c0f0d3eda94ca5c908c', '2018-05-07 21:13:14'),
('5af0bfc0-6b7d-40ee-aede-55f017598af3', '42', NULL, NULL, NULL, '10021', '43a6536bd39b2c712a38', '2018-05-07 21:06:04'),
('5af0bfcd-93c3-4183-92d9-9029d749d910', '42', NULL, NULL, NULL, '10021', '7bcbc6cfb6389eae8330', '2018-05-07 21:06:17'),
('5af0bfd7-ccac-4d34-8cd0-918b17012415', '42', NULL, NULL, NULL, '10021', '8e75e71a61520908781e', '2018-05-07 21:06:25'),
('5af0bfd7-0cf6-487c-abf4-e37051cad45e', '42', NULL, NULL, NULL, '10021', 'eb2394aff5ea83998ba5', '2018-05-07 21:06:30'),
('5af0bfdf-5e97-4395-a705-5d27298aff4d', '42', NULL, NULL, NULL, '10021', 'd3cb1952c2cba0ed4102', '2018-05-07 21:06:34'),
('5af0bfe4-9724-468f-ae9b-c1f9efa28f3f', '42', NULL, NULL, NULL, '10021', 'fe1dca5f25c0fe98511b', '2018-05-07 21:06:37'),
('5af0bfe6-4d1d-4bd8-b7da-38ba3974ec92', '41', '01992186bb687efef2d0', 'Terminated', '01992186bb687efef2d0', '100041', '01992186bb687efef2d0', '2018-05-07 21:11:25'),
('5af0bfe6-6603-4661-ab08-e783c1ffc8c1', '42', NULL, NULL, NULL, '10021', 'b7963e4572241464848f', '2018-05-07 21:06:41'),
('5af0bfe3-9dcc-4e99-96a7-93af010f327b', '42', NULL, NULL, NULL, '10021', '786b0fafa240d2a7ea98', '2018-05-07 21:06:41'),
('5af0bfe3-ddfd-4380-ba06-c6fe49dadd58', '42', NULL, NULL, NULL, '10021', '1f74cedf13c16d24b8d8', '2018-05-07 21:06:42'),
('5af0bfef-ffd3-4eca-8a16-9b4709f0548d', '42', NULL, NULL, NULL, '10021', 'acd2282007fc6b48d5b0', '2018-05-07 21:06:50'),
('5af0bff1-6f88-4ad3-b8a8-01519125e02a', '42', NULL, NULL, NULL, '10021', '237489532dcb0083e7fa', '2018-05-07 21:06:52'),
('5af0bff2-fad9-428b-a7ed-04b19fb71b95', '42', NULL, NULL, NULL, '10021', '192fefec5c48f0445f2f', '2018-05-07 21:06:52'),
('5af0bffa-689a-4ec6-b7b6-d12e3d68ff01', '42', NULL, NULL, NULL, '10021', '4c3421826ccfc775d95b', '2018-05-07 21:07:01'),
('5af0bfee-25fb-4d16-99a7-20a5d148612d', '42', NULL, NULL, NULL, '10021', '712d51a18f763d4969b7', '2018-05-07 21:07:03'),
('5af0c006-2b9a-4868-96dc-16ec1c3a3c8d', '42', NULL, NULL, NULL, '10021', '75029e339569bee8ea1b', '2018-05-07 21:07:14'),
('5af0c00d-77ce-4a25-a586-b2319765de9a', '42', NULL, NULL, NULL, '10021', 'f15165827f32b59aad93', '2018-05-07 21:07:20'),
('5af0c012-d07a-4337-9103-925cecca9af3', '42', NULL, NULL, NULL, '10021', 'b1cb67d1479d825e0b75', '2018-05-07 21:07:24'),
('5af0c018-584d-4d7f-9f6e-4a5ae6859074', '42', NULL, NULL, NULL, '10021', '7fc489b667d4623af6c4', '2018-05-07 21:07:31'),
('5af0c01b-30ee-4604-96b7-3c29299f5132', '42', NULL, NULL, NULL, '10021', '73eb77d6bcad5bcc7ff3', '2018-05-07 21:07:34'),
('5af0c01d-11fc-479c-bb20-33891f42492a', '42', NULL, NULL, NULL, '10021', '48b20b85776e7c3a66f4', '2018-05-07 21:07:35'),
('5af0c01e-43ef-41fe-883b-f8c563e28f50', '42', NULL, NULL, NULL, '10021', '9e14b8fe0e8ceba3f2b7', '2018-05-07 21:07:38'),
('5af0c017-b80d-4d08-8e05-c32839f256d0', '42', NULL, NULL, NULL, '10021', '20fec4958043f193e8dd', '2018-05-07 21:07:38'),
('5af0c00c-e6fa-4bc8-b09d-16e043a55d80', '42', NULL, NULL, NULL, '10021', '6dea70c22ae6d0addc32', '2018-05-07 21:07:39'),
('5af0c020-3d2f-4c98-a5b6-2ebc7b6df2e7', '42', NULL, NULL, NULL, '10021', '9913993c9ad02dd815b0', '2018-05-07 21:07:40'),
('5af0c023-40e7-4c1c-b0c5-1a7a19770171', '42', NULL, NULL, NULL, '10021', '11c89722e59afb0599a5', '2018-05-07 21:07:42'),
('5af0c015-0a8a-4862-a109-51d58e6f16e8', '42', NULL, NULL, NULL, '10021', '4f9afd16f3925c4fa17e', '2018-05-07 21:07:42'),
('5af0c038-77be-4fae-8c74-e9f1753244cc', '42', NULL, NULL, NULL, '10021', '8c9197e1397fb141b295', '2018-05-07 21:08:02'),
('5af0c02e-66b4-4347-a9d1-7a547c9975e7', '42', NULL, NULL, NULL, '10021', '9b776d707c4a9d466914', '2018-05-07 21:08:08'),
('5af0c04d-c575-48d1-94ff-ad73b8d53195', '42', NULL, NULL, NULL, '10021', '4e9b1019206eebcb350e', '2018-05-07 21:08:27'),
('5af0c054-7c91-427a-a184-57ab9d7ad885', '42', NULL, NULL, NULL, '10021', 'c95482025111cbc6606d', '2018-05-07 21:08:30'),
('5af0c055-0b5b-41ca-88cf-16f19fdea4ef', '41', 'd79720887ece3a720d62', 'Terminated', 'd79720887ece3a720d62', '100041', 'd79720887ece3a720d62', '2018-05-07 21:09:23'),
('5af0c124-e3a2-483b-93b5-37863398a4db', '41', '56556555dee2270b7a23', 'Terminated', '56556555dee2270b7a23', '100041', '56556555dee2270b7a23', '2018-05-07 21:16:51'),
('5af0c1da-d0db-4b6b-9b28-439ef1f1c676', '41', NULL, NULL, NULL, '100041', '6b6426b8305a40e79e3d', '2018-05-07 21:19:09'),
('5af0c2e7-6673-4b56-afb9-c86be3cee0db', '41', '56862ba621629335f3ae', 'Terminated', '56862ba621629335f3ae', '100041', '56862ba621629335f3ae', '2018-05-07 21:21:22'),
('5af0c332-c7f5-4ac4-8bb7-811237f3464c', '41', '66482aa34661cd8e786f', 'Terminated', '66482aa34661cd8e786f', '100041', '66482aa34661cd8e786f', '2018-05-07 21:24:15'),
('5af0c39d-a5ba-41a3-b1dc-c9c148d53f84', '42', NULL, NULL, NULL, '10021', '99046d40c28f2c6ebe37', '2018-05-07 21:22:28'),
('5af0c434-a1eb-4df9-a37e-40fa2ca546d2', '41', '93c03b54ab986c8b1abe', 'Terminated', '93c03b54ab986c8b1abe', '100041', '93c03b54ab986c8b1abe', '2018-05-07 21:25:37'),
('5af0c4d9-1efb-46eb-b3ee-78880d94fb86', '41', NULL, NULL, NULL, '100041', '1b778ee416688f049109', '2018-05-07 21:27:50'),
('5af0c61f-c446-46df-84d6-4a5906aae3b9', '41', NULL, NULL, NULL, '100041', '35abbf5ac9b2af40a810', '2018-05-07 21:33:14'),
('5af0c261-0105-4bf6-b940-bfedf9a0e80a', '41', NULL, NULL, NULL, '100041', '2d8b49695aa0cc0e4f6c', '2018-05-07 21:33:59'),
('5af0c6fc-ffd7-49b9-acfe-a3c3dc127720', '41', NULL, NULL, NULL, '100041', '7a42ffab4e4347f6e2f1', '2018-05-07 21:37:05'),
('5af0c746-d067-4bf8-be76-010192a55493', '41', NULL, NULL, NULL, '100041', 'ca26fff11805d944fbd0', '2018-05-07 21:38:23'),
('5af0c7dc-af50-4a36-8ae5-530662558c54', '41', NULL, NULL, NULL, '100041', 'a09c3d52ca57ca13eb5a', '2018-05-07 21:40:48'),
('5af0c806-cefb-4d19-b7cc-b9b59efe78a0', '41', NULL, NULL, NULL, '100041', '86cc28e620a8c4796b37', '2018-05-07 21:41:37'),
('5af0c86e-7790-486e-84fa-451afb984206', '41', NULL, NULL, NULL, '100041', '762e9d61e58541aa63da', '2018-05-07 21:43:04'),
('5af0ca8c-d76c-4a2d-ac45-6d2c6f6287d2', '42', NULL, NULL, NULL, '10021', '60dd673117b465d178a2', '2018-05-07 21:52:05'),
('5af0cbf3-1910-4b15-8f05-e2e6eee895c0', '42', NULL, NULL, NULL, '10021', 'aa15cb7167b1c4e460bf', '2018-05-07 21:58:05'),
('5af0cc26-f3a4-412f-936f-d991a355db51', '42', NULL, NULL, NULL, '10021', '5ed533f43bc625ee4685', '2018-05-07 21:58:56'),
('5af0cc31-7e10-47f4-a3f7-7afcca7c3924', '42', NULL, NULL, NULL, '10021', 'db6c36faf6ab18b4d075', '2018-05-07 21:59:07'),
('5af0cc74-ad6b-4329-b7ee-a5fa9b717337', '42', NULL, NULL, NULL, '10021', 'abbea3197d7f6b4614e6', '2018-05-07 22:00:13'),
('5af0cced-6541-41f3-85c3-e983ac655c0a', '42', NULL, NULL, NULL, '10021', 'b2971bc19d4a93c7a903', '2018-05-07 22:02:16'),
('5af0cd66-e51a-4dcf-bcb3-45d1b1f67317', '42', NULL, NULL, NULL, '10021', '112279771eab3bb894c6', '2018-05-07 22:04:17'),
('5af0cdac-3533-4a24-a7cd-84162efa5824', '42', NULL, NULL, NULL, '10021', 'f36163217663aac8caaa', '2018-05-07 22:05:26'),
('5af0ce14-3b06-428c-8546-8fa5c22b2e6c', '42', NULL, NULL, NULL, '10021', '7109b2657436f47d1578', '2018-05-07 22:07:09'),
('5af0ce65-deee-4d48-bcb8-715b48ec4d3b', '42', NULL, NULL, NULL, '10021', '43273ae2027307e05c37', '2018-05-07 22:08:41'),
('5af0cf54-070f-40d1-8058-b3c8ff5e734a', '42', NULL, NULL, NULL, '10021', '435a90cf9e86b795273f', '2018-05-07 22:12:30'),
('5af0d063-ad2b-4317-b8fe-c9092385e1ce', '42', NULL, NULL, NULL, '10021', '79d53e4245c580dea9db', '2018-05-07 22:17:04'),
('5af0d0f8-aa4f-4dc8-8a02-ff330f63f2d9', '42', NULL, NULL, NULL, '10021', 'a587e531379ffc4de9fc', '2018-05-07 22:19:55'),
('5af0d158-5e2a-46ea-baca-f7d7e124cf4f', '42', NULL, NULL, NULL, '10021', '1c987ad8395c89f293cd', '2018-05-07 22:21:08'),
('5af0d312-6046-44ad-8a89-eb8c05f4c712', '42', NULL, NULL, NULL, '10021', 'b782c8456801f1d75d7b', '2018-05-07 22:28:37'),
('5af0d364-6e7b-40be-82f2-a516f7c276e0', '42', NULL, NULL, NULL, '10021', 'd9df944e6f981b9d899c', '2018-05-07 22:29:53'),
('5af0d373-dcc0-4824-8730-58e423dee5ac', '42', NULL, NULL, NULL, '10021', '3211d8a7b2e07ea6f4bd', '2018-05-07 22:30:12'),
('5af0d3d1-50b6-4e43-8c0c-0df3a9fad4d6', '42', NULL, NULL, NULL, '10021', '3c41c0d1bf605b9467c3', '2018-05-07 22:31:41'),
('5af0d3fb-45dd-44b7-b1ff-789862e5920f', '42', NULL, NULL, NULL, '10021', 'ed108157cb903f8d5d1b', '2018-05-07 22:32:21'),
('5af0d43f-81c9-4f7a-8cbb-f60c0e97f8ff', '42', NULL, NULL, NULL, '10021', 'ccd4025e2f9993ac08bf', '2018-05-07 22:33:31'),
('5af0d4b8-f69e-4dd7-98c2-6475f45d8037', '42', NULL, NULL, NULL, '10021', '12b040c8077fb3c84122', '2018-05-07 22:35:31'),
('5af0d506-520a-496f-a881-6119fc835bf1', '42', NULL, NULL, NULL, '10021', '3ce301dfa23083bb98cd', '2018-05-07 22:36:48'),
('5af0d560-358c-45e1-8a6e-17d1893ba02a', '42', NULL, NULL, NULL, '10021', '76479d20c9e6e0749026', '2018-05-07 22:38:19'),
('5af0d5a9-df5d-4c97-9527-36a52359a234', '42', NULL, NULL, NULL, '10021', '97fee71bb1b469b36e43', '2018-05-07 22:39:30'),
('5af0d5e6-f21a-413a-9e5d-2c5e02744fdf', '42', NULL, NULL, NULL, '10021', '6206f418e7604bd13fc0', '2018-05-07 22:40:31'),
('5af0d749-936e-4ac2-8101-167048734a43', '42', NULL, NULL, NULL, '10021', 'e4d50e810307e218baf7', '2018-05-07 22:46:29'),
('5af0d84e-2986-4dab-86fe-09bc8fee86db', '42', NULL, NULL, NULL, '10021', '988e5990c101af02b3be', '2018-05-07 22:50:50'),
('5af0d910-b888-43d5-9a19-b59f8144a410', '42', NULL, NULL, NULL, '10021', '45b850f4652e45092123', '2018-05-07 22:54:04'),
('5af0d9cc-6b66-44b5-8059-c444a7972a06', '42', NULL, NULL, NULL, '10021', '8efc81f2472d3a412bde', '2018-05-07 22:57:10'),
('5af0d9cd-d026-414c-b9ac-6a61b44799b6', '42', NULL, NULL, NULL, '10021', '5802497fdef568ba35b5', '2018-05-07 22:57:14'),
('5af0d9d5-3337-4710-b32e-91691ea1bccc', '42', NULL, NULL, NULL, '10021', '1575129e06359aedd20a', '2018-05-07 22:57:20'),
('5af0db11-287b-4b24-85f4-5181c0b0fb7f', '42', NULL, NULL, NULL, '10021', '07b955ceffc213418b0f', '2018-05-07 23:02:52'),
('5af0dc20-2329-4269-8083-55eb37d5c8b2', '42', NULL, NULL, NULL, '10021', '19f559975668e3517e9a', '2018-05-07 23:07:07'),
('5af0dc26-a4d4-40f4-9643-b0e21befa76f', '42', NULL, NULL, NULL, '10021', '6b0630f7cea97af63cf4', '2018-05-07 23:07:33'),
('5af0dc92-a1b6-41e5-86fb-98fde7827986', '42', NULL, NULL, NULL, '10021', '8ebf7ea657b70ee1b525', '2018-05-07 23:09:03'),
('5af0dca5-bb31-4822-a973-35fb54b9afc5', '42', NULL, NULL, NULL, '10021', '70c108e5fb0dae789fc4', '2018-05-07 23:09:19'),
('5af0dcf5-1dfa-4ed1-b5ff-ef2eb242472b', '42', NULL, NULL, NULL, '10021', 'fc0fefd78beb52556856', '2018-05-07 23:11:15'),
('5af0dd45-d474-4bdb-9943-c6b3d7a56c79', '42', NULL, NULL, NULL, '10021', '271eefeb057a8ebd3254', '2018-05-07 23:12:00'),
('5af0dd53-c3a0-47a3-bafd-00f6aea72667', '42', NULL, NULL, NULL, '10021', '1a5afe74e48bcba088f8', '2018-05-07 23:12:13'),
('5af0df8c-7bf8-4b2b-8bf2-f9835572d7c9', '42', NULL, NULL, NULL, '10021', '1d560c8230bfa01c39e8', '2018-05-07 23:21:42'),
('5af0dfed-5a46-47a4-aab2-9abde2bf2e72', '42', NULL, NULL, NULL, '10021', 'f9e01b53a17d6fa03dfa', '2018-05-07 23:23:20'),
('5af0e069-97ca-4da1-a669-d3a7fc97dd14', '42', NULL, NULL, NULL, '10021', 'c17404c2022f9ab53829', '2018-05-07 23:25:24'),
('5af0e0c2-38b8-405b-8e9a-fde8e7dbf007', '42', NULL, NULL, NULL, '10021', '4938d20d5fa92ca0bda8', '2018-05-07 23:26:52'),
('5af0e297-7e54-429d-b66e-5650efa321e7', '42', NULL, NULL, NULL, '10021', 'f3b2f2872794be40c7ab', '2018-05-07 23:34:41'),
('5af0e386-7d56-47f5-95cf-8def12928b35', '42', NULL, NULL, NULL, '10021', 'cea25850073a3170e1ff', '2018-05-07 23:39:06'),
('5af0e533-5153-436e-b8f8-a0fbf1c1ec53', '42', NULL, NULL, NULL, '10021', '7eaff58cc47840596dfd', '2018-05-07 23:45:51'),
('5af0e54d-f960-4f3c-ba4c-2e7db8a12886', '42', NULL, NULL, NULL, '10021', '4e65252f4ca9d348740c', '2018-05-07 23:46:16'),
('5af0e59e-fdda-4378-9dfa-0f8011648ba4', '42', NULL, NULL, NULL, '10021', '0f0ff1e19331380a1c3a', '2018-05-07 23:47:36'),
('5af0e617-253f-4f27-bbd4-9e4fe9d852be', '42', NULL, NULL, NULL, '10021', '9684d34f422554e627b4', '2018-05-07 23:49:38'),
('5af0e762-5107-437c-8c74-aafd0f636618', '42', NULL, NULL, NULL, '10021', '8b76d1c7bc14a3a2905d', '2018-05-07 23:55:09'),
('5af0e801-b740-479a-81b5-ffd10e219c1f', '42', NULL, NULL, NULL, '10021', 'a4c55d096744ffb8d7ef', '2018-05-07 23:57:49'),
('5af0e8d8-d76b-4601-bc7a-e0176db0d774', '42', NULL, NULL, NULL, '10021', '795710cece42a6438862', '2018-05-08 00:01:22'),
('5af0e995-32ad-4775-a27a-307d7aae7901', '42', NULL, NULL, NULL, '10021', '38674e73010a244e5a80', '2018-05-08 00:04:34'),
('5af0e9c3-537b-4e75-8428-d55a145bab7e', '42', NULL, NULL, NULL, '10021', '7e41ce270f44d3e66649', '2018-05-08 00:05:17'),
('5af0f17d-58d1-4b6a-9f37-32e54badfb26', '42', NULL, NULL, NULL, '10021', 'f479cce9d66cd48d3e92', '2018-05-08 00:38:26'),
('5af0f206-51f1-49be-bfb5-df855d347900', '42', NULL, NULL, NULL, '10021', '03e201cf2e53bd9133d3', '2018-05-08 00:40:48'),
('5af0f42b-19ff-41e1-ba87-a5b0eb923991', '43', NULL, NULL, NULL, '10043', '262e052ef1b5487b8f2d', '2018-05-08 00:49:53'),
('5af14200-30cd-48ee-a3f4-245c925bf737', '43', NULL, NULL, NULL, '10043', 'e1bf531b81ad75be2999', '2018-05-08 06:21:51'),
('5af14280-ca7a-4c71-9460-8b5f251dd3b5', '43', NULL, NULL, NULL, '10043', '466d5b1971681bd6db4b', '2018-05-08 06:24:03'),
('5af1433d-7473-47a9-b6dc-8eff2ff2ffd0', '43', NULL, NULL, NULL, '10043', 'a88466c8f5708d0b1dc0', '2018-05-08 06:27:04'),
('5af14361-9211-4fae-92bc-2a2b5eebd10b', '43', NULL, NULL, NULL, '10043', 'aae71b61b6c73047c261', '2018-05-08 06:27:38'),
('5af14382-227e-4bc2-9fff-f10b2998aa8c', '43', '6f8bd6e45a2177c1d1dc', 'Terminated', '6f8bd6e45a2177c1d1dc', '10043', '6f8bd6e45a2177c1d1dc', '2018-05-08 06:29:14'),
('5af14388-5df7-4237-990e-86865e475214', '43', 'f2f110bd2148d72b46ad', 'Terminated', 'f2f110bd2148d72b46ad', '10043', 'f2f110bd2148d72b46ad', '2018-05-08 06:30:34'),
('5af14390-32d9-4322-9b46-4e61ee96c8a6', '43', '898303ab4f5335911977', 'Terminated', '898303ab4f5335911977', '10043', '898303ab4f5335911977', '2018-05-08 06:29:28'),
('5af14392-7406-4ca9-ac10-9eafd661bd05', '43', 'dc1a7d298460d011e70a', 'Terminated', 'dc1a7d298460d011e70a', '10043', 'dc1a7d298460d011e70a', '2018-05-08 06:29:20'),
('5af1439d-a76a-4a2a-810c-72288e0fa0f4', '43', 'a03b8927007e06f0ac90', 'Terminated', 'a03b8927007e06f0ac90', '10043', 'a03b8927007e06f0ac90', '2018-05-08 06:30:36'),
('5af143a1-6fcd-46b9-a7c5-057b658938a5', '43', '5e7382ff71331070a711', 'Terminated', '5e7382ff71331070a711', '10043', '5e7382ff71331070a711', '2018-05-08 06:29:45'),
('5af143b1-8ef8-48ac-acaf-9184e9c65f35', '43', '6e3eaae9017dd539b2f0', 'Terminated', '6e3eaae9017dd539b2f0', '10043', '6e3eaae9017dd539b2f0', '2018-05-08 06:30:09'),
('5af14423-2133-472d-84ff-a18050b335c0', '43', NULL, NULL, NULL, '10043', '7ea08ac43ccd2e6bd154', '2018-05-08 06:30:56'),
('5af1442c-29c5-4233-af0f-7a8207a8c302', '43', '1e56c6c4847a1dff7284', 'Terminated', '1e56c6c4847a1dff7284', '10043', '1e56c6c4847a1dff7284', '2018-05-08 06:32:31'),
('5af1443b-663a-4c21-aef4-38647a995d91', '43', NULL, NULL, NULL, '10043', 'ac3f5cb7426c6b97c0c7', '2018-05-08 06:31:17'),
('5af14439-e63d-46df-9e67-eb744f6dc893', '43', '3aa4bf1df0f382811175', 'Terminated', '3aa4bf1df0f382811175', '10043', '3aa4bf1df0f382811175', '2018-05-08 06:33:06'),
('5af14456-9dd5-46e9-a39f-8b5ab8cec837', '43', NULL, NULL, NULL, '10043', 'ea26b97ca673266aa5e0', '2018-05-08 06:31:44'),
('5af14459-5aa6-4a96-add7-b4a575e17baa', '43', '796b4b301deecffe1452', 'Terminated', '796b4b301deecffe1452', '10043', '796b4b301deecffe1452', '2018-05-08 06:33:05'),
('5af14465-5a59-4ba4-b8be-b585aee52729', '43', NULL, NULL, NULL, '10043', 'c878e90ed81271a1ef30', '2018-05-08 06:31:58'),
('5af14474-7819-4288-a2ed-63528b656b84', '43', NULL, NULL, NULL, '10043', '2f545d53017b385403a2', '2018-05-08 06:32:16'),
('5af14481-8f0d-4c0d-898f-7bda475553e1', '43', NULL, NULL, NULL, '10043', '062ac4d7eafb6c5e5988', '2018-05-08 06:32:29'),
('', '40', NULL, NULL, NULL, '434343', '8f0389703eca913f25d5', '2018-05-11 17:38:17'),
('', '40', NULL, NULL, NULL, '434343', 'e443948c1ea17b4d4a50', '2018-05-11 17:38:18'),
('', '39', NULL, NULL, NULL, '1', '71087b2266fdc56744f8', '2018-06-24 09:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` text,
  `cost_interview` text,
  `allotment_date` date DEFAULT NULL,
  `number_complete` varchar(11) DEFAULT NULL,
  `message` text,
  `replica_url` text,
  `remarks` text,
  `complete_end_url` text,
  `screen_out_url` text,
  `quota_url` text,
  `vendor_survey_status` text,
  `survey_id` int(11) DEFAULT NULL,
  `a_id` text,
  PRIMARY KEY (`vendor_id`),
  KEY `vendors_ibfk_1` (`survey_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`, `cost_interview`, `allotment_date`, `number_complete`, `message`, `replica_url`, `remarks`, `complete_end_url`, `screen_out_url`, `quota_url`, `vendor_survey_status`, `survey_id`, `a_id`) VALUES
(1, 'Anil Singh', '82882822', '2017-02-01', '92', 'Failed', NULL, 'Failure', 'google.com', 'yahoo.com', 'anil.com', 'Open', 33, NULL),
(2, 'Abhijit Agnihotri', '68888', '2016-03-04', '8', 'Great', NULL, 'Successful', 'https://en.wikipedia.org', 'http://insteptechnologies.000webhostapp.com', 'https://gmail.com', 'Open', 34, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_ibfk_1` FOREIGN KEY (`survey_id`) REFERENCES `new_survey` (`survey_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
