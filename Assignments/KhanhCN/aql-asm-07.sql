câu 3 : SELECT lms_students.code , 
first_name , nationality, name 
FROM lms_students
 INNER JOIN lms_countries
  ON lms_students.country = lms_countries.id
  
câu 4 : SELECT lms_students.code ,
 first_name , nationality, name 
 FROM lms_students 
 INNER JOIN lms_countries 
 ON lms_students.country = lms_countries.id 
 WHERE province <> 56

câu 5 : SELECT lms_students.code ,
lms_students.first_name ,
lms_vietnam.name AS Province,
lms_countries.name AS Country  ,
lms_datnuoc.name AS Nationality
FROM lms_students 
INNER JOIN lms_countries 
ON lms_students.country=lms_countries.id
INNER JOIN lms_countries AS lms_datnuoc 
ON lms_students.nationality=lms_datnuoc.id
INNER JOIN lms_vietnam 
ON lms_vietnam.id = lms_students.province
ORDER BY lms_students.code DESC LIMIT 5