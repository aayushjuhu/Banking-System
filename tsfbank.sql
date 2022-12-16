CREATE TABLE `tsfbank`.`customers` (`Name` VARCHAR(40) NOT NULL , `Account_No` INT(10) NOT NULL,`Email` VARCHAR(40) NOT NULL , `Phone_No` INT(10) NOT NULL , `Balance`(10) INT NOT NULL ) ENGINE = InnoDB;


INSERT INTO `customers` (`Name`,'Email', `Account_No`, `Phone_No`, `Balance`) VALUES ('Aayush Juhukar','aj@gmail.com', '1026', '988743209', '8025'), ('Yukta Wagh','yw@gmail.com', '2563', '981254730', '4500'), ('Drishti Agrawal','da@gmail.com', '8549', '981254732', '10255'), ('Rahul Deshpande', '1257', '981254737', '8546'), ('Robert Dias', '9631', '981254754', '22100'), ('Siddhesh Utekar', '7125', '981274737', '3014'), ('Naman Jaiswal', '1081', '981254710', '8514'), ('Timura Ojha', '5012', '881254737', '10255'), ('Rhea Chettiar', '9014', '481254737', '8000'), ('Ronak Lopes', '2156', '581254737', '10254');

ALTER TABLE `customers` CHANGE `Srno` `Srno` INT(11) NOT NULL AUTO_INCREMENT;
CREATE TABLE `tsfbank`.`transfers` (`Srno` INT NOT NULL AUTO_INCREMENT , `Sender` INT NOT NULL , `Receiver` INT NOT NULL , `Amount` INT NOT NULL , `Transfer_status` VARCHAR(10) NOT NULL , PRIMARY KEY (`Srno`)) ENGINE = InnoDB;