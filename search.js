window.addEventListener('load', function() {
    var keywordFromStorage = sessionStorage.getItem('keyword');
    if (keywordFromStorage) {
        document.querySelector('.search').value = keywordFromStorage;
    }
    if (keywordFromStorage.trim() == '') {
        document.getElementById('searchButton').click();
    }
});
window.addEventListener('beforeunload', function() {
    sessionStorage.removeItem('keyword');
});
document.getElementById('searchButton').addEventListener('click', function(event) {
    var keyword = document.querySelector('.search').value.trim().toLowerCase();
    sessionStorage.setItem('keyword', keyword);
});