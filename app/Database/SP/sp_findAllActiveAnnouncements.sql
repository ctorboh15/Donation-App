USE Donation;

DELIMITER $$
DROP PROCEDURE IF EXISTS `sp_findAllActiveAnnouncements` $$

CREATE PROCEDURE `sp_findAllActiveAnnouncements` ()
BEGIN
	SELECT * FROM Announcements WHERE EndDT >= NOW();
END $$
