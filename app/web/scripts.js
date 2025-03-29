document.addEventListener('DOMContentLoaded', function() {
    const itemLog = document.getElementById('logModal');
    const itemReg = document.getElementById('regModal');

    const btnOpenLog = document.getElementById('logModalBtnOpen');
    const btnCloseLog = document.getElementById('logModalBtnClose');

    const btnOpenReg = document.getElementById('regModalBtnOpen');
    const btnCloseReg = document.getElementById('regModalBtnClose');

    btnOpenLog.onclick = function() {
        itemLog.style.display = 'block';
    }

    btnCloseLog.onclick = function() {
        itemLog.style.display = 'none';
    }

    btnOpenReg.onclick = function() {
        itemReg.style.display = 'block';
    }

    btnCloseReg.onclick = function() {
        itemReg.style.display = 'none';
    }
});