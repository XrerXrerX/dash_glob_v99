const promoGameItems = document.querySelectorAll('.game__item.game__promo');

promoGameItems.forEach(item => {
  const gameId = item.getAttribute('data-id');
  const image = item.querySelector('.gambargamenya');
  const loader = item.querySelector('.kurungload');

  image.addEventListener('load', () => {
    loader.style.display = 'none';
    image.style.display = 'block';
  });

  if (!image.complete) {
    loader.style.display = 'block';
    image.style.display = 'none';
  } else {
    loader.style.display = 'none';
    image.style.display = 'block';
  }
  
  setInterval(() => {
    if (image.complete) {
      loader.style.display = 'none';
      image.style.display = 'block';
    } else {
      loader.style.display = 'block';
      image.style.display = 'none';
    }
  }, 500);

});


var h3 = document.querySelector('.namagamedemo h3');
var div = document.querySelector('.namagamedemo');
if (h3.scrollWidth > div.clientWidth) {
  var text = h3.textContent;
  var newText = text.substr(0, 25);
  h3.textContent = newText + '...';
}

document.addEventListener("DOMContentLoaded", () => {
const text = document.querySelector(".namagamedemo h3");
const whiteLine = text.querySelector("::before");

// Simpan teks asli ke dalam sebuah variabel
const originalText = text.textContent;

const middle = originalText.length / 2;
const leftText = originalText.slice(0, middle);
const rightText = originalText.slice(middle);

text.innerHTML = `
<span class="left">${leftText}</span><span class="right">${rightText}</span>
`;

const left = text.querySelector(".left");
const right = text.querySelector(".right");

setTimeout(() => {
whiteLine.style.opacity = "1";
}, 1100);

setTimeout(() => {
text.style.opacity = "1";
left.style.transform = "scaleX(1)";
left.style.transformOrigin = "right";
right.style.transform = "scaleX(1)";
right.style.transformOrigin = "left";
}, 1600);

setTimeout(() => {
whiteLine.style.opacity = "0";
}, 2100);

const resetText = () => {
text.innerHTML = originalText;
};

setTimeout(() => {
resetText();
}, 3000);
});


var gameIni1 = document.querySelector('.gameterkait');

if (gameIni1) {
  if (gameIni1.classList.contains('pragmaticplay')) {
    document.querySelector('.grubgameterkait.pragmaticplay').style.display = 'grid';
  }
  if (gameIni1.classList.contains('jokergaming')) {
    document.querySelector('.grubgameterkait.jokergaming').style.display = 'grid';
  }
  if (gameIni1.classList.contains('habanero')) {
    document.querySelector('.grubgameterkait.habanero').style.display = 'grid';
  }
  if (gameIni1.classList.contains('microgaming')) {
    document.querySelector('.grubgameterkait.microgaming').style.display = 'grid';
  }
  if (gameIni1.classList.contains('relaxgaming')) {
    document.querySelector('.grubgameterkait.relaxgaming').style.display = 'grid';
  }
  if (gameIni1.classList.contains('playngo')) {
    document.querySelector('.grubgameterkait.playngo').style.display = 'grid';
  }
  if (gameIni1.classList.contains('playtech')) {
    document.querySelector('.grubgameterkait.playtech').style.display = 'grid';
  }
  if (gameIni1.classList.contains('spadegaming')) {
    document.querySelector('.grubgameterkait.spadegaming').style.display = 'grid';
  }
  if (gameIni1.classList.contains('pgsoft')) {
    document.querySelector('.grubgameterkait.pgsoft').style.display = 'grid';
  }
  if (gameIni1.classList.contains('toptrend')) {
    document.querySelector('.grubgameterkait.toptrend').style.display = 'grid';
  }
  if (gameIni1.classList.contains('redtiger')) {
    document.querySelector('.grubgameterkait.redtiger').style.display = 'grid';
  }
  if (gameIni1.classList.contains('netent')) {
    document.querySelector('.grubgameterkait.netent').style.display = 'grid';
  }
  if (gameIni1.classList.contains('genesis')) {
    document.querySelector('.grubgameterkait.genesis').style.display = 'grid';
  }
  if (gameIni1.classList.contains('bigtime')) {
    document.querySelector('.grubgameterkait.bigtime').style.display = 'grid';
  }
  if (gameIni1.classList.contains('bng')) {
    document.querySelector('.grubgameterkait.bng').style.display = 'grid';
  }
  if (gameIni1.classList.contains('gmw')) {
    document.querySelector('.grubgameterkait.gmw').style.display = 'grid';
  }
  if (gameIni1.classList.contains('idnslot')) {
    document.querySelector('.grubgameterkait.idnslot').style.display = 'grid';
  }
}



const gamedemoElements = document.querySelectorAll('.gamedemo');

for (let i = 0; i < gamedemoElements.length; i++) {
  const layardemoElement = gamedemoElements[i].querySelector('.layardemo');
  if (layardemoElement) {
    layardemoElement.style.display = 'none';
  }
  
  const demotidakadaElement = gamedemoElements[i].querySelector('.demotidakada');
  if (demotidakadaElement) {
    demotidakadaElement.style.display = 'none';
  }

  const framedemoElement = gamedemoElements[i].querySelector('.framedemo');

  if (framedemoElement && framedemoElement.src.includes('demokosong')) {
    if (layardemoElement) {
      layardemoElement.style.display = 'none';
    }
    
    if (demotidakadaElement) {
      demotidakadaElement.style.display = 'flex';
    }
  } else {
    if (layardemoElement) {
      layardemoElement.style.display = 'block';
    }
    
    if (demotidakadaElement) {
      demotidakadaElement.style.display = 'none';
    }
  }
}




