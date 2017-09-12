<div class="field has-addons password-conrol">
    <div class="control is-grouped is-expanded">
        <input type="password" name="password" class="input is-large" placeholder="Password (optional)">
    </div>
    <div class="control">
        <button class="button is-primary is-large"
                :class="{ 'is-loading' : dropzoneProcessing }"
                onclick="document.querySelector('#form').submit()"
                :disabled="dropzoneProcessing">
            <span>{{ $label }}</span>
            @isset ($icon)
                <span class="icon is-small">
                    <i class="icon-{{ $icon }}"></i>
                </span>
            @endisset
        </button>
    </div>
</div>
