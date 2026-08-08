<x-layout>
    <x-page-heading>Login Page</x-page-heading>


    <x-forms.form method="POST" action="/login" enctype="multipart\form-data">
        <div>
            <x-forms.input label="Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
        </div>
        <x-forms.button>Log IN</x-forms.button>
    </x-forms.form>
</x-layout>
