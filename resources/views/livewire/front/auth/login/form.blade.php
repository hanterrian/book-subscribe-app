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
        <input type="checkbox" wire:model="rememberMe"/>
        <button type="button" class="btn" wire:click="check">
            Login
        </button>
    </form>
</div>
