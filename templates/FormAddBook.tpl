<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thêm Sách</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Thêm Sách</h2>
        <form action="add-book.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Tiêu Đề</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="author">Tác Giả</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" required>
            </div>
            <div class="form-group">
                <label for="published_year">Năm Xuất Bản</label>
                <input type="text" class="form-control" id="published_year" name="published_year" required>
            </div>
            <div class="form-group">
                <label for="price">Giá</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="number_of_pages">Số Trang</label>
                <input type="text" class="form-control" id="number_of_pages" name="number_of_pages" required>
            </div>
            <div class="form-group">
                <label for="category">Danh Mục</label>
                <select class="form-control" id="category" name="category_id" required>
                    <option value="">Chọn Danh Mục</option>
                    {foreach from=$categories item=category}
                        <option value="{$category->getId()}">{$category->getName()}</option>
                    {/foreach}
                </select>
            </div>
            <div class="form-group">
                <label for="images">Hình Ảnh</label>
                <input type="file" class="form-control-file" id="images" name="images[]" multiple>
            </div>
            <button type="submit" class="btn btn-success">Thêm Sách</button>
            <a href="book-list.php" class="btn btn-secondary">Quay Lại</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
