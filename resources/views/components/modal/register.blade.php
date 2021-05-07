<div id="modalRegister" class="modal modalLogin">
    <div class="modal-content">
        <div class="row rowOne">
            <a class="modal-close closeModal">
                x
            </a>
            <div class="col s12">
                <h1>
                    REGISTRATE
                </h1>
            </div>
            <div class="col s12 m6 l6">
                <a class="waves-effect btn_2 buttonChangeRegister active" id="normal">Usuario</a>
            </div>
            <div class="col s12 m6 l6">
                <a class="waves-effect btn_2 buttonChangeRegister" id="artista">Artista</a>
            </div>
            <form class="formRegister" action="" id="registerForm">
                <input type="hidden" id="typeRegister" name="typeRegister" value="normal">
                <div class="input-field col s12 input">
                    <input type="text" id="nameRegister" name="nameRegister" placeholder="Nombre...">
                </div>
                <div class="input-field col s12 input">
                    <input type="text" id="lastNameRegister" name="lastNameRegister" placeholder="Apellido...">
                </div>
                <div class="input-field col s12 input">
                    <input type="text" id="emailRegister" name="emailRegister" placeholder="Correo electrónico...">
                </div>
                <div class="input-field col s12 input">
                    <div class="input_eye input_eye_pass_1">
                        <img src="{{asset('img/eye_input.svg')}}" alt="">
                    </div>
                    <input type="password" id="passwordRegister" name="passwordRegister" placeholder="Contraseña...">
                </div>
                <div class="input-field col s12 input">
                    <div class="input_eye input_eye_pass_2">
                        <img src="{{asset('img/eye_input.svg')}}" alt="">
                    </div>
                    <input type="password" id="passwordRegister_2" name="passwordRegister_2" placeholder="Confirmar contraseña...">
                </div>
                <div class="col s12">
                    <p>
                        <label>
                            <input type="checkbox" id="termsRegister" class="filled-in"/>
                            <span>He leído y acepto los <span1 class="spanTerms">términos y condiciones y políticas de privacidad</span1>
                                de Carmona Virtual Gallery.</span>
                        </label>
                    </p>
                </div>
                <div class="col s12 button">
                    <a class="waves-effect btn btnFormRegister">Registrarse</a>
                </div>
            </form>
        </div>
    </div>
</div>
