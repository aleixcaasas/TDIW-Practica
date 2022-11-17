<html>
    <section class = "login_register">
        <div class="universeregister" style="grid-area: registerGrid;">
            <form action="" method="post">
                <section class="register">
                    <h5>Formulario Registro</h5>

                    <label for="nom"><b>Nombre</b></label>
                    <input class="controls" type="text" name="nom" placeholder="Nombre" required>

                    <label for="cognom"><b>Apellidos</b></label>
                    <input class="controls" type="text" placeholder="Apellidos" name="cognom" required>

                    <label for="email"><b>Email</b></label>
                    <input class="controls" type="mail" name="email" placeholder="Correo Electronico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

                    <label for="password"><b>Password</b></label>
                    <input class="controls" type="password" name="password" placeholder="Constraseña" required>

                    <label for="direccio"><b>Direccion</b></label>
                    <input class="controls" type="text" placeholder="Dirección" name="direccio" maxlength="30" required>

                    <label for="ciutat"><b>Poblacion</b></label>
                    <input class="controls" type="text" placeholder="Población" name="ciutat" maxlength="30" required>

                    <label for="postal"><b>Codigo Postal</b></label>
                    <input class="controls" type="text" id="postal" placeholder="Codigo Postal" name="postal"  maxlength="5" required>

                    <button type="submit" class="buttons" >Sign Up</button>
                </section>

            </form>
        </div>

    </section>
</html>

