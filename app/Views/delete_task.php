<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <h4 class="text-warning">Pretende eliminar a tarefa?</h4>
            <hr>

            <div class="mb-4">
                <p class="opacity-50">Nome da tarefa:</p>
                <h4><?= $task->task_name ?></h4>
            </div>

            <div class="mb-4">
                <p class="opacity-50">Descrição:</p>
                <h4><?= $task->task_description ?></h4>
            </div>

            <div class="mb-4">
                <p class="opacity-50">Status:</p>
                <h4><?= STATUS_LIST[$task->task_status] ?></h4>
            </div>

            <div class="text-center">
                <a href="<?= site_url('/') ?>" class="btn btn-primary px-5"><i class="fa-solid fa-ban me-2"></i>Cancelar</a>
                <a href="<?= site_url('delete_task_confirm/' . encrypt($task->id)) ?>" class="btn btn-secondary px-5"><i class="fa-solid fa-trash-can me-2"></i>Eliminar</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>