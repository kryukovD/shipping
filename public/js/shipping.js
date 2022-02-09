
function makeActive(e) {
    const liAll = document.querySelectorAll("li")
    const inputCount = document.getElementById("count")
    const countWeight=document.getElementById("countWeight")
    liAll.forEach((item) => {
        item.classList.remove("text-primary")
    })
    e.classList.toggle("text-primary")
    if (e.classList.contains("text-primary")) {
        changeValueCount(e.innerText, inputCount)
    }
}
function changeValueCount(value, input) {
    input.value = value
}
window.addEventListener("load", (e) => {
    const calculateForm = document.getElementById("calculateForm")
    const inputCount = document.getElementById("count")
    const countWeight=document.getElementById("countWeight")
    calculateForm.addEventListener("submit", (event) => {
       event.preventDefault()
       const  request = new XMLHttpRequest(); 
       request.open('POST', "/calculate");
       request.setRequestHeader('X-CSRF-TOKEN', document.querySelector("meta[name='csrf-token']").getAttribute('content'));
       request.setRequestHeader('Content-Type', 'application/json');
       request.send(JSON.stringify({name:inputCount.value,weight:countWeight.value}));
       request.onreadystatechange = function () { 
        if (request.status==200){
            let response=request.responseText
            document.getElementById("result").innerText=`Итого ${response} р`
           
           }
           else{
            document.getElementById("result").innerHTML="<span class='text-danger'> Ошибка </span>"
           }
       }
   
        
    })
})

