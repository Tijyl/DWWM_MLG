const btn = document.querySelector("button");
const maDiv = document.querySelector("div");

btn.addEventListener('click',function(){
    let txt = "";
    for(let i = 1; i <= 10;i++){
        txt += " 3 * " + i + " = " + (3 * i) + "<br/>";
    }

    maDiv.innerHTML = txt;

});
