USE Donation;

DELIMITER $$
DROP PROCEDURE IF EXISTS `sp_findAnnouncement` $$

CREATE PROCEDURE `sp_findAnnouncement` (IN ID INT)
BEGIN
	SELECT * FROM Announcements WHERE AnnouncementID = ID;
END
