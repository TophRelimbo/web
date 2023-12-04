SELECT info.firstname, info.lastname, info.middlename, info.address, info.contact_number, user2.username, user2.email      
FROM  info
INNER JOIN  user2        
ON info.user_id = user2.user_id        