const putardemoElements = document.querySelectorAll('.putardemo');

for (let i = 0; i < putardemoElements.length; i++) {
  const namaprovElement = putardemoElements[i].querySelector('.namaprov');
  const gambardemokosongElement = putardemoElements[i].querySelector('.gambardemokosong');
  
  if (namaprovElement && gambardemokosongElement) {
    let src = gambardemokosongElement.getAttribute('src');
    switch (namaprovElement.textContent) {
      case 'pragmaticplay':
        src = src.replace('img/game/slot/', 'img/game/slot/pp/');
        break;
      case 'jokergaming':
        src = src.replace('img/game/slot/', 'img/game/slot/jk/');
        break;
      case 'habanero':
        src = src.replace('img/game/slot/', 'img/game/slot/hb/');
        break;
      case 'microgaming':
        src = src.replace('img/game/slot/', 'img/game/slot/mc/');
        break;
      case 'relaxgaming':
        src = src.replace('img/game/slot/', 'img/game/slot/rg/');
        break;
      case 'playngo':
        src = src.replace('img/game/slot/', 'img/game/slot/plg/');
        break;
      case 'playtech':
        src = src.replace('img/game/slot/', 'img/game/slot/plt/');
        break;
      case 'spadegaming':
        src = src.replace('img/game/slot/', 'img/game/slot/sg/');
        break;
      case 'pgsoft':
        src = src.replace('img/game/slot/', 'img/game/slot/pg/');
        break;
      case 'toptrend':
        src = src.replace('img/game/slot/', 'img/game/slot/tt/');
        break;
      case 'redtiger':
        src = src.replace('img/game/slot/', 'img/game/slot/rt/');
        break;
      case 'netent':
        src = src.replace('img/game/slot/', 'img/game/slot/ne/');
        break;
      case 'bigtime':
        src = src.replace('img/game/slot/', 'img/game/slot/bt/');
        break;
      case 'genesis':
        src = src.replace('img/game/slot/', 'img/game/slot/gn/');
        break;
      case 'bng':
        src = src.replace('img/game/slot/', 'img/game/slot/bng/');
        break;
      case 'gmw':
        src = src.replace('img/game/slot/', 'img/game/slot/gmw/');
        break;
      case 'idnslot':
        src = src.replace('img/game/slot/', 'img/game/slot/idn/');
        break;
      default:
        break;
    }
    gambardemokosongElement.setAttribute('src', src);
  }
}



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



    const games = document.querySelectorAll('.game__item, .game__promo');

    games.forEach((game) => {
      const progressValue = Math.floor(Math.random() * (97 - 70 + 1)) + 70;
    const progressElement = game.querySelector('.progress-value');
    progressElement.setAttribute('data-progress', `${progressValue}%`);
    progressElement.style.setProperty('--progress-width', `${progressValue}%`);
    const progressCounter = game.querySelector('.progress-counter');
    progressCounter.setAttribute('data-target', `${progressValue}%`);
    });
    
    
        const counters = document.querySelectorAll('.progress-counter');
        
        function startCounter(counter) {
          const target = parseInt(counter.dataset.target);
          let count = 0;
          const interval = setInterval(() => {
            counter.innerText = count + '%';
            count++;
            if (count > target) {
              clearInterval(interval);
              counter.innerText = target + '%';
            }
          }, 10);
        }
        
        counters.forEach(counter => {
          startCounter(counter);
        });
                            
        


document.addEventListener('DOMContentLoaded', function () {
  const rowContent3 = document.querySelectorAll('.row__content__3');
  const spinn5 = document.querySelectorAll('.spinn5');
  const spinn8 = document.querySelectorAll('.spinn8');
  const spinn11 = document.querySelectorAll('.spinn11');
  const spinn12 = document.querySelectorAll('.spinn12');

  function randomBetween(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }

  function randomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  spinn5.forEach((element) => {
    element.textContent = randomBetween(10, 30);
  });

  spinn8.forEach((element) => {
    element.textContent = randomBetween(10, 30);
  });

  spinn11.forEach((element) => {
    element.textContent = randomFromArray([10, 25, 50, 100]);
  });

  spinn12.forEach((element) => {
    element.textContent = randomFromArray([10, 25, 50, 100]);
  });

  rowContent3.forEach((element) => {
    const spinn6 = element.querySelector('.spinn6');
    const spinn7 = element.querySelector('.spinn7');
    const dturbo1 = element.querySelector('.dturbo1');
    const dturbo2 = element.querySelector('.dturbo2');
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const spinn9 = element.querySelector('.spinn9');
    const spinn10 = element.querySelector('.spinn10');
    const pcepat1 = element.querySelector('.pcepat1');
    const pcepat2 = element.querySelector('.pcepat2');

    if (element.classList.contains('jk1')) {
      spinn6.textContent = randomFromArray([10, 25, 50]);
      spinn7.textContent = randomFromArray([10, 25, 50]);
      pla1.style.display = 'none';
      pla2.style.display = 'none';
    } else if (element.classList.contains('jk2')) {
      spinn6.textContent = randomFromArray([10, 20, 30, 40, 50, 60, 70]);
      spinn7.textContent = randomFromArray([10, 20, 30, 40, 50, 60, 70]);

      const turbo1Text = randomFromArray(['TURBO ON', 'TURBO OFF']);
      const turbo2Text = randomFromArray(['TURBO ON', 'TURBO OFF']);

      dturbo1.textContent = turbo1Text;
      dturbo2.textContent = turbo2Text;

      if (turbo1Text === 'TURBO ON') {
        pla1.classList.add('turboon');
      } else {
        pla1.classList.add('turbooff');
      }

      if (turbo2Text === 'TURBO ON') {
    pla2.classList.add('turboon');
    } else {
    pla2.classList.add('turbooff');
    }
    }
    if (spinn9) {
  spinn9.textContent = randomFromArray([10, 20, 30, 50]);
}

if (spinn10) {
  spinn10.textContent = randomFromArray([10, 20, 30, 50]);
}

if (element.classList.contains('mc1')) {
  const pcepat1Text = randomFromArray(['Putar Cepat OFF', 'Putar Cepat ON']);
  const pcepat2Text = randomFromArray(['Putar Cepat OFF', 'Putar Cepat ON']);

  pcepat1.textContent = pcepat1Text;
  pcepat2.textContent = pcepat2Text;

  if (pcepat1Text === 'Putar Cepat OFF') {
    pla1.classList.add('pcepatoff');
  } else {
    pla1.classList.add('pcepaton');
  }

  if (pcepat2Text === 'Putar Cepat OFF') {
    pla2.classList.add('pcepatoff');
  } else {
    pla2.classList.add('pcepaton');
  }
}
});
});



