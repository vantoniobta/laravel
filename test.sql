SELECT * FROM postulates WHERE workId='1'




SELECT U.name, u.lastname, u.email, u.cv , p.userId,p.workId FROM users u , postulates p WHERE u.id=p.userId
AND p.workId='4'


SELECT COUNT(*) FROM postulates WHERE workId=4
