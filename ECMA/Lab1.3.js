// Địa chỉ API
const apiEndpoint = 'https://5f2d045b8085690016922b50.mockapi.io/todo-list/posts';

// Sử dụng fetch để lấy dữ liệu
fetch(apiEndpoint)
    .then(response => {
        // Kiểm tra nếu yêu cầu thành công
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        // Chuyển đổi dữ liệu nhận được thành JSON
        return response.json();
    })
    .then(posts => {
        // Hiển thị dữ liệu
        for (let post of posts) {
            console.log(`ID: ${post.id}, Title: ${post.title}, Content: ${post.content}`);
        }
    })
    .catch(e => {
        // Hiển thị lỗi nếu có
        console.log('There was a problem with your fetch operation: ' + e.message);
    });
