CREATE TABLE IF NOT EXISTS `#__helloworld` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`url` varchar(250) NOT NULL,
	`merchant_id` varchar(250) NOT NULL,
    `merchant_key` varchar(250) NOT NULL,
    
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `#__helloworld` (`url`, `merchant_id`, `merchant_key` ) VALUES ('https://sandbox.payfast.co.za​/eng/process', '10000100', '46f0cd694581a');
