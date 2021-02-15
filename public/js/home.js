window.onload = () => {
    const textArea = document.querySelector(".count-textarea");
    textArea.addEventListener('keyup', async () => {
        this.countWords(textArea.value)
        this.countCharsWithSpaces(textArea.value)
        this.countCharsWithOutSpaces(textArea.value)
        this.countParagraph(textArea.value)
        this.countSentences(textArea.value)

        this.showWordsDensity(textArea.value)
    })

    if (fromSearchers) {
        this.goToCountWords();
    }
}

function goToCountWords() {
    console.log('entra')
    const textArea = document.querySelector(".count-textarea");
    const y = textArea.getBoundingClientRect().top + window.pageYOffset - 80;
    textArea.focus();

    window.scrollTo({top: y, behavior: 'smooth'});
}

function countWords(str) {
    str = str.replace(/(^\s*)|(\s*$)/gi, "");
    str = str.replace(/[ ]{2,}/gi, " ");
    str = str.replace(/\n/g, " ");
    str = str.replace(/\n /, "\n");
    str = str.split(' ')
        .filter(function (n) {
            return n != ''
        });
    let numWords = document.getElementById('numWords');
    numWords.innerText = str.length.toString();
}

function countCharsWithSpaces(str) {
    let numCharsWithSpaces = document.getElementById('numCharsWithSpaces');
    numCharsWithSpaces.innerText = str.length.toString();
}

function countCharsWithOutSpaces(str) {
    str = str.replace(/(^\s*)|(\s*$)/gi, "");
    str = str.replace(/[ ]{2,}/gi, " ");
    str = str.replace(/\n/g, " ");
    str = str.replace(/\n /, "\n");
    str = str.split(' ')
        .filter(function (n) {
            return n != ''
        });
    str = str.join();
    str = str.replaceAll(',', '');
    let numCharsWithoutSpaces = document.getElementById('numCharsWithoutSpaces');
    numCharsWithoutSpaces.innerText = str.length.toString();
}

function countParagraph(str) {
    str = str.replace(/(^\s*)|(\s*$)/gi, "");
    str = str.replace(/[ ]{2,}/gi, "");
    str = str.replace(/\n/g, "\n");
    // str = str.replace(/\n /,"\n");
    str = str.split("\n")
        .filter((n, index) => {
            // if (typeof n[index - 1] !== 'undefined' && )
            // console.log(typeof n[index - 1] === 'undefined')
            // console.log(n == /\n /)
            return n != ''
        });
    let numParagraph = document.getElementById('numParagraph');
    numParagraph.innerText = str.length.toString();
}

function countSentences(str) {
    str = str.replace(/[!]{2,}/gi, "!");
    str = str.replace(/[?]{2,}/gi, "!");
    str = str.match(/[\w|][.?!](\s|$)/g)
    let numSentences = document.getElementById('numSentences');

    if (str) {
        numSentences.innerText = str.length.toString();
    } else {
        numSentences.innerText = '0';
    }

}

