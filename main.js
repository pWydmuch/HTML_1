window.addEventListener("scroll", () => {
    if (document.documentElement.scrollTop > 20) {
        document.querySelector('nav').classList.add('scrollNav')
    } else {
        document.querySelector('nav').classList.remove('scrollNav');
    }
})

