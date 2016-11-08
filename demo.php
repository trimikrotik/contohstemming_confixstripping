<?php
// demo.php

// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();

// stem
//$sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
$sentence = '

aplikasi
pengukuran
similaritas
pada

dokumen
dengan

metode
semantic

ari
andika
1011406

mahasiswa
program
studi
teknik
informatika
stmik
bu
di
darma
medan

jl

nomedan338
sp
limun


http


email



besar
sumber
data
teks
seperti
dokumen

word
pdf
dan
kutipan
teks

text
mining
mencari

polapola
yang
ada
diteks
dalam
bahasa
natural

yang
tidak
terstuktur
seperti
buku

email
artikel

halaman

web
kegiatan
yang
biasa
dilakukan
oleh

text

mining
adalah


text

clustering
conception
entity
extraction
22
full
text
search
dalam
pengambilan

teks
pencarian
teks

lengkap
mengacu
pada
teknik
untuk
mencari

dokumen
yang
disimpan
dalam
komputer
tunggal

atau
koleksi
dalam

database
teks

lengkap

pencarian

teks
lengkap
di
bedakan
dari
pencarian

berdasarkan
meta
data
atau
pada
bagian

bagian

dari
teks
asli
diwakili
dalam
database

seperti

judul
abstrak
bagian
yang
dipilih
atau




dalam
pencarian
teks
lengkap
mesin

pencari
memeriksa
semua
kata

kata
dalam
setiap

dokumen
yang
tersimpan
seperti
mencoba
untuk

sesuai
dengan
kriteria
pencarian


teks
di
tentukan

oleh
pengguna
teknik

umum
di

database
bibliografi
secara

online
pada
1990an
banyak
situs
dan
program

aplikasi
seperti
perangkat
lunak
pengolah
kata

menyediakan
kemampuan
teks


beberapa
mesin
pencari

web
seperti

altavista
menggunakan
teknik

full

text

search
sementara

yang
lain

indeks
hanya
sebagian
dari
halaman

web
di
periksa
oleh
sistem
pengindeksan
mereka

23


berhadapan
dengan
sejumlah
kecil

dokumen
adalah
mungkin
untuk
mesin

teks
lengkap
untuk
langsung
memindai
isi
dokumen

dengan
setiap

query
strategi
yang
disebut


pemindaian
serial

ini
adalah
apa
yang
beberapa

alat
dasar

seperti

grep

lakukan
saat
melakukan

pencarian
namun
ketika
jumlah
dokumen
untuk

mencari
berpotensi
besar

atau
jumlah
permintaan

pencarian
untuk
melakukan

masalah

pencarian

teks
lengkap
sering
dibagi
menjadi
dua

tugas

pengindeksan
dan
pencarian

tahap

pengindeksan
akan
memindai

teks
dari
semua

dokumen
dan
membangun
sebuah
daftar
istilah

pencarian

sering
disebut
indeks

tapi
lebih
tepa
t

disebut
konkordansi

pada
tahap
pencarian

saat

melakukan

query

tertentu

hanya
indeks


bukan

teks
dari
dokumen
asli

24
metode


semantic
berasal
dari
kata

semiotika
berasal
dari
kata
yunani

semeion
yang

berarti
tanda
dalam
pandangan
piliang

penjelajahan
semiotik
sebagai
metode
kajian

kedalam
berbagai
cabang
keilmuan
ini
di

mungkinkan
karena
ada

untuk

memandang
berbagai
wacana
sosial
sebagai

fenomena
bahasa
dengan
kata
lain
bahas
di

jadikan
model
dalam
berbagai
wacana
sosial

berdasarkan
pandangan

semiotik
bila
seluruh

praktek
sosial
dapat
juga
di
pandang
sebagai
tanda
hal
ini
di
mungkinkan
karena
luasnya
pengertian

tanda
itu
sendiri
piliang

adalah
teknik
yang
di
lakukan

