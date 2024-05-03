let currentIndex_DangChieu = 0;
let currentIndex_SapChieu = 0;
const phimDangChieu = document.querySelectorAll('.phim-dang-chieu ul li');
const phimSapChieu = document.querySelectorAll('.phim-sap-chieu ul li');

function chuyenAnhTruoc_DangChieu() {
    currentIndex_DangChieu = (currentIndex_DangChieu - 1 + phimDangChieu.length) % phimDangChieu.length;
    hienPhim_DangChieu();
}

function chuyenAnhSau_DangChieu() {
    currentIndex_DangChieu = (currentIndex_DangChieu + 1) % phimDangChieu.length;
    hienPhim_DangChieu();
}

function chuyenAnhTruoc_SapChieu() {
    currentIndex_SapChieu = (currentIndex_SapChieu - 1 + phimSapChieu.length) % phimSapChieu.length;
    hienPhim_SapChieu();
}

function chuyenAnhSau_SapChieu() {
    currentIndex_SapChieu = (currentIndex_SapChieu + 1) % phimSapChieu.length;
    hienPhim_SapChieu();
}

// Hàm hiển thị phim đang chiếu
function hienPhim_DangChieu() {
    for (let i = 0; i < phimDangChieu.length; i++) {
        phimDangChieu[i].style.display = 'none';
    }
    for (let i = 0; i < 4; i++) {
        phimDangChieu[(currentIndex_DangChieu + i) % phimDangChieu.length].style.display = 'block';
    }
}

// Hàm hiển thị phim sắp chiếu
function hienPhim_SapChieu() {
    for (let i = 0; i < phimSapChieu.length; i++) {
        phimSapChieu[i].style.display = 'none';
    }
    for (let i = 0; i < 4; i++) {
        phimSapChieu[(currentIndex_SapChieu + i) % phimSapChieu.length].style.display = 'block';
    }
}

// Thêm sự kiện onload để chỉ hiển thị 4 phim đầu tiên ban đầu
window.onload = function() {
    hienPhim_DangChieu();
    hienPhim_SapChieu();
};

let currentIndex = 0;

function chuyenAnhTruoc1() {
    const slides = document.querySelectorAll('.phim-dang-chieu ul li, .phim-sap-chieu ul li');
    if (currentIndex > 0) {
        slides[currentIndex].style.display = 'none';
        currentIndex--;
        slides[currentIndex].style.display = 'block';
    }
}

function chuyenAnhSau1() {
    const slides = document.querySelectorAll('.phim-dang-chieu ul li, .phim-sap-chieu ul li');
    if (currentIndex < slides.length - 1) {
        slides[currentIndex].style.display = 'none';
        currentIndex++;
        slides[currentIndex].style.display = 'block';
    }
}