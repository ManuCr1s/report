let cleave = new Cleave('#ticket',{
    delimiter: '-',
    blocks: [2, 5, 5, 4, 2, 6, 1]
});

let onlyNumbers = ()=> {
    let keynum = window.event ? window.event.keyCode : e.which;
    if (keynum == 8) return true;
    return /\d/.test(String.fromCharCode(keynum));
}

let idticket = $('#ticket').on('keypress',onlyNumbers);