mesin
pencari
untuk
mencocokan
antara

key

word
di
satu
halaman
dengan
halaman
lain

dari
bahasa
yunani
yaitu
sema
kata
benda

yang
memiliki
arti
tanda
atau
lambang
kata

kerjanya
adalah

semaino
yang
berarti
menandai

atau
melambangi
yamg
di
maksud
lambang
atau

tanda
adalah
tanda

tanda

linguistic
perancis

signe

dalam
hal
ini
penulis
akan

mencoba
memberikan
penjelasan
dengan
contoh

yang
mungkin
bisa
membantu
rekan

rekan

dalam

memahami
arti
kata
semantic

di
akses

tanggal
6
april
2013
pukul
1309



semantik
adalah
proses
setelah

melewati
proses
scanning
dan
parsing
pada
tahap

ini
di
lakukan
pengecekan
pada
struktur
akhir
yang

telah
di
peroleh
dan
di
periksa
kesesuaiannya

dengan
komponen
program
yang
ada
secara

global
fungsi
dari

semantic
analyzer
adalah
untuk

menentukan
makna
dari
serangkaian
instruksi
yang

terdapat
dalam
program
sumber

syntax
suatu
bentuk

program
yang
benar
dari
suatu
bahasa
semantik

arti
dari
program
yang
benar
secara

syntax
dari
bahasa
tersebut
semantik
suatu
bahasa

membutuhkan
semacam
ekpresi
untuk

mengirimkan
suatu
nilai
kebenaran


true

false
not
atau
nilai
integer

dalam
banyak

kasus
program
hanya
dapat
di
eksekusi
jika
benar

serta
mengikuti
aturan

syntax
dan
semantic
semantic
suatu
bahasa
pemrograman

mempunyai
banyak
potensial
beberapa
di

antaranya
adalah

bahasa
pemrograman

banyak
usaha
yang
dilakukan
untuk

bahasa
pemrograman

seperti

cobol
pascal
fortran
untuk

lebih
memudahkan
programmer


2
referensi
untuk

membutuhkan
suatu

dokumentasi
yang
pasti
supaya

user
dapat

program
yang
di
buat

dengan
baik

3
pembuktian
dari
program
yang
benar

secara
matematis
program
tidak
mungkin

bekerja
dan
berjalan
jika
tidak
ada

semantic
4
referensi
untuk
implementor

semantic
akan
mencegah
suatu
gaya
bahasa

yang
tidak
kompatibel
yang
di
wujudkan


suatu
implementasi
berbeda
walaupun

dengan
bahasa
yang
sama

otomatis

suatu

tools
dapat
secara
otomatis
membuat

translasi
bahasa
yang
melebihi
parsing
hal

ini
dapat
di
lakukan
jika

semantic
sudah

dirumuskan

6
pemahaman
yang
lebih
baik
dari
desain

bahasa

jika
suatu
rumusan

semantic
sulit
untuk
di

deskripsikan
secara
formal
maka
rumusan

semantic
tersebut
juga
akan
sulit
di
gunakan

oleh
programmer

dua
alasan
mengapa
perlu
memahami
suatu

desain
bahasa
pemrograman
dengan
lebih
baik

yaitu


1
memahami
dengan
lebih
baik
suatu
desain

bahasa
pemrograman
berarti
membantu

menguasai
dan
menggunakan
bahasa

tersebut

2
memahami
dengan
lebih
baik
suatu
desain

bahasa
pemrograman
secara
detail

membantu
programmer
untuk
memperbaiki

proses
pengembangan
program
menjadi

lebih
baik

242
teknik

semantic

adapun
teknik
dari
proses

semantic
adalah

sebagai
berikut


ini

suatu
mesin

buatan

abstrak

dengan
instruksi


instruksi
primitive
tidak
perlu

realistic
tetapi
dengan
cukup
sederhana
supaya
tidak

muncul
kesalah
pahaman
deskripsi

semantic
dari
bahasa
pemrograman

