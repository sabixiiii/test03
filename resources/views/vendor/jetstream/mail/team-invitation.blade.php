@component('mail::message')
{{ __('您已被邀请加入 :team 团队！', ['team' => $invitation->team->name]) }}

@if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::registration()))
{{ __('如果您没有帐户，您可以点击下面的按钮创建一个。 创建帐户后，您可以点击本邮件中的接受邀请按钮接受团队邀请：') }}

@component('mail::button', ['url' => route('register')])
{{ __('创建帐户') }}
@endcomponent

{{ __('如果您已经有一个帐户，您可以通过单击下面的按钮接受此邀请：') }}

@else
{{ __('您可以通过单击下面的按钮接受此邀请：') }}
@endif


@component('mail::button', ['url' => $acceptUrl])
{{ __('接受邀请') }}
@endcomponent

{{ __('如果您不希望收到加入此团队的邀请，您可以丢弃此电子邮件。') }}
@endcomponent
