let header = document.querySelector("header")
let logo = document.querySelector("header .logo img")
let end = 0;
window.onscroll = function(){
    console.log(window.scrollY)
    if(window.scrollY <= 60){
        header.style.backgroundColor = "rgb(240, 243, 252)";
        header.style.boxShadow = "none"
        logo.style.width = "100%"
        // console.log("he")
        end = 0
    }
    else if( end !== 1){
        // console.log("hello")
        header.style.backgroundColor = "white"
        header.style.boxShadow = "0px 1px 10px #aaa"
        logo.style.width = "70%"
        end = 1
    }
    else if(window.scrollY >= 3000){
        
    }
}


// let loading = document.querySelector(".loading h1")
// text = "Our services"
// let start = 0
// let write = window.onscroll = function(){
//     if(start!==1){
//         if(window.scrollY >= 600){
//             let i =0
//             let count = setInterval(() => {
//                 loading.textContent = loading.textContent+ text[i]
//                 i++
//                 if(i === text.length){
//                     clearInterval(count)
//                     start = 1
//                 }
//             },100);
//         }
//     }
// }



// slider before and after
var divisor = document.getElementById("divisor"),
slider = document.getElementById("slider");
function moveDivisor() { 
	divisor.style.width = slider.value+"%";
}


// loagin screen
let loading_screen= document.querySelector(".loading-screenn")
window.onload = function(){
    setTimeout(() => {
        loading_screen.style.top ="-100%" 
        window.screenY = 0
    }, 6000);
    animation()
}

let animation = function(){
    setTimeout(() =>{
        AOS.init({
            duration: 3000,
            once: true
        });
    },8000)

}
// end loagin screen
