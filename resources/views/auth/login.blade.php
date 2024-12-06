<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-lable for="email">Email Address</x-form-lable>

                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" required/>
                            <x-form-error name="email"/>
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-lable for="password">Password</x-form-lable>

                        <div class="mt-2">
                            <x-form-input name="password_confirmation" id="password_confirmation" type="password_confirmation" required/>
                            <x-form-error name="password_confirmation"/>
                        </div>
                    </x-form-field>

                </div>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
            <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>
