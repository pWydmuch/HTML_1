document.getElementById("btn-confirm").addEventListener("click", ()=>{
document.body.style.backgroundColor =  document.getElementById( 
    "my-color").value; }
)

document.getElementById("my-color").addEventListener("change", ()=>{
document.body.style.backgroundColor =  document.getElementById( 
    "my-color").value; }
)

document.getElementById("btn-confirm-font").addEventListener("click", ()=>{
document.body.style.color =  document.getElementById( 
    "my-color-font").value; }
)

const selectElement = document.querySelector('.font-fam');

selectElement.addEventListener('change', (event) => {
  const main = document.querySelector('main');
  console.log(event.target.value)
  main.style.fontFamily = event.target.value;
});