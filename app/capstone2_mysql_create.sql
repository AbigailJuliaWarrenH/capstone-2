CREATE TABLE `roles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`username` varchar(255) NOT NULL UNIQUE,
	`password` varchar(255) NOT NULL,
	`role_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `user_details` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL UNIQUE,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL,
	`contact_number` varchar(255) NOT NULL,
	`user_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categorys` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `items` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`description` TEXT NOT NULL,
	`price` DECIMAL(13,2) NOT NULL,
	`image` varchar(255) NOT NULL,
	`category_id` INT,
	PRIMARY KEY (`id`)
);

CREATE TABLE `statuss` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `orders` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`transaction_code` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL,
	`contact_number` varchar(255) NOT NULL,
	`date_created` TIMESTAMP NOT NULL,
	`user_id` INT,
	`status_id` INT NOT NULL,
	`payment_method_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `payment_methods` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE `order_details` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`item_id` INT NOT NULL,
	`quantity` INT NOT NULL,
	`order_id` INT NOT NULL,
	PRIMARY KEY (`id`)
);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`)
	ON DELETE RESTRICT
	ON UPDATE CASCADE;

ALTER TABLE `user_details` ADD CONSTRAINT `user_details_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
	ON DELETE CASCADE
	ON UPDATE CASCADE;

ALTER TABLE `items` ADD CONSTRAINT `items_fk0` FOREIGN KEY (`category_id`) REFERENCES `categorys`(`id`)
	ON DELETE SET NULL
	ON UPDATE CASCADE;

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk0` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`)
	ON DELETE SET NULL
	ON UPDATE CASCADE;

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk1` FOREIGN KEY (`status_id`) REFERENCES `statuss`(`id`)
	ON DELETE RESTRICT
	ON UPDATE CASCADE;

ALTER TABLE `orders` ADD CONSTRAINT `orders_fk2` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods`(`id`)
	ON DELETE RESTRICT
	ON UPDATE CASCADE;

ALTER TABLE `order_details` ADD CONSTRAINT `order_details_fk0` FOREIGN KEY (`item_id`) REFERENCES `items`(`id`)
	ON DELETE RESTRICT
	ON UPDATE CASCADE;

ALTER TABLE `order_details` ADD CONSTRAINT `order_details_fk1` FOREIGN KEY (`order_id`) REFERENCES `orders`(`id`)
	ON DELETE CASCADE
	ON UPDATE CASCADE;