menetukan
suatu
translasi
ke
kode

semantic
operasional

menceritakan

bagaimana
perhitungan
yang
dilakukan

dengan

bagaimana

pelaksanaan
program


apa
yang
di
proses
dengan

objek
matematika

denotasi
sebuah
bahasa
terdiri

dari
tiga
bagian

sintaks
abstrak
dari
bahasa
itu
aljabar

semantik
yang
menggambarkan
model

komputasi
dan
fungsi
nilai
pada
pendekatan

ini
di
berikan
suatu
fungsi
yang
memetakan

komputer
yang
di

tunjukkan
ke
dalam
bentuk
nilai

nilai

abstrak
secara
matematika

angka
nilai

kebenaran
fungsi
matematika


3
axiomatic
semantic

aksiomatik

semantic
bahasa
pemrograman

sebuah
teori
matematika

program
yang
ditulis
dalam
bahasa
pada

pendekatan
ini
dedefenisikan
suatu
tindakan

program
yang
di
bangun
dengan

yang
menyimpan
status

computer
sebelum
dan
sesudah
di
eksekusi

rumus
semantik
terbagi
jadi
3

p
c

q

di
mana
c
adalah
struktur
kendali
dalam

bahasa
pemrograman
p
dan
q
adalah

pernyataan
sehubungan
dengan
properti
dari

objek
program

seringkali
variabel
p

adalah
prekondisi
dan
q
adalah
poskondisi

arti
darip
c
q
adalah
jika
c
di

laksanakan
di
mana
p
sudah
di
penuhi
dan
c

sudah
selesaimaka
c
di
selesaikan
pada
saat

pernyataan
q
di
penuhi

contoh


program
to
compute
s

sumi1

nai

si

00

while
i

n
do

si

sai1i1

end

4
algebraic
semantic

semantik
aljabar
menggambarkan
arti

sebuah
program
dengan
definisi
aljabar

pada
pendekatan
ini
di
pertimbangkan
suatu

objek
komputasi
yang
menjadi
syarat


syarat
dalam
aljabar
multi
stored
program

fungsi
yang
dapat
di

wujudkan
dengan
suatu
persamaan
di
antara

syarat

syarat
tersebut

semantic

sebuah
program
ke
bahasa

lain
biasanya
bahasa
mesin
seperti
dalam

pengambilan
keputusan
secara
alamiah

dengan
logika
program
di
beri
suatu
arti

dari
aturan
yang
di
turunkan
yang

penilaian
gagasan
suatu

bahasa

proses
analisa

sintaks
dan
analisa
2
proses
yang
sangat
erat

kaitannya
sulit
untuk
di
pisahkan

contoh


a

a

bc

d

maka
penganalisis
semantik
harus
mampu

menentukan
aksi
apa
yang
akan
di
lakukan
oleh

operator

operator
tersebut
dalam
sebuah
proses

kompilasi
andai
kata
parser
menjumpai
ekspresi

seperti
diatas
parser
hanya
akan
mengenali





dan

parser
tidak
tahu
makn
a

apa
yang
tersimpan
di
balik
simbol
simbol

mengenalinya

kompiler
akan
memanggil

rutin
semantik
yang
akan
memeriksa


1
apakah

yang
ada
telah
di

definisikan
sebelumnya

2
apakah

tersebut
tipenya

sama

3
apakah
operand
yang
akan
dioperasikan

tersebut
ada
nilainya
dan
seterusnya


ini
terkait
dengan
tabel
simbol

pengecekan
yang
di
lakukan
oleh
analisis
semantik

adalah
sebagai
berikut


1
memeriksa
keberlakuan
namanama

meliputi
pemeriksaan
berikut


duplikasi

pada
tahap
ini
di
lakukan

pengecekan
apakah
sebuah
nama
terjadi

lebih
dari
dua
kali

pengecekan
di
lakukan
pada
bagian

pengelola
blok

terdefinisi

