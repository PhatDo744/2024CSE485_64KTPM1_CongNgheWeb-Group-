<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Edit News</h1>
        <form action="edit_news.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="news_id" value="1"> 
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="Sample News Title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>Sample news content...</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id" required>
                    <option value="1" selected>Technology</option> 
                    <option value="2">Health</option>
                    <option value="3">Sports</option>
                    <option value="4">Entertainment</option>
                    <option value="5">Education</option>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Update News</button>
        </form>
    </div>
</body>
</html>
