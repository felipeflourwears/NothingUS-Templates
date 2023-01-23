document.addEventListener('DOMContentLoaded', init);
document.body.onload = () =>{
    console.log('body onload');
}
function init(){
    console.log('DOM ready');
    const main=document.querySelector('.output');
    main.textContent='Hello world';
}