melakukan
pengecekan
apakah

sebuah
nama
yang
di
pakai
pada
tubuh

program
sudah
terdefinisi
atau
belum

pengecekan
di
lakukan
pada
semua
tempat

kecuali
blok

2
memeriksa
tipe
melakukan
pemeriksaan

terhadap
kesesuaian
tipe
dalam
statement


statement
yang
ada
misalkan
bila
terdapat

suatu
operasi
di
periksa
tipe
operand

contohnya
bila
ekspresi
yang
mengikuti

instruksi
if
berarti
tipenya
boolean
akan
di

periksa
tipe
identifier
dan
tipe
ekspresi
bila

ada
operasi
antara
dua
operand
maka
tipe

operand
pertama
harus
bisa
di
operasikan

dengan
operand
kedua

contoh


ekspresi
yang
mengikuti

if

berarti
tipenya

boolean
akan
diperiksa
tipe

identifier
dan

tipe
ekspresinya
bila
ada
operasi
antara
2

operand
maka
tipe
operand
yang
pertama

harus
bisa
di
operasikan
dengan
operand

yang
kedua

analisa
semantic
sering
juga
di
gunakan

dengan
intermediate
code
yang
akan
menghasilkan

intermedia
code
kode
antara


intermediate
code

adalah

sebuah
representasi
yang
di
siapkan
untuk
mesin

abstrak
tertentu
dua
sifat
yang
harus
dipenuhi
ole
h

kode
antara
adalah


1
dapat
di
hasilkan
dengan
mudah

2
mudah
di
translasikan
menjadi
program

sasaran

target
program

representasi
kode
antara
biasanya
berbentuk

tiga
alamat


three
address
code

baik
berbentuk

quadruples
atau

triples
kode
antara


intermediate
code
dibentuk

dari
sebuah
kalimat
x
dalam
bahasa

context
free
kalimat
ini
adalah
keluaran
dari
parser
kalimat
in
i

tentu
saja
dapat
di
nyatakan
dalam
represntasi

pohon
parsing


parse
tree
syntax
directed

translation
adalah
suatu
urutan
proses
yang


parse
tree
menjadi
kode
antara

tahap
pertama
dari
pembentukkan
kode
antara

adalah
evaluasi
atribut
setiap
token
adalah
semua

informasi
yang
di
simpan
di
dalam


table

dari

parse
tree
pandangan
sebuah
node
n

yang
di
tandai

sebuah
token
x
pada

parse
tree
kita
tuliskan
xa

untuk
menyatakan
atribut
a
untuk
token
x
pada

node
n
tersebut
nilai
xa
pada
node
n
tersebut

dievaluasi
dengan
menggunakan
aturan


attribut
a
aturan

semantic
ini
di
tetapkan

untuk
setiap
produksi
di
mana
x
adalah
ruas
kiri

produksi
sebuah

parse
tree
yang
menyertakan
nilai

nilai

attribut
pada
setiap
node
nya
di
namakan

nonated
parse
tree
kumpulan
aturan
yang

menetapkan
aturan

aturan

semantic
untuk
setiap

tahap
produksinya
di
namakan

syntax
directed

definition
untuk
jelasnya
berikut
ini
adalah
sebuah

syntax
directed
translation
yang


ekspresi
infix
menjadi

ekspresi
postfix
ekspresi

infix
ini
dapat
di
pandang
sebagai
sebuah
kalimat

yang
dihasilkan
oleh

parser
contoh


diketahui

1
kalimat
x
952l

2
grammar
q

e
et
e

t

i

t
0129

3
syntax
directed
definition

similaritas
dokumen

dalam
proses
analisa
kemiripan
dokumen

penulis
menggunakan
teknik
yang
sama
pada

program
sebelumnya
yaitu
teknik

text
mining

dengan
algoritma

tfidf

dan

vector
space
model
algoritma

tfidf

akan
memeriksa
kemunculan

