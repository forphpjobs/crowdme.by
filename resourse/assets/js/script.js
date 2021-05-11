let gamburger=document.querySelector("div .gamburger_menu");


console.log(gamburger);

    gamburger.addEventListener('click',()=>{
        let header_two=document.querySelector(".header_two");
        header_two.classList.toggle('active_menu')
        gamburger.classList.toggle('span_active');
    });