document.addEventListener('DOMContentLoaded', function () {
  const newRowContent3 = document.querySelectorAll('.row__content__3');
  const newSpinn13 = document.querySelectorAll('.spinn13');
  const newSpinn14 = document.querySelectorAll('.spinn14');

  function newRandomBetween(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
  }

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  newSpinn13.forEach((element) => {
    element.textContent = newRandomFromArray([10, 25, 50, 100]);
  });

  newSpinn14.forEach((element) => {
    element.textContent = newRandomFromArray([10, 25, 50, 100]);
  });

  newRowContent3.forEach((element) => {
    const newPla1 = element.querySelector('.pla1');
    const newPla2 = element.querySelector('.pla2');
    const newRgMode1 = element.querySelector('.rgmode1');
    const newRgMode2 = element.querySelector('.rgmode2');

    if (element.classList.contains('rg1')) {
      newPla1.style.display = 'none';
      newPla2.style.display = 'none';
    } else if (element.classList.contains('rg2')) {
      const mainCepat1Text = newRandomFromArray(['MAIN CEPAT ON', 'MAIN CEPAT OFF']);
      const mainCepat2Text = newRandomFromArray(['MAIN CEPAT ON', 'MAIN CEPAT OFF']);

      newRgMode1.textContent = mainCepat1Text;
      newRgMode2.textContent = mainCepat2Text;

      if (mainCepat1Text === 'MAIN CEPAT ON') {
        newPla1.classList.add('maincepaton');
      } else {
        newPla1.classList.add('maincepatoff');
      }

      if (mainCepat2Text === 'MAIN CEPAT ON') {
        newPla2.classList.add('maincepaton');
      } else {
        newPla2.classList.add('maincepatoff');
      }
    } else if (element.classList.contains('rg3')) {
      const turboText1 = newRandomFromArray(['TURBO ON', 'TURBO OFF']);
      const turboText2 = newRandomFromArray(['TURBO ON', 'TURBO OFF']);

      newRgMode1.textContent = turboText1;
      newRgMode2.textContent = turboText2;

      if (turboText1 === 'TURBO ON') {
        newPla1.classList.add('rgturboon');
      } else {
        newPla1.classList.add('rgturbooff');
      }

      if (turboText2 === 'TURBO ON') {
        newPla2.classList.add('rgturboon');
      } else {
        newPla2.classList.add('rgturbooff');
      }
    } else if (element.classList.contains('rg4')) {
      const kecepatanText1 = newRandomFromArray(['KECEPATAN 1', 'KECEPATAN 2', 'KECEPATAN 3']);
      const kecepatanText2 = newRandomFromArray(['KECEPATAN 1', 'KECEPATAN 2', 'KECEPATAN 3']);

      newRgMode1.textContent = kecepatanText1;
      newRgMode2.textContent = kecepatanText2;
      if (kecepatanText1 === 'KECEPATAN 1') {
    newPla1.classList.add('kecepatan1');
  } else if (kecepatanText1 === 'KECEPATAN 2') {
    newPla1.classList.add('kecepatan2');
  } else {
    newPla1.classList.add('kecepatan3');
  }

  if (kecepatanText2 === 'KECEPATAN 1') {
    newPla2.classList.add('kecepatan1');
  } else if (kecepatanText2 === 'KECEPATAN 2') {
    newPla2.classList.add('kecepatan2');
  } else {
    newPla2.classList.add('kecepatan3');
  }

  const randomKecepatan = newRandomFromArray(['KECEPATAN 1', 'KECEPATAN 2', 'KECEPATAN 3']);
  const rgMode1Text = newRgMode1.textContent;
  const rgMode2Text = newRgMode2.textContent;

  if (rgMode1Text === randomKecepatan) {
    newPla1.classList.add('kecepatan' + randomKecepatan.slice(-1));
  }

  if (rgMode2Text === randomKecepatan) {
    newPla2.classList.add('kecepatan' + randomKecepatan.slice(-1));
  }
}
});
});



