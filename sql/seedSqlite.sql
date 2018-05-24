DROP TABLE IF EXISTS `Comment`;
CREATE TABLE `Comment` (
   id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
   email VARCHAR(120),
   text VARCHAR(120),
   userId INT NOT NULL,
   postedBy VARCHAR(120)
);

INSERT INTO `Comment` (`id`, `email`, `text`, `userId`, `postedBy`) VALUES
    (1, "admin@admin.com", "comment 1", 1, "user1"),
    (2, "admin@admin.com", "comment 2", 1, "user1"),
    (3, "admin2@admin.com", "comment 3", 2, "user2"),
    (4, "admin2@admin.com", "comment 4", 2, "user2");
