window.addEventListener("scroll",function(){
    const header = this.document.querySelector('header');
    header.classList.toggle('sticky',this.window.scrollY > 0);
});

window.addEventListener("scroll",function(){
    const header = this.document.querySelector('section');
    header.classList.toggle('sticky',this.window.scrollY > 0);
});