const loadText = document.querySelector('.loading-text');
const section1 = document.querySelector('.section1');
const loadButton = document.querySelector('.container');

//Create a scale function for our Opacity between 2 objects
const scale = (num, in_min, in_max, out_min, out_max) => {
    return ((num - in_min) * (out_max - out_min)) / (in_max - in_min) + out_min
}

let load = 0;

let int = setInterval(blurring, 30);

function blurring() {
    load++

    if (load > 150) {
        clearInterval(int);
    }

    loadText.innerText = `${load}%`
    loadText.style.opacity = scale(load, 0, 100, 1, 0);
    //Sharingan Button Opacity due to Pecentage Text Increase
    loadButton.style.opacity = scale(load, 100, 150, 0, 1);

    section1.style.filter = `blur(${scale(load, 0, 100, 30, 0)}px)`
}
