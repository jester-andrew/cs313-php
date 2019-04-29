let btn = document.getElementById("btn");
let btn2 = document.getElementById('change');
let btn3 = document.getElementById('toggle');
console.log(btn2);
console.log(btn);

btn.addEventListener('click', alertClicked);
btn2.addEventListener('click', changeColor)
btn3.addEventListener('click', hide);

function alertClicked() {
    alert("Clicked!");
}

function changeColor() {
    let div1 = document.getElementById('div1');
    let color = document.getElementById('color').value;
    console.log(div1);
    console.log(color);

    div1.style.backgroundColor = color;
}

function hide() {
    let div3 = document.getElementById('block');
    if (div3.style.display === "none") {
        div3.style.display = "block";
    } else {
        div3.style.display = "none";
    }
}