let con=document.querySelector("#confirms")


con.onclick=function(){
    let code=document.getElementById("code")
    let name=document.getElementById("nm")
    let mail=document.getElementById("mail_id")
    let contact=document.getElementById("no")

    if(code.value=="" || name.value=="" || mail.value=="" || contact.value==""){
        alert("Fill out all the field")
    }
    else if(code.value=="12345654321"){
        // let a=contact.value.length;
    alert("Your LID and Password Send on register mail_ID Under 12 HRS\nAfter Verified by Management...!")
    // console.log(a);
    }
    else{
        alert("Wrong ADMIN CODE")
    }
}