var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        1: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        // when window width is >= 640px
        991: {
          slidesPerView: 3,
          spaceBetween: 40
        },
        1200: {
          slidesPerView: 4,
          spaceBetween: 40
        }
      }
  });


  // start total price
let plus = document.getElementsByClassName("plus-plus")
let minus = document.getElementsByClassName("minus-minus")
console.log(plus)
console.log(minus)
for (let i = 0; i < plus.length; i++){
    var btnPlus = plus[i]
    btnPlus.addEventListener("click", function (event) {
      var btnClicked = event.target
      // console.log(btnClicked)
      var input = btnClicked.parentElement.children[2];
      // console.log(input)
      var inputValue = input.value;
      // console.log(inputValue)
      var newValue = parseInt(inputValue) + 1;
      console.log(++inputValue)
      var lastValue = input.setAttribute("value", "" + newValue);
      newValue = lastValue
    })
  }

for (let i = 0; i < minus.length; i++){
  var btnPlus = minus[i]
  btnPlus.addEventListener("click", function (event) {
    var btnClicked = event.target
    // console.log(btnClicked)
    var input = btnClicked.parentElement.children[2];
    // console.log(input)
    var inputValue = input.value;
    // console.log(inputValue)
    var newValue = parseInt(inputValue) - 1;
    // console.log(newValue)
    input.value = newValue
  })
}

// end total price



const tagContainer = document.querySelector('.tag-container');
const input = document.querySelector('.tag-container input');

let tags = [];

function createTag(label) {
const div = document.createElement('div');
div.setAttribute('class', 'tag');
const span = document.createElement('span');
span.innerHTML = label;
const closeIcon = document.createElement('i');
closeIcon.innerHTML = 'close';
closeIcon.setAttribute('class', 'material-icons');
closeIcon.setAttribute('data-item', label);
div.appendChild(span);
div.appendChild(closeIcon);
return div;
}

function clearTags() {
document.querySelectorAll('.tag').forEach(tag => {
  tag.parentElement.removeChild(tag);
});
}

function addTags() {
clearTags();
tags.slice().reverse().forEach(tag => {
  tagContainer.prepend(createTag(tag));
});
}

input.addEventListener('keyup', (e) => {
  if (e.key === 'Enter') {
    e.target.value.split(',').forEach(tag => {
      tags.push(tag);
    });

    addTags();
    input.value = '';
  }
});
document.addEventListener('click', (e) => {
console.log(e.target.tagName);
if (e.target.tagName === 'I') {
  const tagLabel = e.target.getAttribute('data-item');
  const index = tags.indexOf(tagLabel);
  tags = [...tags.slice(0, index), ...tags.slice(index+1)];
  addTags();
}
})

input.focus();


// // start total price
// let plus = document.querySelector(".plus-plus")
// let minus = document.querySelector(".minus-minus")

// let NUM = document.querySelector(".nums")

// let countInput =+ NUM.value;

// plus.onclick = function () {
//     if (countInput < 10) {
//         countInput += 1;
//     }

//     if (countInput <= 10) {
//         NUM.setAttribute('value','' + countInput) = countInput
//     } else {
//         console.log("done")
//     }
// }

// minus.onclick = function () {
//     if (countInput > 0) {
//         countInput -= 1;
//     }

//     if (countInput <= 10) {
//       NUM.value = " " + countInput
//     } else {
//         console.log("done")
//     }
// }

// // end total price




function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }

  function showPreview2(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-2-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }

  function showPreview3(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-3-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }

  function showPreview4(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-4-preview");
      preview.src = src;
      preview.style.display = "block";
    }
  }
