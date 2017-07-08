-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 10:46 PM
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
(1, 5, 10, 'nice post', '2017-06-12 14:34:17'),
(5, 4, 10, 'salutary post', '2017-06-12 19:28:39'),
(11, 5, 11, 'This is the best', '2017-06-12 19:40:39'),
(12, 5, 11, 'awesome', '2017-06-12 12:40:27'),
(13, 6, 10, 'nice', '2017-06-12 22:37:25'),
(14, 1, 10, 'graceful', '2017-06-13 11:41:20'),
(15, 3, 10, 'wow', '2017-06-14 13:46:14'),
(19, 11, 15, 'this is so much helpful post', '2017-06-15 07:16:55'),
(20, 10, 6, 'nice post', '2017-06-17 12:18:32'),
(21, 8, 6, 'helpful post', '2017-06-17 12:26:00'),
(22, 8, 6, 'great post', '2017-06-17 12:26:08'),
(23, 8, 6, 'helpful', '2017-06-17 12:26:14'),
(24, 8, 6, 'helpful', '2017-06-17 12:28:03'),
(25, 8, 6, 'nice post', '2017-06-17 12:28:12'),
(26, 8, 6, 'wow', '2017-06-17 12:28:16'),
(27, 10, 23, 'great', '2017-06-18 04:52:55'),
(28, 18, 11, 'demo', '2017-07-09 02:33:03');

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
(10, 6, 'Introduction To Data Structure', 'A data structure is a specialized format for organizing and storing data. General data structure types include the array, the file, the record, the table, the tree, and so on.', '<p>A data structure is a specialized format for organizing and storing data. General data structure types include the array, the file, the record, the table, the tree, and so on. Any data structure is designed to organize data to suit a specific purpose so that it can be accessed and worked with in appropriate ways.tree, and so on. Any data structure is designed to organize data to suit a specific purpose so that it can be accessed and worked with in appropriate waystree, and so on. Any data structure is designed to organize data to suit a specific purpose so that it can be accessed and worked with in appropriate waystree, and so on. Any data structure is designed to organize data to suit a specific purpose so that it can be accessed and worked with in appropriate ways</p>', 1, '2017-06-11 16:36:17'),
(11, 11, 'Autocorrelation', 'Autocorrelation, also known as serial correlation, is the correlation of a signal with a delayed copy of itself as a function of delay. Informally, it is the similarity between observations as a function of the time lag between them. The analysis of autocorrelation is a mathematical tool for finding repeating patterns,', '<p><strong>Autocorrelation</strong>, also known as <strong>serial correlation</strong>, is the <a class="mw-redirect" title="Correlation" href="https://en.wikipedia.org/wiki/Correlation">correlation</a> of a <a class="mw-redirect" title="Signal (information theory)" href="https://en.wikipedia.org/wiki/Signal_(information_theory)">signal</a> with a delayed copy of itself as a function of delay. Informally, it is the similarity between observations as a function of the time lag between them. The analysis of autocorrelation is a mathematical tool for finding repeating patterns, such as the presence of a <a class="mw-redirect" title="Periodic signal" href="https://en.wikipedia.org/wiki/Periodic_signal">periodic signal</a> obscured by <a title="Noise (signal processing)" href="https://en.wikipedia.org/wiki/Noise_(signal_processing)">noise</a>, or identifying the <a class="mw-redirect" title="Missing fundamental frequency" href="https://en.wikipedia.org/wiki/Missing_fundamental_frequency">missing fundamental frequency</a> in a signal implied by its <a title="Harmonic" href="https://en.wikipedia.org/wiki/Harmonic">harmonic</a> frequencies. It is often used in <a title="Signal processing" href="https://en.wikipedia.org/wiki/Signal_processing">signal processing</a> for analyzing functions or series of values, such as <a title="Time domain" href="https://en.wikipedia.org/wiki/Time_domain">time domain</a> signals.</p>', 1, '2017-06-10 01:08:05'),
(14, 11, 'e-commerce', 'e-commerce is a transaction of buying or selling online. Electronic commerce draws on technologies such as mobile commerce,', '<p>e-commerce is a transaction of buying or selling online. Electronic commerce draws on technologies such as mobile commerce, electronic funds transfer, supply chain management, Internet marketing, online transaction processing, electronic data interchange (EDI), inventory management systems, and automated data collection systems. Modern electronic commerce typically uses the World Wide Web for at least one part of the transaction''s life cycle although it may also use other technologies such as e-mail.\n\ne-commerce businesses may employ some or all of the following:\n\nOnline shopping web sites for retail sales direct to consumers\nProviding or participating in online marketplaces, which process third-party business-to-consumer or consumer-to-consumer sales\nBusiness-to-business buying and selling\nGathering and using demographic data through web contacts and social media\nBusiness-to-business (B2B) electronic data interchange\nMarketing to prospective and established customers by e-mail or fax (for example, with newsletters)\nEngaging in pretail for launching new products and services\nOnline financial exchanges for currency exchanges or trading purposes</p>', 1, '2017-06-10 01:33:11'),
(15, 11, 'Mobile commerce', 'The phrase mobile commerce was originally coined in 1997 by Kevin Duffey at the launch of the Global Mobile Commerce', '<p>The phrase <strong>mobile commerce</strong> was originally coined in 1997 by Kevin Duffey at the launch of the Global Mobile Commerce Forum, to mean "the delivery of <a class="mw-redirect" title="Electronic commerce" href="https://en.wikipedia.org/wiki/Electronic_commerce">electronic commerce</a> capabilities directly into the consumer&rsquo;s hand, anywhere, via <a title="Wireless" href="https://en.wikipedia.org/wiki/Wireless">wireless</a>technology."<sup id="cite_ref-1" class="reference"><a href="https://en.wikipedia.org/wiki/Mobile_commerce#cite_note-1">[1]</a></sup> Many choose to think of Mobile Commerce as meaning "a retail outlet in your customer&rsquo;s pocket."</p>\r\n<p><a title="Mobile device" href="https://en.wikipedia.org/wiki/Mobile_device">Mobile</a> commerce is worth <a title="Orders of magnitude (currency)" href="https://en.wikipedia.org/wiki/Orders_of_magnitude_(currency)">US$230 billion</a>, with Asia representing almost half of the market, and has been forecast to reach US$700 billion in 2017.<sup id="cite_ref-2" class="reference"><a href="https://en.wikipedia.org/wiki/Mobile_commerce#cite_note-2">[2]</a></sup> According to BI Intelligence<sup id="cite_ref-3" class="reference"><a href="https://en.wikipedia.org/wiki/Mobile_commerce#cite_note-3">[3]</a></sup> in January 2013, 29% of mobile users have now made a purchase with their phones. Walmart estimated<sup id="cite_ref-4" class="reference"><a href="https://en.wikipedia.org/wiki/Mobile_commerce#cite_note-4">[4]</a></sup> that 40% of all visits to their internet shopping site in December 2012 was from a <a title="Mobile device" href="https://en.wikipedia.org/wiki/Mobile_device">mobile device</a>. <a title="Bank of America" href="https://en.wikipedia.org/wiki/Bank_of_America">Bank of America</a> predicts<sup id="cite_ref-5" class="reference"><a href="https://en.wikipedia.org/wiki/Mobile_commerce#cite_note-5">[5]</a></sup> $67.1 billion in purchases will be made from mobile devices by European and U.S. shoppers in 2015. m-Commerce made up 11.6 per cent of total e-commerce spending in 2014, and is forecast to increase to 45 per cent by 2020, according to <a class="external text" href="http://www.banklesstimes.com/2017/02/14/mobile-commerce-is-the-trend-for-2017/" rel="nofollow">BI Intelligence</a>. ComScore <a class="external text" href="http://www.retaildive.com/news/comscore-holiday-spending-topped-80b-driven-by-mobile-commerce-growth/436106/" rel="nofollow">reported</a> in February 2017 that mobile commerce had grown 45% in year to December 2016.</p>', 1, '2017-06-10 01:33:18'),
(17, 11, 'Supply chain management', 'In commerce, supply chain management (SCM), the management of the flow of goods and services,[2] involves the movement and storage of raw materials, of work-in-process inventory, and of finished goods from point of origin to point of consumption.', '<p>In <a title="Commerce" href="https://en.wikipedia.org/wiki/Commerce">commerce</a>, <strong>supply chain management</strong> (<strong>SCM</strong>), the management of the flow of <a class="mw-redirect" title="Good (economics)" href="https://en.wikipedia.org/wiki/Good_(economics)">goods</a> and services,<sup id="cite_ref-2" class="reference"><a href="https://en.wikipedia.org/wiki/Supply_chain_management#cite_note-2">[2]</a></sup> involves the movement and storage of <a title="Raw material" href="https://en.wikipedia.org/wiki/Raw_material">raw materials</a>, of work-in-process <a title="Inventory" href="https://en.wikipedia.org/wiki/Inventory">inventory</a>, and of finished goods from point of origin to point of consumption. Interconnected or interlinked networks, channels and node <a title="Business" href="https://en.wikipedia.org/wiki/Business">businesses</a> combine in the provision of <a title="Product (business)" href="https://en.wikipedia.org/wiki/Product_(business)">products</a> and <a title="Service (economics)" href="https://en.wikipedia.org/wiki/Service_(economics)">services</a> required by end customers in a <a title="Supply chain" href="https://en.wikipedia.org/wiki/Supply_chain">supply chain</a>.<sup id="cite_ref-3" class="reference"><a href="https://en.wikipedia.org/wiki/Supply_chain_management#cite_note-3">[3]</a></sup> Supply-chain management has been defined <sup id="cite_ref-4" class="reference"><a href="https://en.wikipedia.org/wiki/Supply_chain_management#cite_note-4">[4]</a></sup> as the "design, planning, execution, control, and monitoring of supply chain activities with the objective of creating net value, building a competitive infrastructure, leveraging worldwide logistics, synchronizing supply with demand and measuring performance globally."<sup id="cite_ref-5" class="reference"><a href="https://en.wikipedia.org/wiki/Supply_chain_management#cite_note-5">[5]</a></sup></p>\r\n<p>SCM practice draws heavily from the areas of <a title="Industrial engineering" href="https://en.wikipedia.org/wiki/Industrial_engineering">industrial engineering</a>, <a title="Systems engineering" href="https://en.wikipedia.org/wiki/Systems_engineering">systems engineering</a>, <a title="Operations management" href="https://en.wikipedia.org/wiki/Operations_management">operations management</a>, <a title="Logistics" href="https://en.wikipedia.org/wiki/Logistics">logistics</a>,<a title="Procurement" href="https://en.wikipedia.org/wiki/Procurement">procurement</a>, <a title="Information technology" href="https://en.wikipedia.org/wiki/Information_technology">information technology</a>, and marketing <sup id="cite_ref-Kozlenkova_586.E2.80.93609_6-0" class="reference"><a href="https://en.wikipedia.org/wiki/Supply_chain_management#cite_note-Kozlenkova_586.E2.80.93609-6">[6]</a></sup> and strives for an integrated approach.<sup class="noprint Inline-Template Template-Fact">[<em><a title="Wikipedia:Citation needed" href="https://en.wikipedia.org/wiki/Wikipedia:Citation_needed"><span title="This claim needs references to reliable sources. (March 2016)">citation needed</span></a></em>]</sup> Marketing channels play an important role in supply chain management <sup id="cite_ref-Kozlenkova_586.E2.80.93609_6-1" class="reference"><a href="https://en.wikipedia.org/wiki/Supply_chain_management#cite_note-Kozlenkova_586.E2.80.93609-6">[6]</a></sup> Current research in supply chain management is concerned with topics related to <a title="Sustainability" href="https://en.wikipedia.org/wiki/Sustainability">sustainability</a> and <a title="Risk management" href="https://en.wikipedia.org/wiki/Risk_management">risk management</a>, among others, whereas the &ldquo;people dimension&rdquo; of SCM, ethical issues, internal integration, transparency/visibility, and human capital/talent management are topics that have, so far, been underrepresented on the research agenda.<sup id="cite_ref-7" class="reference"><a href="https://en.wikipedia.org/wiki/Supply_chain_management#cite_note-7">[7]</a></sup></p>', 1, '2017-06-10 01:36:15'),
(18, 11, 'Online shopping', 'Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet using a web browser.', '<p><strong>Online shopping</strong> is a form of <a class="mw-redirect" title="Electronic commerce" href="https://en.wikipedia.org/wiki/Electronic_commerce">electronic commerce</a> which allows consumers to directly buy <a class="mw-redirect" title="Good (economics)" href="https://en.wikipedia.org/wiki/Good_(economics)">goods</a> or <a title="Service (economics)" href="https://en.wikipedia.org/wiki/Service_(economics)">services</a> from a seller over the <a title="Internet" href="https://en.wikipedia.org/wiki/Internet">Internet</a> using a <a title="Web browser" href="https://en.wikipedia.org/wiki/Web_browser">web browser</a>.</p>', 1, '2017-06-10 01:41:21'),
(19, 15, 'Data structure', 'In computer science, a data structure is a particular way of organizing data in a computer so that it can be used efficiently.', '<p class="emojiOne"><strong>Data structures</strong> can implement one or more particular <a title="Abstract data type" href="https://en.wikipedia.org/wiki/Abstract_data_type">abstract data types</a> (ADT), which specify the operations that can be performed on a data structure and the<a title="Computational complexity theory" href="https://en.wikipedia.org/wiki/Computational_complexity_theory">computational complexity</a> of those operations. In comparison, a data structure is a concrete implementation of the specification provided by an ADT.<sup class="noprint Inline-Template Template-Fact">[<em><a title="Wikipedia:Citation needed" href="https://en.wikipedia.org/wiki/Wikipedia:Citation_needed"><span title="This claim needs references to reliable sources. (January 2017)">citation needed</span></a></em>]</sup></p>\r\n<p class="emojiOne">Different kinds of data structures are suited to different kinds of applications, and some are highly specialized to specific tasks. For example, relational databases commonly use <a title="B-tree" href="https://en.wikipedia.org/wiki/B-tree">B-tree</a> indexes for data retrieval,<sup id="cite_ref-3" class="reference"><a href="https://en.wikipedia.org/wiki/Data_structure#cite_note-3">[3]</a></sup> while <a title="Compiler" href="https://en.wikipedia.org/wiki/Compiler">compiler</a> implementations usually use <a title="Hash table" href="https://en.wikipedia.org/wiki/Hash_table">hash tables</a> to look up identifiers.<sup class="noprint Inline-Template Template-Fact">[<em><a title="Wikipedia:Citation needed" href="https://en.wikipedia.org/wiki/Wikipedia:Citation_needed"><span title="This claim needs references to reliable sources. (January 2017)">citation needed</span></a></em>]</sup></p>', 1, '2017-06-11 07:14:56');

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
(13, 'sdfsf', 'sdfsdf@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-03 09:34:39'),
(14, 'dgdgfd', 'asdafsdfs@xyz.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-10 09:45:51'),
(15, 'shiamasm', 'asmshiam@yaho.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-11 07:13:14'),
(16, 'asmsumon', 'asms@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-11 07:19:04'),
(17, 'sdfdgdfghf', 'dfgdfg@xyz.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00 00:00:00'),
(18, 'fftyhfh', 'werewr@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00 00:00:00'),
(19, 'ertetr', 'ertetr@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00 00:00:00'),
(20, 'sdgsdgs', 'dfgdg@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00 00:00:00'),
(21, 'erwr', 'sdfsfd@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-18 12:46:44'),
(22, 'werwr', 'werwr@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-18 12:47:41'),
(23, 'Rajib', 'sdgdg@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-18 04:50:47'),
(28, 'aual', 'aual@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2017-07-09 02:43:19');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