document.addEventListener('DOMContentLoaded', function () {
  const newSpinn15 = document.querySelectorAll('.spinn15');
  const newSpinn16 = document.querySelectorAll('.spinn16');

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  newSpinn15.forEach((element) => {
    element.textContent = newRandomFromArray([10, 20, 50, 75, 100]);
  });

  newSpinn16.forEach((element) => {
    element.textContent = newRandomFromArray([10, 20, 50, 75, 100]);
  });

  const plgContent = document.querySelectorAll('.row__content__3.plg1');

  plgContent.forEach((element) => {
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const plgMode1 = element.querySelector('.plgmode1');
    const plgMode2 = element.querySelector('.plgmode2');

    const plgMode1Text = newRandomFromArray(['Permainan Cepat OFF', 'Permainan Cepat ON']);
    const plgMode2Text = newRandomFromArray(['Permainan Cepat OFF', 'Permainan Cepat ON']);

    plgMode1.textContent = plgMode1Text;
    plgMode2.textContent = plgMode2Text;

    if (plgMode1Text === 'Permainan Cepat OFF') {
      pla1.classList.add('plgcepatoff');
    } else {
      pla1.classList.add('plgcepaton');
    }

    if (plgMode2Text === 'Permainan Cepat OFF') {
      pla2.classList.add('plgcepatoff');
    } else {
      pla2.classList.add('plgcepaton');
    }
  });
});



  document.addEventListener('DOMContentLoaded', function() {
  function randomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  const plt1Values = [18, 28, 68, 88];
  const plt2Values = [10, 25, 50, 99];
  const plt3And4Values = [5, 10, 20, 50, 100];
  const turboModes = ['TURBO OFF', 'TURBO ON'];
  const speedModes = ['SPEED 1', 'SPEED 2', 'SPEED 3'];

  document.querySelectorAll('.row__content__3.plt1 .spinn17').forEach(elem => {
    elem.textContent = randomFromArray(plt1Values);
  });

  document.querySelectorAll('.row__content__3.plt1 .spinn18').forEach(elem => {
    elem.textContent = randomFromArray(plt1Values);
  });

  document.querySelectorAll('.row__content__3.plt2 .spinn17').forEach(elem => {
    elem.textContent = randomFromArray(plt2Values);
  });

  document.querySelectorAll('.row__content__3.plt2 .spinn18').forEach(elem => {
    elem.textContent = randomFromArray(plt2Values);
  });

  document.querySelectorAll('.row__content__3.plt3 .spinn17, .row__content__3.plt4 .spinn17').forEach(elem => {
    elem.textContent = randomFromArray(plt3And4Values);
  });

  document.querySelectorAll('.row__content__3.plt3 .spinn18, .row__content__3.plt4 .spinn18').forEach(elem => {
    elem.textContent = randomFromArray(plt3And4Values);
  });

  document.querySelectorAll('.row__content__3.plt1 .pltmode1, .row__content__3.plt2 .pltmode1, .row__content__3.plt3 .pltmode1').forEach(elem => {
    const turboMode = randomFromArray(turboModes);
    elem.textContent = turboMode;

    const pla1 = elem.closest('.row__content__3').querySelector('.pla1');
    pla1.classList.add(turboMode === 'TURBO OFF' ? 'pltturbooff' : 'pltturboon');
  });

  document.querySelectorAll('.row__content__3.plt1 .pltmode2, .row__content__3.plt2 .pltmode2, .row__content__3.plt3 .pltmode2').forEach(elem => {
    const turboMode = randomFromArray(turboModes);
    elem.textContent = turboMode;

    const pla2 = elem.closest('.row__content__3').querySelector('.pla2');
    pla2.classList.add(turboMode === 'TURBO OFF' ? 'pltturbooff' : 'pltturboon');
  });

  document.querySelectorAll('.row__content__3.plt4 .pltmode1').forEach(elem => {
    const speedMode = randomFromArray(speedModes);
    elem.textContent = speedMode;

    const pla1 = elem.closest('.row__content__3').querySelector('.pla1');
    pla1.classList.add(`pltspeed${speedMode.split(' ')[1]}`);
  });

  document.querySelectorAll('.row__content__3.plt4 .pltmode2').forEach(elem => {
    const speedMode = randomFromArray(speedModes);
    elem.textContent = speedMode;

    const pla2 = elem.closest('.row__content__3').querySelector('.pla2');
    pla2.classList.add(`pltspeed${speedMode.split(' ')[1]}`);
});
});



  document.addEventListener('DOMContentLoaded', function () {
  const newSpinn19 = document.querySelectorAll('.spinn19');
  const newSpinn20 = document.querySelectorAll('.spinn20');

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  newSpinn19.forEach((element) => {
    element.textContent = newRandomFromArray([10, 25, 50, 100]);
  });

  newSpinn20.forEach((element) => {
    element.textContent = newRandomFromArray([10, 25, 50, 100]);
  });

  const sgContent = document.querySelectorAll('.row__content__3.sg1');

  sgContent.forEach((element) => {
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const sgMode1 = element.querySelector('.sgmode1');
    const sgMode2 = element.querySelector('.sgmode2');

    const sgMode1Text = newRandomFromArray(['TURBO OFF', 'TURBO ON']);
    const sgMode2Text = newRandomFromArray(['TURBO OFF', 'TURBO ON']);

    sgMode1.textContent = sgMode1Text;
    sgMode2.textContent = sgMode2Text;

    if (sgMode1Text === 'TURBO OFF') {
      pla1.classList.add('sgturbooff');
    } else {
      pla1.classList.add('sgturboon');
    }

    if (sgMode2Text === 'TURBO OFF') {
      pla2.classList.add('sgturbooff');
    } else {
      pla2.classList.add('sgturboon');
    }
  });
});



  document.addEventListener('DOMContentLoaded', function () {
  const newSpinn21 = document.querySelectorAll('.spinn21');
  const newSpinn22 = document.querySelectorAll('.spinn22');

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  newSpinn21.forEach((element) => {
    element.textContent = newRandomFromArray([10, 30, 50, 80]);
  });

  newSpinn22.forEach((element) => {
    element.textContent = newRandomFromArray([10, 30, 50, 80]);
  });

  const pgContent = document.querySelectorAll('.row__content__3.pg1');

  pgContent.forEach((element) => {
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const pgMode1 = element.querySelector('.pgmode1');
    const pgMode2 = element.querySelector('.pgmode2');

    const pgMode1Text = newRandomFromArray(['TURBO OFF', 'TURBO ON']);
    const pgMode2Text = newRandomFromArray(['TURBO OFF', 'TURBO ON']);

    pgMode1.textContent = pgMode1Text;
    pgMode2.textContent = pgMode2Text;

    if (pgMode1Text === 'TURBO OFF') {
      pla1.classList.add('pgturbooff');
    } else {
      pla1.classList.add('pgturboon');
    }

    if (pgMode2Text === 'TURBO OFF') {
      pla2.classList.add('pgturbooff');
    } else {
      pla2.classList.add('pgturboon');
    }
  });
});



  document.addEventListener('DOMContentLoaded', function () {
  const newSpinn23 = document.querySelectorAll('.spinn23');
  const newSpinn24 = document.querySelectorAll('.spinn24');

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  newSpinn23.forEach((element) => {
    element.textContent = newRandomFromArray([10, 25, 50, 100]);
  });

  newSpinn24.forEach((element) => {
    element.textContent = newRandomFromArray([10, 25, 50, 100]);
  });

  const ttContent = document.querySelectorAll('.row__content__3.tt1');

  ttContent.forEach((element) => {
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const ttMode1 = element.querySelector('.ttmode1');
    const ttMode2 = element.querySelector('.ttmode2');

    const ttMode1Text = newRandomFromArray(['TURBO OFF', 'TURBO ON']);
    const ttMode2Text = newRandomFromArray(['TURBO OFF', 'TURBO ON']);

    ttMode1.textContent = ttMode1Text;
    ttMode2.textContent = ttMode2Text;

    if (ttMode1Text === 'TURBO OFF') {
      pla1.classList.add('ttturbooff');
    } else {
      pla1.classList.add('ttturboon');
    }

    if (ttMode2Text === 'TURBO OFF') {
      pla2.classList.add('ttturbooff');
    } else {
      pla2.classList.add('ttturboon');
    }
  });
});



  document.addEventListener('DOMContentLoaded', function () {
  const newSpinn25 = document.querySelectorAll('.spinn25');
  const newSpinn26 = document.querySelectorAll('.spinn26');

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  newSpinn25.forEach((element) => {
    element.textContent = newRandomFromArray([20, 50, 100]);
  });

  newSpinn26.forEach((element) => {
    element.textContent = newRandomFromArray([20, 50, 100]);
  });

  const rtContent = document.querySelectorAll('.row__content__3.rt1');

  rtContent.forEach((element) => {
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const rtMode1 = element.querySelector('.rtmode1');
    const rtMode2 = element.querySelector('.rtmode2');

    const rtMode1Text = newRandomFromArray(['TURBO OFF', 'TURBO ON']);
    const rtMode2Text = newRandomFromArray(['TURBO OFF', 'TURBO ON']);

    rtMode1.textContent = rtMode1Text;
    rtMode2.textContent = rtMode2Text;

    if (rtMode1Text === 'TURBO OFF') {
      pla1.classList.add('rtturbooff');
    } else {
      pla1.classList.add('rtturboon');
    }

    if (rtMode2Text === 'TURBO OFF') {
      pla2.classList.add('rtturbooff');
    } else {
      pla2.classList.add('rtturboon');
    }
  });
});



  document.addEventListener('DOMContentLoaded', function () {
  const newSpinn27 = document.querySelectorAll('.spinn27');
  const newSpinn28 = document.querySelectorAll('.spinn28');

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  newSpinn27.forEach((element) => {
    element.textContent = newRandomFromArray([10, 25, 50]);
  });

  newSpinn28.forEach((element) => {
    element.textContent = newRandomFromArray([10, 25, 50]);
  });

  const rtContent = document.querySelectorAll('.row__content__3.ne1');

  rtContent.forEach((element) => {
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const neMode1 = element.querySelector('.nemode1');
    const neMode2 = element.querySelector('.nemode2');

    const neMode1Text = newRandomFromArray(['Putar Cepat OFF', 'Putar Cepat ON']);
    const neMode2Text = newRandomFromArray(['Putar Cepat OFF', 'Putar Cepat ON']);

    neMode1.textContent = neMode1Text;
    neMode2.textContent = neMode2Text;

    if (neMode1Text === 'Putar Cepat OFF') {
      pla1.classList.add('nepcepatoff');
    } else {
      pla1.classList.add('nepcepaton');
    }

    if (neMode2Text === 'Putar Cepat OFF') {
      pla2.classList.add('nepcepatoff');
    } else {
      pla2.classList.add('nepcepaton');
    }
  });
});



  document.addEventListener('DOMContentLoaded', function () {
  const newSpinn31 = document.querySelectorAll('.spinn31');
  const newSpinn32 = document.querySelectorAll('.spinn32');

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  newSpinn31.forEach((element) => {
    element.textContent = newRandomFromArray([5, 10, 25, 50]);
  });

  newSpinn32.forEach((element) => {
    element.textContent = newRandomFromArray([5, 10, 25, 50]);
  });

  const bngContent = document.querySelectorAll('.row__content__3.bng1');

  bngContent.forEach((element) => {
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const bngMode1 = element.querySelector('.bngmode1');
    const bngMode2 = element.querySelector('.bngmode2');

    const bngMode1Text = newRandomFromArray(['Quick Spin OFF', 'Quick Spin ON']);
    const bngMode2Text = newRandomFromArray(['Quick Spin OFF', 'Quick Spin ON']);

    bngMode1.textContent = bngMode1Text;
    bngMode2.textContent = bngMode2Text;

    if (bngMode1Text === 'Quick Spin OFF') {
      pla1.classList.add('bngquickoff');
    } else {
      pla1.classList.add('bngquickon');
    }

    if (bngMode2Text === 'Quick Spin OFF') {
      pla2.classList.add('bngquickoff');
    } else {
      pla2.classList.add('bngquickon');
    }
  });
});



