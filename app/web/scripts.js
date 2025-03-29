document.addEventListener('DOMContentLoaded', function() {
    const item = document.getElementById('loginModal');
    const btnOpen = document.getElementById('loginModalOpen');
    const btnClose = document.getElementById('LoginModalClose');

    btnOpen.onclick = function() {
        item.style.display = 'block';
    }

    btnClose.onclick = function() {
        item.style.display = 'none';
    }
});