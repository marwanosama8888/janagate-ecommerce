  // start total price
  let plus = document.querySelector(".plus-plus")
  let minus = document.querySelector(".minus-minus")

  let NUM = document.querySelector(".nums")

  let countInput =+ NUM.value;

  plus.onclick = function () {
      if (countInput < 10) {
          countInput += 1;
      }

      if (countInput <= 10) {
          NUM.value = countInput
      } else {
          console.log("done")
      }
  }

  minus.onclick = function () {
      if (countInput > 0) {
          countInput -= 1;
      }

      if (countInput <= 10) {
        NUM.value =  countInput
      } else {
          console.log("done")
      }
  }

  // end total price
