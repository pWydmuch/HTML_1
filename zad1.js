let order = 0

function append() {
    const newP = document.createElement("div");
    order++;
    newP.setAttribute("id", `new${order}`)
    
    const newContent = document.createTextNode(`Hello ${order}`);
    newP.appendChild(newContent);
    const main = document.querySelector("#dom");
    main.appendChild(newP);
}

function insert() {
    const newP = document.createElement("div");
    order++;
    newP.setAttribute("id", `new${order}`)
 
    const newContent = document.createTextNode(`Hello before ${order}`);
    newP.appendChild(newContent);
    const main = document.querySelector("#dom");
    const first = document.getElementById(`new1`);
    main.insertBefore(newP,first);
}

function remove() {
    const main = document.querySelector("#dom");
    const last = document.getElementById(`new${order}`);
    main.removeChild(last);
    order--
}

function replace(){
    const last = document.getElementById(`new${order}`);
    const newP = document.createElement("div");
    order++;
    newP.setAttribute("id", `new${order}`)
    const newContent = document.createTextNode(`Hello replaced ${order}`);
    newP.appendChild(newContent);
    const main = last.parentNode
    main.replaceChild(newP,last)
    // main.insertBefore(second,st)
}