//валидизация на клиенте
//никнейм не может быть короче 3 букв
//почта должна иметь 1 символ, собаку, символ , точку и символ
//пароль должен иметь Одну заглавную, одну строчную и одну цифру



//^[\w]{3,22}$ - никнейм
//[\w]+@[\w.]+\.\w+  
//[?A-Z]+[a-z]+[0-9]+

// let reg_name = new RegExp('/[\w]/', 'i');
// let reg_mal = new RegExp('[\w]+@[\w.]+\.\w+');
// let reg_password = new RegExp('[?A-Z]+[a-z]+[0-9]+');

let name = document.querySelector("#name");
let email = document.querySelector("#mail");
// var match = reg_name.test(name.value);

let main_pass = document.getElementById("main_pass");
let dubl = document.getElementById("dubl");
let submit = document.querySelector("#sub");

submit.onclick = (e) => {
    
    if(main_pass.value == dubl.value){
        alert("все гуд проходите");
    }else{
        e.preventDefault();
        alert("введите одинаковые пароли");
        // console.log(name.value);
        // var match = reg_name.test(name.value);
        // console.log(match);
        // console.log(name.value);
    }
}


