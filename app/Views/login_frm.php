<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>

<!-- login form with bootstrap -->
<div class="d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6 col-10">
                <div class="card bg-light text-dark rounded-3 p-5">
                    
                    <?= form_open('login_submit',) ?>
                    <h3 class="text-center">Login</h3>
                    <hr>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="text_usuario" placeholder="Usuário" required value="<?= old('text_usuario', '') ?>">
                        <?= !empty($validation_errors['text_usuario']) ? '<p class="text-danger">'.$validation_errors['text_usuario'].'</p>' : '' ?>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="text_senha" placeholder="Senha" required value="<?= old('text_senha', '') ?>">
                        <?= !empty($validation_errors['text_senha']) ? '<p class="text-danger">'.$validation_errors['text_senha'].'</p>' : '' ?>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary w-100">Entrar</button>
                    </div>
                    <?= form_close() ?>

                    <?php if(!empty($login_error)) : ?>
                        <div class="alert alert-danger text-center p1">
                            <?= $login_error ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>