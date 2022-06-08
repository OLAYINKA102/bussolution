const readMoreBtn = document.qyerySelector('.read-more-btn');
const text =document.qyerySelector('.text');


readMoreBtn.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');
    if (readMoreBtn.innerText ==='Read More') {
        readMoreBtn.innerText = 'Read Less';
    }else{
        readMoreBtn.innerText='Read More';
    }
        
    
})