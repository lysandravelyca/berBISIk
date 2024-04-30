let progressBar = document.querySelector(".persen");
let valueContainer = document.querySelector(".value-percentage");

let progressValue = 0;
//end valuenya berarti berdasarkan tanggal kah?
let progressEndValue = 60;
let speed = 20;

let progress = setInterval(() => {
    progressValue++;

    valueContainer.textContent = `${progressValue}%`
    progressBar.style.background = `conic-gradient(#FF885E ${progressValue * 3.6}deg, #D9D9D9 0deg)`
    // progressBar.style.background = '#conic-gradient( #FF885E${progressValue * 3.6}deg, #D9D9D9 $progressValue * 3.6}deg';

    // console.log(progressValue);

    if(progressValue == progressEndValue){
        clearInterval(progress);
    }

}, speed);