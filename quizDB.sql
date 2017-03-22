-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2016 at 12:04 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `userid` int(11) DEFAULT NULL,
  `questionid` int(11) DEFAULT NULL,
  `answergiven` int(11) DEFAULT NULL,
  `testid` datetime DEFAULT NULL,
  `test_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`userid`, `questionid`, `answergiven`, `testid`, `test_name`) VALUES
(7, 1, 104, '2016-06-29 22:38:30', 'JAVA'),
(7, 17, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 2, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 12, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 19, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 2, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 14, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 13, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 17, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 11, 105, '2016-06-29 22:38:30', 'JAVA'),
(7, 1, 104, '2016-06-29 22:39:27', 'JAVA'),
(7, 15, 101, '2016-06-29 22:39:27', 'JAVA'),
(7, 17, 104, '2016-06-29 22:39:27', 'JAVA'),
(7, 15, 101, '2016-06-29 22:39:27', 'JAVA'),
(7, 5, 103, '2016-06-29 22:39:27', 'JAVA'),
(7, 14, 104, '2016-06-29 22:39:27', 'JAVA'),
(7, 8, 103, '2016-06-29 22:39:27', 'JAVA'),
(7, 10, 102, '2016-06-29 22:39:27', 'JAVA'),
(7, 10, 102, '2016-06-29 22:39:27', 'JAVA'),
(7, 7, 103, '2016-06-29 22:39:27', 'JAVA'),
(7, 1, 103, '2016-06-29 22:40:30', 'PHP'),
(7, 3, 104, '2016-06-29 22:40:30', 'PHP'),
(7, 9, 101, '2016-06-29 22:40:30', 'PHP'),
(7, 17, 103, '2016-06-29 22:40:30', 'PHP'),
(7, 3, 104, '2016-06-29 22:40:30', 'PHP'),
(7, 6, 102, '2016-06-29 22:40:30', 'PHP'),
(7, 10, 103, '2016-06-29 22:40:30', 'PHP'),
(7, 14, 103, '2016-06-29 22:40:30', 'PHP'),
(7, 5, 103, '2016-06-29 22:40:30', 'PHP'),
(7, 10, 103, '2016-06-29 22:40:30', 'PHP'),
(7, 1, 103, '2016-06-29 22:41:52', 'PHP'),
(7, 15, 103, '2016-06-29 22:41:52', 'PHP'),
(7, 14, 103, '2016-06-29 22:41:52', 'PHP'),
(7, 19, 103, '2016-06-29 22:41:52', 'PHP'),
(7, 4, 102, '2016-06-29 22:41:52', 'PHP'),
(7, 20, 104, '2016-06-29 22:41:52', 'PHP'),
(7, 1, 104, '2016-06-29 22:41:52', 'PHP'),
(7, 8, 104, '2016-06-29 22:41:52', 'PHP'),
(7, 18, 102, '2016-06-29 22:41:52', 'PHP'),
(7, 5, 104, '2016-06-29 22:41:52', 'PHP'),
(7, 1, 103, '2016-06-29 22:42:47', 'PHP'),
(7, 14, 103, '2016-06-29 22:42:47', 'PHP'),
(7, 8, 104, '2016-06-29 22:42:47', 'PHP'),
(7, 3, 104, '2016-06-29 22:42:47', 'PHP'),
(7, 13, 102, '2016-06-29 22:42:47', 'PHP'),
(7, 3, 104, '2016-06-29 22:42:47', 'PHP'),
(7, 20, 102, '2016-06-29 22:42:47', 'PHP'),
(7, 5, 103, '2016-06-29 22:42:47', 'PHP'),
(7, 14, 103, '2016-06-29 22:42:47', 'PHP'),
(7, 13, 102, '2016-06-29 22:42:47', 'PHP'),
(7, 1, 104, '2016-06-29 22:44:07', 'JAVA'),
(7, 1, 105, '2016-06-29 22:45:21', 'JAVA'),
(7, 20, 105, '2016-06-29 22:45:21', 'JAVA'),
(7, 18, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 19, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 14, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 7, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 2, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 18, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 15, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 1, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 18, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 5, 105, '2016-06-29 22:47:18', 'JAVA'),
(7, 1, 103, '2016-06-29 22:49:16', 'PHP'),
(7, 4, 103, '2016-06-29 22:49:16', 'PHP'),
(7, 20, 102, '2016-06-29 22:49:16', 'PHP'),
(7, 10, 103, '2016-06-29 22:49:16', 'PHP'),
(7, 10, 103, '2016-06-29 22:49:16', 'PHP'),
(7, 6, 102, '2016-06-29 22:49:16', 'PHP'),
(7, 15, 101, '2016-06-29 22:49:16', 'PHP'),
(7, 8, 104, '2016-06-29 22:49:16', 'PHP'),
(7, 16, 103, '2016-06-29 22:49:16', 'PHP'),
(7, 3, 104, '2016-06-29 22:49:16', 'PHP'),
(7, 1, 104, '2016-06-29 23:57:16', 'JAVA'),
(7, 6, 102, '2016-06-29 23:57:16', 'JAVA'),
(7, 10, 102, '2016-06-29 23:57:16', 'JAVA'),
(7, 6, 102, '2016-06-29 23:57:16', 'JAVA'),
(7, 5, 103, '2016-06-29 23:57:16', 'JAVA'),
(7, 7, 103, '2016-06-29 23:57:16', 'JAVA'),
(7, 11, 101, '2016-06-29 23:57:16', 'JAVA'),
(7, 14, 104, '2016-06-29 23:57:16', 'JAVA'),
(7, 16, 101, '2016-06-29 23:57:16', 'JAVA'),
(7, 3, 103, '2016-06-29 23:57:16', 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `questionid` int(10) UNSIGNED NOT NULL,
  `name` char(150) NOT NULL,
  `choice1` varchar(150) NOT NULL,
  `choice2` varchar(150) NOT NULL,
  `choice3` varchar(150) NOT NULL,
  `choice4` varchar(150) NOT NULL,
  `answer` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionid`, `name`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'What is the default value of double variable?', '0.0d', '0.0f', '0', 'not given', 104),
