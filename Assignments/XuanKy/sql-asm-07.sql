1)SELECT lms_students.`code`,first_name,nationality,name 
FROM `lms_students` INNER JOIN lms_countries 
ON lms_students.country=lms_countries.id;
2)SELECT lms_students.`code`,first_name,nationality,name 
FROM `lms_students` INNER JOIN lms_countries 
ON lms_students.country=lms_countries.id WHERE province <>56;
3)SELECT lms_students.code,
first_name,
lms_vietnam.name AS Province,
quoctich.name AS Country,
lms_countries.name AS Nationality
FROM lms_students
INNER JOIN lms_vietnam ON lms_students.province=lms_vietnam.id 
INNER JOIN lms_countries AS quoctich ON lms_students.country=quoctich.id
INNER JOIN lms_countries ON lms_students.nationality=lms_countries.id
ORDER BY code DESC LIMIT 5