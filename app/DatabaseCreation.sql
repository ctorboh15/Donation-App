CREATE DATABASE Donation

USE Donations;

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