function showWordsDensity(str) {
    str = str.replace(/(^\s*)|(\s*$)/gi, "");
    str = str.replace(/[ ]{2,}/gi, " ");
    str = str.replace(/\n/g, " ");
    str = str.replace(/\n /, "\n");
    str = str.split(' ')
        .filter(function (n) {
            return n != ''
        });
    str = str.map((s) => s.toLowerCase())
    let compressed = compressArray(str);
    compressed = compressed.sort(compare);
    let wordsDensity = document.getElementById('wordsDensity');
    let wordsDensity1 = document.getElementById('wordsDensity1');
    let wordBlock1 = document.getElementById('word-block-1');
    let wordBlock2 = document.getElementById('word-block-2');
    let wordBlock3 = document.getElementById('word-block-3');
    let wordBlock4 = document.getElementById('word-block-4');
    let wordBlock5 = document.getElementById('word-block-5');
    let wordsDensity2 = document.getElementById('wordsDensity2');
    let wordBlock6 = document.getElementById('word-block-6');
    let wordBlock7 = document.getElementById('word-block-7');
    let wordBlock8 = document.getElementById('word-block-8');
    let wordBlock9 = document.getElementById('word-block-9');
    let wordBlock10 = document.getElementById('word-block-10');

    if (compressed.length === 0) {
        wordsDensity.classList.add('d-none')
        wordsDensity2.classList.add('d-none')

    }
    if (compressed.length === 1) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.add('d-none')
        wordBlock3.classList.add('d-none')
        wordBlock4.classList.add('d-none')
        wordBlock5.classList.add('d-none')
        wordsDensity2.classList.add('d-none')
    }
    if (compressed.length === 2) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.add('d-none')
        wordBlock4.classList.add('d-none')
        wordBlock5.classList.add('d-none')
        wordsDensity2.classList.add('d-none')
    }
    if (compressed.length === 3) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.remove('d-none')
        wordBlock3.querySelector('.num').innerText = compressed[2].count
        wordBlock3.querySelector('.label').innerText = compressed[2].value;
        wordBlock4.classList.add('d-none')
        wordBlock5.classList.add('d-none')
        wordsDensity2.classList.add('d-none')
    }
    if (compressed.length === 4) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.remove('d-none')
        wordBlock3.querySelector('.num').innerText = compressed[2].count
        wordBlock3.querySelector('.label').innerText = compressed[2].value;
        wordBlock4.classList.remove('d-none')
        wordBlock4.querySelector('.num').innerText = compressed[3].count
        wordBlock4.querySelector('.label').innerText = compressed[3].value;
        wordBlock5.classList.add('d-none')
        wordsDensity2.classList.add('d-none')
    }
    if (compressed.length === 5) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.remove('d-none')
        wordBlock3.querySelector('.num').innerText = compressed[2].count
        wordBlock3.querySelector('.label').innerText = compressed[2].value;
        wordBlock4.classList.remove('d-none')
        wordBlock4.querySelector('.num').innerText = compressed[3].count
        wordBlock4.querySelector('.label').innerText = compressed[3].value;
        wordBlock5.classList.remove('d-none')
        wordBlock5.querySelector('.num').innerText = compressed[4].count
        wordBlock5.querySelector('.label').innerText = compressed[4].value;
        wordsDensity2.classList.add('d-none')
    }
    if (compressed.length === 6) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.remove('d-none')
        wordBlock3.querySelector('.num').innerText = compressed[2].count
        wordBlock3.querySelector('.label').innerText = compressed[2].value;
        wordBlock4.classList.remove('d-none')
        wordBlock4.querySelector('.num').innerText = compressed[3].count
        wordBlock4.querySelector('.label').innerText = compressed[3].value;
        wordBlock5.classList.remove('d-none')
        wordBlock5.querySelector('.num').innerText = compressed[4].count
        wordBlock5.querySelector('.label').innerText = compressed[4].value;
        wordsDensity2.classList.remove('d-none')
        wordBlock6.classList.remove('d-none')
        wordBlock6.querySelector('.num').innerText = compressed[5].count
        wordBlock6.querySelector('.label').innerText = compressed[5].value;
        wordBlock7.classList.add('d-none')
        wordBlock8.classList.add('d-none')
        wordBlock9.classList.add('d-none')
        wordBlock10.classList.add('d-none')
    }
    if (compressed.length === 7) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.remove('d-none')
        wordBlock3.querySelector('.num').innerText = compressed[2].count
        wordBlock3.querySelector('.label').innerText = compressed[2].value;
        wordBlock4.classList.remove('d-none')
        wordBlock4.querySelector('.num').innerText = compressed[3].count
        wordBlock4.querySelector('.label').innerText = compressed[3].value;
        wordBlock5.classList.remove('d-none')
        wordBlock5.querySelector('.num').innerText = compressed[4].count
        wordBlock5.querySelector('.label').innerText = compressed[4].value;
        wordsDensity2.classList.remove('d-none')
        wordBlock6.classList.remove('d-none')
        wordBlock6.querySelector('.num').innerText = compressed[5].count
        wordBlock6.querySelector('.label').innerText = compressed[5].value;
        wordBlock7.classList.remove('d-none')
        wordBlock7.querySelector('.num').innerText = compressed[6].count
        wordBlock7.querySelector('.label').innerText = compressed[6].value;
        wordBlock8.classList.add('d-none')
        wordBlock9.classList.add('d-none')
        wordBlock10.classList.add('d-none')
    }
    if (compressed.length === 8) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.remove('d-none')
        wordBlock3.querySelector('.num').innerText = compressed[2].count
        wordBlock3.querySelector('.label').innerText = compressed[2].value;
        wordBlock4.classList.remove('d-none')
        wordBlock4.querySelector('.num').innerText = compressed[3].count
        wordBlock4.querySelector('.label').innerText = compressed[3].value;
        wordBlock5.classList.remove('d-none')
        wordBlock5.querySelector('.num').innerText = compressed[4].count
        wordBlock5.querySelector('.label').innerText = compressed[4].value;
        wordsDensity2.classList.remove('d-none')
        wordBlock6.classList.remove('d-none')
        wordBlock6.querySelector('.num').innerText = compressed[5].count
        wordBlock6.querySelector('.label').innerText = compressed[5].value;
        wordBlock7.classList.remove('d-none')
        wordBlock7.querySelector('.num').innerText = compressed[6].count
        wordBlock7.querySelector('.label').innerText = compressed[6].value;
        wordBlock8.classList.remove('d-none')
        wordBlock8.querySelector('.num').innerText = compressed[7].count
        wordBlock8.querySelector('.label').innerText = compressed[7].value;
        wordBlock9.classList.add('d-none')
        wordBlock10.classList.add('d-none')
    }
    if (compressed.length === 9) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.remove('d-none')
        wordBlock3.querySelector('.num').innerText = compressed[2].count
        wordBlock3.querySelector('.label').innerText = compressed[2].value;
        wordBlock4.classList.remove('d-none')
        wordBlock4.querySelector('.num').innerText = compressed[3].count
        wordBlock4.querySelector('.label').innerText = compressed[3].value;
        wordBlock5.classList.remove('d-none')
        wordBlock5.querySelector('.num').innerText = compressed[4].count
        wordBlock5.querySelector('.label').innerText = compressed[4].value;
        wordsDensity2.classList.remove('d-none')
        wordBlock6.classList.remove('d-none')
        wordBlock6.querySelector('.num').innerText = compressed[5].count
        wordBlock6.querySelector('.label').innerText = compressed[5].value;
        wordBlock7.classList.remove('d-none')
        wordBlock7.querySelector('.num').innerText = compressed[6].count
        wordBlock7.querySelector('.label').innerText = compressed[6].value;
        wordBlock8.classList.remove('d-none')
        wordBlock8.querySelector('.num').innerText = compressed[7].count
        wordBlock8.querySelector('.label').innerText = compressed[7].value;
        wordBlock9.classList.remove('d-none')
        wordBlock9.querySelector('.num').innerText = compressed[8].count
        wordBlock9.querySelector('.label').innerText = compressed[8].value;
        wordBlock10.classList.add('d-none')
    }
    if (compressed.length >= 10) {
        wordsDensity.classList.remove('d-none')
        wordsDensity1.classList.remove('d-none')
        wordBlock1.classList.remove('d-none')
        wordBlock1.querySelector('.num').innerText = compressed[0].count
        wordBlock1.querySelector('.label').innerText = compressed[0].value;
        wordBlock2.classList.remove('d-none')
        wordBlock2.querySelector('.num').innerText = compressed[1].count
        wordBlock2.querySelector('.label').innerText = compressed[1].value;
        wordBlock3.classList.remove('d-none')
        wordBlock3.querySelector('.num').innerText = compressed[2].count
        wordBlock3.querySelector('.label').innerText = compressed[2].value;
        wordBlock4.classList.remove('d-none')
        wordBlock4.querySelector('.num').innerText = compressed[3].count
        wordBlock4.querySelector('.label').innerText = compressed[3].value;
        wordBlock5.classList.remove('d-none')
        wordBlock5.querySelector('.num').innerText = compressed[4].count
        wordBlock5.querySelector('.label').innerText = compressed[4].value;
        wordsDensity2.classList.remove('d-none')
        wordBlock6.classList.remove('d-none')
        wordBlock6.querySelector('.num').innerText = compressed[5].count
        wordBlock6.querySelector('.label').innerText = compressed[5].value;
        wordBlock7.classList.remove('d-none')
        wordBlock7.querySelector('.num').innerText = compressed[6].count
        wordBlock7.querySelector('.label').innerText = compressed[6].value;
        wordBlock8.classList.remove('d-none')
        wordBlock8.querySelector('.num').innerText = compressed[7].count
        wordBlock8.querySelector('.label').innerText = compressed[7].value;
        wordBlock9.classList.remove('d-none')
        wordBlock9.querySelector('.num').innerText = compressed[8].count
        wordBlock9.querySelector('.label').innerText = compressed[8].value;
        wordBlock10.classList.remove('d-none')
        wordBlock10.querySelector('.num').innerText = compressed[9].count
        wordBlock10.querySelector('.label').innerText = compressed[9].value;
    }

    let numWords = document.getElementById('numWords');
}

