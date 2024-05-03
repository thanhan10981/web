// Function để cập nhật thời gian
function updateDateTime() {
    // Tạo một đối tượng Date mới, đại diện cho thời gian hiện tại
    var currentDate = new Date();

    // Tạo một mảng chứa các tên của các ngày trong tuần
    var daysOfWeek = ['Chủ Nhật', 'Thứ Hai', 'Thứ Ba', 'Thứ Tư', 'Thứ Năm', 'Thứ Sáu', 'Thứ Bảy'];

    // Lấy thông tin về thứ và các phần khác của ngày
    var dayOfWeek = daysOfWeek[currentDate.getDay()]; // Lấy tên của thứ
    var day = currentDate.getDate(); // Lấy ngày
    var month = currentDate.getMonth() + 1; // Lấy tháng (lưu ý: tháng bắt đầu từ 0)
    var year = currentDate.getFullYear(); // Lấy năm
    var hours = currentDate.getHours(); // Lấy giờ
    var minutes = currentDate.getMinutes(); // Lấy phút
    var seconds = currentDate.getSeconds(); // Lấy giây

    // Format lại để hiển thị dưới dạng thứ mấy, ngày, tháng, năm, giờ, phút, giây
    var formattedDateTime = dayOfWeek + ', ' + day + '/' + month + '/' + year + ' | ' + hours + ':' + (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;

    // Lấy phần tử HTML mà bạn muốn hiển thị thông tin thời gian
    var dateTimeElement = document.getElementById('DateTime');

    // Gán thông tin thời gian vào phần tử HTML
    dateTimeElement.innerHTML = formattedDateTime;
}

// Gọi function để cập nhật thời gian lần đầu tiên
updateDateTime();

// Sử dụng hàm setInterval để cập nhật thời gian mỗi giây
setInterval(updateDateTime, 1000);