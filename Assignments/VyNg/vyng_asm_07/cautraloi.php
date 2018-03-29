câu 3
SELECT lms_students.code, lms_students.first_name, lms_countries.name AS country, table_datnuoc.name AS nationality
FROM lms_students
INNER JOIN lms_countries
ON lms_students.country = lms_countries.id
INNER JOIN lms_countries AS table_datnuoc
ON lms_students.nationality = table_datnuoc.id

câu 4
SELECT lms_students.code, lms_students.first_name, lms_countries.name AS quoc_tich, table_quocgia.name AS Ðat_Nuoc, lms_vietnam.name AS province
FROM lms_students
INNER JOIN lms_countries
ON lms_students.country=lms_countries.id
INNER JOIN lms_countries AS table_quocgia
ON lms_students.nationality=table_quocgia.id
INNER JOIN lms_vietnam
ON lms_students.province=lms_vietnam.id
WHERE lms_vietnam.id !=56

câu 5
SELECT lms_students.code, lms_students.first_name, lms_countries.name AS country, table_quocgia.name AS nationality,lms_vietnam.name AS province
FROM lms_students
INNER JOIN lms_countries
ON lms_students.country = lms_countries.id
INNER JOIN lms_countries AS table_quocgia
ON lms_students.nationality = table_quocgia.id
INNER JOIN lms_vietnam
ON lms_students.province=lms_vietnam.id
ORDER BY lms_students.code DESC 
