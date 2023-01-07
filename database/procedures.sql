    
DELIMITER $$
CREATE PROCEDURE media_feed()
BEGIN
  SELECT AVG(grade) FROM feedback;

END $$
DELIMITER ;

-- Procedure OK