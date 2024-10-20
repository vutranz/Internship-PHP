<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Thay đổi đường dẫn Font Awesome -->

</head>
<body>
    <div class="container mt-4">
        <h2>Book List</h2>
        <div class="mb-3">
            <a href="FormAddBook.tpl" class="btn btn-success">Thêm sách</a> <!-- Nút Thêm sách -->
        </div>
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN</th>
                    <th>Published Year</th>
                    <th>Price</th>
                    <th>Number of Pages</th>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$books item=book}
                <tr>
                   <td>
                        {foreach from=$book->getImages() item=image}
                            <img src="image/{$image}" alt="Book Image" style="width:80px; height:100px;"/> <!-- Hiển thị hình ảnh -->
                        {/foreach}
                    </td>

                    <td>{$book->getTitle()}</td>
                    <td>{$book->getAuthor()}</td>
                    <td>{$book->getIsbn()}</td>
                    <td>{$book->getPublishedYear()}</td>
                    <td>{$book->getPrice()}</td>
                    <td>{$book->getNumberOfPages()}</td>
                    <td>{$book->getCategory()->getName()}</td>
                    <td>
                        <a href="update.php?id={$book->getId()}" class="btn btn-primary btn-sm" title="Sửa">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
        
                        <form action="delete.php?id={$book->getId()}" method="post" style="display:inline;">
                            <input type="hidden" name="id" value="{$book->getId()}">
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?');" title="Xóa">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