tiap
kata
pada
isi
dokumen
dari
hasil

tokenizing

filtering
d
a
n

word
counting

untuk
di
lakukan

perhitungan
rumus

tfidf

yang
akan

menghasilkan
bobot
dokumen
untuk
memperoleh

hasil
yang
baik
maka
hasil
dari
algoritma

tfidf

akan
di
proses
kembali
dengan
algoritma

vector

space
model
hasil
akhir
dari
program
ini
akan
di

dapat
namanama
dokumen
yang
isinya
memiliki

tingkat
kemiripan
dengan
kata
kunci

untuk
menganalisa
tingkat
kemiripan
antar

suatu
kata
kunci
pada
dokumen
dengan
dokumen

lain
tahap
yang
harus
di
lakukan
adalah
memilih

dokumen
yang
ingin
di
bandingkan
dan
dokumen

yang
menjadi

dokumen
yang
di

pilih
untuk
di
bandingkan
memiliki
kata
kunci
dan

kata
kunci
tersebut
yang
akan
di
analisa
tingkat

kemiripannya
dengan
dokumen
lain
setelah

mendapatkan
kumpulan
kata
kunci
pada
dokumen

yang
ingin
di
bandingkan
maka
program
akan

melakukan
proses
perulangan
sebanyak
jumlah
kata

kunci
tersebut
dalam
proses
perulangan
ini
setiap
satu
kata
kunci
akan
di
bandingkan
dengan
seluruh

dokumen
pembanding
untuk
mendapatkan
nilai

bobot
kata
kunci

wk2

dan
bobot
dokumen

terhadap
kata
kunci
wdk2

2431
tf

idf

term

document

frekuensi
merupakan
suatu
cara
untuk
memberikan

bobot
hubungan
suatu
kata


term

terhadap

dokumen
metode
ini
menggabungkan
dua
konsep

untuk
perhitungan
bobot
yaitu
frekuensi


sebuah
kata
di
dalam
sebuah
dokumen

tertentu
dan

inverse
frekuensi
dokumen
yang

mengandung
kata
tersebut
frekuensi
kemunculan

kata
di
dalam
dokumen
yang
di
berikan

menunjukkan
seberapa
penting
kata
tersebut
di

dalam
dokumen
tersebut
frekuensi
dokumen
yang

mengandung
kata
tersebut
menunjukkan
seberapa

umum
kata
tersebut
sehingga
bobot
hubungan

antar
sebuah
kata
dan
sebuah
dokumen
akan
tinggi

apabila
frekuensi
kata
tersebut
tinggi
di
dalam

dokumen
dan
frekuensi
keseluruhan
dokumen
yang

ada
mengandung
kata
tersebut
yang
rendah
pada

kumpulan
dokumen

database
adapun
rumus
untuk
perhitungan
tfidf

yaitu


wij

tf
x
id
f

wij

tf
x


log

1

1
dimana


ij
bobot
kata

term
kej
dan

dokumen

kei

tfij
jumlah
kemunculan
kata


term
kej
dalam
dokumen
kei

idf
log
nn

1


n

jumlah
semua
dokumen
yang
ada

n


jumlah
dokumen
yang
mengandung
term

kej

vector
space
model

vector
space
model
adalah
suatu
model

yang
di
gunakan
untuk
mengukur
kemiripan
antara

suatu
dokumen
dengan
suatu

query
pada
model
ini

query

dan
dokumen
di
anggap
sebagai

vektor


vektor
pada
ruang
n
dimensi
di
mana
n
adalah

jumlah
dari
seluruh

term

yang
ada
dalam

leksikon

leksikon

adalah
daftar
semua

term

yang
ada
dalam

indeks
salah
satu
cara
untuk
mengatasi
hal
tersebu
t

dalam
model

vector
space
adalah
dengan
cara

melakukan
perluasan
vektor
proses
perluasan

dapat
di
lakukan
pada


atau
pada
kedua

vektor

tersebut

