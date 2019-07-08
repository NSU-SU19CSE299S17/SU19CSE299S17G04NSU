CREATE TABLE `members`
(
  `id` int PRIMARY KEY,
  `nsu_id` int UNIQUE,
  `depertment_name` varchar(255),
  `barch` int,
  `full_name` varchar(255),
  `email` varchar(255) UNIQUE,
  `mobile_number` varchar(255) UNIQUE,
  `gender` varchar(255) COMMENT 'Only ''male'',''female'',''any''',
  `date_of_birth` date,
  `club_name` varchar(255),
  `facebook_id` varchar(255),
  `twtter_id` varchar(255),
  `whatsup_id` varchar(255)
);

CREATE TABLE `events`
(
  `event_id` int PRIMARY KEY,
  `ev_title` varchar(255) NOT NULL,
  `ev_description` varchar(255) NOT NULL,
  `ev_photo` varchar(255),
  `ev_publish_date` date,
  `ve_date` date
);

CREATE TABLE `clubs`
(
  `club_id` int PRIMARY KEY,
  `club_name` varchar(255) NOT NULL,
  `club_member_Position` int,
  `club_event` int,
  `club_about` int,
  `club_awards` int
);

CREATE TABLE `members_Positions`
(
  `members_Position_id` int PRIMARY KEY,
  `club_president` varchar(255),
  `club_vixe_precident` int,
  `club_genera_secretary` int,
  `club_eb` int,
  `club_treasurer` int,
  `club_sub_exicutive` int,
  `club_in_charge` int,
  `club_member` varchar(255)
);

CREATE TABLE `eb`
(
  `eb_id` int PRIMARY KEY,
  `nsu_id` int,
  `club_name` varchar(255),
  `joining_date` date
);

CREATE TABLE `presidents`
(
  `president_id` int PRIMARY KEY,
  `nsu_id` int,
  `club_name` varchar(255) UNIQUE,
  `joining_date` date
);

CREATE TABLE `vice_presidents`
(
  `vice_president_id` int PRIMARY KEY,
  `nsu_id` int,
  `club_name` varchar(255) UNIQUE,
  `joining_date` date
);

CREATE TABLE `general_secretarys`
(
  `general_secretary_id` int PRIMARY KEY,
  `nsu_id` int,
  `club_name` varchar(255) UNIQUE,
  `joining_date` date
);

CREATE TABLE `treasurers`
(
  `treasurer_id` int PRIMARY KEY,
  `nsu_id` int,
  `club_name` varchar(255),
  `joining_date` date
);

CREATE TABLE `Sub_executives`
(
  `Sub_executive_id` int PRIMARY KEY,
  `nsu_id` int,
  `club_name` varchar(255),
  `joining_date` date
);

CREATE TABLE `in_charges`
(
  `in_charge_id` int PRIMARY KEY,
  `nsu_id` int,
  `club_name` varchar(255),
  `joining_date` date
);

CREATE TABLE `club_members`
(
  `club_member_id` int PRIMARY KEY,
  `nsu_id` int,
  `club_name` varchar(255),
  `joining_date` date
);

CREATE TABLE `abouts`
(
  `about_id` int PRIMARY KEY,
  `about_title` varchar(255),
  `about_description` varchar(255)
);

CREATE TABLE `awards`
(
  `award_id` int PRIMARY KEY,
  `award_title` varchar(255),
  `award_description` varchar(255),
  `award_photo` varchar(255)
);

CREATE TABLE `user_messages`
(
  `user_message_id` int PRIMARY KEY,
  `user_message_name` varchar(255),
  `user_message_email` varchar(255),
  `user_message_description` varchar(255)
);

CREATE TABLE `joining_request`
(
  `joining_request_id` int PRIMARY KEY,
  `id` int,
  `questions` varchar(255),
  `result` int,
  `joining_request_date` date
);

