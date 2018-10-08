-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `jokes`;
CREATE TABLE `jokes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setup` varchar(200) NOT NULL,
  `punchline` varchar(200) NOT NULL,
  `joke_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jokes` (`id`, `setup`, `punchline`, `joke_id`, `rating`) VALUES
(1,	'Why do programmers always mix up Halloween and Christmas?',	'Because Oct 31 == Dec 25',	23,	0),
(2,	'I just watched a documentary about beavers.',	'It was the best dam show I ever saw',	41,	0),
(3,	'If you put a million monkeys at a million keyboards, one of them will eventually write a Java program',	'the rest of them will write Perl',	26,	0),
(4,	'Why did the Clydesdale give the pony a glass of water?',	'Because he was a little horse',	44,	0),
(5,	'Did you hear about the two silk worms in a race?',	'It ended in a tie.',	19,	0),
(6,	'How do you organize an outer space party?',	'You planet',	9,	0),
(7,	'How do you make a tissue dance?',	'You put a little boogie on it.',	2,	0),
(8,	'Why is peter pan always flying?',	'Because he neverlands',	55,	0),
(9,	'What do you call a belt made out of watches?',	'A waist of time.',	4,	0),
(10,	'How do you check if a webpage is HTML5?',	'Try it out on Internet Explorer',	56,	0),
(11,	'What kind of shoes does a thief wear?',	'Sneakers',	10,	0),
(12,	'To understand what recursion is...',	'You must first understand what recursion is',	28,	0),
(13,	'Why do chicken coops only have two doors?',	'Because if they had four, they would be chicken sedans',	49,	0),
(14,	'If you boil a clown...',	'Do you get a laughing stock?',	45,	0),
(15,	'I had a dream that I was a muffler last night.',	'I woke up exhausted!',	54,	0),
(16,	'How many lips does a flower have?',	'Tulips',	8,	0),
(17,	'Where do programmers like to hangout?',	'The Foo Bar.',	17,	0),
(18,	'How does a train eat?',	'It goes chew, chew',	6,	0),
(19,	'If you see a robbery at an Apple Store...',	'Does that make you an iWitness?',	42,	0),
(20,	'Finally realized why my plant sits around doing nothing all day...',	'He loves his pot.',	46,	0),
(21,	'What do you call a factory that sells passable products?',	'A satisfactory',	50,	0),
(22,	'What does C.S. Lewis keep at the back of his wardrobe?',	'Narnia business!',	22,	0),
(23,	'What do you call a singing Laptop',	'A Dell',	7,	0),
(24,	'What did the fish say when it hit the wall?',	'Damn.',	1,	0),
(25,	'What do you call a laughing motorcycle?',	'A Yamahahahaha.',	20,	0),
(26,	'What did the duck say when he bought lipstick?',	'Put it on my bill',	30,	0),
(27,	'How do you make holy water?',	'You boil the hell out of it',	53,	0),
(28,	'Why did the mushroom get invited to the party?',	'Because he was a fungi.',	36,	0),
(29,	'Why did the mushroom get invited to the party?',	'Because he was a fungi.',	37,	0);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2018-09-13 08:02:47