(2, 'Which of the following is true about protected access modifier?', 'Variables, methods and constructors which are declared protected can be accessed by any class ', 'Variables, methods and constructors which are declared protected can be accessed by any class lying in same package', 'Variables, methods and constructors which are declared protected in the superclass can be accessed only by its child class', 'None of the above', 104),
(3, 'If a class contains one or more abstract methods then it is declared as', 'Static', 'final', 'abstract', 'all of the above', 103),
(4, 'For interpretation of java program, _________ command is used', 'java', 'javac', 'javap', 'none of these', 101),
(5, 'Arguments passed via command line (command prompt) are stored as ______ data type.', 'Data type of argument', 'integer', 'string', 'double', 103),
(6, 'What is mean by JIT?', 'java in time', 'just in time', 'join in time', 'none of these', 102),
(7, 'API document is ______ file.', 'Java', 'class', 'Html', 'Jsp', 103),
(8, 'When applet is dead it automatically invoke the ___________ method when we quit the browser.', 'paint()', 'Stop()', 'destroy()', 'stop()', 103),
(9, 'Which keyword represents object of the present class?', 'interface', 'package', 'this', 'static', 103),
(10, 'Applet class available in which package?', 'java.io', 'java.applet', 'java.lang\n', 'java.awt\n', 102),
(11, 'After the compilation of the java source code, _________ file is created by JVM.', 'class', 'java', 'cdr', 'doc', 101),
(12, 'In applet, for accepting user defined parameter, we need to use _________ tag.', 'center', 'applet', 'param', 'body', 103),
(13, 'parseInt() and parseLong() method throws ________________', 'ArithmeticException\r\n', 'ClassNotFoundException', 'NullPointerException', 'NumberFormatException', 104),
(14, 'what is jdb?', 'java compiler', 'java Interpreter\r\n', 'java Disassemble\r\n', 'java debugger\r\n', 104),
(15, 'How many classes we are able to extend in java?', 'One', 'Two', 'Three', 'Four', 101),
(16, 'String in Java is a?', 'class\r\n\r\n', 'object', 'variable', 'character array', 101),
(17, 'Which of these method of String class is used to obtain character at specified index?', 'char()', 'Charat()', 'charat()', 'charAt()', 104),
(18, 'Which of these keywords is used to refer to member of base class from a sub class?', 'upper', 'super', 'this', 'None of the mentioned', 102),
(19, 'Which of these method of String class can be used to test to strings for equality?', 'isequal()\r\n', 'isequals()', 'equal()', 'equals()', 104),
(20, 'Which of the following statements are incorrect?', 'String is a class.', 'Strings in java are mutable.', 'Every string is an object of class String.', 'Java defines a peer class of String, called StringBuffer, which allows string to be altered.', 102);

