const myForm = document.querySelector("form");
myForm.addEventListener("submit",
   () =>
         confirm("Are you sure you want to submit?")
    );
myForm.addEventListener("reset",
    () => 
        confirm("Are you sure you want to reset?")
  
);


const helpArray = [
    "Enter your first name",
    "Enter your last name",
    "Enter your month of birth.",
    "Enter your e-mail address in the format user@domain.",
    "Enter your phone number.",
    "This button submits the form to the server-side script.",
    "This button clears the form.", ""
];
let helpText;

// initialize helpTextDiv and register event handlers
function init() {

    helpText = document.getElementById("helpText");

    // register listeners
    registerListeners(document.getElementById("first-name"), 0);
    registerListeners(document.getElementById("last-name"), 1);
    registerListeners(document.getElementById("month"), 2);
    registerListeners(document.getElementById("mail"), 3);
    registerListeners(document.getElementById("tel"), 4);
    registerListeners(document.getElementById("submit"), 5);
    registerListeners(document.getElementById("reset"), 6);
} // end function init


function registerListeners(object, messageNumber) {
    object.addEventListener("focus",
        () => {
            helpText.innerHTML = helpArray[messageNumber];
        },
        false);
    object.addEventListener("blur",
        () => {
            helpText.innerHTML = helpArray[7];
        }, false);

}
window.addEventListener("load", init, false);