<div id="modalLogin" class="modal modalLogin">
    <div class="modal-content">
        <div class="row rowOne">
            <a class="modal-close closeModal">
                x
            </a>
            <div class="col s12">
                <h1>
                    INICIA SESIÓN
                </h1>
            </div>
            <div class="col s12 m6 l6">
                <a class="waves-effect btn_2 buttonChangeLogin active" id="normal">Usuario</a>
            </div>
            <div class="col s12 m6 l6">
                <a class="waves-effect btn_2 buttonChangeLogin" id="artista">Artista</a>
            </div>
            <form class="formRegister" action="" id="formLogin">
                <input type="hidden" id="typeLogin" name="typeLogin" value="normal">
                <div class="input-field col s12 input">
                    <input type="text" id="user" name="user" placeholder="Correo eléctrónico...">
                </div>
                <div class="input-field col s12 input">
                    <input type="password" id="pass" name="pass" placeholder="Contraseña o código...">
                </div>
                <div class="col s12 button">
                    <a class="waves-effect btn btnFormLogin">Enviar</a>
                </div>
                <div class="col s12 input-field">
                    <a>
                        <h3 class="forgetPassword">
                            ¿Olvidaste tú contraseña?
                        </h3>
                    </a>
                    <a>
                        <h3 class="openRegister">
                            ¿No eres miembro aún?
                        </h3>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
