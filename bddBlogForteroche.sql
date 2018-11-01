-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  db759389311.hosting-data.io
-- Généré le :  Jeu 01 Novembre 2018 à 16:11
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db759389311`
--
CREATE DATABASE IF NOT EXISTS `db759389311` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `db759389311`;

-- --------------------------------------------------------

--
-- Structure de la table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chapters`
--

INSERT INTO `chapters` (`id`, `title`, `content`, `creation_date`) VALUES
(1, 'Chapitre premier', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</span></p>', '2018-09-12'),
(2, 'Il est venu le temps ', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</span></p>', '2018-09-19'),
(3, 'Rakham le troisième', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</span></p>', '2018-09-20'),
(6, 'Malorum', '<p><span style=\"font-family: \'Open Sans\', Arial, sans-serif; text-align: justify;\">\"<strong>At vero eos</strong> et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</span></p>', '2018-10-18'),
(7, 'Au long d\'une page', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Sed et est molestie, porta dui id, condimentum ante. Integer vitae sem lectus. Donec ante libero, fermentum eu eleifend in, consectetur semper urna. Curabitur ac urna libero. Quisque ut est eu nunc lobortis interdum. In id nisl eu tellus tristique accumsan. Aenean dolor tellus, blandit ultricies vulputate in, ornare vitae nibh. Nullam imperdiet tempor arcu id sollicitudin. Aliquam erat volutpat. Vestibulum facilisis dignissim dui, nec mollis metus elementum ut. Etiam eget aliquam neque. Donec vel dui a erat vehicula bibendum quis non ipsum. Quisque a est quis est aliquam lobortis. Phasellus ac felis quis ex feugiat volutpat. Etiam ut sapien purus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">In eu venenatis mauris. Donec a velit sapien. Etiam iaculis pharetra nisl ut suscipit. Donec ex elit, pharetra in fringilla luctus, sodales a lacus. Donec rutrum est tortor, non ultricies nibh malesuada a. Nam molestie semper mauris, sit amet dapibus libero placerat sit amet. Vestibulum volutpat ante a pellentesque pretium.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Nam lacus nunc, tincidunt id commodo eget, rhoncus in nunc. Aenean elementum congue augue, et laoreet nibh ullamcorper ac. Nullam aliquam lacinia erat, sit amet convallis justo malesuada et. Ut eu egestas ex. Sed quis magna non ex facilisis suscipit. Sed malesuada, justo et placerat molestie, sapien magna efficitur tortor, nec mattis turpis leo vel nunc. Cras lacus eros, varius sed hendrerit at, tincidunt a mauris. Nulla lobortis semper lorem, vitae rutrum ligula pellentesque vitae. Cras facilisis eros vitae tempus blandit. Sed id placerat quam. Quisque a porttitor mi. Curabitur ac quam ante. Sed feugiat lectus dapibus tortor eleifend finibus.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Fusce a volutpat nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec at luctus libero. Vivamus arcu nibh, accumsan in est ut, tincidunt iaculis massa. Morbi quis luctus dui. Suspendisse varius mi lectus. Aliquam vel sapien metus. Duis luctus luctus porta. Nam vitae quam blandit, lacinia quam in, feugiat massa. Sed maximus augue vel commodo bibendum. Integer sed malesuada est, eu facilisis quam. Nam venenatis nunc eu velit bibendum, sit amet sagittis magna finibus.</p>', '2018-10-31'),
(8, 'Ceci explique cela', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">Quisque feugiat lobortis metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam ut mauris massa. In gravida vitae neque vitae laoreet. Aliquam varius efficitur cursus. Nullam eleifend, dolor et pretium euismod, leo lorem consectetur nulla, nec porttitor libero metus nec neque. Integer rhoncus elementum dolor interdum euismod. Duis gravida turpis quis ex tempor vestibulum. Duis efficitur magna nulla, quis vestibulum eros ullamcorper a. Nullam at luctus metus. Sed eleifend posuere imperdiet. Donec imperdiet erat velit, sit amet maximus turpis luctus vel. Nam varius mi purus, sed pharetra metus commodo ac.</p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif;\">In tincidunt elit nec viverra molestie. Nam vel arcu eget tellus mollis sagittis. Duis rhoncus et nisl ut sagittis. Fusce sapien enim, vulputate sed lectus in, molestie dignissim velit. <em>Aliquam rhoncus quam vel lorem sagittis facilisis</em>. Sed neque felis, euismod eleifend lectus eu, scelerisque vestibulum neque. Aliquam nisi nisi, lacinia a maximus ut, sagittis vitae enim. Morbi ut purus volutpat justo venenatis tincidunt. Nam orci diam, vestibulum ut efficitur congue, egestas eu felis. Nunc interdum sapien vitae turpis aliquam, ac lobortis nulla interdum.</p>', '2018-10-31');

-- --------------------------------------------------------

--
-- Structure de la table `comment_state`
--

CREATE TABLE `comment_state` (
  `id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comment_state`
--

INSERT INTO `comment_state` (`id`, `state`) VALUES
(1, 'valider'),
(2, 'signaler'),
(3, 'supprimer');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `author` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` datetime NOT NULL,
  `comment_state_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `chapter_id`, `author`, `comment`, `comment_date`, `comment_state_id`) VALUES
(3, 1, 'hugo', 're bonjour', '2018-09-13 15:53:42', 1),
(4, 1, 'Anonyme', 'j\'ai réussi !!!\r\n', '2018-09-13 15:54:06', 1),
(5, 1, 'hugo', 'test', '2018-09-24 17:57:47', 1),
(6, 1, 'hugo', 'bonjour !\r\n', '2018-10-09 14:49:10', 1),
(14, 1, 'Antoine', 'Test de commentaire', '2018-10-30 20:06:15', 1),
(15, 1, 'Antoine', '<script>alert(\'toto\');</script>', '2018-10-30 20:13:49', 2),
(10, 1, 'jean1996', 'bonjour', '2018-10-23 17:11:58', 1),
(11, 1, 'anne', 'C’est super', '2018-10-28 21:00:14', 1),
(12, 1, 'fred', 'je vois je vois', '2018-10-29 05:44:43', 1),
(13, 6, 'fred', 'aaaaa!', '2018-10-29 05:45:33', 1),
(16, 1, 'hugo7', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-10-31 18:04:19', 2),
(17, 1, 'hugo7', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2018-10-31 18:04:32', 2),
(18, 1, 'hugo7', 'test de commentaire un peu trop long pour se rendre compte de la position du commentaire en cas de commentaire beaucoup trop qui décrirait la beauté de ce blog ', '2018-10-31 18:22:49', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `id_groupe` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `mail`, `id_groupe`) VALUES
(9, 'jean1996', '$2y$10$tver0znWoDp788.q1qTN6.lEG.UJVROwLfn/g8DlASHrEyXDd0LzG', 'jean1996@gmail.com', 1),
(8, 'hugo7', '$2y$10$l6tf6J33ENcNiHi5iTDsiO0b/XoQcJOQsI6A.SoBh2c1RrhqO9vaO', 'hugohapiak@gmail.com', 2),
(10, 'demo1', '$2y$10$Qt0gZYzxmT4J2BCLPAS4VeFwwaxeo1Or4PiR24uDupRVTUUjYT0JW', 'demo1@exemple.com', 1),
(11, 'demo2', '$2y$10$Cs93eZn.ds.ijJH4ZgnKFuUiXQUrZP5L4b3m5As5sPqTNSpE6K4vC', 'demo2@exemple.com', 1),
(12, 'demo3', '$2y$10$q.R0W7OGgUrLM0/.ZJ3iCO79CozCpEbA1O8.Z35TtoRfWg21ukjSS', 'demo3@exemple.com', 1),
(13, 'demo4', '$2y$10$eYCRMujzME3llFQNoKdFu.wYRmZa4aIoF8Evugpja3rvvZcnWpWlG', 'demo4@exemple.com', 1),
(14, 'Anne', '$2y$10$zXSR/IgVNEx9bZYe92T4nOzwAWV4sivfLjlzaQFrmTad1AHMAjc7m', 'alabussiere@mmm.com', 1),
(15, 'fred', '$2y$10$7ezAt08MWEqBwWGme9oe0O/XzUQ3x6dKjuQLyvL8a9V.fuDdMe/xa', 'fred@hapiak.com', 1),
(16, 'Antoine', '$2y$10$8gpEKY3QmUwPuJssGA9FZOVuYuLb4KWjKNV9mkR7CIYbwu6isixPy', 'sdfdsf@dfsd.fr', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user_group`
--

INSERT INTO `user_group` (`id`, `group_name`) VALUES
(1, 'membre'),
(2, 'admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment_state`
--
ALTER TABLE `comment_state`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `comment_state`
--
ALTER TABLE `comment_state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
