const progressBar = document.getElementsByClassName
('Progress-bar')[0]
setInterval(() => {
const computedStyle = getComputedStyle(progressBar)
const width = parseFloat(computedStyle.getPropertyValue
('--width')) || 100
progressBar.style.setProperty('--width', width + .1)
}, 5)