CREATE TABLE `joining_quistions`
(
  `joining_quistion_id` int PRIMARY KEY,
  `questions_no` int,
  `ans_01` varchar(255),
  `ans_02` varchar(255),
  `ans_03` varchar(255),
  `ans_04` varchar(255),
  `ans_05` varchar(255)
);

CREATE TABLE `Login`
(
  `login_id` int PRIMARY KEY,
  `login_pass` varchar(255),
  `login_name` varchar(255)
);

CREATE TABLE `SignUp`
(
  `signup_id` int PRIMARY KEY,
  `SignUp_name` varchar;,
  `nsu_id` int UNIQUE,
  `depertment_name` varchar(255),
  `barch` int,
  `full_name` varchar(255),
  `email` varchar(255) UNIQUE,
  `mobile_number` varchar(255) UNIQUE,
  `gender` varchar(255) COMMENT 'Only ''male'',''female'',''any''',
  `date_of_birth` date,
  `club_name` varchar(255),
  `facebook_id` varchar(255),
  `twtter_id` varchar(255),
  `whatsup_id` varchar(255)
);

CREATE TABLE `login_cha`
(
  `login_id` int PRIMARY KEY,
  `login_pass` varchar(255),
  `login_name` varchar(255)
);

ALTER TABLE `clubs` ADD FOREIGN KEY (`club_member_Position`) REFERENCES `members_Positions` (`members_Position_id`);

ALTER TABLE `clubs` ADD FOREIGN KEY (`club_event`) REFERENCES `events` (`event_id`);

ALTER TABLE `clubs` ADD FOREIGN KEY (`club_about`) REFERENCES `abouts` (`about_id`);

ALTER TABLE `clubs` ADD FOREIGN KEY (`club_awards`) REFERENCES `awards` (`award_id`);

ALTER TABLE `members_Positions` ADD FOREIGN KEY (`club_president`) REFERENCES `presidents` (`president_id`);

ALTER TABLE `members_Positions` ADD FOREIGN KEY (`club_vixe_precident`) REFERENCES `vice_presidents` (`vice_president_id`);

ALTER TABLE `members_Positions` ADD FOREIGN KEY (`club_genera_secretary`) REFERENCES `general_secretarys` (`general_secretary_id`);

ALTER TABLE `members_Positions` ADD FOREIGN KEY (`club_eb`) REFERENCES `eb` (`eb_id`);

ALTER TABLE `members_Positions` ADD FOREIGN KEY (`club_treasurer`) REFERENCES `treasurers` (`treasurer_id`);

ALTER TABLE `members_Positions` ADD FOREIGN KEY (`club_sub_exicutive`) REFERENCES `Sub_executives` (`Sub_executive_id`);

ALTER TABLE `members_Positions` ADD FOREIGN KEY (`club_in_charge`) REFERENCES `in_charges` (`in_charge_id`);

ALTER TABLE `members_Positions` ADD FOREIGN KEY (`club_member`) REFERENCES `club_members` (`club_member_id`);

ALTER TABLE `eb` ADD FOREIGN KEY (`nsu_id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `presidents` ADD FOREIGN KEY (`nsu_id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `vice_presidents` ADD FOREIGN KEY (`nsu_id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `general_secretarys` ADD FOREIGN KEY (`nsu_id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `treasurers` ADD FOREIGN KEY (`nsu_id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `Sub_executives` ADD FOREIGN KEY (`nsu_id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `in_charges` ADD FOREIGN KEY (`nsu_id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `club_members` ADD FOREIGN KEY (`nsu_id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `user_messages` ADD FOREIGN KEY (`user_message_email`) REFERENCES `members` (`email`);

ALTER TABLE `joining_request` ADD FOREIGN KEY (`id`) REFERENCES `members` (`nsu_id`);

ALTER TABLE `joining_request` ADD FOREIGN KEY (`questions`) REFERENCES `joining_quistions` (`joining_quistion_id`);

