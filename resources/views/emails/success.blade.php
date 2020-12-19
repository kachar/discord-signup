@component('mail::message')

# Успешно свързване!

@component('mail::panel')
    Здравейте! Вие успяхте успешно да асоциирате своя Discord акаунт с тази електронна поща. В бъдеще на нея ще получавате мейли, съдържащи информация за прогреса на проекта.

    В таблицата по-долу ще откриете информацията, която съхранихме за Вас в нашата база данни.
@endcomponent

@component('mail::table')
|                                    |                                        |
| ---------------------------------- | --------------------------------------:|
| Nickname в нашия Discord сървър    | {{ $partnership['server_nickname'] }}  |
| Потребителско име в Discord        | {{ $partnership['discord_username'] }} |
| Роли, в които присъствате          | {{ $partnership['roles'] }}            |
| Кога Ви добавихме в нашата база?   | {{ $partnership['created_at'] }}       |
| Кога Вие свързахте своя имейл?     | {{ $partnership['updated_at'] }}       |
@endcomponent

@endcomponent
