-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 06:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `post_id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `body`) VALUES
(1, 5, 10, 'asdeasdas'),
(5, 4, 10, 'sddgdfg'),
(11, 5, 11, 'dgdfgdfg'),
(12, 5, 11, 'sumon'),
(13, 6, 10, 'sdgsdggsd'),
(14, 1, 10, 'fghfhg'),
(15, 3, 10, 'id=3');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(45) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `description`) VALUES
(5, 10, 'Discussions', 'One of the hot discussions this week was, â€œIs it good to be a jack of many programming languages or a master of few?â€ There are very well articulated opinions inside, the one that I resonate with happens to be from Tor Nelson â€” it is a false dichotomy.  On the Hashnode engineering side of things, we have updated the behaviour of how nodes, and tagging posts work. Here is a gist of the changes:', '<p>One of the hot discussions this week was, <a href="https://hashnode.com/hw/74/cj37ofrr100jjcnk8kuaj62ff" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://hashnode.com/hw/74/cj37ofrr100jjcnk8kuaj62ff&amp;source=gmail&amp;ust=1496503801353000&amp;usg=AFQjCNHvFjmE2Pwl9gbo5uuK2_WJeUZhJg">&ldquo;Is it good to be a jack of many programming languages or a master of few?&rdquo;</a> There are very well articulated opinions inside, the one that I resonate with happens to be from Tor Nelson &mdash; it is a false dichotomy.</p>\r\n<p>On the Hashnode engineering side of things, we have updated the behaviour of how <a href="https://hashnode.com/nodes" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://hashnode.com/nodes&amp;source=gmail&amp;ust=1496503801353000&amp;usg=AFQjCNGGXRD7FXM8pQ4eJVgrRWOzbVToyQ">nodes, and tagging posts</a> work. Here is a gist of the changes:</p>'),
(6, 10, 'PHP', 'sgddddddddddddddddddddddddddddddddddddd', '<p>sdgggggggggggggggggggggggggggggggggg</p>\r\n<p>sdggggggggggggggggggggggggggggggggggggggggggggggggggggggggg</p>'),
(7, 11, 'Time Complexity', 'Time Complexity is a way to represent the amount of time needed by the program to run to completion.', '<p>Time Complexity is a way to represent the amount of time needed by the program to run to completion. We will study this in details in our section. NOTE: Before going deep into data structure, you should have a good knowledge of programming either in C or in C++ or Java.</p>'),
(8, 11, 'Space Complexity', 'Its the amount of memory space required by the algorithm, during the course of its execution. Space complexity must be taken seriously for multi-user systems and in situations where limited memory is available.', '<p>Its the amount of memory space required by the algorithm, during the course of its execution. Space complexity must be taken seriously for multi-user systems and in situations where limited memory is available. An algorithm generally requires space for following components : Instruction Space : Its the space required to store the executable version of the program. This space is fixed, but varies depending upon the number of lines of code in the program. Data Space : Its the space required to store all the constants and variables value. Environment Space : Its the space required to store the environment information needed to resume the suspended function.</p>'),
(9, 6, 'What is Algorithm?', 'An algorithm is a finite set of instructions or logic, written in order, to accomplish a certain predefined task. Algorithm is not the complete code or program, it is just the core logic(solution) of a problem,  Read More', '<p>&nbsp;An algorithm is a finite set of instructions or logic, written in order, to accomplish a certain predefined task. Algorithm is not the complete code or program, it is just the core logic(solution) of a problem, which can be expressed either as an informal high level description as pseudocode or using a flowchart. An algorithm is said to be efficient and fast, if it takes less time to execute and consumes less memory space. The performance of an algorithm is measured on the basis of following properties : Time Complexity Space Complexity</p>'),
(10, 6, 'Introduction To Data Structure', 'A data structure is a specialized format for organizing and storing data. General data structure types include the array, the file, the record, the table, the tree, and so on.', '<p>A data structure is a specialized format for organizing and storing data. General data structure types include the array, the file, the record, the table, the tree, and so on. Any data structure is designed to organize data to suit a specific purpose so that it can be accessed and worked with in appropriate ways.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`) VALUES
(1, 'John Smith', 'abc@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Abdullah Al Shiam', 'abc@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'shiam', 'abc@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Rahul', 'abc@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'John', 'abc@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'asmshiam', 'shiam@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'siam', 'shiam_cse_ru@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'mamun', 'shiam_cse_ru@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'alamin', 'abc@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'sumon', 'sumon@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
