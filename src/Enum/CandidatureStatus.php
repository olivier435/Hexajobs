<?php

declare(strict_types=1);

namespace app\Enum;


enum CandidatureStatus: string
{
    case EN_ATTENTE = 'en_attente';
    case CONSULTEE = 'consultee';
    case RETENUE = 'retenue';
    case REFUSEE = 'refusee';

    public function label(): string
    {
        return match ($this) {
            self::EN_ATTENTE => 'En attente',
            self::CONSULTEE => 'consultee',
            self::RETENUE => 'Retenue',
            self::REFUSEE => 'Refusee',
        };
    }

    public function badgeClass(): string
    {
        return match ($this) {
            self::EN_ATTENTE => 'secondary',
            self::CONSULTEE => 'info',
            self::RETENUE => 'success',
            self::REFUSEE => 'danger',
        };
    }
    //finaliser candidature
    public function isFinal(): bool
    {
        return in_array($this, [self::RETENUE, self::REFUSEE], true);
    }
}
