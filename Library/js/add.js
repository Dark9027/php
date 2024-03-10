function add(){
    let num=document.getElementById("number");
    let name=document.getElementById("name");
    let pub=document.getElementById("inputAddress1");
    let pic=document.getElementById("inputAddress");
    let date=document.getElementById("inputCity");
    let type=document.getElementById("inputState");
    if(name.value!="" && num.value!="" && pub.value!="" && pic.value!="" && date.value!="" && type.value!=""){
    alert("Book Entry Successfull");
    }
}

