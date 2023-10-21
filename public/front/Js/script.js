// carousel
var carousel = document.querySelector('.carousel');
var carouselItems = carousel.querySelector('.carousel-items');
var carouselControls = carousel.querySelector('.carousel-controls');
var carouselIndicators = carousel.querySelector('.carousel-indicators');
var carouselControlPrev = carousel.querySelector('.carousel-control.prev');
var carouselControlNext = carousel.querySelector('.carousel-control.next');
var carouselIndicatorCount = carouselItems.children.length;
var currentSlide = 0;
var interval;

function goToSlide(n) {
  currentSlide = (n + carouselIndicatorCount) % carouselIndicatorCount;
  var translateX = -currentSlide * 100 / carouselIndicatorCount;
  carouselItems.style.transform = 'translateX(' + translateX + '%)';
  updateNavigation();
}

function updateNavigation() {
  var carouselIndicators = carousel.querySelectorAll('.carousel-indicator');
  for (var i = 0; i < carouselIndicators.length; i++) {
    if (i === currentSlide) {
      carouselIndicators[i].classList.add('active');
    } else {
      carouselIndicators[i].classList.remove('active');
    }
  }
}

for (var i = 0; i < carouselIndicatorCount; i++) {
  var carouselIndicator =document.createElement('div');
  carouselIndicator.classList.add('carousel-indicator');
  carouselIndicator.addEventListener('click', function(n) {
    clearInterval(interval);
    return function() {
      goToSlide(n);
      interval = setInterval(function() {
        goToSlide(currentSlide + 1);
      }, 5000);
    };
  }(i));
  carouselIndicators.appendChild(carouselIndicator);
}

carouselControlPrev.addEventListener('click', function() {
  clearInterval(interval);
  goToSlide(currentSlide - 1);
  interval = setInterval(function() {
    goToSlide(currentSlide + 1);
  }, 10000);
});

carouselControlNext.addEventListener('click', function() {
  clearInterval(interval);
  goToSlide(currentSlide + 1);
  interval = setInterval(function() {
    goToSlide(currentSlide + 1);
  }, 10000);
});

interval = setInterval(function() {
  goToSlide(currentSlide + 1);
}, 10000);

// card list
const prevBtn = document.querySelector('.prevslot');
const nextBtn = document.querySelector('.nextslot');
const cardListSlot = document.querySelector('.card__list__slot');

let index = 0;
const slotWidth = 95; // width of each slot item including margin-right
let autoSlide = null;
let isAutoSlideRunning = false; // variable to check if the slider is running automatically

function moveNext() {
  if (index < cardListSlot.children.length - 5) {
    index++;
  } else {
    index = 0;
  }
  const maxTranslateX = -855; // nilai maksimum translateX yang diinginkan
  const translateX = -slotWidth * index; // nilai translateX saat ini
  cardListSlot.style.transform = `translateX(${translateX}px)`;
  if (translateX < maxTranslateX) {
    cardListSlot.style.transform = `translateX(0px)`; // kembali ke slide pertama
    index = 0; // reset nilai index
  }
}

function startAutoSlide() {
  isAutoSlideRunning = true; // set isAutoSlideRunning to true
  autoSlide = setInterval(() => {
    moveNext();
  }, 2000);
}

function stopAutoSlide() {
  isAutoSlideRunning = false; // set isAutoSlideRunning to false
  clearInterval(autoSlide);
}

nextBtn.addEventListener('click', () => {
  stopAutoSlide();
  moveNext();
  if (!isAutoSlideRunning) { // check if the slider is running automatically
    setTimeout(() => {
      startAutoSlide();
    }, 2000);
  }
});

prevBtn.addEventListener('click', () => {
  stopAutoSlide();
  if (index > 0) {
    index--;
  } else {
    index = cardListSlot.children.length - 5;
  }
  const translateX = -slotWidth * index; // nilai translateX saat ini
  cardListSlot.style.transform = `translateX(${translateX}px)`;
  if (!isAutoSlideRunning) { // check if the slider is running automatically
    setTimeout(() => {
      startAutoSlide();
    }, 2000);
  }
});

startAutoSlide();




// //modals
// const modalBtn = document.querySelector('#modal-btn');
// const closeBtn = document.querySelector('.close');

// // Events
// modalBtn.addEventListener('click', openModal);
// closeBtn.addEventListener('click', closeModal);
// window.addEventListener('click', outsideClick);

// // Open
// function openModal() {
//   const target = modalBtn.getAttribute('data-target');
//   const modal = document.querySelector(target);
//   modal.style.display = 'block';
// }

// // Close
// function closeModal() {
//   const target = modalBtn.getAttribute('data-target');
//   const modal = document.querySelector(target);
//   modal.style.display = 'none';
// }

// // Close If Outside Click
// function outsideClick(e) {
//   const target = modalBtn.getAttribute('data-target');
//   const modal = document.querySelector(target);
//   if (e.target == modal) {
//     modal.style.display = 'none';
//   }
// }


// Show the modal
function showModal() {
  modal.classList.add('fade-in');
}

$(".modal-trigger-rtp").click(function(e){
  e.preventDefault();
  dataModal = $(this).attr("data-modal");
  $("#" + dataModal).css({"display":"flex"});
  // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
});

$(".close-modal, .modal-sandbox").click(function(){
  $(".modal-rtp").css({"display":"none"});
  // tambahkan kode berikut
  originalTextList = [];
  const bubbletextList = document.querySelectorAll('.bubbletext');
  bubbletextList.forEach(bubbletext => {
    bubbletext.textContent = '';
  });
});

function copyToClipboard(input) {
  navigator.clipboard.writeText(input.value)
  .then(() => {
    console.log('Text copied to clipboard');
    Swal.fire({
      title: 'Link Alternatif di Copy!',
      icon: 'success',
      timer: 1000,
      timerProgressBar: true,
      showConfirmButton: false,
      titleFontSize: '8px'
    });
  })
  .catch((err) => {
    console.error('Failed to copy text: ', err);
  });
}

//POPUP BANNER RTP
function showPopup(popup) {
  // Set the popup style to "popup-show" after a 2 second delay
  setTimeout(() => {
    popup.style.animation = 'popup-show 3s ease forwards';
  }, 3000);
}

document.addEventListener('DOMContentLoaded', function() {
  const modalRTPs = document.querySelectorAll('.modal-rtp');

  modalRTPs.forEach(modalRTP => {
    const popup = modalRTP.querySelector('#popup');
    if (popup) {
      showPopup(popup);
    }
  });
});


// const popup = document.querySelector('#popup');

// function popupLoop() {
//   // Wait for 1 second before showing the popup
//   setTimeout(() => {
//     popup.style.animation = 'popup-show 2s ease forwards';
    
//     // Wait for 3 seconds before hiding the popup
//     setTimeout(() => {
//       popup.style.animation = 'popup-hide 3s ease forwards';
      
//       // Reset the popup to its original position after the hide animation is complete
//       popup.addEventListener('animationend', () => {
//         popup.style.animation = 'none';
//         popup.style.margin = '450px';
//         popupLoop();
//       }, {once: true});
//     }, 15000);
//   }, 1000);
// }

// // Start the popup loop
// popupLoop();
