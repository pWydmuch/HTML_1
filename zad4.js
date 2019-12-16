
// let isDrawing = false;
// let x = 0;
// let y = 0;

// const myPics = document.getElementById('draw');
// const context = myPics.getContext('2d');
// let width =1;

// const rect = myPics.getBoundingClientRect();

// document.addEventListener('keydown',e=>{
//     if(e.keyCode>48 && e.keyCode<58)
//     width = e.keyCode-48
// })


// myPics.addEventListener('mousedown', e => {
//     x = e.clientX - rect.left;
//     y = e.clientY - rect.top;
//     isDrawing = true;
// });

// myPics.addEventListener('mouseover', e => {
//    myPics.style.border='blue solid 5px'
// });
// myPics.addEventListener('mouseout', e => {

//    myPics.style.border='1px solid black'
// });

// myPics.addEventListener('mousemove', e => {
 
//     if (isDrawing === true) {
        
//         if (e.shiftKey) width = 4
//         if (e.ctrlKey) {
//             drawLine(context, x, y, e.clientX - rect.left, e.clientY - rect.top, "red");
//         } else if (e.altKey)
//             drawLine(context, x, y, e.clientX - rect.left, e.clientY - rect.top, "pink");
//         else
//             drawLine(context, x, y, e.clientX - rect.left, e.clientY - rect.top);
//         x = e.clientX - rect.left;
//         y = e.clientY - rect.top;
//     }
// });

// window.addEventListener('mouseup', e => {
//     if (isDrawing === true) {
//         width = 1;
//         isDrawing = false;
//     }
// });

// function drawLine(context, x1, y1, x2, y2, color = 'black') {
//     context.beginPath();
//     context.strokeStyle = color;
//     context.lineWidth = width;
//     context.moveTo(x1, y1);
//     context.lineTo(x2, y2);
//     context.stroke();
//     context.closePath();

// }