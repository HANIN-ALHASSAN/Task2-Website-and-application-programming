
-- --------------------------------------------------------
-- قاعدة البيانات: `my_users`
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `my_users`;
USE `my_users`;

-- --------------------------------------------------------
-- جدول `users`
-- --------------------------------------------------------

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `age` INT NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- بيانات مبدئية
-- --------------------------------------------------------

INSERT INTO `users` (`name`, `age`, `status`) VALUES
('John', 25, 0),
('Sarah', 30, 1),
('Michael', 22, 0);
