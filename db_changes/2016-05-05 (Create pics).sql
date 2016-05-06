CREATE TABLE `pics` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `pics`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