pada

algoritma
vector
space
model
di

gunakan
rumus
untuk
mencari
nilai

cosinus
sudut

antara
dua

vector
dari
setiap
bobot
dokumen

wd

dan
bobot
dari
kata
kunci
wk
rumus
yang

digunakan
dalam

vektor
space
model
sebagai

berikut

3
analisa

31

analisa
sistem
similaritas
dokumen

alur
pencarian
similaritas
dokumen
dapat

dilihat
pada
gambar
1
berikut
ini


gambar
1

pencarian
similaritas
dokumen

proses

proses
yang
akan
dilakukan

searching



dokumen
dalam
melakukan
pencarian

adalah


1
input
kata

2
pencarian
kata
dilakukan
dengan
mencari

dokumen
dilokasi
yang
sebelumnya
telah

ditentukan
terlebih
dahulu

3
temukan
dokumen
yang
sesuai
dengan
kata

kunci
yang
dimasukkan

4
periksa
dokumen

5
hasil
pencarian
dapat
ditampilkan
langsung

algoritma

searching

merupakan
suatu

instruksi
yang
menyusun
sekumpulan
halaman

dokumen
berdasarkan
kata
kunci
instruksi
tersebut

menganalisis
komponen

komponen
dari
sebuah

halaman
dokumen
seperti
judul
dan
isi
di
dalam


dokumen
ketika
pengguna
mencari
dokumen
maka

searching
akan
mengakses
data
yang
telah
di

kumpulkan
sebelumnya
pencarian
tersebut
di

lakukan
berdasarkan
kata
kunci
yang
di
masukkan

oleh
pengguna

pada
umumnya
algoritma
pencarian
mencari

kata
dalam
dokumen
dan
menghitung
banyaknya

kemunculan
kata
tersebut
kemudian
dokumen

yang
memiliki
lebih
banyak
jumlah
kemunculan

kata
kunci
tersebut
berada
di
urutan
paling

atas

tetapi
cara
ini
kurang
efektif
sebab
banyaknya

kemunculan
kata
kunci
tidak
selalu
menentukan
isi

dokumen
dan
bahkan
sering
kali
tidak

berhubungan
sama
sekali
dengan
apa
yang
di
cari

oleh
pengguna

32
proses
similaritas
dokumen

dalam
proses
analisa
kemiripan
dokumen

penulis
menggunakan
teknik
yang
sama
pada

program
sebelumnya
yaitu
teknik

text
mining

dengan
algoritma

tfidf

dan

vector
space
model
algoritma

tfidf

akan
memeriksa
kemunculan

tiap
kata
pada
isi
dokumen
dari
hasil

tokenizing

filtering
d
a
n

word
counting

untuk
di
lakukan

perhitungan
rumus

tfidf

yang
akan

menghasilkan
bobot
dokumen
untuk
memperoleh

hasil
yang
baik
maka
hasil
dari
algoritma

tfidf

akan
di
proses
kembali
dengan
algoritma

vector

space
model
hasil
akhir
dari
program
ini
akan
di

dapat
namanama
dokumen
yang
isinya
memiliki

tingkat
kemiripan
dengan
kata


menganalisa
tingkat
kemiripan
antar

suatu
kata
kunci
pada
dokumen
dengan
dokumen

lain
tahap
yang
harus
di
lakukan
adalah
memilih

dokumen
yang
ingin
di
bandingkan
dan
dokumen

yang
menjadi

dokumen
yang
di

pilih
untuk
dibandingkan
memiliki
kata
kunci
dan

kata
kunci
tersebut
yang
akan
dianalisa
tingkat

kemiripannya
dengan
dokumen
lain
setelah

mendapatkan
kumpulan
kata
kunci
pada
dokumen

yang
ingin
di

program
akan

melakukan
proses
perulangan
sebanyak
jumlah
kata

kunci
tersebut
dalam
proses
perulangan
ini
setiap
satu
kata
kunci
akan
di
bandingkan
dengan
seluruh

