<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Author</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($posts as $post) : ?>
            <tr>
                <td><?= $post['id']; ?></td>
                <td>
                    <a href="<?= 'posts/' . $post['id']; ?>">
                        <?= $post['title']; ?>
                    </a>
                </td>
                <td><?= $post['title']; ?></td>
                <td><?= $post['content']; ?></td>
                <td><?= $post['author']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>