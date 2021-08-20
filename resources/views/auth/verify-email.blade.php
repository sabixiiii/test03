<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('感谢您的注册！ 在开始之前，您能否通过单击我们刚刚通过电子邮件发送给您的链接来验证您的电子邮件地址？ 如果您没有收到电子邮件，我们很乐意向您发送另一封电子邮件。') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('新的验证链接已发送到您在注册时提供的电子邮件地址。') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('重新发送验证电子邮件') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('退出登录') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