document.addEventListener('DOMContentLoaded', function () {
  const bts = document.querySelectorAll('.row__content__3.bt1');
  
  bts.forEach((bt) => {
    const spinn33 = bt.querySelector('.spinn33');
    const spinn34 = bt.querySelector('.spinn34');
    const btmode1 = bt.querySelector('.btmode1');
    const btmode2 = bt.querySelector('.btmode2');
    const pla1 = bt.querySelector('.pla1');
    const pla2 = bt.querySelector('.pla2');
    
    const randomNumber1 = [5, 10, 25, 50][Math.floor(Math.random() * 4)];
    spinn33.textContent = randomNumber1;
    btmode1.style.display = 'none';
    pla1.style.display = 'none';
    
    const randomNumber2 = [5, 10, 25, 50][Math.floor(Math.random() * 4)];
    spinn34.textContent = randomNumber2;
    btmode2.style.display = 'none';
    pla2.style.display = 'none';
  });
});



document.addEventListener('DOMContentLoaded', function () {
  const bts = document.querySelectorAll('.row__content__3.gmw1');
  
  bts.forEach((bt) => {
    const spinn35 = bt.querySelector('.spinn35');
    const spinn36 = bt.querySelector('.spinn36');
    const gmwmode1 = bt.querySelector('.gmwmode1');
    const gmwmode2 = bt.querySelector('.gmwmode2');
    const pla1 = bt.querySelector('.pla1');
    const pla2 = bt.querySelector('.pla2');
    
    const randomNumber1 = [5, 10, 25, 50][Math.floor(Math.random() * 4)];
    spinn35.textContent = randomNumber1;
    gmwmode1.style.display = 'none';
    pla1.style.display = 'none';
    
    const randomNumber2 = [5, 10, 25, 50][Math.floor(Math.random() * 4)];
    spinn36.textContent = randomNumber2;
    gmwmode2.style.display = 'none';
    pla2.style.display = 'none';
  });
});



  document.addEventListener('DOMContentLoaded', function() {
    const idn0 = document.querySelectorAll('.row__content__3.idn1');
    const idn1 = document.querySelectorAll('.row__content__3.idn1, .row__content__3.idn2, .row__content__3.idn3');
  const idn2 = document.querySelectorAll('.row__content__3.idn2');
  const idn3 = document.querySelectorAll('.row__content__3.idn3');

  function newRandomFromArray(arr) {
    return arr[Math.floor(Math.random() * arr.length)];
  }

  idn0.forEach((element) => {
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    const idnMode1 = element.querySelector('.idnmode1');
    const idnMode2 = element.querySelector('.idnmode2');
    pla1.style.display = 'none';
    pla2.style.display = 'none';
    idnMode1.style.display = 'none';
    idnMode2.style.display = 'none';
  });

  idn1.forEach((element) => {
    const randomNumber1 = newRandomFromArray([10, 25, 50, 75, 100]);
    const randomNumber2 = newRandomFromArray([10, 25, 50, 75, 100]);
    const spinn37Element = element.querySelector('.spinn37');
    const spinn38Element = element.querySelector('.spinn38');
    spinn37Element.textContent = randomNumber1;
    spinn38Element.textContent = randomNumber2;
  });

  idn2.forEach((element) => {
    const idnMode1 = element.querySelector('.idnmode1');
    const idnMode2 = element.querySelector('.idnmode2');
    const randomNumber1 = newRandomFromArray(['P. Cepat ON', 'P. Turbo ON', 'Cepat/Turbo OFF']);
    const randomNumber2 = newRandomFromArray(['P. Cepat ON', 'P. Turbo ON', 'Cepat/Turbo OFF']);
    idnMode1.textContent = randomNumber1;
    idnMode2.textContent = randomNumber2;
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    pla1.classList.remove('idncepaton', 'idnturboon', 'idncepatturbooff', 'idnspeedoff', 'idnspeed1', 'idnspeed2');
    pla2.classList.remove('idncepaton', 'idnturboon', 'idncepatturbooff', 'idnspeedoff', 'idnspeed1', 'idnspeed2');
    if (randomNumber1 === 'P. Cepat ON') {
      pla1.classList.add('idncepaton');
    } else if (randomNumber1 === 'P. Turbo ON') {
      pla1.classList.add('idnturboon');
    } else {
      pla1.classList.add('idncepatturbooff');
    }
    if (randomNumber2 === 'P. Cepat ON') {
      pla2.classList.add('idncepaton');
    } else if (randomNumber2 === 'P. Turbo ON') {
      pla2.classList.add('idnturboon');
    } else {
      pla2.classList.add('idncepatturbooff');
    }
  });

  idn3.forEach((element) => {
    const idnMode1 = element.querySelector('.idnmode1');
    const idnMode2 = element.querySelector('.idnmode2');
    const randomNumber1 = newRandomFromArray(['Speed OFF', 'Speed 1', 'Speed 2']);
    const randomNumber2 = newRandomFromArray(['Speed OFF', 'Speed 1', 'Speed 2']);
    idnMode1.textContent = randomNumber1;
    idnMode2.textContent = randomNumber2;
    const pla1 = element.querySelector('.pla1');
    const pla2 = element.querySelector('.pla2');
    pla1.classList.remove('idncepaton', 'idnturboon', 'idncepatturbooff', 'idnspeedoff', 'idnspeed1', 'idnspeed2');
    pla2.classList.remove('idncepaton', 'idnturboon', 'idncepatturbooff', 'idnspeedoff', 'idnspeed1', 'idnspeed2');
if (randomNumber1 === 'Speed OFF') {
pla1.classList.add('idnspeedoff');
} else if (randomNumber1 === 'Speed 1') {
pla1.classList.add('idnspeed1');
} else {
pla1.classList.add('idnspeed2');
}
if (randomNumber2 === 'Speed OFF') {
pla2.classList.add('idnspeedoff');
} else if (randomNumber2 === 'Speed 1') {
pla2.classList.add('idnspeed1');
} else {
pla2.classList.add('idnspeed2');
}
});
});



  function getRandomElement(arr) {
  return arr[Math.floor(Math.random() * arr.length)];
}

