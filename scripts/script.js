var value = 0;

function color() {
    let img = document.getElementById("image-button");
    let main = document.getElementById("main");
    let news = document.getElementById("news");
  
    if (value == 0) {
      value = 1;
      img.className = "moon-button";
      main.style.backgroundColor = "black";
      news.classList.add("news-white");
      news.classList.remove("news-black");
      console.log(news.className);

    } else {
      value = 0;
      img.className = "sun-button";
      main.style.backgroundColor = "white";
      news.classList.add("news-black");
      news.classList.remove("news-white");
      console.log(news.className);

    }
  }