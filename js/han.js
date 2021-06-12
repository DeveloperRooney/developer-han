// 드롭다운 메뉴 관련 함수 시작

function hamburger() {

    var dropdown = document.getElementById("dropdown");

    if (dropdown.style.display != "block") {
        dropdown.style.display = "block";
        dropdown.style.backgroundColor = "#125e98c2";
    }
    
    else{
        dropdown.style.display = "none";
    }
}

window.addEventListener('resize', function() {
    if(window.innerWidth >= "666") {
        dropdown.style.display = "none";
    }
}, true);


// 드롭다운 메뉴 관련 함수 끝


// 게시판 관련 함수 시작

function articleChange() {
    
    alert("테스트");
}