dokumen
pembanding
untuk
mendapatkan
nilai

bobot
kata
kunci
wk2
dan
bobot
dokumen

terhadap
kata
kunci
wdk2


term
frequency


inversed
document
frequency
pada
algoritma

tf

idf
digunakan
rumus

untuk
menghitung
bobot
w
masingmasing

dokumen
terhadap
kata
kunci
dengan
rumus
yaitu


wdt
tfdt
idft

dimana

d

dokumenked

t

kata
ket
dari
kata
kunci

w

bobot
dokumen
ked
terhadap

kata
ket

tf

banyaknya
kata
yang
dicari

pada
sebuah
dokumen

idf


inversed
document
frequency

idf

log2
ddf

d

total
dokumen

df

banyak
dokumen
yang

mengandung
kata
yang
dicari

setelah
bobot
w
masinmasing
dokumen

diketahui
maka
dilakukan
proses

sorting

pengurutan
dimana
semakin
besar
nilai
w
semakin


besar
tingkat
similaritas
dokumen
tersebut
terhadap
kata
kunci
demikian
sebaliknya
contoh

implementasi
sederhana
dari
tf

idf
adalah

sebagai
berikut


kata
kunci
kk


pengetahuan
logistik

dokumen
1
d1


manajemen
transaksi

logistik

dokumen
2
d2


pengetahuan
antar

individu

dokumen3
d3


dalam

manajemen

pengetahuan

terdapat
transfer

pengetahuan

logistik

jadi
jumlah
dokumen
d

3

setelah
dilakukan
tahap

tokenizing

dan

proses

filtering
maka
kata
antar
pada
dokumen
2

serta
kata
dalam
dan
terdapat
pada
dokumen
3

dihapus
berikut
ini
adalah
tabel
perhitungan

tfidf


tabel
1

perhitungan

tfidf

bobot

untuk
d1

0176

0

0176

bobot

untuk
d2

0

0176

0176

bobot

untuk
d3

0176

0352

0528

dari
contoh
studi
kasus
di
atas
dapat
di

ketahui
bahwa
nilai
bobot
w
dari
d1
dan
d2

adalah
sama
apabila
hasil
pengurutan
bobot

dokumen
tidak
dapat
mengurutkan
secara
cepat

karena
nilai
w
keduanya
sama
maka
di
perlukan

proses
perhitungan
dengan
algoritma

vectorspace

model
ide
dari
metode
ini
adalah
dengan

menghitung
nilai

cosinus
sudut
dari
dua

vector
yaitu
w
dari
setiap
dokumen
dan
w
dari
kata

kunci

vector
space
model

vector
space
model
adalah
suatu
model

yang
di
gunakan
untuk
mengukur
kemiripan
antara

suatu
dokumen
dengan
suatu

query
pada
model
ini

query

dan
dokumen
di
anggap
sebagai

vector


vector
pada
ruang
n

dimensi
di
mana
n
adalah

jumlah
dari
seluruh

term

yang
ada
dalam

leksikon

leksikon

adalah
daftar
semua

term

yang
ada
dalam

indeks
salah
satu
cara
untuk
mengatasi
hal
tersebu
t

dalam
model

vector
space

adalah
dengan
cara

melakukan
perluasan
vektor
proses
perluasan

dapat
di
lakukan
pada
vector

query
vector

dokumen
atau
pada
kedua
vector
tersebut

pada
algoritma

vector
space
model
di

gunakan
rumus
untuk
mencari
nilai

cosinus
sudut

antara
dua
vector
dari
setiap
bobot
dokumen
wd

dan
bobotdari
kata
kunci
wk
rumus
yang

digunakan
adalah
sebagai
berikut

apabila
studi
kasus
pada
algoritma

tf

idf

di
atas
dicari
nilai

cosines

sudut
antara
presisi

seperti
yang
di
tunjukan
tabel
32


tabel
2

