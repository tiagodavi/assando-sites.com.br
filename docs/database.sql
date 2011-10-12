SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


-- -----------------------------------------------------
-- Table `status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `status` ;

CREATE  TABLE IF NOT EXISTS `status` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `type` ENUM('Class', 'Student', 'Payment') NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `students`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `students` ;

CREATE  TABLE IF NOT EXISTS `students` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL ,
  `surname` VARCHAR(30) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `password` VARCHAR(40) BINARY NOT NULL ,
  `status_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NOT NULL ,
  `updated` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `UNIQUE_EMAIL` (`email` ASC) ,
  INDEX `FK_STUDENTS_STATUS1` (`status_id` ASC) ,
  CONSTRAINT `FK_STUDENTS_STATUS1`
    FOREIGN KEY (`status_id` )
    REFERENCES `status` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `classes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `classes` ;

CREATE  TABLE IF NOT EXISTS `classes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `code` VARCHAR(15) NOT NULL ,
  `title` VARCHAR(30) NOT NULL ,
  `description` TEXT NOT NULL ,
  `start` DATE NOT NULL ,
  `end` DATE NOT NULL ,
  `price` DECIMAL(6,2) NOT NULL ,
  `status_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NOT NULL ,
  `updated` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `UNIQUE_CODE` (`code` ASC) ,
  INDEX `FK_CLASSES_STATUS1` (`status_id` ASC) ,
  CONSTRAINT `FK_CLASSES_STATUS1`
    FOREIGN KEY (`status_id` )
    REFERENCES `status` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lessons`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lessons` ;

CREATE  TABLE IF NOT EXISTS `lessons` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `class_id` INT UNSIGNED NOT NULL ,
  `title` VARCHAR(30) NOT NULL ,
  `description` TEXT NOT NULL ,
  `datetime` DATETIME NOT NULL ,
  `length` INT(3) UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `FK_LESSONS_CLASSES` (`class_id` ASC) ,
  CONSTRAINT `FK_LESSONS_CLASSES`
    FOREIGN KEY (`class_id` )
    REFERENCES `classes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `payments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `payments` ;

CREATE  TABLE IF NOT EXISTS `payments` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `student_id` INT UNSIGNED NOT NULL ,
  `code` VARCHAR(40) BINARY NOT NULL ,
  `reference` VARCHAR(40) NOT NULL ,
  `value` DECIMAL(6,2) NOT NULL ,
  `datetime` DATETIME NOT NULL ,
  `status_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NOT NULL ,
  `updated` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `FK_PAYMENTS_STATUS1` (`status_id` ASC) ,
  INDEX `FK_PAYMENTS_STUDENTS1` (`student_id` ASC) ,
  UNIQUE INDEX `UNIQUE_CODE` (`code` ASC) ,
  CONSTRAINT `FK_PAYMENTS_STATUS1`
    FOREIGN KEY (`status_id` )
    REFERENCES `status` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_PAYMENTS_STUDENTS1`
    FOREIGN KEY (`student_id` )
    REFERENCES `students` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `classes_students`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `classes_students` ;

CREATE  TABLE IF NOT EXISTS `classes_students` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `student_id` INT UNSIGNED NOT NULL ,
  `classes_id` INT UNSIGNED NOT NULL ,
  `status_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `FK_CLASSES_STUDENTS_STUDENTS1` (`student_id` ASC) ,
  INDEX `FK_CLASSES_STUDENTS_CLASSES1` (`classes_id` ASC) ,
  INDEX `FK_CLASSES_STUDENTS_STATUS1` (`status_id` ASC) ,
  CONSTRAINT `FK_CLASSES_STUDENTS_STUDENTS1`
    FOREIGN KEY (`student_id` )
    REFERENCES `students` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_CLASSES_STUDENTS_CLASSES1`
    FOREIGN KEY (`classes_id` )
    REFERENCES `classes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_CLASSES_STUDENTS_STATUS1`
    FOREIGN KEY (`status_id` )
    REFERENCES `status` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `files`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `files` ;

CREATE  TABLE IF NOT EXISTS `files` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `class_id` INT UNSIGNED NOT NULL ,
  `title` VARCHAR(50) NOT NULL ,
  `mimetype` VARCHAR(15) NOT NULL ,
  `size` INT(11) UNSIGNED NOT NULL ,
  `location` VARCHAR(150) NOT NULL ,
  `status_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NOT NULL ,
  `updated` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `FK_FILES_CLASSES1` (`class_id` ASC) ,
  INDEX `FK_FILES_STATUS1` (`status_id` ASC) ,
  CONSTRAINT `FK_FILES_CLASSES1`
    FOREIGN KEY (`class_id` )
    REFERENCES `classes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_FILES_STATUS1`
    FOREIGN KEY (`status_id` )
    REFERENCES `status` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `information`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `information` ;

CREATE  TABLE IF NOT EXISTS `information` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `student_id` INT UNSIGNED NOT NULL ,
  `cpf` VARCHAR(15) NOT NULL ,
  `twitter` VARCHAR(25) NOT NULL ,
  `phone` VARCHAR(15) NOT NULL ,
  `city` VARCHAR(20) NOT NULL ,
  `state` CHAR(2) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `FK_INFORMATION_STUDENTS1` (`student_id` ASC) ,
  CONSTRAINT `FK_INFORMATION_STUDENTS1`
    FOREIGN KEY (`student_id` )
    REFERENCES `students` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lessons_students`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lessons_students` ;

CREATE  TABLE IF NOT EXISTS `lessons_students` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `student_id` INT UNSIGNED NOT NULL ,
  `lesson_id` INT UNSIGNED NOT NULL ,
  `length` INT(3) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `FK_TABLE1_STUDENTS1` (`student_id` ASC) ,
  INDEX `FK_TABLE1_LESSONS1` (`lesson_id` ASC) ,
  CONSTRAINT `FK_TABLE1_STUDENTS1`
    FOREIGN KEY (`student_id` )
    REFERENCES `students` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_TABLE1_LESSONS1`
    FOREIGN KEY (`lesson_id` )
    REFERENCES `lessons` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `emails`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `emails` ;

CREATE  TABLE IF NOT EXISTS `emails` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `to` TEXT NOT NULL ,
  `cc` TEXT NOT NULL ,
  `bbc` TEXT NOT NULL ,
  `from` VARCHAR(100) NOT NULL ,
  `replyto` VARCHAR(100) NOT NULL ,
  `subject` VARCHAR(150) NOT NULL ,
  `html` TEXT NOT NULL ,
  `plain` TEXT NOT NULL ,
  `send` DATETIME NOT NULL ,
  `sent` TINYINT(1)  NOT NULL DEFAULT 0 ,
  `created` DATETIME NOT NULL ,
  `updated` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users` ;

CREATE  TABLE IF NOT EXISTS `users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(20) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  `password` VARCHAR(40) BINARY NOT NULL ,
  `status_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NOT NULL ,
  `updated` DATETIME NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `FK_USERS_STATUS1` (`status_id` ASC) ,
  UNIQUE INDEX `UNIQUE_EMAIL` (`email` ASC) ,
  CONSTRAINT `FK_USERS_STATUS1`
    FOREIGN KEY (`status_id` )
    REFERENCES `status` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
