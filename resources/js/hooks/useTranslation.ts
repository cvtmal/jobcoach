import { usePage } from '@inertiajs/react';

interface PageProps {
    locale: string;
    translations: {
        [key: string]: any;
    };
}

export function useTranslation() {
    const { locale, translations } = usePage<PageProps>().props;

    const t = (key: string, parameters: Record<string, any> = {}): string => {
        const keys = key.split('.');
        let translation: any = translations;

        // Navigate through the nested translation object
        for (const k of keys) {
            translation = translation?.[k];
            if (translation === undefined) {
                console.warn(`Translation key "${key}" not found`);
                return key; // Return the key if translation is not found
            }
        }

        // If translation is not a string, return the key
        if (typeof translation !== 'string') {
            console.warn(`Translation for "${key}" is not a string`);
            return key;
        }

        // Replace parameters in the translation
        let result = translation;
        Object.entries(parameters).forEach(([param, value]) => {
            result = result.replace(new RegExp(`:${param}`, 'g'), String(value));
        });

        return result;
    };

    const currentLocale = (): string => locale;

    const isLocale = (targetLocale: string): boolean => locale === targetLocale;

    const getArray = (key: string): any[] => {
        const keys = key.split('.');
        let translation: any = translations;

        // Navigate through the nested translation object
        for (const k of keys) {
            translation = translation?.[k];
            if (translation === undefined) {
                console.warn(`Translation key "${key}" not found`);
                return [];
            }
        }

        // Return empty array if not an array
        if (!Array.isArray(translation)) {
            console.warn(`Translation for "${key}" is not an array`);
            return [];
        }

        return translation;
    };

    return {
        t,
        getArray,
        locale: currentLocale,
        isLocale,
        translations,
    };
}