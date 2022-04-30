// let minus = document.querySelector(".minus")
// let plus = document.querySelector(".plus")
// let exeption = document.querySelector(".exeption")

// let count = 0;
// plus.onclick = function () {
//     count += 1
//     if (exeption.innerHTML === '10') {
//         exeption.innerHTML = 10
//     } else {
//         exeption.innerHTML = count
//     }
//     console.log("test")

// }
// minus.onclick = function () {
//     count -= 1
//     if (exeption.innerHTML === '0') {
//         exeption.innerHTML = 0
//     } else {
//         exeption.innerHTML = count
//     }
//     console.log("test")
// }


let plus = document.querySelector(".plus")
let minus = document.querySelector(".minus")

let NUM = document.querySelector(".exeption")

let countInput = 0;

plus.onclick = function () {
    if (countInput < 10) {
        countInput += 1;
    }
    
    if (countInput <= 10) {
        NUM.innerHTML = " " + countInput
    } else {
        console.log("done")
    }
}

minus.onclick = function () {
    if (countInput > 0) {
        countInput -= 1;
    }
    
    if (countInput <= 10) {
        NUM.innerHTML = " " + countInput
    } else {
        console.log("done")
    }
}

// end input form