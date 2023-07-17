function dark(){
  const themeBut = document.getElementById("theme");
  const body = document.getElementById("body");
  themeBut.setAttribute('onclick', 'light()');
  themeBut.innerText = "Light";
  // alert("Javascript solos");
  body.classList.add("dark");
}

function light(){
  const themeBut = document.getElementById("theme");
  const body = document.getElementById("body");
  themeBut.innerText = "Dark";
  body.classList.remove("dark");
  themeBut.setAttribute("onclick", "dark()");
}
