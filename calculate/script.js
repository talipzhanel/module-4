let display = document.getElementById('display');

function clearDisplay() {
    display.innerText = '0';
}

function input(value) {
    if (display.innerText === '0') {
        display.innerText = value;
    } else {
        display.innerText += value;
    }
}

function calculate() {
    try {
        display.innerText = eval(display.innerText);
    } catch (e) {
        display.innerText = 'Error';
    }
}

function toggleSign() {
    if (display.innerText[0] === '-') {
        display.innerText = display.innerText.slice(1);
    } else {
        display.innerText = '-' + display.innerText;
    }
}
