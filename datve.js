var selectedProducts = [];
var totalPrice = 0;

function handleButtonClick(buttons) {
    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            var productName = this.textContent;
            var price = parseFloat(this.getAttribute("data-price"));

            // Kiểm tra xem sản phẩm đã được chọn hay chưa
            var index = selectedProducts.indexOf(productName);

            if (index === -1) {
                // Nếu sản phẩm chưa được chọn, thêm vào mảng selectedProducts và cộng vào tổng số tiền
                selectedProducts.push(productName);
                totalPrice += price;
            } else {
                // Nếu sản phẩm đã được chọn, loại bỏ khỏi mảng selectedProducts và trừ ra khỏi tổng số tiền
                selectedProducts.splice(index, 1);
                totalPrice -= price;
            }

            // Hiển thị nội dung các sản phẩm đã chọn
            var selectedProductsDiv = document.getElementById("selectedProducts");
            selectedProductsDiv.textContent = "Tên ghế: " + selectedProducts.join(", ");


            // Hiển thị tổng số tiền
            var totalPriceDiv = document.getElementById("totalPrice");
            totalPriceDiv.textContent = "Giá vé: " + totalPrice + ".000VND";
        });
    });
}

var buttons = document.querySelectorAll(".color-purple");
var buttonsss = document.querySelectorAll(".color-red");
var buttonss = document.querySelectorAll(".color-blu");

handleButtonClick(buttons);
handleButtonClick(buttonsss);
handleButtonClick(buttonss);


function addClickEvent(buttons) {
    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            // Kiểm tra xem nút có lớp "active" hay không
            var isActive = this.classList.contains("active");

            // Nếu nút không có lớp "active"
            if (!isActive) {
                // Thêm lớp "active" để nút trở thành màu vàng
                this.classList.add("active");
            } else {
                // Nếu nút đã có lớp "active", loại bỏ nó để nút trở về trạng thái ban đầu
                this.classList.remove("active");
            }
        });
    });
}

var buttons = document.querySelectorAll(".color-purple");
var buttonsss = document.querySelectorAll(".color-red");
var buttonss = document.querySelectorAll(".color-blu");

addClickEvent(buttons);
addClickEvent(buttonsss);
addClickEvent(buttonss);