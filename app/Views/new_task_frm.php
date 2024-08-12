<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3>Nova Tarefa</h3>
            <hr>
            <?= form_open('new_task_submit') ?>

            <div class="mb-3">
                <label for="" class="form-label">Nome da Tarefa</label>
                <input type="text" name="text_tarefa" class="form-control" placeholder="Nome da Tarefa" require value="<?= old('text_tarefa', '') ?>">
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Descrição da Tarefa</label><textarea name="text_descricao" class="form-control" rows="3"><?= old('text_descricao', '') ?></textarea>
            </div>

            <div class="text-center">
                <a href="<?= site_url('/') ?>" class="btn btn-primary px-5">Cancelar</a>
                <button type="submit" class="btn btn-secondary px-5">Salvar</button>
            </div>

            <?= form_close() ?>

            <?php if(!empty($validation_errors)): ?>
                <div class="alert alert-danger mt-3">
                    <?php foreach($validation_errors as $error) : ?>
                        <?= $error ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?= $this->endSection() ?>