function updateSpinnAndIcon(rowContent, spinnClass, plaClass) {
  const spinn = rowContent.querySelector(`.${spinnClass}`);
  const icon = rowContent.querySelector(`.${plaClass}`);

  if (rowContent.classList.contains('gn1')) {
    const randomValue = getRandomElement([10, 25, 50, 100]);
    spinn.textContent = randomValue;
    icon.style.display = 'none';
  } else if (rowContent.classList.contains('gn2')) {
    const randomValue = getRandomElement([10, 25, 50, 100]);
    spinn.textContent = randomValue;

    const randomText = getRandomElement(['Quick Spin ON', 'Quick Spin OFF']);
    spinn.nextElementSibling.textContent = randomText;
    icon.classList.remove('gnquickoff', 'gnquickon');
    icon.classList.add(randomText === 'Quick Spin ON' ? 'gnquickon' : 'gnquickoff');
  } else if (rowContent.classList.contains('gn3')) {
    const randomValue = getRandomElement([10, 50, 100]);
    spinn.textContent = randomValue;

    const randomText = getRandomElement(['TURBO OFF', 'TURBO ON']);
    spinn.nextElementSibling.textContent = randomText;
    icon.classList.remove('gnturbooff', 'gnturboon');
    icon.classList.add(randomText === 'TURBO ON' ? 'gnturboon' : 'gnturbooff');
  } else if (rowContent.classList.contains('gn4')) {
    const randomValue = getRandomElement([5, 10, 25, 50]);
    spinn.textContent = randomValue;

    const randomText = getRandomElement(['TURBO X1', 'TURBO X1.5', 'TURBO X2', 'TURBO X3']);
    spinn.nextElementSibling.textContent = randomText;
    icon.classList.remove('gnturbox1', 'gnturbox15', 'gnturbox2', 'gnturbox3');
    const turboClass = 'gn' + randomText.replace(' ', '').replace('.', '').toLowerCase();
    icon.classList.add(turboClass);
  }
}