-- --------------------------------------------------------

--
-- Table structure for table `quiz2`
--

CREATE TABLE `quiz2` (
  `questionid` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `choice1` varchar(200) DEFAULT NULL,
  `choice2` varchar(200) DEFAULT NULL,
  `choice3` varchar(200) DEFAULT NULL,
  `choice4` varchar(200) DEFAULT NULL,
  `answer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz2`
--

INSERT INTO `quiz2` (`questionid`, `name`, `choice1`, `choice2`, `choice3`, `choice4`, `answer`) VALUES
(1, 'Trace the odd data type', 'double', 'float', 'integer', 'real number', 103),
(2, 'Which of the folowing are valid float values?', '4.0', '4.5678', '7e4', 'all of above', 104),
(3, 'In php string data are', 'delimited by double quote', 'delimited by single quote', 'delimited by <<< identifier', 'all of above', 104),
(4, 'Which datatypes are treaded as arrays', 'Float', 'Integer', 'String', 'Boolean', 103),
(5, 'Which of following are compound data type?', 'Objects', 'Array', 'Both', 'None', 103),
(6, 'Casting operator introduced in PHP 6 is', '(int64)', '(array)', '(real) or (double) or (float)', '(object)', 102),
(7, 'When defining identifier in PHP you should remember that', 'Identifiers can be any length', ' Identifier are case sensitive. So $result is different than $ result', 'Both of above', 'None of above', 103),
(8, 'Identify the invalid identifier', 'size', 'my-function', '_someword', 'This&that', 104),
(9, 'Which of folowiing variable assignment is ''by value'' assignment in PHP', '$value1= & $value', '$value1= $value', '$value1= & $value', 'None', 101),
(10, 'Identify the variable scope that is not supported by PHP', 'Function parameters', 'Local variables', 'Hidden variables', 'Global variables', 103),
(11, ' Variable scope on which a variable does not loose its value when the function exists and use that value if the function is called again is:', 'Local', 'function parameter', 'static', 'None of above', 103),
(12, 'The left association operator % is used in PHP for', 'percentage', 'bitwise or\r\n', 'division', 'modulus', 104),
(13, 'The left associative dot operator (.) is used in PHP for', 'multiplication', 'concatenation', 'separate object and its member', 'delimeter', 102),
(14, 'Which of the following functions require the allow-url-fopen must be enabled?', 'include()', 'require()', 'both of above', 'None of above', 103),
(15, 'Trace the function that does continue the script execution even if the file inclusion fails', 'include ()', 'require ()', 'both of above', 'none of above', 101),
(16, 'What is the description of Error level E_ERROR?', 'Fatal run-time error', 'Near-fatal error', 'Compile-time error', 'Fatal Compile-time error', 101),
(17, 'Which character do the error_reporting directive use to represent the logical operator NOT?', '/', '!', '~', '^', 103),
(18, 'Which function is responsible for sending a custom message to the system log?', 'systemlog()\r\n', 'syslog()', 'log_system()', 'sys_log()', 102),
(19, 'Which one of the following regular expression matches any string containing zero or one p?', 'p+\r\n', 'p*', 'P?', 'p#', 103),
(20, 'A package is a set of related ___.', 'Objects', 'Classes', 'Programs', 'Functions', 102);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `test_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `test_name`) VALUES
(1, 'java'),
(2, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `email`, `password`, `phonenumber`, `address`, `trn_date`) VALUES
(7, 'Prakash', 'Makwana', 'p@g.com', '202cb962ac59075b964b07152d234b70', 9898980008, 'toronto', '2016-06-29 18:22:42'),
(8, 'Tejas', 'Ppp', 'p@p.com', '202cb962ac59075b964b07152d234b70', 9999999999, 'toronto', '2016-06-29 20:58:38'),
(11, 'Tejas', 'Shah', 't@a.com', 'a32fd209bb62e4249dc9732161db47d8', 7878114111, 'anand', '2016-06-29 23:55:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `quiz2`
--
ALTER TABLE `quiz2`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `questionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `quiz2`
--
ALTER TABLE `quiz2`
  MODIFY `questionid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
