// file js ini terhubung dengan file display.php

// cari element html dengan id search-input
const searchInput = document.getElementById("search-input");

// cari element html dengan id container-display
const containerDisplay = document.getElementById("container-display");

// ketika searchInput di isi "keyup" jalankan fungsi searchElement
searchInput.addEventListener("keyup", searchElement);

async function searchElement() {
    // ambil value dari search input yang dimasukan user
  const keywordValue = searchInput.value;

  // lakukan request ke halaman search.php
  // kirimkan juga keyword dari input value
  // tangkap response dari halaman search.php
  const response = await (
    await fetch("http://localhost/TUGASLBE/search.php?keyword="+keywordValue)
  ).text();

  // fetch mirip seperti curl namun versi javascript

  // response dari search.php yang berupa html dimasukan dalam container-display
  containerDisplay.innerHTML=response;
}
