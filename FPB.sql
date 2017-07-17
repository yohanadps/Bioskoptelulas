create table FILM 
(
   KODE_FILM            char(5)                     not null,
   JUDUL_FILM           varchar(20)                    not null,
   DURASI               varchar(5)                     not null,
   KATEGORI             varchar(10)                    not null,
   RATING               integer                     not null,
   constraint PK_FILM primary key (KODE_FILM)
);
select KODE_FILM from film order by kode_film;
insert into FILM VALUES('A0001','THE HOBBIT: THE BATTLE OF THE FIVE ARMIES','144 M','Adventure',80);
ALTER TABLE FILM MODIFY(JUDUL_FILM VARCHAR(50));
insert into FILM VALUES('A0002','EXODUS: GODS AND KINGS','150 M','Adventure',70);
insert into FILM VALUES ('A0003','FROZEN: SING A LONG','108 M','Animation',80);
create table KOMENTAR 
(
   KOMENTAR             varchar(1000)                  not null,
   KODE_FILM            char(5)                         not null,
   constraint PK_KOMENTAR primary key (KOMENTAR),
   constraint FK_KODE_FILM FOREIGN KEY (KODE_FILM) REFERENCES FILM(KODE_FILM)
);

create table MEMBER 
(
   ID_MEMBER            varchar(5)                     not null,
   KOMENTAR             varchar(1000)                  not null,
   NAMA_MAMBER          varchar(20)                    not null,
   TGL_LAHIR            date                           not null,
   JENIS_KELAMIN        char(1)                        null,
   PEKERJAAN            varchar(20)                    null,
   constraint PK_MEMBER primary key (ID_MEMBER),
    constraint FK_KOMENTAR FOREIGN KEY (KOMENTAR) REFERENCES KOMENTAR(KOMENTAR)
);

alter table KOMENTAR add ID_MEMBER varchar(5);
alter table KOMENTAR add constraint IDMEMBER_2 foreign key (ID_MEMBER) references MEMBER(ID_MEMBER);


ALTER TABLE MEMBER MODIFY(KOMENTAR VARCHAR(50) null);
create table JADWAL 
(
   NO_JADWAL            char(3)                        not null,
   KODE_FILM            char(5)                        not null,
   HARI                 varchar(10)                    not null,
   TANGGAL              date                           not null,
   JAM                  char(5)                      not null,
   HARGA                integer                        not null,
   constraint PK_JADWAL primary key (NO_JADWAL),
   constraint FK_KODE_FILM2 FOREIGN KEY (KODE_FILM) REFERENCES FILM(KODE_FILM)
);

insert into JADWAL VALUES('001','A0001','SENIN','29-DEC-14','12:45',25000);

create table TRANSAKSI 
(
   NO_PEMBELIAN         char(3)                     not null,
   ID_MEMBER            varchar(5)                     not null,
   NO_JADWAL            char(3)                        not null,
   NO_KURSI             char(3)                        not null,
   TGL_PEMBELIAN        date                           not null,
   TOTAL_PEMBELIAN      integer                        not null,
   constraint PK_TRANSAKSI primary key (NO_PEMBELIAN),
   constraint ID_MEMBER FOREIGN KEY (ID_MEMBER) REFERENCES MEMBER (ID_MEMBER),
   constraint NO_JADWAL FOREIGN KEY (NO_JADWAL) REFERENCES JADWAL(NO_JADWAL)
);

create table BANGKU
(
  NO_KURSI              char(3)                       not null,
  URUTAN                integer                       not null,
  constraint PK_NO_KURSI primary key (NO_KURSI)
);

create table STATUS_BANGKU 
(
   NO_JADWAL           char(3)                       not null,
   NO_KURSI            char(3)                        not null,
   constraint FK_NO_JADWAL FOREIGN KEY (NO_JADWAL) REFERENCES JADWAL(NO_JADWAL),
   constraint FK_NO_KURSI FOREIGN KEY (NO_KURSI) REFERENCES BANGKU(NO_KURSI)
);

