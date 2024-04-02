<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-4">
                <div class="card-header">
                    Регистрация
                </div>
                <div class="card-body">
                    <form action="/auth/registerUser" method="POST">
                        <div class="form-group">
                            <label for="reg_email">Email</label>
                            <input type="email" class="form-control" id="reg_email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="reg_password">Password</label>
                            <input type="password" class="form-control" id="reg_password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Регистрация</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>