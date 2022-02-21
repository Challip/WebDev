//motion when open home page 
const title = document.querySelector(".title");
const main = document.querySelector(".main");
const button = document.querySelector(".button");


gsap.fromTo(".title",{x:0},{x:600,duration:3});
gsap.fromTo(".main",{x:1200,Y:800},{x:0,Y:200,duration:2});
gsap.fromTo(".button",{x:1200,Y:800},{x:0,Y:200,duration:2});
