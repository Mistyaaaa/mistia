<!DOCTYPE html>
<html lang="en">
<head>
<title>SMKN 1 JARO</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: green;
  padding: 10px;
  text-align: light;
  font-size: 20px;
  color: white;
  
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: right;
  width: 25%;
  height: 2700px; /* only for demonstration, should be removed */
  background: whitesmoke;
  padding: 20px;
  margin-top: -36px;
  font-size: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 75%;
  background-color: whitesmoke;
  height: 2700px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: green;
  padding: 8px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

a {
  border-style: solid;
  border-width: 1px 2px 2px 1px;
  border-color: black;
}

a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 9px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 12px;
  display: inline-block;
  float: right;
  margin-top: -5.2%;
  margin-right: 10%;
}

a:hover, a:active {
  background-color: darkblue;
  font-size:58%;
}
button {
  background-color: #f44336;
  color: white;
  padding: 9px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin-top: -117%;
  float: right;
  margin-right: 30%;
  border-style: solid;
  border-width: 1px 2px 2px 1px;
  border-color: black;
}

button:hover, button:active {
  background-color: red;
  font-size:50%;

}

.two {
  margin-left: 7.5%;
  margin-top: -5.5%;
}

p {
  margin: 20px 70px 40px 170px;
  font-size: 15px;
  text-align: center;
  width: 60%;

}

.true {
  margin: 10px 70px 10px 350px;
  color: grey;
}

h1 {
  margin: 20px 70px 40px 170px;
  font-size: 20px;
  text-align: center;
  width: 65%;
}

h6 {
  margin: 20px 70px 40px 190px;
}
h3 {
  float: right;
}

img{
  margin-left: 30%;
}

.one {
  margin-left: 0%;

}

.satu {
  margin-left: 2%;
}

.tiga {
  font-size: 12px;
  text-align: left;
  width: 58%;
  margin-top: -25%;
  margin-left: 35%;
}

</style>
</head>
<body>



     
<header>
<img class="one" src="https://l.top4top.io/p_2739gkdvx1.png" alt="Gambar" width="100" height="100" float="light" >
  <h2 class="two">SMKN 1 JARO</h2>
  <a href="http://127.0.0.1:8000/posts">Data Siswa</a>
  <h3>
    <form action="{{ route('logout') }}" method="POST" role="search">
                @csrf
                
                @method('DELETE')
                <button type="submit">Logout</button>
            </form>
    </h3>
</header>

<section>
  <article>
    <h1>SMKN 1 JARO undang siswa-siswi SMP kelas IX perkenalkan jurusan dan tes bakat minat gratis</h1>
    <h6>Posted by: SMKN 1JARO  Maret 01, 2023</h6>
    <img src="https://i.top4top.io/p_27399hnd41.jpeg" alt="Gambar" width="350" height="250" >
    <h6 class="true"><i>Kepala Sekolah sambut siswa IX SMPN 3 JARO</i></h6>
    <p>Test bakat dan minat adalah sebuah tes yang dirancang untuk membantu seseorang menemukan kecenderungan dan potensi mereka di berbagai bidang. Dengan mengetahui bakat dan minat seseorang, maka mereka dapat memilih jalur karir atau pendidikan yang sesuai dengan kemampuan dan keinginan mereka.</p>
    <img src="https://k.top4top.io/p_2739yv6yo1.jpg" alt="Gambar" width="350" height="250" >
    <h6 class="true"><i>Ketua jurusan TSM beri arahan terkait jurusan TSM</i></h6>
    <p>Ada beberapa jenis tes bakat dan minat yang dapat dilakukan, seperti tes psikometrik, tes kepribadian, dan tes keterampilan. Tes ini akan membantu mengidentifikasi bidang yang cocok untuk seseorang, seperti apakah mereka lebih cocok dalam bidang kreatif seperti seni dan desain, atau dalam bidang sains dan teknologi.</p>
    <img src="https://l.top4top.io/p_27396tfer1.jpg" alt="Gambar" width="350" height="250" >
    <h6 class="true"><i></i>Kajur ATR perkenalkan Alat ATR</h6>
    <p>Tes bakat dan minat dapat dilakukan secara online atau di tempat khusus seperti lembaga tes atau kantor konseling karir. Tes ini biasanya terdiri dari serangkaian pertanyaan dan aktivitas yang dirancang untuk mengukur kemampuan dan ketertarikan seseorang di berbagai bidang.</p>
    <img src="https://h.top4top.io/p_2739off2s1.jpg" alt="Gambar" width="350" height="250" >
    <h6 class="true"><i></i>Kajur TKJ perkenalkan jurusan TKJ</h6>
    <p>Hasil dari tes bakat dan minat dapat membantu seseorang dalam memilih jalur karir atau pendidikan yang sesuai dengan kecenderungan dan potensi mereka. Misalnya, seseorang yang memiliki minat dalam bidang kesehatan dapat memilih untuk kuliah di fakultas kedokteran atau menjadi perawat. Sedangkan seseorang yang memiliki bakat dalam bidang seni dapat memilih untuk mengambil jurusan seni atau desain.</p>
     <p>Namun, tes bakat dan minat tidak sepenuhnya menjamin keberhasilan dalam karir atau pendidikan. Kesuksesan dalam karir dan pendidikan juga dipengaruhi oleh kemauan, kerja keras, dan dedikasi seseorang dalam mengembangkan keterampilan dan kemampuan mereka.</p>
     <p>Selain itu, tes bakat dan minat juga dapat membantu seseorang dalam membangun kepercayaan diri mereka. Dengan mengetahui bakat dan minat mereka, seseorang dapat merasa lebih yakin dan percaya diri dalam mengambil keputusan mengenai jalur karir atau pendidikan yang ingin mereka pilih.</p>
     <p>Dalam mengambil tes bakat dan minat, sebaiknya seseorang memilih tes yang akurat dan dipercayai, serta mempersiapkan diri dengan baik sebelum tes. Selain itu, seseorang juga harus mengisi tes dengan jujur dan menerima hasil tes dengan objektif.</p>
     <img src="https://j.top4top.io/p_2739jjmxd1.jpg" alt="Gambar" width="350" height="250" >
     <h6 class="true"><i></i>Perkenalkan aktifitas jurusan ATR</h6>
     <p>Kesimpulannya, tes bakat dan minat adalah sebuah alat yang berguna dalam membantu seseorang menemukan kecenderungan dan potensi mereka di berbagai bidang. Dengan mengetahui bakat dan minat mereka, seseorang dapat memilih jalur karir atau pendidikan yang sesuai dengan kemampuan dan keinginan mereka, serta membangun kepercayaan diri mereka dalam mengambil keputusan.</p>
  </article>

  <nav><br>
  <img class="satu" src="https://i.top4top.io/p_2740onnws1.jpg" alt="Gambar" width="80" height="80" >
  <p class="tiga">Ketua MUI Kec. Muara Uya Isi Kegiatan Jum'at Taqwa di SMKN 1 JARO</p>
  <br>
  <img class="satu" src="https://f.top4top.io/p_2740lrtoo1.jpg" alt="Gambar" width="80" height="80" >
  <p class="tiga">Perpisahan Camat Jaro Bapak H.Suwandi, S.SOs, M.Ap</p>

</nav>
</section>

<footer>
  <h5>2023-SMKN 1 JARO</h5>
</footer>

</body>
</html>

