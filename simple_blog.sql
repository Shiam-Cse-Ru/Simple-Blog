-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2017 at 01:45 PM
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
  `body` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `body`, `created_date`) VALUES
(1, 5, 10, 'asdeasdas', '2017-06-12 14:34:17'),
(5, 4, 10, 'sddgdfg', '2017-06-12 19:28:39'),
(11, 5, 11, 'dgdfgdfg', '2017-06-12 19:40:39'),
(12, 5, 11, 'sumon', '2017-06-12 12:40:27'),
(13, 6, 10, 'sdgsdggsd', '2017-06-12 22:37:25'),
(14, 1, 10, 'fghfhg', '2017-06-13 11:41:20'),
(15, 3, 10, 'id=3', '2017-06-14 13:46:14'),
(16, 10, 6, 'helpful', '2017-06-10 11:41:12'),
(17, 10, 6, 'good', '2017-06-10 11:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(45) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `description` text NOT NULL,
  `active` int(50) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `description`, `active`, `created_date`) VALUES
(5, 10, 'Discussions', 'One of the hot discussions this week was, â€œIs it good to be a jack of many programming languages or a master of few?â€ There are very well articulated opinions inside, the one that I resonate with happens to be from Tor Nelson â€” it is a false dichotomy.  On the Hashnode engineering side of things, we have updated the behaviour of how nodes, and tagging posts work. Here is a gist of the changes:', '<p>One of the hot discussions this week was, <a href="https://hashnode.com/hw/74/cj37ofrr100jjcnk8kuaj62ff" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://hashnode.com/hw/74/cj37ofrr100jjcnk8kuaj62ff&amp;source=gmail&amp;ust=1496503801353000&amp;usg=AFQjCNHvFjmE2Pwl9gbo5uuK2_WJeUZhJg">&ldquo;Is it good to be a jack of many programming languages or a master of few?&rdquo;</a> There are very well articulated opinions inside, the one that I resonate with happens to be from Tor Nelson &mdash; it is a false dichotomy.</p>\r\n<p>On the Hashnode engineering side of things, we have updated the behaviour of how <a href="https://hashnode.com/nodes" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://hashnode.com/nodes&amp;source=gmail&amp;ust=1496503801353000&amp;usg=AFQjCNGGXRD7FXM8pQ4eJVgrRWOzbVToyQ">nodes, and tagging posts</a> work. Here is a gist of the changes:</p>', 1, '2017-06-10 19:28:39'),
(6, 10, 'PHP', 'PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.', '<h3><span style="color: #339966;">PHP </span>(recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server,generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was.</h3>', 1, '2017-06-10 19:36:59'),
(7, 11, 'Time Complexity', 'Time Complexity is a way to represent the amount of time needed by the program to run to completion.', '<p>Time Complexity is a way to represent the amount of time needed by the program to run to completion. We will study this in details in our section. NOTE: Before going deep into data structure, you should have a good knowledge of programming either in C or in C++ or Java.</p>', 1, '2017-06-10 19:50:39'),
(8, 11, 'Space Complexity', 'Its the amount of memory space required by the algorithm, during the course of its execution. Space complexity must be taken seriously for multi-user systems and in situations where limited memory is available.', '<p>Its the amount of memory space required by the algorithm, during the course of its execution. Space complexity must be taken seriously for multi-user systems and in situations where limited memory is available. An algorithm generally requires space for following components : Instruction Space : Its the space required to store the executable version of the program. This space is fixed, but varies depending upon the number of lines of code in the program. Data Space : Its the space required to store all the constants and variables value. Environment Space : Its the space required to store the environment information needed to resume the suspended function.</p>', 1, '2017-06-10 20:39:14'),
(9, 6, 'What is Algorithm?', 'An algorithm is a finite set of instructions or logic, written in order, to accomplish a certain predefined task. Algorithm is not the complete code or program, it is just the core logic(solution) of a problem,  Read More', '<p>&nbsp;An algorithm is a finite set of instructions or logic, written in order, to accomplish a certain predefined task. Algorithm is not the complete code or program, it is just the core logic(solution) of a problem, which can be expressed either as an informal high level description as pseudocode or using a flowchart. An algorithm is said to be efficient and fast, if it takes less time to execute and consumes less memory space. The performance of an algorithm is measured on the basis of following properties : Time Complexity Space Complexity</p>', 1, '2017-06-11 13:28:39'),
(10, 6, 'Introduction To Data Structure', 'A data structure is a specialized format for organizing and storing data. General data structure types include the array, the file, the record, the table, the tree, and so on.', '<p>A data structure is a specialized format for organizing and storing data. General data structure types include the array, the file, the record, the table, the tree, and so on. Any data structure is designed to organize data to suit a specific purpose so that it can be accessed and worked with in appropriate ways.</p>', 1, '2017-06-11 16:36:17'),
(11, 11, 'Autocorrelation', 'Autocorrelation, also known as serial correlation, is the correlation of a signal with a delayed copy of itself as a function of delay. Informally, it is the similarity between observations as a function of the time lag between them. The analysis of autocorrelation is a mathematical tool for finding repeating patterns,', '<p><strong>Autocorrelation</strong>, also known as <strong>serial correlation</strong>, is the <a class="mw-redirect" title="Correlation" href="https://en.wikipedia.org/wiki/Correlation">correlation</a> of a <a class="mw-redirect" title="Signal (information theory)" href="https://en.wikipedia.org/wiki/Signal_(information_theory)">signal</a> with a delayed copy of itself as a function of delay. Informally, it is the similarity between observations as a function of the time lag between them. The analysis of autocorrelation is a mathematical tool for finding repeating patterns, such as the presence of a <a class="mw-redirect" title="Periodic signal" href="https://en.wikipedia.org/wiki/Periodic_signal">periodic signal</a> obscured by <a title="Noise (signal processing)" href="https://en.wikipedia.org/wiki/Noise_(signal_processing)">noise</a>, or identifying the <a class="mw-redirect" title="Missing fundamental frequency" href="https://en.wikipedia.org/wiki/Missing_fundamental_frequency">missing fundamental frequency</a> in a signal implied by its <a title="Harmonic" href="https://en.wikipedia.org/wiki/Harmonic">harmonic</a> frequencies. It is often used in <a title="Signal processing" href="https://en.wikipedia.org/wiki/Signal_processing">signal processing</a> for analyzing functions or series of values, such as <a title="Time domain" href="https://en.wikipedia.org/wiki/Time_domain">time domain</a> signals.</p>', 1, '2017-06-10 01:08:05'),
(14, 11, 'sdfdsfsf', 'sdfsdfs', '<p>sdfsfdsf</p>', 1, '2017-06-10 01:33:11'),
(15, 11, 'sdgsgs', 'dfgdfgdg', '<p>dfgdfgdgfdgfdgf</p>', 0, '2017-06-10 01:33:18'),
(17, 11, 'Create Prank', 'The correlation is one of the most common and most useful statistics. A correlation is a single number that describes the degree', '<p>afsfsdf</p>', 1, '2017-06-10 01:36:15'),
(18, 11, 'asdasd', 'asdsad', '<div align="center"><center></center></div>\r\n<p align="center"><img src="https://www.socialresearchmethods.net/kb/Assets/images/hist1.gif" alt="hist1.gif (3391 bytes)" width="379" height="283" /></p>', 1, '2017-06-10 01:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `created_date`) VALUES
(1, 'John Smith', 'abc@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00'),
(2, 'Abdullah Al Shiam', 'abc@xyz.com', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00 00:00:00'),
(3, 'shiam', 'abc@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00'),
(4, 'Rahul', 'abc@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00'),
(5, 'John', 'abc@xyz.com', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00'),
(6, 'asmshiam', 'shiam@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-02 15:28:39'),
(8, 'siam', 'shiam_cse_ru@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-05-27 19:28:39'),
(9, 'mamun', 'shiam_cse_ru@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-05-27 15:28:39'),
(10, 'alamin', 'abc@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-01 13:28:39'),
(11, 'sumon', 'sumon@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-03 09:34:39'),
(12, 'sfsdf', 'sdfsfd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0000-00-00 00:00:00'),
(13, 'sdfsf', 'sdfsdf@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-03 09:34:39');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
