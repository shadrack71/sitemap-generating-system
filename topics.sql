CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;


INSERT INTO `topics` (`id`, `subject`, `created`) VALUES
(1, 'Build Instant Search with Ajax, PHP & MySQL', '2020-06-20 06:16:17'),
(2, 'Build Content Management System with PHP & MySQL', '2020-06-17 07:19:18'),
(3, 'Live Add Edit Delete Datatables Records with Ajax, PHP & MySQL', '2020-06-09 06:13:14'),
(4, 'Email Subscription System with PHP & MySQL', '2020-06-02 07:22:21'),
(5, 'Poll and Voting System with PHP and MySQL', '2020-06-09 03:10:13');


