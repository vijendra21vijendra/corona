console.log("my extension is working");
let file = "./kittenImage.jpg";
// file = "./pinku.jpg";
let url = chrome.extension.getURL(file);
let images = document.getElementsByTagName("img");
console.log(url);
for (img of images) {
  //   console.log(img.src);
  img.src = url;
}
