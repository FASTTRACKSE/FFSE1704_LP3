1) INSERT INTO sinhvien (Name,Age,Class,Gender) VALUES ('Hồ Công Lịnh',19,'FFSE1701','Nam'),
('Trần Thu Hà',19,'FFSE1701','Nữ'),('Trầ Thị Tuyết Nhung',19,'FFSE1701','Nữ'),
('Trần Nguyên Nam',19,'FFSE1701','Nam'),('Mai Tuyết Loan',18,'FFSE1702','Nam'),
('Trương Đại Nghĩa',20,'FFSE1702','Nam'),('Phạm Quang Nhân',21,'FFSE1702','Nam'),
('Bùi Ngọc Quỳnh Nhi',20,'FFSE1703','Nữ'),('Nguyên Minh Huy',22,'FFSE1704','Nam');
2) SELECT * FROM `sinhvien` WHERE Gender='Nữ' AND Age > 19 ;
3) SELECT * FROM `sinhvien` WHERE Name LIKE '%Nam' ;
4) SELECT COUNT(*) FROM sinhvien WHERE Class="FFSE1701";
5) DELETE FROM sinhvien WHERE Age < 18 ;
6)UPDATE sinhvien SET Name= REPLACE(Name, "Nam", "Trung") WHERE Name LIKE '%Nam';
7)SELECT * FROM `sinhvien` ORDER BY 'Age' DESC LIMIT 3