let gamburger=document.querySelector("div .gamburger_menu");
    gamburger.addEventListener('click',()=>{
        let header_two=document.querySelector(".header_two");
        header_two.classList.toggle('active_menu')
        gamburger.classList.toggle('span_active');
    });

document.addEventListener('scroll', e => {
    if(pageYOffset + window.innerHeight === document.documentElement.scrollHeight){
        // code
        let offsetAll=document.querySelectorAll('.offset');
        let offset=offsetAll.length;
        let  add_news=document.querySelector('.add_news');
        let promise=fetch('ajax/news/?offset='+String(offset));
        promise.then(responce=>{
            return responce.text();
        }).then(text=>{
            add_news.innerHTML+=text;
        });


    }
});