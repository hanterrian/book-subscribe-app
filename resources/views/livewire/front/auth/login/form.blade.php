<div class="login_form">
    <form>
        <div class="form-group f-group">
            <label class="form-label f-label" for="loginEmail">Email</label>
            <input class="form-control f-control" id="loginEmail" type="text" wire:model="email"/>
        </div>
        <div class="form-group f-group">
            <label class="form-label f-label" for="loginPassword">Password</label>
            <input class="form-control f-control" id="loginPassword" type="password" wire:model="password"/>
        </div>

        <div class="flex justify-between items-center mb-6">
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input f-checkbox" id="loginRememberMe" wire:model="rememberMe">
                <label class="form-check-label" for="loginRememberMe">Remember me</label>
            </div>
            <a href="#!" class="f-link">Forgot password?</a>
        </div>
        <button type="submit" class="f-submit" wire:click="check" data-mdb-ripple="true" data-mdb-ripple-color="light">Sign in</button>
        <p class="text-gray-800 mt-6 text-center">Not a member? <a href="#!" class="f-link">Register</a>
        </p>
    </form>
</div>
