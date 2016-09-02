# SQL

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2016 at 12:05 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `data_findphonefixer`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `flag_all` tinyint(1) NOT NULL DEFAULT '0',
  `flag_bar` tinyint(1) NOT NULL DEFAULT '0',
  `flag_restaurant` tinyint(1) NOT NULL DEFAULT '0',
  `flag_hotel` tinyint(1) NOT NULL DEFAULT '0',
  `flag_store` tinyint(1) NOT NULL DEFAULT '0',
  `flag_mall` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `amenities`
--

TRUNCATE TABLE `amenities`;
--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `title`, `flag_all`, `flag_bar`, `flag_restaurant`, `flag_hotel`, `flag_store`, `flag_mall`, `created`, `modified`) VALUES
(1, 'patio', 0, 1, 1, 0, 0, 0, '2016-08-01 00:58:38', '2016-08-01 00:58:38'),
(2, 'WiFi', 1, 0, 0, 0, 0, 0, '2016-08-01 00:58:49', '2016-08-01 00:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `amenities_venues`
--

CREATE TABLE `amenities_venues` (
  `venue_id` int(11) NOT NULL,
  `amenity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `amenities_venues`
--

TRUNCATE TABLE `amenities_venues`;
-- --------------------------------------------------------

--
-- Table structure for table `cake_d_c_users_phinxlog`
--

CREATE TABLE `cake_d_c_users_phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `cake_d_c_users_phinxlog`
--

TRUNCATE TABLE `cake_d_c_users_phinxlog`;
--
-- Dumping data for table `cake_d_c_users_phinxlog`
--

INSERT INTO `cake_d_c_users_phinxlog` (`version`, `migration_name`, `start_time`, `end_time`) VALUES
(20150513201111, 'Initial', '2016-07-30 08:36:17', '2016-07-30 08:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `google_locality` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `geo_cords` point NOT NULL,
  `province_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `cities`
--

TRUNCATE TABLE `cities`;
-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `google_administrative_area_level_1` varchar(255) NOT NULL,
  `google_country` varchar(255) NOT NULL,
  `country_desc` text NOT NULL,
  `country_seo_title` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `countries`
--

TRUNCATE TABLE `countries`;
-- --------------------------------------------------------

--
-- Table structure for table `cuisines`
--

CREATE TABLE `cuisines` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `flag_all` tinyint(1) NOT NULL DEFAULT '0',
  `flag_bar` tinyint(1) NOT NULL DEFAULT '0',
  `flag_restaurant` tinyint(1) NOT NULL DEFAULT '0',
  `flag_hotel` tinyint(1) NOT NULL DEFAULT '0',
  `flag_store` tinyint(1) NOT NULL DEFAULT '0',
  `flag_mall` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `cuisines`
--

TRUNCATE TABLE `cuisines`;
-- --------------------------------------------------------

--
-- Table structure for table `cuisines_venues`
--

CREATE TABLE `cuisines_venues` (
  `venue_id` int(11) NOT NULL,
  `cuisine_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `cuisines_venues`
--

TRUNCATE TABLE `cuisines_venues`;
-- --------------------------------------------------------

--
-- Table structure for table `establishment_types`
--

CREATE TABLE `establishment_types` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `establishment_types`
--

TRUNCATE TABLE `establishment_types`;
-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `flag_all` tinyint(1) NOT NULL DEFAULT '0',
  `flag_bar` tinyint(1) NOT NULL DEFAULT '0',
  `flag_restaurant` tinyint(1) NOT NULL DEFAULT '0',
  `flag_hotel` tinyint(1) NOT NULL DEFAULT '0',
  `flag_store` tinyint(1) NOT NULL DEFAULT '0',
  `flag_mall` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `features`
--

TRUNCATE TABLE `features`;
-- --------------------------------------------------------

--
-- Table structure for table `features_venues`
--

CREATE TABLE `features_venues` (
  `venue_id` int(11) NOT NULL,
  `feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `features_venues`
--

TRUNCATE TABLE `features_venues`;
-- --------------------------------------------------------

--
-- Table structure for table `geom`
--

CREATE TABLE `geom` (
  `pt` point DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `geom`
--

TRUNCATE TABLE `geom`;
--
-- Dumping data for table `geom`
--


-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `meta_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `images`
--

TRUNCATE TABLE `images`;
-- --------------------------------------------------------

--
-- Table structure for table `neighbourhoods`
--

CREATE TABLE `neighbourhoods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `google_administrative_area_level_1` varchar(255) NOT NULL,
  `google_administrative_area_level_2` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `neighbourhoods`
--

TRUNCATE TABLE `neighbourhoods`;
-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `page_url` varchar(255) NOT NULL,
  `google_administrative_area_level_1` varchar(255) NOT NULL,
  `google_administrative_area_level_2` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `seo_title` varchar(255) NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `provinces`
--

TRUNCATE TABLE `provinces`;
-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` char(36) NOT NULL,
  `user_id` char(36) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `reference` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `description` text,
  `link` varchar(255) NOT NULL,
  `token` varchar(500) NOT NULL,
  `token_secret` varchar(500) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `data` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `social_accounts`
--

TRUNCATE TABLE `social_accounts`;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `token_expires` datetime DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `activation_date` datetime DEFAULT NULL,
  `tos_date` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0',
  `role` varchar(255) DEFAULT 'user',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `token`, `token_expires`, `api_token`, `activation_date`, `tos_date`, `active`, `is_superuser`, `role`, `created`, `modified`) VALUES
('80780e85-088c-4c61-8a51-7c39174cbfc1', 'zhunt', 'zhunt@yyztech.ca', '$2y$10$9rFNhbWyttRGqCza83n7ee7zbbsP6KP8n/mlflmI0WtdUEPq.HRNi', 'Zoltan', 'Hunt', 'c89d5b67e16745f2a568183d4c244d9f', '2016-07-30 05:41:59', NULL, NULL, '2016-07-30 04:41:59', 1, 0, 'user', '2016-07-30 04:41:59', '2016-07-30 04:41:59'),
('8cd61628-4972-4167-b6f3-a6f1b5428fca', 'superadmin', 'superadmin@example.com', '$2y$10$MeAJbNstEkt48e5ihifeH.xhWs/YitxnwEtXJiJuACesH5mDuQ9JK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'superuser', '2016-07-30 04:38:59', '2016-07-30 04:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) NOT NULL,
  `description` text,
  `province_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `geo_cords` point NOT NULL,
  `neighbourhood_id` int(10) UNSIGNED DEFAULT NULL,
  `establishment_type_id` smallint(5) UNSIGNED NOT NULL,
  `flag_mall` tinyint(1) NOT NULL DEFAULT '0',
  `flag_closed` tinyint(1) NOT NULL DEFAULT '0',
  `flag_published` tinyint(1) NOT NULL DEFAULT '0',
  `inside_venue_id` int(10) UNSIGNED DEFAULT NULL,
  `phone_1` varchar(255) DEFAULT NULL,
  `phone_2` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `hours_sun` varchar(255) DEFAULT NULL,
  `hours_mon` varchar(255) DEFAULT NULL,
  `hours_tue` varchar(255) DEFAULT NULL,
  `hours_wed` varchar(255) DEFAULT NULL,
  `hours_thu` varchar(255) DEFAULT NULL,
  `hours_fri` varchar(255) DEFAULT NULL,
  `hours_sat` varchar(255) DEFAULT NULL,
  `hours_holidays` varchar(255) DEFAULT NULL,
  `user_rating` float DEFAULT NULL,
  `user_votes` int(10) UNSIGNED DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `venues`
--

TRUNCATE TABLE `venues`;
--
-- Dumping data for table `venues`
--

;

-- --------------------------------------------------------

--
-- Table structure for table `venue_photos`
--

CREATE TABLE `venue_photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `meta_data` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `venue_photos`
--

TRUNCATE TABLE `venue_photos`;
-- --------------------------------------------------------

--
-- Table structure for table `venue_photos_venues`
--

CREATE TABLE `venue_photos_venues` (
  `venue_id` int(11) NOT NULL,
  `venue_photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `venue_photos_venues`
--

TRUNCATE TABLE `venue_photos_venues`;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `amenities_venues`
--
ALTER TABLE `amenities_venues`
  ADD PRIMARY KEY (`venue_id`,`amenity_id`);

--
-- Indexes for table `cake_d_c_users_phinxlog`
--
ALTER TABLE `cake_d_c_users_phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD SPATIAL KEY `geo_cords` (`geo_cords`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuisines`
--
ALTER TABLE `cuisines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `cuisines_venues`
--
ALTER TABLE `cuisines_venues`
  ADD PRIMARY KEY (`venue_id`,`cuisine_id`);

--
-- Indexes for table `establishment_types`
--
ALTER TABLE `establishment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `features_venues`
--
ALTER TABLE `features_venues`
  ADD PRIMARY KEY (`venue_id`,`feature_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `neighbourhoods`
--
ALTER TABLE `neighbourhoods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`),
  ADD SPATIAL KEY `geo_cords` (`geo_cords`);

--
-- Indexes for table `venue_photos`
--
ALTER TABLE `venue_photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `venue_photos_venues`
--
ALTER TABLE `venue_photos_venues`
  ADD PRIMARY KEY (`venue_id`,`venue_photo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cuisines`
--
ALTER TABLE `cuisines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `establishment_types`
--
ALTER TABLE `establishment_types`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `neighbourhoods`
--
ALTER TABLE `neighbourhoods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `venue_photos`
--
ALTER TABLE `venue_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
