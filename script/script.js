let second = 0;

function fglhk() {
    let word_translaing = document.querySelector(".word_translaing").value;
    let word_translated = document.querySelector(".word_translated").value;

    let uniteTranslate = document.createElement("div");
    let divTranslate = document.createElement("div");
    let div = document.createElement("div");


    let type_translate = document.querySelector(".type_translate");
    uniteTranslate.className = "uniteTranslate second  " + second;
    divTranslate.className = "translateDiv second " + second;
    div.className = "wordNew second  " + second;
    // document.body.append(div);


    type_translate.after(uniteTranslate);

    uniteTranslate.prepend(div);
    div.after(divTranslate)

    divTranslate.innerText = word_translated;
    div.innerText = word_translaing;
}
function newDivFun(params) {

}

let type;

switch () {
    case value:

        break;

    default:
        break;
}

function push(params) {
    let push = document.getElementById("push").onclick = myFunc;
}
push()
let numCode;


window.addEventListener('keypress', event => {
    console.log(event.keyCode)
    if (event.keyCode == 13) {
        push()
    }
    console.log('code: ', event.code)
    console.log('------------------')
})


