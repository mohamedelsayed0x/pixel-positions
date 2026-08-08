<x-layout>
    <x-page-heading>Register</x-page-heading>


    <x-forms.form method="POST" action="/register" enctype="multipart\form-data">
        <div>
            <x-forms.input label="Name" name="name" />
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.input label="Password Confirmatio" name="password_confirmation" type="password" />

        </div>

        <x-forms.divider />

        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Name" name="logo" type="file" />

        <x-forms.button>Create Account</x-forms.button>

    </x-forms.form>


</x-layout>
