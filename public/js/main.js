let mode = document.querySelector(".main-page .links .mode");
let modeBtn = document.querySelector(".main-page .links .mode button");
let dark = document.querySelector(".main-page .links .mode .dark");
let light = document.querySelector(".main-page .links .mode .light");

modeBtn.addEventListener("click",()=>{
    mode.classList.toggle('height');
    if (mode.classList.contains('height')) {
        let arrow = document.querySelector(".main-page .links .mode > button i");
        arrow.classList.replace('fa-angle-right','fa-angle-down')
    }else {
        let arrow = document.querySelector(".main-page .links .mode > button i");
        arrow.classList.replace('fa-angle-down','fa-angle-right')
    }
})

if (localStorage.getItem('mode') == 'dark') {
    document.body.classList.add("darkMode");
    dark.style.backgroundColor = "var(--thd-color)";
    light.style.backgroundColor = "transparent";
}

dark.addEventListener("click",()=>{
    document.body.classList.add("darkMode");
    dark.style.backgroundColor = "var(--thd-color)";
    light.style.backgroundColor = "transparent";
    localStorage.setItem('mode','dark');
})

light.addEventListener("click",()=>{
    document.body.classList.remove("darkMode");
    dark.style.backgroundColor = "transparent";
    light.style.backgroundColor = "var(--thd-color)"
    localStorage.setItem('mode','light');
})


let setting = document.querySelector(".main-page aside .links li .settings");
let setBtn = document.querySelector(".main-page aside .links li .settings h1");
let setLink = document.querySelectorAll(".main-page aside .links li .settings ul a");

setBtn.addEventListener("click",()=>{
    setting.classList.toggle('set-height');
    if (setting.classList.contains('set-height')) {
        setBtn.style.paddingLeft = "15px";
    }else {
        setBtn.style.paddingLeft = "";
    }
})


// my-profile show img

let show = document.querySelector(".main-page .page-content .info .user button");
let hide = document.querySelector(".hidden-img button");
let img = document.querySelector(".hidden-img");
let page = document.querySelector(".page-content");

show.addEventListener("click",()=>{
    page.scrollTo({
        top: 0,
        behavior:"smooth"
    })
    img.style.display = "flex";
    page.style.overflow = "hidden";
})

hide.addEventListener("click",()=>{
    img.style.display = "none";
    page.style.overflow = "auto";
})
