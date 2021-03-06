<form action="{{ URL::to_admin('users/create') }}" id="create-form" class="form-horizontal" method="POST" accept-char="UTF-8">
    <input type="hidden" name="{{ Session::csrf_token }}" value="{{ Session::token() }}">
    
    <fieldset>
        <legend>Create New User</legend>
        <!-- First Name -->
        <div class="control-group">
            <label class="control-label" for="first_name">{{ Lang::line('platform/users::form.users.create.first_name') }}:</label>
            <div class="controls">
                <div class="input-append">
                    <input type="text" name="first_name" id="first_name" value="{{ Input::old('first_name') }}" placeholder="{{ Lang::line('platform/users::form.users.create.first_name') }}" required>
                    <span class="add-on"><i class="icon-user"></i></span>
                </div>
                    <span class="help-block">{{ Lang::line('platform/users::form.users.create.first_name_help') }}</span>
            </div>
        </div>

        <!-- Last Name -->
        <div class="control-group">
            <label class="control-label" for="last_name">{{ Lang::line('platform/users::form.users.create.last_name') }}:</label>
            <div class="controls">
                <div class="input-append">
                    <input type="text" name="last_name" id="last_name" value="{{ Input::old('last_name') }}" placeholder="{{ Lang::line('platform/users::form.users.create.last_name') }}" required>
                    <span class="add-on"><i class="icon-user"></i></span>
                </div>
                <span class="help-block">{{ Lang::line('platform/users::form.users.create.last_name_help') }}</span>
            </div>
        </div>

        <!-- Email Address -->
        <div class="control-group">
            <label class="control-label" for="email">{{ Lang::line('platform/users::form.users.create.email') }}:</label>
            <div class="controls">
                <div class="input-append">
                    <input type="email" name="email" id="email" value="{{ Input::old('email') }}" placeholder="{{ Lang::line('platform/users::form.users.create.email') }}" required>
                    <span class="add-on"><i class="icon-envelope"></i></span>
                </div>
                <span class="help-block">{{ Lang::line('platform/users::form.users.create.email_help') }}</span>
            </div>
        </div>

        <!-- Password -->
        <div class="control-group">
            <label class="control-label" for="password">{{ Lang::line('platform/users::form.users.create.password') }}:</label>
            <div class="controls">
                <div class="input-append">
                    <input type="password" name="password" id="password" placeholder="{{ Lang::line('platform/users::form.users.create.password') }}" required>
                    <span class="add-on"><i class="icon-key"></i></span>
                </div>
                <span class="help-block">Type your password.</span>
            </div>
        </div>

        <!-- Password Confirm -->
        <div class="control-group">
            <label class="control-label" for="password_confirmation">{{ Lang::line('platform/users::form.users.create.password_confirm') }}:</label>
            <div class="controls">
                <div class="input-append">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="{{ Lang::line('platform/users::form.users.create.password_confirm') }}" required>
                    <span class="add-on"><i class="icon-key"></i></span>
                </div>
                <span class="help-block">{{ Lang::line('platform/users::form.users.create.password_confirm_help') }}</span>
            </div>
        </div>

        <!-- Groups -->
        <div class="control-group">
            <label class="control-label" for="groups">{{ Lang::line('platform/users::form.users.create.groups') }}</label>
            <div class="controls">
                <select name="groups" id="groups" multiple required>
                    @foreach ($groups as $value => $name)
                        <option value="{{ $value }}">{{ $name }}</option>
                    @endforeach
                </select>
                <span class="help-block">{{ Lang::line('platform/users::form.users.create.groups_help') }}</span>
            </div>
        </div>

    </fieldset>

    <div class="form-actions">
        <a class="btn btn-large" href="{{ URL::to_admin('users') }}">{{ Lang::line('button.cancel') }}</a>
        <button class="btn btn-large btn-primary" type="submit">{{ Lang::line('button.create') }}</button>
    </div>
</form>