create table TEATER 
(
   TEATER               varchar(10)                    not null,
   NO_KURSI             char(3)                        not null,
   KAPASITAS            integer                        not null,
   constraint PK_TEATER primary key (TEATER),
   constraint FK_NO_KURSI2 FOREIGN KEY (NO_KURSI) REFERENCES BANGKU(NO_KURSI)
);

create table PETUGAS
(
    USERNAME          VARCHAR(4)                  not null,
    PASS              VARCHAR (4)                 not null,
    constraint PK_USERNAME PRIMARY KEY (USERNAME)
);

create table EVENT
(
  ID_EVENT CHAR (2) PRIMARY KEY,
  NAMA_EVENT VARCHAR (20),
  TANGGAL_MULAI DATE ,
  TANGGAL_AKHIR DATE ,
  BESAR_DISKON  INTEGER

);

ALTER TABLE TRANSAKSI ADD ID_EVENT CHAR(2);
ALTER TABLE TRANSAKSI ADD CONSTRAINT IDPROMO FOREIGN KEY (ID_EVENT)REFERENCES EVENT (ID_EVENT);

INSERT INTO PETUGAS VALUES ('UMUM','UMUM');


select * from member;

select * from EVENT 
    where TANGGAL_MULAI < to_date('14-DEC-15','DD-MON-YY') AND TANGGAL_AKHIR> to_date('14-DEC-15','DD-MON-YY');

update member set id_member =  set ;
alter table transaksi add HARGA_TIKET int;
alter table FILM add COVER varchar(200);

alter table FILM add HARGA_FILM integer;

select KODE_FILM,count(KODE_FILM)
from JADWAL
group by KODE_FILM;

create view LAPORAN_PENGELUARAN as 
select KODE_FILM,count(KODE_FILM) as JUMLAH_TAYANG
from JADWAL
group by KODE_FILM;

--create view LAPORAN_PEMASUKAN as

SELECT EXTRACT (month from T.TGL_PEMBELIAN) as BULAN,EXTRACT (year from T.TGL_PEMBELIAN) as Tahun,J.HARGA,count(*) as jumlah
from TRANSAKSI T,JADWAL J
where T.NO_JADWAL = J.NO_JADWAL
group by EXTRACT (month from TGL_PEMBELIAN),EXTRACT (year from T.TGL_PEMBELIAN),J.HARGA;

alter table BANGKU add STATUS varchar(20);

--create view STATUS_BOOKED as

update (
select J.NO_JADWAL,B.NO_KURSI,B.STATUS
from JADWAL J,BANGKU B
order by J.NO_JADWAL;
) set B.STATUS = 'BOOKED';

update STATUS_BOOKED set STATUS='BOOKED' where NO_JADWAL='A01';

select J.NO_JADWAL,F.JUDUL_FILM,J.TANGGAL,J.JAM,J.HARGA from JADWAL J,FILM F where J.KODE_FILM = F.KODE_FILM order by NO_JADWAL;

select * from STATUS_BANGKU where NO_JADWAL = '001' and STATUS='BELUM';

create view SISA_BANGKU as
select NO_JADWAL,count(*) as sisa
from STATUS_BANGKU
where STATUS='BELUM'
group by NO_JADWAL
order by NO_JADWAL;

alter table TRANSAKSI modify (HARGA float);

select J.NO_JADWAL,B.NO_KURSI,B.STATUS from Jadwal J,BANGKU B order by J.NO_JADWAL;
select J.NO_JADWAL,F.JUDUL_FILM,J.TANGGAL,J.JAM,J.HARGA,SB.SISA from JADWAL J,FILM F,SISA_BANGKU SB where J.KODE_FILM = F.KODE_FILM AND J.NO_JADWAL = SB.NO_JADWAL order by NO_JADWAL