document.querySelectorAll('.row__content__3').forEach(rowContent => {
  updateSpinnAndIcon(rowContent, 'spinn29', 'pla1');
  updateSpinnAndIcon(rowContent, 'spinn30', 'pla2');
});




    document.addEventListener('DOMContentLoaded', function() {
    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function getRandomArrayElement(arr) {
        return arr[Math.floor(Math.random() * arr.length)];
    }

    function updateSpinn1() {
  const spinn1Elements = document.querySelectorAll('.spinn1');
  for (let i = 0; i < spinn1Elements.length; i++) {
    spinn1Elements[i].textContent = getRandomInt(10, 30);
  }
}

function updateSpinn4() {
  const spinn4Elements = document.querySelectorAll('.spinn4');
  for (let i = 0; i < spinn4Elements.length; i++) {
    spinn4Elements[i].textContent = getRandomInt(15, 40);
  }
}

function updateSpinn2() {
  const spinn2Elements = document.querySelectorAll('.spinn2');
  for (let i = 0; i < spinn2Elements.length; i++) {
    spinn2Elements[i].textContent = getRandomArrayElement([10, 20, 30, 50]);
  }
}

function updateSpinn3() {
  const spinn3Elements = document.querySelectorAll('.spinn3');
  for (let i = 0; i < spinn3Elements.length; i++) {
    spinn3Elements[i].textContent = getRandomArrayElement([10, 20, 30, 50]);
  }
}

function updatePolaa() {
  const patterns = ['✅ ❌ ✅', '✅ ❌ ❌', '❌ ✅ ✅', '❌ ✅ ❌', '❌ ❌ ✅', '❌ ❌ ❌'];
  const modalBodies = document.querySelectorAll('.modal-body-rtp');

  for (let i = 0; i < modalBodies.length; i++) {
    const pla1 = modalBodies[i].querySelector('.row__content__3 .pla1');
    const polaa1 = modalBodies[i].querySelector('.row__content__3 .polaa1');
    const pla2 = modalBodies[i].querySelector('.row__content__3 .pla2');
    const polaa2 = modalBodies[i].querySelector('.row__content__3 .polaa2');

    const pattern1 = getRandomArrayElement(patterns);
    polaa1.textContent = pattern1;
    pla1.className = 'fas fa-circle-info pla1';
    switch (pattern1) {
      case '✅ ❌ ✅':
        pla1.classList.add('vxv');
        break;
      case '✅ ❌ ❌':
        pla1.classList.add('vxx');
        break;
      case '❌ ✅ ✅':
        pla1.classList.add('xvv');
        break;
      case '❌ ✅ ❌':
        pla1.classList.add('xvx');
        break;
      case '❌ ❌ ✅':
        pla1.classList.add('xxv');
        break;
      case '❌ ❌ ❌':
        pla1.classList.add('xxx');
        break;
    }

    const pattern2 = getRandomArrayElement(patterns);
    polaa2.textContent = pattern2;
    pla2.className = 'fas fa-circle-info pla2';
    switch (pattern2) {
      case '✅ ❌ ✅':
        pla2.classList.add('vxv');
        break;
      case '✅ ❌ ❌':
        pla2.classList.add('vxx');
        break;
      case '❌ ✅ ✅':
        pla2.classList.add('xvv');
        break;
      case '❌ ✅ ❌':
        pla2.classList.add('xvx');
        break;
      case '❌ ❌ ✅':
        pla2.classList.add('xxv');
        break;
      case '❌ ❌ ❌':
        pla2.classList.add('xxx');
        break;
    }
  }
}

function updateDchange() {
  const dchange1Elements = document.querySelectorAll('.row__content__3.pp2 .dchange1');
  const dchange2Elements = document.querySelectorAll('.row__content__3.pp2 .dchange2');
  
  for (let i = 0; i < dchange1Elements.length; i++) {
    const isDCon = Math.floor(Math.random() * 2) === 1;
    dchange1Elements[i].textContent = isDCon ? 'DC ON' : 'DC OFF';
  }

  for (let i = 0; i < dchange2Elements.length; i++) {
    const isDCon = Math.floor(Math.random() * 2) === 1;
    dchange2Elements[i].textContent = isDCon ? 'DC ON' : 'DC OFF';
  }
}

    updateSpinn1();
    updateSpinn2();
    updateSpinn3();
    updateSpinn4();
    updateDchange();
    updatePolaa();

});




  function getRandomMinutes(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  function updateTime(timerContainer) {
    const tm2 = timerContainer.querySelector(".tm2");
    const future = moment().add(getRandomMinutes(15, 50), 'minutes');
    tm2.innerHTML = future.format("HH:mm");
    return future;
  }

  function alternateText(element) {
  if (element.textContent === "Waktu Habis") {
    setTimeout(() => {
      element.textContent = "Refresh RTP";
      element.classList.remove("fadewaktuhabis");
      alternateText(element);
    }, 2000);
  } else {
    setTimeout(() => {
      element.textContent = "Waktu Habis";
      element.classList.add("fadewaktuhabis");
      alternateText(element);
    }, 2000);
  }
}

let countdownInterval;

function updateCountdown(timerContainer, future) {
  const tm2Time = moment(future, "HH:mm");
  const tm3 = timerContainer.querySelector(".tm3");
  let now = moment();
  let countdownDuration = moment.duration(tm2Time.diff(now));
  let countdownString = moment.utc(countdownDuration.as('milliseconds')).format('HH:mm:ss');
  
  if (countdownString === "00:00:00" || countdownDuration.asMilliseconds() < 0) {
    clearInterval(countdownInterval);
    alternateText(tm3);
  } else {
    tm3.innerHTML = "(" + countdownString + ")";
  }
}

function initTimer(timerContainer) {
  const tm1 = timerContainer.querySelector(".tm1");
  tm1.innerHTML = moment().format("HH:mm");
  const future = updateTime(timerContainer);
  updateCountdown(timerContainer, future);
  countdownInterval = setInterval(() => updateCountdown(timerContainer, future), 1000);
}

document.addEventListener('DOMContentLoaded', function() {
  const timerContainers = document.querySelectorAll('.timer-container');
  timerContainers.forEach(initTimer);
});




  document.addEventListener('DOMContentLoaded', function () {
  const imgsl2List = document.querySelectorAll('.modal-box .imgsl2');
  const originalTextList = [];

  function typeWriter(element, text, duration) {
    let index = 0;
    let interval = duration / text.length;

    const type = () => {
      element.innerHTML += text[index];
      index++;

      if (index < text.length) {
        setTimeout(type, interval);
      }
    };

    type();
  }

  imgsl2List.forEach((imgsl2, i) => {
    const bubbletext = imgsl2.parentElement.querySelector('.bubbletext');
    if (bubbletext) {
      originalTextList[i] = bubbletext.textContent;
      imgsl2.addEventListener('animationend', () => {
        setTimeout(() => {
          bubbletext.style.display = 'block';
          bubbletext.textContent = '';
          typeWriter(bubbletext, originalTextList[i], 3000);
        }, 1000);
      });
    }
  });

  const observer = new MutationObserver(mutations => {
    mutations.forEach(mutation => {
      const addedNodes = Array.from(mutation.addedNodes);
      addedNodes.forEach(node => {
        if (node.nodeType === Node.ELEMENT_NODE) { 
          const bubbletextList = node.querySelectorAll('.bubbletext');
          bubbletextList.forEach((bubbletext, i) => {
            const imgsl2 = bubbletext.closest('.modal-box').querySelector('.imgsl2');
            if (imgsl2) {
              originalTextList.push(bubbletext.textContent);
              imgsl2.addEventListener('animationend', () => {
                // Tampilkan bubbletext setelah 1 detik
                setTimeout(() => {
                  bubbletext.style.display = 'block';
                  bubbletext.textContent = '';
                  typeWriter(bubbletext, originalTextList[i], 3000);
                }, 1000);
              });
            }
          });
        }
      });
    });
  });

  observer.observe(document.body, {
    childList: true,
    subtree: true
  });
});

