-- This should create the first version of our database

DROP SCHEMA IF EXISTS `ischool_rooms` ;
CREATE DATABASE ischool_rooms CHARSET utf8;
USE ischool_rooms;

CREATE TABLE IF NOT EXISTS `ischool_rooms`.`buildings` (
  `building_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `total_ischool_rooms` INT(11) NULL DEFAULT NULL,
  `building_map_num` INT(11) NOT NULL,
  PRIMARY KEY (`building_id`),
  UNIQUE INDEX `building_map_num_UNIQUE` (`building_map_num` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;

CREATE TABLE IF NOT EXISTS `ischool_rooms`.`rooms` (
  `room_id` INT(11) NOT NULL AUTO_INCREMENT,
  `room_number` VARCHAR(6) NOT NULL,
  `sq_footage` INT(11) NULL DEFAULT NULL,
  `has_windows` TINYINT(1) NULL DEFAULT NULL,
  `occupied` TINYINT(1) NULL DEFAULT NULL,
  `building_map_num` INT(11) NOT NULL,
  `has_lock` TINYINT(1) NULL DEFAULT NULL,
  `has_carpet` TINYINT(1) NULL DEFAULT NULL,
  `floor_level` INT(11) NULL DEFAULT NULL COMMENT 'Ground floor is \"1\", second level is 2, etc. Basements and sub-levels are -1, -2, etc. ',
  PRIMARY KEY (`room_id`),
  UNIQUE INDEX `room_number_UNIQUE` (`room_number` ASC),
  INDEX `building_map_num_idx` (`building_map_num` ASC),
  CONSTRAINT `building_map_num`
    FOREIGN KEY (`building_map_num`)
    REFERENCES `ischool_rooms`.`buildings` (`building_map_num`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1105
DEFAULT CHARACTER SET = latin1;

-- end database creation

-- inputting data
SELECT * FROM ischool_rooms.buildings;
INSERT INTO buildings (name, total_ischool_rooms, building_map_num)
VALUES ('Patuxent', '84', '10');

INSERT INTO buildings (name, total_ischool_rooms, building_map_num)
VALUES ('Hornbake', '202', '0');

INSERT INTO rooms (room_number, sq_footage, has_windows, occupied, building_map_num, has_lock, has_carpet, floor_level)
VALUES ('1101', '22', '1','0','10','0','1','1');

INSERT INTO rooms (room_number, sq_footage, has_windows, occupied, building_map_num, has_lock, has_carpet, floor_level)
VALUES ('1103', '89', '1', '1', '10', '1', '0', '1');

SELECT * FROM ischool_rooms.buildings;
SELECT * FROM ischool_rooms.rooms;