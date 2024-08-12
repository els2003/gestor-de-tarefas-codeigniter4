<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col card p-5">
            
            <div class="mb-4">
                <h4 class="text-info"><?= $task->task_name ?></h4>
            </div>
            <hr>
            <div class="mb-4">
                <p class="opacity-50">Descrição:</p>
                <h4><?= $task->task_description ?></h4>
            </div>
            <div class="mb-4">
                <p class="opacity-50">Descrição:</p>
                <h4><?= STATUS_LIST[$task->task_status] ?></h4>
            </div>
            <div class="text-center">
                <a href="<?= site_url('/') ?>" class="btn btn-primary px-5">Voltar</a>
                <a href="<?= site_url('edit_task/' . encrypt($task->id)) ?>" class="btn btn-secondary px-5">Editar</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>