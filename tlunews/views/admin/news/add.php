<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
    <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Add News</h1>
        <form action="../../../index.php?controller=NewsController&action=add" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <input class="form-control" name="content" rows="5" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="image" accept="image/*">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category" required>
                    <option value="" disabled selected>Select a category</option>
                    <option value="1">Technology</option>
                    <option value="2">Health</option>
                    <option value="3">Sports</option>
                    <option value="4">Entertainment</option>
                    <option value="5">Education</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Add News</button>
        </form>
    </div>
</body>

</html>