-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-12-11 19:37:30.674

-- tables
-- Table: chuong
CREATE TABLE chuong (
    id int NOT NULL AUTO_INCREMENT,
    ten text NOT NULL,
    noidung text NOT NULL,
    ngaytao date NOT NULL,
    truyen_id int NOT NULL,
    CONSTRAINT chuong_pk PRIMARY KEY (id)
);

-- Table: nguoidung
CREATE TABLE nguoidung (
    id int NOT NULL AUTO_INCREMENT,
    hoten varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    matkhau text NOT NULL,
    quyen varchar(100) NOT NULL,
    CONSTRAINT nguoidung_pk PRIMARY KEY (id)
);

-- Table: truyen
CREATE TABLE truyen (
    id int NOT NULL AUTO_INCREMENT,
    url_anh text NOT NULL,
    ten varchar(100) NOT NULL,
    mota text NOT NULL,
    ngaytao date NOT NULL,
    ngaysua date NOT NULL,
    trangthai int NOT NULL,
    tentacgia varchar(50) NOT NULL,
    CONSTRAINT Id PRIMARY KEY (id)
);

-- Table: tuongtac
CREATE TABLE tuongtac (
    id int NOT NULL AUTO_INCREMENT,
    luotxem int NOT NULL,
    truyen_id int NOT NULL,
    nguoidung_id int NOT NULL,
    CONSTRAINT tuongtac_pk PRIMARY KEY (id)
);

-- foreign keys
-- Reference: chuong_truyen (table: chuong)
ALTER TABLE chuong ADD CONSTRAINT chuong_truyen FOREIGN KEY chuong_truyen (truyen_id)
    REFERENCES truyen (id);

-- Reference: tuongtac_nguoidung (table: tuongtac)
ALTER TABLE tuongtac ADD CONSTRAINT tuongtac_nguoidung FOREIGN KEY tuongtac_nguoidung (nguoidung_id)
    REFERENCES nguoidung (id);

-- Reference: tuongtac_truyen (table: tuongtac)
ALTER TABLE tuongtac ADD CONSTRAINT tuongtac_truyen FOREIGN KEY tuongtac_truyen (truyen_id)
    REFERENCES truyen (id);

-- add account Admin

INSERT INTO `nguoidung` (`id`, `hoten`, `email`, `matkhau`, `quyen`) VALUES (NULL, 'admin', 'admin@info.sg', '123123', 'admin');
    

-- End of file.

