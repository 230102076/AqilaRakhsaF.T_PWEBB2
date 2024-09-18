# Jobsheet 1
# Intruksi Kerja
1. Membuat Class dan Object
  - class adalah sebuah blueprint atau template yang digunakan untuk membuat objek. Class mendefinisikan atribut (variabel) dan metode (fungsi) yang dimiliki oleh objek.
  - object adalah instansi dari sebuah class. Objek adalah entitas yang menggabungkan data dan fungsi yang bekerja pada data tersebut. Objek diciptakan dari blueprint yang ditentukan oleh class, dan setiap objek 
    dapat memiliki atribut (variabel) dan metode (fungsi) yang ditentukan dalam class.
    Penjelasan:
• Class Mahasiswa: Kelas ini memiliki tiga atribut (nama, nim, dan jurusan) dan dua metode (TampilkanData, UpdateJurusan).
• Object: $mahasiswa1 adalah objek yang merupakan instance dari kelas Mahasiswa.
Metode tampilkanData() digunakan untuk menampilkan informasi tentang objek tersebut.
2. Implementasi Constructor
 • Menambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi atribut nama, nim, dan jurusan.
3. Membuat Metode Tambahan
 • Membuat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan perubahan jurusan.
4. Penggunaan Atribut dan Metode
• Mengubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
• Menampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData().
- Atribut: Menyimpan data atau keadaan dari objek.
- Metode: Operasi atau fungsi yang dilakukan oleh objek.
  Aksesibilitas
• Public: Dapat diakses dari mana saja.
• Private: Hanya dapat diakses dalam kelas itu sendiri.
• Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunan.
![jobsheet1](https://github.com/user-attachments/assets/9a7374d1-7442-432b-97e8-1c2001c4de12)

# Tugas 
1. Meimplementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Membuat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Membuat objek dari kelas Dosen, dan menggunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
   ![tugasjobsheet1](https://github.com/user-attachments/assets/704735c9-9395-46f7-87fa-f7bc97ae0ef1)

# Jobsheet 2
# Intruksi
1. Membuat Class dan Object
   - Penjelasan :
     • Class Mahasiswa: Class ini memiliki atribut nama, nim,  dan jurusan, serta metode tampilkanData().
     • Object: $mahasiswa1 adalah instance dari class Mahasiswa.
o Membuat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
o Membuat metode tampilkanData() dalam class Mahasiswa.
o Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.

2. Encapsulation
   Encapsulation (enkapsulasi) dalam PHP adalah prinsip dalam Object-Oriented Programming (OOP) yang mengatur akses ke atribut dan metode objek. Konsep ini bertujuan untuk menyembunyikan detail implementasi 
   dari luar objek dan hanya memperlihatkan antarmuka yang diperlukan. Dengan cara ini, encapsulation membantu menjaga integritas data dan mencegah akses langsung yang tidak diinginkan.
   
   Mengubah atribut dalam class Mahasiswa menjadi private.
   Membuat metode getter dan setter untuk atribut nama, nim, dan jurusan.
   Medemonstrasikan akses ke atribut menggunakan metode getter dan setter.
   
3. Inheritance
   Inheritance (pewarisan) dalam PHP adalah konsep dalam Object-Oriented Programming (OOP) yang memungkinkan sebuah class (kelas) untuk mewarisi atribut dan metode dari class lainnya. Ini membantu dalam 
   menciptakan hierarki class yang lebih kompleks dan memungkinkan penggunaan kembali kode dengan cara yang efisien.
   
   Membuat class Pengguna dengan atribut nama dan metode getNama().
   Membuat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
   Meinstansiasi objek dari class Dosen dan tampilkan data dosen.
   
4. Polymorphism
   Polymorphism dalam PHP adalah konsep dalam Object-Oriented Programming (OOP) yang memungkinkan objek untuk digunakan dalam berbagai bentuk atau jenis, tergantung pada konteksnya. Ini memungkinkan objek 
   dari berbagai class untuk digunakan secara konsisten melalui antarmuka umum atau metode yang sama, meskipun implementasinya bisa berbeda.
   
   Membuat class Pengguna dengan metode aksesFitur().
   Meimplementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
   Meinstansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
   
5. Abstraction
   Abstraction (abstraksi) dalam PHP adalah konsep dalam Object-Oriented Programming (OOP) yang memungkinkan Anda untuk mendefinisikan struktur dasar sebuah class tanpa memberikan detail implementasi yang 
   lengkap.
   Abstraction membantu dalam menyederhanakan model yang kompleks dengan menyembunyikan detail yang tidak relevan dan hanya menampilkan informasi yang diperlukan.
   
   Membuat class abstrak Pengguna dengan metode abstrak aksesFitur().
   Meimplementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
   Medemonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
   ![jobsheet2](https://github.com/user-attachments/assets/59040cbc-550e-4eee-ae85-b725023a863e)

   # Jobsheet 3
   # Intruksi
   Instruksi Kerja
1. Inheritance
   Membuat kelas Person dengan atribut name dan metode getName().
   Membuat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID().
2. Polymorphism
   Membuat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.
   Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
3. Encapsulation
   Mengubah atribut name dan studentID dalam kelas Student menjadi private.
   Menambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID.
4. Abstraction
   Membuat kelas abstrak Course dengan metode abstrak getCourseDetails().
   Membuat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() untuk memberikan detail yang berbeda.
![intruksi_jobsheet3](https://github.com/user-attachments/assets/947839ac-cdd3-467a-a635-e69085a5cea0)

# Tugas
1. Meimplementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
2. Menggunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya.
3. Menerapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang berbeda.
4. Menggunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di kelas Mahasiswa.
5. Membuat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
   
![jobsheet3](https://github.com/user-attachments/assets/c3a9f2bb-f736-4551-86ad-6416daae4835)

   