function compressArray(original) {

    let compressed = [];
    // make a copy of the input array
    let copy = original.slice(0);

    // first loop goes over every element
    for (let i = 0; i < original.length; i++) {

        let myCount = 0;
        // loop over every element in the copy and see if it's the same
        for (let w = 0; w < copy.length; w++) {
            if (original[i] == copy[w]) {
                // increase amount of times duplicate is found
                myCount++;
                // sets item to undefined
                delete copy[w];
            }
        }

        if (myCount > 0) {
            let a = new Object();
            a.value = original[i];
            a.count = myCount;
            compressed.push(a);
        }
    }

    return compressed;
}

function compare(a, b) {
    if (a.count < b.count) {
        return 1;
    }
    if (a.count > b.count) {
        return -1;
    }
    return 0;
}

function clickTimer() {
    let startTime = 0
    let start = 0
    let end = 0
    let diff = 0
    let timerID = 0

    $('.timer').toggleClass("move");
    $('.timer-count').toggleClass("move");

    // timer.style.right = '100px';
    // let timerCount = document.querySelector('.timer-count')
    // timerCount.style.right = '0';
}

function chrono(){
    end = new Date()
    diff = end - start
    diff = new Date(diff)
    let msec = diff.getMilliseconds()
    let sec = diff.getSeconds()
    let min = diff.getMinutes()
    let hr = diff.getHours()-1
    if (min < 10){
        min = "0" + min
    }
    if (sec < 10){
        sec = "0" + sec
    }
    if(msec < 10){
        msec = "00" +msec
    }
    else if(msec < 100){
        msec = "0" +msec
    }
    document.getElementById("chronotime").innerHTML = hr + ":" + min + ":" + sec + ":" + msec
    timerID = setTimeout("chrono()", 10)
}

function chronoStart(){
    document.chronoForm.startstop.innerText = "Parar"
    document.chronoForm.startstop.onclick = chronoStop
    document.chronoForm.reset.onclick = chronoReset
    start = new Date()
    chrono()
}
function chronoContinue(){
    document.chronoForm.startstop.innerText = "Parar"
    document.chronoForm.startstop.onclick = chronoStop
    document.chronoForm.reset.onclick = chronoReset
    start = new Date()-diff
    start = new Date(start)
    chrono()
}
function chronoReset(){
    document.getElementById("chronotime").innerHTML = "0:00:00:000"
    start = new Date()
}
function chronoStopReset(){
    document.getElementById("chronotime").innerHTML = "0:00:00:000"
    document.chronoForm.startstop.onclick = chronoStart
}
function chronoStop(){
    document.chronoForm.startstop.innerText = "Iniciar"
    document.chronoForm.startstop.onclick = chronoContinue
    document.chronoForm.reset.onclick = chronoStopReset
    clearTimeout(timerID)
}
