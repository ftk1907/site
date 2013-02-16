CREATE FUNCTION user_exists (
	un varchar(200),
	pw varchar(500)
) RETURNS INT

BEGIN
	DECLARE exists INT DEFAULT 0;

	SELECT COUNT(*) INTO exists 
	FROM USER 
	WHERE USERNAME = un AND PASSWORD = pw;
	RETURN exists;
END;