function processLinks(){
    const links = document.links
    for ( let i = 0; i < links.length; ++i ) {
        let currentLink = links[ i ];
        currentLink.style.color="black"
        } 
}

function processImages(){
    const images = document.images
    const first = images.item(0)
    first.style.border="red solid 2px"
    const second = images.namedItem("image2")
    second.style.border = "green dotted 3px"
 }

function processForms(){
    const form = document.forms.additional
    form.elements.email.placeholder = 'test@example.com';
 }

