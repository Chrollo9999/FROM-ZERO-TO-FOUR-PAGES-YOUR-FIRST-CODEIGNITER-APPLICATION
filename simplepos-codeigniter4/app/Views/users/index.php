<?= $this->include('layout/header') ?>

<section class="page-heading">
    <p class="eyebrow">Directory</p>
    <h1>User Accounts</h1>
    <p class="lead">Temporary staff records loaded from a static PHP array.</p>
</section>

<div class="table-card">
    <div class="table-scroll">
        <table>
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><span class="username"><?= esc($user['username']) ?></span></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><span class="badge"><?= esc($user['role']) ?></span></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->include('layout/footer') ?>
