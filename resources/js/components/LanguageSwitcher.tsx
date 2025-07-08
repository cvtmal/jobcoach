import { Link } from '@inertiajs/react';
import { useTranslation } from '@/hooks/useTranslation';

interface LanguageSwitcherProps {
    variant?: 'light' | 'dark';
}

export default function LanguageSwitcher({ variant = 'dark' }: LanguageSwitcherProps) {
    const { t, locale, isLocale } = useTranslation();

    const baseClasses = 'text-sm font-medium transition-colors';
    const lightClasses = {
        active: 'text-gray-900 border-b border-gray-900',
        inactive: 'text-gray-600 hover:text-gray-900'
    };
    const darkClasses = {
        active: 'text-white border-b border-white',
        inactive: 'text-white/80 hover:text-white'
    };

    const classes = variant === 'light' ? lightClasses : darkClasses;
    const separatorClass = variant === 'light' ? 'text-gray-400' : 'text-white/60';

    return (
        <div className="flex items-center space-x-2">
            <Link
                href="/locale/de"
                className={`${baseClasses} ${
                    isLocale('de') ? classes.active : classes.inactive
                }`}
            >
                {t('common.german')}
            </Link>
            <span className={separatorClass}>|</span>
            <Link
                href="/locale/en"
                className={`${baseClasses} ${
                    isLocale('en') ? classes.active : classes.inactive
                }`}
            >
                {t('common.english')}
            </Link>
        </div>
    );
}