// file js ini terhubung dengan file display.php


const searchInput = document.getElementById("search-input");


const containerDisplay = document.getElementById("container-display");


searchInput.addEventListener("keyup", searchElement);

async function searchElement() {

  const keywordValue = searchInput.value;

 
  const response = await (
    await fetch("http://localhost/TUGASLBE/search.php?keyword="+keywordValue)
  ).text();


  containerDisplay.innerHTML=response;
}
