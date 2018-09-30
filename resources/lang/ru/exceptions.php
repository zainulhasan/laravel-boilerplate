<?php
/**
 * @author Andrey "Limych" Khrolenok <andrey@khrolenok.ru>
 */

return [
    'general'      => 'Серверная ошибка',
    'unauthorized' => 'Недопустимое действие',

    'backend' => [
        'users' => [
            'create'                            => 'Ошибка создания пользователя',
            'update'                            => 'Ошибка обновления пользователя',
            'delete'                            => 'Ошибка удаления пользователя',
            'first_user_cannot_be_edited'       => 'Вы не можете редактировать супер-администратора',
            'first_user_cannot_be_disabled'     => 'Супер-администратор не может быть отключён',
            'first_user_cannot_be_destroyed'    => 'Супер-администратор не может быть удалён',
            'first_user_cannot_be_impersonated' => 'Супер-администратор не может быть изменён',
            'cannot_set_superior_roles'         => 'Вы не можете назначать роли, превосходящие ваши',
        ],

        'roles' => [
            'create' => 'Ошибка создания роли',
            'update' => 'Ошибка обновления роли',
            'delete' => 'Ошибка удаления роли',
        ],

        'metas' => [
            'create'        => 'Ошибка создания метаданных',
            'update'        => 'Ошибка обновления метаданных',
            'delete'        => 'Ошибка удаления метаданных',
            'already_exist' => 'Для этих языковых настроек уже есть метаданные',
        ],

        'form_submissions' => [
            'create' => 'Ошибка создания представления',
            'delete' => 'Ошибка удаления представления',
        ],

        'form_settings' => [
            'create'        => 'Ошибка создания настройки формы',
            'update'        => 'Ошибка обновления настройки формы',
            'delete'        => 'Ошибка удаления настройки формы',
            'already_exist' => 'Уже существует настройка, связанная с этой формой',
        ],

        'redirections' => [
            'create'        => 'Ошибка создания перенаправления',
            'update'        => 'Ошибка обновления перенаправления',
            'delete'        => 'Ошибка удаления перенаправления',
            'already_exist' => 'Для этого пути уже существует перенаправление',
        ],

        'posts' => [
            'create' => 'Ошибка создания статьи',
            'update' => 'Ошибка обновления статьи',
            'save'   => 'Ошибка сохранения статьи',
            'delete' => 'Ошибка удаления статьи',
        ],
    ],

    'frontend' => [
        'user' => [
            'email_taken'       => 'Этот адрес электронной почты уже используется.',
            'password_mismatch' => 'Это не ваш старый пароль.',
            'delete_account'    => 'Ошибка удаления аккаунта.',
            'updating_disabled' => 'Редактирование аккаунта отключено.',
        ],

        'auth' => [
            'registration_disabled' => 'Регистрация отключена.',
        ],
    ],
];
