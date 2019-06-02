-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 07:30 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_body` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_user_id`, `project_name`, `project_body`, `date_created`) VALUES
(1, 0, 'php', 'This task involves coding a script', '2019-05-30 01:49:47'),
(2, 0, 'javascript', 'I need javascript to make applications do nice things.', '2019-05-30 11:49:47'),
(4, 4, 'Bootstrap 4.1.7', 'bootstrap is an awesome CSS FrameWork', '2019-05-30 02:36:48'),
(8, 4, 'Vue js', 'Vue js', '2019-05-31 05:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_body` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `task_body`, `due_date`, `date_created`, `project_id`, `status`) VALUES
(1, 'take php course 1 and 2', 'php course is awesome ...wow....', '2019-11-11', '2019-05-30 05:37:52', 1, 0),
(2, 'javascript course', 'js course is really need.', '2019-05-14', '2019-05-30 05:37:52', 1, 0),
(3, 'documentation', 'Have to finish the tutorial and documentation.', '2019-05-31', '2019-05-30 06:18:33', 4, 0),
(4, 'dom bom', 'Have to clear concept about dom and bom', '2019-05-31', '2019-05-30 06:24:31', 2, 0),
(7, 'Tutorial', 'Video TT', '2019-05-28', '2019-05-31 02:59:48', 4, 1),
(12, 'heyy taskkk', 'he tasssk', '0000-00-00', '2019-05-31 03:19:07', 5, 0),
(13, 'my proo', 'myy proo', '0000-00-00', '2019-05-31 03:19:20', 5, 0),
(14, 'jj task', 'jj task', '0000-00-00', '2019-05-31 03:25:50', 6, 0),
(16, 'Js complete', 'JS must be completed.', '2019-05-14', '2019-05-31 05:24:06', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `register_date`) VALUES
(1, '', '', 'Masud', '', '12345', '2019-05-29 05:56:19'),
(2, '', '', 'Rana', '', '123', '2019-05-29 05:56:19'),
(3, 'Masud', 'Rana', 'Masud99Rana', 'masud@gmail.com', '$2y$12$272HOXeRbbTtX2qqxwLQBeSLxR9GCPCTuRVfM9bx1hsP3JhEZ7.di', '2019-05-29 07:11:28'),
(4, 'masud', 'hello', 'hello', 'hello@gmail.com', '$2y$12$272HOXeRbbTtX2qqxwLQBeSLxR9GCPCTuRVfM9bx1hsP3JhEZ7.di', '2019-05-29 07:16:40'),
(5, 'maria', 'ria', 'ria229', 'ria@gmail.com', '$2y$12$272HOXeRbbTtX2qqxwLQBeSLxR9GCPCTuRVfM9bx1hsP3JhEZ7.di', '2019-05-29 07:24:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
