--
-- Struttura della tabella `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `created` int(11) unsigned NOT NULL
) AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);