perhitungan

vector
space

model


menghitung
nilai

cosines

sudut

antara
vector
kata
kunci
dengan
tiap
dokumen

dengan
mengunakan
rumus

co
sin
d
sum
kk
d
sqrt
kk
sqrt

di

1
untuk
dokumen
1
d1

cosine
d1


sum
kk

d1

sqrtkk

sqrtd1

0031

0249

0539

0231

2
untuk
dokumen
2
d2

cosine
d2


sum
kk

d2


sqrtkk

sqrtd2

0031

0249

0509

0245

3
untuk
dokumen
2
d3

cosine
d3


sum
kk

d3


sqrtkk

sqrtd3

0093

0249

0643

0581

sesuai
perhitungan
diatas
maka
nilai
cosines

setiap
dokumen
telah
didapat
seperti
tabel
3


tabel
3

hasil
vector
space
model

kesimpulan

setelah
melakukan
penelitian
dan
pengujian

maka
penulis
mendapatkan
suatu
kesimpulan
yang

dapat
digunakan
sebagai
garis
besar
dari

keseluruhan
rangkuman
skripsi
ini

adapun
kesimpulan
dari
penelitian
ini

adalah
sebagai
berikut


1
aplikasi
sistem
temu
kembali
informasi

yang
dirancang
dengan
menggunakan

bahasa
pemrogran

embarcadero
delpih

xe3
algoritma

tf

idf
sebagai

pembobotan
term
sebagai
pengukuran

kemiripan

teks
dalam
proses
pencarian

informasi
dokumen
pada
aplikasi

pengukuran
similaritas
dokumen
ini
mampu

memperoleh
hasil
pencarian
lebih
tepat
dan

efektif

dari
aplikasi
sudah
cukup
cepat

untuk
memproses
atau
menjalankan

fungsinya


5

daftar
pustaka

1

prof
dr
jogiyanto
hm
mbaakt

sistem

teknologi
informasi
penerbit
andi

yogyakarta
2005

2


abdul
kadir
terra
ch
triwahyuni

pengenalan
teknologi
informasi
penerbit

andi
yogyakarta
2005

3

adi

perangkat
lunak

berorientasi

andi


4

belajar
pemrograman

delphi
penerbit
modula
bandung
2011

';
$output   = $stemmer->stem($sentence);

echo $output . "\n";
// ekonomi indonesia sedang dalam tumbuh yang bangga

echo $stemmer->stem('Mereka meniru-nirukannya') . "\n";
// mereka tiru

//CARA PAKAI : 
/*
1. Download library di https://github.com/sastrawi/sastrawi
2. Extract folder compressed menjadi folder dan rubah nama folder master menjadi sastrawi/Sastrawi
3. Copas 1 paket library tsb ke htdocs
4. Download composer.phar di https://getcomposer.org/download/, pada contoh ini saya menggunakan yang latest. 
5. copas composer ke direktori htdocs dmn folder Sastrawi berada. lokasi copasnya composer.phar ini jadi satu dengan file-file yang bernama folder data, folder src, folder test, file .gitignore, file .travis.yml, file build, file CHANGELOG.md dll. copas di situ composernya. 
6. jalankan cmd sbg administrator 
7. lalu ikuti langkah-langkah installasi sbgaimana yang ada pada repository github yaitu dengan cara : php composer.phar require sastrawi/sastrawi:^1
8. tunggu hingga proses berhasil dg ditandainya muncul kata-kata Generating autoload files. dan akan muncul folder bernama vendor di lokasi Sastrawi tempat composer.phar berada. 
9. copas source code demo.php ke text editor dan simpan dengan nama demo.php misalnya. lokasi penyimpanan demo.php jadi satu dengan lokasi composer.phar berada.
10. coba lakukan compile di browser, dengan syarat xampp maupun wampp dalam posisi start pada apache dan mysql
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Stemming Confix Stripping</title>
</head>
<body>

</body>
</html>