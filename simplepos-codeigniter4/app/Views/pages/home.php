<?= $this->include('layout/header') ?>

<section class="hero">
    <p class="eyebrow">Point-of-Sale Starter</p>
    <h1>Manage your store in one simple place.</h1>
    <p class="lead">This first version provides quick access to customer and staff account records.</p>
    <div class="actions">
        <a class="button primary" href="<?= site_url('customers') ?>">View customers</a>
        <a class="button secondary" href="<?= site_url('users') ?>">View users</a>
    </div>
</section>

<section class="card-grid" aria-label="System sections">
    <article class="card">
        <h2>Customer Accounts</h2>
        <p>Review customer names, email addresses, and phone numbers.</p>
    </article>
    <article class="card">
        <h2>User Accounts</h2>
        <p>Review staff usernames, full names, and assigned roles.</p>
    </article>
</section>

<?= $this->include('layout/footer') ?>
