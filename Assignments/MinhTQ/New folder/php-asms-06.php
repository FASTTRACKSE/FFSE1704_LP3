câu 3: INSERT INTO sinhvien(name,age,class,gender) VALUES('Hồ Công Lịnh',19,'FFSE1701','Nam'), ('Trần Thu Hà',19,'FFSE1701','Nữ'), ('Trần Thị Tuyết Nhung',19,'FFSE1701','Nữ'), ('Trần Nguyên Nam',19,'FFse1701','Nam'), ('Mai Tuyết Loan',18,'FFSE1702','Nữ'), ('Trương Đại Nghĩa',20,'FFSE1702','Nam'), ('Phạm Quang Nhân',21,'FFSE1702','Nam'), ('Bùi Ngọc Quỳnh Nhi',20,'FFSE1703','Nữ'), ('Nguyễn Minh Huy',22,'FFSE1704','Nam')
câu 4 :   SELECT * FROM `sinhvien` WHERE `gender`= 'Nữ' AND `age` > '19' ;
câu 5 : SELECT * FROM `sinhvien` WHERE name LIKE   N'% Nam';
câu 6 : SELECT COUNT(*) FROM sinhvien WHERE class="FFSE1701"
câu 7: DELETE FROM sinhvien WHERE age  < 18;
câu 8 : UPDATE sinhvien SET class='FFSE1701' WHERE id= 4;
