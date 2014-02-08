SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dssd`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_invocations`
--

CREATE TABLE IF NOT EXISTS `user_invocations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `invoked_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `invocation_parameters`
--

CREATE TABLE IF NOT EXISTS `invocation_parameters` (
  `min_similatiry_SCC_tokens` int(10) NOT NULL,
  `grouping_choice` int(2) NOT NULL,
  `method_analysis` tinyint(1) NOT NULL,
  `suppressed_tokens` varchar(100) DEFAULT NULL,
  `equal_tokens` varchar(500) DEFAULT NULL,
  `invocation_id` int(11) NOT NULL
  KEY `invocation_id` (`invocation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invocation_files`
--

CREATE TABLE IF NOT EXISTS `invocation_files` (
  `invocation_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------