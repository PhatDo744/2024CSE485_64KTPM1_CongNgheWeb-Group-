<?php if (empty($news)): ?>
    <div class="alert alert-info">Không tìm thấy bài viết nào.</div>
<?php else: ?>
    <?php foreach ($news as $article): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($article['title']) ?></h5>
                <p class="card-text"><?= htmlspecialchars($article['content']) ?></p>
                <a href="detail.php?id=<?= $article['id'] ?>" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>