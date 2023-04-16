

document.querySelector("#signup").addEventListener("click", function(){
  document.querySelector(".popup").classList.add("active");
});

document.querySelector(".popup .close").addEventListener("click", function(){
  document.querySelector(".popup").classList.remove("active");
});




function myFun(){
 let place = document.getElementById("input").value
 sessionStorage.clear()
 sessionStorage.setItem("place",place)
 window.open("mapss.html")
}

