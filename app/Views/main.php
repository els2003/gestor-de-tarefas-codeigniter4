<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<section class="container mt-5">
    <div class="row">
        <div class="col">
            <!-- search bar -->
            <?= form_open('search') ?>
            <div class="b-3 d-flex align-items-center">
                <label class="me-3">Pesquisa:</label>
                <input type="text" name="text_search" class="form-control w-50 me-3">
                <button class="btn btn-secondary" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <?= form_close() ?>
        </div>

        <div class="col">

            <!-- status filter -->
            <div class="d-flex mb-3 align-items-center">
                <label class="me-3"></label>
                <select name="select_status" class="form-select">
                    <?php foreach (STATUS_LIST as $key => $value) : ?>
                        <option value="<?= $key ?>" <?= check_status($key, !empty($status) ? $status : '') ?>><?= $value ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>


        <div class="col text-end">
            <!-- new task button -->
            <a href="<?= site_url('new_task') ?>" class="btn btn-primary"><i class="fa-solid fa-plus me-2"></i>Nova Tarefa</a>
        </div>
    </div>
</section>

<?php if (count($tasks) > 0) : ?>
    <section class="container mt-3 mb-5">
        <div class="row">
            <div class="col">
                <h3>Tarefas</h3>
                <table class="table table-striped table-bordered" id="table_tasks">
                    <thead class="table-secondary">
                        <tr>
                            <th width="70%">Tarefas</th>
                            <th width="20%" class="text-center">Status</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tasks as $task) : ?>
                            <tr>
                                <td>
                                    <a href="<?= site_url('task_details/' . encrypt($task->id)) ?>" style="text-decoration:none;"><?= $task->task_name ?></a><br>
                                    <small class="opacity-25"><?= $task->task_description ?></small>
                                </td>
                                <td class="text-center"><?= STATUS_LIST[$task->task_status] ?></td>
                                <td class="text-end">
                                    <a href="<?= site_url('edit_task/' . encrypt($task->id)) ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-edit"></i></a>
                                    <a href="<?= site_url('delete_task/' . encrypt($task->id)) ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
<?php else : ?>
    <section class="container mt-3">
        <div class="row">
            <div class="col text-center">
                Não foram encontradas tarefas.
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- datatables -->
<script>
    $(document).ready(function() {
        $('#table_tasks').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)",
                "search": "Pesquisar:",
                "paginate": {
                    "first": "Primeiro",
                    "last": "Último",
                    "next": "Próximo",
                    "previous": "Anterior"
                },
            }
        });
    });

    // filter change
    document.querySelector('select[name="select_status"]').addEventListener('change', (e) => {
        console.log('teste');
        let status = e.target.value;
        window.location.href = `<?= site_url('filter') ?>/${status}`;
    })
</script>


<?= $this->endSection() ?>