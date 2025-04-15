<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Register as BaseRegister;
use AbanoubNassem\FilamentGRecaptchaField\Forms\Components\GRecaptcha;

class Register extends BaseRegister
{
    public string $captcha = '';
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                        GRecaptcha::make('chaptcha')
                            ->label('Captcha')
                            ->required()
                            ->helperText(__('Verifikasi bahwa Anda bukan robot.'))
                    ])
                    ->statePath('data'),
            ),
        ];
    }
}
