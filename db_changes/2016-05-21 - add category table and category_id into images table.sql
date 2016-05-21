ALTER TABLE `images` ADD `categories_id` INT(11) NOT NULL AFTER `id`;
ALTER TABLE `images` ADD INDEX(`categories_id`);

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `categories`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

TRUNCATE images

ALTER TABLE `images` ADD  CONSTRAINT `fk_images_category` FOREIGN KEY (`categories_id`) REFERENCES `meetings`.`categories`(`id`) ON DELETE CASCADE ON UPDATE CASCADE;
