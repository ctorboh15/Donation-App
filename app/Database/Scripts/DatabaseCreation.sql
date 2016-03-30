CREATE DATABASE Donation;

USE Donation;

DROP TABLE IF EXISTS `AppUser`;
	CREATE TABLE  AppUser (
		AppUserID 		INT 				NOT NULL	AUTO_INCREMENT,
		UserName		NVARCHAR(15) 		NOT NULL,
		Password 		NVARCHAR(20) 		NOT NULL,
		ContactID		INT					NOT NULL,
		OrgID			INT,
		CrtDt			DATETIME			NOT NULL,
		ActiveInd		NVARCHAR(1),			
	PRIMARY KEY (AppUserID)
	);



DROP TABLE IF EXISTS `Organization`;
	CREATE TABLE  Organization(	
	OrgID			INT 				NOT NULL,
	OrgName			NVARCHAR(100)		NOT NULL,
	ContactID		INT					NOT NULL,
	CrtDt			DATETIME			NOT NULL,
	ActiveInd		NVARCHAR(1),
	PRIMARY KEY (OrgID)
	);


DROP TABLE IF EXISTS `Announcements`;
	CREATE TABLE  Announcements (
	AnnouncementID 		INT 				NOT NULL 		AUTO_INCREMENT,
	Title				VARCHAR(100)		NOT NULL,
	Body 	    		LONGTEXT,
	EndDT				DATETIME,
	OrgID				INT,
	ActiveIND			NVARCHAR(1),
	PRIMARY KEY (AnnouncementID)
	);

DROP TABLE IF EXISTS `Contact`;
	CREATE TABLE  Contact (
	ContactID	 		INT 				NOT NULL 		AUTO_INCREMENT,
	FirstName			VARCHAR(50)		NOT NULL,
	LastName 	    	VARCHAR(50)
	Address				VARCHAR(50),
	OrgID				INT,
	ActiveIND			NVARCHAR(1),
	PRIMARY KEY (AnnouncementID)
	);

INSERT INTO `Donation`.`AppUser` (`AppUserID`, `UserName`, `Password`, `ContactID`, `OrgID`, `CrtDt`, `ActiveInd`) VALUES (NULL, 'Ctorboh', 'Decadent19', '0', NULL, '2016-03-18 00:00:00', 'Y');