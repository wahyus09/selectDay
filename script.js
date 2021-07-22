const select = document.querySelectorAll(".day")
    console.log(select)
select.forEach((selectday)=>{
    selectday.addEventListener("click",(event)=>{
        console.log(event.target.value)
        document.getElementsByClassName("selectDay")[0].innerHTML = event.target.value;
    })
})
